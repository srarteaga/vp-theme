<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" id="p">
  <!-- logo -->
 <?php 
   /* if ( has_custom_logo() ) {
      the_custom_logo();
    } else {
      echo '<a href="'.home_url().'" class="h6 navbar-brand">'. get_bloginfo( 'name' ) .'</a>';
    }*/
    $url = home_url( '/' );

  ?>
  <a href="<?php  echo get_home_url(); ?>">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/cintillo web-01.png" style="height: 7vh;">

    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/cintillo web-02.png" style="height: 5vh; border-left: 2px solid #FFFFFF;" class="vice-logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- navbar -->
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" style="margin-bottom: -5px !important; margin-top: 5px !important;"> 
    <?php
      wp_nav_menu(array(
        'theme_location' => 'navbar-menu',
        'menu_id' => 'menu-navbar',
        'container' => 'ul',
        'menu_class' => 'navbar-nav font-weight-bold'
      ));
    ?>
    <?php get_search_form(); ?> 
    <div class="position-relative">
    <img class="float-right d-none d-lg-block" src="<?php echo get_stylesheet_directory_uri() ?>/img/cintillo200.png" style="height: 6vh;">
    <!-- <img class="float-right d-none d-lg-block mr-2" src="<?php /* echo get_stylesheet_directory_uri() */ ?>/img/cintillos nav web_vicepresidencia.png" style="height: 6vh; width: 60px;"> -->
      <div class="position-relative text-center">
        <?php echo do_shortcode('[gtranslate]'); ?>
      </div>
    </div>
  </div>


    

</nav>



