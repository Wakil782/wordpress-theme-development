<?php
add_theme_support('title-tag');
// Add Thumbnails Image
add_theme_support('post-thumbnails', array('post', 'page', 'service','slider'));
add_image_size('service', 400, 200, true );
add_image_size('slider', 1920, 700, true);
add_image_size('post-thumbnails', 966, 350, true );
// Add excerpt Add read more button on posts
function jayed_excerpt_pore($more) {
    global $post;
    return '<br> <br><a class="readmore" href="' .get_permalink($post->ID ) .'">' .'Read More'   .'</a>';
}
add_filter( 'excerpt_more','jayed_excerpt_pore' );

function jayed_excerpt_length($length){
    return 40;
}
add_filter('excerpt_length', 'jayed_excerpt_length', 999);

function jayed_nav() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;

    if (!$current = get_query_var('paged')) $current = 1;

    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $args['prev_text'] = 'prev';
    $args['next_text'] = 'next';

    if ($max > 1) {
        echo '<div class="wp_pagenav">';
        $pages = '<p class="pages"> page ' . $current . '<span> of </span>' . $max . '</p>';
        echo $pages . paginate_links($args);
        echo '</div>';
    }
}












