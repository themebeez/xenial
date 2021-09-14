<?php
/**
 * Xenial functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Xenial
 */

if ( ! defined( 'XENIAL_THEME_VERSION' ) ) {

	define( 'XENIAL_THEME_VERSION', '1.0.0' );
}

if ( ! defined( 'XENIAL_THEME_URI' ) ) {

	define( 'XENIAL_THEME_URI', get_template_directory_uri() );
}

if ( ! defined( 'XENIAL_THEME_DIR' ) ) {

	define( 'XENIAL_THEME_DIR', get_template_directory() );
}

if ( ! defined( 'XENIAL_THEME_SLUG' ) ) {

	define( 'XENIAL_THEME_SLUG', 'xenial' );
}

if ( ! function_exists( 'xenial_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function xenial_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Xenial, use a find and replace
		 * to change 'xenial' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'xenial', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary Navigation Menu', 'xenial' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat', 'status', 'aside' ) );

		add_theme_support( 'align-wide' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'editor-styles' );

		add_editor_style( 'assets/css/editor-styles.css' );


		// This variable is intended to be overruled from themes.
		// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
		$GLOBALS['content_width'] = apply_filters( 'xenial_content_width', 640 );

	}
endif;
add_action( 'after_setup_theme', 'xenial_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function xenial_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'xenial' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'xenial' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );

	$footer_widgets_count = absint( xenial_get_option( 'footer_widgets_columns' ) );

	if ( $footer_widgets_count ) {

		for ( $i = 1; $i <= $footer_widgets_count; $i++ ) {

			register_sidebar( array(
				'name'          => sprintf( 
					esc_html__( 'Footer %s', 'xenial' ), 
					$i 
				),
				'id'            => 'footer-' . $i,
				'description'   => esc_html__( 'Add widgets here.', 'xenial' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h4>',
				'after_title'   => '</h4></div>',
			) );
		}
	}

	register_sidebar( array(
		'name'          => esc_html__( 'Header Advertisement Area', 'xenial' ),
		'id'            => 'xenial-header-ad-area',
		'description'   => esc_html__( 'Add widgets here.', 'xenial' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );

	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'WooCommerce Sidebar', 'xenial' ),
			'id'            => 'xenial-woocommerce-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'xenial' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title"><h3>',
			'after_title'   => '</h3></div>',
		) );
	}
}
add_action( 'widgets_init', 'xenial_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function xenial_scripts() {

	$assets_url = get_template_directory_uri() . '/assets/build/';

	$script_params = [];

	wp_enqueue_style( 'xenial-style', get_stylesheet_uri() );

	wp_enqueue_style( 'xenial-google-font', xenial_google_fonts() );

	wp_enqueue_style( 'themify', $assets_url . 'font/themify-icons/themify-icons.css' );

	wp_enqueue_style( 'xenial-base', $assets_url . 'css/xenial-style.css', NULL, XENIAL_THEME_VERSION, 'all' );

	wp_enqueue_style( 'xenial-woocommerce', $assets_url . 'css/woocommerce/woocommerce.css', NULL, XENIAL_THEME_VERSION, 'all' );

	//wp_enqueue_script( 'xenial-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.min.js', array( 'jquery' ), XENIAL_THEME_VERSION, true );		

	wp_register_script( 'xenial-main', $assets_url . 'js/xenial-script.min.js', NULL, XENIAL_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'xenial_scripts' );

/**
 * Enqueue backend's scripts and styles.
 */
function xenial_admin_scripts() {

	wp_enqueue_script( 'media-upload' );

	wp_enqueue_media();

	wp_enqueue_style( 'xenial-theme-backend', get_template_directory_uri() . '/assets/css/theme-backend.min.css' );

	wp_enqueue_script( 'xenial-theme-backend', get_template_directory_uri() . '/assets/js/theme-backend.js', array( 'jquery' ), XENIAL_THEME_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'xenial_admin_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 *
 */
require XENIAL_THEME_DIR . '/inc/init.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/customizer/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {

	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Post Field.
 */
require get_template_directory() . '/inc/custom-fields.php';

/**
 * Theme functions.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Load Custom filters.
 */
require get_template_directory() . '/inc/theme-filters.php';

/**
 * Load Plugin Recommendation.
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';