<?php
function is_logged_in() //batasi akses ke halaman admin
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "Admin") {
            redirect('Profil');
        }
    }
}

function is_logged_in2() //batasi akses ke halaman user
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "User") {
            redirect('Dashboard');
        }
    }
}
