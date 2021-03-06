<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ADF
 */

?>
	</div>
	<!-- #content -->
	<a href = "#page" id="trigger-top">
		<?php include(get_template_directory().'/_svg/icon-arrow-up.php'); ?>
		<span>Top</span>
	</a>

	<!-- <footer id="colophon" class="site-footer <?php if(get_field('hide_footer',$post->ID) && !is_search() ){echo 'hide-footer';} ?>"> -->
	<div class="prefooter">
		<div class="container">
			<div class="col-2">
				<div class="col">
					<?php $logo_url = apply_filters( 'adf_footer_logo',  get_bloginfo('template_directory')."/_i/logo-white.png" );?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo">
						<img src="<?php _e( $logo_url );?>" />
						<span class="assistive-text"><?php bloginfo( 'name' ); ?></span>
					</a>
					<p style="margin-bottom:20px;"><?php _e( "Faith-based legal advocacy organization that protects fundamental freedoms and promotes the inherent dignity of all people.", 'adf-intl' );?></p>
				</div>
				<div class="col">
					<ul class="three-list">
						<li>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'about',
									'menu_class' => 'list-unstyled'
								) );
							?>
						</li>
						<li>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'work',
									'menu_class' => 'list-unstyled'
								) );
							?>
						</li>
						<li>
							<ul style="" class="list-unstyled">
								<li><?php _e( "Follow Us", 'adf-intl' );?></li>
								<li class="social">
									<a href = "https://www.facebook.com/ADFInternational" target="_blank" class="facebook">
										<img src="<?php bloginfo('template_directory'); ?>/_i/fb.png" />
										<!-- <i class="fa fa-facebook"></i> -->
										<span class="assistive-text">Facebook</span>
									</a>
									<a href = "https://twitter.com/ADFIntl" target="_blank" class="twitterr">
										<img src="<?php bloginfo('template_directory'); ?>/_i/twitterr.png" />
										<!-- <i class="fa fa-twitter"></i> -->
										<span class="assistive-text">Twitter</span>
									</a>
									<a href = "https://twitter.com/ADFIntl" target="_blank" class="in">
										<img src="<?php bloginfo('template_directory'); ?>/_i/in.png" />
										<!-- <i class="fa fa-twitter"></i> -->
										<span class="assistive-text">Twitter</span>
									</a>
								</li>
								<li>
									<a href="https://adfinternational.org/donate/" class="footer-donate-btn"><?php _e( "Donate", 'adf-intl' );?></a>
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
			<div class="group">
				<div class="copyright">&copy; <?php bloginfo( 'name' ); ?></div>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'bottom',
						'menu_class' => 'bottom-links',
					) );
				?>
			</div>
		</div>
	</div><!-- .bottom-footer -->
	<!-- /footer><!-- #colophon -->

	<?php
	 	/*
		if(!isset($_COOKIE["hideBanner"])) : ?>
	<div class="cookie-bar">
		<div class="message">
			<?php the_field('cookie_text','option'); ?>
		</div>
		<a href = "#" class="close-cookie">OK</a>
	</div>
	<?php endif; */?>

	</div><!-- #page -->
<div class="overlay-content"></div>
<div class="overlay"></div>
<?php wp_footer(); ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5afc78526bb936fd"></script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2334661420093630');
  fbq('init', '718679458477391');
  fbq('track', 'PageView');
</script>
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2334661420093630&ev=PageView&noscript=1" />
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=718679458477391&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>
