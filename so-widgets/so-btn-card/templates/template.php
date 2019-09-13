<div class="btn-card-container">
  <?php foreach ( $instance['card_btn_repeater'] as $key => $value) :?>
  <?php $card_icon = siteorigin_widget_get_icon( $value['card_icon'], array( '' ) ); ?>
  <div class="btn-card">
    <div class="btn-card-body">
      <div class="btn-card-icon"><?php echo $card_icon;?></div>
      <div class="btn-card-title"><h4 class="uppercase text-center"><?php _e( $value['heading_txt'] );?></h4></div>
      <div class="btn-card-content"><p class="text-center"><?php _e( $value['card_desc'] );?></p></div>
      <div class="btn-card-btn">
        <?php ( $value['card_link'] ) ? _e( '<a href="'.$value['card_link'].'">'.$value['card_btn_txt'].'</a>' ) : '' ?>
      </div>
      <?php ( $value['card_link'] ) ? _e( '<a class="btn-link" href="'.$value['card_link'].'"></a>' ) : '' ?>
    </div>
  </div>
  <?php endforeach; ?>
</div><!-- .btn-card-container -->
<style>
  .btn-card-container .btn-card-body .btn-card-content {
      min-height: <?php _e( $instance['card_height'] ); ?>;
  }
</style>
