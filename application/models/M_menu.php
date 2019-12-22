<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{

    public function userMenu($roleId)
    {
        $tableMenu = 'user_menus';
        $tableAccess = 'users_access_menu';
        $isActive = 1;
        $array = [$tableAccess . '.role_id' => $roleId, 'user_menus.is_active' => $isActive];

        // $this->db->join($tableMenu, $tableMenu . '.id = ' . $tableAccess . '.id');
        // $this->db->where($array);

        $queryMenu = "SELECT $tableMenu.`id`,`menu`,`icon`
                                FROM  $tableMenu JOIN $tableAccess 
                                    ON $tableMenu.`id` = $tableAccess.`menu_id`
                                WHERE $tableAccess.`role_id` = $roleId AND $tableMenu.`is_active` = $isActive  
                                ORDER BY  $tableMenu.`menu` ASC
                                ";
        return $this->db->query($queryMenu)->result();

        // return $this->db->get($tableAccess)->result();
    }

    public function userSubMenu($menuId)
    {
        $data = [
            'menu_id' => $menuId,
            'is_active' => 1
        ];
        return $this->db->order_by('title', 'asc')->get_where('users_sub_menu', $data)->result();
    }

    // 
    public function userMenus()
    {
        return $this->db->get_where('user_menus', ['menu!=' => 'Menu'])->result();
    }

    public function editMenu()
    {
        $this->form_validation->set_rules('menu', 'menu', 'trim|required');
        $this->form_validation->set_rules('icon', 'icon', 'trim|required');
        $data = [
            'menu' => $this->input->post('menu'),
            'icon' => $this->input->post('icon'),
        ];
        $id = $this->input->post('menuId');
        $this->db->where('id', $id);
        $this->db->update('user_menus', $data);
    }

    public function addMenu()
    {
        $this->form_validation->set_rules('menu', 'menu', 'trim|required');
        $this->form_validation->set_rules('icon', 'icon', 'trim|required');
        $data = [
            'menu' => $this->input->post('menu'),
            'icon' => $this->input->post('icon'),
        ];
        $this->db->insert('user_menus', $data);
    }

    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menus');
    }

    public function userSubMenus()
    {
        $this->db->select('user_menus.menu,users_sub_menu.*');
        $this->db->join('user_menus', 'user_menus.id = users_sub_menu.id', 'left');

        return $this->db->get_where('users_sub_menu')->result();
    }
}

/* End of file M_menu.php */