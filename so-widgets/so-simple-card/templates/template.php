<div class="card-container" style="max-width: 1000px;">
<?php foreach ( $instance['simple_card_repeater'] as $key => $value) :?>
  <div class="card-simple-inner" style="background-color:#fff;">
    <div class="simple-card-body">
        <div class="simple-card-header" style="color:<?php _e( $instance['title_color'] );?>">
          <h4><?php _e( $value['card_title'] );?></h4>
        </div>
      <div class="bottom"></div>
      <?php if( $value['card_desc'] ):?>
      <div style="color:<?php _e( $instance['desc_color'] );?>" >
        <p><?php _e( $value['card_desc'] );?></p>
      </div>
      <?php endif;?>
      <?php //( $value['card_link'] ) ? _e( '<a class="card-link" href="'.$value['card_link'].'";></a>' ) : '' ?>
    </div>
  </div>
<?php endforeach; ?>
</div><!-- .card-container -->
