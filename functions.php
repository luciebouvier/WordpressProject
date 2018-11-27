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

	wp_register_style('femme', CSS_URL . '/footer.css');
	wp_enqueue_style('femme');

	wp_register_style('contact', CSS_URL . '/footer.css');
	wp_enqueue_style('contact');


	wp_register_style('page-don', CSS_URL . '/footer.css');
	wp_enqueue_style('page-don');


	wp_register_script('script', JS_URL . '/script.js', array(), '1.0', true);
	wp_enqueue_script('script');
}


function my_theme_scripts() {
    wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );



add_action('wp_enqueue_scripts', 'add_styles_scripts');

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















 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

 //function lgmac_scripts(){
     //wp_enqueue_style('lgmac_bootstrap-core',get_template_directory_uri() . '/css/bootstrap.min.css',array(),LGMAC_VERSION,'all');
     //wp_enqueue_style('lgmac_custom',get_template_directory_uri() . '/style.css',array('lgmac_bootstrap-core'),LGMAC_VERSION,'all');

    
     // wp_enqueue_script('bootstrap-js',get_template_directory_uri() . '/js/bootstrap.min.js',array(jquery), LGMAC_VERSION , true );
   //   wp_enqueue_script('lgmac_admin_script',get_template_directory_uri() . '/js/script.js',array('jquery','bootstrap-js'),LGMAC_VERSION,true);
 //}

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