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

<?php

	$staff_description = get_the_content();


?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">
					<?php while ( have_posts() ) : the_post();?>
					<div class="row gray" style="padding:100px 0"></div>
					<div class='row' style="margin-top:-200px;">
						<div class='container col-13'>
							<div class='col'><?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); }?></div>
							<div class='col'>
								<div class="staff-header">
									<h5 class='bold text-muted uppercase no-margin-top'><?php _e( do_shortcode('[orbit_terms taxonomy="department" link="0"]') );?></h5>
									<h1 class='no-margin'><?php the_title();?></h1>
								</div>
								<h5 class='uppercase text-muted <?php if( $staff_description ):?>border-bottom<?php endif;?>'><?php _e( do_shortcode('[orbit_cf id="team-position"]') );?></h5>
								<div class='excerpt text-muted'><?php the_excerpt();?></div>
								<a class="sp-btn" href="#modal-interview" data-toggle="modal">Request An Interview</a>
								<?php
									global $sp_sow;
									$sp_sow->modal( 'modal-interview', 'Gravity form will come here' );
								?>
							</div>
						</div>
					</div>
					<?php if( $staff_description ): ?>
					<div class='row gray'><div class='container'><?php the_content();?></div></div>
					<?php endif;?>
					<?php endwhile;?>
				</div>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>

<style>
@media( min-width: 769px ){
	.staff-header{
		min-height: 140px;
	}
}
a[href].sp-btn{ margin-top: 20px; display: inline-block;}
</style>
