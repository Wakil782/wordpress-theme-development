<?php
function jayed_css_file_calling () {
wp_enqueue_style( 'jayed-style',get_stylesheet_uri());

wp_register_style('bootstrap',get_template_directory_uri()."/css/bootstrap.min.css", array(),'5.0.2','all' );

wp_register_style('bxslider',get_template_directory_uri()."/css/bxslider.min.css", array(),'4.2.17','all' );

wp_register_style('owl.carousel.min',get_template_directory_uri()."/css/owl.carousel.min.css", array(),'2.3.4','all' );

wp_register_style('owl.theme.default.min',get_template_directory_uri()."/css/owl.theme.default.min.css", array(),'2.3.4','all' );


wp_register_style('custom',get_template_directory_uri()."/css/custom.css", array(),'1.0.0','all' );
wp_enqueue_style( 'bootstrap');

// Bxslider
wp_enqueue_style('bxslider');
// owl carousel
wp_enqueue_style( 'owl.carousel.min');
wp_enqueue_style( 'owl.theme.default.min');
wp_enqueue_style( 'custom');
//Jquery

wp_enqueue_script('jquery');

wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), '5.0.2', 'true');

wp_enqueue_script('bxslider',get_template_directory_uri().'/js/bxslider.min.js', array(), '4.2.17', 'true');

wp_enqueue_script('owl.carousel.min',get_template_directory_uri().'/js/owl.carousel.min.js', array(), '2.3.4', 'true');


wp_enqueue_script('main',get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');

}
add_action('wp_enqueue_scripts','jayed_css_file_calling' );


// wp google font adding
function jayed_google_fonts () {
    wp_enqueue_style( 'jayed_fonts','https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap' ,false);

}

add_action( 'wp_enqueue_scripts', 'jayed_google_fonts' );