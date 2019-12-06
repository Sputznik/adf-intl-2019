<?php
/**
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ADF
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="page-content">
						<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
					</div>
				</article>

			</div> <!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//	get_sidebar();
get_footer();
