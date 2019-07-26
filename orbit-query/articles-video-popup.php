<ul class="article-list three-list group" id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.video-popup');?>" data-url="<?php _e( $atts['url'] );?>">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
    <li class="video-popup">
      <?php global $post; $video_url = get_post_meta( $post->ID, 'video-url', true );?>
        <div class='video'><?php the_post_thumbnail('large');?></div>
        <div class='overlay-text'>
          <a href="<?php _e( $video_url ); ?>" rel="wp-video-lightbox">
            <h3><?php the_title();?></h3>
            <p><?php the_excerpt();?></p>
          </a>
        </div>
    </li>
  <?php endwhile;?>
</ul>
<style>
  .article-list a{
    background: none;
  }
  .article-list .video-popup .video {
    max-height: 210px;
    overflow: hidden;
    width: 100%;
  }
  .article-list .video img{
    width: 100%;
  }
  @media only screen and (min-width: 768px) and (max-width: 768px){
    .article-list.three-list li{
      width: 33.33% !important;
    }
  }
</style>
