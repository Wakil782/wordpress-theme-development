<?php get_header(); ?>

<section id="new-posts">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                   <div class="all-single-queryhere">
                                    <div class="new-time">
                    <div class="meta-time">
                    <?php the_time('M') ?> <br> <strong><?php the_time('j'); ?></strong> <br> <?php the_time('Y'); ?> 

                    </div>
                </div>
                  <div class="all-new-posts">
                     <div class="all-index-posts">
                  <div class="post-thumb">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                     
                  </div>
                  <div class="title">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  </div>
                  <div class="meta">
                    <p> written by <?php the_author();  ?> posted in <?php the_category(','); ?></p>
                  </div>
                  <div class="excerpt">
                    <?php the_excerpt(); ?>
                  </div>
                  <hr>
                  <div class="site-identity">
                    <div class="countinue">
                        <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'newtheme4'); ?></a>
                    </div>
                    <div class="comments">
                        <?php
                        if ( get_comments_number() > 0 ) {
                            // যদি কমেন্ট সংখ্যা ০-এর বেশি হয়, কিছুই দেখাবে না
                        } else {
                             ?> <a href="<?php comments_link(); ?>">No Comments</a> <?php                          
                        }
                        ?>

                    </div>
                  </div>
                </div>
                  </div>
                   </div>
                <?php endwhile;
                            endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>