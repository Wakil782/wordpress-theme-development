<?php 
// footer template
?>
<!-- Footer Section -->

<section class="widgets_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
             <?php dynamic_sidebar('footer-1');?>               
            </div>
            <div class="col-md-4">
             <?php dynamic_sidebar('footer-2');?>                  
            </div>
            <div class="col-md-4">
               <?php dynamic_sidebar('footer-3');?>                  
            </div>
        </div>
    </div>
</section>

<section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo get_theme_mod('footer_setting');?></p>
                </div>
            </div>
        </div>
    </footer>
</section>


<?php wp_footer();?>
</body>
</html>