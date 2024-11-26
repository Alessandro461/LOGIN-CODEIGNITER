<?php
function check_role($required_role) {
    $ci = &get_instance();
    $user_role = $ci->session->userdata('role'); // Asegúrate de que el rol se guarda en la sesión

    if ($user_role !== $required_role) {
        redirect('auth/no_permission'); // Redirige a una página de error
        exit;
    }
}
