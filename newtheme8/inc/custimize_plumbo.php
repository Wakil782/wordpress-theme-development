<?php
function plumbo_customize_register($wp_customize){
    $wp_customize-> add_section('header-plumbo-text', array(
        'title'=>__('Plum Header Text', 'plumbo'),
        'description'=> 'Add your header text here',
    ));
    $wp_customize->add_setting('header-plumbo-setting', array(
        'default'=> 'Reliable &',     
    ));
    $wp_customize->add_control('header-plumbo-setting', array(
        'label'=> 'plumbo text',
        'section'=> 'header-plumbo-text',
        'settings'=> 'header-plumbo-setting',
        'type'=> 'text',
    ));

    $wp_customize->add_setting('header-plumbo-setting-new', array(
        'default'=> 'Reliable &',      
    ));
    $wp_customize->add_control('header-plumbo-setting-new', array(
        'label'=> 'plumbo text',
        'section'=> 'header-plumbo-text',
        'settings'=> 'header-plumbo-setting-new',
        'type'=> 'text',
    ));

    $wp_customize->add_setting('header-plumbo-setting-service', array(
        'default'=> 'Reliable &',
        
    ));
    $wp_customize->add_control('header-plumbo-setting-service', array(
        'label'=> 'plumbo text',
        'section'=> 'header-plumbo-text',
        'settings'=> 'header-plumbo-setting-service',
        'type'=> 'text',
    ));


    //Achievement Control 


}
add_action('customize_register', 'plumbo_customize_register');


function mytheme_customize_register($wp_customize) {

    $wp_customize->add_section('achivement-plumbo-text', array(
        'title'=>__('Achievement Header Text', 'plumbo'),
        'description'=> 'Add your pluming text here',
    ));

    // Text setting 1
    $wp_customize->add_setting('achievement-plumbo-setting', array(
        'default'=> 'Achievement',     
    ));
    $wp_customize->add_control('achievement-plumbo-setting', array(
        'label'=> 'plumbo text',
        'section'=> 'achivement-plumbo-text',
        'settings'=> 'achievement-plumbo-setting',
        'type'=> 'text',
    ));

    // Text setting 2
    $wp_customize->add_setting('achievement-text-plumbo-setting', array(
        'default'=> 'Your Unoppertunities The Plumbing Enpuity',     
    ));
    $wp_customize->add_control('achievement-text-plumbo-setting', array(
        'label'=> 'plumbo text',
        'section'=> 'achivement-plumbo-text',
        'settings'=> 'achievement-text-plumbo-setting',
        'type'=> 'text',
    ));

    // Number settings
    $wp_customize->add_setting('counter_plumber_number_setting', array(    
        'default'=> 20,
    ));
    $wp_customize->add_control('counter_plumber_number_setting', array(
        'label'=> 'add your number',
        'section'=> 'achivement-plumbo-text',
        'settings'=> 'counter_plumber_number_setting',
        'type'=> 'number',
    ));

    $wp_customize->add_setting('counter_plumber_number_setting_new', array(
        'default'=> 1500,   
    ));
    $wp_customize->add_control('counter_plumber_number_setting_new', array(
        'label'=> 'add your number',
        'section'=> 'achivement-plumbo-text',
        'settings'=> 'counter_plumber_number_setting_new',
        'type'=> 'number',
    ));

    $wp_customize->add_setting('counter_plumber_number_setting_old', array(
        'default'=> 1000,    
    ));
    $wp_customize->add_control('counter_plumber_number_setting_old', array(
        'label'=> 'add your number',
        'section'=> 'achivement-plumbo-text',
        'settings'=> 'counter_plumber_number_setting_old',
        'type'=> 'number',
    ));

    $wp_customize->add_setting('counter_plumber_number_setting_head', array(
        'default'=> 2500,    
    ));
    $wp_customize->add_control('counter_plumber_number_setting_head', array(
        'label'=> 'add your number',
        'section'=> 'achivement-plumbo-text',
        'settings'=> 'counter_plumber_number_setting_head',
        'type'=> 'number',
    ));
}
add_action('customize_register', 'mytheme_customize_register');
