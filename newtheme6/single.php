<?php get_header(); ?>


<section id="all-single-posts">
    
<div class="container">
    <?php if(have_posts()):
            while(have_posts()): the_post(); ?>
    <div class="post-content-wrap">
         <div class="new-category">
            <?php the_category('', '', ''); ?>
         </div>
         <div class="title">
            <h2><?php the_title(); ?></h2>
         </div>
         <div class="excerpt text-muted">
            <p><?php echo wp_trim_words( get_the_excerpt(), 12 ); ?></p>
            
         </div>
         <div class="image">
            <?php the_post_thumbnail(); ?>
         </div>
         <div class="content">
             <p><?php the_time('F j, Y'); ?></p>
             <div class="main-content">
                <?php the_content(); ?>
             </div>
            <div class="tags"><?php the_tags('', '', ''); ?> </div>
         </div>
         <div class="next-posts">
            <h3 class="text-center p-4 m-3"> Recomendado para ti </h3>
            <div class="row">
                <?php
                 $args= array(
                    'post_type'=> 'post',
                    'posts_per_page'=> 4,
                    'post__not_in'   => array( get_the_ID() ), 
                 );

                 $next_post = new WP_Query($args);
                 if($next_post->have_posts()):
                    while($next_post->have_posts()): $next_post->the_post();

                 ?>
                <div class="col-md-6 mb-4">
                    <h5>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h5>

                    <p class="text-muted">
                        <?php echo wp_trim_words( get_the_excerpt(), 14 ); ?>
                    </p>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            </div>


         </div>

    </div>
    <?php endwhile;
           endif; ?>
</div>


</section>










<?php get_footer(); ?>