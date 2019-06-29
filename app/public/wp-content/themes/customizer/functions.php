<?php


require_once get_theme_file_path('/inc/customizer.php');
// CodeStar framwork function 
require_once get_theme_file_path( "/lib/codestarframework/cs-framework.php" );
require_once get_theme_file_path( "/inc/codestar/csf-customizer.php" );



function customizer_setup(){
	load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1568, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'menu-1' => __( 'Primary', 'twentynineteen' ),
			'footer' => __( 'Footer Menu', 'twentynineteen' ),
			'social' => __( 'Social Links Menu', 'twentynineteen' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 190,
			'width'       => 190,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style-editor.css' );
}

add_action('after_setup_theme','customizer_setup');






function customizer_scripts() {
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css',null,'3.3.7');
	wp_enqueue_style('font-awesome-css',get_template_directory_uri().'/assets/css/font-awesome.min.css',null,'4.7.0');
	wp_enqueue_style('cust-style',get_template_directory_uri().'/assets/css/style.css',null,'1.0');
	wp_enqueue_style('cust-main',get_stylesheet_uri(),null,'1.0');

	$services_icon_color = get_theme_mod('cust_services_icon_color','#22bbc0');
	$services_style =<<<EOD
.service-icon i {    
    color: {$services_icon_color};
}
EOD;
	wp_add_inline_style( 'cust-main', $services_style );


	// js file enqueue
	wp_enqueue_script("bootstrap-js",get_theme_file_uri("/assets/js/bootstrap.min.js"),array('jquery'),'3.3.7',true);
	wp_enqueue_script("jquery-circle-progress-js",get_theme_file_uri("/assets/js/jquery-circle-progress-1.2.2.min.js"),array('jquery'),'1.2.2',true);
	wp_enqueue_script("owl-carousel-js",get_theme_file_uri("/assets/js/owl.carousel.min.js"),array('jquery'),'2.2.1',true);
	wp_enqueue_script("scripts-js",get_theme_file_uri("/assets/js/scripts.js"),array('jquery'),'1.0',true);



}
add_action('wp_enqueue_scripts','customizer_scripts');


// This file only include in customizer page
function cust_customizer_assets(){
	wp_enqueue_script("cust-customizer-js",get_theme_file_uri("/assets/js/customizer.js"),array('jquery','customize-preview'),'1.0',true);
}
add_action("customize_preview_init","cust_customizer_assets");