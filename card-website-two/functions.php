<?php
require_once get_template_directory() . '/inc/class-bootstrap5-navwalker.php';
function practise_theme_5() {
    wp_enqueue_style('theme', get_stylesheet_uri(  ));
    wp_register_style('practise_theme', get_template_directory_uri(  ). '/css/bootstrap.min.css', array(), '5.3.8', 'all');
    wp_register_style('custom_theme', get_template_directory_uri(  ). '/css/custom.css', array(), '1.0.0', 'all');

    wp_enqueue_style('practise_theme');
    wp_enqueue_style('custom_theme');


    wp_enqueue_script('jquery');
    wp_enqueue_script('practise_theme', get_template_directory_uri(  ). '/js/bootstrap.bundle.min.js', array(), '5.3.8', true);
    wp_enqueue_script('main_theme', get_template_directory_uri(  ). '/js/main.js', array(), '1.0.0', true);
}


add_action('wp_enqueue_scripts', 'practise_theme_5');

function load_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'load_font_awesome' );

function wakil_theme_setup() {
    add_theme_support('post-thumbnails', array('post', 'page'));
    add_image_size( 'custom-size', 500, 455, true);
    register_nav_menus(array(
        'main_menu' =>__(' top menu', 'practisetheme'),
    ));
}
add_action('after_setup_theme', 'wakil_theme_setup');
















