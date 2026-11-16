<?php
// This is main templates showing header area
?>

<?php 
// Main Template shows here
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <section>
        <header>
            <nav id="header_area" class="<?php echo get_theme_mod('header_option_setting'); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?php echo home_url(); ?>"> <img src="<?php echo get_theme_mod('logo_option_setting'); ?> " alt=""></a>
                        </div>
                        <div class="col-md-9">
                           <?php wp_nav_menu(array (
                            'theme_location' => 'main_menu',
                            'menu_id' => 'nav'
                           ));
                           ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </section>