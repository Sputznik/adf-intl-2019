<?php
/**
 * The template for displaying archive of videos
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ADF
 */

get_header(); ?>
<div class="container" style="padding-bottom:50px;">
  <?php if( have_posts(  ) ):?>
  <ul class="video-list three-list group">
  <?php while ( have_posts() ) : the_post();?>
    <li class="video-popup">
      <?php get_template_part( 'template-parts/content', 'video' );?>
    </li>
  <?php endwhile;?>
  </ul>
  <?php the_posts_navigation(array('prev_text' => __( 'More &raquo;' ), 'next_text' => __( '&laquo; Previous' ),));?>
<?php endif;?>
</div>
<?php get_footer();?>
