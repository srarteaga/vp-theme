 <div id=marq class="container-fluid">
  <h1 class="text-center display-4 font-Lobster">Entes adscritos</h1>
  <span id=orig>
    <a href="http://www.misionmilagro.gob.ve"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-milagro.png" style="width: 8%"></a>
    <a href="http://www.sunai.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sunai.png" style="width: 8%"></a>
    <a href="http://www.sata.gob.ve/web/home/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sata.png" style="width: 8%"></a>
    <a href="http://vicepresidencia.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sebin.png" style="width: 8%"></a>
    <a href="http://consejoderechoshumanos.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-consejo-comunal.png" style="width: 8%"></a>
    <a href="http://www.cfg.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-consejo-federal.png" style="width: 8%"></a>
    <a href="http://www.misionnevado.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-nevado.png" style="width: 8%"></a>
    <a href="http://www.misionesbolivarianas.com/gran-mision-saber-y-trabajo/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-saber.png" style="width: 8%"></a>
    <a href="http://www.supcriptove.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-subcipto.png" style="width: 8%"></a>
    <a href="http://www.snc.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-snc.png" style="width: 8%"></a>
    <a href="http://www.superintendenciadepreciosjustos.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-rupdae.png" style="width: 8%"></a>
    <span id=copia>
      <a href="http://www.misionmilagro.gob.ve"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-milagro.png" style="width: 8%"></a>
      <a href="http://www.sunai.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sunai.png" style="width: 8%"></a>
      <a href="http://www.sata.gob.ve/web/home/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sata.png" style="width: 8%"></a>
      <a href="http://vicepresidencia.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-sebin.png" style="width: 8%"></a>
      <a href="http://consejoderechoshumanos.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-consejo-comunal.png" style="width: 8%"></a>
      <a href="http://www.cfg.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-consejo-federal.png" style="width: 8%"></a>
      <a href="http://www.misionnevado.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-nevado.png" style="width: 8%"></a>
      <a href="http://www.misionesbolivarianas.com/gran-mision-saber-y-trabajo/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mision-saber.png" style="width: 8%"></a>
      <a href="http://www.supcriptove.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-subcipto.png" style="width: 8%"></a>
      <a href="http://www.snc.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-snc.png" style="width: 8%"></a>
      <a href="http://www.superintendenciadepreciosjustos.gob.ve/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-rupdae.png" style="width: 8%"></a>
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
          'menu_class' => 'list-inline-item'
        ));
      ?> 
    </div>
    <!-- Social icons -->
  </div>
  <!--Copyright-->
  <div class="footer-copyright py-3">
  	<p>Vicepresidencia de la República Bolivariana de Venezuela</p>
  	<p>Dirección General de Tecnología de la Información - &copy; 2018 Todos los Derechos Reservados</p>
  </div>
  <!--/.Copyright-->
</footer>
