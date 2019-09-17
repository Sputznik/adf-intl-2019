<?php

  $theme_class = $instance['theme']."-theme";

  // UNIQUE ID OF THE WIDGET
  global $sp_sow;
  $widget_id = 'sow-headline-'.$sp_sow->getUniqueID( $instance );


?>
<div class="container" id="<?php _e( $widget_id );?>">
  <div class="adf-sow-headline text-center <?php _e( $theme_class );?>">
    <?php if( isset( $instance['heading'] ) && $instance['heading'] ):?><h1><?php _e( $instance['heading'] );?></h1><?php endif;?>
    <?php if( isset( $instance['subheading'] ) && $instance['subheading'] ):?><h4><?php _e( $instance['subheading'] );?></h4><?php endif;?>
    <?php if( isset( $instance['hide_decoration'] ) && !$instance['hide_decoration'] ):?><div class="decoration"></div><?php endif;?>
    <div class='text'><?php _e( $instance['text'] );?></div>
  </div>
</div>
<?php if( isset( $instance['no_margins'] ) && $instance['no_margins'] ):?>
<style>
  <?php _e( "#".$widget_id );?> .adf-sow-headline{ margin: 0 auto; }
</style>
<?php endif; ?>
