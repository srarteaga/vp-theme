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
            <?php the_title( '<h2 class="h2-responsive text-center pt-2 pb-2">', '</h2>' );?>
            <img class="d-block w-100 pb-5" src="<?php echo $ruta_imagen; ?>">
            <?php the_content(); ?>
            <hr> 
            <div class="text-left">
              <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php urlencode(the_title()) ?>" data-size="large">Tweet</a>
              <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true">
              </div>
            </div>
          </div>
          <div class="container-fluid mt-3">
            <div class="card text-center">
              <div class="card-header">
                <div class="title-entradas text-center pt-2 pb-2">
                  <span class="text-entrada">Lo mas visto</span>
                </div>
              </div>
              <div class="card-body text-center">
                <section class="post-relacionados mt-3 ml-5">
                  <ul>
                    <?php
                    $args = array(
                        'posts_per_page' => 4,
                        'meta_key' => 'post_views',
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC'
                    );
                     
                    $popular_posts = new WP_Query( $args );
                    while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>
                      <li>
                        <a href="<?php the_permalink();?>">
                          <?php the_post_thumbnail('thumbnail');?>
                        </a>
                        <p>
                          <a href=" <?php the_permalink();?> " rel="bookmark" title=" <?php the_title(); ?> ">
                            <?php the_title() ?>
                          </a>
                        </p>
                      </li>
                      <?php 
                    endwhile;?>
                  </ul>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-none d-lg-block d-md-block d-xl-block">
          <div class="border-title">
            <div class="title-entradas text-center">
              <span class="text-entrada">Entradas Recientes</span>
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
      </div>
      <hr>
      <?php 
    }
  }
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php get_footer() ?>