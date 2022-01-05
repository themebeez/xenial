wp.customize.controlConstructor['xenial-box-border'] = wp.customize.Control.extend({

	ready: function() {

		"use strict";

		var control = this;

		var settingID = control.setting.id;

		var controlContainer = control.container;

		var controlContainerEle = controlContainer[0];

		var responsiveEle = controlContainerEle.querySelector( '#xenial-box-border-responsive-' + settingID );
		
		var savedEle = controlContainerEle.querySelector( '#' + settingID + '-box-border-value' );

		var responsiveEleVal = responsiveEle.value;

		var savedEleVal = savedEle.value;

		let settingSaveData = JSON.parse( savedEleVal ); 
		

		if ( settingSaveData == null ) {
			if ( responsiveEleVal == "true" ) {
				settingSaveData = {
					'expanded' : true,
					'desktop': {
						'border_style' : '',
						'border_widths' : {
							'unit': '',
							'top' : '',
							'right' : '', 
							'bottom' : '',
							'left' : '',
							'locked': false
						},
						'border_radius' : {
							'unit': '',
							'top_left' : '',
							'top_right' : '', 
							'bottom_left' : '',
							'bottom_right' : '',
							'locked': false
						},
						'border_colors' : {
							'top' : '',
							'right' : '', 
							'bottom' : '',
							'left' : '',
							'initial' : '',
							'hover' : '',
							'active' : ''
						}
					},
					'tablet': {
						'border_style' : '',
						'border_widths' : {
							'unit': '',
							'top' : '',
							'right' : '', 
							'bottom' : '',
							'left' : '',
							'locked': false
						},
						'border_radius' : {
							'unit': '',
							'top_left' : '',
							'top_right' : '', 
							'bottom_left' : '',
							'bottom_right' : '',
							'locked': false
						},
						'border_colors' : {
							'top' : '',
							'right' : '', 
							'bottom' : '',
							'left' : '',
							'initial' : '',
							'hover' : '',
							'active' : ''
						}
					},
					'mobile': {
						'border_style' : '',
						'border_widths' : {
							'unit': '',
							'top' : '',
							'right' : '', 
							'bottom' : '',
							'left' : '',
							'locked': false
						},
						'border_radius' : {
							'unit': '',
							'top_left' : '',
							'top_right' : '', 
							'bottom_left' : '',
							'bottom_right' : '',
							'locked': false
						},
						'border_colors' : {
							'top' : '',
							'right' : '', 
							'bottom' : '',
							'left' : '',
							'initial' : '',
							'hover' : '',
							'active' : ''
						}
					}
				}
			} else {
				settingSaveData = {
					'expanded' : true,
					'border_style' : '',
					'border_widths' : {
						'unit': '',
						'top' : '',
						'right' : '', 
						'bottom' : '',
						'left' : '',
						'locked': false
					},
					'border_radius' : {
						'unit': '',
						'top_left' : '',
						'top_right' : '', 
						'bottom_left' : '',
						'bottom_right' : '',
						'locked': false
					},
					'border_colors' : {
						'top' : '',
						'right' : '', 
						'bottom' : '',
						'left' : '',
						'initial' : '',
						'hover' : '',
						'active' : ''
					}
				}
			}
		}

		var borderControlsToggleEle = controlContainerEle.querySelector( '.box-border-controls-toggle-button' );
		borderControlsToggleEle.addEventListener( 'click', ( event ) => {
			let buttonValue = borderControlsToggleEle.value;
			if ( buttonValue == "false" ) {
				borderControlsToggleEle.value = "true";
				settingSaveData.expanded = true;
			} else {
				borderControlsToggleEle.value = "false";
				settingSaveData.expanded = false;
			}

			var borderControlsWrapperEle = controlContainerEle.querySelector( '.xenial-box-border-controls-wrapper' );
			borderControlsWrapperEle.classList.toggle('box-border-hidden');

			if ( responsiveEleVal == "true" ) {
				var switcherWrapperEle = controlContainerEle.querySelector( '.responsive-switchers' );
				switcherWrapperEle.classList.toggle('box-border-hidden');
			}			

			console.log( settingSaveData );

			xenialSaveControlsValue();
		} );

		var borderColorFieldEles = controlContainerEle.querySelectorAll( '.border-box-color-field' );

		[].forEach.call( borderColorFieldEles, ( borderColorFieldEle ) => {
			let colorInitWrapperEle = borderColorFieldEle.nextElementSibling;
			let colorInitWrapperEleID = colorInitWrapperEle.id;
			let currentEleParentNode = borderColorFieldEle.parentNode;
			let colorValue = colorInitWrapperEle.getAttribute("data-color");
			let colorPickerInit = Pickr.create({
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

			colorPickerInit.on( 'change', ( color, source, instance ) => {
				let currentColorPickerToggleButton = currentEleParentNode.querySelector('button.pcr-button');
				if ( color ) {
					var rgbaColorValue = color.toRGBA().toString(0);
					currentColorPickerToggleButton.style.setProperty( '--pcr-color', rgbaColorValue );
					borderColorFieldEle.value = rgbaColorValue;
					xenialBorderColorChange( borderColorFieldEle );
				}
			} );

			borderColorFieldEle.addEventListener( 'change', ( event ) => {
				if ( responsiveEleVal == "true" ) {
					let device = borderColorFieldEle.getAttribute("data-device");
					let value = borderColorFieldEle.value;
					let side = borderColorFieldEle.getAttribute("data-color");
					xenialSaveResponsiveBorderColorsData( device, side, value );
				} else {
					let value = borderColorFieldEle.value;
					let side = borderColorFieldEle.getAttribute("data-color");
					xenialSaveBorderColorsData( side, value );
				}
				console.log( settingSaveData );
			} );
		});

		let dropdownToggleButtonEles = controlContainerEle.querySelectorAll('.box-border-dropdown-toggle-button');
		[].forEach.call( dropdownToggleButtonEles, ( dropdownToggleButtonEle ) => {
			dropdownToggleButtonEle.addEventListener( 'click', (event) => {
				event.preventDefault();
				xenialToggleBorderDropdown( event.target );
			} );
		});

		let dropdownEles = controlContainerEle.querySelectorAll( '.box-border-dropdown' );
		[].forEach.call( dropdownEles, ( dropdownEle ) => {
			let dropdownButtonEles = dropdownEle.children;
			let dropdownToggleButtonEle = dropdownEle.previousElementSibling;
			[].forEach.call( dropdownButtonEles, ( dropdownButtonEle ) => {
				dropdownButtonEle.addEventListener( 'click', (event) => {
					let value = dropdownButtonEle.getAttribute('data-value');
					if ( value ) {
						xenialBorderDropdownChangeEvent( dropdownToggleButtonEle, dropdownEle, value );
					}
				} );
			});
		});


		let lockEles = controlContainerEle.querySelectorAll( '.box-button-input-lock' );
		[].forEach.call( lockEles, ( lockEle ) => {
			lockEle.addEventListener( 'click', ( event ) => {
				event.preventDefault();
				let lockButtonEle = event.target;				
				let borderAttribute = lockButtonEle.getAttribute("data-border");
				if ( responsiveEleVal == "true" ) {
					let borderAttribute = lockButtonEle.getAttribute("data-border");
					let deviceAttribute = lockButtonEle.getAttribute("data-device");
					let lockButtonValue = lockButtonEle.value;

					let changedValue;

					if ( lockButtonValue == "false" ) {
						changedValue = true;
					}

					if ( lockButtonValue == "true" ) {
						changedValue = false;
					}

					lockButtonEle.value = changedValue;

					switch ( borderAttribute ) {
						case "width" :
							xenialSaveResponsiveBorderWidthLockData( deviceAttribute, changedValue );
							break;
						case "radius" :
							xenialSaveResponsiveBorderRadiusLockData( deviceAttribute, changedValue );
							break;
						default :
							break;
					}
				} else {
					let lockButtonValue = lockButtonEle.value;
					let borderAttribute = lockButtonEle.getAttribute("data-border");

					let changedValue;

					if ( lockButtonValue == "false" ) {
						changedValue = true;
					}

					if ( lockButtonValue == "true" ) {
						changedValue = false;
					}

					lockButtonEle.value = changedValue;

					switch( borderAttribute ) {
						case "width":
							settingSaveData.border_widths.locked = changedValue;
							break;
						case "radius" :
							settingSaveData.border_radius.locked = changedValue;
							break;
						default :
							break;
					}
				}
				console.log( settingSaveData );
				lockEle.classList.toggle('locked');
			} );
		} );


		let borderInputFieldEles = controlContainerEle.querySelectorAll( '.box-border-input-field' );
		[].forEach.call( borderInputFieldEles, ( borderInputFieldEle ) => {
			borderInputFieldEle.addEventListener( 'change', ( event ) => {
				let borderInputFieldEleVal = event.target.value;
				let isBorderInputFieldsLocked = xenialCheckIsInputFieldsLocked( event.target );
				if ( isBorderInputFieldsLocked ) {
					xenialUpdateAllLockedBorderInputFields( event.target, borderInputFieldEleVal );
					console.log( settingSaveData );
				} else {
					if ( responsiveEleVal == "true" ) {
						let borderAttribute = borderInputFieldEle.getAttribute("data-border");
						let deviceAttribute = borderInputFieldEle.getAttribute("data-device");
						let sideAttribute = borderInputFieldEle.getAttribute("data-side");
						let value = borderInputFieldEle.value;

						switch ( borderAttribute ) {
							case "width" :
								xenialSaveResponsiveBorderWidthsData( deviceAttribute, sideAttribute, value );
								break;
							case "radius" :
								xenialSaveResponsiveBorderRadiusData( deviceAttribute, sideAttribute, value );
								break;
							default :
								break;
						}
					} else {
						let borderAttribute = event.target.getAttribute("data-border");
						let sideAttribute = event.target.getAttribute("data-side");
						let value = event.target.value;

						switch ( borderAttribute ) {
							case "width" :
								xenialSaveBorderWidthsData( sideAttribute, value );
								break;
							case "radius" :
								xenialSaveBorderRadiusData( sideAttribute, value );
								break;
							default :
								break;
						}
					}
					console.log( settingSaveData );
				}
			} );

			borderInputFieldEle.addEventListener( 'keyup', ( event ) => {
				let borderInputFieldEleVal = event.target.value;
				let isBorderInputFieldsLocked = xenialCheckIsInputFieldsLocked( event.target );
				if ( isBorderInputFieldsLocked ) {
					xenialUpdateAllLockedBorderInputFields( event.target, borderInputFieldEleVal );
					console.log( settingSaveData );
				} else {
					if ( responsiveEleVal == "true" ) {
						let borderAttribute = borderInputFieldEle.getAttribute("data-border");
						let deviceAttribute = borderInputFieldEle.getAttribute("data-device");
						let sideAttribute = borderInputFieldEle.getAttribute("data-side");
						let value = borderInputFieldEle.value;

						switch ( borderAttribute ) {
							case "width" :
								xenialSaveResponsiveBorderWidthsData( deviceAttribute, sideAttribute, value );
								break;
							case "radius" :
								xenialSaveResponsiveBorderRadiusData( deviceAttribute, sideAttribute, value );
								break;
							default :
								break;
						}
					} else {
						let borderAttribute = event.target.getAttribute("data-border");
						let sideAttribute = event.target.getAttribute("data-side");
						let value = event.target.value;

						switch ( borderAttribute ) {
							case "width" :
								xenialSaveBorderWidthsData( sideAttribute, value );
								break;
							case "radius" :
								xenialSaveBorderRadiusData( sideAttribute, value );
								break;
							default :
								break;
						}
					}
					console.log( settingSaveData );
				}
			} );
		} );


		// let colorInputFieldEles = controlContainerEle.querySelectorAll( '.' )

		function xenialCheckIsInputFieldsLocked( inputFieldEle ) {
			let fieldsWrapperEle = inputFieldEle.parentNode.parentNode;
			let lockButtonWrapperEle = fieldsWrapperEle.nextElementSibling;
			let lockButtonEle = lockButtonWrapperEle.querySelector('.box-button-input-lock');
			if ( lockButtonEle.classList.contains('locked') ) {
				return true;
			} else {
				return false;
			}
		}

		function xenialUpdateAllLockedBorderInputFields( inputFieldEle, value ) {
			let fieldsWrapperEle = inputFieldEle.parentNode.parentNode;
			let borderInputFieldEles = fieldsWrapperEle.querySelectorAll( '.box-border-input-field' );
			[].forEach.call( borderInputFieldEles, ( borderInputFieldEle ) => {
				borderInputFieldEle.value = value;
				if ( responsiveEleVal == "true" ) {
					let borderAttribute = borderInputFieldEle.getAttribute("data-border");
					let deviceAttribute = borderInputFieldEle.getAttribute("data-device");
					let sideAttribute = borderInputFieldEle.getAttribute("data-side");

					switch ( borderAttribute ) {
						case "width" :
							xenialSaveResponsiveBorderWidthsData( deviceAttribute, sideAttribute, value );
							break;
						case "radius" :
							xenialSaveResponsiveBorderRadiusData( deviceAttribute, sideAttribute, value );
							break;
						default :
							break;
					}
				} else {
					let borderAttribute = borderInputFieldEle.getAttribute("data-border");
					let sideAttribute = borderInputFieldEle.getAttribute("data-side");

					switch ( borderAttribute ) {
						case "width" :
							xenialSaveBorderWidthsData( sideAttribute, value );
							break;
						case "radius" :
							xenialSaveBorderRadiusData( sideAttribute, value );
							break;
						default :
							break;
					}
				}
			} );
		}

		function xenialBorderDropdownChangeEvent( buttonEle, dropdownEle, value ) {

			xenialBorderToggleButtonUpdate( buttonEle, value );

			xenialBorderDropdownUpdate( dropdownEle, value );

			xenialBeforeBorderStyleDataSave( buttonEle, value );

			console.log( settingSaveData );
		}


		function xenialToggleBorderDropdown( buttonEle ) {

			let dropdownEle = buttonEle.nextElementSibling;
			dropdownEle.classList.toggle('dropdown-open');
		}

		function xenialBorderToggleButtonUpdate( buttonEle, value ) {

			buttonEle.value = value;
			let spanChildren = buttonEle.children;
			[].forEach.call( spanChildren, ( spanChild ) => {
				if ( spanChild.getAttribute('data-value') == value ) {
					spanChild.classList.add('active');
				} else {
					spanChild.classList.remove('active');
				}
			});
		}

		function xenialBorderDropdownUpdate( dropdownEle, value ) {

			let buttonChildren = dropdownEle.children;
			[].forEach.call( buttonChildren, ( buttonChild ) => {
				if ( buttonChild.getAttribute('data-value') == value ) {
					buttonChild.classList.add('active');
				} else {
					buttonChild.classList.remove('active');
				};
			});

			dropdownEle.classList.toggle( 'dropdown-open' );
		}


		function xenialBorderControlsToggleOnStyleChange( element, value ) {
			let parentLiEle = element.parentNode.parentNode;
			let parentUlEle = element.parentNode.parentNode.parentNode;
			let ulChildrenEle = parentUlEle.children;
			if ( value == 'none' ) {
				[].forEach.call( ulChildrenEle, ( liEle ) => {
					if ( liEle.id != parentLiEle.id ) {
						liEle.classList.add( 'box-border-hidden' );
					}
				} );
			} else {
				[].forEach.call( ulChildrenEle, ( liEle ) => {
					if ( liEle.id != parentLiEle.id ) {
						liEle.classList.remove( 'box-border-hidden' );
					}
				} );
			}
		}

		/*
		 * Custom event for when border color is changed.
		 *
		 */
		function xenialBorderColorChange( element ) {
			let changeEvent = new Event( 'change' );
			element.dispatchEvent( changeEvent );
		}

		function xenialBeforeBorderStyleDataSave( element, value ) {

			if ( responsiveEleVal == "true" ) {

				let dropdownAttribute = element.getAttribute("data-dropdown");
				let deviceAttribute = element.getAttribute("data-device");
				
				switch ( dropdownAttribute ) {
					case "border-style" :
						xenialSaveResponsiveBorderStyleData( deviceAttribute, value );
						break;
					case "border-width-unit" :
						xenialSaveResponsiveBorderWidthUnitData( deviceAttribute, value );
						break;
					case "border-radius-unit" :
						xenialSaveResponsiveBorderRadiusUnitData( deviceAttribute, value );
						break;
					default :
						break;
				}
			} else {
				let dropdownAttribute = element.getAttribute("data-dropdown");
				
				switch ( dropdownAttribute ) {
					case "border-style" :
						settingSaveData.border_style = value;
						break;
					case "border-width-unit" :
						settingSaveData.border_widths.unit = value;
						break;
					case "border-radius-unit" :
						settingSaveData.border_radius.unit = value;
						break;
					default :
						break;
				}
				xenialSaveControlsValue();
			}

			xenialBorderControlsToggleOnStyleChange( element, value );
		}

		function xenialSaveResponsiveBorderStyleData( device, value ) {

			switch ( device ) {
				case "desktop" :
					settingSaveData.desktop.border_style = value;
					break;
				case "tablet" :
					settingSaveData.tablet.border_style = value;
					break;
				case "mobile" :
					settingSaveData.mobile.border_style = value;
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveResponsiveBorderWidthUnitData( device, value ) {
			
			switch ( device ) {
				case "desktop" :
					settingSaveData.desktop.border_widths.unit = value;
					break;
				case "tablet" :
					settingSaveData.tablet.border_widths.unit = value;
					break;
				case "mobile" :
					settingSaveData.mobile.border_widths.unit = value;
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveResponsiveBorderRadiusUnitData( device, value ) {
			
			switch ( device ) {
				case "desktop" :
					settingSaveData.desktop.border_radius.unit = value;
					break;
				case "tablet" :
					settingSaveData.tablet.border_radius.unit = value;
					break;
				case "mobile" :
					settingSaveData.mobile.border_radius.unit = value;
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveResponsiveBorderColorsData( device, side, value ) {

			switch ( device ) {
				case "desktop" :
					switch ( side ) {
						case "top" :
							settingSaveData.desktop.border_colors.top = value;
							break;
						case "right" :
							settingSaveData.desktop.border_colors.right = value;
							break;
						case "bottom" :
							settingSaveData.desktop.border_colors.bottom = value;
							break;
						case "left" :
							settingSaveData.desktop.border_colors.left = value;
							break;
						case "initial" :
							settingSaveData.desktop.border_colors.initial = value;
							break;
						case "hover" :
							settingSaveData.desktop.border_colors.hover = value;
							break;
						case "active" :
							settingSaveData.desktop.border_colors.active = value;
							break;
						default :
							break;
					}
					break;
				case "tablet" :
					switch ( side ) {
						case "top" :
							settingSaveData.tablet.border_colors.top = value;
							break;
						case "right" :
							settingSaveData.tablet.border_colors.right = value;
							break;
						case "bottom" :
							settingSaveData.tablet.border_colors.bottom = value;
							break;
						case "left" :
							settingSaveData.tablet.border_colors.left = value;
							break;
						case "initial" :
							settingSaveData.tablet.border_colors.initial = value;
							break;
						case "hover" :
							settingSaveData.tablet.border_colors.hover = value;
							break;
						case "active" :
							settingSaveData.tablet.border_colors.active = value;
							break;
						default :
							break;
					}
					break;
				case "mobile" :
					switch ( side ) {
						case "top" :
							settingSaveData.mobile.border_colors.top = value;
							break;
						case "right" :
							settingSaveData.mobile.border_colors.right = value;
							break;
						case "bottom" :
							settingSaveData.mobile.border_colors.bottom = value;
							break;
						case "left" :
							settingSaveData.mobile.border_colors.left = value;
							break;
						case "initial" :
							settingSaveData.mobile.border_colors.initial = value;
							break;
						case "hover" :
							settingSaveData.mobile.border_colors.hover = value;
							break;
						case "active" :
							settingSaveData.mobile.border_colors.active = value;
							break;
						default :
							break;
					}
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveResponsiveBorderWidthsData( device, side, value ) {
			switch ( device ) {
				case "desktop" :
					switch ( side ) {
						case "top" :
							settingSaveData.desktop.border_widths.top = value;
							break;
						case "right" :
							settingSaveData.desktop.border_widths.right = value;
							break;
						case "bottom" :
							settingSaveData.desktop.border_widths.bottom = value;
							break;
						case "left" :
							settingSaveData.desktop.border_widths.left = value;
							break;
						default :
							break;
					}
					break;
				case "tablet" :
					switch ( side ) {
						case "top" :
							settingSaveData.tablet.border_widths.top = value;
							break;
						case "right" :
							settingSaveData.tablet.border_widths.right = value;
							break;
						case "bottom" :
							settingSaveData.tablet.border_widths.bottom = value;
							break;
						case "left" :
							settingSaveData.tablet.border_widths.left = value;
							break;
						default :
							break;
					}
					break;
				case "mobile" :
					switch ( side ) {
						case "top" :
							settingSaveData.mobile.border_widths.top = value;
							break;
						case "right" :
							settingSaveData.mobile.border_widths.right = value;
							break;
						case "bottom" :
							settingSaveData.mobile.border_widths.bottom = value;
							break;
						case "left" :
							settingSaveData.mobile.border_widths.left = value;
							break;
						default :
							break;
					}
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveResponsiveBorderRadiusData( device, side, value ) {

			switch ( device ) {
				case "desktop" :
					switch ( side ) {
						case "top_left" :
							settingSaveData.desktop.border_radius.top_left = value;
							break;
						case "top_right" :
							settingSaveData.desktop.border_radius.top_right = value;
							break;
						case "bottom_left" :
							settingSaveData.desktop.border_radius.bottom_left = value;
							break;
						case "bottom_right" :
							settingSaveData.desktop.border_radius.bottom_right = value;
							break;
						default :
							break;
					}
					break;
				case "tablet" :
					switch ( side ) {
						case "top_left" :
							settingSaveData.tablet.border_radius.top_left = value;
							break;
						case "top_right" :
							settingSaveData.tablet.border_radius.top_right = value;
							break;
						case "bottom_left" :
							settingSaveData.tablet.border_radius.bottom_left = value;
							break;
						case "bottom_right" :
							settingSaveData.tablet.border_radius.bottom_right = value;
							break;
						default :
							break;
					}
					break;
				case "mobile" :
					switch ( side ) {
						case "top_left" :
							settingSaveData.mobile.border_radius.top_left = value;
							break;
						case "top_right" :
							settingSaveData.mobile.border_radius.top_right = value;
							break;
						case "bottom_left" :
							settingSaveData.mobile.border_radius.bottom_left = value;
							break;
						case "bottom_right" :
							settingSaveData.mobile.border_radius.bottom_right = value;
							break;
						default :
							break;
					}
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveBorderRadiusData( side, value ) {
			switch ( side ) {
				case "top_left" :
					settingSaveData.border_radius.top_left = value;
					break;
				case "top_right" :
					settingSaveData.border_radius.top_right = value;
					break;
				case "bottom_left" :
					settingSaveData.border_radius.bottom_left = value;
					break;
				case "bottom_right" :
					settingSaveData.border_radius.bottom_right = value;
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveBorderWidthsData( side, value ) {
			switch ( side ) {
				case "top" :
					settingSaveData.border_widths.top = value;
					break;
				case "right" :
					settingSaveData.border_widths.right = value;
					break;
				case "bottom" :
					settingSaveData.border_widths.bottom = value;
					break;
				case "left" :
					settingSaveData.border_widths.left = value;
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveBorderColorsData( side, value ) {
			switch ( side ) {
				case "top" :
					settingSaveData.border_colors.top = value;
					break;
				case "right" :
					settingSaveData.border_colors.right = value;
					break;
				case "bottom" :
					settingSaveData.border_colors.bottom = value;
					break;
				case "left" :
					settingSaveData.border_colors.left = value;
					break;
				case "initial" :
					settingSaveData.border_colors.initial = value;
					break;
				case "hover" :
					settingSaveData.border_colors.hover = value;
					break;
				case "active" :
					settingSaveData.border_colors.active = value;
					break;
				default :
					break;
			}
			xenialSaveControlsValue();
		}

		function xenialSaveResponsiveBorderWidthLockData( device, value ) {

			switch( device ) {
				case "desktop" :
					settingSaveData.desktop.border_widths.locked = value;
					break;
				case "tablet" :
					settingSaveData.tablet.border_widths.locked = value;
					break;
				case "mobile" :
					settingSaveData.mobile.border_widths.locked = value;
					break;
				default :
					break;
			}
		}


		function xenialSaveResponsiveBorderRadiusLockData( device, value ) {

			switch( device ) {
				case "desktop" :
					settingSaveData.desktop.border_radius.locked = value;
					break;
				case "tablet" :
					settingSaveData.tablet.border_radius.locked = value;
					break;
				case "mobile" :
					settingSaveData.mobile.border_radius.locked = value;
					break;
				default :
					break;
			}
		}


		function xenialSaveControlsValue() {
			let settingSaveDataValue = JSON.stringify( settingSaveData );
			control.setting.set( settingSaveDataValue );
		}
	}
});