<?php

function mybluehost_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'width'=> '53',
        'height'=> '60',
        'flex_width'=> true,
        'flex_height'=> true,
    ));
    register_nav_menus(array(
        'main_menu'=>__('Header Menu', 'bluehost'),
        'service_menu'=>__('service Menu', 'bluehost'),
        'company_menu'=>__('company menu', 'bluehost'),
        'legal_menu'=>__('legal menu', 'bluehost'),
    ));
}
add_action('after_setup_theme', 'mybluehost_setup_theme');

function bluehost_excerpt($more){
    global $post;
    return '<br> <br> <a class="readmore" href="'.get_permalink($post->ID).'"> LEARN MORE → </a>';
}
add_filter('excerpt_more', 'bluehost_excerpt');

function bluehost_excerpt_length($length){
    return 8;
}
add_filter('excerpt_length', 'bluehost_excerpt_length');