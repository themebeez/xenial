<?php

require XENIAL_THEME_DIR . '/inc/helper-functions.php';

$xenial_helper_functions_path = XENIAL_THEME_DIR . '/inc/helpers';


require $xenial_helper_functions_path . '/helpers-sidebar.php';

require $xenial_helper_functions_path . '/helpers-breadcrumbs.php';


$xenial_template_functions_path = XENIAL_THEME_DIR . '/inc/template-functions';

require $xenial_template_functions_path . '/template-meta.php';
require $xenial_template_functions_path . '/template-content.php';
require $xenial_template_functions_path . '/template-navigation.php';
require $xenial_template_functions_path . '/template-archive.php';
require $xenial_template_functions_path . '/template-page.php';
require $xenial_template_functions_path . '/template-single.php';


