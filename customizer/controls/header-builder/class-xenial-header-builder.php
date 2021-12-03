<?php 


if ( ! class_exists( 'Xenial_Header_Builder' ) ) {

	/**
	 * 
	 */
	class Xenial_Header_Builder {

		public function run() {

			add_action( 'customize_controls_print_footer_scripts', array( $this, 'display_header_builder' ) );
			add_action( 'customize_controls_print_footer_scripts', array( $this, 'header_builder_script' ) );
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_scripts' ), 15 );
		}

		public function enqueue_scripts() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/header-builder/';

			wp_enqueue_style( 
				XENIAL_THEME_SLUG . '-header-builder', 
				$asset_uri . 
				'header-builder.css' 
			);
		}

		public function get_header_element_template( $id, $element ) {
			?>
			<div id="header-element-<?php echo $id; ?>" class="button button-primary xenial-header-element-button" draggable="true" data-element="<?php echo $id; ?>">
				<span class="xenial-header-element-icon"><?php echo $element['icon']; ?></span>
				<a class="xenial-header-element-label" data-section="<?php echo $element['section']; ?>"><?php echo $element['label']; ?></a>
				<a href="#" class="xenial-header-element-remove">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>
				</a>
			</div>
			<?php
		}

		public function get_header_row_settings_template( $row_id ) {
			?>
			<a href="#" class="xenial-header-row-setting-link" data-section="<?php echo $row_id; ?>">
				<span class="xenial-header-row-setting-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M2.213 14.06a9.945 9.945 0 0 1 0-4.12c1.11.13 2.08-.237 2.396-1.001.317-.765-.108-1.71-.986-2.403a9.945 9.945 0 0 1 2.913-2.913c.692.877 1.638 1.303 2.403.986.765-.317 1.132-1.286 1.001-2.396a9.945 9.945 0 0 1 4.12 0c-.13 1.11.237 2.08 1.001 2.396.765.317 1.71-.108 2.403-.986a9.945 9.945 0 0 1 2.913 2.913c-.877.692-1.303 1.638-.986 2.403.317.765 1.286 1.132 2.396 1.001a9.945 9.945 0 0 1 0 4.12c-1.11-.13-2.08.237-2.396 1.001-.317.765.108 1.71.986 2.403a9.945 9.945 0 0 1-2.913 2.913c-.692-.877-1.638-1.303-2.403-.986-.765.317-1.132 1.286-1.001 2.396a9.945 9.945 0 0 1-4.12 0c.13-1.11-.237-2.08-1.001-2.396-.765-.317-1.71.108-2.403.986a9.945 9.945 0 0 1-2.913-2.913c.877-.692 1.303-1.638.986-2.403-.317-.765-1.286-1.132-2.396-1.001zM4 12.21c1.1.305 2.007 1.002 2.457 2.086.449 1.085.3 2.22-.262 3.212.096.102.195.201.297.297.993-.562 2.127-.71 3.212-.262 1.084.45 1.781 1.357 2.086 2.457.14.004.28.004.42 0 .305-1.1 1.002-2.007 2.086-2.457 1.085-.449 2.22-.3 3.212.262.102-.096.201-.195.297-.297-.562-.993-.71-2.127-.262-3.212.45-1.084 1.357-1.781 2.457-2.086.004-.14.004-.28 0-.42-1.1-.305-2.007-1.002-2.457-2.086-.449-1.085-.3-2.22.262-3.212a7.935 7.935 0 0 0-.297-.297c-.993.562-2.127.71-3.212.262C13.212 6.007 12.515 5.1 12.21 4a7.935 7.935 0 0 0-.42 0c-.305 1.1-1.002 2.007-2.086 2.457-1.085.449-2.22.3-3.212-.262-.102.096-.201.195-.297.297.562.993.71 2.127.262 3.212C6.007 10.788 5.1 11.485 4 11.79c-.004.14-.004.28 0 .42zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
				</span>
			</a>
			<?php
		}
		
		public function display_header_builder() {

			$headerElements = get_theme_mod( 'theme_header_elements' );
			$headerElements = json_decode( $headerElements, true ); 

			$headerElementsChoices = xenial_get_header_elements();
			?>
			<div id="xenial-header-builder" class="xenial-hide-header-builder">
				<div class="xenial-header-builder-device-tab-wrapper">
					<button id="xenial-header-builder-desktop-tab-button" class="button button-primary xenial-header-builder-button"><span class="dashicons dashicons-desktop"></span>&nbsp;<span class="xeninal-header-builder-button-label"><?php echo esc_html__( 'Desktop', 'xenial' ); ?></span></button>
					<button id="xenial-header-builder-mobile-tab-button" class="button button-primary xenial-header-builder-button"><span class="dashicons dashicons-smartphone"></span>&nbsp;<span class="xeninal-header-builder-button-label"><?php echo esc_html__( 'Table/Mobile', 'xenial' ); ?></span></button>
				</div>
				<div class="xenial-header-builder-button-wrapper">
					<button id="xenial-header-builder-hide-button" class="button button-primary xenial-header-builder-button"><span class="dashicons dashicons-arrow-down-alt2"></span></button>
				</div>
				
				<div id="xenial-desktop-header-builder-inner" class="xenial-header-builder-inner">
					<div id="xenial-header-elements-selector-wrapper" class="xenial-header-elements-wrapper">
						<div class="xenial-header-elements-wrapper-inner">
							<?php 

							$selected_header_elements = array();

							foreach ( $headerElements as $positions ) {
								foreach ( $positions as $position ) {
									if ( $position ) {
										$selected_header_elements = array_merge( $selected_header_elements, $position );
									}
								}
							}
							?>
							<div id="xenial-header-elements-container" class="selected-elements-wrapper">
								<?php
								
								if ( $headerElementsChoices ) {
									foreach ( $headerElementsChoices as $key => $element ) {
										if ( ! in_array( $key, $selected_header_elements ) ) {
											$this->get_header_element_template( $key, $element );
										}
									}
								}
								?>
							</div>
						</div>
					</div>
					<div class="xenial-header-builder-row xenial-header-builder-top-row">
						<div class="xenial-header-builder-row-inner xenial-header-builder-top-row-inner">
							<?php $this->get_header_row_settings_template( 'xenial_top_header' ); ?>
							<div class="xenial-header-builder-col xenial-header-builder-top-col-1">
								<div id="xenial-top-left-header-elements-container" class="selected-elements-wrapper">
									<?php
									$topLeftElements = $headerElements['top']['left'];
									if ( $topLeftElements ) {
										foreach ( $topLeftElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-top-col-2">
								<div id="xenial-top-middle-header-elements-container" class="selected-elements-wrapper">
									<?php
									$topMiddleElements = $headerElements['top']['middle'];
									if ( $topMiddleElements ) {
										foreach ( $topMiddleElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-top-col-3">
								<div id="xenial-top-right-header-elements-container" class="selected-elements-wrapper">
									<?php
									$topRightElements = $headerElements['top']['right'];
									if ( $topRightElements ) {
										foreach ( $topRightElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="xenial-header-builder-row xenial-header-builder-middle-row">
						<div class="xenial-header-builder-row-inner xenial-header-builder-middle-row-inner">
							<?php $this->get_header_row_settings_template( 'xenial_middle_header' ); ?>
							<div class="xenial-header-builder-col xenial-header-builder-middle-col-1">
								<div id="xenial-middle-left-header-elements-container" class="selected-elements-wrapper">
									<?php
									$middleLeftElements = $headerElements['middle']['left'];
									if ( $middleLeftElements ) {
										foreach ( $middleLeftElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-middle-col-2">
								<div id="xenial-middle-middle-header-elements-container" class="selected-elements-wrapper">
									<?php
									$middleMiddleElements = $headerElements['middle']['middle'];
									if ( $middleMiddleElements ) {
										foreach ( $middleMiddleElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-middle-col-3">
								<div id="xenial-middle-right-header-elements-container" class="selected-elements-wrapper">
									<?php
									$middleRightElements = $headerElements['middle']['right'];
									if ( $middleRightElements ) {
										foreach ( $middleRightElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="xenial-header-builder-row xenial-header-builder-bottom-row">
						<div class="xenial-header-builder-row-inner xenial-header-builder-bottom-row-inner">
							<?php $this->get_header_row_settings_template( 'xenial_bottom_header' ); ?>
							<div class="xenial-header-builder-col xenial-header-builder-bottom-col-1">
								<div id="xenial-bottom-left-header-elements-container" class="selected-elements-wrapper">
									<?php
									$bottomLeftElements = $headerElements['bottom']['left'];
									if ( $bottomLeftElements ) {
										foreach ( $bottomLeftElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-tbottomop-col-2">
								<div id="xenial-bottom-middle-header-elements-container" class="selected-elements-wrapper">
									<?php
									$bottomMiddleElements = $headerElements['bottom']['middle'];
									if ( $bottomMiddleElements ) {
										foreach ( $bottomMiddleElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-bottom-col-3">
								<div id="xenial-bottom-right-header-elements-container" class="selected-elements-wrapper">
									<?php
									$bottomRightElements = $headerElements['bottom']['right'];
									if ( $bottomRightElements ) {
										foreach ( $bottomRightElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="xenial-mobile-header-builder-inner" class="xenial-header-builder-inner">
					<div id="xenial-header-elements-selector-wrapper" class="xenial-header-elements-wrapper">
						<div class="xenial-header-elements-wrapper-inner">
							<?php 

							$selected_header_elements = array();

							foreach ( $headerElements as $positions ) {
								foreach ( $positions as $position ) {
									if ( $position ) {
										$selected_header_elements = array_merge( $selected_header_elements, $position );
									}
								}
							}
							?>
							<div id="xenial-header-elements-container" class="selected-elements-wrapper">
								<?php
								
								if ( $headerElementsChoices ) {
									foreach ( $headerElementsChoices as $key => $element ) {
										if ( ! in_array( $key, $selected_header_elements ) ) {
											$this->get_header_element_template( $key, $element );
										}
									}
								}
								?>
							</div>
						</div>
					</div>
					<div class="xenial-header-builder-row xenial-header-builder-top-row">
						<div class="xenial-header-builder-row-inner xenial-header-builder-top-row-inner">
							<?php $this->get_header_row_settings_template( 'xenial_top_header' ); ?>
							<div class="xenial-header-builder-col xenial-header-builder-top-col-1">
								<div id="xenial-top-left-header-elements-container" class="selected-elements-wrapper">
									<?php
									$topLeftElements = $headerElements['top']['left'];
									if ( $topLeftElements ) {
										foreach ( $topLeftElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-top-col-2">
								<div id="xenial-top-middle-header-elements-container" class="selected-elements-wrapper">
									<?php
									$topMiddleElements = $headerElements['top']['middle'];
									if ( $topMiddleElements ) {
										foreach ( $topMiddleElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-top-col-3">
								<div id="xenial-top-right-header-elements-container" class="selected-elements-wrapper">
									<?php
									$topRightElements = $headerElements['top']['right'];
									if ( $topRightElements ) {
										foreach ( $topRightElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="xenial-header-builder-row xenial-header-builder-middle-row">
						<div class="xenial-header-builder-row-inner xenial-header-builder-middle-row-inner">
							<?php $this->get_header_row_settings_template( 'xenial_middle_header' ); ?>
							<div class="xenial-header-builder-col xenial-header-builder-middle-col-1">
								<div id="xenial-middle-left-header-elements-container" class="selected-elements-wrapper">
									<?php
									$middleLeftElements = $headerElements['middle']['left'];
									if ( $middleLeftElements ) {
										foreach ( $middleLeftElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-middle-col-2">
								<div id="xenial-middle-middle-header-elements-container" class="selected-elements-wrapper">
									<?php
									$middleMiddleElements = $headerElements['middle']['middle'];
									if ( $middleMiddleElements ) {
										foreach ( $middleMiddleElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-middle-col-3">
								<div id="xenial-middle-right-header-elements-container" class="selected-elements-wrapper">
									<?php
									$middleRightElements = $headerElements['middle']['right'];
									if ( $middleRightElements ) {
										foreach ( $middleRightElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="xenial-header-builder-row xenial-header-builder-bottom-row">
						<div class="xenial-header-builder-row-inner xenial-header-builder-bottom-row-inner">
							<?php $this->get_header_row_settings_template( 'xenial_bottom_header' ); ?>
							<div class="xenial-header-builder-col xenial-header-builder-bottom-col-1">
								<div id="xenial-bottom-left-header-elements-container" class="selected-elements-wrapper">
									<?php
									$bottomLeftElements = $headerElements['bottom']['left'];
									if ( $bottomLeftElements ) {
										foreach ( $bottomLeftElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-tbottomop-col-2">
								<div id="xenial-bottom-middle-header-elements-container" class="selected-elements-wrapper">
									<?php
									$bottomMiddleElements = $headerElements['bottom']['middle'];
									if ( $bottomMiddleElements ) {
										foreach ( $bottomMiddleElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-header-builder-col xenial-header-builder-bottom-col-3">
								<div id="xenial-bottom-right-header-elements-container" class="selected-elements-wrapper">
									<?php
									$bottomRightElements = $headerElements['bottom']['right'];
									if ( $bottomRightElements ) {
										foreach ( $bottomRightElements as $element ) {
											$getElement = $headerElementsChoices[ $element ];
											if ( $getElement ) {
												$this->get_header_element_template( $element, $getElement );
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<?php
		}

		public function header_builder_script() {
			?>
			<script type="text/javascript">

				(function($){

					jQuery(document).ready(function() {
						var headerPanelEle = jQuery('#accordion-panel-xenial_site_header_panel');
						headerPanelEle.on('click', function() {
							setTimeout(function(){
								var headerInnerH3Ele = headerPanelEle.find('h3');
								xenialToggleHeaderBuilder( headerInnerH3Ele );
							}, 300);
							
						});

						var customizeBackBtn = jQuery('.customize-panel-back');
						customizeBackBtn.on('click', function() {
							setTimeout(function(){
								var headerInnerH3Ele = headerPanelEle.find('h3');
								xenialToggleHeaderBuilder( headerInnerH3Ele );
							}, 300);
						});

						var headerBuilderToggleBtn = jQuery('#xenial-header-builder-hide-button');
						headerBuilderToggleBtn.on('click', function() {
							var headerBuilderInnerEle = jQuery('.xenial-header-builder-inner');
							headerBuilderInnerEle.toggleClass('xenial-hide-header-builder-inner');
							var headerBuilderToggleBtnIcon = jQuery(this).find('span');
							if ( headerBuilderToggleBtnIcon.hasClass('dashicons-arrow-up-alt2') ) {
								headerBuilderToggleBtnIcon.removeClass('dashicons-arrow-up-alt2').addClass('dashicons-arrow-down-alt2');
							} else {
								headerBuilderToggleBtnIcon.removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-up-alt2');
							}
						}); 


						var headerElementLinks = jQuery('.xenial-header-element-label');
						headerElementLinks.each(function(i,o){
							jQuery(this).on('click', function(event) {
								event.preventDefault();
								var parentEle = jQuery(this).parents('#xenial-header-elements-container');
								if ( parentEle.length == 0 ) {
									var sectionID = jQuery(this).attr('data-section');
									wp.customize.section(sectionID).focus();
								}
							});
						});
					});

					function xenialToggleHeaderBuilder( h3Ele ) {
						var headerBuilderEle = jQuery('#xenial-header-builder');
						if ( h3Ele.attr('tabindex') == '-1' ) {
							headerBuilderEle.removeClass('xenial-hide-header-builder');
						} else {
							headerBuilderEle.addClass('xenial-hide-header-builder');
						}
					}

				})(jQuery);

				


				let toBeSavedHeaderElements = {
					top: {
						left: null,
						middle: null,
						right: null
					},
					middle: {
						left: null,
						middle: null,
						right: null
					},
					bottom: {
						left: null,
						middle: null,
						right: null
					}
				};

				const headerElementsSetting = document.getElementById('_customize-input-theme_header_elements');

				const headerElements = document.querySelectorAll(".xenial-header-element-button");
				const dropZones = document.querySelectorAll(".selected-elements-wrapper");


				// const headerElementLinks = document.querySelectorAll('.xenial-header-element-label');

				// [].forEach.call( headerElementLinks, (headerElementLink) => { 
				// 	headerElementLink.addEventListener( 'click', (event) => {
				// 		event.preventDefault();
				// 		const sectionID = headerElementLink.getAttribute('data-section');
				// 		wp.customize.section(sectionID).focus();
				// 	});
				// });

				let draggedElement = null;

				[].forEach.call( headerElements, (headerElement) => {

					headerElement.addEventListener( 'dragstart', () => {
						draggedElement = headerElement;
						setTimeout(function(){
							headerElement.style.display = 'none';
						});
					} );
					headerElement.addEventListener( 'dragend', () => {
						setTimeout(function() {
							draggedElement.style.display = 'block';
							draggedElement = null;
						});
					} );

					
				} );



				[].forEach.call( dropZones, (dropZone) => {
					dropZone.addEventListener('dragenter', xenialHeaderDropZoneDragenter)
				    dropZone.addEventListener('dragover', xenialHeaderDropZoneDragover);
				    dropZone.addEventListener('dragleave', xenialHeaderDropZoneDragleave);
				    dropZone.addEventListener('drop', xenialHeaderDropZoneDrag);
				} );


				function xenialHeaderDropZoneDragenter(e) {
					e.preventDefault();
					e.target.classList.remove('dropzone-drag-over');
					e.target.classList.remove('dropzone-drag-leave');
					e.target.classList.add('dropzone-drag-enter');
				}

				function xenialHeaderDropZoneDragover(e) {
					e.preventDefault();
					e.target.classList.remove('dropzone-drag-enter');
					e.target.classList.remove('dropzone-drag-leave');
					e.target.classList.add('dropzone-drag-over');
				}

				function xenialHeaderDropZoneDragleave(e) {
					e.preventDefault();
					e.target.classList.remove('dropzone-drag-enter');
					e.target.classList.remove('dropzone-drag-over');
					e.target.classList.add('dropzone-drag-leave');
				}

				function xenialHeaderDropZoneDrag(e) {
					e.preventDefault();
					e.target.classList.remove('dropzone-drag-enter');
					e.target.classList.remove('dropzone-drag-over');
					e.target.classList.remove('dropzone-drag-leave');
					this.append(draggedElement);
					xenialSaveHeaderElements();
				}


				function xenialSaveHeaderElements() {

					let toBeSavedHeaderElements = {
						top: {
							left: null,
							middle: null,
							right: null
						},
						middle: {
							left: null,
							middle: null,
							right: null
						},
						left: {
							left: null,
							middle: null,
							right: null
						}
					};

					const headerElementsSetting = document.getElementById('_customize-input-theme_header_elements');

					const topheaderLeftElements = document.querySelectorAll('#xenial-top-left-header-elements-container .xenial-header-element-button');
					
					if ( topheaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( topheaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.top.left = elements;
						}
					}

					

					const topheaderMiddleElements = document.querySelectorAll('#xenial-top-middle-header-elements-container .xenial-header-element-button');
					if ( topheaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( topheaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.top.middle = elements;
						}
					}

					const topheadeRightElements = document.querySelectorAll('#xenial-top-right-header-elements-container .xenial-header-element-button');
					if ( topheadeRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( topheadeRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.top.right = elements;
						}
					}

					const middleheaderLeftElements = document.querySelectorAll('#xenial-middle-left-header-elements-container .xenial-header-element-button');
					if ( middleheaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( middleheaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.middle.left = elements;
						}
					}

					const middleheaderMiddleElements = document.querySelectorAll('#xenial-middle-middle-header-elements-container .xenial-header-element-button');
					if ( middleheaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( middleheaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.middle.middle = elements;
						}
					}

					const middleheadeRightElements = document.querySelectorAll('#xenial-middle-right-header-elements-container .xenial-header-element-button');
					if ( middleheadeRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( middleheadeRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.middle.right = elements;
						}
					}

					const bottomheaderLeftElements = document.querySelectorAll('#xenial-bottom-left-header-elements-container .xenial-header-element-button');
					if ( bottomheaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( bottomheaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.bottom.left = elements;
						}
					}

					const bottomheaderMiddleElements = document.querySelectorAll('#xenial-bottom-middle-header-elements-container .xenial-header-element-button');
					if ( bottomheaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( bottomheaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.bottom.middle = elements;
						}
					}

					const bottomheadeRightElements = document.querySelectorAll('#xenial-bottom-right-header-elements-container .xenial-header-element-button');
					if ( bottomheadeRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( bottomheadeRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.bottom.right = elements;
						}
					}

					headerElementsSetting.value = JSON.stringify(toBeSavedHeaderElements);
					headerElementsSetting.dispatchEvent(new Event('change'));					
				}


				const removeButtons = document.querySelectorAll('.xenial-header-element-remove');
				const headerElementsContainer = document.getElementById('xenial-header-elements-container');
				[].forEach.call( removeButtons, (element) => {
					element.addEventListener('click', (event) => {
						event.preventDefault();
						parentElement = element.parentNode;
						let parentElementClone = parentElement.cloneNode(true);
						headerElementsContainer.append(parentElement);
						parentElementClone.remove();
					});
				} );


				const headerRowSettingsLink = document.querySelectorAll('.xenial-header-row-setting-link');
				[].forEach.call( headerRowSettingsLink, (element) => {
					element.addEventListener('click', (event) => {
						const sectionID = element.getAttribute('data-section');
						wp.customize.section(sectionID).focus();
					});
				} );
			</script>
			<?php
		}
	}
}


$xenialHeaderBuilder = new Xenial_Header_Builder();

$xenialHeaderBuilder->run();