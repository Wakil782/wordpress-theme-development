<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header class="header p-4 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <nav class="col text-end">
                <div class="social-links" id="nav-social">
                    <a href=""><i class="fab  fa-twitter fa-lg"></i></a>
                    <a href=""><i class="fab fa-facebook fa-lg"></i></a>
                    <a href=""><i class="fab fa-comment fa-lg"></i></a>

                </div>
            </nav>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">



    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbar-main-collapse" class="collapse navbar-collapse">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main_menu',
          'menu_class'     => 'navbar-nav  mb-2 mb-lg-0',  // Bootstrap 5 ক্লাস
          'container'      => false,
          'fallback_cb'    => false,
          'depth'          => 2,
         'walker'         => new Bootstrap5_WP_Navwalker(), // যদি ড্রপডাউন দরকার হয়
        ));
      ?>
    <form class="navbar navbar-right ms-auto" action="<?php echo home_url(); ?>">
      <div class="input-group input-group-search">
       <input type="text" name="s" value="<?php the_search_query(  ); ?>">
         <button type="submit" class="btn btn-default bg-primary">
               submit
            </button>
      </div>
    </form>



    </div>
  </div>
</nav>

<?php if ( get_header_image() && is_front_page() ) : ?>
  <section class="carousel" style="background-image:url(<?php header_image(); ?>)">
    <img src="<?php header_image(); ?>" alt="">
  </section>

<?php else : ?>
  <div class="container">
    <h3>
      <?php 
        if ( is_single() || is_page() ) :
          the_title();

        elseif ( is_archive() || is_category() || is_home() ) :
          _e('Blog', 'practisetheme');

        elseif ( is_404() ) :
          _e('Page not found', 'practisetheme');

        elseif ( is_search() ) :
          echo sprintf( __('Search result for: %1$s', 'practisetheme'), get_search_query() );


        endif;
      ?>
    </h3>
  </div>
<?php endif; ?>