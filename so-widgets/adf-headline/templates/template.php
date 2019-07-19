<?php

  $theme_class = $instance['theme']."-theme";
  

?>
<div class="adf-sow-headline text-center <?php _e( $theme_class );?>">
  <h1><?php _e( $instance['heading'] );?></h1>
  <h4><?php _e( $instance['subheading'] );?></h4>
  <div class="decoration"></div>
  <div class='text'><?php _e( $instance['text'] );?></div>
</div>
