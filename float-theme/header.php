<?php
// this is header template
?>

<?php 
// Main template here
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(  ); ?>
</head>
<body <?php body_class(  ); ?>>
    
<div id="wrap"> <!--  //wrap start here -->
    <header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="branding">
                    <div class="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?> </a></div>
                    <div id="tagline"> <?php bloginfo('description'); ?> </div>
                </div>
            </div>
        </div>
    </div>
</header>


<nav>
    <div class="container">
            <div class="row">
                 <div class="col-md-12">
                   <?php wp_nav_menu(array(
                    'theme_location' =>'main_menu', 'practisetheme',
                    'menu_id' => 'nav'
                   ));
                   ?>
                 </div>
            </div>
    </div>
</nav>