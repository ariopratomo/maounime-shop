<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here

        is_logged_in();

        // Load model user
        $this->load->model("M_users", "user");
        $this->load->model("M_menu", "menu");
    }


    public function index()
    {
        // tampil data menu
        $data['menus'] = $this->menu->userMenus();

        $this->template->load('admin/_templates/master', 'admin/menu/view', $data);

        if ($this->input->post('tambah')) {

            $this->menu->addMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambah.</div>');
            redirect(site_url('admin/menu'));
        } else if ($this->input->post('edit')) {

            $this->menu->editMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil diedit.</div>');
            redirect(site_url('admin/menu'));
        }
    }

    // Hapus menu
    public function del($id)
    {
        $this->menu->deleteMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus.</div>');
        redirect(site_url('admin/menu'));
    }


    // Ajax change status menu
    public function statuschange()
    {
        $menu_id = $this->input->post('menuId');
        $data['menus'] = $this->menu->userMenus();

        $result = $this->db->get_where('user_menus', ['id' => $menu_id])->row();
        if ($result->is_active < 1) {
            $data = ['is_active' => 1];
            $this->db->where('id', $menu_id);
            $this->db->update('user_menus', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah.</div>');
        } else {
            $data = ['is_active' => 0];
            $this->db->where('id', $menu_id);
            $this->db->update('user_menus', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah.</div>');
        }
    }

    // Submenu
    public function submenu()
    {
        // tampil data submenu

        $data['submenus'] = $this->menu->userSubMenus();
        $data['menus'] = $this->db->order_by('menu', 'asc')->get('user_menus',)->result();

        $this->template->load('admin/_templates/master', 'admin/menu/submenu/view', $data);

        if ($this->input->post('tambah')) {

            $this->menu->addMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambah.</div>');
            redirect(site_url('admin/menu'));
        } else if ($this->input->post('edit')) {

            $this->menu->editMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil diedit.</div>');
            redirect(site_url('admin/menu'));
        }
    }

    // Ajax change status submenu
    public function submenustatuschange()
    {
        $submenu_id = $this->input->post('subMenuId');
        $data['submenus'] = $this->menu->userSubMenus();


        $result = $this->db->get_where('users_sub_menu', ['id' => $submenu_id])->row();
        if ($result->is_active < 1) {
            $data = ['is_active' => 1];
            $this->db->where('id', $submenu_id);
            $this->db->update('users_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah.</div>');
        } else {
            $data = ['is_active' => 0];
            $this->db->where('id', $submenu_id);
            $this->db->update('users_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah.</div>');
        }
    }
}

/* End of file Menu.php */