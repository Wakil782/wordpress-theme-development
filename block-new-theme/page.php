<?php get_header(); ?>

<section id="post-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(have_posts(  )): while(have_posts(  )): the_post(); ?>
                <div class="post-title">
                    
                </div>
              
               

                <div class="excerpt">
                    <?php the_content(  ); ?>
                </div>
                <?php endwhile;
                       else:
                        _e('No Post Found', 'practisetheme');
                       endif; 
                       ?>
            </div>
           
        </div>
    </div>
</section>




<?php get_footer(); ?>
