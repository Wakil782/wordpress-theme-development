<?php 

function plumbo_repair(){
    register_post_type('repair', array(
        'labels'=> array(
            'name'=>__('Repairs', 'plumbo'),
            'singular_name'=>__('Repair', 'plumbo'),
            'add_new'=>__('add new Repair', 'plumbo'),
            'add_new_item'=>__('add new Repair', 'plumbo'),
            'view_item'=>__('view Repair', 'plumbo'),
            'new_item'=>__('new Repair', 'plumbo'),
            'edit_item'=>__('edit Repair', 'plumbo'),
            'not_found'=>__('Soory We cannot Repair', 'plumbo'),
        ),
        'menu_icon'=> 'dashicons-buddicons-pm',
        'exclude_from_search'=> true,
        'publicly_queryable'=> true,
        'show_ui'=> true,
        'has_archive'=> true,
        'public'=> true,
        'hierarchical'=> true,
        'capability_type'=> 'post',
        'rewrite'=> array('slug'=> 'repair'),
        'supports'=> array('thumbnail', 'title', 'editor', 'excerpt'),
    ));
}


add_action('init', 'plumbo_repair');

// Custom Post Type Register Function

function pipe_plumbo_repair() {
    register_post_type( 'pipe', array(
        'labels' => array(
            'name'               => __( 'Pipes', 'plumbo' ),
            'singular_name'      => __( 'Pipe', 'plumbo' ),
            'add_new'            => __( 'Add New Pipe', 'plumbo' ),
            'add_new_item'       => __( 'Add New Pipe', 'plumbo' ),
            'edit_item'          => __( 'Edit Pipe', 'plumbo' ),
            'new_item'           => __( 'New Pipe', 'plumbo' ),
            'view_item'          => __( 'View Pipe', 'plumbo' ),
            'not_found'          => __( 'Sorry, no pipe found.', 'plumbo' ),
            'not_found_in_trash' => __( 'No pipe found in Trash.', 'plumbo' ),
        ),
        'menu_icon'            => 'dashicons-admin-tools', // বৈধ Dashicon ব্যবহার করা হলো
        'public'               => true,
        'show_ui'              => true,
        'has_archive'          => true,
        'hierarchical'         => false, // সাধারণত CPT এর জন্য false রাখা ভালো
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'pipe' ),
        'supports'             => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'exclude_from_search'  => true,
        'publicly_queryable'   => true,
    ));
}

add_action( 'init', 'pipe_plumbo_repair' );



function strategles_cpt() {
    register_post_type( 'strategles', array(
        'labels' => array(
            'name'               => __( 'strategles', 'plumbo' ),
            'singular_name'      => __( 'strategles', 'plumbo' ),
            'add_new'            => __( 'Add New strategles', 'plumbo' ),
            'add_new_item'       => __( 'Add New strategles', 'plumbo' ),
            'edit_item'          => __( 'Edit strategles', 'plumbo' ),
            'new_item'           => __( 'New strategles', 'plumbo' ),
            'view_item'          => __( 'View strategles', 'plumbo' ),
            'not_found'          => __( 'Sorry, no pipe found.', 'plumbo' ),
            'not_found_in_trash' => __( 'No pipe found in Trash.', 'plumbo' ),
        ),
        'menu_icon'            => 'dashicons-editor-outdent', // বৈধ Dashicon ব্যবহার করা হলো
        'public'               => true,
        'show_ui'              => true,
        'has_archive'          => true,
        'hierarchical'         => false, // সাধারণত CPT এর জন্য false রাখা ভালো
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'strategles' ),
        'supports'             => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'exclude_from_search'  => true,
        'publicly_queryable'   => true,
    ));
}

add_action( 'init', 'strategles_cpt' );

