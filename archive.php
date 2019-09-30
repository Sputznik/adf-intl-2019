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
					<ul id="news-oq-list" class="article-list three-list group" data-target="li.article-list-item" data-url="">
						<?php while ( have_posts() ) : the_post(); ?>
						<li class="article-list-item"><?php get_template_part( 'template-parts/content', 'article' );?></li>
						<?php endwhile; wp_reset_postdata();?>
					</ul>
					<?php
						$type = get_post_type();

						// Check if the theme mod is default or lazy-loading
						if( get_theme_mod( $type ) && get_theme_mod( $type ) == 'lazy-loading' ):?>
							<div data-behaviour="orbit-lazy-loading" data-list="#news-oq-list" data-offset="600"></div>
						<?php else:
							the_posts_navigation(array('prev_text' => __( 'More &raquo;' ), 'next_text' => __( '&laquo; Previous' ),));?>
						<?php endif;?>
						<?php
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
