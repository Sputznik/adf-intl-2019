<?php $video_thumb =  wp_get_attachment_url( $instance['video_thumb'] );?>
<div class='video-popup'>
  <div class='video'>
    <img src="<?php ( $video_thumb ) ? _e( $video_thumb ) : _e( $instance['video_thumb_fallback'] ) ?>"/>
  </div>
  <div class='overlay-text'>
    <a href="<?php _e( $instance['video_link'] ); ?>" rel="wp-video-lightbox">
      <h3><?php _e( $instance['video_title'] ); ?></h3>
      <p><?php _e( $instance['video_desc'] );?></p>
    </a>
  </div>
</div>
