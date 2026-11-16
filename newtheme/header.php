<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<div id="wrap">
    <div class="sixteencolumns">
        <div class="container new-wrap">
            <div class="brand">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
            <div class="form">
                <form action="<?php echo home_url(); ?>" method="get" >
                    <input type="text" name="s" value="<?php the_search_query(); ?>" >
                    <button>Search</button>
                </form>
            </div>
        </div>
    </div>

    <div class="nagivation-menu">
        <?php
          wp_nav_menu(array(
            'theme_location'=> 'main_menu',
            'menu_id'=> 'main-menu',
          ));
          ?>
    </div>