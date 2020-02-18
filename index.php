<?php get_header() ?>
<?php get_template_part('templates/header') ?>
<?php get_template_part('templates/carousel') ?>
<div class="row row-no-padding mr-auto">
  <div class="col-md-9">
    <?php get_template_part('templates/slider') ?>
    <div class="w-100 text-center" id="separator-container" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/para-web.jpg); -moz-background-size: 100% 100%; -o-background-size: 100% 100%; background-size: 100% 100%; width: 100%;"><!--style="background-color: #eeeeee;"-->
      <div class="rgba-black-light py-5 px-4">
        <h2 class="h2-responsive pb-4 font-Lobster"><b>Multimedia</b></h2>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item  ml-auto">
            <a class="btn-floating icon-menu fa fa-picture-o rgba-black-strong pt-4" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
              aria-controls="pills-profile" aria-selected="false"></a>
              <h5 class="h5-responsive font-Lobster">Galeria</h5>
          </li>
          <li class="nav-item mr-auto ml-5">
<!--             <a class="btn-floating icon-menu fa fa-picture-o rgba-black-strong pt-4" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
              aria-controls="pills-profile" aria-selected="false"></a>
              <h5 class="h5-responsive font-Lobster">Galeria</h5> -->
          </li>
          <!--
          <li class="nav-item mr-auto ml-auto">
            <a class="btn-floating icon-menu fa fa-book pt-4" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
              aria-controls="pills-contact" aria-selected="false"></a>
              <h5 class="h5-responsive font-Lobster">Publicaciones</h5>
          </li>
          -->
        </ul>
      </div>
    </div>
    <div class="tab-content pl-1" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="container pt-2">
          <div class="title-entradas text-center pt-4">
            <b class="text-pill">Galeria</b>
          </div>
          <div class="container text-center" id="galery">
            <?php echo do_shortcode( '[ngg src="galleries" display="basic_thumbnail" thumbnail_crop="0" images_per_page="16" number_of_columns="4" ajax_pagination="0"]' ); ?>
          </div>
          
        </div>
      </div>

      <!--
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      PUBLICACIONES
      </div>
      -->



    </div>
  </div>
  <!-- INICIO SLIDEBAR -->
  <div class="col-md-3 d-none d-lg-block d-md-block d-xl-block">
    <?php get_template_part('templates/wiggets')  ?>
  </div>
</div>

<!--
<div class="container text-center">
  <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-vicepresidencia.png" style="width: 65%">
</div>
-->
<hr>
<?php get_footer() ?>