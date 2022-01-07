wp.customize.controlConstructor['xenial-color-picker'] = wp.customize.Control.extend({

	ready: function() {

		"use strict";

		var settingValue, stringifySettingValue;

		var control = this;

		var controlContainer = control.container;

		var controlContainerEle = controlContainer[0];

		var settingID = control.setting.id;

		var colorPickersEle = control.container.find( '.xenial-picker' );

		var responsiveEle = controlContainerEle.querySelector( "#xenial-color-picker-responsive-" + settingID );

		var responsiveEleVal = responsiveEle.value;

		if ( responsiveEleVal == "true" ) {
			settingValue = {
				desktop: {
					initial: '',
					link: '',
					hover: '',
					active: ''
				},
				tablet: {
					initial: '',
					link: '',
					hover: '',
					active: ''
				},
				mobile: {
					initial: '',
					link: '',
					hover: '',
					active: ''
				}				
			};
		} else {
			settingValue = {
				initial: '',
				link: '',
				hover: '',
				active: ''
			};
		}

		var colorPickerSettingEle = control.container.find('input[name="xenial-color-picker-setting-input"]');

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
					if ( responsiveEleVal == "true" ) {
						xenialSaveResponsiveColors();
					} else {
						xenialSaveNormalColors();
					}
				}
			} );
		} );

		function xenialSaveNormalColors() {
			var initialColorInput = control.container.find( 'input[name="initial-color-'+ settingID +'"]' );
			var linkColorInput = control.container.find( 'input[name="link-color-'+ settingID +'"]' );
			var hoverColorInput = control.container.find( 'input[name="hover-color-'+ settingID +'"]' );
			var activeColorInput = control.container.find( 'input[name="active-color-'+ settingID +'"]' );

			if ( initialColorInput.length >= 1 && initialColorInput.val() ) {
				settingValue.initial = initialColorInput.val();
			}

			if ( linkColorInput.length >= 1 && linkColorInput.val() ) {
				settingValue.link = linkColorInput.val();
			}

			if ( hoverColorInput.length >= 1 && hoverColorInput.val() ) {
				settingValue.hover = hoverColorInput.val();
			}

			if ( activeColorInput.length >= 1 && activeColorInput.val() ) {
				settingValue.active = activeColorInput.val();
			}

			stringifySettingValue = JSON.stringify( settingValue );
			control.setting.set( stringifySettingValue );
		}

		function xenialSaveResponsiveColors() {
			
			var desktopInitialColorInput = control.container.find( 'input[name="desktop-initial-color-'+ settingID +'"]' );
			var desktopLinkColorInput = control.container.find( 'input[name="desktop-link-color-'+ settingID +'"]' );
			var desktopHoverColorInput = control.container.find( 'input[name="desktop-hover-color-'+ settingID +'"]' );
			var desktopActiveColorInput = control.container.find( 'input[name="desktop-active-color-'+ settingID +'"]' );
			var tabletInitialColorInput = control.container.find( 'input[name="tablet-initial-color-'+ settingID +'"]' );
			var tabletLinkColorInput = control.container.find( 'input[name="tablet-link-color-'+ settingID +'"]' );
			var tabletHoverColorInput = control.container.find( 'input[name="tablet-hover-color-'+ settingID +'"]' );
			var tabletActiveColorInput = control.container.find( 'input[name="tablet-active-color-'+ settingID +'"]' );
			var mobileInitialColorInput = control.container.find( 'input[name="mobile-initial-color-'+ settingID +'"]' );
			var mobileLinkColorInput = control.container.find( 'input[name="mobile-link-color-'+ settingID +'"]' );
			var mobileHoverColorInput = control.container.find( 'input[name="mobile-hover-color-'+ settingID +'"]' );
			var mobileActiveColorInput = control.container.find( 'input[name="mobile-active-color-'+ settingID +'"]' );

			if ( desktopInitialColorInput.length >= 1 && desktopInitialColorInput.val() ) {
				settingValue.desktop.initial = desktopInitialColorInput.val();
			}

			if ( desktopLinkColorInput.length >= 1 && desktopLinkColorInput.val() ) {
				settingValue.desktop.link = desktopLinkColorInput.val();
			}

			if ( desktopHoverColorInput.length >= 1 && desktopHoverColorInput.val() ) {
				settingValue.desktop.hover = desktopHoverColorInput.val();
			}

			if ( desktopActiveColorInput.length >= 1 && desktopActiveColorInput.val() ) {
				settingValue.desktop.active = desktopActiveColorInput.val();
			}

			if ( tabletInitialColorInput.length >= 1 && tabletInitialColorInput.val() ) {
				settingValue.tablet.initial = tabletInitialColorInput.val();
			}

			if ( tabletLinkColorInput.length >= 1 && tabletLinkColorInput.val() ) {
				settingValue.tablet.link = tabletLinkColorInput.val();
			}

			if ( tabletHoverColorInput.length >= 1 && tabletHoverColorInput.val() ) {
				settingValue.tablet.hover = tabletHoverColorInput.val();
			}

			if ( tabletActiveColorInput.length >= 1 && tabletActiveColorInput.val() ) {
				settingValue.tablet.active = tabletActiveColorInput.val();
			}

			if ( mobileInitialColorInput.length >= 1 && mobileInitialColorInput.val() ) {
				settingValue.mobile.initial = mobileInitialColorInput.val();
			}

			if ( mobileLinkColorInput.length >= 1 && mobileLinkColorInput.val() ) {
				settingValue.mobile.link = mobileLinkColorInput.val();
			}

			if ( mobileHoverColorInput.length >= 1 && mobileHoverColorInput.val() ) {
				settingValue.mobile.hover = mobileHoverColorInput.val();
			}

			if ( mobileActiveColorInput.length >= 1 && mobileActiveColorInput.val() ) {
				settingValue.mobile.active = mobileActiveColorInput.val();
			}

			stringifySettingValue = JSON.stringify( settingValue );
			control.setting.set( stringifySettingValue );
		}
	}
});