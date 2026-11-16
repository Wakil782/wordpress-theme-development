<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?>>
    
<header>
 <div id="begma_header">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="begma_custom_logo">
                    <?php if(has_custom_logo(  )){
                        the_custom_logo();
                    }else {
                        ?>
                        <a href="<?php echo home_url(); ?>"> <img src= "<?php  echo get_template_directory_uri(  ) ?>/img/logo.png" alt=""> </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-1">
                <div class="begma_google_font">
                    <i class="fa-brands fa-facebook-f"></i>

                    <i class="fa-brands fa-twitter"></i>

                    <i class="fa-brands fa-linkedin-in"></i>

                    <i class="fa-brands fa-youtube"></i>

                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>
            <div class="col-md-8">
                <nav class="begma_menu">
                   <?php wp_nav_menu( array(
                    'theme_location'=> 'header_menu',
                    'menu_id'=> 'main_menu_begma',
                    'container'=> false
                   ));
                   ?>
                </nav>
            </div>
        </div>
    </div>
 </div>

</header>