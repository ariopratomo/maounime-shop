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
			// $data['role'] = $this->user->getRole();
			$this->template->load('admin/_templates/master', 'admin/product/add');
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
			// $data['role'] = $this->user->getRole();
			$this->template->load('admin/_templates/master', 'admin/product/edit', $data);
		}
	}

	/** Kategori */

	public function cat()
	{

		if (isset($_GET['page'])) {

			$page = $_GET['page'];

			switch ($page) {
				case 'add':
					$this->_addCategory();

					break;
				case 'edit':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						// $this->_edit($id);
					} else {
						$this->template->load('admin/_templates/master', 'admin/404');
					}
					break;
				case 'delete':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						// $this->_delete($id);
					} else {
						$this->template->load('admin/_templates/master', 'admin/404');
					}
					break;
				default:
					$this->template->load('admin/_templates/master', 'admin/404');
					break;
			}
		} else {
			$data['category'] = $this->product->getCategories();
			$this->template->load('admin/_templates/master', 'admin/product/category/view', $data);
		}
	}

	private function _addCategory()
	{
		// set form validasi tambah
		$this->form_validation->set_rules($this->product->addCatRules());

		// jika form validasi benar
		if ($this->form_validation->run() === TRUE) {
			// return model user (addUser)
			$this->product->addCategory();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil ditambah.</div>');
			redirect(site_url('admin/produk/cat'));
		}

		// Jika validasi gagal/salah
		else {
			$this->template->load('admin/_templates/master', 'admin/product/category/add');
		}
	}
}

/* End of file Product.php */