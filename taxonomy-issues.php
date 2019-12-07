<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ADF
 */
$term = get_queried_object();
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) : ?>
			<div class="full-banner title-banner">
				<?php
					$image = get_field('tax_image', $term);
					if( $image ) {
						echo wp_get_attachment_image( $image['ID'], 'full' );
					}
				?>
				<div class="banner-content">
					<div class="banner-wrap">
						<h1><?php echo get_the_archive_title(); ?></h1>
						<?php the_archive_description( '<p class="archive-description">', '</p>' );?>
					</div>
				</div>
			</div>
			<?php
			if( have_rows('extra_sections', $term) ):
				while ( have_rows('extra_sections', $term) ) : the_row();
					if( get_row_layout() == 'video_list' ):
			?>
			<div class="video-list <?php the_sub_field('video_back'); ?>">
				<div class="wrap">
					<?php
					$title = get_sub_field('video_section');
					if($title) {
						echo '<h2>'.$title.'</h2>';
					} if( have_rows('videos') ): ?>
					<ul class="three-list group">
						<?php while ( have_rows('videos') ) : the_row(); ?>
						<li>
							<?php
								$image = get_sub_field('video_thumbnail');
								if( !empty($image) ){
									$video_thumb = $image['url'];
									$video_link = "https://youtu.be/" . get_sub_field('video_code');
									$video_title = get_sub_field('video_title');
									adf_video_popup($video_thumb, $video_link, $video_title);
								}
							?>
							<?php /*
							<!--a href = "#" data-video="<?php the_sub_field('video_code'); ?>"-->
								<div class='video-lightbox'>
								<?php

									$video_id = get_sub_field( 'video_code' );
									$image = get_sub_field('video_thumbnail');

									if( !empty($image) ){
										_e( do_shortcode('[video_lightbox_youtube video_id="'.$video_id.'" width="640" height="480" anchor="'.$image['url'].'"]') );
									}
								?>
								</div>
								<!--span><?php the_sub_field('video_title'); ?></span-->
							<!--/a-->
							*/ ?>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
			<?php
					endif;
				endwhile;
			endif;
			?>
			<div class="home-articles gray">
				<div class="wrap">
					<?php
						$post_object = get_field('featured_tax', $term);
						if( $post_object ):
							$post = $post_object;
							setup_postdata( $post );
							$featured = $post->ID;
							$type = get_post_type($post);
					?>
					<div class="home-articles <?php the_sub_field('feat_back'); ?>">
						<div class="wrap">
							<div class="secondary-feature group <?php if($type == 'resource'){echo 'resource-feature';} ?>">
								<?php get_template_part( 'template-parts/content', 'featured' );?>
							</div>
						</div>
					</div>
					<?php wp_reset_postdata(); endif; ?>
					<?php
						$current_tax = get_query_var( 'issues' );
						$types = array('news','commentary','legal','campaign','resource');
						foreach($types as $type) :
							if($type == 'legal') {
								$args = array(
									'post_type' 		=> $type,
									'posts_per_page' 	=> 3,
									'post__not_in' 		=> array($featured),
									//'meta_key'			=> 'action_date',
									//'orderby'			=> 'meta_value',
									//'order'				=> 'DESC',
									'tax_query' => array(
									    array(
									        'taxonomy' => 'issues',
									        'field'    => 'slug',
									        'terms'    => $current_tax,
									    ),
									),
								);
							} else {
								$args = array(
									'post_type' 		=> $type,
									'posts_per_page' 	=> 3,
									'post__not_in' 		=> array($featured),
									'tax_query' => array(
									    array(
									        'taxonomy' => 'issues',
									        'field'    => 'slug',
									        'terms'    => $current_tax,
									    ),
									),
								);
							}
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								$count = $the_query->post_count;
					?>
					<div class="article-display <?php echo $type.'-display'; ?>">
						<header>
							<h3>Recent <?php echo adf_post_type_label($type); ?></h3>
							<a href = "<?php echo home_url( $wp->request.'/?post_type='.$type ); ?>">View All »</a>
						</header>
						<?php if($count == 1) : ?>
						<div class="secondary-feature group <?php if($type == 'resource'){echo 'resource-feature';} ?>">
						<?php elseif($count == 2) : ?>
						<ul class="article-list two-list group">
						<?php else : ?>
						<ul class="article-list three-list group">
						<?php endif; ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<?php if($count == 1) : ?>
							<?php get_template_part( 'template-parts/content', 'featured' );?>
							<?php else : ?>
							<li><?php get_template_part( 'template-parts/content', 'article' );?></li>
							<?php endif; ?>
						<?php wp_reset_postdata(); endwhile; ?>
						<?php if($count == 1) : ?>
						</div>
						<?php else : ?>
						</ul>
						<?php endif; ?>
					</div>
				<?php endif; endforeach; ?>
				</div><!--wrap-->
			</div><!--home-articles-->
			<?php

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
