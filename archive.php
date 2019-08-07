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
				<div class="container">
				<?php if ( have_posts() ) : ?>
					<header class="page-header">
					<?php
						the_archive_title( '<h2 class="page-title">', '</h2>' );
						//the_archive_description( '<div class="archive-description">', '</div>' );
					?>
					</header><!-- .page-header -->
					<ul class="article-list three-list group">
						<?php while ( have_posts() ) : the_post(); ?>
						<li><?php get_template_part( 'template-parts/content', 'article' );?></li>
						<?php endwhile; wp_reset_postdata();?>
					</ul>
					<?php the_posts_navigation(array('prev_text' => __( 'More &raquo;' ), 'next_text' => __( '&laquo; Previous' ),));?>
				<?php
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
