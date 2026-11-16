<?php
function jayed_customize ($wp_customize) {
    // Logo Customize
    $wp_customize->add_section("jayed_header", array(
        'title' =>__("Header-Area","wordpresslearning"),
        'description' => 'if you update your logo you can do it.'
    ));
    $wp_customize->add_setting("add_logo", array(
        'default' => get_bloginfo('template_directory') .'/img/watch.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,"add_logo", array( 
        'label' => 'Logo_Upload',
        'setting' => 'add_logo',
        'section' => 'jayed_header',
        'description' => 'if you  it.',
    )) 

    );
   //Nav_Menu_customize

   $wp_customize->add_section('nav_menu', array(
    'title'=>__('Menu-Position-option','wordpresslearning'),
    'description'=> 'If you wanted change your nav menu you can do it'
   ));
   
   $wp_customize->add_setting('nav_menu_option', array(
    'default'=> 'right_menu'
   ));
   $wp_customize->add_control('nav_menu_option', array(
    'label' => 'Menu Option',
    'setting' => 'nav_menu_option',
    'section' => 'nav_menu',
    'description' => 'here you can choose',
    'type' => 'radio',
    'choices' => array(
     'left_menu' => 'Left Menu',
     'right_menu' => 'Right Menu',
     'center_menu' => 'Center Menu'
    )
    ));
// Footer Customize


$wp_customize->add_section('copyright_section', array(
    'title'=>__('Footer Section', 'wordpresslearning'),
    'description'=> 'You can change Any Footer'  
));
$wp_customize->add_setting('jayed_copyright', array(
    'default' => '&Copy; Copyright 2021 | Procoder@BD'
));
$wp_customize->add_control('jayed_copyright', array(
    'label'=> 'rain_footer',
    'setting'=> 'jayed_copyright',
    "section"=> "copyright_section",
    "description"=> "You Do Anything"
));

// Theme colors adding
$wp_customize-> add_section('jayed_color', array(
    'title'=>__('Theme Color', 'wordpresslearning'),
    'description' => 'If you need you can change'
));
$wp_customize-> add_setting('jayed_bg_color', array(
    'default'=> '#ffffff'
));
$wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'jayed_bg_color', array(
    'label' => 'Background color',
    'section' => 'jayed_color',
    'setting' => 'jayed_bg_color',
)));
$wp_customize-> add_setting('jayed_primary_color', array(
    'default'=> '#ea1a70'
));
$wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'jayed_primary_color', array(
    'label' => 'Primary color',
    'section' => 'jayed_color',
    'setting' => 'jayed_primary_color',
)));



}

add_action("customize_register" ,"jayed_customize" );
// Color customize
function jayed_theme_color_cus() {
    ?>
<style>
body{background: <?php echo get_theme_mod('jayed_bg_color'); ?> }
:root {--pink:  <?php echo get_theme_mod('jayed_primary_color'); ?>}

</style>

<?php
}

add_action('wp_head','jayed_theme_color_cus' );




