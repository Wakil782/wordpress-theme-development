<?php

// This is sidebar function

function wakil_widgets(){
    register_sidebar(array(
        'name' =>__('Sidebar Widgets', 'practicetheme'),
        'id'=> 'sidebar-1',
        'before_widget'=> '<div class="div_widget">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>',
    ));
  
    register_sidebar(array(
        'name'=>__('Footer_Widgets', 'practicetheme'), 
         'id' => 'footer-1',
        'before_widget'=> '<div class="footer_area">',
        'after_widget'=> '</div>',
        'before_div' => '<h2 class="footer_title">',
        'after_title'=> '</h2>',
    ));
      register_sidebar(array(
        'name'=>__('Footer_Widgets_2', 'practicetheme'),
        'id'=> 'footer-2',
        'before_widget'=> '<div class="footer_area_sidebar">',
        'after_widget'=> '</div>',
        'before_div' => '<h2 class="footer_title_footer">',
        'after_title'=> '</h2>',
    ));
      register_sidebar(array(
        'name'=>__('Footer_Widgets_3', 'practicetheme'),
        'id'=> 'footer-3',
        'before_widget'=> '<div class="footer_area_widget">',
        'after_widget'=> '</div>',
        'before_div' => '<h2 class="footer_title_widget">',
        'after_title'=> '</h2>',
    ));
       register_sidebar(array(
        'name'=>__('Home', 'practicetheme'),
        'id'=> 'home_1',
        'before_widget'=> '<div class="footer_area_widget">',
        'after_widget'=> '</div>',
        'before_div' => '<h2 class="footer_title_widget">',
        'after_title'=> '</h2>',
    ));


}

add_action('widgets_init', 'wakil_widgets');
