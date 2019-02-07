<?php /* Template Name: Videos */ ?>
<?php get_header() ?>
<div class="page-nav">
  <?php get_template_part('templates/navbar') ?>
</div>
<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); 
      $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'inicio');
      $ruta_imagen = $imagen[0];
      ?>
      <div class="row no-gutters">
        <div class="offset-md-1 col-md-8">
          <div class="container">
            <div class="container-fluid">  
              <h3 class="text-center display-4 font-Lobster">Videos</h3>
              <?php if ( is_active_sidebar( 'youtube_id' ) ) : ?>
                  <ul id="sidebar" class="list-inline row">
                      <?php dynamic_sidebar( 'youtube_id' ); ?>
                  </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="fond-social pb-2">
            <div class="text-center">
              <div class="container-fluid">
                <h4 class="font-Lobster pt-2 pb-2 text-dark">Twitter</h4>
                <a class="twitter-timeline" data-height="540" data-width="500" href="https://twitter.com/ViceVenezuela?ref_src=twsrc%5Etfw">Tweets por ViceVenezuela</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
              </div>
              <div class="container-fluid">
                <h4 class="font-Lobster pt-2 pb-2 text-dark">Instagram</h4>
                  <div class="instagra-feed">
                    <?php echo do_shortcode('[jr_instagram id="2"]'); ?>
                  </div>
              </div>
              <div class="container-fluid">
                <h4 class="font-Lobster pt-2 pb-2 text-dark">Facebook</h4>
                <?php if ( is_active_sidebar( 'facebook_id' ) ) : ?>
                  <div class="facebook-feed">
                    <?php dynamic_sidebar( 'facebook_id' ); ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <?php 
    }
  }
?>

