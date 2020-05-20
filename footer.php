<?php wp_footer(); 

$footer = esc_attr( get_option('footer_copyright'));
$footer_logo = esc_attr( get_option('footer_logo'));

?>
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
      <img src="<?php print $footer_logo ?>" alt="footer-logo">
    </div>
  </div>  
  <div class="container copyright">
    &copy; <?php print $footer ?>
  </div>
</div>
</body>
</html>