<?php

if ( ! function_exists( 'xenial_breadcrumbs_template' ) ) {

	function xenial_breadcrumbs_template() {

		if ( ! xenial_is_breadcrumbs_activated() ) {
			return;
		}

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array(),
			'breadcrumbs_source' => 'default',			
			'display_in_separate_container' => false
		);

		$breadcrumbs_source = xenial_get_option( 'breadcrumbs_source' );

		switch ( $breadcrumbs_source ) {

			case 'yoast' :
				$args['breadcrumbs_source'] = 'yoast';
 				$args['classes'][] = 'xenial-yoast-breadcrumb';
 				break;
 			case 'rank_math' :
 				$args['breadcrumbs_source'] = 'rank-math';
 				$args['classes'][] = 'xenial-rank_math-breadcrumb';
 				break;
 			case 'bcn' :
 				$args['breadcrumbs_source'] = 'bcn';
 				$args['classes'][] = 'xenial-navxt-breadcrumb';
 				break;
 			default :
 				$args['breadcrumbs_source'] = 'default';
 				$args['classes'][] = 'xenial-default-breadcrumb';
		}

		if ( ! xenial_is_page_header_activated() ) {

			$args['display_in_separate_container'] = true;
			$args['classes'][] = 'xenial-breadcrumb-default-container';

			$breadcrumb_algnment = xenial_get_option( 'breadcrumbs_alignment' ) ? xenial_get_option( 'breadcrumbs_alignment' ) : $customizer_defaults['breadcrumbs_alignment'];

			switch ( $breadcrumb_algnment ) {
				case 'left' :
					$args['classes'][] = 'xenial-text-left';
					break;
				case 'right' :
					$args['classes'][] = 'xenial-text-right';
					break;
				default :
					$args['classes'][] = 'xenial-text-center';
			}

			$args['classes'][] = xenial_get_option( 'breadcrumbs_width' ) ? xenial_get_option( 'breadcrumbs_width' ) : $customizer_defaults['breadcrumbs_width'];
		} else {

			if ( xenial_get_option( 'breadcrumbs_position' ) == 'default' ) {
				
				$args['display_in_separate_container'] = true;
				$args['classes'][] = 'xenial-breadcrumb-default-container';

				$breadcrumb_algnment = xenial_get_option( 'breadcrumbs_alignment' ) ? xenial_get_option( 'breadcrumbs_alignment' ) : $customizer_defaults['breadcrumbs_alignment'];

				switch ( $breadcrumb_algnment ) {
					case 'left' :
						$args['classes'][] = 'xenial-text-left';
						break;
					case 'right' :
						$args['classes'][] = 'xenial-text-right';
						break;
					default :
						$args['classes'][] = 'xenial-text-center';
				}

				$args['classes'][] = xenial_get_option( 'breadcrumbs_width' ) ? xenial_get_option( 'breadcrumbs_width' ) : $customizer_defaults['breadcrumbs_width'];
			}
		}

		$args['classes'][] = xenial_get_option( 'breadcrumb_visibility' ) ? xenial_get_option( 'breadcrumb_visibility' ) : $customizer_defaults['breadcrumb_visibility'];

		$args = apply_filters( 'xenial_breadcrumbs_args', $args );		

		get_template_part( 'template-parts/content/content', 'breadcrumb', $args );
	}
} 
add_action( 'xenial_breadcrumbs', 'xenial_breadcrumbs_template' );