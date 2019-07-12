<?php
  $card_repeater = $instance['card_repeater'];
  $card_icon = $instance['card_icon'];
  // echo "<pre>";
  // print_r($instance['card_repeater']);
  ?>
  <div class="card-container">
  <?php
  foreach ($card_repeater as $key => $value) {?>
    <div class="s-card-inner">
      <div class="s-card-body">
        <div class="s-card" style="border: 20px solid <?php _e( $value['card_border'] ); ?>">
          <div class="s-card-header">
            <?php echo siteorigin_widget_get_icon( $value['card_icon'], array( '') );?>
            <h4 style="color:<?php _e( $value['heading_color'] );?>"><?php _e( $value['heading_txt'] );?></h4>
          </div>
        </div>
        <div class="s-bottom" style="background:<?php _e( $value['card_border'] ); ?>"></div>
      </div>
    </div>
  <?php } ?>
  </div>
<style>
  .card-container{
    width: 100%;
    height: auto;
    display: flex;
    /* flex-direction: row; */
    /* justify-content: space-around; */
    flex-flow: wrap;
    /* margin-top: 40px;
    margin-bottom: 40px; */
  }
  .s-card-inner{
    width: 100%;
    padding: 0.5em;
    margin-bottom: 25px;
  }
  .s-card-inner:last-child{
    margin-bottom: 0;
  }
  .s-card{
    position: relative;
    width: 200px;
    /* max-width  : 200px; */
    height: 200px;
    background: #fff;
    box-sizing: border-box;
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
    margin-top: 18px;
    height: 20px;
    width: 100%;
  }
  .s-card-body{
    width: 200px;
  }
  @media(max-width: 600px){
    .s-card-body{
      width: 200px;
      height: 240px;
      margin: auto;
      margin-bottom: 10px;
    }
  }

  @media all and (min-width: 40em) {
  .s-card-inner {
    width: 50%;
  }
}
@media all and (min-width: 60em) {
  .s-card-inner {
    width: 33.33%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 768px){
  .card-container{
    width: 60%;
    margin: auto;
  }
}
</style>
