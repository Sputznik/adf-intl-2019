<ul class="orbit-article-list wrap list-unstyled">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<li><?php get_template_part( 'template-parts/content', 'search' );?></li>
  <?php endwhile;?>
</ul>
