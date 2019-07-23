<?php $card_style = $instance['card_style'];?>
  <div class="card-container">
  <?php foreach ( $instance['card_repeater'] as $key => $value) :?>
  <?php
    $bg_image = wp_get_attachment_url( $value['card_bg_img'] );
    $card_icon = siteorigin_widget_get_icon( $value['card_icon'], array( '' ) );
    $card_desc = $value['card_desc'];

    // CLASSES FOR THE CARD
    $card_classes = array( "card-inner", $card_style );
    if( $value['card_link'] ){ array_push( $card_classes, "has-link" ); }
    if( $bg_image ){ array_push( $card_classes, "has-bg-image" );}
    $card_class = implode( ' ', $card_classes );

    // STYLES FOR THE CARD
    $card_styles = "";
    if( $card_style === 'card_with_border' ){
      if( $bg_image ){ $card_styles .= "background-image:url('".$bg_image."');"; }
      else{ $card_styles .= "border: 20px solid ".$value['card_border'].";"; }
    }
    else{
      $card_styles = "background-color: transparent; margin-top: 15px;";
    }
  ?>
  <div class="<?php _e( $card_class )?>">
    <div class="card-body">
      <div class="card" style="<?php _e( $card_styles );?>">
        <?php if( $bg_image ):?><div class="card-overlay" style="background-color: <?php _e( $value['card_border'] ); ?>;"></div><?php endif;?>
        <div class="card-header" style="color:<?php _e( $value['heading_color'] );?>">
          <?php echo $card_icon;?>
          <h4 class="uppercase text-center"><?php _e( $value['heading_txt'] );?></h4>
        </div>
        <?php ( $value['card_link'] ) ? _e( '<a class="card-link" href="'.$value['card_link'].'";></a>' ) : '' ?>
      </div>
      <div class="bottom" style="background:<?php _e( $value['card_border'] ); ?>"></div>
      <?php if( $value['card_desc'] ):?>
      <div class="narrow-text" style="color:<?php _e( $value['heading_color'] );?>" >
        <p style="text-align: center;"><strong><?php _e( $value['card_desc'] );?></strong></p>
      </div>
      <?php endif;?>
    </div>
  </div>
  <?php endforeach; ?>
</div><!-- .card-container -->
