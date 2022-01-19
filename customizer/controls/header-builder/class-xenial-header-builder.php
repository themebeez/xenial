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

		public function get_header_element_template( $id, $element, $device ) {
			?>
			<div id="header-element-<?php echo $id; ?>" class="button button-primary xenial-header-element-button"  draggable="true" data-element="<?php echo $id; ?>">
				<span class="xenial-header-element-icon"><?php echo $element['icon']; ?></span>
				<a class="xenial-header-element-label" data-section="<?php echo $element['section']; ?>"><?php echo $element['label']; ?></a>
				<a href="#" class="xenial-header-element-remove" data-device="<?php echo $device; ?>">
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

			$headerElements = xenial_json_decode( xenial_get_option( 'theme_header_elements' ) );

			$desktop_header_elements = $headerElements['desktop']; 

			$mobile_header_elements = $headerElements['mobile']; 

			$desktop_header_elements_choices = xenial_get_desktop_header_elements();

			$mobile_header_elements_choices = xenial_get_mobile_header_elements();
			?>
			<div id="xenial-header-builder" class="xenial-hide-header-builder">
				<div class="xenial-header-builder-device-tab-wrapper">
					<div id="xenial-header-builder-responsive-switcher" class="responsive-switchers">
						<button id="xenial-header-builder-desktop-tab-button" class="button button-primary xenial-header-builder-button preview-desktop active" data-device="desktop">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 5v11h16V5H4zm-2-.993C2 3.451 2.455 3 2.992 3h18.016c.548 0 .992.449.992 1.007V18H2V4.007zM1 19h22v2H1v-2z" fill="rgba(255,255,255,1)"/></svg><span class="xeninal-header-builder-button-label"><?php echo esc_html__( 'Desktop', 'xenial' ); ?></span>
						</button>
						<button id="xenial-header-builder-mobile-tab-button" class="button button-primary xenial-header-builder-button preview-mobile" data-device="mobile">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4v16h10V4H7zM6 2h12a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm6 15a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="rgba(255,255,255,1)"/></svg><span class="xeninal-header-builder-button-label"><?php echo esc_html__( 'Table/Mobile', 'xenial' ); ?></span>
						</button>
					</div>
					<button id="xenial-header-builder-hide-button" class="button button-primary xenial-header-builder-button"><span class="dashicons dashicons-arrow-down-alt2"></span></button>
				</div>
				<div id="xenial-header-builder-inner" class="xenial-header-builder-inner">
					<div id="xenial-header-elements-selector-wrapper" class="xenial-header-elements-wrapper">
						<div class="xenial-header-elements-wrapper-inner">
							<?php 

							$desktop_header_selected_elements = array();
							if ( $desktop_header_elements ) {
								foreach ( $desktop_header_elements as $positions ) {
									if ( $positions ) {
										foreach ( $positions as $position ) {
											if ( $position ) {
												$desktop_header_selected_elements = array_merge( $desktop_header_selected_elements, $position );
											}
										}
									}
								}
							}

							$mobile_header_selected_elements = array();
							if ( $mobile_header_elements ) {
								foreach ( $mobile_header_elements as $positions ) {
									if ( $positions ) {
										foreach ( $positions as $position ) {
											if ( is_array( $position ) ) {
												$mobile_header_selected_elements = array_merge( $mobile_header_selected_elements, $position );
											} else {
												$mobile_header_selected_elements[] = $position;
											}
										}
									}
								}
							}
							?>
							<div id="xenial-header-elements-container" class="selected-elements-wrapper">
								<div id="xenial-desktop-header-elements" class="xenial-header-elements xenial-header-elements-active">
									<?php								
									if ( $desktop_header_elements_choices ) {
										foreach ( $desktop_header_elements_choices as $key => $element ) {
											if ( ! in_array( $key, $desktop_header_selected_elements ) ) {
												$this->get_header_element_template( $key, $element, 'desktop' );
											}
										}
									}
									?>
								</div>
								<div id="xenial-mobile-header-elements" class="xenial-header-elements">
									<?php
									if ( $mobile_header_elements_choices ) {
										foreach ( $mobile_header_elements_choices as $key => $element ) {
											if ( ! in_array( $key, $mobile_header_selected_elements ) ) {
												$this->get_header_element_template( $key, $element, 'mobile' );
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div id="xenial-desktop-header-builder-section" class="xenial-header-builder-section xenial-header-builder-section-active">
						<div class="xenial-header-builder-row xenial-header-builder-top-row">
							<div class="xenial-header-builder-row-inner xenial-header-builder-top-row-inner">
								<?php $this->get_header_row_settings_template( 'xenial_top_header' ); ?>
								<div class="xenial-header-builder-col xenial-header-builder-top-col-1">
									<div id="xenial-desktop-top-left" class="selected-elements-wrapper">
										<?php
										$desktop_header_top_left_elements = $desktop_header_elements['top']['left'];
										if ( $desktop_header_top_left_elements ) {
											foreach ( $desktop_header_top_left_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
												}
											}
										}
										?>
									</div>
								</div>
								<div class="xenial-header-builder-col xenial-header-builder-top-col-2">
									<div id="xenial-desktop-top-middle" class="selected-elements-wrapper">
										<?php
										$desktop_header_top_middle_elements = $desktop_header_elements['top']['middle'];
										if ( $desktop_header_top_middle_elements ) {
											foreach ( $desktop_header_top_middle_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
												}
											}
										}
										?>
									</div>
								</div>
								<div class="xenial-header-builder-col xenial-header-builder-top-col-3">
									<div id="xenial-desktop-top-right" class="selected-elements-wrapper">
										<?php
										$desktop_header_top_right_elements = $desktop_header_elements['top']['right'];
										if ( $desktop_header_top_right_elements ) {
											foreach ( $desktop_header_top_right_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
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
									<div id="xenial-desktop-middle-left" class="selected-elements-wrapper">
										<?php
										$desktop_header_middle_left_elements = $desktop_header_elements['middle']['left'];
										if ( $desktop_header_middle_left_elements ) {
											foreach ( $desktop_header_middle_left_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
												}
											}
										}
										?>
									</div>
								</div>
								<div class="xenial-header-builder-col xenial-header-builder-middle-col-2">
									<div id="xenial-desktop-middle-middle" class="selected-elements-wrapper">
										<?php
										$desktop_header_middle_middle_elements = $desktop_header_elements['middle']['middle'];
										if ( $desktop_header_middle_middle_elements ) {
											foreach ( $desktop_header_middle_middle_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
												}
											}
										}
										?>
									</div>
								</div>
								<div class="xenial-header-builder-col xenial-header-builder-middle-col-3">
									<div id="xenial-desktop-middle-right" class="selected-elements-wrapper">
										<?php
										$desktop_header_middle_right_elements = $desktop_header_elements['middle']['right'];
										if ( $desktop_header_middle_right_elements ) {
											foreach ( $desktop_header_middle_right_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
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
									<div id="xenial-desktop-bottom-left" class="selected-elements-wrapper">
										<?php
										$desktop_header_bottom_left_elements = $desktop_header_elements['bottom']['left'];
										if ( $desktop_header_bottom_left_elements ) {
											foreach ( $desktop_header_bottom_left_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
												}
											}
										}
										?>
									</div>
								</div>
								<div class="xenial-header-builder-col xenial-header-builder-tbottomop-col-2">
									<div id="xenial-desktop-bottom-middle" class="selected-elements-wrapper">
										<?php
										$desktop_header_bottom_middle_elements = $desktop_header_elements['bottom']['middle'];
										if ( $desktop_header_bottom_middle_elements ) {
											foreach ( $desktop_header_bottom_middle_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
												}
											}
										}
										?>
									</div>
								</div>
								<div class="xenial-header-builder-col xenial-header-builder-bottom-col-3">
									<div id="xenial-desktop-bottom-right" class="selected-elements-wrapper">
										<?php
										$desktop_header_bottom_right_elements = $desktop_header_elements['bottom']['right'];
										if ( $desktop_header_bottom_right_elements ) {
											foreach ( $desktop_header_bottom_right_elements as $element ) {
												$get_element = $desktop_header_elements_choices[ $element ];
												if ( $get_element ) {
													$this->get_header_element_template( $element, $get_element, 'desktop' );
												}
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div id="xenial-mobile-header-builder-section" class="xenial-header-builder-section">
						<div class="xenial-mobile-header-builder-section-inner">
							<div class="xenial-mobile-header-builder-off-canvas-container">
								<?php $this->get_header_row_settings_template( 'xenial_off_canvas' ); ?>
								<div id="xenial-mobile-off-canvas" class="selected-elements-wrapper">
									<?php
									$mobile_header_canvas_elements = $mobile_header_elements['offcanvas'];
									if ( $mobile_header_canvas_elements ) {
										foreach ( $mobile_header_canvas_elements as $element ) {
											$get_element = $mobile_header_elements_choices[ $element ];
											if ( $get_element ) {
												$this->get_header_element_template( $element, $get_element, 'mobile' );
											}
										}
									}
									?>
								</div>
							</div>
							<div class="xenial-mobile-header-builder-row-container">
								<div class="xenial-header-builder-row xenial-header-builder-top-row">
									<div class="xenial-header-builder-row-inner xenial-header-builder-top-row-inner">
										<?php $this->get_header_row_settings_template( 'xenial_top_header' ); ?>
										<div class="xenial-header-builder-col xenial-header-builder-top-col-1">
											<div id="xenial-mobile-top-left" class="selected-elements-wrapper">
												<?php
												$mobile_header_top_left_elements = $mobile_header_elements['top']['left'];
												if ( $mobile_header_top_left_elements ) {
													foreach ( $mobile_header_top_left_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
														}
													}
												}
												?>
											</div>
										</div>
										<div class="xenial-header-builder-col xenial-header-builder-top-col-2">
											<div id="xenial-mobile-top-middle" class="selected-elements-wrapper">
												<?php
												$mobile_header_top_middle_elements = $mobile_header_elements['top']['middle'];
												if ( $mobile_header_top_middle_elements ) {
													foreach ( $mobile_header_top_middle_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
														}
													}
												}
												?>
											</div>
										</div>
										<div class="xenial-header-builder-col xenial-header-builder-top-col-3">
											<div id="xenial-mobile-top-right" class="selected-elements-wrapper">
												<?php
												$mobile_header_top_right_elements = $mobile_header_elements['top']['right'];
												if ( $mobile_header_top_right_elements ) {
													foreach ( $mobile_header_top_right_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
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
											<div id="xenial-mobile-middle-left" class="selected-elements-wrapper">
												<?php
												$mobile_header_middle_left_elements = $mobile_header_elements['middle']['left'];
												if ( $mobile_header_middle_left_elements ) {
													foreach ( $mobile_header_middle_left_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
														}
													}
												}
												?>
											</div>
										</div>
										<div class="xenial-header-builder-col xenial-header-builder-middle-col-2">
											<div id="xenial-mobile-middle-middle" class="selected-elements-wrapper">
												<?php
												$mobile_header_middle_middle_elements = $mobile_header_elements['middle']['middle'];
												if ( $mobile_header_middle_middle_elements ) {
													foreach ( $mobile_header_middle_middle_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
														}
													}
												}
												?>
											</div>
										</div>
										<div class="xenial-header-builder-col xenial-header-builder-middle-col-3">
											<div id="xenial-mobile-middle-right" class="selected-elements-wrapper">
												<?php
												$mobile_header_middle_right_elements = $mobile_header_elements['middle']['right'];
												if ( $mobile_header_middle_right_elements ) {
													foreach ( $mobile_header_middle_right_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
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
											<div id="xenial-mobile-bottom-left" class="selected-elements-wrapper">
												<?php
												$mobile_header_bottom_left_elements = $mobile_header_elements['bottom']['left'];
												if ( $mobile_header_bottom_left_elements ) {
													foreach ( $mobile_header_bottom_left_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
														}
													}
												}
												?>
											</div>
										</div>
										<div class="xenial-header-builder-col xenial-header-builder-bottom-col-2">
											<div id="xenial-mobile-bottom-middle" class="selected-elements-wrapper">
												<?php
												$mobile_header_bottom_middle_elements = $mobile_header_elements['bottom']['middle'];
												if ( $mobile_header_bottom_middle_elements ) {
													foreach ( $mobile_header_bottom_middle_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
														}
													}
												}
												?>
											</div>
										</div>
										<div class="xenial-header-builder-col xenial-header-builder-bottom-col-3">
											<div id="xenial-mobile-bottom-right" class="selected-elements-wrapper">
												<?php
												$mobile_header_bottom_right_elements = $mobile_header_elements['bottom']['right'];
												if ( $mobile_header_bottom_right_elements ) {
													foreach ( $mobile_header_bottom_right_elements as $element ) {
														$get_element = $mobile_header_elements_choices[ $element ];
														if ( $get_element ) {
															$this->get_header_element_template( $element, $get_element, 'mobile' );
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
							var responsiveSwitcherEle = jQuery('#xenial-header-builder-responsive-switcher');
							responsiveSwitcherEle.toggleClass('hide-responsive-switchers');
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
					desktop: {
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
					},
					mobile: {
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
						},
						offcanvas: null
					}
				};

				const headerElementsSetting = document.getElementById('_customize-input-theme_header_elements');

				const headerElements = document.querySelectorAll(".xenial-header-element-button");
				const dropZones = document.querySelectorAll(".selected-elements-wrapper");

				const mobileTabButton = document.getElementById( 'xenial-header-builder-mobile-tab-button' );
				const desktopTabButton = document.getElementById( 'xenial-header-builder-desktop-tab-button' );

				const desktopElementsWrapper = document.getElementById( 'xenial-desktop-header-elements' );
				const mobileElementsWrapper = document.getElementById( 'xenial-mobile-header-elements' );

				const desktopHeaderBuilderSection = document.getElementById( 'xenial-desktop-header-builder-section' );
				const mobileHeaderBuilderSection = document.getElementById( 'xenial-mobile-header-builder-section' );

				desktopTabButton.addEventListener( 'click', (event) => {
					event.preventDefault();
					mobileElementsWrapper.classList.remove('xenial-header-elements-active');
					desktopElementsWrapper.classList.add('xenial-header-elements-active');
					mobileHeaderBuilderSection.classList.remove('xenial-header-builder-section-active');
					desktopHeaderBuilderSection.classList.add('xenial-header-builder-section-active');
				} );

				mobileTabButton.addEventListener( 'click', (event) => {
					event.preventDefault();
					desktopElementsWrapper.classList.remove('xenial-header-elements-active');
					mobileElementsWrapper.classList.add('xenial-header-elements-active');
					desktopHeaderBuilderSection.classList.remove('xenial-header-builder-section-active');
					mobileHeaderBuilderSection.classList.add('xenial-header-builder-section-active');
				} );

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
						desktop: {
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
						},
						mobile: {
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
							},
							offcanvas: null
						}
						
					};

					const headerElementsSetting = document.getElementById('_customize-input-theme_header_elements');

					const desktopTopHeaderLeftElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-top-left .xenial-header-element-button');
					
					if ( desktopTopHeaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopTopHeaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.top.left = elements;
						}
					}

					

					const desktopTopHeaderMiddleElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-top-middle  .xenial-header-element-button');
					if ( desktopTopHeaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopTopHeaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.top.middle = elements;
						}
					}

					const desktopTopHeadeRightElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-top-right  .xenial-header-element-button');
					if ( desktopTopHeadeRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopTopHeadeRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.top.right = elements;
						}
					}

					const desktopMiddleHeaderLeftElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-middle-left  .xenial-header-element-button');
					if ( desktopMiddleHeaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopMiddleHeaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.middle.left = elements;
						}
					}

					const desktopMiddleHeaderMiddleElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-middle-middle .xenial-header-element-button');
					if ( desktopMiddleHeaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopMiddleHeaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.middle.middle = elements;
						}
					}

					const desktopMiddleHeaderRightElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-middle-right  .xenial-header-element-button');
					if ( desktopMiddleHeaderRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopMiddleHeaderRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.middle.right = elements;
						}
					}

					const desktopBottomHeaderLeftElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-bottom-left  .xenial-header-element-button');
					if ( desktopBottomHeaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopBottomHeaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.bottom.left = elements;
						}
					}

					const desktopBottomHeaderMiddleElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-bottom-middle .xenial-header-element-button');
					if ( desktopBottomHeaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopBottomHeaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.bottom.middle = elements;
						}
					}

					const desktopBottomHeaderRightElements = document.querySelectorAll('#xenial-desktop-header-builder-section #xenial-desktop-bottom-right .xenial-header-element-button');
					if ( desktopBottomHeaderRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( desktopBottomHeaderRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.desktop.bottom.right = elements;
						}
					}

					const mobileTopHeaderLeftElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-top-left .xenial-header-element-button');
					
					if ( mobileTopHeaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileTopHeaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.top.left = elements;
						}
					}

					

					const mobileTopHeaderMiddleElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-top-middle  .xenial-header-element-button');
					if ( mobileTopHeaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileTopHeaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.top.middle = elements;
						}
					}

					const mobileTopHeadeRightElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-top-right  .xenial-header-element-button');
					if ( mobileTopHeadeRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileTopHeadeRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.top.right = elements;
						}
					}

					const mobileMiddleHeaderLeftElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-middle-left  .xenial-header-element-button');
					if ( mobileMiddleHeaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileMiddleHeaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.middle.left = elements;
						}
					}

					const mobileMiddleHeaderMiddleElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-middle-middle .xenial-header-element-button');
					if ( mobileMiddleHeaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileMiddleHeaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.middle.middle = elements;
						}
					}

					const mobileMiddleHeaderRightElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-middle-right  .xenial-header-element-button');
					if ( mobileMiddleHeaderRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileMiddleHeaderRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.middle.right = elements;
						}
					}

					const mobileBottomHeaderLeftElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-bottom-left  .xenial-header-element-button');
					if ( mobileBottomHeaderLeftElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileBottomHeaderLeftElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.bottom.left = elements;
						}
					}

					const mobileBottomHeaderMiddleElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-bottom-middle .xenial-header-element-button');
					if ( mobileBottomHeaderMiddleElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileBottomHeaderMiddleElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.bottom.middle = elements;
						}
					}

					const mobileBottomHeaderRightElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-bottom-right .xenial-header-element-button');
					if ( mobileBottomHeaderRightElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileBottomHeaderRightElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.bottom.right = elements;
						}
					}

					const mobileOffCanvasElements = document.querySelectorAll('#xenial-mobile-header-builder-section #xenial-mobile-off-canvas .xenial-header-element-button');
					if ( mobileOffCanvasElements.length > 0 ) {
						let elements = [];
						[].forEach.call( mobileOffCanvasElements, (element) => {
							elements.push( element.getAttribute('data-element') );
						} );
						if ( elements.length > 0 ) {
							toBeSavedHeaderElements.mobile.offcanvas = elements;
						}
					}

					headerElementsSetting.value = JSON.stringify(toBeSavedHeaderElements);
					headerElementsSetting.dispatchEvent(new Event('change'));					
				}


				const removeButtons = document.querySelectorAll('.xenial-header-element-remove');
				[].forEach.call( removeButtons, (element) => {
					element.addEventListener('click', (event) => {
						event.preventDefault();
						parentElement = element.parentNode;
						let parentElementClone = parentElement.cloneNode(true);
						var elementDevice = element.getAttribute('data-device');
						if ( elementDevice == 'mobile' ) {
							mobileElementsWrapper.append(parentElement);
						} else {
							desktopElementsWrapper.append(parentElement);
						}
						parentElementClone.remove();

						xenialSaveHeaderElements();
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