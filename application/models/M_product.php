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
			[
				'field' => 'keyword_product',
				'label' => 'Keyword Produk',
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
			'id_category'			=> $this->input->post('id_category'),
			'name_product' 		=> $this->input->post('name_product'),
			'desc_product' 		=> $this->input->post('desc_product'),
			'stock_product' 	=> $this->input->post('stock_product'),
			'weight_product'	=> $this->input->post('weight_product'),
			'first_price' 		=> $this->input->post('first_price'),
			'discount' 				=> $this->input->post('discount'),
			'last_price' 			=> $this->input->post('last_price'),
			'desc_product' 		=> $this->input->post('desc_product'),
			'slug_product' 		=> strtolower(url_title($this->input->post('name_product'))),
			'keyword_product' => $this->input->post('keyword_product'),
			'created_at' 			=> time(),
			'updated_at' 			=> time()
		];
		$this->_uploadProductImg($id = null, $data);
	}

	public function editProduct($id)
	{
		$data = [
			'id_category' 		=> $this->input->post('id_category'),
			'name_product' 		=> $this->input->post('name_product'),
			'desc_product' 		=> $this->input->post('desc_product'),
			'stock_product' 	=> $this->input->post('stock_product'),
			'weight_product' 	=> $this->input->post('weight_product'),
			'first_price' 		=> $this->input->post('first_price'),
			'discount' 				=> $this->input->post('discount'),
			'last_price' 			=> $this->input->post('last_price'),
			'desc_product' 		=> $this->input->post('desc_product'),
			'slug_product' 		=> strtolower(url_title($this->input->post('name_product'))),
			'keyword_product' => $this->input->post('keyword_product'),
			'updated_at' 			=> time()
		];
		$this->_uploadProductImg($id, $data);
	}


	public function deleteProduct($id)
	{
		$this->_unliksProdukImg($id);
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
			'category_slug' => strtolower(url_title($this->input->post('category_name'))),
		];
		$this->db->insert(self::categories, $data);
	}
	public function deleteCategory($id)
	{
		$this->db->where('id_category', $id)->delete(self::categories);
	}
	public function editCategory()
	{
		$data = [
			'category_name' => $this->input->post('category_name'),
			'category_slug' => strtolower(url_title($this->input->post('category_name'))),
		];
		$id = $this->input->post('id_category');
		$this->db->where('id_category', $id)->update(self::categories, $data);
	}

	// Private
	private function _uploadProductImg($id, $data)
	{
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
				if ($this->input->post('submit') == 'update') {
					$this->_unliksProdukImg($id);
					$image = $this->upload->data('file_name');
					$this->db->set('img_product', $image);
					$this->db->where('id_product', $id)->update(self::table, $data);
				} else {
					$image = $this->upload->data('file_name');
					$this->db->set('img_product', $image);
					$this->db->insert('products', $data);
				}
			}
		} else {
			if ($this->input->post('submit') == 'update') {
				$this->db->where('id_product', $id)->update(self::table, $data);
			}
		}
	}

	private function _unliksProdukImg($id)
	{
		$query = $this->db->where('id_product', $id)->get(self::table);
		$row   = $query->row();
		if (!empty($row->img_product)) {
			unlink("./assets/img/$row->img_product");
		}
	}
}

/* End of file M_product.php */