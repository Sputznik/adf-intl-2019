<div class="top-footer">
  <div class="container">
    <div class="wrap">
      <div class="footer-second">
        <ul class="three-list group">
          <li style="width:50%;">
            <!-- <div class="footer-first group"> -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo">
                  <img src="<?php bloginfo('template_directory'); ?>/_i/logo-white.png" />
                  <span class="assistive-text"><?php bloginfo( 'name' ); ?></span>
                </a>
                <p>Simply dummy text of the printing and typesetting industry</p>
            <!-- </div> -->
          </li>
          <li style="width:16.6%;">
            <!-- <h4>About</h4> -->
            <?php
              wp_nav_menu( array(
                'theme_location' => 'about',
                // 'menu_class' => 'two-list always-two group'
              ) );
            ?>
          </li>
          <li style="width:16.6%;">
            <!-- <h4>Our Work</h4> -->
            <?php
              wp_nav_menu( array(
                'theme_location' => 'work',
                // 'menu_class' => 'two-list always-two group'
              ) );
            ?>
          </li>
          <li style="width:16.6%;">
            <!-- <h4>Connect</h4> -->
            <ul style="margin:0;padding:0;" class="">
                <?php
                  wp_nav_menu( array(
                    'theme_location' => 'connect',
                    'container' => '',
                    'items_wrap' => '%3$s'
                  ) );
                ?>
              <li class="social">
                <a href = "https://www.facebook.com/ADFInternational" target="_blank" class="facebook">
                  <img src="<?php bloginfo('template_directory'); ?>/_i/facebook.png" />
                  <span class="assistive-text">Facebook</span>
                </a>
                <a href = "https://twitter.com/ADFIntl" target="_blank" class="twitter">
                  <img src="<?php bloginfo('template_directory'); ?>/_i/twitter.png" />
                  <span class="assistive-text">Twitter</span>
                </a>
                <a href = "https://www.linkedin.com/company/adfinternational/" target="_blank" class="linkedin">
                  <img src="<?php bloginfo('template_directory'); ?>/_i/linkedin.png" />
                  <span class="assistive-text">Twitter</span>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="bottom-footer">
  <div class="container">
    <div class="wrap group">
      <div class="copyright">
        &copy; <?php bloginfo( 'name' ); ?>
      </div>
      <?php
        wp_nav_menu( array(
          'theme_location' => 'bottom',
          'menu_class' => 'bottom-links',
        ) );
      ?>
    </div>
  </div>
</div>
