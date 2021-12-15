<?php
/**
 * Customizer Control: xenial-dimensions.
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
if( ! class_exists( 'Xenial_Customize_Dimensions_Control' ) ) {

	class Xenial_Customize_Dimensions_Control extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'xenial-dimensions';

		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/dimensions/';

			wp_enqueue_style(
				XENIAL_THEME_SLUG . '-dimensions',
				$asset_uri . 'dimensions.css',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script(
				XENIAL_THEME_SLUG . '-dimensions',
				$asset_uri . 'dimensions.js',
				array('jquery', 'customize-base'),
				XENIAL_THEME_VERSION,
				true
			);

			$xenialDimensionScriptObjArray = [
				'isResponsive' => ( isset( $this->input_attrs['responsive'] ) && $this->input_attrs['responsive'] == true ) ? true : false
			];

			wp_localize_script( 
				XENIAL_THEME_SLUG . '-dimensions', 
				'xenialDimensionScriptObj', 
				$xenialDimensionScriptObjArray
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

			$this->json['title'] 	= esc_html__( 'Link values together', 'xenial' );

			$this->json['inputAttrs'] = '';

			foreach ( $this->input_attrs as $attr => $value ) {
				if ( $attr == 'min' || $attr == 'max' || $attr == 'step' ) {
					$this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
				}
			}

			$this->json['isResponsive'] = ( isset( $this->input_attrs['responsive'] ) && $this->input_attrs['responsive'] == true ) ? true : false;

		    if ( isset( $this->input_attrs['responsive'] ) && $this->input_attrs['responsive'] == true ) {
		    	
		    	$this->json['l10n']    	= $this->l10n( false, true );
		    	$this->json['desktop'] = [];
			    $this->json['tablet']  = [];
			    $this->json['mobile']  = [];

		    	foreach ( $this->settings as $setting_key => $setting ) {
			    	list( $_key ) = explode( '_', $setting_key );
			        $this->json[ $_key ][ $setting_key ] = array(
			            'id'        => $setting->id,
			            'link'      => $this->get_link( $setting_key ),
			            'value'     => $this->value( $setting_key ),
			            'default'   => $setting->default
			        );
			    }
		    } else {

		    	$this->json['l10n']    	= $this->l10n( false, false );

		    	$this->json['dimension'] = [];

		    	foreach( $this->settings as $setting_key => $setting ) {
		    		$this->json['dimension'][$setting_key] = [
		    			'id' => $setting->id,
		    			'link' => $this->get_link( $setting_key ),
		    			'value' => $this->value( $setting_key ),
		    			'default' => $setting->default
		    		];
		    	}
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
				<ul class="desktop responsive-control-wrap active">
			        <# _.each( data.desktop, function( args, key ) { #>
			            <li class="dimension-wrap {{ key }}">
			                <input {{{ data.inputAttrs }}} type="number" class="dimension-{{ key }}" {{{ args.link }}} value="{{{ args.value }}}" />
			                <span class="dimension-label">{{ data.l10n[ key ] }}</span>
			            </li>
			        <# } ); #>
			        <li class="dimension-wrap">
			            <div class="link-dimensions">
			                <span class="dashicons dashicons-admin-links xenial-linked" data-element="{{ data.id }}" title="{{ data.title }}"></span>
			                <span class="dashicons dashicons-editor-unlink xenial-unlinked" data-element="{{ data.id }}" title="{{ data.title }}"></span>
			            </div>
			        </li>
			    </ul>
			    <ul class="tablet responsive-control-wrap">
			        <# _.each( data.tablet, function( args, key ) { #>
			            <li class="dimension-wrap {{ key }}">
			                <input {{{ data.inputAttrs }}} type="number" class="dimension-{{ key }}" {{{ args.link }}} value="{{{ args.value }}}" />
			                <span class="dimension-label">{{ data.l10n[ key ] }}</span>
			            </li>
			        <# } ); #>
			        <li class="dimension-wrap">
			            <div class="link-dimensions">
			                <span class="dashicons dashicons-admin-links xenial-linked" data-element="{{ data.id }}_tablet" title="{{ data.title }}"></span>
			                <span class="dashicons dashicons-editor-unlink xenial-unlinked" data-element="{{ data.id }}_tablet" title="{{ data.title }}"></span>
			            </div>
			        </li>
			    </ul>
			    <ul class="mobile responsive-control-wrap">
			        <# _.each( data.mobile, function( args, key ) { #>
			            <li class="dimension-wrap {{ key }}">
			                <input {{{ data.inputAttrs }}} type="number" class="dimension-{{ key }}" {{{ args.link }}} value="{{{ args.value }}}" />
			                <span class="dimension-label">{{ data.l10n[ key ] }}</span>
			            </li>
			        <# } ); #>
			        <li class="dimension-wrap">
			            <div class="link-dimensions">
			                <span class="dashicons dashicons-admin-links xenial-linked" data-element="{{ data.id }}_mobile" title="{{ data.title }}"></span>
			                <span class="dashicons dashicons-editor-unlink xenial-unlinked" data-element="{{ data.id }}_mobile" title="{{ data.title }}"></span>
			            </div>
			        </li>
			    </ul>
			<# } else { #>
				<ul class="dimension control-wrap">
			        <# _.each( data.dimension, function( args, key ) { #>
			            <li class="dimension-wrap {{ key }}">
			                <input {{{ data.inputAttrs }}} type="number" class="dimension-{{ key }}" {{{ args.link }}} value="{{{ args.value }}}" />
			                <span class="dimension-label">{{ data.l10n[ key ] }}</span>
			            </li>
			        <# } ); #>
			        <li class="dimension-wrap">
			            <div class="link-dimensions">
			                <span class="dashicons dashicons-admin-links xenial-linked" data-element="{{ data.id }}" title="{{ data.title }}"></span>
			                <span class="dashicons dashicons-editor-unlink xenial-unlinked" data-element="{{ data.id }}" title="{{ data.title }}"></span>
			            </div>
			        </li>
			    </ul>
			<# } #>
			<?php
		}

		/**
		 * Returns an array of translation strings.
		 *
		 * @access protected
		 * @param string|false $id The string-ID.
		 * @return string
		 */
		protected function l10n( $id = false, $responsive = false ) {

			if ( $responsive ) {
				$translation_strings = array(
					'desktop_top' 		=> esc_attr__( 'Top', 'xenial' ),
					'desktop_right' 	=> esc_attr__( 'Right', 'xenial' ),
					'desktop_bottom' 	=> esc_attr__( 'Bottom', 'xenial' ),
					'desktop_left' 		=> esc_attr__( 'Left', 'xenial' ),
					'tablet_top' 		=> esc_attr__( 'Top', 'xenial' ),
					'tablet_right' 		=> esc_attr__( 'Right', 'xenial' ),
					'tablet_bottom' 	=> esc_attr__( 'Bottom', 'xenial' ),
					'tablet_left' 		=> esc_attr__( 'Left', 'xenial' ),
					'mobile_top' 		=> esc_attr__( 'Top', 'xenial' ),
					'mobile_right' 		=> esc_attr__( 'Right', 'xenial' ),
					'mobile_bottom' 	=> esc_attr__( 'Bottom', 'xenial' ),
					'mobile_left' 		=> esc_attr__( 'Left', 'xenial' ),
				);
			} else {
				$translation_strings = array(
					'top' 		=> esc_attr__( 'Top', 'xenial' ),
					'right' 	=> esc_attr__( 'Right', 'xenial' ),
					'bottom' 	=> esc_attr__( 'Bottom', 'xenial' ),
					'left' 		=> esc_attr__( 'Left', 'xenial' )
				);
			}

			if ( false === $id ) {
				return $translation_strings;
			}

			return $translation_strings[ $id ];
		}
	}
}