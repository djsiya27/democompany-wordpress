<?php wp_footer(); ?>

<div class="container-fluid footer-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
                }
                ?>
                </div>
                <div class="col-md-3">
                <?php
                if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
                }
                ?>
                </div>
                <div class="col-md-3">
                <?php
                  if(is_active_sidebar('footer-sidebar-3')){
                  dynamic_sidebar('footer-sidebar-3');
                  }
                  ?>
                </div>
                <div class="col-md-3">
                  <?php
                  if(is_active_sidebar('footer-sidebar-4')){
                  dynamic_sidebar('footer-sidebar-4');
                  }
                  ?>
                </div>
            </div>
        </div>
    </div>
    
<div class="container footer">
  <div class="row">
    <nav>
      <?php 
      
      if(has_nav_menu('footer_menu')){
        wp_nav_menu(array(
            'theme-location' => 'footer_menu',
            'container'      => '',
            'items_wrap'     => '<ul class="footer ul li a">%3$s</ul>'
        ));
    }
      
      ?>
    </nav>

    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>./images/footer-logo.png" alt="footer-logo">
    </div>
  </div>  

  <div class="container copyright">
    &copy; 2020 rtPanel. All Rights Reserved. Designed by Siyabonga Majola for rtCamp 
  </div>
  

</div>
</body>
</html>