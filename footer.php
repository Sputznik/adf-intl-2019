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
	<div class="foo" style="background: #494545;color: #fff;padding-top:30px;">
		<div class="container dd" style="">

				<ul class="four-list">
					<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo">
									<img src="<?php bloginfo('template_directory'); ?>/_i/logo-white.png" />
									<span class="assistive-text"><?php bloginfo( 'name' ); ?></span>
								</a>
								<p  style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					</li>
					<li>
						<!-- <h4>About</h4> -->
						<?php
							wp_nav_menu( array(
								'theme_location' => 'about',
								'menu_class' => 'single-list'
							) );
						?>
					</li>
					<li>
						<!-- <h4>Our Work</h4> -->
						<?php
							wp_nav_menu( array(
								'theme_location' => 'work',
								'menu_class' => 'single-list'
							) );
						?>
					</li>
					<li>
						<ul style="" class="two-social">
								<?php
									//wp_nav_menu( array(
										//'theme_location' => 'connect',
										//'container' => '',
										//'items_wrap' => '%3$s'
									//) );
								?>
							<li>Follow Us</li>
							<li class="social">
								<a href = "https://www.facebook.com/ADFInternational" target="_blank" class="facebook">
									<img src="<?php bloginfo('template_directory'); ?>/_i/facebook.png" />
									<span class="assistive-text">Facebook</span>
								</a>
								<a href = "https://twitter.com/ADFIntl" target="_blank" class="twitter">
									<img src="<?php bloginfo('template_directory'); ?>/_i/twitter.png" />
									<span class="assistive-text">Twitter</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>

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
	</footer><!-- #colophon -->

	<?php //if(!isset($_COOKIE["hideBanner"])) : ?>
	<!-- <div class="cookie-bar">
		<div class="message"> -->
			<?php //the_field('cookie_text','option'); ?>
		<!-- </div> -->
		<!-- <a href = "#" class="close-cookie">OK</a>
	</div> -->
	<?php //endif; ?>
	<!-- </div> -->
<!-- #page -->
<!-- <div class="overlay-content"></div>
<div class="overlay"></div> -->
<style>
	body{
		font-family: 'Roboto', sans-serif;
	}
	.dd{
		/* background: red; */
	}
	.four-list{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		font-size: 12px;
	}
	.four-list > li{
		width: 10%;
	}
	.single-list > li > a{
		border: none;
		color: #fff;
	}
	.two-social > li > a{
		border: none;
	}
	.two-social > li:first-child{
		/* font-size: 25px; */
		color: #fff;
	}
	.single-list > li a:hover{
		cursor: pointer;
	}
	.four-list > li:first-child{
		width: 40%;
		/* background: green; */
	}
	.four-list > li:nth-child(4){
		width: 20%;
	}
	.single-list,.two-social{
		list-style-type: none;
		padding: 0;
	}
	@media(min-width: 1024px) or (max-width: 1440px){
		.four-list>li:first-child {
			margin-left: 100px;
		}
		.four-list > li:nth-child(4) {
			width: 15%;
		}
	}
	@media(min-width: 425px) or (max-width: 769px){
		.four-list>li:first-child {
			width: 30% !important;
		}
	}
	@media(max-width: 768px){
		.dd{
			padding: 0 30px;
			/* background: yellow; */
		}
		.four-list > li{
			width: 20%;
			text-align: center;
			margin: 0;
			margin-bottom: 5px;
		}
		.four-list > li:nth-child(2){
			margin-left: 30px;
		}
		.four-list > li:nth-child(3){
			margin-right: 30px;
		}
		.four-list > li:first-child{
			width: 100%;
			margin: 0;
			text-align: center;
		}
		.four-list > li:nth-child(4){
			width: 40%;
		}
		.two-social > li:first-child{
			/* font-size: 24px; */
		}
		/* .two-social > li:last-child > a img{
			width: 50px;
			height: 40px;
		} */
	}
	@media(max-width: 425px){
		.four-list > li:nth-child(2){
			margin-left: 50px;
			margin-right: 40px;
		}
		.four-list > li:nth-child(3){
			margin-right: 22px;
		}
		.four-list > li:nth-child(4){
			width: 20%;
		}
	}
	@media(max-width: 375px){
		.four-list > li {
			width: 22%;
		}
		.four-list > li:nth-child(2){
			margin-left: 28px;
			margin-right: 38px;
		}
	}
	@media(max-width: 320px){
		.four-list > li:nth-child(2),
		.four-list > li:nth-child(3){
			width: 30%;
		}
		.four-list > li:nth-child(4){
			width: 100%;
		}
		.four-list > li:nth-child(2){
			margin-left: 28px;
			margin-right: 54px;
		}
	}
</style>
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
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2334661420093630&ev=PageView&noscript=1"
/>
<img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=718679458477391&ev=PageView&noscript=1"
/>

</noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>
