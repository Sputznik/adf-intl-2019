<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ADF
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="archive-articles gray-back">
				<div class="wrap">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">

				<div class='video-lightbox'>
				<?php _e( do_shortcode('[video_lightbox_youtube video_id="G7z74BvLWUg" width="640" height="480" anchor="http://adfinternation.staging.wpengine.com/wp-content/uploads/2019/01/Tom-Euthanasia.jpg"]') );?>
				</div>

				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<ul class="article-list three-list group">
				<?php while ( have_posts() ) : the_post(); ?>
				<li><?php get_template_part( 'template-parts/content', 'article' );?></li>
				<?php endwhile; wp_reset_postdata();?>
			</ul>
			<?php the_posts_navigation(array('prev_text' => __( 'More &raquo;' ), 'next_text' => __( '&laquo; Previous' ),));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
