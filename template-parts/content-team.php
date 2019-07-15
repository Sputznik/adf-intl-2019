<div class="col">
  <a href="<?php the_permalink();?>">
    <div class="picture"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
    <div class="team-content">
      <h4><?php the_title();?></h4>
      <h5 class="text-muted uppercase"><?php _e( do_shortcode('[orbit_cf id="team-position"]') );?></h5>
      <div class="team-excerpt" style="margin-bottom:20px;"><?php the_excerpt();?></div>
      <strong class="link">Read more</strong>
    </div>
  </a>
</div>
