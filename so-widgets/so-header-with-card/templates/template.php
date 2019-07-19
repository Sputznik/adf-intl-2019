<?php

  // UNIQUE ID OF THE WIDGET
  global $sp_sow;
  $widget_id = 'sow-bg-'.$sp_sow->getUniqueID( $instance );

  $image_src =  wp_get_attachment_url( $instance['header_image'] );
  $card_bg = $instance['card']['bg']."CC";


?>
<div id=<?php _e( $widget_id );?> class="sow-bg-image">
  <div class="container">
    <?php if( $instance['card']['html'] ):?>
    <div class="header-card" style="">
      <?php _e( $instance['card']['html'] );?>
      <?php if( $instance['btn']['url'] ) :?>
      <a type="button" href="<?php _e( $instance['btn']['url'] );?>" class="btn"><?php _e( $instance['btn']['text'] );?></a>
      <?php endif;?>
    </div>
    <?php endif;?>
  </div><!-- .container -->
</div>
<style>
  <?php _e( "#".$widget_id );?>{
    background-image: url( '<?php _e( $image_src );?>' );
    height          : <?php _e( $instance['settings']['desktop']['bg_image_height'] );?>;
  }
  <?php _e( "#".$widget_id );?> .header-card{
    background-color: <?php _e( $card_bg ); ?>;
    color           : <?php _e( $instance['card']['color']);?>;
    max-width       : <?php _e( $instance['card']['width']);?>;
  }
  <?php _e( "#".$widget_id );?> .header-card a[href].btn{
    border-color: <?php _e( $instance['card']['color'] );?>;
    color:        <?php _e( $instance['card']['color'] );?>;
  }
  @media( max-width: 768px ){
    <?php _e( "#".$widget_id );?>{
      height: <?php _e( $instance['settings']['mobile']['bg_image_height'] );?>;
    }
  }
</style>
