<div class="ml-sm-4 pt-3 pb-2">
  <div class="border-title">
    <h2 class="ml-5">Últimas noticias</h2>
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
          <li data-target="#multi-item-example" data-slide-to="3"></li>
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
                  $args = array('posts_per_page' => 24,
                    'post_type' => 'post'
                  );
                  $entradas= new WP_Query($args); while($entradas->have_posts() ): $entradas->the_post();
                    $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'carousel');
                    $post_id = get_the_ID();
                    $carousel = get_post_meta( $post_id, 'add_carousel', true );
                    $ruta_imagen = $imagen[0];
                    if ($num==6) {
                      echo '</div></div>';
                      echo '<div class="carousel-item">';
                      echo '<div class="row">';
                      $num=0;
                    }
                    $num++;
                    if ($num==4) {
                      echo '<div class="col-lg-5">';
                    }
                    if($num==1) {
                      echo '<div class="offset-lg-1  col-lg-5">';
                    }
                ?><div class="mb-3 z-depth-2 " style="border-radius: 15px;">
                  <div class="card" style="border-radius: 8px 8px 0px 0px !important;" >
                    <div class="view">
                      <img src="<?php echo $ruta_imagen; ?>" class="img-fluid img-slide">
                      <div class="mask d-flex align-content-end flex-wrap waves-effect waves-light">
                        <?php the_title( '<p class="text-white rgba-black-strong mt-auto p-2" style="margin-bottom: -5px;">', '</p>' );?>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-color text-white  w-100" style="height: 180px !important;  border-radius: 0px 0px 15px 15px;">
                    <?php
                      $content = get_the_excerpt();
                      $postOutput = preg_replace('/<img[^>]+./','', $content);
                      $postOutput = wp_filter_nohtml_kses( $postOutput );
                      echo substr($postOutput, 0, 160)." […]"; 
                       ?>
                     <div>
                       <a class="btn btn-cyan waves-effect rounded" href="<?php the_permalink() ?>">Leer mas...</a>
                     </div>
                  </div>
                  </div>
                <?php
                  if($num==6) {
                    echo '</div>';
                  }
                  if($num==3) {
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
    <a href="<?php echo site_url() ?>/?page_id=5" class="btn btn-info btn-noticia" >Mas noticias</a>
  </div>
</div>
<div class="ml-sm-4 pb-5 pt-2">
  <div class="border-title text-white rgba-black-strong">
    <h2 class="ml-5">Especiales</h2>
  </div>
  <div class="pt-3">
    <!--Carousel Wrapper-->
    <div id="multi-item-especiales" class="carousel carousel2 slide carousel-multi-item" data-ride="carousel">
      <!--Indicators-->
      <div class="row">
        <ol class="carousel-indicators indicator">
          <li data-target="#multi-item-especiales" data-slide-to="0" class="active"></li>
          <li data-target="#multi-item-especiales" data-slide-to="1"></li>
          <li data-target="#multi-item-especiales" data-slide-to="2"></li>
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
<!--                 <?php
                  $num=0;
                  $args = array('posts_per_page' => 12,
                    'post_type' => 'post',
                    'category_name' => 'Especiales'
                  );
                  $entradas= new WP_Query($args); while($entradas->have_posts() ): $entradas->the_post();
                    $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'carousel');
                    $post_id = get_the_ID();
                    $carousel = get_post_meta( $post_id, 'add_carousel', true );
                    $ruta_imagen = $imagen[0];
                    if ($num==4) {
                      echo '</div></div>';
                      echo '<div class="carousel-item">';
                      echo '<div class="row">';
                      $num=0;
                    }
                    $num++;
                    if ($num==3) {
                      echo '<div class="col-lg-5">';
                    }
                    if($num==1) {
                      echo '<div class="offset-lg-1  col-lg-5">';
                    }
                ?><div class="mb-3 z-depth-2 " style="border-radius: 15px;">
                  <div class="card" style="border-radius: 8px 8px 0px 0px !important;" >
                    <div class="view">
                      <img src="<?php echo $ruta_imagen; ?>" class="img-fluid img-slide">
                      <div class="mask d-flex align-content-end flex-wrap waves-effect waves-light">
                        <?php the_title( '<p class="text-white rgba-black-strong mt-auto p-2" style="margin-bottom: -5px;">', '</p>' );?>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-color text-white  w-100" style="height: 180px !important;  border-radius: 0px 0px 15px 15px;">
                    <?php
                      $content = get_the_excerpt();
                      $postOutput = preg_replace('/<img[^>]+./','', $content);
                      $postOutput = wp_filter_nohtml_kses( $postOutput );
                      echo substr($postOutput, 0, 160)." […]"; 
                       ?>
                     <div>
                       <a class="btn btn-cyan waves-effect rounded" href="<?php the_permalink() ?>">Leer mas...</a>
                     </div>
                  </div>
                  </div>
                <?php
                  if($num==4) {
                    echo '</div>';
                  }
                  if($num==2) {
                    echo '</div>';
                  }
                  endwhile; wp_reset_postdata();
                ?> -->

                <?php
                  $num=0;
                  $args = array('posts_per_page' => 12,
                    'post_type' => 'post',
                    'category_name' => 'Especiales'
                  );
                  $entradas= new WP_Query($args); while($entradas->have_posts() ): $entradas->the_post();
                    $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'car-especial');
                    $post_id = get_the_ID();
                    $carousel = get_post_meta( $post_id, 'add_carousel', true );
                    $ruta_imagen = $imagen[0];
                    if ($num==4) {
                      echo '</div></div>';
                      echo '<div class="carousel-item">';
                      echo '<div class="row">';
                      $num=0;
                    }
                    $num++;
                    if ($num==3) {
                      echo '<div class="col-lg-5">';
                    }
                    if($num==1) {
                      echo '<div class="offset-lg-1  col-lg-5">';
                    }
                ?><div class="mb-3 z-depth-2 " style="border-radius: 15px;">
                  <div class="card card-image" style="background-image: url(<?php echo $ruta_imagen; ?>); -moz-background-size: 100% 100%; -o-background-size: 100% 100%; background-size: 100% 100%; width: 100%; height: 35vh;">
                    <div class="text-white text-center d-flex align-items-center rgba-black-light py-5 px-4" style="width: 100%; height: 35vh;">
                      <div class="align-bottom mt-5 pt-5">
                        <?php the_title( '<h5 class="card-title pt-5 mt-5 font-weight-bold" style="text-shadow: 0px 0px 5px #000000 !important;"><strong>', '</strong></h5>' );?>
                        <div>
                          <a class="btn btn-cyan waves-effect rounded" href="<?php the_permalink() ?>">Leer mas...</a>
                        </div>
                       </div>
                    </div>
                  </div>
                  </div>
                <?php
                  if($num==4) {
                    echo '</div>';
                  }
                  if($num==2) {
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
    <a href="<?php echo site_url() ?>/?page_id=130" class="btn btn-info btn-noticia" >Mas especiales</a>
  </div>
</div>