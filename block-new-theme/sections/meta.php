<?php

// This is all meta here

?>

<div class="all-meta">
    <p class="author"><i class="fa-jelly-fill fa-regular fa-user"></i> <?php the_author(); ?></p>
    <p><i class="fa-regular fa-calendar-days"></i> <?php the_time('F j, Y'); ?></p>
    <p><i class="fa-regular fa-folder"></i> <?php the_tags(',',', '); ?></p>

    <?php 
    $comments = get_comments_number();

    if($comments > 0){
          if($comments == 1 ) {
            echo '<a href="'.esc_url(get_comments_link()).'"><i class="fa-solid fa-comment"> 1 comments </a>';
          }else {
             echo '<a href="' . esc_url( get_comments_link() ) . '">' . intval( $comments ) . '<i class="fa-solid fa-comment"> Comments</a>';
          }
    }else {
      echo '<span class="no-comments"><i class="fa-solid fa-comment"></i> No Comments</span>';
    }

?>
</div>