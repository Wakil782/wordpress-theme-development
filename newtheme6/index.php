<?php get_header(); ?>

<section id="all-index-posts">
    <div class="container">
        <div class="logo">
            <?php if(has_custom_logo()){
                the_custom_logo();
            } else{
                ?>
                    <h1><?php bloginfo('name'); ?></h1>
                <?php
            }
            ?>
        </div>
        <div class="row">
            <?php if(have_posts()):
                  while(have_posts()): the_post(); ?>
            <div class="col-md-3">
               <div class="child-sidebar">
                 <div class="category">
                    <?php
                     $categories = get_the_category();
                      if(! empty( $categories)){
                        echo $categories[0]->name;
                      }
                      ?>
                 </div>
                 <div class="post-thumbnail">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }else {
                        ?>
                         <img src="<?php echo get_template_directory_uri();?>/img/ZEVRASEIJF.jpg" alt="">   
                        <?php
                    }
                    ?>
                 </div>
                 <div class="title">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                 </div>
               </div>
            </div>
            <?php endwhile; 
                    endif; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>