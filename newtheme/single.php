<?php get_header(); ?>

    <section class="all-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(have_posts()): 
                            while(have_posts()): the_post(); ?>
                           <div class="posts-time">
                            <h3><?php the_time('F j, Y'); ?></h3>
                           </div>
                           <div class="all-content">
                            <div class="content-area">
                               
                                    
                             <div class="title">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_content(); ?>

                                </div>
                               <div class="comments-none">
                                <p><?php the_time('F j, Y'); ?> By <?php the_author(); ?></p>
                               <p>posted: <?php the_category(', '); ?></p>

                                <p>Tags:  <?php the_tags('','',''); ?></p>
                             </div>
                             <div class="btn btn-outline-primary">
                                <?php edit_post_link('Edit this post'); ?>
                             </div>
                             <div class="all-content">
                                    <?php if(comments_open()){
                                        comments_template();
                                    }
                                    ?>
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