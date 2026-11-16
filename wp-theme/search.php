<?php
// This is archive.php
get_header();
?>

    <!-- Section -->
   <section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="search_title">
          <h1 class="title"> <?php printf(__('search result for: %s','wordpresslearning'), get_search_query()); ?>  </h1>
                </div>
             <?php get_template_part('template_part/blog_setup'); ?>
               
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
   </section>



   <!-- Footer Section -->
<?php

get_footer( );

?>
