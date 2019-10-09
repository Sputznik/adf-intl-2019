<?php $bg_image='';?>
<div class="image-grid-container">
  <div class="col-4">
  <?php foreach ( $instance['img_grid_repeater'] as $value) : $img_id = getUniqueID( $value ); ?>
  <?php
  $bg_image = wp_get_attachment_url( $value['image'] );
  if( !( $value['image'] ) ){
    $bg_image = $value['image_fallback'];
  }
  $title = $value['image_title'];
  ?>
  <div class="col">
    <a data-toggle="modal" href="<?php _e( '#img-modal'.$img_id );?>" class="grid-img overlay-text-parent" style="background-image:url(<?php _e( $bg_image );?>);" title="<?php _e( $title );?>">
      <div class="overlay-text"><?php _e( $title );?></div>
    </a>
  </div>
  <?php endforeach;?>
</div>
<!-- Modal popup container-->
<div class="grid-modals-container">
  <?php
   	global $sp_sow;
  	foreach( $instance['img_grid_repeater'] as $value ){
  		if( function_exists( 'siteorigin_panels_render' ) ){
        $img_url = '';
        $img_id = getUniqueID( $value );
        $img_url = wp_get_attachment_url( $value['image'] );
        if( !( $value['image'] ) ){
          $img_url = $value['image_fallback'];
        }
        $admin_url = admin_url( 'admin-ajax.php' ).'?action=download&f='.$img_url;

  			$sp_sow->modal( 'img-modal'.$img_id, '<a target="_blank" class="grid_btn" href="'.$img_url.'" download>Click here to download</a><img src="'.$img_url.'"/>' );
  		}
  	}
  ?>
</div>
<!-- Modal popup container ends-->
</div>
