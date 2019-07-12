<?php
  $card_icon = $instance['card_icon'];
?>
<div class="container">
  <div class="s-card" style="border: 20px solid <?php _e( $instance['card_border'] ); ?>">
    <div class="s-card-header">
      <?php echo siteorigin_widget_get_icon( $instance['card_icon'], array( '') );?>
      <h4 style="color:<?php _e( $instance['heading_color'] );?>"><?php _e( $instance['heading_txt'] );?></h4>
    </div>
  </div>
  <div class="s-bottom" style="background:<?php _e( $instance['card_border'] ); ?>"></div>
</div>
<style>
  .s-card{
    position: relative;
    width: 200px;
    /* max-width: 200px; */
    height: 200px;
    background: #fff;
    /* border: 10px solid #000; */
    text-align:center;
  }
  .s-card-header{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate( -50%, -50% );
  }
  .s-card span{
    display: inline-block;
    /* background:green; */
    width:80px;
    height:65px;
    font-size:50px;
    padding:5px 10px;
  }
  .s-card h4{
    margin: 0;
    font-weight: 100;
    text-align: center;
  }
  .s-bottom{
    margin-top: 20px;
    height: 20px;
    width: 100%;
    max-width: 200px;
  }
</style>
