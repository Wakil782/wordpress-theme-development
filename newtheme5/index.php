<?php get_header(); ?>

<section id="all-posts">
    <div class="row">
        <div class="col-md-8">
            <?php if(have_posts()): 
                    while(have_posts()):
                        the_post();
                        ?>
                        <div class="all-index-posts">
                            <div class="post-thumb">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="title">
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <a href="<?php the_permalink(); ?>#respond">Leave a reply</a>

                            </div>
                            <div class="meta">
                                <p>Posted By <?php the_author(); ?> in <?php the_category(','); ?></p>
                            </div>
                            <div class="content">
                                <?php the_content(); ?>

                            </div>
                            <div class="tags">
                                <?php the_tags('', '', ''); ?>
                            </div>
                            <div class="edit">
                                <?php edit_post_link('Edit'); ?>
                            </div>

                        </div>
                        <div class="comments-new">
                            <?php comments_template(); ?>
                        </div>

                        <?php endwhile;
                                endif; ?>
        </div>
        <div class="col-md-4">
            <div class="sidebar">
                <?php dynamic_sidebar('sidebar_1'); ?>
                <?php dynamic_sidebar('sidebar_2'); ?>
                <?php dynamic_sidebar('sidebar_3'); ?>
            </div>

        </div>
    </div>

</section>


<?php get_footer(); ?>