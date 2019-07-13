<?php
/**
 *
 *
 * This is the template that displays for the individual team members
 * of the advocacy team.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ADF
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="page-content">
					<?php while ( have_posts() ) : the_post();?>
						<div class='row'>
							<div class='container col-13'>
								<div class='col'><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?></div>
								<div class='col'>
									<h5 class='bold text-muted uppercase no-margin-top'><?php _e( do_shortcode('[orbit_terms taxonomy="department" link="0"]') );?></h5>
									<h1 class='no-margin'><?php the_title();?></h1>
									<h5 class='uppercase text-muted border-bottom'><?php _e( do_shortcode('[orbit_cf id="team-position"]') );?></h5>
									<div class='excerpt text-muted'><?php the_excerpt();?></div>
								</div>
							</div>
						</div>
						<div class='row gray'>
							<div class='container'>
								<?php	the_content();?>
							</div>
						</div>
					<?php endwhile;?>
					</div>
				</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
