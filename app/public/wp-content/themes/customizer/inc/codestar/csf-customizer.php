<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.




/*define( 'CS_ACTIVE_FRAMEWORK',   true  ); // default true
define( 'CS_ACTIVE_METABOX',     true ); // default true
define( 'CS_ACTIVE_TAXONOMY',    true ); // default true
define( 'CS_ACTIVE_SHORTCODE',   true ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',   false ); // default true*/


// Shortcode by codestar file include
/*require_once get_theme_file_path( "/inc/codestar/cs-shortcode.php" );
require_once get_theme_file_path( "/inc/codestar/cs-taxnomoy.php" );*/

function customizer_csf_init(){
	// CSFramework::instance(array());
	/*CSFramework_Metabox::instance(array());
	CSFramework_Taxonomy::instance(array());
	
	CSFramework_Shortcode_Manager::instance(array());*/

	CSFramework_Customize::instance(array());
}
add_action('init', 'customizer_csf_init');


/*function customizer_theme_option_init(){
	$settings           = array(
		'menu_title'      => __('customizer Options','customizer'),
		'menu_type'       => 'submenu', // menu, submenu, options, theme, etc.
		'menu_parent' => 	'themes.php',
		'menu_slug'       => 'customizer_option_panel',
		'ajax_save'       => true,
		'show_reset_all'  => false,
		'framework_title' => __('customizer Options','customizer'),
		'menu_icon' => 'dashions-dashboard'
	);
	// $options = customizer_theme_options();
	CSFramework::instance($settings,$options);
}
add_action("init","customizer_theme_option_init");*/





function customizer_csf_settings($options){
	$options[] = array(
		'name' => 'customizer_csf_section1',
		'title' => __('CodeStar Demo','customizer'),
		'settings' => array(
			array(
				'name' => 'about_heading',
				'default' => __('some text','customizer'),
				'control' => array(
					'label' => __('About Heading','customizer'),
					'type' => 'text'
				),
				'transport' => 'postMessage' // postMessage === refresh
			),
			array(
				'name' => 'about_description',
				// 'default' => __('some text','customizer'),
				'control' => array(
					'label' => __('About Description','customizer'),
					'type' => 'textarea'
				),
				'transport' => 'postMessage' // postMessage === refresh
			),
			array(
				'name' => 'dummy_control1',
				// 'default' => __('some text','customizer'),
				'control' => array(
					'label' => __('Dummy Control 1','customizer'),
					'type' => 'upload'
				)
			),
			array(
				'name' => 'dummy_control2',
				// 'default' => __('some text','customizer'),
				'control' => array(
					'label' => __('Dummy Control 2','customizer'),
					'type' => 'media'
				)
			),
			array(
				'name' => 'color_picker',
				// 'default' => __('some text','customizer'),
				'control' => array(
					'label' => __('Color picker','customizer'),
					'type' => 'color'
				)
			),
			array(
				'name' => 'dummy_control3',
				// 'default' => __('some text','customizer'),
				'control' => array(
					'label' => __('Pages','customizer'),
					'type' => 'dropdown-pages'
				)
			),
		)
	);


	// Same as codestar field
	$options[] = array(
		'name' => 'customizer_csf_section2',
		'title' => __('CodeStar Controls','customizer'),
		'active_callback' => function(){
			return true;
		},
		'settings' => array(
			array(
				'name' => 'switcher',
				'control' => array(
					'type' => 'cs_field',
					'options' => array(
						'type' => 'switcher',
						'title' => __('Dummy text on/off','customizer'),
					)
				)
			),
			array(
				'name' => 'dummy_text',
				'default' => __('Some Text', 'customizer'),
				'control' => array(
					'label' => __('Dummy Text','customizer'),
					'type' => 'text',
					'active_callback' => function(){						
						return cs_get_customize_option('switcher');
					}
				)
			),
			array(
				'name' => 'icon',
				'control' => array(
					'type' => 'cs_field',
					'options' => array(
						'type' => 'icon',
						'title' => __('Select Icon','customizer')
					)
				)
			),
			array(
				'name' => 's_post',
				'control' => array(
					'type' => 'cs_field',
					'options' => array(
						'type' => 'select',
						'title' => __('Select something','customizer'),
						'options' => 'posts',
						'query_args' => array(
							'post_type' => 'post',
							'orderby' => 'post_date',
							'order' => 'DESC',
						),
						'default_option' => 'Select a post',
					)
				)
			),			
		)
	);


	return $options;
}
add_filter('cs_customize_options','customizer_csf_settings');