<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <?php $logo = esc_attr( get_option('logo_image'));?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo">
                <a href="<?php echo get_option('home'); ?>">
                    <img src="<?php print $logo; ?>" alt="logo">
                </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php 
                    //Navigation Menu
                    if(has_nav_menu('primary_menu')){
                        wp_nav_menu(array(
                            'theme-location' => 'primary_menu',
                            'container'      => '',
                            'items_wrap'     => '<ul class="navbar-nav">%3$s</ul>'
                        ));
                    }
                    ?>
                </div>
              </nav>
        </div>
    </header>
    <div class="container-fluid slider-container">
        <div class="container">
            <div class="container slider">
            <?php get_template_part('parts/slider'); ?>
            </div>
            <div class="row">
        </div>
        </div>
    </div>