<?php
  $title = get_the_title();
  $title_length = strlen( $title );
  $excerpt_length = 0;
  if( $title_length < 50 ){
    $excerpt_length = 50 - $title_length;

    if( $excerpt_length < 25 ){
      $excerpt_length = 25;
    }
  }
?>
<a href = "<?php the_permalink(); ?>">
  <div class='article-featured-image'><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?></div>
  <span class="content-type"><?php _e( do_shortcode('[orbit_post_type]') );?></span>
  <div class="article-content">
    <h4><?php echo $title; ?></h4>
    <?php if( $excerpt_length ):?>
    <p class="text-muted narrow-text"><?php //echo excerpt( $excerpt_length ); ?></p>
    <?php endif;?>
    <strong class="link">Published on <?php echo get_the_date();?></strong>
  </div>
</a>
