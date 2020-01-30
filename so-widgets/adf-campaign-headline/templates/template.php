<div class="container">
  <div class="adf-sow-campaign-headline text-center">
    <?php if( isset( $instance['heading'] ) && $instance['heading'] ):?><h2><?php _e( $instance['heading'] );?></h2><?php endif;?>
    <div class='text'><?php _e( $instance['subheading'] );?></div>
    <?php if( isset( $instance['hide_decoration'] ) && !$instance['hide_decoration'] ):?><div class="decoration"></div><?php endif;?>
  </div>
</div>
