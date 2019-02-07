<?php /* Template Name: Noticias */ ?>
<?php get_header() ?>

<?php if ($paged>1): ?>
  <div class="page-nav">
  <?php get_template_part('templates/navbar') ?>
</div>
<?php else: ?>
  <?php get_template_part('templates/header') ?>
<?php endif ?>



<div>
  <?php 
    if($paged>1){
      echo '<div class="row no-gutters">';
      echo '<div class="offset-lg-1 col-md-8">';
    }
    $wp_query = new WP_Query('category_name=Gaceta+Oficial&paged=' . $paged);
    while ($wp_query->have_posts()) : $wp_query->the_post();
      $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'noticia');
      $post_id = get_the_ID();
      $ruta_imagen = $imagen[0];
      $num++;
      if ($num==1 && $paged==0) {
        ?>  
          <div class="card">
            <div class="view">
              <img src="<?php echo $ruta_imagen; ?>" class="img-fluid w-100 img-noti">
              <div class="mask waves-effect waves-light text-center">
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="jumbotron text-center">
              <?php the_title( '<h2 class="card-title indigo-text h2 mb-4">', '</h2>' );?>
              <div class="">
                <?php
                  $content = get_the_content();
                  $postOutput = preg_replace('/<img[^>]+./','', $content);
                  echo substr($postOutput, 0, 1000). " […]"; 
                ?>
              </div>
              <div>
                <a class="btn btn-cyan waves-effect rounded" href="<?php the_permalink() ?>">Leer mas...</a>
              </div>
            </div>
          </div>
          <?php echo '<div class="row no-gutters">'; ?>
          <div class="offset-lg-1 col-md-8">
        <?php
      }
      else{
      ?>
        <div class="container-fluid">
          <div class="jumbotron text-center hoverable">
            <div class="row">
              <div class="col-md-3 offset-md-1 mx-3 my-3">
                <div class="view overlay">
                  <img src="<?php echo $ruta_imagen; ?>" class="img-fluid" alt="Sample image for first version of blog listing">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="col-md-8 text-md-left ml-3 mt-3">
                <?php the_title( '<h2 class="ch4 mb-4 indigo-text">', '</h2>' );?>
                <div class="font-weight-normal">
                  <?php
                    $content = get_the_content();
                    $postOutput = preg_replace('/<img[^>]+./','', $content);
                    $postOutput = wp_filter_nohtml_kses( $postOutput );
                    echo substr($postOutput, 0, 300)." […]"; 
                  ?>
                </div>
                  <p class="font-weight-normal">por <a><strong><?php the_author() ?></strong></a>, <span class="entry-date"><?php echo get_the_date(); ?></span></p>
                  <div>
                    <a class="btn btn-cyan waves-effect rounded" href="<?php the_permalink() ?>">Leer mas...</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      <?php 
      } 
    endwhile;
    echo "</div>";
  ?>
    <div class="col-md-3">
      <div class="fond-social pb-2">
        <div class="text-center">
          <div class="container-fluid">
            <h4 class="font-Lobster pt-2 pb-2 text-dark">Twitter</h4>
            <a class="twitter-timeline" data-height="800" data-width="500" href="https://twitter.com/ViceVenezuela?ref_src=twsrc%5Etfw">Tweets por ViceVenezuela</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
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
  <?php
    $max_page = $wp_query->max_num_pages;
    if (!$paged && $max_page >= 1) {
      $current_page = 1;
    }
    else {
      $current_page = $paged;
    } 
  ?>
</div>
<div id=paginate class="Page navigation text-center col-md-8">
  <?php 
    echo paginate_links(array(
      "base" => add_query_arg("paged", "%#%"),
      "format" => '',
      "type" => "list",
      "total" => $max_page,
      "current" => $current_page,
      "show_all" => false,
      "end_size" => 2,
      "mid_size" => 3,
      "prev_next" => true,
      "next_text" => __('<p>Siguiente<i class="fa fa-angle-double-right"></i></p>'),
      "prev_text" => __('<p><i class="fa fa-angle-double-left"></i>Anterior<p>'),
    ));
  ?>
  <?php wp_reset_query(); ?>
</div>
<hr>
<?php get_footer() ?>
