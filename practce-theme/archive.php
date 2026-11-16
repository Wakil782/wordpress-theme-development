<?php
//  this Template is archive template

 get_header(); ?>

    <section class="body_area">
        <div class="container">
            <div class="row">
              <div class="col-md  -9">
                 <div id="div_archive">
                    <?php the_archive_title('<h2 class="title">', '</h2>'); 
                          the_author_description('<div class="authority">', '</div>');?>
                 </div>
                    <?php get_template_part('template_part/blog_setup'); ?>
                </div>
                 
                <div class="col-md-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>