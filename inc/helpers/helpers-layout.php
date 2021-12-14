<?php 


if ( ! function_exists( 'xenial_get_row_container_class' ) ) {

	function xenial_get_row_container_class( $container ) {

		$container_class = null;

		switch ( $container ) {
			case 'wide' :
				$container_class = 'xe-container-wide';
				break;
			case 'narrow' :
				$container_class = 'xe-container-narrow';
				break;
			default :
				$container_class = 'xe-container';
		}

		return $container_class;
	}
}



if ( ! function_exists( 'xenial_get_device_visibility_class' ) ) {

	function xenial_get_device_visibility_class( $device_visibility ) {

		$device_visibility_class = null;

		switch( $device_visibility ) {
			case 'desktop' :
				$device_visibility_class = 'hidden-desktop-device';
				break;
			case 'tablet' :
				$device_visibility_class = 'hidden-tablet-device';
				break;
			case 'mobile' :
				$device_visibility_class = 'hidden-mobile-device';
				break;
			default :
				break;
		}

		return $device_visibility_class;
	}
}



if ( ! function_exists( 'xenial_get_device_alignment_class' ) ) {

	function xenial_get_device_alignment_class( $device, $alignment ) {

		$device_alignments = array(
			'desktop' 	=> array(
				'left'		=> 'text-align-left',
				'center'	=> 'text-align-center',
				'right'		=> 'text-align-right'
			),
			'tablet'	=> array(
				'left'		=> 'text-align-left-tablet-device',
				'center'	=> 'text-align-center-tablet-device',
				'right'		=> 'text-align-right-tablet-device'
			),
			'mobile'	=> array(
				'left'		=> 'text-align-left-mobile-device',
				'center'	=> 'text-align-center-mobile-device',
				'right'		=> 'text-align-right-mobile-device'
			)
		);

		return $device_alignments[$device][$alignment];
	}
}