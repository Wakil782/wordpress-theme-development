<?php

function begma_news_customize_register($wp_customize){
    $wp_customize->add_section('begma_news_section', array(
        'title'=>__('News Tag Here', 'begma'),
        'description'=> 'News Post Here',
    ));
    $wp_customize->add_setting('begma_news_settings', array(
        'default'=> 'News'
    ));
    $wp_customize->add_control('begma_news_settings', array(
        'label'=> 'Begma Label News',
        'section'=> 'begma_news_section',
        'settings'=> 'begma_news_settings',
        'type'=> 'text'
    ));
    // Button Text
    $wp_customize->add_setting('begma_news_button_text_settings', array(
        'default'=> 'View All News'
    ));
    $wp_customize->add_control('begma_news_button_text_settings', array(
        'label'=> 'Begma Label News',
        'section'=> 'begma_news_section',
        'settings'=> 'begma_news_button_text_settings',
        'type'=> 'text'
    ));

    // Image section
    $wp_customize->add_setting('begma_news_settings_images', array(
        'default'=> get_template_directory_uri(  ) .'/img/Line_1.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'begma_news_settings_images', array(
        'label'=> 'Begma Label News',
        'section'=> 'begma_news_section',
        'settings'=> 'begma_news_settings_images',
    )));
}
add_action('customize_register', 'begma_news_customize_register');