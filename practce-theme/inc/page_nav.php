<?php 
// this is page nav function
function wakil_pagination() {
    global $wp_query, $wp_rewrite;
    $pages='';
    $max = $wp_query -> max_num_pages;
   $current = max(1, get_query_var('paged'));

    $args['base'] = str_replace( 999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'next';
    $total = 1;

    if ($max > 1) echo '
       <div class="wp_pagenav">';
    if($total == 1 && $max > 1) $pages='<p class="page-info">Page ' . $current . ' of ' . $max . '</p><br>';
     echo $pages .= paginate_links($args);
     if($max > 1) echo '</div> ';
}