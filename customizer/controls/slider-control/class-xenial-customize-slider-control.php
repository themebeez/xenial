<?php
/**
 * Customizer Control: xenial-slider.
 *
 * @package     OceanWP WordPress theme
 * @subpackage  Controls
 * @see   		https://github.com/aristath/kirki
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Buttonset control
 */
if( ! class_exists( 'Xenial_Customize_Slider_Control' ) ) {

	class Xenial_Customize_Slider_Control extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'xenial-slider';

		/**
		 * Enqueue control related scripts/styles.
		 *
		 * @access public
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/slider-control/';

			wp_enqueue_style( 
				XENIAL_THEME_SLUG . '-slider-control', 
				$asset_uri . 'slider-control.css' ,
				null,
				XENIAL_THEME_VERSION
			);
			
			wp_enqueue_script( 
				XENIAL_THEME_SLUG . '-slider-control', 
				$asset_uri . 'slider-control.js', 
				array( 'jquery', 'customize-base', 'jquery-ui-slider' ), 
				XENIAL_THEME_VERSION, 
				true 
			);

			$xenialSliderScriptObjArray = [
				'isResponsive' => ( isset( $this->input_attrs['responsive'] ) && $this->input_attrs['responsive'] == true ) ? true : false
			];

			wp_localize_script( 
				XENIAL_THEME_SLUG . '-slider-control', 
				'xenialSliderScriptObj', 
				$xenialSliderScriptObjArray
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

			if ( isset( $this->input_attrs['responsive'] ) && $this->input_attrs['responsive'] == true ) {
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

			$this->json['id'] 		= $this->id;

			$is_responsive = ( isset( $this->input_attrs['responsive'] ) && $this->input_attrs['responsive'] == true ) ? true : false;

			$input_attrs = $this->input_attrs;

			$this->json['inputAttrs'] = '';

			if ( $is_responsive ) {

				if ( isset( $input_attrs['desktop'] ) ) {
					foreach ( $input_attrs['desktop'] as $attr => $value ) {
						if ( $attr == 'min' || $attr == 'max' || $attr == 'step' ) {
							$this->json['desktopInputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
						}
					}
				} else {
					foreach ( $input_attrs as $attr => $value ) {
						if ( $attr == 'min' || $attr == 'max' || $attr == 'step' ) {
							$this->json['desktopInputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
						}
					}
				}


				if ( isset( $input_attrs['tablet'] ) ) {
					foreach ( $input_attrs['tablet'] as $attr => $value ) {
						if ( $attr == 'min' || $attr == 'max' || $attr == 'step' ) {
							$this->json['tabletInputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
						}
					}
				} else {
					foreach ( $input_attrs as $attr => $value ) {
						if ( $attr == 'min' || $attr == 'max' || $attr == 'step' ) {
							$this->json['tabletInputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
						}
					}
				}

				if ( isset( $input_attrs['mobile'] ) ) {
					foreach ( $input_attrs['mobile'] as $attr => $value ) {
						if ( $attr == 'min' || $attr == 'max' || $attr == 'step' ) {
							$this->json['mobileInputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
						}
					}
				} else {
					foreach ( $input_attrs as $attr => $value ) {
						if ( $attr == 'min' || $attr == 'max' || $attr == 'step' ) {
							$this->json['mobileInputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
						}
					}
				}
			} else {
				foreach ( $input_attrs as $attr => $value ) {
					if ( $attr == 'min' || $attr == 'max' || $attr == 'step' ) {
						$this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
					}
				}
			}

			

			$this->json['isResponsive'] = $is_responsive;

			if ( $is_responsive == true ) {

				$this->json['desktop'] = [];
			    $this->json['tablet']  = [];
			    $this->json['mobile']  = [];

			    foreach ( $this->settings as $setting_key => $setting ) {
			        $this->json[ $setting_key ] = [
			            'id'        => $setting->id,
			            'default'   => $setting->default,
			            'link'      => $this->get_link( $setting_key ),
			            'value'     => $this->value( $setting_key ),
			        ];
			    }
			} else {
				$this->json['value'] = $this->value();
				$this->json['defaultValue'] = $this->setting->default;
			}
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

				<# if ( data.desktop ) { #>
					<div class="desktop responsive-control-wrap active">
						<div class="xenial-slider desktop-slider"></div>
						<div class="xenial-slider-input">
							<input {{{ data.desktopInputAttrs }}} type="number" class="slider-input desktop-input" value="{{ data.desktop.value }}" {{{ data.desktop.link }}} />
						</div>
			    	</div>
			    <# } #>

				<# if ( data.tablet ) { #>
					<div class="tablet responsive-control-wrap">
						<div class="xenial-slider tablet-slider"></div>
						<div class="xenial-slider-input">
							<input {{{ data.tabletInputAttrs }}} type="number" class="slider-input tablet-input" value="{{ data.tablet.value }}" {{{ data.tablet.link }}} />
						</div>
			    	</div>
			    <# } #>

				<# if ( data.mobile ) { #>
					<div class="mobile responsive-control-wrap">
						<div class="xenial-slider mobile-slider"></div>
						<div class="xenial-slider-input">
							<input {{{ data.mobileInputAttrs }}} type="number" class="slider-input mobile-input" value="{{ data.mobile.value }}" {{{ data.mobile.link }}} />
						</div>
			    	</div>
			    <# } #>
			<# } else { #>
				<div class="normal control-wrap">
					<div class="xenial-slider normal-slider"></div>
					<div class="xenial-slider-input">
						<input {{{ data.inputAttrs }}} type="number" class="slider-input normal-input" value="{{ data.value }}" {{{ data.link }}} />
					</div>
		    	</div>
			<# } #>
			<?php
		}
	}
}

