

<section id="about-us">
  <?php
      $query_posts = new WP_Query(array(
        'post_type'=> 'repair',
        'post_per_page'=> 3,
        'order'=> 'ASC',
        'orderby'=> 'title',
              ));
  ?>
    <div class="container">
      <div class="row">
        <h2 class="py-3">About us</h2>
                  <?php if($query_posts->have_posts()):
                   while($query_posts->have_posts()): $query_posts->the_post();
                   ?>
        <div class="col-md-6 new-repair">

            <div class="child_sidebar">
              <?php the_post_thumbnail(); ?>
              <div class="content">
                   <div class="title">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                   </div>
                   <div class="excerpt">
                    <?php the_excerpt(); ?>
                   </div>
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



