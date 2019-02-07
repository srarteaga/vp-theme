<?php get_header() ?>
  <h1>404 page not found!</h1>

  <?php 
    query_posts('pagename=Inicio');
    while (have_posts()) : the_post();
      $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'inicio');
      $ruta_imagen = $imagen[0];
      ?>
        <div class="container text-center pt-3">
          <img src="<?php echo $ruta_imagen; ?>" class="img-fluid" style="width: 50%;">
          <div class="text-justify">
            <?php the_content(); ?>
          </div>
        </div>
      <?php
    endwhile;
  ?>
<?php get_footer() ?>