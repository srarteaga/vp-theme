  <!--Carousel Wrapper-->
<div id="carousel-header" class="carousel carousel1 slide carousel-fade" data-ride="carousel">

  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <?php
      $num=0;
      $args = array('posts_per_page' => 100,
        'post_type' => 'post'
      );
      $entradas= new WP_Query($args); while($entradas->have_posts() ): $entradas->the_post();
        $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'carousel');
        $post_id = get_the_ID();
        $carousel = get_post_meta( $post_id, 'add_carousel', true );

        if ($carousel==1 && $num!=5) {
          $ruta_imagen = $imagen[0];
          $num++;
          if ($num==1) {
            echo '<div class="carousel-item active">';
          }
          else{
            echo '<div class="carousel-item">';
          }
          ?>
          <div class="view">
            <img class="d-block imagen-carousel" src="<?php echo $ruta_imagen; ?>" alt="First slide">
            <div class="mask">
              <div class="fixed-bottom">
                <?php the_title( '<h3 class="h3-responsive text-white rgba-black-strong pb-5 w-100 text-center" style="margin-bottom: -5px;">', '</h3>' );?>
              </div>
            </div>
          </div>
      <?php
          echo '</div>';
        }
      endwhile; wp_reset_postdata();
    ?>
  </div>
  <!--/.Slides-->
  <!--Indicators-->
  <ol class="carousel-indicators">
    <?php
      for ($i=0; $i <$num ; $i++) {
        if ($i==0) {
          echo '<li data-target="#carousel-header" data-slide-to="0" class="active"></li>';
        }
        else{
          echo '<li data-target="#carousel-header" data-slide-to="'.$i.'"></li>';
        } 
      }
    ?>
  </ol>
  <!--/.Indicators-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-header" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carousel-header" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
 <!-- CON COLOR AZUL <div class="banner-social text-center font-small"> 
 <div class="text-center font-small">

  <div class="pt-2" id="carousel-redes">
    <h3 class="h3-responsive text-black font-Lobster">Redes Sociales</h3>
    <?php
      /*wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => 'ul',
        'menu_id' => 'menu-social',
        'menu_class' => 'list-inline-item'
      ));*/
    ?> 
  </div>

</div>
-->
