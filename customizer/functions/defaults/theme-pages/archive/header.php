<?php 


if ( ! function_exists( 'xenail_get_archive_header_customize_defaults' ) ) {

	function xenail_get_archive_header_customize_defaults() {

		return apply_filters(
			'xenial_archive_header_customize_defaults_filter',
			array(
				
			)
		);
	}
}