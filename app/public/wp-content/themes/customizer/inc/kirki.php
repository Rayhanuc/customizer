<?php



Kirki::add_config( 'customizer', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'customizer_panel_id', array(
    'priority'    => 10,
    'title'       => esc_html__( 'My Panel', 'kirki' ),
    'description' => esc_html__( 'My panel description', 'kirki' ),
) );


Kirki::add_section( 'customizer_section_one', array(
    'title'          => esc_html__( 'My Section', 'customizer' ),
    'description'    => esc_html__( 'My section description.', 'customizer' ),
    'priority'       => 160,
    'panel' => 'customizer_panel_id'
) );


Kirki::add_field( 'customizer_section_one', [
	'type'     => 'text',
	'settings' => 'my_setting',
	'label'    => esc_html__( 'Text Control', 'customizer' ),
	'section'  => 'customizer_section_one',
	'default'  => esc_html__( 'This is a default value', 'customizer' ),
	'priority' => 10,
] );



// Repeater start
Kirki::add_field( 'customizer', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Repeater Control', 'customizer' ),
	'section'     => 'customizer_section_one',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Your Custom Value', 'customizer' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'customizer' ),
	'settings'     => 'my_repeater_setting',
	'default'      => [
		[
			'link_text' => esc_html__( 'Kirki Site', 'customizer' ),
			'link_url'  => 'https://kirki.org/',
		],
		[
			'link_text' => esc_html__( 'Kirki Repository', 'customizer' ),
			'link_url'  => 'https://github.com/aristath/customizer',
		],
	],
	'fields' => [
		'link_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Link Text', 'customizer' ),
			'description' => esc_html__( 'This will be the label for your link', 'customizer' ),
			'default'     => '',
		],
		'link_url'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Link URL', 'customizer' ),
			'description' => esc_html__( 'This will be the link URL', 'customizer' ),
			'default'     => '',
		],
	]
] );
// Repeater end


// Font start
Kirki::add_field( 'customizer', [
	'type'        => 'typography',
	'settings'    => 'my_setting3',
	'label'       => esc_html__( 'Typography panel', 'customizer' ),
	'section'     => 'customizer_section_one',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body',
		],
	],
] );
// Font end

// sortable start
Kirki::add_field( 'customizer', [
	'type'        => 'sortable',
	'settings'    => 'my_setting4',
	'label'       => esc_html__( 'This is the sortable label', 'customizer' ),
	'section'     => 'customizer_section_one',
	'default'     => [
		'option3',
		'option1',
		'option4'
	],
	'choices'     => [
		'option1' => esc_html__( 'Option 1', 'customizer' ),
		'option2' => esc_html__( 'Option 2', 'customizer' ),
		'option3' => esc_html__( 'Option 3', 'customizer' ),
		'option4' => esc_html__( 'Option 4', 'customizer' ),
		'option5' => esc_html__( 'Option 5', 'customizer' ),
		'option6' => esc_html__( 'Option 6', 'customizer' ),
	],
	'priority'    => 10,
] );
// sortable end

// Using the output argument css start
Kirki::add_field( 'customizer', array(
	'type'        => 'color',
	'settings'    => 'color_setting_hex',
	'label'       => __( 'Color Control (hex-only) Body', 'customizer' ),
	'description' => esc_html__( 'This is a color control for body', 'customizer' ),
	'section'     => 'customizer_section_one',
	'default'     => '#0088CC',
	'transport'   => 'auto',
	'output' => array(
		array(
			'element'  => 'body',
			'property' => 'background',
		),
		array(
			'element'  => '#bodyid',
			'property' => 'background-color',
		),
	),
) );
// Using the output argument css end










