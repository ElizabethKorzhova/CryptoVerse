<?php
    function assets() {
        wp_enqueue_script('index', get_template_directory_uri() . '/build/index.js', array(), null, true);
        wp_enqueue_style('style', get_template_directory_uri() . '/build/styles.css');
    }
    add_action('wp_enqueue_scripts', 'assets');




    function register_my_menu() {
        register_nav_menu('navigation', 'Navigation');

    }
    add_action('after_setup_theme', 'register_my_menu');

?>