<div class="pt-6">
  <div class="border-title">
    <div class="title-entradas text-center">
      <span class="text-entrada">Noticias Recientes</span>
    </div>
  <div class="container">
    <div class="table-responsive">
      <table class="table">
        <tbody>
          
          <?php $args = array(
            'type'            => 'postbypost',
            'limit'           => '5',
            'format'          => 'custom', 
            'before'          => '<tr><td class="text-hover">',
            'after'           => '</td></tr>',
            'show_post_count' => false,
            'echo'            => 1,
            'order'           => 'DESC',
              'post_type'     => 'post'
          );
          wp_get_archives( $args ); ?>
          
        </tbody>
      </table>
    </div>
  </div>
  <hr>

  <div class="text-center pt-3">
    <a href="https://www.patria.org.ve/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/Boton-para-web.gif" style="width: 70%"></a>
  </div>
  <hr>

  <div class="text-center pb-1">
    <a href="http://www.imprentanacional.gob.ve/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/gaceta.jpg" style="width: 70%"></a>
  </div>
  <hr>
  <div class="title-entradas text-center pt-2">
    <span class="text-entrada">Redes Sociales</span>
  </div>
    <div>
      <div class="text-center">
        <div class="container-fluid">
          <h4 class="font-Lobster pt-2 pb-2 text-dark">Twitter</h4>
          <a class="twitter-timeline" data-height="730" data-width="500" href="https://twitter.com/ViceVenezuela?ref_src=twsrc%5Etfw">Tweets por ViceVenezuela</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
        </div>
        <div class="container-fluid">
          <h4 class="font-Lobster pt-2 pb-2 text-dark">Facebook</h4>
          <?php if ( is_active_sidebar( 'facebook_id' ) ) : ?>
            <div class="facebook-feed">
              <?php dynamic_sidebar( 'facebook_id' ); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="container-fluid pb-2">
          <h4 class="font-Lobster pt-2 pb-2 text-dark">Instagram</h4>
            <div class="instagra-feed">
              <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>