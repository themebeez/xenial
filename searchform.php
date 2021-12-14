<?php
/**
 * The template for displaying search form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$xenial_search_input_placeholder = xenial_get_option( 'header_search_placeholder_text' );
?>
<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET">
    <input type="text" name="s" placeholder="<?php echo esc_attr( $xenial_search_input_placeholder ); ?>">
    <button class ="xe-button xe-false-button" type ="submit">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z"/></svg>
    </button>
</form>