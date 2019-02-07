<?php get_header() ?>
<?php get_template_part('templates/header') ?>
<?php get_template_part('templates/carousel') ?>
<div class="row row-no-padding">
  <div class="col-sm-9">
    <?php get_template_part('templates/slider') ?>
  </div>
  <div class="col-sm-3">
    <?php get_template_part('templates/wiggets')  ?>
  </div>
</div>

<div class="container-fluid text-center" id="separator-container"><!--style="background-color: #eeeeee;"-->
  <div class="container pt-5 pb-5">
    <h2 class="h2-responsive font-Lobster pb-4">Multimedia</h2>
    <div class="row">
      <div class="col-md-4">
          <a href="<?php echo site_url() ?>/index.php/galeria" class="btn-floating icon-menu fa fa-picture-o rgba-black-strong"></a> 
          <h4 class="h4-responsive font-Lobster">Galeria</h4> 
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url() ?>/index.php/videos" class="btn-floating icon-menu fa fa-video-camera"></a>  
        <h4 class="h4-responsive font-Lobster">Videos</h4>
      </div>
      <div class="col-md-4">
        <a href="<?php echo site_url() ?>/index.php/publicaciones" class="btn-floating icon-menu fa fa-book"></a>  
        <h4 class="h4-responsive font-Lobster">Publicaciones</h4>
      </div>
    </div>
  </div>
</div>
<hr>

<div class="container-fluid fond-social pb-3">
  <div class="row text-center">
    <div class="col-lg-4">
      <h4 class="font-Lobster pt-2 pb-2 text-dark">Twitter</h4>
      <a class="twitter-timeline" data-height="800" data-width="500" href="https://twitter.com/ViceVenezuela?ref_src=twsrc%5Etfw">Tweets por ViceVenezuela</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
    </div>
    <div class="col-lg-4">
      <h4 class="font-Lobster pt-2 pb-2 text-dark">Instagram</h4>
        <div class="instagra-feed">
          <?php echo do_shortcode('[jr_instagram id="2"]'); ?>
        </div>
    </div>
    <div class="col-lg-4">
      <h4 class="font-Lobster pt-2 pb-2 text-dark">Facebook</h4>
        <?php if ( is_active_sidebar( 'facebook_id' ) ) : ?>
          <div class="facebook-feed">
            <?php dynamic_sidebar( 'facebook_id' ); ?>
          </div>
        <?php endif; ?>
    </div>
  </div>
</div>
<hr>
<div class="container text-center">
  <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-vicepresidencia.png" style="width: 65%">
</div>
<hr>
<?php get_footer() ?>