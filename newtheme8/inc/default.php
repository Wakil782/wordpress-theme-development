<?php

function plumbo_setup_theme(){
   add_theme_support('title');
   add_theme_support('post-thumbnails');


   add_theme_support('custom-header', array(
        'width'=> 1920,
        'height'=> 600,
        'flex_width'=> true,
        'flex_height'=> true,
        'header_text'=> false,
   ));

   register_nav_menus(array(
    'main_menu'=>__('main menu', 'plumbo'),
    'sub_menu'=>__('login menu', 'plumbo'),
    'footer_menu'=>__('first footer menu', 'plumbo'),
    'second_menu'=>__('second footer menu', 'plumbo'),
    'third_menu'=>__('third menu', 'plumbo'),
   ));
}
add_action('after_setup_theme', 'plumbo_setup_theme');