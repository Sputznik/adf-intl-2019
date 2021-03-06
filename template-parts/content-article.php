<?php

  global $post;

  $title = get_the_title();
  $title_length = strlen( $title );
  $excerpt_length = 0;
  if( $title_length < 120 ){
    $excerpt_length = 120 - $title_length;

    if( $excerpt_length < 15 ){
      $excerpt_length = 15;
    }
    if( $excerpt_length > 30 ){
      $excerpt_length = 30;
    }
  }

  $post_type = get_post_type( $post );

  $post_type_text = $post_type;
  if( 'alliance-alert' == $post_type ){
    $post_type_text = 'Alliance Alert';
  }

?>
<a href = "<?php the_permalink(); ?>" class="<?php _e( $post_type );?>">
  <div class='article-featured-image'><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?></div>
  <span class="content-type"><?php _e( $post_type_text );?></span>
  <div class="article-content">
    <h4><?php echo $title; ?></h4>
    <?php if( $excerpt_length ):?>
    <p class="text-muted narrow-text"><?php echo excerpt( $excerpt_length ); ?></p>
    <?php endif;?>
    <strong class="link">Published on <?php echo get_the_date();?></strong>
  </div>
</a>
