<?php

// Enqueue


function practce_theme_customize_for_me(){
    wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '5.3.8' , 'all');
    wp_register_style('bxslider', get_template_directory_uri(). '/css/jquery.bxslider.css', array(), '4.2.17' , 'all');
    wp_enqueue_style('practice', get_stylesheet_uri());

  
    wp_register_style('custom', get_template_directory_uri(). '/css/custom.css', array(), '1.0.0', 'all' );

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bxslider');
    wp_enqueue_style('custom');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri(  ). '/js/bootstrap.bundle.min.js', array(), '5.3.8', true);
    wp_enqueue_script('bxslider', get_template_directory_uri(  ). '/js/jquery.bxslider.min.js', array(), '4.2.17', true);
    wp_enqueue_script('main', get_template_directory_uri(  ). '/js/main.js', array(), '1.0.0', true);
    

}

add_action('wp_enqueue_scripts','practce_theme_customize_for_me');
