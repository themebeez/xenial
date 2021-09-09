<?php

$xenial_template_functions_path = XENIAL_THEME_DIR . '/inc/template-functions/template-functions-';

// Load template actions.

require $xenial_template_functions_path . 'header.php';
require $xenial_template_functions_path . 'top-header.php';
require $xenial_template_functions_path . 'main-header.php';
require $xenial_template_functions_path . 'banner.php'; 
require $xenial_template_functions_path . 'page-header.php';
require $xenial_template_functions_path . 'breadcrumbs.php';
require $xenial_template_functions_path . 'article-content.php';
require $xenial_template_functions_path . 'footer.php';
require $xenial_template_functions_path . 'miscellaneous.php';


require XENIAL_THEME_DIR . '/inc/helpers.php'; 

require XENIAL_THEME_DIR . '/inc/third-party/breadcrumbs.php'; 

if ( class_exists( 'WooCommerce' ) ) {

	require XENIAL_THEME_DIR . '/inc/third-party/woocommerce.php'; 

	require $xenial_template_functions_path . 'woocommerce.php'; 

	if ( class_exists( 'Addonify_Wishlist' ) ) {

		require XENIAL_THEME_DIR . '/inc/third-party/addonify.php';
	}
}


