<?php 
/*
* This Template for displaying the header
*/
?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="header-area" class="<?php echo get_theme_mod('nav_menu_option') ?>">
        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
           <a href="<?php echo home_url( ) ?> "><img src="<?php echo get_theme_mod('add_logo') ?>" alt="">  </a>
                </div>
                <div class="col-md-9">
                    
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
                </div>
            </div>
        </div>
    </div>
