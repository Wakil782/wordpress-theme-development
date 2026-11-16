<?php

get_header(); ?>



<section>
  <div class="container">
    <?php if(have_posts()) : ?>
      <div class="row">
        <?php while(have_posts()) : the_post(); ?>
          <div class="col-md-6">
            <div class="new_post">
              <div class="post_thumb">
                <?php the_category(', '); ?>
                <?php if(has_post_thumbnail()) {
                  the_post_thumbnail('custom-size');
                } ?>
              </div>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <p><i class="fa fa-calendar"></i> <?php echo get_the_date('jS F Y'); ?></p>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'practisetheme'); ?></a>
            </div>
           
          </div>
        <?php endwhile; ?>
         <div class="pagination ">
              <?php the_posts_pagination(array(
                'screen_reader_text' => '',
                'prev_text' => 'previous',
                'next_text' => 'next',
              ));
              ?>
            </div>
      </div>
    <?php endif; ?>
  </div>
</section>
















<?php get_footer(); ?>