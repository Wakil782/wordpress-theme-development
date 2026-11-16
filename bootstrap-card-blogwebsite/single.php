<?php
// post load here
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
       <h2>
        <?php the_title(); ?>

       </h2>
       <div class="d-flex mb-4 text-muted text-sm">
                  <p>
                    <?php the_time('F j , Y'); ?>
                  </p>
                  <span class="mx-2 text-primary ">.</span>
                  <p class="m-0 single-post-cat">
                    <?php the_category(','); ?>
                  </p>
       </div>
       <?php
       if(has_post_thumbnail(  )) {
            the_post_thumbnail('large', array('class' => 'img-fluid w-100 mb-5'));
            }
            the_content(); 


            ?>
            
           <?php the_tags('<p>Tags - ', ', ', '</p>'); ?>


        </div>
        <div class="col-md-4">
           <?php dynamic_sidebar('sidebar_1'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>










<?php get_footer(); ?>