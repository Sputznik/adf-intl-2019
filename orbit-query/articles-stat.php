<ul class='list-inline orbit-stat three-list'>
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
  <li class="orbit-article">
    <?php _e( do_shortcode('[orbit_thumbnail]') );?>
    <div class='orbit-excerpt'><?php the_excerpt();?></div>
    <?php get_template_part( 'template-parts/share', 'socialmedia' );?>
  </li>
  <?php endwhile;?>
</ul>
<style>
  .list-inline{
    list-style: none;
    margin: 0;
    padding: 0;

  }
  /*
  .orbit-stat{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 50px;
  }
  */
  .orbit-stat .orbit-article{
    border: #eee solid 1px;
    padding: 20px;
  }

  .orbit-stat a[href]{
    border-bottom: none;
  }
  .orbit-stat a[href] img{
    max-width: 50px;
    height: auto;
  }
  .social-icons li{
    display: inline-block;
  }
  .orbit-stat .orbit-excerpt p{
    color: #404040 !important;
    font-size: 0.875em !important;
    text-shadow: none !important;
  }

  @media( max-width: 768px ){
    .orbit-stat a[href] img{
      max-width: 30px;
    }
    /*
    .orbit-stat{
      grid-gap: 15px;
    }
    */
    .orbit-stat .orbit-article{
      padding: 10px;
    }
  }
</style>
