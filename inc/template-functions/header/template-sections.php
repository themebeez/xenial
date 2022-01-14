<?php 


if ( ! function_exists( 'xenial_theme_header_template' ) ) {

	function xenial_theme_header_template() {

		$disable_theme_header = xenial_get_option( 'disable_theme_header' );

		if ( $disable_theme_header ) {
			return;
		}		

		get_template_part( 'template-parts/theme-header/sections/section', 'base' );
	}
}



if ( ! function_exists( 'xenial_header_top_row_template' ) ) {

	function xenial_header_top_row_template( $device ) {


		$is_row_active = xenial_is_header_row_active( $device, 'top' );

		if ( $is_row_active == false ) {
			return;
		}

		$row_elements = xenial_get_theme_header_row_elements( $device, 'top' );	

		$template_args = array(
			'container_classes' => array(),
			'left_column' => array(
				'classes' => array(),
				'elements' => $row_elements['left']
			),
			'middle_column' => array(
				'classes' => array(),
				'elements' => $row_elements['middle']
			),
			'right_column' => array(
				'classes' => array(),
				'elements' => $row_elements['right']
			),
		);

		$row_container = xenial_get_option( 'header_top_section_width' );

		$template_args['container_classes'][] = xenial_get_row_container_class( $row_container );  

		$template_args = apply_filters( 'xenial_header_top_row_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/sections/section', 'top-header', $template_args );  
	}
}


if ( ! function_exists( 'xenial_header_middle_row_template' ) ) {

	function xenial_header_middle_row_template( $device ) {

		$is_row_active = xenial_is_header_row_active( $device, 'middle' );

		if ( $is_row_active == false ) {
			return;
		}

		$row_elements = xenial_get_theme_header_row_elements( $device, 'middle' );

		$template_args = array(
			'container_classes' => array(),
			'left_column' => array(
				'classes' => array(),
				'elements' => $row_elements['left']
			),
			'middle_column' => array(
				'classes' => array(),
				'elements' => $row_elements['middle']
			),
			'right_column' => array(
				'classes' => array(),
				'elements' => $row_elements['right']
			),
		);

		$row_container = xenial_get_option( 'header_middle_section_width' );

		$template_args['container_classes'][] = xenial_get_row_container_class( $row_container );

		$template_args = apply_filters( 'xenial_header_middle_row_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/sections/section', 'middle-header', $template_args );  
	}
}


if ( ! function_exists( 'xenial_header_bottom_row_template' ) ) {

	function xenial_header_bottom_row_template( $device ) {

		$is_row_active = xenial_is_header_row_active( $device, 'bottom' );

		if ( $is_row_active == false ) {
			return;
		}

		$row_elements = xenial_get_theme_header_row_elements( $device, 'bottom' );

		$template_args = array(
			'container_classes' => array(),
			'left_column' => array(
				'classes' => array(),
				'elements' => $row_elements['left']
			),
			'middle_column' => array(
				'classes' => array(),
				'elements' => $row_elements['middle']
			),
			'right_column' => array(
				'classes' => array(),
				'elements' => $row_elements['right']
			),
		);

		$row_container = xenial_get_option( 'header_bottom_section_width' );

		$template_args['container_classes'][] = xenial_get_row_container_class( $row_container );  

		$template_args = apply_filters( 'xenial_header_bottom_row_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/sections/section', 'bottom-header', $template_args );  
	}
}


if ( ! function_exists( 'xenial_offcanvas_template' ) ) {

	function xenial_offcanvas_template() {

		$template_args = array(
			'classes' => array(),
			'slide_position' => xenial_get_option( 'offcanvas_side_panel_position' ),
			'close_button_icon' => '',
			'close_button_label' => xenial_get_option( 'offcanvas_close_button_label' ),
			'elements' => null
		);

		$layout = xenial_get_option( 'offcanvas_layout' );

		if ( $layout ) {
			switch ( $layout ) {
				case 'modal' :
					$template_args['classes'][] = 'xe-canvas-layout-modal';
					break;
				case 'side_panel' :
				$template_args['classes'][] = 'xe-canvas-layout-side-panel';
					break;
				default :
					break;
			}
		}

		$offcanvas_elements = xenial_get_theme_header_row_elements( 'mobile', 'offcanvas' );

		if ( $offcanvas_elements ) {
			$template_args['elements'] = $offcanvas_elements;
		}

		$close_button_icon = xenial_get_option( 'offcanvas_close_button_icon' );

		$close_button_icons = xenial_get_offcanvas_close_button_icons();

		$template_args['close_button_icon'] = $close_button_icons[ $close_button_icon ];

		$template_args = apply_filters( 'xenial_offcanvas_template_args', $template_args );

		get_template_part( 'template-parts/theme-header/sections/section', 'offcanvas', $template_args ); 
	}
}



if ( ! function_exists( 'xenial_header_column_inner_wrapper_begin_template' ) ) {

	function xenial_header_column_inner_wrapper_begin_template( $elements ) {

		if ( count( $elements ) <= 1 ) {	
			return;
		}

		echo '<div class="xe-header-elements xe-flex-center">';
	}
}

if ( ! function_exists( 'xenial_header_column_inner_wrapper_end_template' ) ) {

	function xenial_header_column_inner_wrapper_end_template( $elements ) {
		
		if ( count( $elements ) <= 1 ) {	
			return;
		}

		echo '</div>';
	}
}