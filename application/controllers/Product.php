<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function index()
    {
    }
    public function detail($slug = null)
    {
        $data['detailP'] = $this->db->get_where('products', ['slug_product' => $slug])->row();
        $this->template->load('front/_templates/master', 'front/detail_product', $data);
    }
}

/* End of file Product.php */