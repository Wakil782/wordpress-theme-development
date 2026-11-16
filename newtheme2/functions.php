<?php

function newtheme_css_js_file_calling(){
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');
    
    wp_register_style('meanmenu', get_template_directory_uri() . '/css/meanmenu.min.css', array(), '2.0.7', 'all');
    wp_register_style('custom-css', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('meanmenu');
    wp_enqueue_style('custom-css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('meanmenu-js', get_template_directory_uri() . '/js/jquery.meanmenu.min.js', array('jquery'), '2.0.7', true);
}
add_action('wp_enqueue_scripts', 'newtheme_css_js_file_calling');


function wakil_after_setup_theme() {
    add_theme_support('title-tag');
    register_nav_menus(array(
        'main_menu'=>__('Top Menu'),
    ));
}
add_action('after_setup_theme', 'wakil_after_setup_theme');

function newtheme_ecerpt_more($more) {
    global $post;
    return '<br> <br> <a class="readmore" href="'.get_permalink($post->ID).'"> Read More </a>';
}
add_action('excerpt_more','newtheme_ecerpt_more');

function newtheme_excerpt_length($length){
    return  40;
}
add_action('excerpt_length', 'newtheme_excerpt_length');


function newtheme_sidebar() {
    register_sidebar(array(
        'name'=>__('Sidebar New', 'newtheme2'),
        'id'=> 'sidebar-1',
        'before_widget'=> '<div class="new-sidebar">',
        'after-widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>',
    ));
}
add_action('widgets_init', 'newtheme_sidebar');