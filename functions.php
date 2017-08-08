<?php 
/**************************************
 *  THEME SUPORT
 **************************************/
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');


/**************************************
 * Registro Menu Personalizado
 **************************************/
add_theme_support('menus');
register_nav_menus( array(
    'primary' => __( 'Menu header', 'menu-header' ),
) );
/**
*
* ESCONDER NOTÍCIAS DO MENU - ADMIN
*
*/

add_action('admin_menu','wp_hide_msg');

function wp_hide_msg() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}

/*
*
* Esconde adimin bar do front
*
*/

add_filter('show_admin_bar', '__return_false');


/*
* Registrando estilo do tema
*
*/
function load_tema_styles() {

   //bootstrap
   wp_register_style( 'tema-bootstrap', get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/css/bootstrap.min.css' );
   //owlcarousel
   wp_register_style( 'tema-owlcarousel', get_template_directory_uri() . '/assets/bower_components/owlcarousel/dist/assets/owl.carousel.min.css' );
   wp_register_style( 'tema-owlcarousel-default', get_template_directory_uri() . '/assets/bower_components/owlcarousel/dist/assets/owl.theme.default.min.css' );
   //estilo
   wp_register_style( 'tema-site', get_template_directory_uri() . '/assets/css/style.css' );
   wp_register_style( 'tema-media', get_template_directory_uri() . '/assets/css/media.css' );
   wp_register_style( 'fonts-site', get_template_directory_uri() . '/assets/css/fonts/fonts.css' );
   wp_register_style( 'fontello', get_template_directory_uri() . '/assets/css/font/fontello.css' );
   wp_register_style( 'video', get_template_directory_uri() . '/assets/videos/webdesign.mp4' );


   wp_enqueue_style( 'tema-bootstrap');
   wp_enqueue_style( 'tema-owlcarousel');
   wp_enqueue_style( 'tema-owlcarousel-default');
   wp_enqueue_style( 'tema-site');
   wp_enqueue_style( 'tema-media');
   wp_enqueue_style( 'fontello');
   wp_enqueue_style( 'fonts-site');
   wp_enqueue_style( 'video');

}

add_action( 'wp_enqueue_scripts', 'load_tema_styles', 1 );


/*
*
* Registrando script do tema
*
*/
function load_tema_script() {
   global $cg_live_preview;

   if ( !is_admin() ) {

       // JS do bootstrap
       wp_enqueue_script( 'meutema_bootstrap_js', CORE_BOOTSTRAP_JS . 'bootstrap.min.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'meutema_owlcarousel_js', CORE_OWLCAROUSEL_JS . 'owl.carousel.min.js', array( 'jquery' ), '', true );
       // JS do tema
       wp_enqueue_script( 'meutema_frontjs', CORE_JS . 'app.js', array( 'jquery' ), '', true );
       // localizando js do tema
       wp_localize_script( 'meutema_frontjs', 'cg_ajax', array( 'cg_ajax_url' => admin_url( 'admin-ajax.php' ) ) );
   }
}

//Making jQuery Google API
function modify_jquery() {
   if (!is_admin()) {
       // comment out the next two lines to load the local copy of jQuery
       wp_deregister_script('jquery');
       wp_register_script('jquery', CORE_BOWER_COMPONENTS . 'jquery/dist/jquery.min.js', false, '3.1.1');
       wp_enqueue_script('jquery');
   }
}
add_action('init', 'modify_jquery');
add_action( 'wp_enqueue_scripts', 'load_tema_script' );

/*
*
* DEFINIÇÕES
*
*/
define( 'CORE_BOWER_COMPONENTS',  get_template_directory_uri() . '/assets/bower_components/' );
define( 'CORE_JS',  get_template_directory_uri() . '/assets/js/' );
define( 'CORE_BOOTSTRAP_JS',  get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/js/'  );
define( 'CORE_OWLCAROUSEL_JS',  get_template_directory_uri() . '/assets/bower_components/owlcarousel/dist/'  );

// Habilitando o uso das imagens destacadas ou post thumbnails

if ( function_exists( 'add_theme_support' ) ) {

   add_theme_support( 'post-thumbnails' );

}

/**************************************
 * Registro Custom Post type Slider
 **************************************/
add_action('init', 'slider_registrer');
function slider_registrer(){
     $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Adicionar slider', 'slider'),
        'add_new_item' => __('Adicionar slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Novo slider'),
        'view_item' => __('Ver slider'),
        'search_items' => __('Procurar slider'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-code',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','thumbnail'),
      );
    register_post_type('slider',$args);
}
  /**************************************
 * Registro de sidebar - Footer Center
 **************************************/
if ( function_exists('register_sidebar'))
    register_sidebar(array(
    'name' => 'Sidebar footer center',
    'id' => 'sidebar-footer-center',
    'before_widget' => '<div class="col-md-4">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
 /**************************************
 * Registro de sidebar - Aside
 **************************************/
if ( function_exists('register_sidebar'))
    register_sidebar(array(
    'name' => 'Sidebar aside',
    'id' => 'sidebar-aside',
    'before_widget' => '<div class="box col-md-12 box_interno">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));


/*add_action( 'init', 'create_post_type');

function create_post_type(){
  register_post_type('posts',
    array(
        'labels' => array(
            'name' => _('Posts'),
            'singular_name' => _('Post')
          ),
          'public' => true,
          'has_archive' => true,
        )
  );
}*/