<?php
/**
 * Xenial Theme Customizer
 *
 * @package Xenial
 */

/**
 * Enqueue Customizer Scripts and Styles
 */
function xenial_enqueues() { 

	$asset_uri = XENIAL_THEME_URI . '/customizer/assets/';

	wp_enqueue_style( 
		XENIAL_THEME_SLUG . '-customizer-style', 
		$asset_uri . 
		'css/customizer-style.css' 
	);

	wp_enqueue_script( 
		XENIAL_THEME_SLUG . '-customizer-script', 
		$asset_uri . 'js/customizer-script.js', 
		array( 'jquery' ), 
		XENIAL_THEME_VERSION, 
		true 
	);

	// wp_enqueue_script( 'xenial-control-dependencies', $asset_uri . 'js/control-dependencies.js', array( 'jquery' ), XENIAL_THEME_VERSION, true );
}
add_action( 'customize_controls_enqueue_scripts', 'xenial_enqueues', 15 );


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function xenial_customize_register( $wp_customize ) {
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$controls_path = XENIAL_THEME_DIR . '/customizer/controls/';

	require $controls_path . 'slimselect/class-xenial-customize-slimselect-control.php';

	/**
	 * Load custom customizer control for radio image control
	 */
	require $controls_path . 'radio-image/class-xenial-customize-radio-image-control.php';
	

	/**
	 * Load custom customizer control for toggle switch control
	 */
	require $controls_path . 'toggle-switch/class-xenial-customize-toggle-switch-control.php';

	/**
	 * Load custom customizer control for divider
	 */
	require $controls_path . 'divider/class-xenial-customize-divider-control.php';

	/**
	 * Load custom customizer control for info control
	 */
	require $controls_path . 'info/class-xenial-customize-info-control.php';

	/**
	 * Load slider range custom customize control.
	 */
	require $controls_path . 'range-control/class-xenial-customize-range-control.php';

	/**
	 * Load responsive slider range custom customize control.
	 */
	require $controls_path . 'slider-control/class-xenial-customize-slider-control.php';

	$wp_customize->register_control_type( 'Xenial_Customize_Slider_Control' );

	/**
	 * Load google font custom customize control.
	 */
	require $controls_path . 'typography/class-xenial-customize-google-font-selector-control.php';

	/**
	 * Load alpha color picker custom customize control.
	 */
	require $controls_path . 'alpha-color-picker/class-xenial-customize-alpha-color-picker-control.php';

	/**
	 * Load sortable checkbox custom customize control.
	 */
	require $controls_path . 'sortable-checkbox/class-xenial-customize-sortable-checkbox-control.php';

	/**
	 * Load simple notice custom customize control.
	 */
	require $controls_path . 'simple-notice/class-xenial-customize-simple-notice-control.php';


	/**
	 * Load dimension custom customize control.
	 */
	require $controls_path . 'dimensions/class-xenial-customize-dimensions-control.php';

	$wp_customize->register_control_type( 'Xenial_Customize_Dimensions_Control' );


	/**
	 * Load box dimension custom customize control.
	 */
	require $controls_path . 'box-dimension/class-xenial-customize-box-dimension-control.php';

	$wp_customize->register_control_type( 'Xenial_Customize_Box_Dimension_Control' );


	/**
	 * Wrapper custom customize control.
	 */
	require $controls_path . 'wrapper/class-xenial-customize-wrapper-control.php';

	$wp_customize->register_control_type( 'Xenial_Customize_Wrapper_Control' );

	/**
	 * Tab custom customize control.
	 */
	require $controls_path . 'tab/class-xenial-customize-tab-control.php';

	$wp_customize->register_control_type( 'Xenial_Customize_Tab_Control' );


	/**
	 * Tab custom customize control.
	 */
	require $controls_path . 'tinymce-editor/class-xenial-customize-tinymce-editor-control.php';

	/**
	 * Button group customize control.
	 */
	// require $controls_path . 'button-group/class-xenial-customize-button-group-control.php';

	/**
	 * Button checkbox customize control.
	 */
	require $controls_path . 'button-checkbox/class-xenial-customize-button-checkbox-control.php';


	require $controls_path . 'radio-button-group/class-xenial-customize-radio-button-group.php';

	$wp_customize->register_control_type( 'Xenial_Customize_Radio_Button_Group_Control' );


	/**
	 * Load custom customizer control for upsell
	 */
	require $controls_path . 'upsell/class-xenial-customize-upsell-control.php';

	$wp_customize->register_section_type( 'Xenial_Customize_Upsell_Control' );

	$wp_customize->add_section(
		new Xenial_Customize_Upsell_Control( 
			$wp_customize, 
			'xenial_pro_upsell', 
			array(
				'title'       	=> esc_html__( 'Xenial Pro', 'xenial' ),
				'button_text' 	=> esc_html__( 'Get Pro',        'xenial' ),
				'button_url'  	=> 'https://themebeez.com/themes/xenial-pro/?ref=upsell-btn',
				'priority'		=> 0,
			) 
		)
	);


	/**
	 * Load customizer functions for sanitization of input values of control fields
	 */
	require XENIAL_THEME_DIR . '/customizer/functions/sanitize-callbacks.php';

	/**
	 * Load functions to add customizer fields.
	 */
	require XENIAL_THEME_DIR . '/customizer/functions/reusable-fields.php';	


	/**
	 * Load customizer functions for loading control field's choices, declaration of panel, section 
	 * and control fields
	 */

	$customizer_fields_path = XENIAL_THEME_DIR . '/customizer/fields/';

	require $customizer_fields_path . 'panels.php';
	require $customizer_fields_path . 'layout.php';
	require $customizer_fields_path . 'colors.php';
	require $customizer_fields_path . 'typography.php';
	require $customizer_fields_path . 'buttons.php';
	require $customizer_fields_path . 'breadcrumbs.php';
	require $customizer_fields_path . 'miscellaneous.php';

	require $customizer_fields_path . 'header/base.php';
	require $customizer_fields_path . 'header/top-header.php';
	require $customizer_fields_path . 'header/main-header.php';
	require $customizer_fields_path . 'header/site-identity.php';
	require $customizer_fields_path . 'header/main-navigation.php';
	require $customizer_fields_path . 'header/transparent-header.php';

	require $customizer_fields_path . 'header/elements/logo.php';
	// require $customizer_fields_path . 'header/elements/ad.php';
	require $customizer_fields_path . 'header/elements/button.php';
	require $customizer_fields_path . 'header/elements/html.php';
	require $customizer_fields_path . 'header/elements/primary-menu.php';
	require $customizer_fields_path . 'header/elements/search.php';
	require $customizer_fields_path . 'header/elements/secondary-menu.php';
	require $customizer_fields_path . 'header/elements/social-links.php';
	// require $customizer_fields_path . 'header/elements/text.php';

	require $customizer_fields_path . 'pages/inner-header.php';
	// require $customizer_fields_path . 'pages/breadcrumbs.php';
	require $customizer_fields_path . 'pages/archive-settings.php';
	require $customizer_fields_path . 'pages/archive/header.php';
	require $customizer_fields_path . 'pages/archive/post-card.php';
	require $customizer_fields_path . 'pages/archive/pagination.php';
	require $customizer_fields_path . 'pages/single-settings.php';
	require $customizer_fields_path . 'pages/single-post.php';
	require $customizer_fields_path . 'pages/post-single/header.php';
	require $customizer_fields_path . 'pages/post-single/post-content.php';
	require $customizer_fields_path . 'pages/post-single/author-box.php';
	require $customizer_fields_path . 'pages/post-single/posts-navigation.php';	
	require $customizer_fields_path . 'pages/post-single/post-comment.php';		
	require $customizer_fields_path . 'pages/post-single/related-posts.php';

	require $customizer_fields_path . 'pages/single-page.php';
	require $customizer_fields_path . 'pages/page-single/header.php';
	require $customizer_fields_path . 'pages/page-single/content.php';
	
	// require $customizer_fields_path . 'fields-banner.php';

	require $customizer_fields_path . 'fields-sidebar.php';

	require $customizer_fields_path . 'footer/base.php';
	require $customizer_fields_path . 'footer/footer-widgets.php';
	require $customizer_fields_path . 'footer/copyright-bar.php';


	if ( class_exists( 'WooCommerce' ) ) {

		require $customizer_fields_path . 'fields-woocommerce.php';
	}
	

	if ( isset( $wp_customize->selective_refresh ) ) {

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'xenial_customize_partial_blogname',
		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'xenial_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'xenial_customize_register' );

/**
 * Load active callback functions.
 */

require XENIAL_THEME_DIR . '/customizer/functions/active-callbacks.php';

/**
 * Load function to load customizer field's default values.
 */
require XENIAL_THEME_DIR . '/customizer/functions/customizer-callbacks.php';

$xenial_customizer_defaults_path = XENIAL_THEME_DIR . '/customizer/functions/defaults/';

require $xenial_customizer_defaults_path . 'defaults-header-base.php';
require $xenial_customizer_defaults_path . 'defaults-footer-base.php';
require $xenial_customizer_defaults_path . 'defaults-colors.php';
require $xenial_customizer_defaults_path . 'defaults-typography.php';
require $xenial_customizer_defaults_path . 'defaults-layout.php';
require $xenial_customizer_defaults_path . 'defaults-buttons.php';
require $xenial_customizer_defaults_path . 'defaults-miscellaneous.php';
require $xenial_customizer_defaults_path . 'defaults-breadcrumbs.php';
require $xenial_customizer_defaults_path . 'defaults-archive.php';
require $xenial_customizer_defaults_path . 'defaults-single.php';
require $xenial_customizer_defaults_path . 'defaults-page.php';

/**
 * Load function to load customizer field's options.
 */
require XENIAL_THEME_DIR . '/customizer/functions/customizer-choices.php';



require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-base-layout.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-base-typo.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-base-colors.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-breadcrumbs.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/archive/dynamic-archive-header.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/archive/dynamic-archive-pagination.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/archive/dynamic-archive-post-card.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/single/dynamic-page-header.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/single/dynamic-single-header.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-sidebar.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css.php';




/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function xenial_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function xenial_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function xenial_customize_preview_js() {

	$asset_uri = XENIAL_THEME_URI . '/customizer/assets/';

	wp_enqueue_script( 
		XENIAL_THEME_SLUG . '-customizer', 
		$asset_uri . 'js/customizer.js', 
		array( 'customize-preview' ), 
		XENIAL_THEME_VERSION, 
		true 
	);
}
add_action( 'customize_preview_init', 'xenial_customize_preview_js' );



