<?php

function begma_enqueue_style(){
    wp_enqueue_style('main-style', get_stylesheet_uri(  ));
    wp_register_style('bootstrap-css', get_template_directory_uri(  ) . '/css/bootstrap.min.css', array(), '5.3.8', 'all');
    wp_register_style('custom-css', get_template_directory_uri(  ) . '/css/custom.css', array(), '1.0.0', 'all');
    wp_register_style('owl-caressol', get_template_directory_uri(  ) . '/css/owl.carousel.min.css', array(), '2.3.4', 'all');

    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('custom-css');
    wp_enqueue_style('owl-caressol');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrao-js', get_template_directory_uri(  ) . '/js/bootstrap.bundle.min.js', array(), '5.3.8', true);
    wp_enqueue_script('main-js', get_template_directory_uri(  ) . '/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('owl-caresol', get_template_directory_uri(  ) . '/js/owl.carousel.min.js', array(), '2.3.4', true);

}
add_action('wp_enqueue_scripts', 'begma_enqueue_style');

function begma_font_awesome() {
    wp_enqueue_style('google-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
}
add_action('wp_enqueue_scripts', 'begma_font_awesome');