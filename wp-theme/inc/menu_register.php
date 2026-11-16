<?php

register_nav_menu( 'main_menu', __('Main Menu', 'wordpresslearning') );

// Walker Menu Properties
function ali_nav_description( $item_output, $item, $args){
  if ( is_object($item) && !empty($item->description) ) {
$item_output = str_replace('</a>', '<span class="walker_nav">' . esc_html($item->description) . '</span></a>', $item_output);
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'ali_nav_description', 10, 3);
