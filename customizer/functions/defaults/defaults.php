<?php 


$xenial_customize_defaults_path = XENIAL_THEME_DIR . '/customizer/functions/defaults/';

require $xenial_customize_defaults_path . 'theme-general/layout.php';
require $xenial_customize_defaults_path . 'theme-general/theme-elements.php';
require $xenial_customize_defaults_path . 'theme-general/colors.php';
require $xenial_customize_defaults_path . 'theme-general/buttons.php';
require $xenial_customize_defaults_path . 'theme-general/breadcrumbs.php';
require $xenial_customize_defaults_path . 'theme-general/typography.php';
require $xenial_customize_defaults_path . 'theme-general/miscellaneous.php';


require $xenial_customize_defaults_path . 'theme-header/sections/general.php';
require $xenial_customize_defaults_path . 'theme-header/sections/top.php';
require $xenial_customize_defaults_path . 'theme-header/sections/middle.php';
require $xenial_customize_defaults_path . 'theme-header/sections/bottom.php';
require $xenial_customize_defaults_path . 'theme-header/sections/offcanvas.php';
require $xenial_customize_defaults_path . 'theme-header/transparent-header.php';

require $xenial_customize_defaults_path . 'theme-header/elements/site-identity-logo.php';
require $xenial_customize_defaults_path . 'theme-header/elements/button.php';
require $xenial_customize_defaults_path . 'theme-header/elements/html.php';
require $xenial_customize_defaults_path . 'theme-header/elements/social-links.php';
require $xenial_customize_defaults_path . 'theme-header/elements/menu-1.php';
require $xenial_customize_defaults_path . 'theme-header/elements/menu-2.php';
require $xenial_customize_defaults_path . 'theme-header/elements/search.php';
require $xenial_customize_defaults_path . 'theme-header/elements/offcanvas-menu.php';
require $xenial_customize_defaults_path . 'theme-header/elements/offcanvas-toggle-button.php';


require $xenial_customize_defaults_path . 'theme-pages/defaults-archive.php';
require $xenial_customize_defaults_path . 'theme-pages/defaults-page.php';
require $xenial_customize_defaults_path . 'theme-pages/defaults-post.php';


require $xenial_customize_defaults_path . 'theme-footer/sections/general.php';
require $xenial_customize_defaults_path . 'theme-footer/sections/top.php';
require $xenial_customize_defaults_path . 'theme-footer/sections/middle.php';
require $xenial_customize_defaults_path . 'theme-footer/sections/bottom.php';

require $xenial_customize_defaults_path . 'theme-footer/elements/copyright.php';
require $xenial_customize_defaults_path . 'theme-footer/elements/menu.php';
require $xenial_customize_defaults_path . 'theme-footer/elements/social-links.php';
require $xenial_customize_defaults_path . 'theme-footer/elements/widget-area-1.php';
require $xenial_customize_defaults_path . 'theme-footer/elements/widget-area-2.php';
require $xenial_customize_defaults_path . 'theme-footer/elements/widget-area-3.php';
require $xenial_customize_defaults_path . 'theme-footer/elements/widget-area-4.php';
require $xenial_customize_defaults_path . 'theme-footer/elements/widget-area-5.php';
require $xenial_customize_defaults_path . 'theme-footer/elements/widget-area-6.php';


if ( class_exists( 'WooCommerce' ) ) {
	require $xenial_customize_defaults_path . 'third-party/woocommerce.php';
}

if ( class_exists( 'YITH_WCWL' ) ) {
	require $xenial_customize_defaults_path . 'third-party/yith-wishlist.php';
}


if ( ! function_exists( 'xenial_get_default_color_value' ) ) {

	function xenial_get_default_color_value( $responsive = false ) {

		$responsive_color_value = '{"desktop":{"initial":"","link":"","hover":"","active":""},"tablet":{"initial":"","link":"","hover":"","active":""},"mobile":{"initial":"","link":"","hover":"","active":""}}';

		$normal_color_value = '{"initial":"","link":"","hover":"","active":""}';

		return ( $responsive == true ) ? $responsive_color_value : $normal_color_value;
	}
}


if ( ! function_exists( 'xenial_get_default_border_value' ) ) {

	function xenial_get_default_border_value( $responsive = false ) {

		$responsive_border_value = '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}';

		$normal_border_value = '{"expanded":false,"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}';

		return ( $responsive == true ) ? $responsive_border_value : $normal_border_value;
	}
}