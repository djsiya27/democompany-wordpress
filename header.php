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
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>./images/Slider_img.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="slider-heading">Slider Heading</h5>
                      <p class="slider-paragraph">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>./images/Slider_img.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="slider-heading">Second slide label</h5>
                      <p class="slider-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>./images/Slider_img.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="slider-heading">Third slide label</h5>
                      <p class="slider-paragraph">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>