<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		is_logged_in();

		$this->load->model("M_product", "product");
	}

	public function index()
	{
		$data['product'] = $this->product->getProducts();
		$this->template->load('admin/_templates/master', 'admin/product/view', $data);
	}

	public function add()
	{

		// set form validasi tambah
		$this->form_validation->set_rules($this->product->rulesAdd());

		// jika form validasi benar
		if ($this->form_validation->run() === TRUE) {
			// return model user (addUser)

			$this->product->addProduct();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Product berhasil ditambah.</div>');
			redirect(site_url('admin/product'));
		}

		// Jika validasi gagal/salah
		else {
			// Tampil form tambah user
			$data['category'] = $this->product->getCategories();
			$this->template->load('admin/_templates/master', 'admin/product/add', $data);
		}
	}

	public function del($id)
	{
		$this->product->deleteProduct($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Product berhasil dihapus.</div>');
		redirect(site_url('admin/product'));
	}

	public function edit($id)
	{
		$data['product'] = $this->product->getProductByid($id);
		// set form validasi tambah
		$this->form_validation->set_rules($this->product->rulesAdd());

		// jika form validasi benar
		if ($this->form_validation->run() === TRUE) {
			// return model user (addUser)
			$this->product->editProduct($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Product berhasil diupdate.</div>');
			redirect(site_url('admin/product'));
		}

		// Jika validasi gagal/salah
		else {
			// Tampil form tambah user
			$data['category'] = $this->product->getCategories();
			$this->template->load('admin/_templates/master', 'admin/product/edit', $data);
		}
	}

	/** Kategori */

	public function cat()
	{
		$data['category'] = $this->product->getCategories();
		$this->template->load('admin/_templates/master', 'admin/product/category/view', $data);
		if ($this->input->post('submit') == 'addCat') {
			$this->product->addCategory();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil ditambah.</div>');
			redirect(site_url('admin/product/cat'));
		} else if ($this->input->post('submit') == 'editCat') {
			$this->product->editCategory();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil diedit.</div>');
			redirect(site_url('admin/product/cat'));
		}
	}

	public function delcat($id)
	{
		$this->product->deleteCategory($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil ditambah.</div>');
		redirect(site_url('admin/product/cat'));
	}
}

/* End of file Product.php */