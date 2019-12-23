<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{
    const tbMenu = 'user_menus';
    const tbSubmenu = 'users_sub_menus';

    public function userMenu($roleId)
    {
        $tableMenu = self::tbMenu;
        $tableAccess = 'users_access_menu';
        $isActive = 1;
        $array = [$tableAccess . '.role_id' => $roleId, self::tbMenu . '.is_active' => $isActive];
        // $this->db->select($tableMenu . '.id, menu, icon');
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
        $this->db->where('id!=', 13); // Role
        $this->db->where('id!=', 10); // Menu

        return $this->db->get(self::tbMenu)->result();
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
        $this->db->update(self::tbMenu, $data);
    }

    public function addMenu()
    {
        $this->form_validation->set_rules('menu', 'menu', 'trim|required');
        $this->form_validation->set_rules('icon', 'icon', 'trim|required');
        $data = [
            'menu' => $this->input->post('menu'),
            'icon' => $this->input->post('icon'),
        ];
        $this->db->insert(self::tbMenu, $data);
    }

    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete(self::tbMenu);
    }

    public function userSubMenus()
    {
        $this->db->select(self::tbMenu . '.menu,users_sub_menu.*');
        $this->db->join(self::tbMenu, self::tbMenu . '.id = users_sub_menu.menu_id', 'left');

        return $this->db->get_where('users_sub_menu', ['users_sub_menu.id!=' => 13])->result();
    }

    public function editSubMenu()
    {
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('menuId', 'menu', 'trim|required');
        $this->form_validation->set_rules('url', 'url', 'trim|required');
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menuId'),
            'url' => $this->input->post('url'),
        ];
        $id = $this->input->post('submenuId');
        $this->db->where('id', $id);
        $this->db->update('users_sub_menu', $data);
    }

    public function addSubMenu()
    {
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('menuId', 'menu_id', 'trim|required');
        $this->form_validation->set_rules('url', 'url', 'trim|required');
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menuId'),
            'url' => $this->input->post('url'),
        ];
        $this->db->insert('users_sub_menu', $data);
    }

    public function deleteSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users_sub_menu');
    }

    public function roleMenu()
    {
        return $this->db->get_where(self::tbMenu, ['id!=' => 13])->result();
    }
}

/* End of file M_menu.php */