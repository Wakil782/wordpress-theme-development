<?php
                 if(have_posts( )):
                    while (have_posts( )) : the_post( );
                ?>
             <div class="blog_area">
                <div class="post_thumb">
                <h2><a href=" <?php the_permalink(  ); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?></a></h2>
                    
                </div>

                <div class="post_details">
                    <h2><a href=" <?php the_permalink(  ); ?>"> <?php the_title(); ?></a></h2>
                      <p><i class="fas fa-calendar-alt"></i> <?php  echo the_time('D,j-M Y');  ?> <span>At</span> <i class="fas fa-clock"> </i> <?php echo the_time('g:1 a'); ?></p>
                <?php  the_excerpt() ; ?>
                </div>
           
             </div>
             <?php
               endwhile;
            else :
                _e('404 not found');
            endif;
             ?>

            <div id="page_nav">
            <?php if (function_exists('jayed_nav')) { jayed_nav(); } else { ?>

            <?php next_post_link(); ?>
            <?php prev_post_link(); ?>
            <?php } ?>
            </div>