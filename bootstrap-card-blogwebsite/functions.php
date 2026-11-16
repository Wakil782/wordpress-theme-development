<?php
// include bootstrap5 navwalker
require_once get_template_directory() . '/inc/class-bootstrap5-navwalker.php';

function wkail_practise_theme4_bootstrap() {
    wp_enqueue_style('jayed-bootstrap', get_stylesheet_uri(  ));
    wp_register_style('bootstrap', get_template_directory_uri(  ). '/css/bootstrap.min.css', array(), '5.3.8', 'all');
    wp_register_style('custom', get_template_directory_uri(  ). '/css/custom.css', array(), '1.0.0', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri(  ). '/js/bootstrap.bundle.min.js', array(), '5.3.8', true);
    wp_enqueue_script('main', get_template_directory_uri(  ). '/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'wkail_practise_theme4_bootstrap');


function practise_theme4_after_setup() {
    add_theme_support('title-tag');
    add_theme_support('post_thumbnails', array('post', 'page'));
    register_nav_menus(array(
        'main_menu' =>__('Header Menu', 'practisetheme'),
        'footer_menu' =>__('Footer Menu', 'practisetheme'),
    ));
}

add_action('after_setup_theme', 'practise_theme4_after_setup');



function wakil_sidebar() {
    register_sidebar(array(
        'name' =>__('Sidebar 1', 'practisetheme'),
        'id' => 'sidebar_1',
        'description'=>__('Here Are new sidebar', 'practisetheme'),
        'before_widget'=> '<div id="%1$s" class="sidebar-area rounded-3 p-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="mb-1">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'wakil_sidebar');

// Custom post type

function my_second_cpt() {
    register_post_type('service', array(
        'labels'=> array(
            'name' => __('services', 'practisetheme'),
            'singular_name'=>__('service', 'practisetheme'),
            'new_item' =>__('new service', 'practisetheme'),
            'add_new_item'=> __('new service', 'practisetheme'),
            'view_item'=>__('view service', 'practisetheme'),
            'edit_item' =>__('edit service', 'practisetheme'),
            'not_found' =>__('Soory no posts found', 'practisetheme'),
        ),
        'public'=> true,
        'menu_icon'=> 'dashicons-image-crop',
        'menu_position'=> 5,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'hierarchical' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor'),
        'has_archive' => true,     
    ));
}

add_action('init', 'my_second_cpt');












