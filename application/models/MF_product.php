<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MF_product extends CI_Model
{
    const table = 'products';
    const categories = 'categories';
    public function getRandomProduct()
    {
        $this->db->join(self::categories, self::categories . '.id_category = ' . self::table . '.id_category', 'left');
        $this->db->order_by('id_product', 'RANDOM');
        return $this->db->get(self::table, 4)->result();
    }
}

/* End of file MF_product.php */