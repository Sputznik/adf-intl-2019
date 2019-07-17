<?php
  $card_repeater = $instance['card_repeater'];
  // echo "<pre>";
  // print_r($instance['card_repeater']);
  ?>
  <div class="card-container">
  <?php
  foreach ($card_repeater as $key => $value) {
    $bg_image = wp_get_attachment_url( $value['card_bg_img'] );
    $card_icon = siteorigin_widget_get_icon( $value['card_icon'], array( '' ) );
    $card_style = $value['card_style'];
    $card_desc = $value['card_desc'];
    ?>
    <?php if( $card_style==='card_with_border' ) :?>
    <div class="s-card-inner">
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
    <div class="s-card-inner" style="margin-bottom:0;">
      <div class="s-card-body" style="height: 94%; margin-bottom: 0; position: relative;">
        <div class="s-card" style="background-color: transparent; height: 100%;margin-top: 15px;height: 30px;">
          <div class="s-card-header" style="position: relative; top: 0; left: 0; transform: none;">
            <h4 style="color:<?php _e( $value['heading_color'] );?>"><?php _e( $value['heading_txt'] );?></h4>
          </div>
        </div>
        <div class="s-bottom" style="background:<?php _e( $value['card_border'] ); ?>; margin-top: 5px;"></div>
        <div style="color:<?php _e( $value['heading_color'] );?>" >
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
<style>
  .card-container{
    width: 100%;
    height: auto;
    display: flex;
    flex-flow: wrap;
  }
  .s-card-inner{
    width: 100%;
    padding: 0.5em;
    margin-bottom: 25px;
  }
  .s-card-inner:last-child{ margin-bottom: 0; }
  .s-card{
    position: relative;
    width: 100%;
    height: 200px;
    background: #fff;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    box-sizing: border-box;
    text-align:center;
  }
  .s-card-overlay{
    opacity: 0.7;
    width: 100%;
    height: 100%;
  }
  .s-card-header{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate( -50%, -50% );
  }
  .s-card span{
    display: inline-block;
    width:80px;
    height:65px;
    font-size:50px;
    padding:5px 10px;
  }
  .s-card-link{
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    display:block;
    width:100%;
    height:100%;
    border: none;
  }
  .s-card h4{
    margin: 0;
    font-weight: 100;
  }
  .s-bottom{
    margin-top: 18px;
    height: 20px;
    width: 100%;
  }
  .s-card-body{
    width: 200px;
    margin-left: auto;
    margin-right: auto;
  }
  @media(max-width: 600px){
    .s-card-body{
      width: 200px;
      height: 240px;
      margin: auto;
      margin-bottom: 10px;
    }
  }

  @media all and (min-width: 35em) {
  .s-card-inner {
    width: 33.33%;
  }
}
@media all and (min-width: 60em) {}
@media only screen and (min-width: 560px) and (max-width: 665px){
  .s-card-inner {
    width: 50%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 768px){
  .card-container{
    width: 100%;
    margin: auto;
  }
  .s-card-inner {
    width: 50%;
  }
}
</style>
