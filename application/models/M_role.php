<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Role extends CI_Model
{
    public function getRole()
    {
        return $this->db->get('users_role')->result();
    }
    public function editRole()
    {
        $this->form_validation->set_rules('role', 'role', 'trim|required');
        $data = [
            'role' => $this->input->post('role'),
        ];
        $id = $this->input->post('roleId');
        $this->db->where('id', $id);
        $this->db->update('users_role', $data);
    }

    public function addRole()
    {
        $this->form_validation->set_rules('role', 'role', 'trim|required');
        $data = [
            'role' => $this->input->post('role'),
        ];
        $this->db->insert('users_role', $data);
    }

    public function deleteRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users_role');
    }

    public function getRoleAccess($roleId)
    {
        // $this->db->select('users_role.role,user_menus.title,users_access_menu');
        return $this->db->get_where('users_role_access', ['role_id' => $roleId])->result();
    }

    public function getRoleByid($id)
    {
        return $this->db->get_where('users_role', ['id' => $id])->row();
    }
}

/* End of file M_Role.php */