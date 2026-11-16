<?php

// ১. Meta box যোগ করার ফাংশন
function strategles_meta_box(){
    add_meta_box(
        'strategles-detail',
        'Strategles Details',
        'strategles_meta_callback',
        'strategles',  // তোমার কাস্টম পোস্ট টাইপ (যদি আলাদা হয়)
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'strategles_meta_box');


// ২. Meta box এর ভিতরের HTML (input field & icon)
function strategles_meta_callback($post){
    // Security nonce field (save করার সময় চেক করার জন্য)
    wp_nonce_field('strategles_meta_box_nonce_action', 'strategles_meta_box_nonce');

    // আগের মেটা ডাটা নিয়ে আসা
    $strategles_one_title = get_post_meta($post->ID, 'strategles_one_title', true);
    $strategles_two_title = get_post_meta($post->ID, 'strategles_two_title', true);
    $strategles_three_title = get_post_meta($post->ID, 'strategles_three_title', true);
    $strategles_four_title = get_post_meta($post->ID, 'strategles_four_title', true);

    $strategles_one_icon = get_post_meta($post->ID, 'strategles_one_icon', true);
    $strategles_two_icon = get_post_meta($post->ID, 'strategles_two_icon', true);
    $strategles_three_icon = get_post_meta($post->ID, 'strategles_three_icon', true);
    $strategles_four_icon = get_post_meta($post->ID, 'strategles_four_icon', true);
    ?>

    <p>
        <label for="strategles_one_title">Strategles One Title:</label>
        <span><i class="<?php echo esc_attr($strategles_one_icon); ?>"></i></span>
        <input type="text" id="strategles_one_title" name="strategles_one_title" value="<?php echo esc_attr($strategles_one_title); ?>" style="width: 70%;">
    </p>

    <p>
        <label for="strategles_one_icon">Strategles One Icon Class:</label>
        <input type="text" id="strategles_one_icon" name="strategles_one_icon" value="<?php echo esc_attr($strategles_one_icon); ?>" style="width: 70%;" placeholder="e.g. bi bi-check-circle">
    </p>

    <p>
        <label for="strategles_two_title">Strategles Two Title:</label>
        <span><i class="<?php echo esc_attr($strategles_two_icon); ?>"></i></span>
        <input type="text" id="strategles_two_title" name="strategles_two_title" value="<?php echo esc_attr($strategles_two_title); ?>" style="width: 70%;">
    </p>

    <p>
        <label for="strategles_two_icon">Strategles Two Icon Class:</label>
        <input type="text" id="strategles_two_icon" name="strategles_two_icon" value="<?php echo esc_attr($strategles_two_icon); ?>" style="width: 70%;" placeholder="e.g. bi bi-check-circle">
    </p>

    <p>
        <label for="strategles_three_title">Strategles Three Title:</label>
        <span><i class="<?php echo esc_attr($strategles_three_icon); ?>"></i></span>
        <input type="text" id="strategles_three_title" name="strategles_three_title" value="<?php echo esc_attr($strategles_three_title); ?>" style="width: 70%;">
    </p>

    <p>
        <label for="strategles_three_icon">Strategles Three Icon Class:</label>
        <input type="text" id="strategles_three_icon" name="strategles_three_icon" value="<?php echo esc_attr($strategles_three_icon); ?>" style="width: 70%;" placeholder="e.g. bi bi-check-circle">
    </p>

    <p>
        <label for="strategles_four_title">Strategles Four Title:</label>
        <span><i class="<?php echo esc_attr($strategles_four_icon); ?>"></i></span>
        <input type="text" id="strategles_four_title" name="strategles_four_title" value="<?php echo esc_attr($strategles_four_title); ?>" style="width: 70%;">
    </p>

    <p>
        <label for="strategles_four_icon">Strategles Four Icon Class:</label>
        <input type="text" id="strategles_four_icon" name="strategles_four_icon" value="<?php echo esc_attr($strategles_four_icon); ?>" style="width: 70%;" placeholder="e.g. bi bi-check-circle">
    </p>

    <?php
}

// ৩. Save meta box data ফাংশন
function save_strategles_post($post_id){

    // nonce check করা হচ্ছে
    if (!isset($_POST['strategles_meta_box_nonce']) || !wp_verify_nonce($_POST['strategles_meta_box_nonce'], 'strategles_meta_box_nonce_action')) {
        return;
    }

    // autosave হলে সেভ করবে না
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // user permission চেক
    if (!current_user_can('edit_post', $post_id)) return;

    // সেভ করা হচ্ছে সব ইনপুট ফিল্ড থেকে ডাটা
    if (isset($_POST['strategles_one_title'])) {
        update_post_meta($post_id, 'strategles_one_title', sanitize_text_field($_POST['strategles_one_title']));
    }
    if (isset($_POST['strategles_one_icon'])) {
        update_post_meta($post_id, 'strategles_one_icon', sanitize_text_field($_POST['strategles_one_icon']));
    }

    if (isset($_POST['strategles_two_title'])) {
        update_post_meta($post_id, 'strategles_two_title', sanitize_text_field($_POST['strategles_two_title']));
    }
    if (isset($_POST['strategles_two_icon'])) {
        update_post_meta($post_id, 'strategles_two_icon', sanitize_text_field($_POST['strategles_two_icon']));
    }

    if (isset($_POST['strategles_three_title'])) {
        update_post_meta($post_id, 'strategles_three_title', sanitize_text_field($_POST['strategles_three_title']));
    }
    if (isset($_POST['strategles_three_icon'])) {
        update_post_meta($post_id, 'strategles_three_icon', sanitize_text_field($_POST['strategles_three_icon']));
    }

    if (isset($_POST['strategles_four_title'])) {
        update_post_meta($post_id, 'strategles_four_title', sanitize_text_field($_POST['strategles_four_title']));
    }
    if (isset($_POST['strategles_four_icon'])) {
        update_post_meta($post_id, 'strategles_four_icon', sanitize_text_field($_POST['strategles_four_icon']));
    }
}
add_action('save_post', 'save_strategles_post');
