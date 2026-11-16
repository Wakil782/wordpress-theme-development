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
        <div class="col-md-12">
            <div class="site-title text-center">
                  <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>
        </div>
    </div>
 </div>
</header>