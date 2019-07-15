<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ADF
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			$panels_data = get_post_meta( get_the_ID(), 'panels_data', true );

			if( empty( $panels_data['widgets'] ) ){
				get_template_part( 'template-parts/content', get_post_type() );
			}
			else{
				_e( '<div class="container">' );
				the_content();
				_e( '</div>' );
			}




		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
