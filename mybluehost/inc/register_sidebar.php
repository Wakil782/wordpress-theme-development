<?php

function bluehost_register_sidebar(){
    register_sidebar(array(
        'name'=>__('First Footer', 'bluehost'),
        'id'=> 'first_footer',
        'description'=>__('First Widgets Here', 'bluehost'),
        'before_widget'=> '<div class="first_sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="footer_title">',
        'after_title'=> '</h2>',
    ));
    register_sidebar(array(
        'name'=>__('second Footer', 'bluehost'),
        'id'=> 'second_footer',
        'description'=>__('First Widgets Here', 'bluehost'),
        'before_widget'=> '<div class="first_sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="footer_title">',
        'after_title'=> '</h2>',
    ));
    register_sidebar(array(
        'name'=>__('third Footer', 'bluehost'),
        'id'=> 'third_footer',
        'description'=>__('First Widgets Here', 'bluehost'),
        'before_widget'=> '<div class="first_sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="footer_title">',
        'after_title'=> '</h2>',
    ));

}
add_action('widgets_init', 'bluehost_register_sidebar');