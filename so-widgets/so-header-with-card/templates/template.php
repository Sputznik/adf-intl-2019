<?php
 $image_src =  wp_get_attachment_url( $instance['header_image'] );
 $card_bg = $instance['card_bgcolor']."CC";
 $card_text = $instance['card_txt'];
 $btn_text = $instance['btn_text'];
 $btn_url = $instance['btn_url']
 ?>
<div class="sow-bg-image" style="background-image:url(<?php _e( $image_src );?>);">
  <div class="container">
    <div class="header-card" style="background-color:<?php _e( $card_bg ); ?>";>
      <?php _e( $card_text ); ?>
      <?php if( $btn_url ) :?>
        <a type="button" href="<?php _e( $btn_url );?>"class="btn"><?php _e( $btn_text ); ?></a>
      <?php endif;?>
    </div>
  </div>
</div>
<style>
  /*
  #content .page-content{
    padding: 0 !important;
    margin: 0 !important;
    max-width: 100% !important;
  }
  */
</style>
