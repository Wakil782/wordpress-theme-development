<?php

function begma_default_setting(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'=> 53,
        'width'=> 125,
        'flex_height'=> true,
        'flex_width'=> true,
    ));
    register_nav_menus( array(
        'header_menu'=>__('Header Menu', 'begma'),
        'footer_menu'=>__('Footer Menu', 'begma'),
    ) );
}
add_action('after_setup_theme', 'begma_default_setting');




function begma_excerpt($more){
    global $post;

    return '<a class="excerpt" href="'.get_the_permalink($post->ID).'"> Learn More <i class="fa-solid fa-arrow-right"></i>   </a>';
}

add_filter('excerpt_more', 'begma_excerpt');

function begma_excerpt_length($length){
    return 0;
}

add_filter('excerpt_more', 'begma_excerpt_length');