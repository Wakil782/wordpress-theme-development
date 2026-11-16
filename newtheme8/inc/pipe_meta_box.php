<?php

function pipe_plumbo_meta_box(){
    add_meta_box(
        'pipe-plumbo',
        'plumbo Details',
        'pipe_plumbo_callback',
        'pipe',
        'normal',
        'high'
    );
}

add_action('add_meta_boxes', 'pipe_plumbo_meta_box');

function pipe_plumbo_callback($post){
    $plumbo_site_title = get_post_meta($post->ID, 'plumbo_site_title', true);
    $plumbo_site_content = get_post_meta($post->ID, 'plumbo_site_content', true);
    $plumbo_site_down = get_post_meta($post->ID, 'plumbo_site_down', true);
    $plumbo_site_button = get_post_meta($post->ID, 'plumbo_site_button', true);

    ?>
    
    <p>
        <label for="plumbo_site_title">PlumBo Site detail:</label>
        <input type="text" name="plumbo_site_title" value="<?php echo esc_attr($plumbo_site_title);?>">
    </p>

    <p>
        <label for="plumbo_site_content">PlumBo Site Count:</label>
        <input type="text" name="plumbo_site_content" value="<?php echo esc_attr($plumbo_site_content);?>">
    </p>

    <p>
        <label for="plumbo_site_down">PlumBo Site down:</label>
        <input type="text" name="plumbo_site_down" value="<?php echo esc_attr($plumbo_site_down);?>">
    </p>

    <p>
        <label for="plumbo_site_button">PlumBo Site button:</label>
        <input type="text" name="plumbo_site_button" value="<?php echo esc_attr($plumbo_site_button);?>">
    </p>
    <?php

}

function save_plumbo_post($post_id){  
    if(isset($_POST['plumbo_site_title'])){
        update_post_meta($post_id, 'plumbo_site_title', sanitize_text_field($_POST['plumbo_site_title']));
    }

    if(isset($_POST['plumbo_site_content'])){
    update_post_meta($post_id, 'plumbo_site_content', sanitize_text_field($_POST['plumbo_site_content']));
   }
   if(isset($_POST['plumbo_site_down'])){
    update_post_meta($post_id, 'plumbo_site_down', sanitize_text_field($_POST['plumbo_site_down']));
   }

   if(isset($_POST['plumbo_site_button'])){
    update_post_meta($post_id, 'plumbo_site_button', sanitize_text_field($_POST['plumbo_site_button']));
   }
}

add_action('save_post', 'save_plumbo_post');