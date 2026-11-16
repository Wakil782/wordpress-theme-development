<?php get_header(); ?>

<section id="post-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts(  )): while(have_posts(  )): the_post(); ?>
                <div class="post-title">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </div>
                <div class="post-thumbnail">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                </div>
                <div class="meta">
                    <?php get_template_part('sections/meta'); ?>
                </div>

                <div class="excerpt">
                    <?php the_excerpt(  ); ?>
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

