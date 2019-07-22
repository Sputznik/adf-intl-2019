<ul class="article-list three-list group">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<li><?php //get_template_part( 'template-parts/content', 'article' );?></li>
  <?php endwhile;?>
</ul>
