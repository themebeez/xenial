<?php

if ( ! function_exists( 'xenial_footer_base_template' ) ) {

	function xenial_footer_base_template() {

		if ( is_single() ) {

			$is_default_footer_disabled = get_post_meta( get_the_ID(), 'xenial_post_disable_default_footer', true );

			if ( $is_default_footer_disabled ) {

				return;
			}
		}

		if ( is_page() ) {

			$is_default_footer_disabled = get_post_meta( get_the_ID(), 'xenial_post_disable_default_footer', true );

			if ( $is_default_footer_disabled ) {
				
				return;
			}
		}

		$args = array(
			'classes' => array( 'xenial-site-footer' )
		);

		$args = apply_filters( 'xenial_footer_base_args', $args );

		get_template_part( 'template-parts/footer/footer', 'base', $args );
	}
}
add_action( 'xenial_footer_base', 'xenial_footer_base_template' );


if ( ! function_exists( 'xenial_footer_content_template' ) ) {

	function xenial_footer_content_template() {

		do_action( 'xenial_footer_widgets' );

		do_action( 'xenial_footer_copyright' );
	}
}
add_action( 'xenial_footer_content', 'xenial_footer_content_template' );


if ( ! function_exists( 'xenial_footer_widgets_template' ) ) {

	function xenial_footer_widgets_template() {

		if ( ! xenial_get_option( 'display_footer_widgets' ) ) {
			return;
		}

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-footer-widgets-area' ),
			'widget_columns_no' => xenial_get_option( 'footer_widgets_columns' ) ? absint( xenial_get_option( 'footer_widgets_columns' ) ) : absint( $customizer_defaults['footer_widgets_columns'] ),
			'widget_column_class' => array(),
		);


		$args['classes'][] = xenial_get_option( 'footer_widgets_visibility' ) ? xenial_get_option( 'footer_widgets_visibility' ) : $customizer_defaults['footer_widgets_visibility'];

		$args['classes'][] = xenial_get_option( 'footer_widgets_width' ) ? xenial_get_option( 'footer_widgets_width' ) : $customizer_defaults['footer_widgets_width'];

		if ( $args['widget_columns_no'] == 2 ) {

			$args['classes'][] = 'xenial-two-columns-footer-widgets';

			$layout = xenial_get_option( 'footer_widget_2_columns_layout' );

			switch ( $layout ) {
				case 'variation_1' :
					$args['classes'][] = 'xenial-two-columns-layout-1';
					$args['widget_column_class'] = [ 'xenial-col-lg-6', 'xenial-col-lg-6' ];
					break;
				case 'variation_2' :
					$args['classes'][] = 'xenial-two-columns-layout-2';
					$args['widget_column_class'] = [ 'xenial-col-lg-4', 'xenial-col-lg-8' ];
					break;
				default :
					$args['classes'][] = 'xenial-two-columns-layout-3';
					$args['widget_column_class'] = [ 'xenial-col-lg-8', 'xenial-col-lg-4' ];
			}
		}

		if ( $args['widget_columns_no'] == 3 ) {

			$args['classes'][] = 'xenial-three-columns-footer-widgets';

			$layout = xenial_get_option( 'footer_widget_3_columns_layout' );

			switch ( $layout ) {
				case 'variation_1' :
					$args['classes'][] = 'xenial-three-columns-layout-1';
					$args['widget_column_class'] = [ 'xenial-col-lg-4', 'xenial-col-lg-4', 'xenial-col-lg-4' ];
					break;
				case 'variation_2' :
					$args['classes'][] = 'xenial-three-columns-layout-2';
					$args['widget_column_class'] = [ 'xenial-col-lg-3', 'xenial-col-lg-6', 'xenial-col-lg-3' ];
					break;
				case 'variation_3' :
					$args['classes'][] = 'xenial-three-columns-layout-3';
					$args['widget_column_class'] = [ 'xenial-col-lg-6', 'xenial-col-lg-3', 'xenial-col-lg-3' ];
					break;
				default :
					$args['classes'][] = 'xenial-three-columns-layout-4';
					$args['widget_column_class'] = [ 'xenial-col-lg-3', 'xenial-col-lg-3', 'xenial-col-lg-6' ];
			}
		}

		$args = apply_filters( 'xenial_footer_widgets_args', $args );

		get_template_part( 'template-parts/footer/footer', 'widgets', $args );
	}
}
add_action( 'xenial_footer_widgets', 'xenial_footer_widgets_template' );


if ( ! function_exists( 'xenial_footer_copyright_template' ) ) {

	function xenial_footer_copyright_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-footer-copyright-area')
		);

		$args['classes'][] = xenial_get_option( 'footer_copyright_bar_width' ) ? xenial_get_option( 'footer_copyright_bar_width' ) : $customizer_defaults['footer_copyright_bar_width'];

		$copyright_bar_layout = xenial_get_option( 'footer_copyright_bar_layout' ) ? xenial_get_option( 'footer_copyright_bar_layout' ) : $customizer_defaults['footer_copyright_bar_layout'];

		if ( $copyright_bar_layout == 'variation_1' ) {
			$args['classes'][] = 'xenial-footer-copyright-layout-1';
		} else {
			$args['classes'][] = 'xenial-footer-copyright-layout-2';
		}

		$args = apply_filters( 'xenial_footer_copyright_area_args', $args );

		get_template_part( 'template-parts/footer/footer', 'copyright', $args );
	}
}
add_action( 'xenial_footer_copyright', 'xenial_footer_copyright_template' );



if ( ! function_exists( 'xenial_copyright_text_template' ) ) {

	function xenial_copyright_text_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-footer-col' ),
			'copyright_content' => xenial_get_option( 'footer_copyright_text' ) ? xenial_get_option( 'footer_copyright_text' ) : $customizer_defaults['footer_copyright_text']
		);

		if ( xenial_get_option( 'footer_copyright_position' ) == 'left' ) {
			$args['classes'][] = 'col-start';
		} else {
			$args['classes'][] = 'col-end';
		}
		
		$replace = array(
			'{current_year}' => date_i18n( 'Y' ),
			'{site_title}'   => get_bloginfo( 'name' )
		);

		$args['copyright_content'] = str_replace( array_keys($replace), array_values($replace), $args['copyright_content']);

		$args['copyright_content'] .= sprintf( __( ' | %1$s Theme by %2$s.', 'xenial' ), 'Xenial', '<a href="https://themebeez.com" rel="author" target="_blank">Themebeez</a>' );

		$args = apply_filters( 'xenial_footer_copyright_args', $args );

		get_template_part( 'template-parts/elements/element', 'copyright', $args );
	}
}
add_action( 'xenial_copyright_text', 'xenial_copyright_text_template' );

if ( ! function_exists( 'xenial_copyright_bar_element_template' ) ) {

	function xenial_copyright_bar_element_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array( 'xenial-footer-col' )
		);

		$copyright_position = xenial_get_option( 'footer_copyright_position' ) ? xenial_get_option( 'footer_copyright_position' ) : $customizer_defaults['footer_copyright_position'];

		$args['classes'][] = ( $copyright_position === 'left' ) ? 'col-end' : 'col-start';

		$args['classes'][] = xenial_get_option( 'footer_copyright_bar_extra_element_visibility' ) ? xenial_get_option( 'footer_copyright_bar_extra_element_visibility' ) : $customizer_defaults['footer_copyright_bar_extra_element_visibility'];

		$copyright_element = xenial_get_option( 'footer_copyright_bar_extra_element' );

		if ( $copyright_element ) {
			?>
			<div class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
				<?php
				do_action( 
					'xenial_' . $copyright_element . '_element', 
					array(
						'section' => 'copyright-bar'
					) 
				);
				?>
			</div>
			<?php
		}
	}
}
add_action( 'xenial_copyright_bar_element', 'xenial_copyright_bar_element_template' );