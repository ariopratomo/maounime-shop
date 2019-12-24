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
}

/* End of file Product.php */