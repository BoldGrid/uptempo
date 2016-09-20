<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-uptempo';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Give page_home.php a fluid container.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = 'container-fluid';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-1' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[menu]social' ),
		'11' => array( '[action]boldgrid_primary_navigation', '[menu]tertiary' ),
	);

	// Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#2f485b',
				'#6a96b2',
				'#977967',
				'#5c6873',
				'#f4f9fc',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#5e5e5e',
				'#95cd13',
				'#95cd13',
				'#3b3d37',
				'#232323',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#333333',
				'#ffffff',
				'#ffffff',
				'#333333',
				'#bcbcbc',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#f4f9fc',
				'#413052',
				'#d99e4c',
				'#bf4945',
				'#f0615d',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#1f230a',
				'#bb4002',
				'#c94502',
				'#5c665c',
				'#9cb29d',
			),
		),
	);

	// Override Options per Subcategory.
	switch (  $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Music':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#f4f9fc';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Fonts & Icons.
	$boldgrid_framework_configs['font']['types'] = array( 'Changa+One:400|Roboto:300,400,500,700' );
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Changa One';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'uppercase';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Roboto';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 13;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Roboto';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 150;

	// Typography Tagline Classes
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Relationships
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action h2' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 3.75,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha-1 h2, .mod-alpha-2 h2' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 3.0,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-beta h3' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 2.3,
	);

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Upper Right';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
	<div class="container">
		<div class="row call-to-action-wrapper">
			<div class="col-md-4">
				<div class="call-to-action">
					<h2 class="slogan">WHAT WE OFFER</h2>
					<p>We are committed to providing the absolute best quality to each and every one of our customers. Over the last 20 years, since our start, we've continued to grow while staying true to our orginal mission — to give you, the customer, a winning service that you can rely on.</p>
					<a class="button-primary" href="/about-us">FIND OUT MORE</a>
				</div>
			</div>
		</div>
	</div>

HTML;

	// Widget 2.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-2'][] = array(
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce',
	);

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Header';

	return $boldgrid_framework_configs;
}

// These configs will be merged with the defaults.
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Prevents Editor plugin from removing container on this theme.
 *
 * @param array $boldgrid_framework_configs
 */
function bgtfw_container_overrides( $boldgrid_framework_configs ) {

	// Give page_home.php a fluid container.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = 'container-fluid';

	return $boldgrid_framework_configs;
}

add_filter( 'boldgrid_theme_framework_config', 'bgtfw_container_overrides', 60 );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Changa One';

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
