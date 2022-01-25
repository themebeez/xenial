<?php 
/**
 * Customizer Control: Xenial Color Picker.
 *
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Buttonset control
 */
if( ! class_exists( 'Xenial_Customize_Color_Picker_Control' ) ) {

	class Xenial_Customize_Color_Picker_Control extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'xenial-color-picker';

		public $value;

		public function __construct( $manager, $id, $args = array(), $options = array() ) {
			parent::__construct( $manager, $id, $args );

			$this->value = $this->value();
		}

		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/color-picker/';

			$pickr_asset_uri = XENIAL_THEME_URI . '/customizer/assets/';

			wp_enqueue_style(
				'nano',
				$pickr_asset_uri . 'css/nano.min.css',
				null,
				'1.8.2',
				'all'
			);

			wp_enqueue_style(
				XENIAL_THEME_SLUG . '-color-picker',
				$asset_uri . 'color-picker.css',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script(
				'pickr',
				$pickr_asset_uri . 'js/pickr.min.js',
				array(),
				'1.8.2',
				'all'
			);

			wp_enqueue_script(
				XENIAL_THEME_SLUG . '-color-picker',
				$asset_uri . 'color-picker.js',
				array('jquery', 'pickr'),
				XENIAL_THEME_VERSION,
				'all'
			);
		}

		/**
		 * Renders the control wrapper and calls $this->render_content() for the internals.
		 *
		 * @see WP_Customize_Control::render()
		 */
		protected function render() {
			$id    = 'customize-control-' . str_replace( array( '[', ']' ), array( '-', '' ), $this->id );
			$class = 'customize-control customize-control-' . $this->type;

			if ( isset( $this->input_attrs['is_responsive'] ) && $this->input_attrs['is_responsive'] == true ) {
				$class .= ' has-switchers';
			}

			?>
			<li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
				<?php $this->render_content(); ?>
			</li>
			<?php
		}

		/**
		 * Refresh the parameters passed to the JavaScript via JSON.
		 *
		 * @see WP_Customize_Control::to_json()
		 */
		public function to_json() {

			parent::to_json();

			$is_responsive = ( $this->input_attrs['is_responsive'] == true ) ? true : false;

			$saved_values = ( $this->value() ) ? $this->value() : '';

			$default_values = $this->setting->default;

			$this->json['colors'] = isset( $this->input_attrs['colors'] ) ? $this->input_attrs['colors'] : array();

			$this->json['id'] 		= $this->id;

			$this->json['isResponsive'] = $is_responsive;			

			$this->json['value'] = ( $saved_values ) ? $saved_values : $default_values;

			$this->json['link'] = $this->get_link();

			$this->json['labels'] = $this->get_labels();
		}

		/**
		 * An Underscore (JS) template for this control's content (but not its container).
		 *
		 * Class variables for this control class are available in the `data` JS object;
		 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
		 *
		 * @see WP_Customize_Control::print_template()
		 *
		 * @access protected
		 */
		protected function content_template() {
			?>
			<#
			var settingValue;

			if ( data.isResponsive ) {
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
			if ( data.value ) {
				settingValue = JSON.parse( data.value );
			} 
			// console.log( data.id );
			// console.log( data.value );
			
			#>
			<# if ( data.label ) { #>
				<span class="customize-control-title">
					<span>{{{ data.label }}}</span>
					<# if ( data.isResponsive ) { #>
						<ul class="responsive-switchers">
							<li class="desktop">
								<button type="button" class="preview-desktop active" data-device="desktop">
									<i class="dashicons dashicons-desktop"></i>
								</button>
							</li>
							<li class="tablet">
								<button type="button" class="preview-tablet" data-device="tablet">
									<i class="dashicons dashicons-tablet"></i>
								</button>
							</li>
							<li class="mobile">
								<button type="button" class="preview-mobile" data-device="mobile">
									<i class="dashicons dashicons-smartphone"></i>
								</button>
							</li>
						</ul>
					<# } #>
				</span>
			<# } #>

			<# if ( data.description ) { #>
				<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>

			<# if ( data.isResponsive ) { #>
				<div class="xenial-responsive-color-wrapper">
					<# let desktopColors = data.colors.desktop; #>
					<# let savedDesktopColors = settingValue.desktop; #>
					<ul class="desktop responsive-control-wrap xenial-color-field-wrapper active">
						<# _.each( desktopColors, function( value, key ) {
							if ( value.display ) {
								#>
								<li class="xe-customize-tippy" data-tippy-content="{{ data.labels[ key ] }}">
									<input type="hidden" name="desktop-{{ key }}-color-{{ data.id }}" value="{{ savedDesktopColors[ key ] }}" data-default="{{ value.default }}" class="xe-color-picker">
									<div id="desktop-{{ key }}-color-{{ data.id }}" class="xenial-picker" data-color="{{ savedDesktopColors[ key ] }}"></div>
								</li>
								<#
							}
						} ); #>
					</ul>
					<# let tabletColors = data.colors.tablet; #>
					<# let savedTabletColors = settingValue.tablet; #>
					<ul class="tablet responsive-control-wrap xenial-color-field-wrapper">
						<# _.each( tabletColors, function( value, key ) {
							if ( value.display ) {
								#>
								<li class="xe-customize-tippy" data-tippy-content="{{ data.labels[ key ] }}">
									<input type="hidden" name="tablet-{{ key }}-color-{{ data.id }}" value="{{ savedTabletColors[ key ] }}" data-default="{{ value.default }}" class="xe-color-picker">
									<div id="tablet-{{ key }}-color-{{ data.id }}" class="xenial-picker" data-color="{{ savedTabletColors[ key ] }}"></div>
								</li>
								<#
							}
						} ); #>
					</ul>
					<# let mobileColors = data.colors.mobile; #>
					<# let savedMobileColors = settingValue.mobile; #>
					<ul class="mobile responsive-control-wrap xenial-color-field-wrapper">
						<# _.each( mobileColors, function( value, key ) {
							if ( value.display ) {
								#>
								<li class="xe-customize-tippy" data-tippy-content="{{ data.labels[ key ] }}">
									<input type="hidden" name="mobile-{{ key }}-color-{{ data.id }}" value="{{ savedMobileColors[ key ] }}" data-default="{{ value.default }}" class="xe-color-picker">
									<div id="mobile-{{ key }}-color-{{ data.id }}" class="xenial-picker" data-color="{{ savedMobileColors[ key ] }}"></div>
								</li>
								<#
							}
						} ); #>
					</ul>
				</div>
				
			<# } else { #>
				<div class="xenial-normal-color-wrapper">
					<# let normalColors = data.colors; #>
					<# let savedNormalColors = settingValue; #>
					<ul class="colors control-wrap xenial-color-field-wrapper">
						<# _.each( normalColors, function( value, key ) {
							if ( value.display ) {
								#>
								<li class="xe-customize-tippy" data-tippy-content="{{ data.labels[ key ] }}">
									<input type="hidden" name="{{ key }}-color-{{ data.id }}" value="{{ savedNormalColors[ key ] }}" data-default="{{ value.default }}" class="xe-color-picker">
									<div id="{{ key }}-color-{{ data.id }}" class="xenial-picker" data-color="{{ savedNormalColors[ key ] }}"></div>
								</li>
								<#
							}
						} ); #>
					</ul>
				</div>				
			<# } #>
			<input type="hidden" name="xenial-color-picker-setting-input" id="xenial-color-picker-setting-input-{{ data.id }}" value="{{ data.value }}" {{ data.link }}>
			<input type="hidden" name="xenial-color-picker-responsive-{{ data.id }}" id="xenial-color-picker-responsive-{{ data.id }}" value="{{ data.isResponsive }}">
			<?php
		}



		public function get_labels() {
			return apply_filters(
				'xenial_color_labels_filter',
				array(
					'initial' => esc_html__( 'Initial', 'xenial' ),
					'link' => esc_html__( 'Link', 'xenial' ),
					'hover' => esc_html__( 'Hover', 'xenial' ),
					'active' => esc_html__( 'Active', 'xenial' )
				)
			);
		}
	}
}