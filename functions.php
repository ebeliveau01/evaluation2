<?php

function enqueue_my_assets() {
    wp_enqueue_style('style-apical', get_stylesheet_uri());
    wp_enqueue_script('script-apical', get_template_directory_uri() . '/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'enqueue_my_assets');