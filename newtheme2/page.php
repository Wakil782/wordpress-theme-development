<?php get_header(); ?>s

     <section id="single-post">
       <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts()): 
                      while(have_posts()): 
                        the_post();

                        ?> 
                       <div class="blg-detils">
                         <div class="post-title">
                           <h2> <?php the_title(); ?></h2>
                        </div>
                        
                        
                        </div>
                        <div class="post-excerpt">
                            <?php the_content(); ?>
                        </div>
                      
                       </div>
                      
                        <?php endwhile;
                            endif; ?>
                 </div>
           
        </div>
         <div class="col-md-4">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
       </div>
     </section>





<?php get_footer(); ?>