wp.customize.controlConstructor['xenial-color-picker'] = wp.customize.Control.extend({

	ready: function() {

		"use strict";

		var control = this;

		var controlContainer = control.container;

		var controlContainerEle = controlContainer[0];

		var settingID = control.setting.id;

		var colorSettingEle = controlContainerEle.querySelector( '#xenial-color-picker-setting-input-' + settingID );

		var jsonSettingValue = JSON.parse( colorSettingEle.value );

		var colorFields = controlContainerEle.querySelectorAll( '.xe-color-picker' );

		[].forEach.call( colorFields, ( colorField ) => {
			let colorInitWrapperEle = colorField.nextElementSibling;
			let colorInitWrapperEleID = colorInitWrapperEle.id;
			let currentEleParentNode = colorField.parentNode;
			let colorValue = colorInitWrapperEle.getAttribute("data-color");
			const xeColorPickerInit = Pickr.create({
				el: '#'+colorInitWrapperEleID,
				container: '#' + controlContainerEle.id,
				theme: 'nano',
				default: colorValue,
				components: {
					preview: true,
					opacity: true,
					hue: true,
					interaction: {
						rgba: true,
						input: true,
						clear: true,
						save: false
					}
				}
			});

			xeColorPickerInit.on( 'change', ( color, source, instance ) => {
				let currentColorPickerToggleButton = currentEleParentNode.querySelector('button.pcr-button');
				if ( color ) {
					var rgbaColorValue = color.toRGBA().toString(0);
					currentColorPickerToggleButton.style.setProperty( '--pcr-color', rgbaColorValue );
					colorField.value = rgbaColorValue;

					let device = colorField.getAttribute( 'data-device' );

					let state = colorField.getAttribute( 'data-state' );

					xenialSaveColor( device, state, rgbaColorValue );
				}
			} );
		} );

		function xenialSaveColor( device, state, rgbaColorValue ) {

			if ( device != 'normal' ) {
				jsonSettingValue[device][state] = rgbaColorValue;
			} else {
				jsonSettingValue[state] = rgbaColorValue;
			}

			let stringifySettingValue = JSON.stringify( jsonSettingValue );
			control.setting.set( stringifySettingValue );
		}
	}
});