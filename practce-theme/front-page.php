<?php

// this is front-page

get_header(); ?>

     
<div id="slider_area">
    <div class="slider">
                   <?php query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('paged')); 
            if(have_posts(  )):
               while(have_posts(  )): the_post(  );
               ?>
          <div>
               <?php echo the_post_thumbnail('service'); ?>
            </div>
                    <?php endwhile;
                 endif;
                 ?>
    </div>
</div>


<section id="home-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php dynamic_sidebar('home_1'); ?>
            </div>
        </div>
    </div>
</section>










<section class="front_practice">
    <div class="container">
        <div class="row">
                        <?php query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('paged')); 
            if(have_posts(  )):
               while(have_posts(  )): the_post(  );
               ?>
          <div class="col-md-4">
            <div class="child_service">
                    <h2><?php the_title(); ?></h2>
                    <?php echo the_post_thumbnail('service'); ?>
                   <?php the_excerpt(  ); ?>
                    
          </div>
            </div>
                    <?php endwhile;
                 endif;
                 ?>
           
        </div>
    </div>
</section>









<?php get_footer( ); ?>