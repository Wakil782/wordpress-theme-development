<?php

function bluehost_css_js_calling(){
wp_enqueue_style('bluehost_css', get_stylesheet_uri());
wp_register_style('bluehost_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');
wp_register_style('bluehost_main_css', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
wp_register_style('jqery-ui', get_template_directory_uri() . '/css/jquery-ui.css', array(), '1.13.2', 'all');

wp_enqueue_style('bluehost_bootstrap_css');
wp_enqueue_style('bluehost_main_css');
wp_enqueue_style('jqery-ui');

wp_enqueue_script('jquery');
wp_enqueue_script('bluehost_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
wp_enqueue_script('typed.min.js', get_template_directory_uri() . '/js/typed.min.js', array(), '2.0.9', true);
wp_enqueue_script('bluehost_main_js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
wp_enqueue_script('jqueri-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '1.13.2', true);
}

add_action('wp_enqueue_scripts', 'bluehost_css_js_calling');


function bluehost_font_awesome(){
    wp_enqueue_style(
        'font-awesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        array(),
        '7.0.1',
        'all'
    );
    // wp_enqueue_style(
    //     'font-awesome-new',
    //     'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
    //     array(),
    //     '6.5.2'
    // );
}
add_action('wp_enqueue_scripts', 'bluehost_font_awesome');