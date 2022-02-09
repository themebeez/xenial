wp.customize.controlConstructor['xenial-slider'] = wp.customize.Control.extend({

	ready: function() {

		'use strict';

		var control = this,
			slider_input,
			$this,
			val;

		var responsiveEle = control.container.find( '#xenial-slider-responsive-value' );

		if ( responsiveEle.val() ) {

			var desktop_slider 		= control.container.find( '.xenial-slider.desktop-slider' ),
			desktop_slider_input 	= desktop_slider.next( '.xenial-slider-input' ).find( 'input.desktop-input' ),
			tablet_slider 			= control.container.find( '.xenial-slider.tablet-slider' ),
			tablet_slider_input 	= tablet_slider.next( '.xenial-slider-input' ).find( 'input.tablet-input' ),
			mobile_slider 			= control.container.find( '.xenial-slider.mobile-slider' ),
			mobile_slider_input 	= mobile_slider.next( '.xenial-slider-input' ).find( 'input.mobile-input' );


			// Desktop slider
			desktop_slider.slider( {
				range: 'min',
				value: desktop_slider_input.val(),
				min: +desktop_slider_input.attr( 'min' ),
				max: +desktop_slider_input.attr( 'max' ),
				step: +desktop_slider_input.attr( 'step' ),
				slide: function( event, ui ) {
					desktop_slider_input.val( ui.value ).keyup();
				},
		        change: function( event, ui ){
		            control.settings['desktop'].set( ui.value );
		        }
			} );

			// Tablet slider
			tablet_slider.slider( {
				range: 'min',
				value: tablet_slider_input.val(),
				min: +tablet_slider_input.attr( 'min' ),
				max: +tablet_slider_input.attr( 'max' ),
				step: +desktop_slider_input.attr( 'step' ),
				slide: function( event, ui ) {
					tablet_slider_input.val( ui.value ).keyup();
				},
		        change: function( event, ui ){ 
		            control.settings['tablet'].set( ui.value );
		        }
			} );

			// Mobile slider
			mobile_slider.slider( {
				range: 'min',
				value: mobile_slider_input.val(),
				min: +mobile_slider_input.attr( 'min' ),
				max: +mobile_slider_input.attr( 'max' ),
				step: +desktop_slider_input.attr( 'step' ),
				slide: function( event, ui ) {
					mobile_slider_input.val( ui.value ).keyup();
				},
		        change: function( event, ui ){ 
		            control.settings['mobile'].set( ui.value );
		        }
			} );

			// Update the slider when the number value change
			jQuery( 'input.desktop-input' ).on( 'change keyup paste', function() {
				$this 			= jQuery( this );
				val 			= $this.val();
				slider_input 	= $this.parent().prev( '.xenial-slider.desktop-slider' );

				slider_input.slider( 'value', val );
			} );

			jQuery( 'input.tablet-input' ).on( 'change keyup paste', function() {
				$this 			= jQuery( this );
				val 			= $this.val();
				slider_input 	= $this.parent().prev( '.xenial-slider.tablet-slider' );

				slider_input.slider( 'value', val );
			} );

			jQuery( 'input.mobile-input' ).on( 'change keyup paste', function() {
				$this 			= jQuery( this );
				val 			= $this.val();
				slider_input 	= $this.parent().prev( '.xenial-slider.mobile-slider' );

				slider_input.slider( 'value', val );
			} );

			// Save the values
			control.container.on( 'change keyup paste', '.desktop input', function() {
				control.settings['desktop'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.tablet input', function() {
				control.settings['tablet'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.mobile input', function() {
				control.settings['mobile'].set( jQuery( this ).val() );
			} );
			
		} else {

			var normal_slider 		= control.container.find( '.xenial-slider.normal-slider' ),
			normal_slider_input 	= normal_slider.next( '.xenial-slider-input' ).find( 'input.normal-input' );

			normal_slider.slider( {
				range: 'min',
				value: normal_slider_input.val(),
				min: +normal_slider_input.attr( 'min' ),
				max: +normal_slider_input.attr( 'max' ),
				step: +normal_slider_input.attr( 'step' ),
				slide: function( event, ui ) {
					normal_slider_input.val( ui.value ).keyup();
				},
		        change: function( event, ui ){
		            control.setting.set( ui.value );
		        }
			} );

			// Update the slider when the number value change
			jQuery( 'input.normal-input' ).on( 'change keyup paste', function() {
				$this 			= jQuery( this );
				val 			= $this.val();
				slider_input 	= $this.parent().prev( '.xenial-slider.normal-slider' );

				slider_input.slider( 'value', val );
			} );

			control.container.on( 'change keyup paste', '.normal input', function() {
				control.setting.set( jQuery( this ).val() );
			} );
		}
	}
});