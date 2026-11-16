<?php 

function service_shortcode( $atts ){
    ob_start();
    $query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'title',
    ));
    if($query-> have_posts(  )) {  ?>
    
    
<section class="front_practice">
    <div class="container">
        <div class="row">
    
               <?php while($query -> have_posts(  )): $query->the_post(  );
               ?>
          <div class="col-md-9 mb-3">
            <div class="child_service">
                    <h2><?php the_title(); ?></h2>
                    <?php the_post_thumbnail('service'); ?>
                   <?php the_excerpt(  ); ?>
                    
          </div>
            </div>
                    <?php endwhile; 
                            ?>
           
        </div>
    </div>
</section>









     <?php }
     
     
         wp_reset_postdata();
     $myvariable = ob_get_clean();
    return $myvariable;


}


add_shortcode('service', 'service_shortcode');





















