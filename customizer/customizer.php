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
		'popper', 
		$asset_uri . 'js/popper.min.js', 
		array(), 
		'2.11.0', 
		true 
	);

	wp_enqueue_script( 
		'tippy', 
		$asset_uri . 'js/tippy.min.js', 
		array(), 
		'6.3.7', 
		true 
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
	// require $controls_path . 'alpha-color-picker/class-xenial-customize-alpha-color-picker-control.php';

	/**
	 * Load sortable checkbox custom customize control.
	 */
	require $controls_path . 'sortable-checkbox/class-xenial-customize-sortable-checkbox-control.php';


	/**
	 * Load sortable selector custom customize control.
	 */
	require $controls_path . 'sortable-selector/class-xenial-customize-sortable-selector-control.php';

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
	 * Section link customize control.
	 */
	require $controls_path . 'section-link/class-xenial-customize-section-link-control.php';

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
	// require $controls_path . 'upsell/class-xenial-customize-upsell-control.php';

	// $wp_customize->register_section_type( 'Xenial_Customize_Upsell_Control' );


	/**
	 * Load custom customizer control for rgba color picker.
	 */
	require $controls_path . 'color-picker/class-xenial-customize-color-picker-control.php';

	$wp_customize->register_section_type( 'Xenial_Color_Picker_Customize_Control' );


	/**
	 * Load custom customizer control for box border
	 */
	require $controls_path . 'box-border/class-xenial-customize-box-border-control.php';

	$wp_customize->register_section_type( 'Xenial_Customize_Box_Border_Control' );

	


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
	require $customizer_fields_path . 'theme-elements.php';
	require $customizer_fields_path . 'layout.php';
	require $customizer_fields_path . 'colors.php';
	require $customizer_fields_path . 'typography.php';
	require $customizer_fields_path . 'buttons.php';
	require $customizer_fields_path . 'breadcrumbs.php';
	require $customizer_fields_path . 'miscellaneous.php';
	require $customizer_fields_path . 'social-network-links.php';

	require $customizer_fields_path . 'header/base.php';
	require $customizer_fields_path . 'header/top-header.php';
	require $customizer_fields_path . 'header/middle-header.php';
	require $customizer_fields_path . 'header/bottom-header.php';
	require $customizer_fields_path . 'header/offcanvas.php';
	require $customizer_fields_path . 'header/transparent-header.php';

	require $customizer_fields_path . 'header/elements/logo.php';
	require $customizer_fields_path . 'header/elements/button.php';
	require $customizer_fields_path . 'header/elements/html.php';
	require $customizer_fields_path . 'header/elements/primary-menu.php';
	require $customizer_fields_path . 'header/elements/primary-menu-dropdown.php';
	require $customizer_fields_path . 'header/elements/search.php';
	require $customizer_fields_path . 'header/elements/secondary-menu.php';
	require $customizer_fields_path . 'header/elements/social-links.php';
	require $customizer_fields_path . 'header/elements/offcanvas-toggle-button.php';
	require $customizer_fields_path . 'header/elements/offcanvas-menu.php';

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

	require $customizer_fields_path . 'fields-sidebar.php';

	// require $customizer_fields_path . 'footer/base.php';
	// require $customizer_fields_path . 'footer/top-footer.php';
	// require $customizer_fields_path . 'footer/middle-footer.php';
	// require $customizer_fields_path . 'footer/bottom-footer.php';

	// require $customizer_fields_path . 'footer/elements/copyright.php';
	// require $customizer_fields_path . 'footer/elements/footer-menu.php';
	// require $customizer_fields_path . 'footer/elements/social-links.php';
	// require $customizer_fields_path . 'footer/elements/widget-1.php';
	// require $customizer_fields_path . 'footer/elements/widget-2.php';
	// require $customizer_fields_path . 'footer/elements/widget-3.php';
	// require $customizer_fields_path . 'footer/elements/widget-4.php';
	// require $customizer_fields_path . 'footer/elements/widget-5.php';
	// require $customizer_fields_path . 'footer/elements/widget-6.php';

	// if ( class_exists( 'WooCommerce' ) ) {

	// 	require $customizer_fields_path . 'fields-woocommerce.php';
	// }

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
require XENIAL_THEME_DIR . '/customizer/functions/defaults/defaults.php';



require XENIAL_THEME_DIR . '/customizer/functions/customizer-callbacks.php';


require XENIAL_THEME_DIR . '/customizer/controls/header-builder/class-xenial-header-builder.php';
// require XENIAL_THEME_DIR . '/customizer/controls/footer-builder/class-xenial-footer-builder.php';

/**
 * Load function to load customizer field's options.
 */
require XENIAL_THEME_DIR . '/customizer/functions/customizer-choices.php';





require XENIAL_THEME_DIR . '/customizer/functions/selective-refresh/site-identity.php';
require XENIAL_THEME_DIR . '/customizer/functions/selective-refresh/buttons.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css.php';






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



function xenial_get_customize_responsive_icon_desktop() {
	?>
	<li class="desktop">
		<button type="button" class="preview-desktop active" data-device="desktop">
			<?php echo apply_filters( 'xenial_filter_responsive_icon_desktop', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 5v11h16V5H4zm-2-.993C2 3.451 2.455 3 2.992 3h18.016c.548 0 .992.449.992 1.007V18H2V4.007zM1 19h22v2H1v-2z"/></svg>' ); ?>
		</button>
	</li>
	<?php
}


function xenial_get_customize_responsive_icon_tablet() {
	?>
	<li class="tablet">
		<button type="button" class="preview-tablet" data-device="tablet">
			<?php echo apply_filters( 'xenial_filter_responsive_icon_tablet', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6 4v16h12V4H6zM5 2h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm7 15a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>' ); ?>
		</button>
	</li>
	<?php
}

function xenial_get_customize_responsive_icon_mobile() {
	?>
	<li class="tablet">
		<button type="button" class="preview-mobile" data-device="mobile">
			<?php echo apply_filters( 'xenial_filter_responsive_icon_mobile', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4v16h10V4H7zM6 2h12a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm6 15a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>' ); ?>
		</button>
	</li>
	<?php
}