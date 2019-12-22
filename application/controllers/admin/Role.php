<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		is_logged_in();
		$this->load->model("M_role", "role");
		$this->load->model("M_menu", "menu");
	}

	public function index()
	{
		$data['role'] = $this->role->getRole();
		$this->template->load('admin/_templates/master', 'admin/role/view', $data);

		if ($this->input->post('tambah')) {

			$this->role->addRole();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role berhasil ditambah.</div>');
			redirect(site_url('admin/role'));
		} else if ($this->input->post('edit')) {

			$this->role->editRole();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role berhasil diedit.</div>');
			redirect(site_url('admin/role'));
		}
	}
	public function del($id)
	{
		$this->role->deleteRole($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role berhasil dihapus.</div>');
		redirect(site_url('admin/role'));
	}

	public function roleAccess($id = null)
	{
		if (!isset($id)) $this->template->load('admin/_templates/master', 'admin/404');
		$data['menus'] = $this->menu->userMenus();
		$data['role'] = $this->role->getRoleByid($id);
		$this->template->load('admin/_templates/master', 'admin/role/role-access/view', $data);
	}
}

/* End of file Role.php */