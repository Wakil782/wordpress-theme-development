<?php
function phonix_ppc_boxes(){
    add_meta_box(
        'phonix-ppc',
        'phonix details',
        'phonix_ppc_callback',
        'phonix',
        'normal',
        'high',
    );
}

add_action('add_meta_boxes', 'phonix_ppc_boxes');

function phonix_ppc_callback($post){
    $phonix_first_icon = get_post_meta($post->ID, 'phonix_first_icon', true);
    $phonix_second_icon = get_post_meta($post->ID, 'phonix_second_icon', true);
    $phonix_text = get_post_meta($post->ID, 'phonix_text', true);

    ?>
    <p>
        <label for="phonix_first_icon"> Add First Icon</label>
        <input type="text" name="phonix_first_icon" value="<?php echo esc_attr($phonix_first_icon); ?>">
        <label for="phonix_second_icon"> Second  Icon</label>

        <input type="text" name="phonix_second_icon" value="<?php echo esc_attr($phonix_second_icon); ?>">

         <label for="phonix_text"> Phonix Text</label>
        <input type="text" name="phonix_text" value="<?php echo esc_attr($phonix_text); ?>">
    </p>
    <?php
}


function phonix_save_post_meta($post_id){
    if(isset($_POST['phonix_first_icon'])){
        update_post_meta($post_id, 'phonix_first_icon', sanitize_text_field($_POST['phonix_first_icon']));
    }
    if(isset($_POST['phonix_second_icon'])){
        update_post_meta($post_id, 'phonix_second_icon', sanitize_text_field($_POST['phonix_second_icon']));
    }
    if(isset($_POST['phonix_text'])){
        update_post_meta($post_id, 'phonix_text', sanitize_text_field($_POST['phonix_text']));
    }
}

add_action('save_post', 'phonix_save_post_meta');



// Progmmatic meta box

function progmatic_meta_box(){
    add_meta_box(
        'progmmatic-info',
        'progmmatic details',
        'progmmatic_callback_function',
        'progmmatic',
        'normal',
        'high',
    );
}
add_action('add_meta_boxes', 'progmatic_meta_box');


function progmmatic_callback_function($post){
    $progmmatic_icon = get_post_meta($post->ID, 'progmmatic_icon', true);
    ?>
     <p>
        <label for="progmmatic_icon">Bootatrap icon</label>
        <input type="text" name="progmmatic_icon" value="<?php echo esc_attr($progmmatic_icon); ?>">
     </p>
    <?php
}
function progmmatic_save_post($post_id){
    if(isset($_POST['progmmatic_icon'])){
        update_post_meta($post_id, 'progmmatic_icon', sanitize_text_field($_POST['progmmatic_icon']));
    }
}
add_action('save_post', 'progmmatic_save_post');