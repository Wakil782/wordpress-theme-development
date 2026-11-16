<?php

get_header(); ?>


<div class="container">
    
<div class="row">
    <div class="col-md-12">
            <?php while(have_posts(  )) : the_post(); ?>
            <div>
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
    </div>
</div>
</div>









<?php get_footer(); ?>