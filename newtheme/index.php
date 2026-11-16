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
                                <div class="main-content">
                                     <div class="post-thumb">
                                <?php if(has_post_thumbnail()){
                                    the_post_thumbnail('medium');
                                }?>
                             </div>
                             <div class="title">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>

                             </div>
                                </div>
                             <div class="comments">
                                <p>posted: <?php the_category(', '); ?></p>
                                <a href="<?php the_permalink();?>#respond">Comments</a>
                             </div>
                           </div>
                           </div>

                            <?php endwhile;
                                   else:
                                     _e('No Posts found', 'newtheme');
                                   endif; 
                                   ?>
                </div>
                <div class="col-md-4">dgioudgi</div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>