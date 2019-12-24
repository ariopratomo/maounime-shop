<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends CI_Controller
{

    public function index()
    {
        $this->template->load('admin/_templates/master', 'admin/404');
    }
}

/* End of file Notfound.php */