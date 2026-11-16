<?php
get_header(); ?>


<section id="google_rating">
    <div id="bluehost_rating_body_area">
        <div id="bluehost_rating_main_area">
            <div class="rating_bluehost">
                <i class="<?php echo get_theme_mod('google_font_rating_setting'); ?>"></i>
                <i class="<?php echo get_theme_mod('google_font_rating_setting'); ?>"></i>
                <i class="<?php echo get_theme_mod('google_font_rating_setting'); ?>"></i>
                <i class="<?php echo get_theme_mod('google_font_rating_setting'); ?>"></i>
                <i class="<?php echo get_theme_mod('google_font_rating_setting'); ?>"></i>
                <p> <?php echo get_theme_mod('google_font_text'); ?>  <span class="google"> <?php _e('Google', 'bluehost'); ?> </span></p>

            </div>
            <div class="heading_text">
                <h1>Stop Guessing.</h1>
                <h1 class="nd_text">Start Scaling.</h1>
            </div>
            <div class="text_delete">
                <p><?php echo get_theme_mod('removed_text_setting'); ?> <span id="typing"></span></p>
            </div>
            <div class="bluehost_button">
                <button class="first_button">Get a Proposal</button>
                <button class="second_button">Free Business Scan</button>
            </div>
        </div>
    </div>
</section>


<section id="google_partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="partner_text">
                                <h1><strong>Proud Member & Certified Partner</strong></h1>
                            </div>
                    
                <div class="partner">
                    
                    <?php $query_posts = new WP_Query(array(
                        'post_type'=> 'partner',
                        'posts_per_page'=> -1,
                        'order'=> 'ASC',
                        'orderby'=> 'title',
                    ));
                    if($query_posts->have_posts()): while($query_posts->have_posts()):
                        $query_posts->the_post();
                    ?>
                            
                        <div class="new_image">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <?php endwhile; wp_reset_postdata();
                               endif;
                               ?>

                </div>
            </div>
        </div>
    </div>
</section>


<section id="bluehost_quote">
    <div class="container">
        <div class="row">
            <div class="quote_brand">
                <h1>Trusted by Top Brands</h1>
            </div>
            <?php 
                 $args = array(
                    'post_type'=> 'quote',
                    'post_per_page'=> 3,
                    'order'=> 'ASC',
                    'orderby'=> 'title',
                 );
                 $new_posts = new WP_Query($args);


                 if($new_posts->have_posts()):
                    while($new_posts->have_posts()):
                        $new_posts->the_post();
                        ?>
            <div class="col-md-4">
                <div class="quote_description">
                    <p> <strong>“</strong><?php the_content(); ?></p>
                    <?php echo get_avatar( get_the_author_meta('ID', 40)  );?>
                    <?php the_author(); ?>
                </div>
            </div>
            <?php endwhile;
                   wp_reset_postdata();
                    endif;
                    ?>
        </div>
    </div>
</section>

<section id="phonix_ppc">
    
   <div class="container">
    <div class="row">
        <?php $phonix_ppc = new WP_Query(array(
                'post_type'=> 'phonix',
                'posts_per_page'=> 2,
                'order'=> 'ASC',
                'orderby'=> 'title',
        ));


        if($phonix_ppc->have_posts()):
            while($phonix_ppc->have_posts()):
                $phonix_ppc->the_post(); 

                $phonix_first_icon = get_post_meta($post->ID, 'phonix_first_icon', true);
                $phonix_second_icon = get_post_meta($post->ID, 'phonix_second_icon', true);
                $phonix_text = get_post_meta($post->ID, 'phonix_text', true);
        ?>
        <div class="col-md-6">
            <div class="phonix_container">
              <div class="icon">            
                    <i class="<?php echo $phonix_first_icon; ?>"></i>             
                    <i class="<?php echo $phonix_second_icon; ?>"></i>
              </div>
              <div class="title">
                <h2><?php the_title(); ?></h2>
                <h3><?php echo $phonix_text;  ?></h3>
              </div>
              <div class="content">
                <p><?php the_content(); ?></p>
              </div>
              <div class="post_thumb">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
        </div>
        <?php endwhile;
               wp_reset_postdata();
            endif;
            ?>
    </div>
   </div>
</section>

<section id="progmmatic_ecosystem">
    <div class="container">
        <div class="row">
            <?php
                $progmmatic_eco = new WP_Query(array(
                    'post_type'=> 'progmmatic', 
                    'post_per_page'=> 3,
                    'order'=> 'ASC',
                    'orderby'=> 'title',
                ));
                if($progmmatic_eco->have_posts()):
                    while($progmmatic_eco->have_posts()):
                        $progmmatic_eco->the_post();

                    $progmmatic_icon = get_post_meta($post->ID, 'progmmatic_icon', true);
            ?>
            <div class="col-md-4">
                 <div class="progmmatic_economix">
                    <div class="progmmatic_icon">
                        <i class="<?php echo $progmmatic_icon; ?>"></i>
                    </div>
                    <div class="progmmatic_title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="progmmatic_excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="programmatic_thumb">
                        <?php the_post_thumbnail(); ?>
                    </div>
                 </div>
            </div>
            <?php endwhile;
                   wp_reset_postdata();
                    endif;
                    ?>
        </div>
    </div>

</section>

<section id="home_service">
    <div class="container">
         <div class="home_text_service">
            <h1>Industries We Scale</h1>
            <p>Specialized strategies for high-compliance and high-competition sectors.</p>
         </div>
        <div class="row">
            <?php $home_service = new WP_Query(array(
                'post_type'=> 'service',
                'posts_per_page'=> 12,
                'order'=> 'DESC',
                'orderby'=> 'title'    
            ));

            if($home_service->have_posts()):
                while($home_service->have_posts()):
                    $home_service->the_post();
                    ?>
            <div class="col-md-2">
                   <div class="new_home">
                      <div class="home_thumbnail">
                         <?php the_post_thumbnail(); ?> 
                      </div>
                      <div class="home_title">
                        <h4><?php the_title(); ?></h4>
                      </div>
                   </div>
            </div>
            <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
        </div>
    </div>
</section>

<section id="new_faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="faq_text">
                    <h1>Common Questions</h1>
                </div>
                <div class="faq-container">

                <div class="faq-item">
                    <div class="faq-question">
                    <?php echo get_theme_mod('faq_first_settings'); ?> <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                    <?php echo get_theme_mod('faq_first_settings_answer'); ?>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                    <?php echo get_theme_mod('faq_first_settings_second_question'); ?> <i class="fas fa-chevron-down"></i> 
                    </div>
                    <div class="faq-answer">
                    <?php echo get_theme_mod('faq_first_settings_second_answer'); ?>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                    <?php echo get_theme_mod('faq_first_settings_third_question'); ?> <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                    <?php echo get_theme_mod('faq_first_settings_third_answer'); ?>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section id="foodprint_digital">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="foodprint">
                    <button><?php echo get_theme_mod('foodprint_first_button_text'); ?></button>
                    <h1><?php echo get_theme_mod('foodprint_heading_settings'); ?></h1>
                    <p><?php echo get_theme_mod('foodprint_peragraph_settings'); ?></p>
                    <a href="#"><?php echo get_theme_mod('foodprint_link_settings'); ?> </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="insights_highlights">
                    <div class="insights_text">
                        <h1>Intel & Insights</h1>
                        <p>view all</p>
                    </div>
                <div class="view_all">


                  <?php $insights_all = new WP_Query(array(
                       'post_type'=> 'insights',
                       'post_per_page'=> 3,
                  ));
                   if($insights_all->have_posts()):
                        while($insights_all->have_posts()):
                            $insights_all->the_post();
                            ?>
                    <div class="insights_cpt">
                        
                            <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        
                    </div>
                    <?php endwhile;
                          wp_reset_postdata();
                        endif;
                        ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>