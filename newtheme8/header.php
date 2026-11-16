<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header style="background-image: url('<?php header_image(); ?>');">
<div class="container">
    <div class="row align-items-center">
        <div class=" col-sm-3 col-md-3">
            <div class="logo">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
        </div>
        <div class=" col-sm-7 col-md-7 text-center">
           <nav>
            <?php wp_nav_menu(array(
                'theme_location'=> 'main_menu',
                'menu_id'=> 'main-menu',
            ));
            ?>
           </nav>
        </div>
        <div class="col-sm-2 col-md-2 text-end">
            <div class="accept">
                <ul>
                <li><a href="">Sign Up</a></li>
                <li><a href="">Login</a></li>
            </ul>
            </div>
        </div>
    </div>
</div>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text">
                <h1><?php echo get_theme_mod('header-plumbo-setting'); ?></h1>
                <h1><?php echo get_theme_mod('header-plumbo-setting-new'); ?></h1>
                <h1><?php echo get_theme_mod('header-plumbo-setting-service'); ?></h1>
                <div class="input">
                    <input type="text" placeholder="Search About Us">
                    <button>Accept</button>
                </div>
            </div>
        </div>
    </div>
   </div>
</header>