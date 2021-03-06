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

<?php $staff_title = get_the_title();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if ( is_active_sidebar( 'staff-header' ) ){ dynamic_sidebar( 'staff-header' ); } ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">
					<?php while ( have_posts() ) : the_post(); $staff_description = get_post_meta( $post->ID, 'long-bio', true );?>
					<div class="row gray" style="padding:100px 0"></div>
					<div class='row' style="margin-top:-200px;">
						<div class='container col-13'>
							<div class='col'><?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); }?></div>
							<div class='col'>
								<div class="staff-header">
									<h5 class='bold text-muted uppercase no-margin-top'><?php _e( do_shortcode('[orbit_terms taxonomy="department" link="0"]') );?></h5>
									<h1 class='no-margin'><?php _e( $staff_title );?></h1>
								</div>
								<h5 class='uppercase text-muted'><?php _e( do_shortcode('[orbit_cf id="team-position"]') );?></h5>
								<div class='excerpt text-muted'><?php the_excerpt();?></div>

								<?php /*get_post_meta( $post->ID, 'request-interview', true )*/ ?>

								<?php $request_interview_link = "#modal-interview"; if( !empty( $request_interview_link ) ):?>
								<a class="sp-btn request-interview" data-toggle="sow-modal" href="<?php _e( $request_interview_link );?>">Request An Interview</a>
								<?php endif; ?>
								<?php
									global $sp_sow;
									$sp_sow->modal( 'modal-interview', do_shortcode( '[gravityform id="32" title="false" description="false"]' ) );
								?>
							</div>
						</div>
					</div>
					<?php $twitter_handle = get_post_meta( $post->ID, 'twitter-handle', true ); ?>
					<?php if( $staff_description || $twitter_handle ): ?>
					<div class='row gray'>
						<div class='container <?php if( $twitter_handle ):?>col-31<?php endif;?>'>
							<div class="col" style="white-space: pre-line;"><?php _e( $staff_description );?></div>
							<?php if( $twitter_handle ):?>
								<div class="col">
									<a class="twitter-timeline" data-height="500" href="https://twitter.com/<?php _e( $twitter_handle );?>?ref_src=twsrc%5Etfw">Tweets by <?php _e( $twitter_handle );?></a>
									<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
								</div>
							<?php endif;?>
						</div>
					</div>
					<?php endif;?>
					<div class='row'>
						<div class='container'>
							<?php the_content();?>
							<h4>Advocacy Team</h4>
							<?php global $post;_e( do_shortcode( '[orbit_query post_type="advocacy-team" post__not_in="'.$post->ID.'" style="team-small" tax_query="department:advocates" posts_per_page="4" orderby="rand"]' ) );?>
						</div>
					</div>
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

.inline-modal-dialog{ background: #eee; }

.staff-header h1{
	font-size: 2.35em;
}
a[href].sp-btn.request-interview, a[href].sp-btn.request-interview:hover{ margin-top: 20px; display: inline-block; color: #fff; }
</style>
