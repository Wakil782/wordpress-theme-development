

<?php get_header(); ?>

<div id="all-single-posts" 
     style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            min-height: 400px; 
            position: relative;">

   <div class="post-overlay">
      <div class="post-meta">
         <span class="category"><?php the_category(', '); ?></span>
         <h2 class="title"><?php the_title(); ?></h2>
         <div class="details">
            <span class="author"><?php the_author(); ?></span>
            <span class="date"><?php echo get_the_date('F jS, Y'); ?></span>
            <span class="comments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></span>
         </div>
      </div>
   </div>
</div>
<div class="all-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="all-index-posts">
                       <?php the_content(); ?>
                </div>

               
            </div>
        </div>
    </div>
</div>
<div class="all-comment">
    <div class="container">
        <?php comments_template(); ?>
    </div>
</div>










<?php get_footer(); ?>