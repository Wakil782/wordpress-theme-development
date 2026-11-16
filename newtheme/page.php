<?php get_header(); ?>

    <section class="all-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(have_posts()): 
                            while(have_posts()): the_post(); ?>
                           
                           <div class="all-content">
                            <div class="content-area">
                               
                                    
                             <div class="title">
                              
                                <?php the_content(); ?>

                                </div>
                              
                             <div class="btn btn-outline-primary">
                                <?php edit_post_link('Edit this post'); ?>
                             </div>
                           

                           </div>
                           </div>

                            <?php endwhile;
                                   else:
                                     _e('No Posts found', 'newtheme');
                                   endif; 
                                   ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>