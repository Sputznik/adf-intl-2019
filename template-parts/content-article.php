<a href = "<?php the_permalink(); ?>">
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?>
  <span class="content-type"><?php _e( do_shortcode('[orbit_post_type]') );?></span>
  <div class="article-content">
    <?php $title = get_the_title(); ?>
    <h4><?php echo $title; ?></h4>
    <p><?php if(strlen($title) > 63) {echo excerpt(16);} elseif(strlen($title) > 32){echo excerpt(20);} else {echo excerpt(30);} ?></p>
    <strong class="link">Published on <?php echo get_the_date();?></strong>
  </div>
</a>
