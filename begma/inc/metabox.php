<?php


function begama_meta_box(){
    add_meta_box(
        'begma_innumerable_id',
        'Add Button Text',
        'begma_innumerable_new_meta_callback',
        'innumerable',
        'normal',
        'default'
    );
    // News Metabox
    add_meta_box(
        'news_section_excerpt',
        'News Excerpt',
        'news_excerpt_callback',
        'news',
        'normal',
        'default'
    );
    // Daily Digest Metaboxes
    add_meta_box(
        'daily_digest_metabox',
        'Add Btn Text',
        'daily_digest_callback',
        'digest',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'begama_meta_box');

function begma_innumerable_new_meta_callback($post){
    $innumerable = get_post_meta($post->ID, 'innumerable', true);

    ?>
    <p>
        <label for="innumerable">Add Button Text</label>
        <input type="text" name="innumerable" value="<?php echo esc_attr($innumerable); ?>">
    </p>
    <?php
}

function innumerable_save_post_meta($post_id){
    if(isset($_POST['innumerable'])){
        update_post_meta($post_id, 'innumerable', sanitize_text_field($_POST['innumerable']));
    }
}
add_action('save_post', 'innumerable_save_post_meta');



function news_excerpt_callback($post){
    $news_excerpt = get_post_meta($post->ID, 'news_excerpt', true);
    $news_arrow = get_post_meta($post->ID, 'news_arrow', true);
    ?>
    <p>
        <label for="">News Excerpt :</label>
        <input type="text" name="news_excerpt" value ="<?php echo $news_excerpt  ?>">
    </p>
     <p>
        <label for="">News Arrow :</label>
        <input type="text" name="news_arrow" value ="<?php echo $news_excerpt  ?>">
    </p>
    <?php
}

function news_cpt_save_Post($post_id){
    if(isset($_POST['news_excerpt'])){
        update_post_meta($post_id, 'news_excerpt', sanitize_text_field($_POST['news_excerpt']));
    }
    if(isset($_POST['news_arrow'])){
        update_post_meta($post_id, 'news_arrow', sanitize_text_field($_POST['news_arrow']));
    }
}

add_action('save_post', 'news_cpt_save_Post');

function daily_digest_callback($post){
    $digest_title = get_post_meta($post->ID, 'digest_title', true);
    $digest_icon = get_post_meta($post->ID, 'digest_icon', true);
    ?>
    <p>
        <label for="digest_title">Digest Title: </label>
        <input type="text" name="digest_title" id="digest_title" value="<?php echo $digest_title; ?>">
    </p>
    <p>
        <label for="digest_icon">Digest Icon: </label>
        <input type="text" name="digest_icon" id="digest_icon" value="<?php echo $digest_icon; ?>">
    </p>
    <?php
}
function daily_digest_save_post($post_id){
    if(isset($_POST['digest_title'])){
        update_Post_meta($post_id, 'digest_title', sanitize_text_field($_POST['digest_title']));
    }
    if(isset($_POST['digest_icon'])){
        update_Post_meta($post_id, 'digest_icon', sanitize_text_field($_POST['digest_icon']));
    }
}
add_action('save_post', 'daily_digest_save_post');