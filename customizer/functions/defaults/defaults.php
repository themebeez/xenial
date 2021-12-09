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


