<?php

  global $post;

  $title = get_the_title();
  $title_length = strlen( $title );
  $excerpt_length = 0;
  if( $title_length < 80 ){
    $excerpt_length = 80 - $title_length;

    if( $excerpt_length < 25 ){
      $excerpt_length = 25;
    }
  }

  $post_type = get_post_type( $post );
?>
<a href = "<?php the_permalink(); ?>" class="<?php _e( $post_type );?>">
  <div class='article-featured-image'><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?></div>
  <span class="content-type"><?php _e( $post_type );?></span>
  <div class="article-content">
    <h4><?php echo $title; ?></h4>
    <?php if( $excerpt_length ):?>
    <p class="text-muted narrow-text"><?php echo excerpt( $excerpt_length ); ?></p>
    <?php endif;?>
    <strong class="link">Published on <?php echo get_the_date();?></strong>
  </div>
</a>
