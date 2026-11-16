<?php

function new_cpt_begma(){

    register_post_type('bangladesh', array(

        'labels' => array(
            'name'          => __('Bangladesh', 'begma'),
            'singular_name' => __('Bangladesh', 'begma'),
            'add_new'       => __('Add Bangladesh', 'begma'),
            'add_new_item'  => __('Bangladesh New Item', 'begma'),
            'view_item'     => __('View Bangladesh', 'begma'),
            'new_item'      => __('New Bangladesh', 'begma'),
            'edit_item'     => __('Edit Bangladesh', 'begma'),
            'not_found'     => __('Sorry, we cannot found', 'begma')
        ),

        'menu_icon'           => 'dashicons-flag',
        'exclude_from_search' => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
        'publicly_queryable'  => true,
        'has_archive'         => true,
        'show_ui'             => true,
        'public'              => true,
        'rewrite'             => array(
        'slug'                => 'bangladesh'),
        'supports'            => array('title','editor','thumbnail')
    ));
    // innumerable  cpt
    register_post_type('innumerable', array(

        'labels' => array(
            'name'          => __('innumerable', 'begma'),
            'singular_name' => __('innumerable', 'begma'),
            'add_new'       => __('Add innumerable', 'begma'),
            'add_new_item'  => __('innumerable New Item', 'begma'),
            'view_item'     => __('View innumerable', 'begma'),
            'new_item'      => __('New innumerable', 'begma'),
            'edit_item'     => __('Edit innumerable', 'begma'),
            'not_found'     => __('Sorry, we cannot found', 'begma')
        ),

        'menu_icon'           => 'dashicons-pets',
        'exclude_from_search' => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
        'publicly_queryable'  => true,
        'has_archive'         => true,
        'show_ui'             => true,
        'public'              => true,
        'rewrite'             => array('slug'=> 'innumerable'),
        'supports'            => array('title','editor','thumbnail')
    )); 
    // Function facalities
    register_post_type('facalities', array(

        'labels' => array(
            'name'          => __('facalities', 'begma'),
            'singular_name' => __('facalities', 'begma'),
            'add_new'       => __('Add facalities', 'begma'),
            'add_new_item'  => __('facalities New Item', 'begma'),
            'view_item'     => __('View facalities', 'begma'),
            'new_item'      => __('New facalities', 'begma'),
            'edit_item'     => __('Edit facalities', 'begma'),
            'not_found'     => __('Sorry, we cannot found', 'begma')
        ),

        'menu_icon'           => 'dashicons-cloud',
        'exclude_from_search' => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
        'publicly_queryable'  => true,
        'has_archive'         => true,
        'show_ui'             => true,
        'public'              => true,
        'rewrite'             => array('slug' => 'facalities'),
        'supports'            => array('title','editor','thumbnail')
    )); 
    // news cpt
    register_post_type('news', array(

        'labels' => array(
            'name'          => __('news', 'begma'),
            'singular_name' => __('news', 'begma'),
            'add_new'       => __('Add news', 'begma'),
            'add_new_item'  => __('news New Item', 'begma'),
            'view_item'     => __('View news', 'begma'),
            'new_item'      => __('New news', 'begma'),
            'edit_item'     => __('Edit news', 'begma'),
            'not_found'     => __('Sorry, we cannot found', 'begma')
        ),

        'menu_icon'           => 'dashicons-heart',
        'exclude_from_search' => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
        'publicly_queryable'  => true,
        'has_archive'         => true,
        'show_ui'             => true,
        'public'              => true,
        'rewrite'             => array('slug' => 'news'),
        'supports'            => array('title','editor','thumbnail')
    )); 

    // Daily Digest
    register_post_type('digest', array(
        'labels'=> array(
            'name' =>__('digest', 'begma'),
            'singular_name'=>__('digest', 'begma'),
            'add_new'=>__('add new digest', 'begma'),
            'add_new_item'=>__('add new digest', 'begma'),
            'view_item'=>__('View digest', 'begma'),
            'new_item'=>__('new digest', 'begma'),
            'edit_item'=>__('edit digest', 'begma'),
            'not_found'=>__('soory we /n can not found', 'begma')
        ),
        'menu_icon'           => 'dashicons-embed-photo',
        'exclude_from_search' => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
        'publicly_queryable'  => true,
        'has_archive'         => true,
        'show_ui'             => true,
        'public'              => true,
        'rewrite'             => array('slug' => 'digest'),
        'supports'            => array('title','editor','thumbnail')
    ));

}

add_action('init', 'new_cpt_begma');  
