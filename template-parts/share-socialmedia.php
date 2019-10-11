<?php global $post;?>

<?php /*
<ul class="list-inline social-icons">
  <li>
    <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>">
      <img src="<?php bloginfo('template_url');?>/_i/facebook.png" />
    </a>
  </li>
  <li>
    <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $post->post_excerpt;?>&url=<?php the_permalink();?>&via=ADFIntl">
      <img src="<?php bloginfo('template_url');?>/_i/twitter.png" />
    </a>
  </li>
  <li>
    <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>">
      <img src="<?php bloginfo('template_url');?>/_i/linkedin.png" />
    </a>
  </li>
</ul>
*/ ?>
<?php

  $permalink = get_the_permalink();

  $icons = array(
    'fb'  => array(
      'icon'  => 'fa fa-facebook',
      'url'   => "https://www.facebook.com/sharer.php?u=$permalink"
    ),
    'tw'  => array(
      'icon'  => 'fa fa-twitter',
      'url'   => "https://twitter.com/intent/tweet?text=".$post->post_excerpt."&url=$permalink&via=ADFIntl"
    ),
    'li'  => array(
      'icon'  => 'fa fa-linkedin',
      'url'   => "https://www.linkedin.com/sharing/share-offsite/?url=$permalink"
    ),
  );

  if( 'statistics' == get_post_type() ){
    $icons['download'] = array(
      'icon'  => 'fa fa-download',
      'url'   => wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) )
    );
  }
?>
  <ul class="list-inline social-icons">
  <?php foreach( $icons as $key => $icon ): $class = $key." social-fa-icon"; ?>
    <li>
      <a class='<?php _e( $class ); ?>' target='_blank' href='<?php _e( $icon['url'] );?>'>
        <i class='<?php _e( $icon['icon'] );?>'></i>
      </a>
    <li>
  <?php endforeach;?>
  </ul>
