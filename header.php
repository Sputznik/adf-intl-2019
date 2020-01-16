<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ADF
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N6B6D6C');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/_i/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6B6D6C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site <?php if(get_field('hide_top_nav',$post->ID) && !is_search() ){echo 'hide-header';} ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adf-intl' ); ?></a>
	<div class="mobile-branding">
	<?php

		$logo_url = apply_filters( 'adf_main_logo',  get_bloginfo('template_directory')."/_i/logo.png" );

		if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php _e( $logo_url ); ?>" /><span class="assistive-text"><?php bloginfo( 'name' ); ?></span></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php _e( $logo_url ); ?>" /><span class="assistive-text"><?php bloginfo( 'name' ); ?></span></a></p>
		<?php
		endif; ?>
	</div>
	<button class="nav-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'adf-intl' ); ?></button>
	<header id="masthead" class="site-header">
		<button class="nav-close" aria-controls="primary-menu" aria-expanded="false">&times;<span class="assistive-text">Close</span></button>
		<div class="header-top group">
			<div class="container">
				<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo site_url(); ?>" rel="home"><img src="<?php _e( $logo_url ); ?>" /><span class="assistive-text"><?php bloginfo( 'name' ); ?></span></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo site_url(); ?>" rel="home"><img src="<?php _e( $logo_url ); ?>" /><span class="assistive-text"><?php bloginfo( 'name' ); ?></span></a></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				<nav class="top-navigation group">
					<ul>
						<li>
							<a href = "<?php echo esc_url( site_url( 'campaign' ) ); ?>">
								<?php include(get_template_directory().'/_svg/icon-gavel.php'); ?>
								<?php _e( "Campaigns", 'adf-intl' );?>
							</a>
						</li>
						<?php if( has_nav_menu( 'issues' ) ): ?>
						<li class="with-sub">
							<a href = "#">
								<?php include(get_template_directory().'/_svg/icon-scales.php'); ?>
								<?php _e( "Issues", 'adf-intl' );?>
							</a>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'issues',
									'menu_class' => 'top-sub'
								) );
							?>
						</li>
						<?php endif;
						if( has_nav_menu( 'regions' ) ): ?>
						<li class="with-sub">
							<a href = "#">
								<?php include(get_template_directory().'/_svg/icon-globe.php'); ?>
								<?php _e( "Regions", 'adf-intl' );?>
							</a>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'regions',
									'menu_class' => 'top-sub'
								) );
							?>
						</li>
						<?php endif; ?>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>resource/">
								<?php include(get_template_directory().'/_svg/icon-book.php'); ?>
								<?php _e( "Resources", 'adf-intl' );?>
							</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>donate/">
								<?php include(get_template_directory().'/_svg/icon-gift.php'); ?>
								<?php _e( "Donate", 'adf-intl' );?>
							</a>
						</li>
					</ul>
				</nav>
				<?php if ( have_rows( 'custom_nav' ) ) : ?>
				<nav class="custom-nav">
					<ul>
					<?php while ( have_rows( 'custom_nav' ) ) : the_row(); ?>
						<li>
							<a href = "<?php the_sub_field( 'nav_url' ); ?>">
								<?php the_sub_field( 'nav_text' ); ?>
							</a>
						</li>
					<?php endwhile; ?>
					</ul>
				</nav>
				<?php endif; ?>
			</div>
		</div>
		<div class="header-bottom group">
			<div class="container">
				<nav id="site-navigation" class="main-navigation">

					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'walker'         => new WPSE_78121_Sublevel_Walker
						) );
					?>
				</nav><!-- #site-navigation -->
				<div class="search-bar">
					<?php get_search_form(); ?>
				</div>
				<div class="wpml-switcher">
					<a href="#wpml-modal" data-toggle="modal" class="uppercase no-margin">Other Languages</a>
					<?php
						global $sp_sow;
						$sp_sow->modal( 'wpml-modal', wpml_modal_content() );
					?>
					<?php //do_action('icl_language_selector'); ?>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->
	<div id="content" class="site-content">
