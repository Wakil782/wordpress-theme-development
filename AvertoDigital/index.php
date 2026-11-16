<?php

get_header(); 
?>


<section id="avertodigital_home_section">

    <div class="first_section" style="background-image: url('<?php echo get_theme_mod('home_first_image'); ?>');">

        <div class="title">
            <h1><?php echo get_theme_mod('home_first_text'); ?></h1>
        </div>
        <div class="home_text">
            <p><?php echo get_theme_mod('home_first_peragrapth_text'); ?></p>
        </div>
    <div class="avertodigital_agency">
        <button class="button1"><?php echo get_theme_mod('home_first_button'); ?></button>
        <button class="button2"><?php echo get_theme_mod('Second_button_text'); ?></button>
    </div>

    </div>
    


    <div id="second_home_section">
        <div class="core_strength">
           <div class="first_strength">
            <p class="our_core"><?php echo get_theme_mod('our_core_first'); ?></p>
            <h1><?php echo get_theme_mod('our_core_second'); ?></h1>
            <p class="web_development"><?php echo get_theme_mod('our_core_third'); ?></p>
           </div>
        </div>
        <div class="strategic">
            <div class="container">
                <div class="row">
                     <?php
                $query = new WP_Query(array(
                    'post_type'=> 'strategic',
                    'posts_per_page'=> 4,
                    'order'=> 'ASC',
                    'orderby'=> 'title'
                ));
                if($query->have_posts()):
                    while($query->have_posts()): $query->the_post();
              ?>
                    <div class="col-md-3">
                         <div class="strategic_section">
                   <div class="strategic_culture">
                    <?php the_post_thumbnail(); ?>
                    <h2><?php  the_title(); ?></h2>
                   </div>
                </div>
                    </div>
                       <?php 
                     endwhile; 
                     wp_reset_postdata(  );

                     endif;
                     ?>
                </div>
            </div>
           
               
           
        </div>

    </div>


</section>











<?php
 get_footer(); ?>