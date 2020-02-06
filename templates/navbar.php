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
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> 
    <?php
      wp_nav_menu(array(
        'theme_location' => 'navbar-menu',
        'menu_id' => 'menu-navbar',
        'container' => 'ul',
        'menu_class' => 'navbar-nav font-weight-bold'
      ));
    ?>
    <?php get_search_form(); ?> 
    <?php echo do_shortcode('[gtranslate]'); ?>
  </div>

</nav>



