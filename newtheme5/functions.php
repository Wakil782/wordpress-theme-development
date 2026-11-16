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

function newtheme5_nav_menus(){
    register_nav_menus(array(
        'main_menu'=>__('main menu', 'newtheme5'),
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnail');
}
add_action('after_setup_theme', 'newtheme5_nav_menus');

function register_wakil_widget(){
    register_sidebar(array(
        'name'=>__('New Sidebar', 'newtheme5'),
        'id'=> 'sidebar_1',
        'before_widget'=> '<div class="new-sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h4 class="new-title">',
        'after_title'=> '</h4>'
    ));
        register_sidebar(array(
        'name'=>__('New  3 Sidebar', 'newtheme5'),
        'id'=> 'sidebar_2',
        'before_widget'=> '<div class="new-sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h4 class="new-title">',
        'after_title'=> '</h4>'
    ));
        register_sidebar(array(
        'name'=>__('New 2 Sidebar', 'newtheme5'),
        'id'=> 'sidebar_3',
        'before_widget'=> '<div class="new-sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h4 class="new-title">',
        'after_title'=> '</h4>'
    ));
}
add_action('widgets_init', 'register_wakil_widget');




