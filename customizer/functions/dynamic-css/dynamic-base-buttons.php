<?php 


if ( ! function_exists( 'xenial_dynamic_general_button_css' ) ) {
	function xenial_dynamic_general_button_css() {
		$css = '.generalButtonSelector {';
			$paddingTop = xenial_get_option( 'btn_padding_top' );
			$paddingRight = xenial_get_option( 'btn_padding_right' );
			$paddingBottom = xenial_get_option( 'btn_padding_bottom' );
			$paddingLeft = xenial_get_option( 'btn_padding_left' );
			$css .= '
				padding: ' . ( ( $paddingTop ) ? absint( $paddingTop ) : 0 ) . 'px ' . ( ( $paddingRight ) ? absint( $paddingRight ) : 0 ) . 'px ' . ( ( $paddingBottom ) ? absint( $paddingBottom ) : 0 ) . 'px ' . ( ( $paddingLeft ) ? absint( $paddingLeft ) : 0 ) . 'px;
			';

			$boderStyle = xenial_get_option( 'btn_border_style' );
			if ( $borderStyle != 'none' ) {
				$css .= '
					border-style: ' . esc_attr( $borderStyle ) . ';
				';
				$borderTopWidth = xenial_get_option( 'btn_border_width_top' );
				$borderRightWidth = xenial_get_option( 'btn_border_width_right' );
				$borderBottomWidth = xenial_get_option( 'btn_border_width_bottom' );
				$borderLeftWidth = xenial_get_option( 'btn_border_width_left' );
				$css .= '
					border-width: ' . ( ( $borderTopWidth ) ? absint( $borderTopWidth ) : 0 ) . 'px ' . ( ( $borderRightWidth ) ? absint( $borderRightWidth ) : 0 ) . 'px ' . ( ( $borderBottomWidth ) ? absint( $borderBottomWidth ) : 0 ) . 'px ' . ( ( $borderLeftWidth ) ? absint( $borderLeftWidth ) : 0 ) . 'px;
				';
			}

			$boderRadius = xenial_get_option( 'btn_border_radius' );
			$css .= '
				border-radius: ' . absint( $borderRadius ) . 'px;
			';

			$fontColor = xenial_get_option( 'btn_txt_color' );
			$backgroundColor = xenial_get_option( 'btn_bg_color' );
			$borderColor = xenial_get_option( 'btn_border_color' );
			$css .= '
				color: ' . esc_attr( $fontColor ) . ';
				background-color: ' . esc_attr( $backgroundColor ) . ';
				border-color: ' . esc_attr( $borderColor ) . ';
			';
		$css .= '}';

		$hoverFontColor = xenial_get_option( 'btn_txt_hover_color' );
		$hoverBackgroundColor = xenial_get_option( 'btn_bg_hover_color' );
		$hoverBorderColor = xenial_get_option( 'btn_border_hover_color' );

		$css .= '
			.generalButtonSelector:hover {
				color: ' . esc_attr( $hoverFontColor ) . ';
				background-color: ' . esc_attr( $hoverBackgroundColor ) . ';
				border-color: ' . esc_attr( $hoverBorderColor ) . ';
 			}	
		';
	}
}




if ( ! function_exists( 'xenial_dynamic_text_button_css' ) ) {
	function xenial_dynamic_text_button_css() {
		$css = '.textButtonSelector {';
			$paddingTop = xenial_get_option( 'txt_button_padding_top' );
			$paddingRight = xenial_get_option( 'txt_button_padding_right' );
			$paddingBottom = xenial_get_option( 'txt_button_padding_bottom' );
			$paddingLeft = xenial_get_option( 'txt_button_padding_left' );
			$css .= '
				padding: ' . ( ( $paddingTop ) ? absint( $paddingTop ) : 0 ) . 'px ' . ( ( $paddingRight ) ? absint( $paddingRight ) : 0 ) . 'px ' . ( ( $paddingBottom ) ? absint( $paddingBottom ) : 0 ) . 'px ' . ( ( $paddingLeft ) ? absint( $paddingLeft ) : 0 ) . 'px;
			';

			$boderStyle = xenial_get_option( 'txt_button_style' );
			if ( $borderStyle != 'none' ) {
				$css .= '
					border-style: ' . esc_attr( $borderStyle ) . ';
				';
				$borderTopWidth = xenial_get_option( 'txt_btn_border_width_top' );
				$borderRightWidth = xenial_get_option( 'txt_btn_border_width_right' );
				$borderBottomWidth = xenial_get_option( 'txt_btn_border_width_bottom' );
				$borderLeftWidth = xenial_get_option( 'txt_btn_border_width_left' );
				$css .= '
					border-width: ' . ( ( $borderTopWidth ) ? absint( $borderTopWidth ) : 0 ) . 'px ' . ( ( $borderRightWidth ) ? absint( $borderRightWidth ) : 0 ) . 'px ' . ( ( $borderBottomWidth ) ? absint( $borderBottomWidth ) : 0 ) . 'px ' . ( ( $borderLeftWidth ) ? absint( $borderLeftWidth ) : 0 ) . 'px;
				';
			}

			$boderRadius = xenial_get_option( 'txt_btn_border_radius' );
			$css .= '
				border-radius: ' . absint( $borderRadius ) . 'px;
			';

			$fontColor = xenial_get_option( 'txt_btn_txt_color' );
			$backgroundColor = xenial_get_option( 'txt_btn_bg_color' );
			$borderColor = xenial_get_option( 'txt_btn_border_color' );
			$css .= '
				color: ' . esc_attr( $fontColor ) . ';
				background-color: ' . esc_attr( $backgroundColor ) . ';
				border-color: ' . esc_attr( $borderColor ) . ';
			';
		$css .= '}';

		$hoverFontColor = xenial_get_option( 'txt_btn_txt_hover_color' );
		$hoverBackgroundColor = xenial_get_option( 'txt_btn_bg_hover_color' );
		$hoverBorderColor = xenial_get_option( 'txt_btn_border_hover_color' );

		$css .= '
			.textButtonSelector:hover {
				color: ' . esc_attr( $hoverFontColor ) . ';
				background-color: ' . esc_attr( $hoverBackgroundColor ) . ';
				border-color: ' . esc_attr( $hoverBorderColor ) . ';
 			}	
		';
	}
}