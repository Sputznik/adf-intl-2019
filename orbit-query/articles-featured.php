
<?php while( $this->query->have_posts() ) : $this->query->the_post();?>
  <?php global $post; $type = get_post_type($post); ?>
  <div class="secondary-feature group <?php if($type == 'resource'){echo 'resource-feature';} ?>">
	   <?php get_template_part( 'template-parts/content', 'featured' );?>
  </div>
<?php endwhile;?>
