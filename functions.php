<?php
define( 'THEME_PATH' ,          get_template_directory()            );
define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/assets/styles'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/assets/images'       );
define( 'JS_URL' ,              THEME_URL .    '/assets/scripts'      );
define( 'FAVICONS_URL' ,        THEME_URL .    '/assets/favicon'      );
define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );

define('LGMAC_VERSION','1.0.2');

/*foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;
}*/

function lgmac_scripts(){
    wp_enqueue_style('lgmac_bootstrap-core',get_template_directory_uri() . '/css/bootstrap.min.css',array(),LGMAC_VERSION,'all');
    wp_enqueue_style('lgmac_custom',get_template_directory_uri() . '/style.css',array('lgmac_bootstrap-core'),LGMAC_VERSION,'all');

    wp_register_style('footer', CSS_URL . '/footer.css');
	wp_enqueue_style('footer');

    
    wp_enqueue_script('bootstrap-js',get_template_directory_uri() . '/js/bootstrap.min.js',array(jquery), LGMAC_VERSION , true );
    wp_enqueue_script('lgmac_admin_script',get_template_directory_uri() . '/js/script.js',array('jquery','bootstrap-js'),LGMAC_VERSION,true);
}

add_action('wp_enqueue_scripts','lgmac_scripts');

function lgmac_admin_scripts(){
    wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css',array(),LGMAC_VERSION);

}
add_action('admin_init','lgmac_admin_scripts');



function lgmac_setup(){

    add_theme_support('post-thumbnails');

    remove_action('wp_gead','wp_generator');

    remove_filter('the_content','wptexturize');

    add_theme_support('title-tag');

    register_nav_menus(array('primary' => 'principal') );

    
}
add_action( 'after_setup_theme', 'menus_du_themes' );
function menus_du_themes() {
  register_nav_menu( 'header', 'Menu entête' );
  register_nav_menu( 'footer', 'Menu bas de page' );
  register_nav_menu( 'topBar', 'Menu top Bar' );
}

add_action('after_setup_theme','lgmac_setup');


function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//--------- AJAX -------------------------------


/*
add_action('wp_ajax_ajax-portfolioMore', 'aside_portfolioMore');
add_action('wp_ajax_nopriv_ajax-portfolioMore', 'aside_portfolioMore');

function aside_portfolioMore()
{
  global $wpdb, $_POST;
  $pagination = $_POST['pagination'];

  include(TEMPLATE_PATH.'/ajax/portfolioMore.php');

  die();
}*/
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '2',
        'paged' => $paged,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) :
        ?>
        <?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
            <h2><?php the_title() ?></h2>
            <?php the_excerpt() ?>
        <?php endwhile ?>
        <?php
    endif;
 
    wp_die();
}


?>
