<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php get_bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    

<header>
<div id="all_header_content">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
               <div class="avertoditital_logo">
                 <?php if(has_custom_logo()){
                    the_custom_logo();
                }else {
                    ?>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(  ) ?>/img/Logo.png" alt="Avertodigital"></a>
                    <?php
                }
                ?>
               </div>
            </div>
            <div class="col-md-7">
                <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'menu_id'=> 'main_menu'
                        )); 
                        ?>
                </nav>
            </div>
        </div>
    </div>
</div>
</header>
