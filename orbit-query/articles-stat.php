<ul class='list-inline orbit-stat three-list'>
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
  <li class="orbit-article">
    <div class="orbit-article-thumbnail overlay-text-parent">
      <?php _e( do_shortcode('[orbit_thumbnail]') );?>
      <div class='orbit-excerpt overlay-text'><?php the_title();?></div>
    </div>
    <?php get_template_part( 'template-parts/share', 'socialmedia' );?>
  </li>
  <?php endwhile;?>
</ul>
