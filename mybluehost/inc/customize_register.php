<?php

function  bluehost_customize_register($wp_customize){
    $wp_customize->add_section('google_font_rating', array(
        'title'=>__('Star Rating', 'bluehost'),
        'description'=> 'Here are the google star rating ',
    ));
    $wp_customize->add_setting('google_font_rating_setting', array(
        'default'=> 'fa-solid fa-star',
    ));
    $wp_customize->add_control('google_font_rating_setting', array(
        'label'=> 'Rate Your Rating',
        'section'=> 'google_font_rating',
        'settings'=> 'google_font_rating_setting',
        'type'=> 'select',
        'choices'=> array(
            'fa-solid fa-star'=> 'solid star',
            'fa-regular fa-star' => 'Regular Star',
            'fa-solid fa-star-half-stroke' => 'Half Star'
        ),
    ));
    // google text
    $wp_customize->add_setting('google_font_text', array(
        'default'=> '5.0 Rating on',
    ));
    $wp_customize->add_control('google_font_text', array(
        'label'=> 'Rating Text',
        'section'=> 'google_font_rating',
        'settings'=> 'google_font_text',
        'type'=> 'text',
    ));
    // Removed Text
    $wp_customize->add_section('remove_text', array(
        'title'=>__('Text Removed', 'bluehost'),
        'description'=> 'Here are the google star rating ',
    ));
    $wp_customize->add_setting('removed_text_setting', array(
        'default'=> 'We specialize in',
    ));
    $wp_customize->add_control('removed_text_setting', array(
        'label'=> 'Rate Your Rating',
        'section'=> 'remove_text',
        'settings'=> 'removed_text_setting',
        'type'=> 'text',
    ));

    // home service 
    $wp_customize->add_section('home_service_section', array(
        'title'=>__('Home Service', 'bluehost'),
        'description'=> 'here are the top',
    ));
    $wp_customize->add_setting('home_service_setting', array(
        'default'=> 'Specialized strategies for high-compliance and high-competition sectors.',
    ));
    $wp_customize->add_control('home_service_setting', array(
        'label'=> 'home_service',
        'section'=> 'home_service_section',
        'settings'=> 'home_service_setting',
        'type'=> 'text',
    ));
    // p text here
    $wp_customize->add_setting('home_service_setting_text', array(
        'default'=> 'Industries We Scale',
    ));
    $wp_customize->add_control('home_service_setting_text', array(
        'label'=> 'home_service',
        'section'=> 'home_service_section',
        'settings'=> 'home_service_setting_text',
        'type'=> 'text',
    ));

    // Faq Question
    $wp_customize->add_section('faq_first_questuions', array(
        'title'=>__('First Section Questions', 'bluehost'),
        'description'=> 'new faq section',
    ));
    $wp_customize->add_setting('faq_first_settings', array(
        'default'=> 'What are your PPC management fees?',
    ));
    $wp_customize->add_control('faq_first_settings', array(
        'label'=> 'Faq', 
        'settings'=> 'faq_first_settings',
        'section'=> 'faq_first_questuions',
        'type'=> 'text',
    ));

    // 1st answer
    $wp_customize->add_setting('faq_first_settings_answer', array(
        'default'=> 'We typically charge a flat management fee or a percentage of ad spend. Transparent pricing with no hidden setup fees.',
    ));
    $wp_customize->add_control('faq_first_settings_answer', array(
        'label'=> 'first answer Faq', 
        'settings'=> 'faq_first_settings_answer',
        'section'=> 'faq_first_questuions',
        'type'=> 'text',
    ));
    // second question
    $wp_customize->add_setting('faq_first_settings_second_question', array(
        'default'=> 'Do you require long-term contracts?',
    ));
    $wp_customize->add_control('faq_first_settings_second_question', array(
        'label'=> 'second question Faq', 
        'settings'=> 'faq_first_settings_second_question',
        'section'=> 'faq_first_questuions',
        'type'=> 'text',
    ));
    // second answer
    $wp_customize->add_setting('faq_first_settings_second_answer', array(
        'default'=> 'No. Most of our services are month-to-month. We believe in earning your business every 30 days.',
    ));
    $wp_customize->add_control('faq_first_settings_second_answer', array(
        'label'=> 'Second Answer nFaq', 
        'settings'=> 'faq_first_settings_second_answer',
        'section'=> 'faq_first_questuions',
        'type'=> 'text',
    ));
    // third question
    $wp_customize->add_setting('faq_first_settings_third_question', array(
        'default'=> 'How fast can we see results from SEO?',
    ));
    $wp_customize->add_control('faq_first_settings_third_question', array(
        'label'=> 'third questions Faq', 
        'settings'=> 'faq_first_settings_third_question',
        'section'=> 'faq_first_questuions',
        'type'=> 'text',
    ));
    // third answer
    $wp_customize->add_setting('faq_first_settings_third_answer', array(
        'default'=> 'SEO is long-term (3-6 months), but our audits often find quick wins in the first 30 days.',
    ));
    $wp_customize->add_control('faq_first_settings_third_answer', array(
        'label'=> 'third answer Faq', 
        'settings'=> 'faq_first_settings_third_answer',
        'section'=> 'faq_first_questuions',
        'type'=> 'text',
    ));

    // foodprint digital

    $wp_customize->add_section('foodprint_first_button', array(
        'title'=>__('FoodPrint', 'bluehost'),
        'description'=> 'FREE TOOL',
    ));
    $wp_customize->add_setting('foodprint_first_button_text', array(
        'default'=> 'FREE TOOL',
    ));
    $wp_customize->add_control('foodprint_first_button_text', array(
        'label'=> 'Foodprint', 
        'settings'=> 'foodprint_first_button_text',
        'section'=> 'foodprint_first_button',
        'type'=> 'text',
    ));

    $wp_customize->add_setting('foodprint_heading_settings', array(
        'default'=> 'Scan Your Digital Footprint',
    ));
    $wp_customize->add_control('foodprint_heading_settings', array(
        'label'=> 'Foodprint new h1 ', 
        'settings'=> 'foodprint_heading_settings',
        'section'=> 'foodprint_first_button',
        'type'=> 'text',
    ));

    $wp_customize->add_setting('foodprint_peragraph_settings', array(
        'default'=> 'Instant analysis of your SEO health and listings.',
    ));
    $wp_customize->add_control('foodprint_peragraph_settings', array(
        'label'=> 'Foodprint new peragraph ', 
        'settings'=> 'foodprint_peragraph_settings',
        'section'=> 'foodprint_first_button',
        'type'=> 'text',
    ));

    $wp_customize->add_setting('foodprint_link_settings', array(
        'default'=> 'Start Scan →',
    ));
    $wp_customize->add_control('foodprint_link_settings', array(
        'label'=> 'Foodprint new link ', 
        'settings'=> 'foodprint_link_settings',
        'section'=> 'foodprint_first_button',
        'type'=> 'text',
    ));
    
    
    //    footer section

    $wp_customize->add_section('footer_section', array(
    'title' => __('Footer Section', 'bluehost'),
    'description' => 'Footer section is ready',
    ));

    $wp_customize->add_setting('image_footer_setting', array(
        'default' => get_template_directory_uri() . '/img/footer-logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_footer_setting', array(
        'label' => 'Footer Logo',
        'section' => 'footer_section',
        'settings' => 'image_footer_setting',
    )));

    $wp_customize->add_setting('footer_peragrapth_text', array(
        'default'=> 'Data-driven digital marketing for ambitious brands. We turn search intent into revenue.',
    ));
    $wp_customize->add_control('footer_peragrapth_text', array(
        'label'=> 'Foodprint new link ', 
        'settings'=> 'footer_peragrapth_text',
        'section'=> 'footer_section',
        'type'=> 'text',
    ));
    $wp_customize->add_setting('footer_call_text', array(
        'default'=> '(602) 688-4479',
    ));
    $wp_customize->add_control('footer_call_text', array(
        'label'=> 'Foodprint new link ', 
        'settings'=> 'footer_call_text',
        'section'=> 'footer_section',
        'type'=> 'text',
    ));
    $wp_customize->add_setting('footer_envalop_text', array(
        'default'=> 'info@thinksophisticated.com',
    ));
    $wp_customize->add_control('footer_envalop_text', array(
        'label'=> 'Foodprint new link ', 
        'settings'=> 'footer_envalop_text',
        'section'=> 'footer_section',
        'type'=> 'text',
    ));
 

    
}
add_action('customize_register', 'bluehost_customize_register');