<?php

  // UNIQUE ID OF THE WIDGET
  global $sp_sow;
  $widget_id = 'sow-bg-'.$sp_sow->getUniqueID( $instance );

  $image_src =  wp_get_attachment_url( $instance['header_image'] );
  $card_bg = $instance['card_bgcolor']."CC";

?>
<div id=<?php _e( $widget_id );?> class="sow-bg-image" style="">
  <div class="container">
    <div class="header-card" style="background-color:<?php _e( $card_bg ); ?>";>
      <?php _e( $instance['card_txt'] );?>
      <?php if( $instance['btn_url'] ) :?>
        <a type="button" href="<?php _e( $btn_url );?>"class="btn"><?php _e( $instance['btn_text'] ); ?></a>
      <?php endif;?>
    </div>
  </div>
</div>

<style>
  <?php _e( "#".$widget_id );?>{
    background-image: url( '<?php _e( $image_src );?>' );
    height: <?php _e( $instance['settings']['desktop']['bg_image_height'] );?>;

  }
  @media( max-width: 768px ){
    <?php _e( "#".$widget_id );?>{
      height: <?php _e( $instance['settings']['mobile']['bg_image_height'] );?>;
    }
  }
</style>
