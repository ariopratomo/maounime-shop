<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model("MF_product", "product");
    }

    public function index()
    {
        $data['RandomProduct'] = $this->product->getRandomProduct();
        $this->template->load('front/_templates/master', 'front/home', $data);
    }
}

/* End of file Home.php */