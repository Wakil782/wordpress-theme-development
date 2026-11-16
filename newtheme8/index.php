<?php get_header(); ?>
  

<section id="new-counter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="counter-text">
          <h1><?php echo get_theme_mod('achievement-plumbo-setting'); ?></h1>
          <p><?php echo get_theme_mod('achievement-text-plumbo-setting'); ?></p>
        </div>
      </div>
    </div>

    <div id="all-number-counter">
      <div class="row d-flex align-items-center justify-content-between">
        <div class="col-md-3">
          <div class="number-count">
            <h1 class="counter"><?php echo get_theme_mod('counter_plumber_number_setting'); ?></h1><span>+</span>
            <p>Counter Plumber Number Setting</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="number-count">
            <h1 class="counter"><?php echo get_theme_mod('counter_plumber_number_setting_new'); ?></h1><span>+</span>
            <p>Counter Plumber Number Setting Old</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="number-count">
            <h1 class="counter"><?php echo get_theme_mod('counter_plumber_number_setting_old'); ?></h1><span>+</span>
            <p>Counter Plumber Number Setting Old</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="number-count">
            <h1 class="counter"><?php echo get_theme_mod('counter_plumber_number_setting_head'); ?></h1><span>+</span>
            <p>Counter Plumber Number Setting Head</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- About Us -->

<?php get_template_part('template-parts/about-us'); ?>


<!-- Feature Service  -->

<?php get_template_part('template-parts/services'); ?>

<section id="strategles_service">

  <?php $all_query = new WP_Query(array(
    'post_type'=> 'strategles',
    'order'=>  'ASC',
    'orderby'=> 'title',
  ));
  ?>
  <div class="container">
    <div class="row">
      <?php if($all_query->have_posts()):
               while($all_query->have_posts()):
                $all_query->the_post();

                $strategles_one_title = get_post_meta(get_the_ID(), 'strategles_one_title', true);
                $strategles_two_title = get_post_meta(get_the_ID(), 'strategles_two_title', true);
                $strategles_three_title = get_post_meta(get_the_ID(), 'strategles_three_title', true);
                $strategles_four_title = get_post_meta(get_the_ID(), 'strategles_four_title', true);

                $strategles_one_icon = get_post_meta(get_the_ID(), 'strategles_one_icon', true);
                $strategles_two_icon = get_post_meta(get_the_ID(), 'strategles_two_icon', true);
                $strategles_three_icon = get_post_meta(get_the_ID(), 'strategles_three_icon', true);
                $strategles_four_icon = get_post_meta(get_the_ID(), 'strategles_four_icon', true);

                ?>
                <div class="col-md-12">
                  <div class="strategles">
                    <div class="strategles-content">
                      <h2><?php _e('Our Plan For Your Strategles', 'plumbo'); ?></h2>
                       <p>
                        <span><i class="<?php echo  $strategles_one_icon; ?>"></i></span>
                        <?php echo $strategles_one_title; ?>
                       </p>
                        <p>
                        <span><i class="<?php echo  $strategles_two_icon; ?>"></i></span>
                        <?php echo $strategles_two_title; ?>
                       </p>
                        <p>
                        <span><i class="<?php echo  $strategles_three_icon; ?>"></i></span>
                        <?php echo $strategles_three_title; ?>
                       </p>
                        <p>
                        <span><i class="<?php echo  $strategles_four_icon; ?>"></i></span>
                        <?php echo $strategles_four_title; ?>
                       </p>
                    </div>
                    <div class="strategles-images">
                          <?php the_post_thumbnail(); ?>
                    </div>
                  </div>
                </div>
                <?php endwhile;
                        endif;
                        ?>
    </div>
  </div>
<?php wp_reset_postdata(); ?>
</section>




<?php get_footer(); ?>

