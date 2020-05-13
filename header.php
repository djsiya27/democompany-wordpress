<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Company</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
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
        <div class="container inner-background">
              <div class="col-md 12">
                  <div class="row imgs">
                      <div class="slider">
                          <div><img src="<?php echo get_template_directory_uri(); ?>./images/Slider_img.jpg" class="img-fluid" class="d-block w-100" alt=""></div>
                          <div><img src="<?php echo get_template_directory_uri(); ?>./images/slider4.jpg" class="img-fluid d-block "  alt=""></div>
                          <div><img src="<?php echo get_template_directory_uri(); ?>./images/slider1.jpg" class="img-fluid d-block "  alt=""></div>
                      </div>
                  </div>
              </div>
              <div class="col md-4 slider-caption">
                  <div class="row">
                      <h5 class="slider-heading">Slider Heading</h5>
                      <p class="slider-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. Sed gravida placerat eleifend. Suspendisse tincidunt fringilla dictum. Nam ipsum justo, adipiscing euullamcorper ut, hendrerit sit amet velit. Nulla facilisi.</p>
                  </div>
              </div>
              <div class="container side">
                  <div class="col-sm-2">
                      <div class="row">
                          
                      </div>
                  </div>
              </div>
          
        </div>
    </div>
    