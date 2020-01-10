<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MF_product extends CI_Model
{
	const table = 'products'; // Products table
	const categories = 'categories'; // Categories Product

	// Get Random Product
	public function getRandomProduct()
	{
		$this->db->join(self::categories, self::categories . '.id_category = ' . self::table . '.id_category', 'left');
		$this->db->order_by('id_product', 'RANDOM');
		return $this->db->get(self::table, 4)->result();
	}

	// Get Products for Ajax Infinity Scroll Pagination
	public function getProducts($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get(self::table);
		return $query;
	}

	// Get Product Categories with Number of Product 
	public function getPrductCategories()
	{
		$this->db->select('categories.*, count(*) as jumlah');
		$this->db->join(self::categories, self::categories . '.id_category = ' . self::table . '.id_category', 'left');
		$this->db->group_by('id_category');
		return $this->db->get(self::table)->result();
	}
}

/* End of file MF_product.php */