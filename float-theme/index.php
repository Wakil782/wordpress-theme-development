<?php
// This is main template
get_header(); ?>

<div id="main">
    <section id="content">
        <?php if(have_posts(  )) : while(have_posts(  )) : the_post(); ?>
        <article id="post-<?php the_ID() ; ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></h2>

            <?php the_content(); ?>
        </article>
      <?php endwhile;
            else: 
              _e('No Post');
                endif; ?>


      <?php get_template_part('inc/meta'); ?>
    </section>
    <div id="sidebar">
          <?php dynamic_sidebar('sidebar_1'); ?>
    </div>

</div>

<?php get_footer(); ?>