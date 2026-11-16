<?php
// This Is Include From Header.php
get_header();

?>



<!-- Main Section Here -->

<section id="owl_begma_caressol">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel begma_image">
                   <?php
                    $query = new WP_Query(array(
                        'post_type'=> 'bangladesh',
                        'post_per_page'=> 1
                    ));
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                        ?>
                            <div class="begma_slider">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php

                        endwhile;  wp_reset_postdata(  );
                        endif;
                   ?>
                 </div>
            </div>
        </div>
    </div>
</section>



<section id="begma_innumerable">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <?php 
                $new_posts = new WP_Query(array(
                    'post_type'=> 'innumerable',
                    'post_status'=> 'publish',
                    'posts_per_page'=> 1,
                    'order'=> 'ASC',
                    'orderby'=> 'title'
                ));
                if($new_posts->have_posts()):
                    while($new_posts->have_posts()):
                        $new_posts->the_post();
                        $innumerable = get_post_meta(get_the_ID(), 'innumerable', true);
                        ?>
                        <div class="innumerable_bangladesh">
                           <div class="innumerable_title">
                             <h1 class="title"><?php the_title(); ?></h1>
                             <?php the_post_thumbnail(); ?>
                           </div>
                           <button> <?php echo $innumerable  ?></button>
                        </div>
                        <div class="innumerable">
                            <?php the_content(); ?>
                        </div>
                        <?php
                        endwhile; wp_reset_postdata(  );
                        endif;
                        ?>

            </div>
        </div>
    </div>
</section>

<section id="begma_facalities">
    <div class="container">
        <div class="row">

            <!-- বাইরের Column -->
            <div class="col-md-9 mx-auto">

                <!-- Inner Row -->
                <div class="row">

                    <?php

                    $facalities_posts = new WP_Query(array(
                        'post_type'=> 'facalities',
                        'post_status'=> 'publish',
                        'order'=> 'DESC',
                        'orderby'=> 'title'
                    ));

                    if($facalities_posts->have_posts()):

                        while($facalities_posts->have_posts()):

                            $facalities_posts->the_post();

                    ?>

                    <div class="col-md-4">
                        <div class="begma_experience">

                            <div class="facalities_images">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <div class="facalities_title">
                                <h1><?php the_title(); ?></h1>
                            </div>

                            <div class="facalities_content">
                                <?php the_content(); ?>
                            </div>

                        </div>
                    </div>

                    <?php

                        endwhile;
                        wp_reset_postdata();

                    endif;

                    ?>

                </div>

            </div>

        </div>
    </div>
</section>

<section id="begma_news">
    <div class="container ">
            <div class="row">
                <div class="col-md-10 mx-auto">
                            <div class="begma_news_reaction">
                             <div class="begma_news_reaction_title">
                                <h1 class="title">News</h1>
                                <img src="<?php echo get_template_directory_uri(  )?>/img/Line_1.png" alt="">
                             </div>
                         <div class="begma_news_reaction_button">
                            <button class="btn">View All News</button>
                         </div>
                    </div>
        <div class="row news_begma_facalites">
            <?php 
              $news_posts = new WP_Query(array(
                'post_type'=> 'news',
                'post_status'=> 'publish',
                'posts_per_page'=> 1,
                'order'=> 'ASC'
              ));
              if($news_posts->have_posts()):
                while($news_posts->have_posts()):
                    $news_posts->the_post();
                    $news_excerpt = get_post_meta(get_the_ID(), 'news_excerpt', true);
                    $news_arrow = get_post_meta(get_the_ID(), 'news_arrow', true);
                    ?>
              
            <div class="col-md-5">
                    <div class="begma_news_cpt_section">

                        <div class="begma_news_images_section">
                            <?php the_post_thumbnail(); ?>
                            <div class="news_time">
                                <span><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                        <div class="news_title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="news_content">
                            <?php the_content(); ?>
                        </div>
                        <div class="news_metabox_text">
                            <p><?php echo esc_html($news_excerpt); ?></p>
                            <i class="<?php echo $news_arrow; ?>"></i>
                        </div>
                    </div>
            </div>
            <?php endwhile; wp_reset_postdata(  );
                    endif;
                    ?>
            <div class="col-md-5">

            <?php
             if(have_posts()):
                while(have_posts()):
                    the_post();
                    ?>
                        <div class="begma_news_default_post">
                            <div class="news_begma_time">
                                <span><?php echo get_the_date(); ?></span>
                            </div>
                            <div class="news_begma_post_title">
                                <h1> <?php the_title(); ?> </h1>
                            </div>
                           
                            <div class="news_begma_post_excerpt">
                                 <p class="excerpt">  Learn More </p><i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>

                    <?php
                    endwhile; 
                else:
                    _e("No Posts Found");
                endif;

                    ?>

            </div>
        </div>
         </div>
         </div>
    </div>
</section>


<section id="begma_daily_digest">
    <div class="container daily_digest_container">
    <div class="row justify-content-center ">
        <div class="col-md-10">
        <div class="row justify-content-between">
        <?php $daily_digest = new WP_Query(array(
            'post_type'=> 'digest',
            'posts_per_page' => 3,
            'order'=> 'ASC',
        ));
        if($daily_digest->have_posts()):
            while($daily_digest->have_posts()):
                $daily_digest->the_post();
                $digest_title = get_post_Meta(get_the_ID(), 'digest_title', true);
                $digest_icon = get_post_meta(get_the_ID(), 'digest_icon', true);
        ?>

<div class="col-md-3">

    <div class="daily_digest_thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="daiy_digest_title">
        <h2><?php the_title(); ?></h2>
    </div>

    <div class="digest_content">
        <?php the_content(); ?>
    </div>

    <div class="daily_digest_excerpt">
        <p class="excerpt"><?php echo $digest_title; ?></p>
        <i class="<?php echo $digest_icon; ?>"></i>
    </div>

</div>

    

                <?php endwhile; wp_reset_postdata();
                         endif;
                         ?>
    </div>
        </div>
    </div>    
</div>
</section>


<?php get_footer(); ?>