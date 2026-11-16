<?php 
// This is main template
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?> " class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?>>
    
<header>
<nav class="navbar navbar-expand-lg navbar-light  bg-light p-3">
<div class="container">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
   <?php bloginfo('name'); ?>
  </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php 
     wp_nav_menu(array(
        'theme_location' => 'main_menu',
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'mainmenu',
        'menu_class' => 'navbar-nav ms-auto',
        'fallback_cb' => 'false',
        'walker' => new Bootstrap5_WP_Navwalker(),
     )); ?>

  
</div>
</nav>
</header>

<div class="bg-secondary py-3">
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
    <?php 
if (is_single()) { 
    // যখন সিঙ্গেল পোস্ট দেখাবে, পোস্টের টাইটেল দেখাবে
    ?>
    <h3><?php the_title(); ?></h3>
<?php 
} elseif (is_home()) { 
    // যখন হোম পেজ থাকবে, সাইটের নাম দেখাবে
    ?>
    <h3><?php bloginfo('name'); ?></h3>
<?php 
} elseif (is_page()) { 
    // যখন পেজ দেখাবে, পেজের টাইটেল দেখাবে
    ?>
    <h3><?php the_title(); ?></h3>
<?php 
} 
?>
</div>

</div>
</div>
