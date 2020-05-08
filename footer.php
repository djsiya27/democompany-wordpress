<?php wp_footer(); ?>

<div class="container-fluid footer-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="footer-header">Latest News</h5>
                    <li class="footer-blog-link"><i class="fas fa-arrow-right"></i><p>Many desktop publishing packages and web page </p></li>
                    <li class="footer-blog-link"><i class="fas fa-arrow-right"></i><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p></li>
                    <li class="footer-blog-link"~><i class="fas fa-arrow-right"></i><p>Latin words, combined with a handful of model sentence structures</p></li>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-header">Recent Projects</h5>
                    <li class="recent"><img src="<?php echo get_template_directory_uri(); ?>./images/recent-pro-1.jpg" alt=""></li> 
                    <li class="recent"><img src="<?php echo get_template_directory_uri(); ?>./images/recent-pro-2.jpg" alt=""></li>
                    <li class="recent"><img src="<?php echo get_template_directory_uri(); ?>./images/recent-pro-3.jpg" alt=""></li>   
                    
                </div>
                <div class="col-md-3">
                    <h5 class="footer-header">Stay in Touch</h5>
                    <li class="social-facebook"><i class="fab fa-facebook-square"></i><span class="facebook">Facebook</span></li>
                    <li class="social-twitter"><i class="fab fa-twitter-square"></i><span class="twitter">Twitter</span></li>
                    <li class="social-linkedin"><i class="fab fa-linkedin"></i><span class="linkedin">Linkedin</span></li>
                    <li class="social-rss"><i class="fas fa-rss-square"></i><span class="rss">RSS</span></li>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-header">Security & Privacy</h5>
                    <li class="security"><p>Security</p></li>
                    <li class="security"><p>Privacy Policy</p></li>
                    <li class="security"><p>Terms Of Service</p></li>
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