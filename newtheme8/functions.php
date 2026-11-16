<?php

// Css Js File plumbo

include_once('inc/enqueue_scripts.php');

// Customizer plumbo

include_once('inc/default.php');





// Customizer plumbo

include_once('inc/custimize_plumbo.php');


// Custom Post Type

include_once('inc/custom_post.php');

// Pipe Plumbo Custom Meta Box

include_once('inc/pipe_meta_box.php');

// Pipe Plumbo Custom Meta Box

include_once('inc/strategles_meta.php');


function plumbo_widgets(){
    register_sidebar(array(
        'name'=>__('First widget', 'plumbo'),
        'id'=> 'first_sidebar',
        'before_widget'=> '<div class="main-widgets">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>',
    ));
     register_sidebar(array(
        'name'=>__('second widget', 'plumbo'),
        'id'=> 'second_sidebar',
        'before_widget'=> '<div class="main-widgets">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>',
    ));
     register_sidebar(array(
        'name'=>__('third widget', 'plumbo'),
        'id'=> 'third_sidebar',
        'before_widget'=> '<div class="main-widgets">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>',
    ));
     register_sidebar(array(
        'name'=>__('Four widget', 'plumbo'),
        'id'=> 'four_sidebar',
        'before_widget'=> '<div class="main-widgets">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="title">',
        'after_title'=> '</h2>',
    ));
}
add_action('widgets_init', 'plumbo_widgets');

