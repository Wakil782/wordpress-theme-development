<?php
// This template displaying for 404 page`
get_header();
?>

    <!-- Section -->
   <section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <p> 404 - not found</p>
                <h1>Oppos! lokks like somwthig wrong</h1>
                <div id="error_search">
                    <?php get_search_form(); ?>
                </div>
             <a href="<?php echo home_url();?>" class="homepage">Home</a>
               
            </div>
            
        </div>
    </div>
   </section>



   <!-- Footer Section -->
<?php

get_footer( );

?>