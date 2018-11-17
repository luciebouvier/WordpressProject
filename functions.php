<?php
define( 'THEME_PATH' ,          get_template_directory()            );
define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/assets/css'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/assets/images'       );
define( 'JS_URL' ,              THEME_URL .    '/assets/js'      );
define( 'FAVICONS_URL' ,        THEME_URL .    '/assets/favicon'      );
define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );

define('LGMAC_VERSION','1.0.2');

function add_styles_scripts() {
	wp_register_style('bootstrap', CSS_URL . '/bootstrap.min.css');
	wp_enqueue_style('bootstrap');
	wp_register_style('footer', CSS_URL . '/footer.css');
	wp_enqueue_style('footer');




	wp_register_script('script', JS_URL . '/script.js', array(), '1.0', true);
	wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'add_styles_scripts');

// function lgmac_scripts(){
//     wp_enqueue_style('lgmac_bootstrap-core',get_template_directory_uri() . '/css/bootstrap.min.css',array(),LGMAC_VERSION,'all');
//     wp_enqueue_style('lgmac_custom',get_template_directory_uri() . '/style.css',array('lgmac_bootstrap-core'),LGMAC_VERSION,'all');

    
//     // wp_enqueue_script('bootstrap-js',get_template_directory_uri() . '/js/bootstrap.min.js',array(jquery), LGMAC_VERSION , true );
//     // wp_enqueue_script('lgmac_admin_script',get_template_directory_uri() . '/js/script.js',array('jquery','bootstrap-js'),LGMAC_VERSION,true);
// }

// add_action('wp_enqueue_scripts','lgmac_scripts');

// function lgmac_admin_scripts(){
//     wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css',array(),LGMAC_VERSION);

// }
// add_action('admin_init','lgmac_admin_scripts');



// function lgmac_setup(){

//     add_theme_support('post-thumbnails');

//     remove_action('wp_gead','wp_generator');

//     remove_filter('the_content','wptexturize');

//     add_theme_support('title-tag');

//     register_nav_menus(array('primary' => 'principal') );

    
// }

// add_action('after_setup_theme','lgmac_setup');

// ?>