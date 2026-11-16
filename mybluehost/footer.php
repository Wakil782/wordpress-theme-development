
<footer id="footer_area">
    <div class="bluehost_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_first_section">
                    <img src="<?php echo get_theme_mod('image_footer_setting'); ?>" alt="Footer Logo">
                    <p>
                        <?php echo get_theme_mod('footer_peragrapth_text'); ?>
                    </p>
                   <div class="phone_icon">
                     <i class="fa-solid fa-phone"></i> <span><?php echo get_theme_mod('footer_call_text') ;?></span>
                   </div>
                    <div class="second_envalop_icon">
                        <i class="fa-regular fa-envelope"></i><span><?php echo get_theme_mod('footer_envalop_text');    ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3"><?php dynamic_sidebar('first_footer'); ?></div>
            <div class="col-md-3"><?php dynamic_sidebar('second_footer'); ?></div>
            <div class="col-md-3"><?php dynamic_sidebar('third_footer'); ?></div>
        </div>
    </div>
    </div>

    <div class="footer_bottom_text">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
    
                <div class="new_footer_text">
                     <p>© 2025 Sophisticated Marketing Solutions. All Rights Reserved.</p>
                </div>
               
            </div>
        </div>
    </div>
    </div>
</footer>





<?php wp_footer(); ?>
</body>
</html>