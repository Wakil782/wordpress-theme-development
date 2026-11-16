<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header>
<div id="bluehost_option">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <a href="#"><i class="fa-solid fa-phone-flip"></i>(602) 688-4479</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>info@mybluehost@gmail.com</a>
            </div>
            <div class="col-md-6 text-end">
                <div class="flag">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Flag_of_Spain.png" alt="">
                    <span>Español</span>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                
                </div>
               
            </div>
        </div>
    </div>
</div>

<div id="main_container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="all_bluehost_header">
                    <div class="custom_logo text-left">
                        <?php if(has_custom_logo()){
                            the_custom_logo();
                        } else {
                            echo '<h1>'. get_bloginfo('name'). '</h1>';
                        }
                        ?>
                    </div>
                    <div class="bluehost_primary_menu text-center">
                       <nav class="main-nav">
                         <?php wp_nav_menu(array(
                            'theme_location'=> 'main_menu',
                            'menu_class'=> 'menu',
                        ));
                        ?>
                       </nav>
                    </div>
                    <div class="bluehost_header_last">
                        <button id="bluhostbutton" class="btn"><?php _e('Get a Proposal'); ?></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





</header>