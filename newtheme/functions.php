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

function newtheme_register_menu(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnail');

    register_nav_menus(array(
        'main_menu'=>__('Header menu', 'newtheme'),
    ));
}
add_action('after_setup_theme', 'newtheme_register_menu');

function wakil_sidebar(){
    register_sidebar(array(
        'name' =>__('New sidebar', 'newtheme'),
        'id'=> 'sidebar-1',
        'before_widget'=> '<div class="new-sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h1 class="title">',
        'after_title'=> '</h1>',
    ));
}
add_action('widgets_init', 'wakil_sidebar');