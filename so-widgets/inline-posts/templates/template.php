<div class="inline-posts">
	<?php foreach( $instance['posts'] as $post ): $post_id = getUniqueID( $post );?>
	<div class="inline-post">
		<a data-toggle="modal" href="<?php _e( '#inline-modal'.$post_id );?>">
			<div class="inline-post-image">
				<img src="<?php _e( wp_get_attachment_url( $post['image'] ) );?>" />
			</div>
			<div class="inline-post-desc">
				<div class="inline-post-title"><?php _e( $post[ 'title' ] );?></div>
				<div class="inline-post-excerpt"><?php _e( $post[ 'excerpt' ] );?></div>
			</div>
		</a>
	</div>
	<?php endforeach;?>
</div>


<!-- MODALS FROM THE INLINE POSTS -->
<?php
 	global $sp_sow;
	foreach( $instance['posts'] as $post ){
		if( function_exists( 'siteorigin_panels_render' ) ){
			$post_id = getUniqueID( $post );
			$sp_sow->modal( 'inline-modal'.$post_id, siteorigin_panels_render( 'w'.$post_id, true, $post['content'] ) );
		}
	}
?>
<!-- END OF MODALS -->
<style>
	.inline-post{
		max-height: <?php _e( $instance['height'] );?>
	}
</style>
