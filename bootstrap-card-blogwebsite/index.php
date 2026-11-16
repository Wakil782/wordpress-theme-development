<?php

//  this is main template
get_header(); ?>
?>
<!-- index.php -->

<section class="pb-5">
    <div class="container">
        <?php if(have_posts(  )) : ?>
        <div class="row articles-wrapper row py-5 mb-5 py-lg-0">
            <?php while(have_posts(  )) :
                    the_post(); ?>
            <div <?php post_class('portfo-box col-md-6 col-lg-4 mt-4'); ?>>
                 <div class="card border-0  rounded-3 blog-card">
                 <?php if(has_post_thumbnail()){
                    the_post_thumbnail('large', array('class' => 'img-fluid  w-100 h-100'));
                 }

                 ?>
                 <div>
                    <a  class="text-dark text-decoration-none" href="<?php the_permalink(); ?>">
                        <h4 class="fw-bold my-3">
                          <?php the_title(); ?>
                        </h4>
                    </a>

                    <p class="text-sm m-0 lh-base excerp">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                 </div>
                 <a href="<?php the_permalink(); ?>">
                    <?php _e('Read More', 'practisetheme'); ?>
                 </a>
             </div>
            </div>
             <?php endwhile;  ?>      
        </div>
        <div class="pagination text-center w-max mx-auto mt-4">
            <?php
                the_posts_pagination(array(
                    'screen_reader_text' => '',
                    'prev_text' => 'previous',
                    'next_text' => 'next', 
                ));
                ?>
        </div>
        <?php endif; ?>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <?php query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('paged'));
            if(have_posts(  )) : 
                while(have_posts(  )): the_post();
                ?>
                <div class="col-md-4">

                </div>
                <?php endwhile;
                        endif; ?>
        </div>
    </div>

</section>









<?php get_footer(); ?>




