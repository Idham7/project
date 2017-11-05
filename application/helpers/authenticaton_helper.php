<?php

function is_admin_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $CI->session->userdata('email');
    $role = $CI->session->userdata('role') == 'admin';
    if (isset($user) && $role) { return true; } else { return false; }
}

function is_user_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $CI->session->userdata('email');
    $role = $CI->session->userdata('role') == 'user';
    if (isset($user) && $role) { return true; } else { return false; }
}

?>
