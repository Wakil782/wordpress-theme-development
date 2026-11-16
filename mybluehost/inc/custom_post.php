<?php
function new_image_custom_post(){
    register_post_type('partner', array(
        'labels'=> array(
            'name'=>__('partners', 'bluehost'),
            'singular_name'=>__('partner', 'bluehost'),
            'add_new'=>__('add partner', 'bluehost'),
            'add_new_item'=>__('add new partner', 'bluehost'),
            'view_item'=>__('view partner', 'bluehost'),
            'new_item'=>__('new partner', 'bluehost'),
            'edit_item'=>__('edit partner', 'bluehost'),
            'not_found'=>__('cant found any posts', 'bluehost')
        ),
        'menu_icon'=> 'dashicons-rest-api',
        'public'=> true,
        'publicly_queryable'=> true,
        'exclude_from_search'=> true,
        'has_archive'=> true,
        'show_ui'=> true,
        'hierarchical'=> true,
        'capability_type'=> 'post',
        'rewrite'=> array('slug'=> 'partner'),
        'supports'=> array('title', 'thumbnail', 'excerpt', 'editor')
    ));

    register_post_type('quote', array(
        'labels' => array(
            'name'=>__('quotes', 'bluehost'),
            'singular_name'=>__('quote', 'bluehost'),
            'add_new'=>__('add quote', 'bluehost'),
            'add_new_item'=>__('add new quote', 'bluehost'),
            'view_item'=>__('view quote', 'bluehost'),
            'new_item'=>__('new quote', 'bluehost'),
            'edit_item'=>__('edit quote', 'bluehost'),
            'not_found'=>__('sorry not found', 'bluehost'),
        ),
        'menu_icon'=> 'dashicons-sos',
        'public'=> true,
        'publicly_queryable'=> true,
        'exclude_from_search'=> true,
        'hierarchical'=> true,
        'show_ui'=> true,
        'has_archive'=> true,
        'capability_type'=> 'post',
        'rewrite'=> array('slug'=> 'quote'),
        'supports'=> array('thumbnail', 'excerpt', 'editor', 'title'),

    ));

    // phonix ppc
    register_post_type('phonix', array(
        'labels'=> array(
            'name'=>__('phonix', 'bluehost'),
            'singular_name'=>__('phonix', 'bluehost'),
            'add_new'=>__('add new phonix', 'bluehost'),
            'add_new_item'=>__('add new phonix', 'bluehost'),
            'view_item'=>__('view phonix', 'bluehost'),
            'new_item'=>__('new phonix', 'bluehost'),
            'not_found'=>__('sorry we cnanot found', 'bluehost')
        ),
        'menu_icon'=> 'dashicons-sos',
        'public'=> true,
        'publicly_queryable'=> true,
        'exclude_from_search'=> true,
        'hierarchical'=> true,
        'show_ui'=> true,
        'has_archive'=> true,
        'capability_type'=> 'post',
        'rewrite'=> array('slug'=> 'phonix'),
        'supports'=> array('thumbnail', 'excerpt', 'editor', 'title'),
    ));


    // progmmatic ecosytem

    register_post_type('progmmatic', array(
        'labels' => array(
            'name'=>__('progmmatic', 'bluehost'),
            'singular_name'=>__('progmmatics', 'bluehost'),
            'add_new'=>__('add progmmatic', 'bluehost'),
            'add_new_item'=>__('add new progmmatic', 'bluehost'),
            'view_item'=>__('view progmmatic', 'bluehost'),
            'new_item'=>__('new progmmatic', 'bluehost'),
            'not_found'=>__('soory we cannot found', 'bluehost'),
        ),
        'menu_icon'=> 'dashicons-insert',
        'public'=> true,
        'publicly_queryable'=> true,
        'exclude_from_search'=> true,
        'hierarchical'=> true,
        'show_ui'=> true,
        'has_archive'=> true,
        'capability_type'=> 'post',
        'rewrite'=> array('slug'=> 'progmmatic'),
        'supports'=> array('thumbnail', 'excerpt', 'editor', 'title'),
    ));

    // home service

    register_post_type('service', array(
        'labels'=> array(
            'name'=>__('service', 'bluehost'),
            'singular_name'=>__('service', 'bluehost'),
            'add_new'=>__('add service', 'bluehost'),
            'add_new_item'=>__('add service', 'bluehost'),
            'view_item'=>__('view service', 'bluehost'),
            'new_item'=>__('new service', 'bluehost'),
            'not_found'=>__('soory we cannot found', 'bluehost')
        ),
        'menu_icon'=> 'dashicons-insert',
        'public'=> true,
        'publicly_queryable'=> true,
        'exclude_from_search'=> true,
        'hierarchical'=> true,
        'show_ui'=> true,
        'has_archive'=> true,
        'capability_type'=> 'post',
        'rewrite'=> array('slug'=> 'service'),
        'supports'=> array('thumbnail', 'excerpt', 'editor', 'title'),
    ));

    // Insights cpt 

    register_post_type('insights', array(
        'labels'=> array(
            'name'=>__('insights', 'bluehost'),
            'singular_name'=>__('insights', 'bluehost'),
            'add_new'=>__('add insights', 'bluehost'),
            'add_new_item'=>__('add insights', 'bluehost'),
            'view_item'=>__('view insights', 'bluehost'),
            'new_item'=>__('new insights', 'bluehost'),
            'not_found'=>__('soory we cannot found', 'bluehost')
        ),
        'menu_icon'=> 'dashicons-insert',
        'public'=> true,
        'publicly_queryable'=> true,
        'exclude_from_search'=> true,
        'hierarchical'=> true,
        'show_ui'=> true,
        'has_archive'=> true,
        'capability_type'=> 'post',
        'rewrite'=> array('slug'=> 'insights'),
        'supports'=> array('thumbnail', 'excerpt', 'editor', 'title'),
    ));

    
}
add_action('init', 'new_image_custom_post');