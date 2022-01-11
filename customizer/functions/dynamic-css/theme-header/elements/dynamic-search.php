<?php 



if ( ! function_exists( 'xenial_dynamic_header_search_css' ) ) {

	function xenial_dynamic_header_search_css() {

		$search_modal_background_colors = xenial_json_decode( xenial_get_option( '' ) );

		$search_bar_width_desktop = xenial_get_option( '' );

		$search_bar_height_desktop = xenial_get_option( '' );

		$search_bar_borders = xenial_json_decode( xenial_get_option( '' ) );

		$search_bar_background_colors = xenial_json_decode( xenial_get_option( '' ) );

		$search_bar_font_desktop = array(
			'font-size' => xenial_get_option( '' ),
			'line-height' => xenial_get_option( '' )
		);

		$search_bar_font_colors = xenial_json_decode( xenial_get_option( '' ) );

		$search_modal_toggle_button_height_desktop = xenial_get_option( '' );

		$search_modal_toggle_button_width_desktop = xenial_get_option( '' );
	}
}