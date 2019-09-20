<?php global $post;?>
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
