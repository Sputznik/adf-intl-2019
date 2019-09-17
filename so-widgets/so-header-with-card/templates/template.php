<?php

  // UNIQUE ID OF THE WIDGET
  global $sp_sow;
  $widget_id = 'sow-bg-'.$sp_sow->getUniqueID( $instance );

  $image_src =  wp_get_attachment_url( $instance['header_image'] );
  $card_bg = $instance['card']['bg'];
  $card_opacity_desktop = $instance['settings']['desktop']['opacity']/10;
  $card_opacity_mobile = $instance['settings']['mobile']['opacity']/10;
  $card_align = $instance['card']['header_card_alignment'];

?>
<div id="<?php _e( $widget_id );?>" class="sow-bg-image">
  <div class="container">
    <?php if( $instance['card']['html'] || $instance['card']['heading'] ):?>
    <div class="header-card <?php _e( $card_align );?>" style="">
      <?php if( $instance['card']['heading'] ):?><h4><?php _e( $instance['card']['heading'] );?></h4><?php endif;?>
      <?php if( $instance['card']['html'] ):?><p><?php _e( $instance['card']['html'] );?></p><?php endif;?>
      <?php if( $instance['btn']['url'] ) :?>
      <a type="button" href="<?php _e( $instance['btn']['url'] );?>" class="btn"><?php _e( $instance['btn']['text'] );?></a>
      <?php endif;?>
    </div>
    <?php endif;?>
  </div><!-- .container -->
  <?php if( $instance['btn']['url'] ) :?>
  <a href="<?php _e( $instance['btn']['url'] );?>" class="hidden-link"></a>
  <?php endif;?>
</div>
<style>
  <?php _e( "#".$widget_id );?>{
    background-image: url( '<?php _e( $image_src );?>' );
    height          : <?php _e( $instance['settings']['desktop']['bg_image_height'] );?>;
  }
  <?php _e( "#".$widget_id );?> .header-card{
    background-color: <?php _e( $card_bg ); ?>;
    color           : <?php _e( $instance['card']['color']);?>;
    opacity         : <?php _e( $card_opacity_desktop );?>;
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
    <?php _e( "#".$widget_id );?> .header-card{
      opacity: <?php _e( $card_opacity_mobile );?>;
    }
  }

  @media( min-width:769px ){
    /* Header Card Alignment for Desktop only */
    <?php _e( "#".$widget_id );?> .header-card.left-align{
      left: 0;
      margin-left: 20px;
    }

    <?php _e( "#".$widget_id );?> .header-card.right-align{
      right: 0;
      margin-right: 20px;
    }

    <?php _e( "#".$widget_id );?> .header-card.center-align{
      left: 50%;
      transform: translate( -50%, -50% ) !important;
    }
  }
</style>
