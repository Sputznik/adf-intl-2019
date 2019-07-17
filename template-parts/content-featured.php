<?php
  global $post;
  $type = get_post_type($post);
?>
<div class="secondary-feature group <?php if($type == 'resource'){echo 'resource-feature';} ?>">
  <a href = "<?php the_permalink(); ?>" class="feature-image">
    <?php if($type == 'resource'): ?>
      <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' )[0]; ?>">
    <?php else : ?>
    <picture>
      <source srcset="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'square' )[0]; ?>" media="(max-width: 44em)">
      <source srcset="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' )[0]; ?>" media="(max-width: 62.5em)">
      <?php echo wp_get_attachment_image(get_post_thumbnail_id( get_the_ID() ), 'square'); ?>
    </picture>
    <?php endif; ?>
  </a>
  <span class="content-type"><?php echo get_post_type($post); ?></span>
  <div class="feature-content">
    <a href="<?php the_permalink(); ?>">
      <h3><?php the_title(); ?></h3>
      <p><?php echo excerpt(30); ?></p>
      <strong class="link">Published on <?php the_date();?></strong>
    </a>
  </div>
</div>