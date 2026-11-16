<?php

// Sidebar area function

function jayed_widgets_sidebar() {
    register_sidebar( array(
     'name'=>__('Main Widget Area','wordpresslearning'),
     'id'=> 'sidebar-1',
     'description'=>__('Appearns on the sidebar and the other thing','wordpresslearning'),
     'before_widget'=> '<div class="child_sidebar">',
     'after_widget'=> '</div>',
     'before_title'=> '<h2 class="title">',
     'after_title'=> '</h2>'

    ));
    register_sidebar( array(
        'name'=>__('Footer 1','wordpresslearning'),
        'id'=> 'footer-1',
        'description'=>__('Appearns on the sidebar and the other thing','wordpresslearning'),
        'before_widget'=> '<div class="child_sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>'
   
       ));
       register_sidebar( array(
        'name'=>__('Footer 2','wordpresslearning'),
        'id'=> 'footer-2',
        'description'=>__('Appearns on the sidebar and the other thing','wordpresslearning'),
        'before_widget'=> '<div class="child_sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>'
   
       ));
       register_sidebar( array(
        'name'=>__('Footer 3','wordpresslearning'),
        'id'=> 'footer-3',
        'description'=>__('Appearns on the sidebar and the other thing','wordpresslearning'),
        'before_widget'=> '<div class="child_sidebar">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>'
   
       ));
       register_sidebar( array(
        'name'=>__('Home Widget','wordpresslearning'),
        'id'=> 'home-4',
        'description'=>__('Appearns on the sidebar and the other thing','wordpresslearning'),
        'before_widget'=> '<div class="child_home">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>'
   
       ));
       
}

add_action('widgets_init','jayed_widgets_sidebar');