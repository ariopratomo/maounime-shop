<?php



function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('admin/auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(2);

        $queryMenu = $ci->db->get_where('user_menus', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('users_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect(base_url('admin/notfound'));
        }
    }
}

function menu($menuId)
{
    $ci = get_instance();
    $result = $ci->db->get_where('user_menus', ['is_active' => 1, 'id' => $menuId])->num_rows();
    if ($result > 0) {
        return "checked='checked'";
    }
}
function sub_menu($submenuId)
{
    $ci = get_instance();
    $result = $ci->db->get_where('users_sub_menu', ['is_active' => 1, 'id' => $submenuId])->num_rows();
    if ($result > 0) {
        return "checked='checked'";
    }
}