<div class='video-popup'>
  <?php
  foreach ( $instance['video_repeater'] as $key => $value) {
    $video_thumb =  wp_get_attachment_url( $value['video_thumb'] );
  ?>
  <div class='video'>
    <img src="<?php _e( $video_thumb ); ?>" />
  </div>
  <div class='overlay-text'>
    <a href="<?php _e( $value['video_link'] ); ?>" rel="wp-video-lightbox">
      <h3>
        <?php _e( $value['video_title'] ); ?>
      </h3>
      <p>
        <?php _e( $value['video_desc'] );?>
      </p>
    </a>
  </div>
</div>
<?php } ?>
