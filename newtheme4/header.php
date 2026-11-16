<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="brand">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
        </div>
        <div class="col-md-7">
            <nav>
               <?php wp_nav_menu(array(
                'theme_location'=> 'primary_menu',
               )); ?>
            </nav>
        </div>
        <div class="col-md-2 ms-auto">
         <div class="new-form">
            <form action="<?php echo home_url(); ?>" method="get">
                <input type="text" name="s" placeholder="Search..." value="<?php the_search_query(); ?>">
            </form>
         </div>
        </div>
    </div>
</div>

</header>

