<?php

$xenial_active_callbacks_path = MAXIMO_THEME_DIR . '/customizer/functions/active-callbacks/';

require $xenial_active_callbacks_path . 'callback-layout.php';

require $xenial_active_callbacks_path . 'callback-color.php';

require $xenial_active_callbacks_path . 'callback-typography.php';

require $xenial_active_callbacks_path . 'callback-button.php';

require $xenial_active_callbacks_path . 'callback-miscellaneous.php';

require $xenial_active_callbacks_path . 'callback-top-header.php';

require $xenial_active_callbacks_path . 'callback-main-header.php';

require $xenial_active_callbacks_path . 'callback-transparent-header.php';

require $xenial_active_callbacks_path . 'callback-site-identity.php';

require $xenial_active_callbacks_path . 'callback-page-header.php';

require $xenial_active_callbacks_path . 'callback-breadcrumb.php';

require $xenial_active_callbacks_path . 'callback-archive.php';

require $xenial_active_callbacks_path . 'callback-single.php';

require $xenial_active_callbacks_path . 'callback-sidebar.php';

require $xenial_active_callbacks_path . 'callback-footer.php';

require $xenial_active_callbacks_path . 'callback-banner.php';

if ( class_exists( 'WooCommerce' ) ) {

	require $xenial_active_callbacks_path . 'callback-woocommerce.php';
}