<?php



function cust_customizer_settings($wp_customizer){
	$wp_customizer->add_section('cust_services',array(
		'title' => __('Services','customizer'),
		'priority' => '30',
		'active_callback' => function(){
			/*if (is_page_template('page-templates/about.php')) {
				return true;
			}
			return false; // closure*/
			
			return is_page_template('page-templates/landing.php');
		}
	));

	$wp_customizer->add_setting('cust_services_heading',array(
		'default' => "Mission Statement",
		'transport' => 'postMessage'  // javascript -- postMessage
		// 'type' => 'option'  // Default - theme_mod or option
	));

	$wp_customizer->add_control('cust_services_heading_ctrl',array(
		'label' => __('Services Heading','customizer'),
		'section' => 'cust_services',
		'settings' => 'cust_services_heading',
		'type' => 'text'
	));

	// SubHeading start	
	$wp_customizer->add_setting('cust_services_subheading',array(
		// 'default' => "Mission Statement",
		'transport' => 'refresh'  // javascript -- postMessage
		// 'type' => 'option'  // Default - theme_mod or option
	));

	$wp_customizer->add_control('cust_services_subheading_ctrl',array(
		'label' => __('Services Description','customizer'),
		'section' => 'cust_services',
		'settings' => 'cust_services_subheading',
		'type' => 'textarea',
		// 'active_callback' => 'service_display_subheading'
		'active_callback' => function(){
			if (get_theme_mod('cust_services_display_subheading')==1) {
				return true;
			}
			return false; // closure
		}
	));

	$wp_customizer->add_setting('cust_services_display_subheading',array(
		'default' => 1,
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_services_display_subheading_ctrl',array(
		'label' => __('Services Description','customizer'),
		'section' => 'cust_services',
		'settings' => 'cust_services_display_subheading',
		'type' => 'checkbox'
	));
	// SubHeading end

	// For Icon color or somthing else
	$wp_customizer->add_setting('cust_services_icon_color',array(
		'default' => '#22bbc0',
		'transport' => 'postMessage'  // javascript -- postMessage
	));

	$wp_customizer->add_control(new WP_Customize_Color_Control($wp_customizer,'cust_services_icon_color_ctrl',array(
		'label' => __('Icon Color','customizer'),
		'section' => 'cust_services',
		'settings' => 'cust_services_icon_color',
	)));


	// How may row will be start
	$wp_customizer->add_setting('cust_services_number_of_items',array(
		'default' => '4',
		'transport' => 'refresh'
	));

	$wp_customizer->add_control('cust_services_number_of_items_ctrl',array(
		'label' => __('Number of Items','customizer'),
		'section' => 'cust_services',
		'settings' => 'cust_services_number_of_items',
		'type' => 'select',
		'choices' => array(
			'12' => '1 in Each Row',
			'6' => '2 in Each Row',
			'4' => '3 in Each Row',
			'3' => '4 in Each Row',
		)
	));

	// How may row will be end


	/*
	* Other Controls
	*/
	$wp_customizer->add_section('cust_others',array(
		'title' => __('Other Controls','customizer'),
		'priority' => '40'
	));

	$wp_customizer->add_setting('cust_others_demo_radio',array(
		'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_demo_radio_ctrl',array(
		'label' => __('Radio Button','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_demo_radio',
		'type' => 'radio',
		'choices' => array(
			'choice1' => __('Choice One','chustomizer'),
			'choice2' => __('Choice Two','chustomizer'),
			'choice3' => __('Choice Three','chustomizer'),
			'choice4' => __('Choice Four','chustomizer'),
		)
	));


	// Dropdown 
	$wp_customizer->add_setting('cust_others_demo_select',array(
		'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_demo_select_ctrl',array(
		'label' => __('Dropdown','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_demo_select',
		'type' => 'select',
		'choices' => array(
			'choice1' => __('Choice One','chustomizer'),
			'choice2' => __('Choice Two','chustomizer'),
			'choice3' => __('Choice Three','chustomizer'),
			'choice4' => __('Choice Four','chustomizer'),
		)
	));


	// Dropdown 2 
	$wp_customizer->add_setting('cust_others_demo_pages',array(
		'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_demo_pages_ctrl',array(
		'label' => __('Available Pages','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_demo_pages',
		'type' => 'dropdown-pages',
		'allow_addition' => true,
	));


	/*For any input type supported by the html input element, simply pass the type attribute value to the type parameter when adding the control. This allows support for control types such as text, hidden, number, range, url, tel, email, search, time, date, datetime, and week, pending browser support.*/ 
	$wp_customizer->add_setting('cust_others_html5_number',array(
		'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_html5_number_ctrl',array(
		'label' => __('Number Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_number',
		'type' => 'number',
		'input_attrs' => array(
			'min' => 10,
			'max' => 20,
			'step' => 2
		)
	));

	// Range 
	$wp_customizer->add_setting('cust_others_html5_range',array(
		'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_html5_range_ctrl',array(
		'label' => __('Range Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_range',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 10,
			'max' => 20,
			'step' => 2
		)
	));

	// Date 
	$wp_customizer->add_setting('cust_others_html5_date',array(
		'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_html5_date_ctrl',array(
		'label' => __('Date Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_date',
		'type' => 'date',
		'input_attrs' => array(
			'min' => 10,
			'max' => 20,
			'step' => 2
		)
	));

	// Time 
	$wp_customizer->add_setting('cust_others_html5_time',array(
		'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_html5_time_ctrl',array(
		'label' => __('Time Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_time',
		'type' => 'time',
	));

	// Week 
	$wp_customizer->add_setting('cust_others_html5_week',array(
		'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_html5_week_ctrl',array(
		'label' => __('Week Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_week',
		'type' => 'week',
	));

	// Url 
	$wp_customizer->add_setting('cust_others_html5_url',array(
		'default' => 'https://facebook.com',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_html5_url_ctrl',array(
		'label' => __('Url Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_url',
		'type' => 'url',
	));

	// Tel 
	$wp_customizer->add_setting('cust_others_html5_tel',array(
		'default' => '01815666267',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_html5_tel_ctrl',array(
		'label' => __('Tel Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_tel',
		'type' => 'tel',
	));

	// Email 
	$wp_customizer->add_setting('cust_others_html5_email',array(
		'default' => 'rayhanctg4@gmail.com',
		'transport' => 'refresh'  // javascript -- postMessage
	));

	$wp_customizer->add_control('cust_others_html5_email_ctrl',array(
		'label' => __('Email Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_email',
		'type' => 'email',
	));

	// Search 
	$wp_customizer->add_setting('cust_others_html5_search',array(
		// 'default' => 'choice3',
		'transport' => 'refresh'  // javascript -- postMessage / refresh
	));

	$wp_customizer->add_control('cust_others_html5_search_ctrl',array(
		'label' => __('Search Field','customizer'),
		'section' => 'cust_others',
		'settings' => 'cust_others_html5_search',
		'type' => 'search',
	));



	/*
	* About Page Controls start
	*/
	$wp_customizer->add_section('cust_about',array(
		'title' => __('About Page','customizer'),
		'priority' => '40',
		'active_callback' => function(){
			/*if (is_page_template('page-templates/about.php')) {
				return true;
			}
			return false; // closure*/
			
			return is_page_template('page-templates/about.php');
		}
	));

	// About Display Section
	$wp_customizer->add_setting('cust_display_about',array(
		'default' => 1,
		'transport' => 'postMessage'  // javascript -- postMessage / refresh
	));

	$wp_customizer->add_control('cust_display_about',array(
		'label' => __('Display About Section','customizer'),
		'section' => 'cust_about',
		// 'settings' => 'cust_display_about',
		'type' => 'checkbox',
	));

	// About Heading
	$wp_customizer->add_setting('cust_about_heading',array(
		'default' => __('About Page Heading','chustomizer'),
		'transport' => 'postMessage'  // javascript -- postMessage / refresh
	));

	$wp_customizer->add_control('cust_about_heading',array(
		'label' => __('About Page Heading','customizer'),
		'section' => 'cust_about',
		// 'settings' => 'cust_about_heading',
		'type' => 'text',
	));
	// Selective refresh
	$wp_customizer->selective_refresh->add_partial('about_section_heading',array(
		'selector' => '#about-heading',
		'settings' => 'cust_about_heading',
		'render_callback' => function(){
			return get_theme_mod('cust_about_heading');
		}
	));
	// About Description
	$wp_customizer->add_setting('cust_about_description',array(
		// 'default' => __('About Page Description','chustomizer'),
		'transport' => 'postMessage'  // javascript -- postMessage / refresh
	));

	$wp_customizer->add_control('cust_about_description',array(
		'label' => __('About Page Description','customizer'),
		'section' => 'cust_about',
		// 'settings' => 'cust_about_description',
		'type' => 'textarea',
	));
	// Selective refresh
	$wp_customizer->selective_refresh->add_partial('about_section_description',array(
		'selector' => '#about-discription',
		'settings' => 'cust_about_description',
		'render_callback' => function(){
			return apply_filters('the_content',get_theme_mod('cust_about_description'));
		}
	));

	/*
	* About Page Controls end
	*/

}

add_action('customize_register', 'cust_customizer_settings');


/*function service_display_subheading(){
	if (get_theme_mod('cust_services_display_subheading')==1) {
		return true;
	}
	return false;
}*/