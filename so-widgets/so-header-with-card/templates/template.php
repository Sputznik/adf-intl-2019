<?php
 $image_src =  wp_get_attachment_url( $instance['header_image'] );
 $card_bg = $instance['card_bgcolor']."AA";
 $card_text = $instance['card_txt'];
 $btn_text = $instance['btn_text'];
 $btn_url = $instance['btn_url']
 ?>
<div class="adf-header"  style="">
  <div class="bg-image" style="background-image:url(<?php _e( $image_src );?>);">
    <div class="container">
      <div class="header-card" style="background-color:<?php _e( $card_bg ); ?>";><h4><?php _e( $card_text ); ?></h4><br/>
        <?php if( $btn_url ) :?>
          <a type="button" href="<?php _e( $btn_url );?>"class="btn"><?php _e( $btn_text ); ?></a>
        <?php endif;?>
      </div>
    </div>
  </div>
</div>
<style>
  #content .page-content{
    padding: 0 !important;
    margin: 0 !important;
    max-width: 100% !important;
  }
  .adf-header{
    /* width: 100%;
    height: 82vh;
    position: relative; */
  }
  .bg-image{
    /* height:100%;
    width:100%; */
    padding: 20px 0;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
  .header-card{
    width: 90%;
    max-width: 350px;
    /* height: 400px; */
    padding: 20px 35px;
    color: #fff;
    margin-bottom: 20px;
  }
  .header-card > h4{
    margin: 0;
    line-height: 1.8;
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
  @media(max-width: 768px){
    .header-card{
      width: 100%;
      height: 100%;
    }
    .bg-image > .container{
      padding: 0;
      margin: 0;
    }
    .header-card{
      max-width: 100%;
      margin-bottom: 0;
    }
    .bg-image{
      padding: 0;
    }
  }
  @media only screen and (min-width: 320px) and (max-width: 1024px){
    .bg-image > .container{
      /* padding-top: 20px; */
    }
  }
  @media(max-width:320px){
    .header-card{
      padding: 20px 15px
    }
    .header-card > h4{
      margin: 0;
      line-height: 1.6;
    }
  }
  @media(min-width: 1024px){
    .bg-image > .container{
      /* padding-top: 60px; */
    }
  }
</style>
