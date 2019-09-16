<?php 

function wp_scripts_actions() {
  wp_enqueue_script( 'popperjs', get_template_directory_uri() . '/js/popper.min.js', array(), null, true );
  wp_enqueue_script( 'jquery3', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'mdb', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'wp-functions', get_template_directory_uri() . '/js/wp-functions.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_scripts_actions' );

function wp_style_actions(){
  wp_enqueue_style( 'fa', get_template_directory_uri().'/css/font-awesome.min.css' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
  wp_enqueue_style( 'mdb', get_template_directory_uri().'/css/mdb.min.css' );
  wp_enqueue_style( 'custom', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wp_style_actions' );

function wp_theme_logo() {
	add_theme_support( 'custom-logo', array(
		'height' => 150,
		'width' => 150,
		'flex-height' => true,
	));
}
add_action( 'after_setup_theme', 'wp_theme_logo' );

function wp_register_navbar() {
    register_nav_menu('navbar-menu', __('Menú Principal'));
    register_nav_menu('footer-menu', __('Menú pie de pagina'));
}
add_action('init', 'wp_register_navbar');


function wp_clear_class($classes, $item, $args) {
    return array();
}
add_filter('nav_menu_css_class', 'wp_clear_class', 10, 3);

function wp_class_navbar($atts, $item, $args){
  $class = 'nav-link';
  $atts['class'] = $class;
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wp_class_navbar', 10, 3 );

add_theme_support( 'post-thumbnails' );
add_image_size( 'carousel', 1300, 650, true );

function noticia_init() {
    $labels = array(
        'name'              => _x( 'Noticia', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Noticias', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Noticias', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Noticias', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', 'noticia', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nuevo noticia', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nuevo noticia', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar noticia', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver noticia', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos las noticias', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar noticias', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Noticias padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado noticias.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado noticias en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'noticia' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-image-flip-horizontal',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'noticia', $args );
}

add_action( 'init', 'noticia_init' );

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
  'key' => 'group_5bbf6c4c21f95',
  'title' => 'Carousel',
  'fields' => array(
    array(
      'key' => 'field_5bbf6ca731aee',
      'label' => 'Agregar al Carousel',
      'name' => 'add_carousel',
      'type' => 'true_false',
      'instructions' => 'Seleccione para agregar al carousel esta noticia',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
      'ui' => 0,
      'ui_on_text' => '',
      'ui_off_text' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'noticia',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array(
  'key' => 'group_5bc898934da3a',
  'title' => 'Agregar al Carousel',
  'fields' => array(
    array(
      'key' => 'field_5bc898a8636cf',
      'label' => 'Agregar al Carousel',
      'name' => 'add_carousel',
      'type' => 'true_false',
      'instructions' => 'Seleccione para agregar al carousel esta noticia',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
      'ui' => 0,
      'ui_on_text' => '',
      'ui_off_text' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;

function wp_youtube_widget() {

  $args = array(
    'id'            => 'youtube_id',
    'name'          => __( 'Youtube', 'youtube_video' ),
    'description'   => __( 'agregar videos de youtube', 'youtube_video' ),
  );
  register_sidebar( $args );

  $args = array(
    'id'            => 'facebook_id',
    'name'          => __( 'Facebook', 'facebook' ),
    'description'   => __( 'agregar cuenta de Facebook', 'facebook_id' ),
  );
  register_sidebar( $args );

    $args = array(
    'id'            => 'entradas_id',
    'name'          => __( 'Entradas recientes', 'entradas' ),
    'description'   => __( 'Mostrar entradas recientes', 'entradas_id' ),
  );
  register_sidebar( $args );

}
add_action( 'widgets_init', 'wp_youtube_widget' );

register_sidebar( array(
'name' => __( 'Widget lateral', 'theme-slug' ),
'id' => 'sidebar-1',
'description' => __( 'Widget para el sidebar.', 'theme-slug' ),
'before_widget' => '<div class="pt-6"><div class="border-title">',
'after_widget' => '</div></div>',
'before_title' => '<h2 class="ml-4">',
'after_title' => '</h2>',
) );

function getRelatedPosts ($post_id){
  $taxs = wp_get_post_tags( $post_id );


  $tax_ids = array();
  foreach( $taxs as $individual_tax ) $tax_ids[] = $individual_tax->term_id;


  $my_query = new WP_QUERY(array(
              'category__in'    => $categ,
              'posts_per_page'  => 8,
              'post__not_in'    =>array(get_the_ID()),
              //'orderby'     =>'rand'
              ));
  if( $my_query->have_posts() ) {

    while ($my_query->have_posts()) : $my_query->the_post();
     ?>
     <div class="col-md-3">
        <a href="<?php the_permalink();?>">

            <?php the_post_thumbnail('thumbnail');?>
        </a>
        <p>
          <a href=" <?php the_permalink();?> " rel="bookmark" title=" <?php the_title(); ?> ">
            <?php the_title() ?>
          </a>
        </p>
     </div>
     
     <?php
    endwhile;
  } 
  else {
    echo "<h4>No hay clases relacionadas</h4>";
  }


  $post = $backup;
  wp_reset_query();
}
 
// Función para contar visualizaciones de un post.
function set_post_views() {
    if (is_single()) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );
 
        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );
 
// Función para obtener el número de visualizaciones de un post
function get_post_views($post_ID){
    $count = get_post_meta($post_ID, 'post_views', true);
 
    if ($count == ''){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}

