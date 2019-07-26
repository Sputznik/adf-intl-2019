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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="page-content">
					<?php while ( have_posts() ) : the_post();
          global $post;
          $video_url = get_post_meta( $post->ID, 'video-url', true );
          $embed_url = str_replace( 'https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $video_url );

          ?>
							<div class='container'>
                <div class="center-frame">
                  <div class='col'>
                    <iframe width="420" height="345" src="<?php _e( $embed_url ); ?>"></iframe>
                  </div>
                  <div class='col'>
                    <h1 class='no-margin'><?php the_title(); ?></h1>
                    <div class='excerpt text-muted'><?php the_content();?></div>
                  </div>
                </div>
							</div>
           <?php endwhile;?>
					</div>
				</article>
		</main><!-- #main -->
	</div><!-- #primary -->
  <style media="screen">

@media( max-width: 768px ){
.col iframe{
width: 100%;
height: 300px;
}
}
@media only screen and ( min-width: 768px ) and ( max-width: 768px ){
.col iframe{
width: 90%;
height: 300px;
margin-left: auto;
margin-right: auto;
}
}

.col iframe{
width: 60%;
}
.center-frame{
  max-width: 900px;
  margin-left: auto;
  margin-right: auto;
}
  </style>
<?php get_footer();?>
