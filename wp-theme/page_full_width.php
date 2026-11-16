<?php
// Template Name: Full Width Paged
get_header();
?>

    <!-- Section -->
   <section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php
                 if(have_posts( )):
                    while (have_posts( )) : the_post( );
                ?>
             <div class="blog_area">
                <div class="post_thumb">
                <h2><a href=" <?php the_permalink(  ); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?></a></h2>
                    
                </div>

                <div class="post_details">
                    
                <?php  the_content() ; ?>
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
           
               
            </div>
        </div>
    </div>
   </section>



   <!-- Footer Section -->
<?php

get_footer( );

?>
