<?php get_header(); ?>

<section id="post-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts(  )): while(have_posts(  )): the_post(); ?>
                <div class="post-title">
                   
                </div>
               
                <div class="meta">
                    <?php get_template_part('sections/meta'); ?>
                </div>

                <div class="excerpt">
                    <?php the_content(  ); ?>
                    </div>
                <div class="the-tags">
                    <?php the_tags(); ?>
                </div>
                <div class="author">
                    <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                    <?php the_author(); ?>
                </div> 
                <div id="all-posts">
                  
                <?php
                                $current_date = get_the_date( 'Y-m-d H:i:s' );

                                $next_posts = new WP_Query(array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => 3,
                                    'post__not_in'   => array( get_the_ID() ),
                                    'orderby'        => 'date',
                                    'order'          => 'ASC', // পুরাতন → নতুন (so after works properly)
                                    'date_query'     => array(
                                        array(
                                            'after'     => $current_date,
                                            'inclusive' => false,
                                        ),
                                    ),
                                ));

                                if ($next_posts->have_posts()) :
                                    echo "<h2> Relatate Post </h2>";
                                    echo "<ul>";
                                    while ($next_posts->have_posts()) : $next_posts->the_post();
                                        echo "<li><a href='".get_permalink()."'>".get_the_title()."</a></li>";
                                    endwhile;
                                    echo "</ul>";
                                endif;

                                wp_reset_postdata();
                                ?>


                </div>

                <div class="comments">
                    <?php if(comments_template() || get_comments_number()){
                        comments_template(); 
                    }
                    ?>
                </div>   
                
                
                <?php endwhile;
                       else:
                        _e('No Post Found', 'practisetheme');
                       endif; 
                       ?>
            </div>
            <div class="col-md-4">
               <div class="new-sidebar">
                 <?php dynamic_sidebar('sidebar_1'); ?>
               </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>
