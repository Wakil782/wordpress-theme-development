

<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>" class="no-js">
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
                     <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
                </div>
            </div>
            <div class="col-md-9">
                 <nav>
                  <?php $args = array(
                    'theme_location'=> 'primary_menu',
                    'menu_class'=> 'main-menu',
                  );
                  if(has_nav_menu('primary_menu')){
                    wp_nav_menu($args);
                  }
                  ?>
                 </nav>
            </div>
        </div>
     </div>
  </header>
  
  <div id="logo-title-area">
    <?php if(is_front_page(  ) || is_home()) : ?>
       <h1 class="site-title"><?php bloginfo('name'); ?></h1>
       
       <p class="site-description"><?php bloginfo('description'); ?></p>
 
       <?php else: ?>
        <h1 class="site-title"><?php single_post_title(); ?></h1>
        <?php endif; ?>
  </div>
