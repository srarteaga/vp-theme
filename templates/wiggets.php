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
  <div class="text-center">
    <a href="http://www.barriotricolor.gob.ve/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/BNBT-LOGO.png" style="width: 70%"></a>
  </div>
  <hr>
  <div class="text-center">
<!--   <a href="http://www.barriotricolor.gob.ve/" target="_blank"> -->
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/venezuelabella.gif" style="width: 70%">
<!--   </a> -->
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
        <div class="container-fluid pb-2">
          <h4 class="font-Lobster pt-2 pb-2 text-dark">Instagram</h4>
            <div class="instagra-feed">
              <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </div>
        <div class="container-fluid">
          <h4 class="font-Lobster pt-2 pb-2 text-dark">Facebook</h4>
          <div class="pb-4">
            <div class="fb-page" data-href="https://www.facebook.com/vicevenezuela" data-tabs="timeline" data-height="750" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/vicevenezuela" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/vicevenezuela">
                  Vicepresidencia de Venezuela
                </a>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>