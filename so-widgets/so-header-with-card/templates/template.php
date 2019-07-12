<?php
 $image_src =  wp_get_attachment_url( $instance['header_image'] );
 $card_bg = $instance['card_bgcolor'];
 $card_text = $instance['card_txt'];
 $btn_text = $instance['btn_text'];
 ?>
<div class="adf-header"  style="">
  <?php echo '<div class="bg-image" style="background-image:url('.$image_src.');"><div class="container"><div class="header-card" style="background-color:'.$card_bg.'";>'.$card_text.'<br/><a type="button" href="#"class="btn">'.$btn_text.'</a></div></div></div>'; ?>
</div>
<style>
  #content .page-content{
    padding: 0 !important;
    margin: 0 !important;
    max-width: 100% !important;
  }
  .adf-header{
    width: 100%;
    height: 82vh;
    position: relative;
  }
  .bg-image{
    height:100%;
    width:100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
  .header-card{
    position: absolute;
    top: 12%;
    width: 100%;
    max-width: 420px;
    height: 400px;
    padding: 20px 35px;
    color: #fff;
    /* font-family: 'Roboto', sans-serif; */
    font-family: 'Merriweather', serif;
    font-size: 1.75em;
  }
  .header-card .btn{
    font-size: 18px;
    padding: 5px 30px;
    background: transparent;
    border: 1px solid #fff;
  }
  .header-card .btn:hover{
    color: #e6b614;
    background: #fff;
    border: 1px solid #e6b614;
  }
</style>
