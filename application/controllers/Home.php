<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->template->load('front/_templates/master', 'front/home');
    }
}

/* End of file Home.php */