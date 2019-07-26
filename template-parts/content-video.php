<?php global $post; $video_url = get_post_meta( $post->ID, 'video-url', true );?>
  <div class='video'><?php the_post_thumbnail('large');?></div>
  <div class='overlay-text'>
    <a href="<?php _e( $video_url ); ?>" rel="wp-video-lightbox">
      <h3><?php the_title();?></h3>
      <p><?php the_excerpt();?></p>
    </a>
  </div>
