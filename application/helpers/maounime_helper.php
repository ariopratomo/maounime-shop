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
function role_access($roleId, $menuId)
{
    $ci = get_instance();
    $ci->db->where('role_id', $roleId);
    $ci->db->where('menu_id', $menuId);
    $result = $ci->db->get('users_access_menu')->num_rows();
    if ($result > 0) {
        return "checked='checked'";
    }
}

function tgl_indo($date)
{
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 2, 2);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . "-" . $BulanIndo[(int) $bulan - 1] . "-" . $tahun;
    return ($result);
}
function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.') . ",-";
    return $hasil_rupiah;
}