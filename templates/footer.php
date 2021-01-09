<div class="icon-bar text-center">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container' => 'ul',
          'menu_id' => 'menu-social',
          'menu_class' => 'list-inline-item'
        ));
      ?> 
</div>
 <div id=marq class="container-fluid">
  <h1 class="text-center display-4 font-Lobster">Entes adscritos</h1>
  <span id=orig>
    <a href="http://www.misionmilagro.gob.ve" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-milagro.png" style="width: 8%"></a>
    <a href="http://www.sata.gob.ve/web/home/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sata.png" style="width: 8%"></a>
    <a href="http://vicepresidencia.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sebin.png" style="width: 8%"></a>
    <a href="http://www.misionnevado.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-nevado.png" style="width: 8%"></a>
    <a href="http://www.hogaresdelapatria.org/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/hogares.png" style="width: 8%"></a>
    <a href="https://www.patria.org.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/patria_logo_login.png" style="width: 8%"></a>
    <a href="https://www.barriotricolor.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/barrio-tricolor.png" style="width: 8%"></a>
    <a href="http://www.fundeeh.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/fundeeh.jpeg" style="width: 8%"></a>
    <a href="https://www.barriotricolor.gob.ve/index.php/nosotros/corporacion-bnbt" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/corporacion-tricolor.png" style="width: 8%"></a>
    <a href="http://www.snc.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-snc.png" style="width: 8%"></a>
    <a href="http://vicepresidencia.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sp3.png" style="width: 8%"></a>
    <span id=copia>
      <a href="http://www.misionmilagro.gob.ve" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-milagro.png" style="width: 8%"></a>
      <a href="http://www.sata.gob.ve/web/home/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sata.png" style="width: 8%"></a>
      <a href="http://vicepresidencia.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sebin.png" style="width: 8%"></a>
      <a href="http://www.misionnevado.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-nevado.png" style="width: 8%"></a>
      <a href="http://www.hogaresdelapatria.org/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/hogares.png" style="width: 8%"></a>
      <a href="https://www.patria.org.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/patria_logo_login.png" style="width: 8%"></a>
      <a href="https://www.barriotricolor.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/barrio-tricolor.png" style="width: 8%"></a>
      <a href="http://www.fundeeh.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/fundeeh.jpeg" style="width: 8%"></a>
      <a href="https://www.barriotricolor.gob.ve/index.php/nosotros/corporacion-bnbt" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/corporacion-tricolor.png" style="width: 8%"></a>
      <a href="http://www.snc.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-snc.png" style="width: 8%"></a>
      <a href="http://vicepresidencia.gob.ve/" class="m-2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sp3.png" style="width: 8%"></a>
    </span>
  </span>
</div>
<footer class="page-footer text-center font-small mt-4 ">
  <div class="banner-social text-center font-small">
    <!-- Social icons -->
    <div class="pb-2 pt-2">
      <h3 class="h3-responsive text-white font-Lobster">Redes Sociales</h3>
      <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container' => 'ul',
          'menu_id' => 'menu-social',
          'menu_class' => 'list-inline-item menusocial'
        ));
      ?> 
    </div>
    <!-- Social icons -->
  </div>
  <!--Copyright-->
  <div class="footer-copyright py-3">
  	<p>Vicepresidencia de la República Bolivariana de Venezuela</p>
  	<p>Dirección General de Tecnología de la Información - &copy; 2021 Todos los Derechos Reservados</p>
  </div>
  <!--/.Copyright-->
</footer>
  <style type="text/css">
    .m-hidden{
  display: none !important;
  }
</style>
