<?php
/**
 *
 *
 * This is the template that displays for the individual statistic
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ADF
 */

get_header(); ?>

<?php

	$description = get_the_content();

	$related_articles = do_shortcode( '[orbit_related_query style="stat" posts_per_page="3"]' );

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="page-content">
					<?php while ( have_posts() ) : the_post();?>
						<div class='row'>
							<div class='container col-13'>
								<div class='col'><?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); }?></div>
								<div class='col'>
									<h1 class='no-margin'><?php the_title();?></h1>
									<div class='excerpt text-muted'><?php the_excerpt();?></div>
								</div>
							</div>
						</div>
						<?php if( $description ): ?>
						<div class='row gray'><div class='container'><?php the_content();?></div></div>
						<?php endif;?>
						<?php if( $related_articles ):?>
						<div class='row'>
							<div class='container' style="min-height: 500px;">
								<h4>Related</h4>
								<?php _e( $related_articles );?>
							</div>
						</div>
					<?php endif;?>
					<?php endwhile;?>
					</div>
				</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
