<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];
        $queryAccess = $ci->db->get_where(
            'user_access_menu',
            [
                'role_id' => $role_id,
                'menu_id' => $menu_id
            ]
        );

        if ($queryAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}

function dashboard_role()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $queryDashboard = "SELECT role FROM user_role JOIN user ON user_role.id_role = user.role_id WHERE id_role = $role_id";

        $menu = $ci->uri->segment(1);

        $urlDashboard = $ci->db->query($queryDashboard)->row_array();
        if ($urlDashboard['role'] != $menu) {
            redirect('auth/blocked');
        }
    }
}
