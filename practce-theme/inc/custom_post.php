<?php


function wakil_service() {
    register_post_type('service', array(
        'labels' => array(
            'name'=> ('services'),
            'singular_name' => ('service'),
            'add_new' => ('add_new'),
            'add_new_item'=> ('add_new_service'),
            'view_item' => ('view_service'),
            'new_item'=> ('new_service'),
            'edit_item' => ('edit_service'),
            'not_found' => ('sorry not found'),
        ),
        'menu_icon'=> 'dashicons-embed-photo',
        'public'=> true,
        'publicly_queryable'=> true,
        'menu_position' => 5,
        'exclude_from_search' => true,
        'show_ui' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    ));

    add_theme_support('post-thumbnails');
}

add_action('init', 'wakil_service');

function wakil_slider() {
    register_post_type('slider', array(
        'labels' => array(
            'name'=> ('sliders'),
            'singular_name' => ('slider'),
            'add_new' => ('add_new'),
            'add_new_item'=> ('add_new_slider'),
            'view_item' => ('view_slider'),
            'new_item'=> ('new_slider'),
            'edit_item' => ('edit_slider'),
            'not_found' => ('sorry not found'),
        ),
        'menu_icon'=> 'dashicons-welcome-view-site',
        'public'=> true,
        'publicly_queryable'=> true,
        'menu_position' => 5,
        'exclude_from_search' => true,
        'show_ui' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'slider'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    ));

    add_theme_support('post-thumbnails');
}

add_action('init', 'wakil_slider');






