<?php

function enqueue_my_assets() {
    wp_enqueue_style('style-apical', get_stylesheet_uri());
    wp_enqueue_script('script-apical', get_template_directory_uri() . '/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'enqueue_my_assets');

function custom_login_handler() {
    if (isset($_POST['login']) && isset($_POST['motdepasse'])) {
        $user = wp_signon(array(
            'user_login' => $_POST['login'],
            'user_password' => $_POST['motdepasse'],
            'remember' => isset($_POST['resterconnecte']) ? true : false,
        ));

        if (is_wp_error($user)) {
            wp_redirect('index.php?login=failed');
            exit;
        } else {
            // Redirect to the desired page after successful login.
            wp_redirect(admin_url()); // Change this URL to your desired destination.
            exit();
        }
    }
}

add_action('login_form_custom_login', 'custom_login_handler');