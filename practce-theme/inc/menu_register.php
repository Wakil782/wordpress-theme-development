<?php
// Menu Register 

// excerpt length
function wakil_length($length) {
    return 30;
}
add_filter('excerpt_length', 'wakil_length');

// excerpt more link
function wakil_excerpt($more) {
    global $post;
    return '<br> <br><a class="readmore" href="'.get_permalink($post->ID).'">Read More</a>';
}
add_filter('excerpt_more', 'wakil_excerpt');



// Add theme support
function wakil_register () {
    add_theme_support('post-thumbnails', array('post', 'page', 'service'));
    add_image_size('service',400, 200, true);
    register_nav_menu('main_menu',__('Main Menu', 'practicetheme'));
}

add_action('after_setup_theme', 'wakil_register' );