<?php
  $thumb = wp_get_attachment_thumb_url( get_the_ID() );
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
?>
<a href = "<?php the_permalink(); ?>">
  <div class='article-featured-image' style="background-image: url( <?php _e( $image );?> );" ></div>
  <div class="article-content">
    <h4><?php echo get_the_title(); ?></h4>
    <strong class="link">Published on <?php echo get_the_date( 'j M Y' );?></strong>
  </div>
</a>
