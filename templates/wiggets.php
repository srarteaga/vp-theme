<div class="pt-6">
  <div class="border-title">
    <h2 class="ml-4">Entradas Recientes</h2>
  </div>
</div>
<div class="container-fluid">

        <?php if ( is_active_sidebar( 'entradas_id' ) ) : ?>
          <div class="wiggets-entradas m-lg-1">
            <?php dynamic_sidebar( 'entradas_id' ); ?>
          </div>
        <?php endif; ?>

</div>