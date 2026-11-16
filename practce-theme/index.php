<?php
//  Main Template

 get_header(); ?>

    <section class="body_area">
        <div class="container">
            <div class="row">
              <div class="col-md  -9">
                    <?php get_template_part('template_part/blog_setup'); ?>
                </div>
                 
                <div class="col-md-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>