<?php

  $theme_class = $instance['theme']."-theme";


?>
<div class="adf-sow-headline text-center <?php _e( $theme_class );?>">
  <?php if( isset( $instance['heading'] ) && $instance['heading'] ):?><h1><?php _e( $instance['heading'] );?></h1><?php endif;?>
  <?php if( isset( $instance['subheading'] ) && $instance['subheading'] ):?><h4><?php _e( $instance['subheading'] );?></h4><?php endif;?>
  <?php if( isset( $instance['hide_decoration'] ) && !$instance['hide_decoration'] ):?><div class="decoration"></div><?php endif;?>
  <div class='text'><?php _e( $instance['text'] );?></div>
</div>
