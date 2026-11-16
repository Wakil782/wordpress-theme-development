<?php get_header(); ?>

<section id="all-single-posts">
  <div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if(have_posts()):
                        while(have_posts()): the_post();
                        ?>
                 <div class="all-post">
                    <div class="title">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                    <div class="meta">
                        <p><?php the_author(); ?> <?php the_time('F j, Y'); ?> <?php the_category(','); ?> <?php edit_post_link('Edit'); ?> </p>
                    </div>
                    <div class="post-thumb">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('large'); 
                        }
                        ?>
                    </div>
                    <div class="content mt-2">
                        <?php the_content(); ?>
                    </div>
                    <div class="comments">
                        <?php comments_template(); ?>
                    </div>
                 </div>


                           <?php endwhile;
                                   endif;
                                   ?>
        </div>
        <div class="col-md-4">

        </div>
    </div>
  </div>
</section>
