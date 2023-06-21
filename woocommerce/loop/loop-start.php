<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     7.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$column_classes = array();

$table_col = get_theme_mod( 'products_columns_per_row_tablet', xenial_get_customize_default( 'products_columns_per_row_tablet' ) );

if ( $table_col ) {
    $column_classes[] = "tablet-columns-$table_col";
}

$mobile_col = get_theme_mod( 'products_columns_per_row_mobile', xenial_get_customize_default( 'products_columns_per_row_mobile' ) );

if ( $mobile_col ) {
    $column_classes[] = "mobile-columns-$mobile_col";
}
?>
<div class="xe-woo-products-entry">
<ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?> <?php echo esc_attr( implode( ' ', $column_classes ) ); ?>">