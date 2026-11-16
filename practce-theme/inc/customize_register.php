<?php
// Customizer register

function wakil_customize($wp_customize){
    $wp_customize-> add_section('logo_option', array(
        'title'=>__('Logo Area', 'practicetheme'),
        'description'=>'if Neded You can update your profile',
    ));
    $wp_customize->add_setting('logo_option_setting', array(
        'default' => get_template_directory_uri() .'/img/logo.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_option_setting', array(
        'label' => 'Logo Upload',
        'settings' => 'logo_option_setting',
        'section' => 'logo_option',
        'description' => 'I love jannat',
    )));
    
    // Header menu Option
     $wp_customize-> add_section('header_option', array(
        'title'=>__('Here Area', 'practicetheme'),
        'description'=>'if Neded You can update your Here Area',
    ));
    $wp_customize->add_setting('header_option_setting', array(
        'default' => 'right_menu'
    ));

   $wp_customize -> add_control('header_option_setting', array(
       'label' => 'Header Option',
       'settings'=> 'header_option_setting',
       'section'=> 'header_option',
       'description'=> 'You can change your header option',
       'type' => 'radio',
       'choices'=> array(
        'right_menu' => 'Right Menu',
        'left_menu' => 'Left Menu',
        'center_menu' => 'Center Menu'
       ),
    ));

// Footer Menu Optimization

 $wp_customize->add_section('footer_section', array(
    'title'=>__('Footer Area', 'practicetheme'),
    'description'=> 'Here is your footer asre secton',
 ));
 $wp_customize->add_setting('footer_setting', array(
    'default'=> 'This chanel produce by @procoderBD',
 ));
 $wp_customize->add_control('footer_setting', array(
    'label'=> 'Footer Label',
    'settings'=> 'footer_setting',
    'section'=> 'footer_section',
    'description'=> 'You Can change your footer area'
 ));



}



add_action('customize_register', 'wakil_customize');