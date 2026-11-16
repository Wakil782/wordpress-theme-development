
<!-- Feature Service -->
 <section id="service-feature">
  
  <?php 
  $new_query = new WP_Query(array(
    'post_type'=> 'pipe',
    'order'=> 'ASC',
    'orderby'=> 'title',
  ));
  ?>
  <div class="container">
    <div class="row">
        <h2 class="py-3">Feature Service</h2>
      <?php if($new_query->have_posts()):
        while($new_query->have_posts()): $new_query->the_post();

          // প্রতিটা পোস্টের ID নিয়ে meta data নাও
          $plumbo_site_title = get_post_meta(get_the_ID(), 'plumbo_site_title', true);
          $plumbo_site_content = get_post_meta(get_the_ID(), 'plumbo_site_content', true);
          $plumbo_site_down = get_post_meta(get_the_ID(), 'plumbo_site_down', true);
          $plumbo_site_button = get_post_meta(get_the_ID(), 'plumbo_site_button', true);
      ?>
          <div class="col-md-12">
            <div class="all-services-content">
              <div class="service_thumb">
                <?php the_post_thumbnail(); ?>
              </div>
             <div class="all-feature-content">
               <div class="service-title">
                <h1><?php the_title(); ?></h1>
                <h3><?php echo esc_html($plumbo_site_title); ?></h3>
              </div>
              <div class="service-content">
                <?php the_content(); ?>
                <p><?php echo esc_html($plumbo_site_content); ?></p>
              </div>
              <div class="service-button">
                <p><?php echo esc_html($plumbo_site_down); ?></p>
                <br>
                <button id="plumbo_button" class="btn"><?php echo esc_html($plumbo_site_button); ?></button>
              </div>
             </div>
            </div>
          </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>