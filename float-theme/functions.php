<?php 
// All Functions Here

function practise_theme_botstrap_css_js_file() {
    wp_enqueue_style('practise_theme', get_stylesheet_uri(  ));

    wp_register_style('bootstrap_theme', get_template_directory_uri(  ). '/css/bootstrap.min.css', array(), '5.3.8', 'all');
    wp_register_style('custom_practise', get_template_directory_uri(  ) . '/css/custom.css', array(), '1.0.0', 'all');

    wp_enqueue_style('bootstrap_theme');
    wp_enqueue_style('custom_practise');

    wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrap_theme', get_template_directory_uri(  ). '/js/bootstrap.bundle.min.js', array(), '5.3.8', true);
   wp_enqueue_script('main', get_template_directory_uri(  ). '/js/main.js', array(), '1.0.0', true);


}


add_action('wp_enqueue_scripts', 'practise_theme_botstrap_css_js_file');


function wakil_after_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main_menu' => __('Header Menu', 'practisetheme'),
    ));
}

add_action('after_setup_theme', 'wakil_after_theme_setup');

function wakil_new_sidebar() {
    register_sidebar(array(
        'name' => __('Main Widgets', 'practisetheme'),
        'id' => 'sidebar_1',
        'before_widget'=> '<div class="dolphin">',
        'after_sidebar' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init', 'wakil_new_sidebar');


