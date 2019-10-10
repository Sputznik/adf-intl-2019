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

  _e('<ul class="list-inline social-icons">');
  foreach( $icons as $key => $icon ){

    $class = $key." social-fa-icon";

    _e("<li>");
    _e("<a class='".$class."' target='_blank' href='" . $icon['url'] . "'>");
    _e("<i class='".$icon['icon']."'></i>");
    _e("</a>");
    _e("<li>");
  }
  _e('</ul>');

?>
