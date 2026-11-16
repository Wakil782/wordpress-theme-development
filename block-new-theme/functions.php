<?php


function practisetheme_enqueue_style() {
    wp_enqueue_style('practise_theme', get_stylesheet_uri(  ));
    wp_register_style('bootstrap_theme', get_template_directory_uri(  ) . '/css/bootstrap.min.css', array(), '5.3.8', 'all');
    wp_register_style('custom_theme', get_template_directory_uri(  ) . '/css/custom.css', array(), '1.0.0', 'all');

    wp_enqueue_style('bootstrap_theme');
    wp_enqueue_style('custom_theme');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap_theme_js', get_template_directory_uri(  ) . '/js/bootstrap.bundle.min.js', array(), '5.3.8', true);
    wp_enqueue_script('main_theme', get_template_directory_uri(  ) . '/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'practisetheme_enqueue_style');
 function practise_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');

 }
 add_action('wp_enqueue_scripts', 'practise_font_awesome');
function wakil_after_theme(){
    register_nav_menus(array(
        'primary_menu'=>__('header menu', 'practisetheme'),
    ));
}
add_action('after_setup_theme', 'wakil_after_theme');


function wakil_excerpt($more){
    return '<br><br> <a class="Readmore" href="'. get_permalink( $post->ID).'"> ReadMore </a>';
}

add_filter('excerpt_more', 'wakil_excerpt');

function wakil_length($length){
    return 30;
}
add_filter('excerpt_length', 'wakil_length');


function wakil_sidebar(){
    register_sidebar(array(
        'name'=>__('new sidebar', 'practisetheme'),
        'id'=> 'sidebar_1',
        'before_widget'=> '<div class="new">',
        'after_widget'=> '</div>',
        'before_title'=> '<h1 class="sidebar-title">',
        'after_title'=> '</h1>',
    ));
}

add_action('widgets_init', 'wakil_sidebar');