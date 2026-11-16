<?php
//  this is post template

 get_header(); ?>

    <section class="body_area">
        <div class="container">
            <div class="row">
              <div class="col-md  -9">
                    <?php get_template_part('template_part/post_setup'); ?>
                    <div id="comments">
                        <?php comments_template(); ?>
                    </div>
                </div>
                 
                <div class="col-md-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>