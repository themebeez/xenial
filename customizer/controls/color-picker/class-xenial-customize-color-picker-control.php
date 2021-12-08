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

			$xenialColorPickerScriptObjArray = [
				'isResponsive' => ( isset( $this->input_attrs['is_responsive'] ) && $this->input_attrs['is_responsive'] == true ) ? true : false
			];

			wp_localize_script( 
				XENIAL_THEME_SLUG . '-color-picker', 
				'xenialColorPickerScriptObj', 
				$xenialColorPickerScriptObjArray
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

			?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
				<?php $this->render_content(); ?>
			</li><?php
		}

		/**
		 * Refresh the parameters passed to the JavaScript via JSON.
		 *
		 * @see WP_Customize_Control::to_json()
		 */
		public function to_json() {

			parent::to_json();

			$is_responsive = ( $this->input_attrs['is_responsive'] == true ) ? true : false;

			$this->json['colors'] = isset( $this->input_attrs['colors'] ) ? $this->input_attrs['colors'] : array();

			$this->json['id'] 		= $this->id;

			$this->json['isResponsive'] = $is_responsive;			

			$this->json['value'] = $this->value();

			$this->json['link'] = $this->get_link();
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
					
					<ul class="desktop responsive-control-wrap xenial-color-field-wrapper active">
						<# if ( data.colors.desktop.initial && data.colors.desktop.initial.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Initial', 'xenial' ); ?>">
								<input type="hidden" name="desktop-initial-color-{{ data.id }}" value="{{ settingValue.desktop.initial }}" data-default="{{ data.colors.desktop.initial.default }}">
								<div id="desktop-initial-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.desktop.initial }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.desktop.link && data.colors.desktop.link.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Link', 'xenial' ); ?>">
								<input type="hidden" name="desktop-link-color-{{ data.id }}" value="{{ settingValue.desktop.link }}" data-default="{{ data.colors.desktop.link.default }}">
								<div id="desktop-link-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.desktop.link }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.desktop.hover && data.colors.desktop.hover.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Hover', 'xenial' ); ?>">
								<input type="hidden" name="desktop-hover-color-{{ data.id }}" value="{{ settingValue.desktop.hover }}" data-default="{{ data.colors.desktop.hover.default }}">
								<div id="desktop-hover-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.desktop.hover }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.desktop.active && data.colors.desktop.active.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Active', 'xenial' ); ?>">
								<input type="hidden" name="desktop-active-color-{{ data.id }}" value="{{ settingValue.desktop.active }}" data-default="{{ data.colors.desktop.active.default }}">
								<div id="desktop-active-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.desktop.active }}"></div>
							</li>
						<# } #>
					</ul>
					<ul class="tablet responsive-control-wrap xenial-color-field-wrapper">
						<# if ( data.colors.tablet.initial && data.colors.tablet.initial.display  ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Initial', 'xenial' ); ?>"> 
								<input type="hidden" name="tablet-initial-color-{{ data.id }}" value="{{ settingValue.tablet.initial }}" data-default="{{ data.colors.tablet.initial.default }}">
								<div id="tablet-initial-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.tablet.initial }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.tablet.link && data.colors.tablet.link.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Link', 'xenial' ); ?>">
								<input type="hidden" name="tablet-link-color-{{ data.id }}" value="{{ settingValue.tablet.initial }}" data-default="{{ data.colors.tablet.link.default }}">
								<div id="tablet-link-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.tablet.link }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.tablet.hover && data.colors.tablet.hover.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Hover', 'xenial' ); ?>">
								<input type="hidden" name="tablet-hover-color-{{ data.id }}" value="{{ settingValue.tablet.hover }}" data-default="{{ data.colors.tablet.hover.default }}">
								<div id="tablet-hover-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.tablet.hover }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.tablet.active && data.colors.tablet.active.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Active', 'xenial' ); ?>">
								<input type="hidden" name="tablet-active-color-{{ data.id }}" value="{{ settingValue.tablet.active }}" data-default="{{ data.colors.tablet.active.default }}">
								<div id="tablet-active-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.tablet.active }}"></div>
							</li>
						<# } #>
					</ul>
					<ul class="mobile responsive-control-wrap xenial-color-field-wrapper">
						<# if ( data.colors.mobile.initial && data.colors.mobile.initial.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Initial', 'xenial' ); ?>"> 
								<input type="hidden" name="mobile-initial-color-{{ data.id }}" value="{{ settingValue.mobile.initial }}" data-default="{{ data.colors.mobile.initial.default }}">
								<div id="mobile-initial-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.mobile.initial }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.mobile.link && data.colors.mobile.link.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Link', 'xenial' ); ?>">
								<input type="hidden" name="mobile-link-color-{{ data.id }}" value="{{ settingValue.mobile.link }}" data-default="{{ data.colors.mobile.link.default }}">
								<div id="mobile-link-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.mobile.link }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.mobile.hover && data.colors.mobile.hover.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Hover', 'xenial' ); ?>">
								<input type="hidden" name="mobile-hover-color-{{ data.id }}" value="{{ settingValue.mobile.hover }}" data-default="{{ data.colors.mobile.hover.default }}">
								<div id="mobile-hover-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.mobile.hover }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.mobile.active && data.colors.mobile.active.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Active', 'xenial' ); ?>">
								<input type="hidden" name="mobile-active-color-{{ data.id }}" value="{{ settingValue.mobile.active }}" data-default="{{ data.colors.mobile.active.default }}">
								<div id="mobile-active-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.mobile.active }}"></div>
							</li>
						<# } #>
					</ul>
				</div>
				
			<# } else { #>
				<div class="xenial-normal-color-wrapper">
					<ul class="colors control-wrap xenial-color-field-wrapper">
						<# if ( data.colors.initial && data.colors.initial.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Initial', 'xenial' ); ?>"> 
								<input type="hidden" name="initial-color-{{ data.id }}" value="{{ settingValue.initial }}" data-default="{{ data.colors.initial.default }}">
								<div id="initial-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.initial }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.link && data.colors.link.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Link', 'xenial' ); ?>">
								<input type="hidden" name="link-color-{{ data.id }}" value="{{ settingValue.link }}" data-default="{{ data.colors.link.default }}">
								<div id="link-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.link }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.hover && data.colors.hover.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Hover', 'xenial' ); ?>">
								<input type="hidden" name="hover-color-{{ data.id }}" value="{{ settingValue.hover }}" data-default="{{ data.colors.hover.default }}">
								<div id="hover-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.hover }}"></div>
							</li>
						<# } #>
						<# if ( data.colors.active &&  data.colors.active.display ) { #>
							<li class="xe-customize-tippy" data-tippy-content="<?php echo esc_html__( 'Active', 'xenial' ); ?>">
								<input type="hidden" name="active-color-{{ data.id }}" value="{{ settingValue.active }}" data-default="{{ data.colors.active.default }}">
								<div id="active-color-{{ data.id }}" class="xenial-picker" data-color="{{ settingValue.active }}"></div>
							</li>
						<# } #>
					</ul>
				</div>
				
			<# } #>
			<input type="hidden" name="xenial-color-picker-setting-input" id="xenial-color-picker-setting-input-{{ data.id }}" value="{{ data.value }}" {{ data.link }}>
			<?php
		}
	}
}