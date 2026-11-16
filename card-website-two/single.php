<?php

get_header();

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php while(have_posts(  )) : the_post() ; ?>
                <div>
                    <p><?php echo get_the_date('jS F Y'); ?> <?php _e('by', 'practisetheme'); the_author(); ?></p>
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                    <?php if(comments_open(  )) {
                        comments_template();
                    }
                    ?>
                </div>


                <?php endwhile; ?>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>



<?php

get_footer();

?>