<ul class="article-list three-list group space article-images">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<li><?php get_template_part( 'template-parts/content', 'img-grid' );?></li>
  <?php endwhile;?>
</ul>
