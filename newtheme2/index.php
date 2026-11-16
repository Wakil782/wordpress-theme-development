<?php get_header(); ?>

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
                           <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div class="meta">
                            <p>Posted on <?php the_time('F j, Y'); ?> By <?php the_author(); ?></p>
                        </div>
                        <div class="post-thumb">
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail('large');
                            }
                            ?>
                        </div>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="al-meta">
                            <p>posted in <?php the_category(','); ?> Tagged <?php the_tags('',  ' ',  ','); ?> <a href="<?php the_permalink(); ?>#respond"> Leave a Comment</a>  <?php edit_post_link('Edit'); ?></p>

                        </div>
                       </div>
                       <!-- <div class="author">
                        <h2>Author Name: <?php the_author(); ?></h2>
                       </div> -->

                        <?php endwhile;
                            endif; ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        </div>
       </div>
     </section>




<?php get_footer(); ?>