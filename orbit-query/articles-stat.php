<?php

  $slick = array(
    'dots'        => true,
    'infinte'     => false,
    'slidesToShow' => 3,
    'slidesToScroll' => 3,
    'responsive' => array(
      array(
        'breakpoint' => 769,
        'settings' => array(
          'slidesToShow' => 2,
          'slidesToScroll' => 2,
        )
      )
    )
  );

?>

<div data-behaviour="slick" class="test-slick" data-slick='<?php _e( wp_json_encode( $slick ) );?>'>
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
  <div>
    <div class="article">
      <div class="orbit-article-thumbnail overlay-text-parent">
        <?php _e( do_shortcode('[orbit_thumbnail]') );?>
        <div class='orbit-excerpt overlay-text'><?php the_title();?></div>
      </div>
      <?php get_template_part( 'template-parts/share', 'socialmedia' );?>
    </div>
  </div>
  <?php endwhile;?>
</div>
