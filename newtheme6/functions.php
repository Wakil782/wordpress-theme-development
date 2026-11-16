<?php

function newtheme_css_js_file_calling() {
    // CSS
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('meanmenu-css', get_template_directory_uri() . '/css/meanmenu.min.css');
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/custom.css');

    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.min.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'meanmenu'), null, true);
}
add_action('wp_enqueue_scripts', 'newtheme_css_js_file_calling');

function newtheme_setup_theme() {
    register_nav_menus(array(
        'main_menu' => __('Main Menu', 'newtheme')
    ));
    add_theme_support('custom-logo', array(
        'width'=> 400,
        'height'=> 100,
        'flex_width'=> true,
        'flex_height'=> true,
    ));
}
add_action('after_setup_theme', 'newtheme_setup_theme');







function newtheme_service(){
    register_post_type('service', array(
        'labels'=> array(
            'name'=>__('services', 'newtheme6'),
            'singular_name'=>__('service', 'newtheme6'),
            'add_new'=>__('Add service', 'newtheme6'),
            'add_new_item'=>__('Add New service', 'newtheme6'),
            'view_item'=>__('view service', 'newtheme6'),
            'new_item'=>__('new service', 'newtheme6'),
            'edit_item'=>__('edit service', 'newtheme6'),
            'not_found'=>__('soory we cant found', 'newtheme6'),
        ),
        'menu_icon'=> 'dashicons-align-left',
        'menu_position'=> 5,
        'publicly_queryable' => true,
        'show_ui'=> true,
        'has_archive'=> true,
        'exclude_from_search'=> true,
        'capability_type'=> 'post',
        'public' => true,
        'rewrite'=> array('slug'=> 'service'),
        'supports'=> array('title', 'excerpt', 'thumbnail', 'editor'),
    ));
}
add_action('init', 'newtheme_service');

function service_meta_box_service(){
    add_meta_box(
        'project_info',
        'project details',
        'project_info_callback',
        'service',
        'normal',
        'high',
    );
}
add_action('add_meta_boxes', 'service_meta_box_service');

        
function project_info_callback($post){
    $project_html = get_post_meta($post->ID, 'project_html', true);
    $project_css = get_post_meta($post->ID, 'project_css', true);
    ?>
     <p>
        <input type="text" name="project_html" value="<?php echo esc_attr($project_html); ?>">
     </p>
     <p>
        <input type="text" name="project_css" value="<?php echo esc_attr($project_css); ?>">
     </p>
    <?php
}

function project_save_meta_info($post_id){
    if(isset($_POST['project_html'])){
        update_post_meta($post_id, 'project_html', sanitize_text_field($_POST['project_html']));
    }
    if(isset($_POST['project_css'])){
        update_post_meta($post_id, 'project_css', sanitize_text_field([$_POST('project_css')]));
    }
}
add_action('save_post', 'project_save_meta_info');





