<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{

	const table = 'products';
	const categories = 'categories';
	public function rulesAdd()
	{
		return [
			[
				'field' => 'name_product',
				'label' => 'Nama Produk',
				'rules' => 'required',
			],
			[
				'field' => 'stock_product',
				'label' => 'Stock Produk',
				'rules' => 'required',
			],
			[
				'field' => 'weight_product',
				'label' => 'Berat Produk',
				'rules' => 'required',
			],
			// [
			// 	'field' => 'id_category',
			// 	'label' => 'Kategori',
			// 	'rules' => 'required',
			// ],
			[
				'field' => 'first_price',
				'label' => 'Harga Awal',
				'rules' => 'required',
			],
			[
				'field' => 'discount',
				'label' => 'Diskon',
				'rules' => 'required',
			],
			[
				'field' => 'last_price',
				'label' => 'Harga Akhir',
				'rules' => 'required',
			],
			[
				'field' => 'desc_product',
				'label' => 'Deskripsi Produk',
				'rules' => 'required',
			],

		];
	}

	public function getProducts()
	{
		$this->db->join(self::categories, self::categories . '.id_category = ' . self::table . '.id_category', 'left');

		return $this->db->get(self::table)->result();
	}
	public function getProductByid($id)
	{

		return $this->db->get_where(self::table, ['id_product' => $id])->row();
	}

	public function addProduct()
	{
		$data = [
			'id_category' => 1,
			'name_product' => $this->input->post('name_product'),
			'desc_product' => $this->input->post('desc_product'),
			'stock_product' => $this->input->post('stock_product'),
			'weight_product' => $this->input->post('weight_product'),
			'first_price' => $this->input->post('first_price'),
			'discount' => $this->input->post('discount'),
			'last_price' => $this->input->post('last_price'),
			'desc_product' => $this->input->post('desc_product'),
			'created_at' => time(),
			'updated_at' => time()
		];
		$upload_image = !empty($_FILES['image']['name']);

		if ($upload_image) {

			$config['upload_path']   = './assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name']     =  strtolower(url_title($this->input->post('name_product'))) . "_" . date('Y', time());
			$config['overwrite']     = true;
			$config['max_size']      = '2048';
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')) {
				$error = $this->upload->display_errors();
				echo  "<script>console.log('" . $error . "')</script>";
			} else {
				$image = $this->upload->data('file_name');
				$this->db->set('img_product', $image);
				$this->db->insert('products', $data);
			}
		}
	}

	public function deleteProduct($id)
	{
		$this->db->where('id_product', $id)->delete(self::table);
	}



	// Query tabel categories


	public function addCatRules()
	{
		return [
			[
				'field' => 'category_name',
				'label' => 'Nama Kategori',
				'rules' => 'required',
			],
			[
				'field' => 'category_code',
				'label' => 'Kode Kategori',
				'rules' => 'required|trim',
			],

		];
	}
	public function getCategories()
	{
		return $this->db->get(self::categories)->result();
	}
	public function addCategory()
	{
		$data = [
			'category_name' => $this->input->post('category_name'),
			'category_code' => $this->input->post('category_code'),

		];
		$this->db->insert(self::categories, $data);
	}
}

/* End of file M_product.php */