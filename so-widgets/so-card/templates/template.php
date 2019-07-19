<?php
  $card_repeater = $instance['card_repeater'];
  $card_style = $instance['card_style'];
  // echo "<pre>";
  // print_r($instance['card_repeater']);
  ?>
  <div class="card-container">
  <?php
  foreach ($card_repeater as $key => $value) {
    $bg_image = wp_get_attachment_url( $value['card_bg_img'] );
    $card_icon = siteorigin_widget_get_icon( $value['card_icon'], array( '' ) );
    $card_desc = $value['card_desc'];
    ?>
    <?php if( $card_style==='card_with_border' ) :?>
    <div class="card-inner">
      <div class="s-card-body">
        <?php if( $bg_image ):?>
        <div class="s-card" style="background-image:url(<?php _e($bg_image);?>);">
          <div class="s-card-overlay" style="background-color: <?php _e( $value['card_border'] ); ?>;">
          </div>
        <?php else:?>
          <div class="s-card" style="border: 20px solid <?php _e( $value['card_border'] ); ?>;?>);">
        <?php endif;?>
          <div class="s-card-header" style="color:<?php _e( $value['icon_color'] );?>">
            <?php echo $card_icon;?>
            <h4 class="uppercase text-center" style="color:<?php _e( $value['heading_color'] );?>"><?php _e( $value['heading_txt'] );?></h4>
          </div>
          <?php ( $value['card_link'] ) ? _e( '<a class="s-card-link" href="'.$value['card_link'].'";></a>' ) : '' ?>
        </div>
        <div class="s-bottom" style="background:<?php _e( $value['card_border'] ); ?>"></div>
      </div>
    <?php else:?>
    <div class="card-inner" style="margin-bottom:0;">
      <div class="s-card-body" style="height: 94%; margin-bottom: 0; position: relative;">
        <div class="s-card" style="background-color: transparent; height: 100%;margin-top: 15px;height: 30px;">
          <div class="s-card-header" style="position: relative; top: 0; left: 0; transform: none;">
            <h4 style="color:<?php _e( $value['heading_color'] );?>"><?php _e( $value['heading_txt'] );?></h4>
          </div>
        </div>
        <div class="s-bottom" style="background:<?php _e( $value['card_border'] ); ?>; margin-top: 7px;margin-bottom: 10px;"></div>
        <div class="narrow-text" style="color:<?php _e( $value['heading_color'] );?>" >
        <p style="text-align: center;">
          <strong><?php _e( $value['card_desc'] );?></strong>
        </p>
      </div>
        <?php ( $value['card_link'] ) ? _e( '<a class="s-card-link" href="'.$value['card_link'].'";></a>' ) : '' ?>
    </div>
    <?php endif;?>
    </div>
  <?php } ?>
  </div>
