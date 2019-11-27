<?php
  $video_thumb =  wp_get_attachment_url( $instance['video_thumb'] );
  $video_thumb = $video_thumb ? $video_thumb : $instance['video_thumb_fallback'];

  $video_link = $instance['video_link'];
  $video_title = $instance['video_title'];
  $video_desc = $instance['video_desc'];

   adf_video_popup($video_thumb, $video_link, $video_title, $video_desc = '')
?>
