<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    public function getProducts()
    {
        $this->db->join('categories', 'categories.id_category = products.id_category', 'left');

        return $this->db->get('products')->result();
    }
}

/* End of file M_product.php */