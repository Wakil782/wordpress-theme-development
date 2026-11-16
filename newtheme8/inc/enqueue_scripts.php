<?php
function newtheme_css_js_file_calling(){
    wp_enqueue_style('newtheme-style', get_stylesheet_uri());
    wp_register_style('new-style', get_template_directory_uri() .'/css/custom.css', array(), '1.0.0', 'all');
    wp_register_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');

    wp_enqueue_style('new-style');
    wp_enqueue_style('bootstrap-style');

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('counter-js', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('new-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'newtheme_css_js_file_calling');

function enqueue_bootstrap_icons() {
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.10.5' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_icons' );
