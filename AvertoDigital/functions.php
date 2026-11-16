<?php


function avertodigital_css_js_calling_for_my_theme(){
    wp_enqueue_style('main-css', get_stylesheet_uri(  ));
    wp_register_style('bootstrap-css', get_template_directory_uri(  ) . '/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_register_style('custom-js', get_template_directory_uri(  ) . '/css/custom.css', array(), '1.0.0', 'all');

    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('custom-js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri(  ) . '/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('main-js', get_template_directory_uri(  ) . '/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'avertodigital_css_js_calling_for_my_theme');

// calling font-awesome

function my_theme_assets(){
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
    );
}
add_action('wp_enqueue_scripts', 'my_theme_assets');

function avertodigital_default_setting(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' => 80,
        'height'=> 50
    ));
    register_nav_menus(array(
        'main_menu'=>__('Display Menu', 'avertodigital'),
        'primary_menu'=>__('other menu', 'avertodigital')
    ));
}
add_action('after_setup_theme', 'avertodigital_default_setting');


function avertodigital_wp_customize($wp_customize){
    $wp_customize->add_section('first_section_home', array(
        'title'=>__('Home First Section', 'avertodigital'),
        'description'=> 'If Neened You Can Change Image Text Or Logo Anythings'
    ));
    $wp_customize->add_setting('home_first_image', array(
        'default'=> get_template_directory_uri(  ) . '/img/world2.jpg',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_first_image', array(
        'label'=> 'Image Settings',
        'section'=> 'first_section_home',
        'settings'=> 'home_first_image',
    )));
    // Main Heading Text
    $wp_customize->add_setting('home_first_text', array(
        'default'=> 'your digital succuess, our mission',
    ));
    $wp_customize->add_control( 'home_first_text', array(
        'label'=> 'Heading Text',
        'section'=> 'first_section_home',
        'settings'=> 'home_first_text',
        'type'=> 'text'
    ));
    // Home First Text
    $wp_customize->add_setting('home_first_peragrapth_text', array(
        'default'=> 'Avertodigital.com is a web developmendigital marketing and creative design agency in Pakistan.',
    ));
    $wp_customize->add_control( 'home_first_peragrapth_text', array(
        'label'=> 'Heading Text',
        'section'=> 'first_section_home',
        'settings'=> 'home_first_peragrapth_text',
        'type'=> 'text'
    ));
    //  First Button Text
    $wp_customize->add_setting('home_first_button', array(
        'default'=> 'Talk An Excerpt',
    ));
    $wp_customize->add_control( 'home_first_button', array(
        'label'=> 'first Button  Text',
        'section'=> 'first_section_home',
        'settings'=> 'home_first_button',
        'type'=> 'text'
    ));
    // second button Text
    $wp_customize->add_setting('Second_button_text', array(
        'default'=> 'view case studies',
    ));
    $wp_customize->add_control( 'Second_button_text', array(
        'label'=> 'first Button  Text',
        'section'=> 'first_section_home',
        'settings'=> 'Second_button_text',
        'type'=> 'text'
    ));
    // Our Corth Section 
    $wp_customize->add_setting('our_core_first', array(
        'default'=> 'Our Core Streath',
    ));
    $wp_customize->add_control( 'our_core_first', array(
        'label'=> 'Core Streath',
        'section'=> 'first_section_home',
        'settings'=> 'our_core_first',
        'type'=> 'text'
    ));
    // Second Core Heading
    $wp_customize->add_setting('our_core_second', array(
        'default'=> 'your trusted partner in digital growth',
    ));
    $wp_customize->add_control( 'our_core_second', array(
        'label'=> 'Core Streath Second',
        'section'=> 'first_section_home',
        'settings'=> 'our_core_second',
        'type'=> 'text'
    ));
    // Third Core
    $wp_customize->add_setting('our_core_third', array(
        'default'=> 'Avertodigital.com is a web development, digital marketing, and creative design agency in Pakistan.<br>We provide solutions to all businesses to grow online. From building functional websites',
    ));
    $wp_customize->add_control( 'our_core_third', array(
        'label'=> 'Core Streath Third',
        'section'=> 'first_section_home',
        'settings'=> 'our_core_third',
        'type'=> 'text'
    ));
}

add_action('customize_register', 'avertodigital_wp_customize');


// Strategic Thinking cpt
function strategic_thinking_cpt(){
    register_post_type('strategic', array(
        'labels'=> array(
            'name'=>__('strategic', 'avertodigital'),
            'singular_name' =>__('strategic', 'avertodigital'),
            'add_new'=>__('add new strategic', 'avertodigital'),
            'add_new_item'=>__('add new strategic', 'avertodigital'),
            'view_item'=>__('view strategic', 'avertodigital'),
            'new_item'=>__('new strategic', 'avertodigital'),
            'not_found'=>__('Sorry we cannot found strategic', 'avertodigital')
        ),
        'menu_icon'=> 'dashicons-food',
        'public'=> true,
        'publicly_queryable'=> true,
        'has_archive'=> true,
        'show_ui'=> true,
        'exclude_from_search'=> true,
        'rewrite'=>array('slug'=> 'strategic'),
        'supports'=> array('title', 'thumbnail', 'editor'),
    ));
}
add_action('init', 'strategic_thinking_cpt');

