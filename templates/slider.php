<div class="ml-sm-4 pt-3 pb-5">
  <div class="border-title">
    <h2 class="ml-4">Últimas noticias</h2>
  </div>
  <div class="pt-3">
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel carousel2 slide carousel-multi-item" data-ride="carousel">
      <!--Indicators-->
      <div class="row">
        <ol class="carousel-indicators indicator">
          <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
          <li data-target="#multi-item-example" data-slide-to="1"></li>
          <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol> 
      </div>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="row ml-md-4 mr-md-4">
        <div class="col-md-12">
          <div class="carousel-inner" role="listbox">
          <!--First slide-->
            <div class="carousel-item active">
              <div class="row">
                <?php
                  $num=0;
                  $args = array('posts_per_page' => 30,
                    'post_type' => 'post'
                  );
                  $entradas= new WP_Query($args); while($entradas->have_posts() ): $entradas->the_post();
                    $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'carousel');
                    $post_id = get_the_ID();
                    $carousel = get_post_meta( $post_id, 'add_carousel', true );
                    $ruta_imagen = $imagen[0];
                    if ($num==10) {
                      echo '</div></div>';
                      echo '<div class="carousel-item">';
                      echo '<div class="row">';
                      $num=0;
                    }
                    $num++;
                    if ($num==6) {
                      echo '<div class="col-lg-6">';
                    }
                    if($num==1) {
                      echo '<div class="col-lg-6">';
                    }
                ?>
                  <div class="card">
                    <div class="view">
                      <img src="<?php echo $ruta_imagen; ?>" class="img-fluid w-100" style="height: 35vh;">
                      <div class="mask d-flex align-content-end flex-wrap waves-effect waves-light">
                        <?php the_title( '<p class="text-white rgba-black-strong mt-auto p-2" style="margin-bottom: -5px;">', '</p>' );?>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-color text-white rounded-bottom">
                    <?php
                      $content = get_the_excerpt();
                      $postOutput = preg_replace('/<img[^>]+./','', $content);
                      $postOutput = wp_filter_nohtml_kses( $postOutput );
                      echo substr($postOutput, 0, 200)." […]"; 
                       ?>
                     <div>
                       <a class="btn btn-cyan waves-effect rounded" href="<?php the_permalink() ?>">Leer mas...</a>
                     </div>
                  </div>
                <?php
                  if($num==10) {
                    echo '</div>';
                  }
                  if($num==5) {
                    echo '</div>';
                  }
                  endwhile; wp_reset_postdata();
                ?>
              </div>
            </div>
          </div>
        </div>
        <!--/.First slide--> 
      </div>
      <!--/.Slides-->
    </div>
  </div>
  <!--/.Carousel Wrapper-->
  <div class="text-center pt-6 lobster">
    <a href="<?php echo site_url() ?>/index.php/noticias" class="btn btn-info btn-noticia" >Mas noticias</a>
  </div>
</div>
