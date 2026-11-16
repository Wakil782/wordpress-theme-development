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

function newtheme_font_awesome_load(){
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'newtheme_font_awesome_load');
function newtheme4_register_menus(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnail', array('post', 'page'));

    register_nav_menus(array(
        'primary_menu'=>__('Header', 'newtheme4'),
    ));
}
add_action('after_setup_theme', 'newtheme4_register_menus');

function newtheme_excerpt_more($more){
    global $post;
    return '<br> <br> <a href="'.get_permalink($post->ID).'"> Countiue Reading </a>';
}
add_filter('excerpt_more', 'newtheme_excerpt_more');

function newtheme_excerpt_more_length($length){
    return 40;
}
add_filter('excerpt_length', 'newtheme_excerpt_more_length');




