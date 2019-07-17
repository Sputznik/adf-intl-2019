<div class='container'>
<?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<?php get_template_part( 'template-parts/content', 'featured' );?>
<?php endwhile;?>
</div>
