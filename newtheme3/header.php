<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header class="site-header">
    <div class="container">
        <nav class="main-nav">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'menu_class'     => 'menu',
                'container'      => false
            ));
            ?>

        </nav>
    </div>
</header>

