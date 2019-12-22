<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_menu
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('M_menu', 'menu');
    }
    public function libUserMenu($roleId)
    {
        return $this->ci->menu->userMenu($roleId);
    }
    public function libSubUserMenu($menuId)
    {
        return $this->ci->menu->userSubMenu($menuId);
    }
}

/* End of file User_menu.php */