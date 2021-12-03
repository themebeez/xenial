<?php 


if ( ! class_exists( 'Xenial_Footer_Builder' ) ) {

	/**
	 * 
	 */
	class Xenial_Footer_Builder {
		
		public function run() {

			add_action( 'customize_controls_print_footer_scripts', array( $this, 'display_footer_builder' ) );
			add_action( 'customize_controls_print_footer_scripts', array( $this, 'footer_builder_script' ) );
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_scripts' ), 15 );
		}

		public function enqueue_scripts() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/footer-builder/';

			wp_enqueue_style( 
				XENIAL_THEME_SLUG . '-footer-builder', 
				$asset_uri . 
				'footer-builder.css' 
			);
		}


		public function get_footer_element_template( $id, $element ) {
			?>
			<div id="footer-element-<?php echo $id; ?>" class="button button-primary xenial-footer-element-button" draggable="true" data-element="<?php echo $id; ?>">
				<span class="xenial-footer-element-icon"><?php echo $element['icon']; ?></span>
				<a class="xenial-footer-element-label" data-section="<?php echo $element['section']; ?>"><?php echo $element['label']; ?></a>
				<a href="#" class="xenial-footer-element-remove">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>
				</a>
			</div>
			<?php
		}


		public function get_footer_row_settings_template( $row_id ) {
			?>
			<a href="#" class="xenial-footer-row-setting-link" data-section="<?php echo $row_id; ?>">
				<span class="xenial-footer-row-setting-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M2.213 14.06a9.945 9.945 0 0 1 0-4.12c1.11.13 2.08-.237 2.396-1.001.317-.765-.108-1.71-.986-2.403a9.945 9.945 0 0 1 2.913-2.913c.692.877 1.638 1.303 2.403.986.765-.317 1.132-1.286 1.001-2.396a9.945 9.945 0 0 1 4.12 0c-.13 1.11.237 2.08 1.001 2.396.765.317 1.71-.108 2.403-.986a9.945 9.945 0 0 1 2.913 2.913c-.877.692-1.303 1.638-.986 2.403.317.765 1.286 1.132 2.396 1.001a9.945 9.945 0 0 1 0 4.12c-1.11-.13-2.08.237-2.396 1.001-.317.765.108 1.71.986 2.403a9.945 9.945 0 0 1-2.913 2.913c-.692-.877-1.638-1.303-2.403-.986-.765.317-1.132 1.286-1.001 2.396a9.945 9.945 0 0 1-4.12 0c.13-1.11-.237-2.08-1.001-2.396-.765-.317-1.71.108-2.403.986a9.945 9.945 0 0 1-2.913-2.913c.877-.692 1.303-1.638.986-2.403-.317-.765-1.286-1.132-2.396-1.001zM4 12.21c1.1.305 2.007 1.002 2.457 2.086.449 1.085.3 2.22-.262 3.212.096.102.195.201.297.297.993-.562 2.127-.71 3.212-.262 1.084.45 1.781 1.357 2.086 2.457.14.004.28.004.42 0 .305-1.1 1.002-2.007 2.086-2.457 1.085-.449 2.22-.3 3.212.262.102-.096.201-.195.297-.297-.562-.993-.71-2.127-.262-3.212.45-1.084 1.357-1.781 2.457-2.086.004-.14.004-.28 0-.42-1.1-.305-2.007-1.002-2.457-2.086-.449-1.085-.3-2.22.262-3.212a7.935 7.935 0 0 0-.297-.297c-.993.562-2.127.71-3.212.262C13.212 6.007 12.515 5.1 12.21 4a7.935 7.935 0 0 0-.42 0c-.305 1.1-1.002 2.007-2.086 2.457-1.085.449-2.22.3-3.212-.262-.102.096-.201.195-.297.297.562.993.71 2.127.262 3.212C6.007 10.788 5.1 11.485 4 11.79c-.004.14-.004.28 0 .42zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
				</span>
			</a>
			<?php
		}


		public function display_footer_builder() {

			// $footerElements = get_theme_mod( 'theme_footer_elements' );
			// $footerElements = json_decode( $footerElements, true ); 

			// $footerElementsChoices = xenial_get_footer_elements();
			?>
			<div id="xenial-footer-builder" class="xenial-hide-footer-builder">
				<div class="xenial-footer-builder-button-wrapper">
					<button id="xenial-footer-builder-hide-button" class="button button-primary xenial-footer-builder-button"><span class="dashicons dashicons-arrow-down-alt2"></span></button>
				</div>
				
				<div class="xenial-footer-builder-inner">
					<div id="xenial-footer-elements-selector-wrapper" class="xenial-footer-elements-wrapper">
						<div class="xenial-footer-elements-wrapper-inner">
							<?php 
							?>
							<div id="xenial-footer-elements-container" class="selected-elements-wrapper">
								<?php
								?>
							</div>
						</div>
					</div>
					<div class="xenial-footer-builder-row xenial-footer-builder-top-row">
						<div class="xenial-footer-builder-row-inner xenial-footer-builder-top-row-inner">
							<?php $this->get_footer_row_settings_template( 'xenial_top_footer' ); ?>
							<div class="xenial-footer-builder-col xenial-footer-builder-top-col-1">
								<div id="xenial-top-left-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
							<div class="xenial-footer-builder-col xenial-footer-builder-top-col-2">
								<div id="xenial-top-middle-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
							<div class="xenial-footer-builder-col xenial-footer-builder-top-col-3">
								<div id="xenial-top-right-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="xenial-footer-builder-row xenial-footer-builder-middle-row">
						<div class="xenial-footer-builder-row-inner xenial-footer-builder-middle-row-inner">
							<?php $this->get_footer_row_settings_template( 'xenial_middle_footer' ); ?>
							<div class="xenial-footer-builder-col xenial-footer-builder-middle-col-1">
								<div id="xenial-middle-left-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
							<div class="xenial-footer-builder-col xenial-footer-builder-middle-col-2">
								<div id="xenial-middle-middle-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
							<div class="xenial-footer-builder-col xenial-footer-builder-middle-col-3">
								<div id="xenial-middle-right-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="xenial-footer-builder-row xenial-footer-builder-bottom-row">
						<div class="xenial-footer-builder-row-inner xenial-footer-builder-bottom-row-inner">
							<?php $this->get_footer_row_settings_template( 'xenial_bottom_footer' ); ?>
							<div class="xenial-footer-builder-col xenial-footer-builder-bottom-col-1">
								<div id="xenial-bottom-left-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
							<div class="xenial-footer-builder-col xenial-footer-builder-tbottomop-col-2">
								<div id="xenial-bottom-middle-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
							<div class="xenial-footer-builder-col xenial-footer-builder-bottom-col-3">
								<div id="xenial-bottom-right-footer-elements-container" class="selected-elements-wrapper">
									<?php
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}

		public function footer_builder_script() {
			?>
			<script type="text/javascript">
				
			</script>
			<?php
		}
	}
}

$xenialFooterBuilder = new Xenial_Footer_Builder();

$xenialFooterBuilder->run();