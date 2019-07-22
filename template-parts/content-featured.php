<?php global $post; $type = get_post_type($post); ?>
<a href = "<?php the_permalink(); ?>" class="feature-image">
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
  <span class="content-type"><?php echo get_post_type($post); ?></span>
</a>
<div class="feature-content">
  <a href="<?php the_permalink(); ?>">
    <h2 class="no-margin-top"><?php the_title(); ?></h2>
    <p class="text-muted narrow-text"><?php echo excerpt(20); ?></p>
    <strong class="link">Published on <?php echo get_the_date();?></strong>
  </a>
</div>
