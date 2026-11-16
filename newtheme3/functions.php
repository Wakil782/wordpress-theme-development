<?php

function newtheme_css_js_file_calling(){
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');
    

    wp_register_style('custom-css', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-css');

    wp_enqueue_style('custom-css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'newtheme_css_js_file_calling');




function wakil_theme_setup() {

    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'wakil')
    ));

}
add_action('after_setup_theme', 'wakil_theme_setup');

