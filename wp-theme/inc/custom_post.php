<?php

function custom_service(){
    register_post_type( 'service',
    array(
        'labels' => array(
            'name' => ('Services'),
            'singular_name' => ('Service'),
            'add_new' => ('Add New Service'),
            'add_new_item' => ('Add New Service'),
            'edit_item' => ('Edit Service'),
            'new_item' => ('New Service'),
            'view_item' => ('View Service'),
            'not_found' => ('sorr, we cannot found'),

        ),
        'menu_icon' => 'dashicons-hammer',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'taxonomies' => array('category'),
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    )
    );
}

add_action( 'init','custom_service');

// Slider

function custom_slider(){
    register_post_type( 'slider',
    array(
        'labels' => array(
            'name' => ('slider'),
            'singular_name' => ('slider'),
            'add_new' => ('Add New slider'),
            'add_new_item' => ('Add New slider'),
            'edit_item' => ('Edit slider'),
            'new_item' => ('New slider'),
            'view_item' => ('View slider'),
            'not_found' => ('sorr, we cannot found'),

        ),
        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'slider'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    )
    );
}

add_action( 'init','custom_slider');

function query_post_type($query) {
    if(is_category()){
        $post_type = get_query_var('post_type');
        if($post_type) {
            $post_type = $post_type;
        }else {
            $post_type = array('post', 'service');
            $query -> set('post_type', $post_type);
            return $query;
        }
    }
}
add_filter('pre_get_posts', 'query_post_type');

