<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
     <div class="brand">
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
     </div>
     <nav id="site-navigation">
       <?php wp_nav_menu(array(
        'theme_location'=> 'main_menu',
       ));
       ?>
     </nav>

    </header>