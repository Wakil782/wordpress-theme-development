<?php get_header(); ?>

<section id="all-single-posts">
  <div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if(have_posts()):
                        while(have_posts()): the_post();
                        ?>
                 <div class="all-post">
                    <div class="title">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                         </div>
                   
                    <div class="content mt-2">
                        <?php the_content(); ?>
                    </div>
                   
                 </div>


                           <?php endwhile;
                                   endif;
                                   ?>
        </div>
        <div class="col-md-4">

        </div>
    </div>
  </div>
</section>
