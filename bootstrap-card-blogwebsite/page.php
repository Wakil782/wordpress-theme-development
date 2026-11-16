<?php
// post load here
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

       <?php
       if(has_post_thumbnail(  )) {
            the_post_thumbnail('large', array('class' => 'img-fluid w-100 mb-5'));
            }
            the_content(); 


            ?>
            
         


        </div>
    </div>
</div>


<?php get_footer(); ?>