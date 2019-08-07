<ul class="video-list three-list group" id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.video-popup');?>" data-url="<?php _e( $atts['url'] );?>">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
    <li class="video-popup">
      <?php get_template_part( 'template-parts/content', 'video' );?>
    </li>
  <?php endwhile;?>
</ul>
