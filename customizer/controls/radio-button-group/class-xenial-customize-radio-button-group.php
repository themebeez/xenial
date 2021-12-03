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
if( ! class_exists( 'Xenial_Customize_Radio_Button_Group_Control' ) ) {

	class Xenial_Customize_Radio_Button_Group_Control extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'xenial-radio-button-group-control';

		/**
		 * Enqueue control related scripts/styles.
		 *
		 * @access public
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/radio-button-group/';

			wp_enqueue_style( 
				XENIAL_THEME_SLUG . '-radio-button-group', 
				$asset_uri . 'radio-button-group.css' ,
				null,
				XENIAL_THEME_VERSION,
				'all'
			);
			
			// wp_enqueue_script( 
			// 	XENIAL_THEME_SLUG . '-radio-button-group', 
			// 	$asset_uri . 'radio-button-group.js', 
			// 	array( 'jquery' ), 
			// 	XENIAL_THEME_VERSION, 
			// 	true 
			// );
		}

		/**
		 * Refresh the parameters passed to the JavaScript via JSON.
		 *
		 * @see WP_Customize_Control::to_json()
		 */
		public function to_json() {

			parent::to_json();

			$this->json['id'] 		= $this->id;

			$this->json['isResponsive'] = ( isset( $this->input_attrs['responsive'] ) && $this->input_attrs['responsive'] == true ) ? true : false ;

			if ( $this->choices ) {
				if ( $this->json['isResponsive'] ) {

					$choices = $this->choices;
					
					if ( 
						! isset( $choices['desktop'] ) && 
						! isset( $choices['tablet'] ) && 
						! isset( $choices['mobile'] ) 
					) {
						$this->json['desktopChoices'] 	= $this->choices;
						$this->json['tabletChoices'] 	= $this->choices;
						$this->json['mobileChoices'] 	= $this->choices;
					} else {
						$this->json['desktopChoices'] 	= $choices['desktop'];
						$this->json['tabletChoices'] 	= $choices['tablet'];
						$this->json['mobileChoices'] 	= $choices['mobile'];
					}
				} else {
					$this->json['choices'] = $this->choices;
				}
			}

			$this->json['item'] = isset( $this->input_attrs['item'] ) ? $this->input_attrs['item'] : 'text' ;

			$this->json['columns'] = isset( $this->input_attrs['columns'] ) ? $this->input_attrs['columns'] : 1 ;

			if ( isset( $this->input_attrs['responsive'] ) && $this->input_attrs['responsive'] == true ) {

				$this->json['desktop'] = [];
			    $this->json['tablet']  = [];
			    $this->json['mobile']  = [];

			    foreach ( $this->settings as $setting_key => $setting ) {

			        $this->json[ $setting_key ] = [
			            'id'        => $setting->id,
			            'default'   => $setting->default,
			            'link'      => $this->get_link( $setting_key ),
			            'value'     => $this->value( $setting_key )
			        ];
			    }
			} else {
				$this->json['value'] = $this->value();
				$this->json['defaultValue'] = $this->setting->default;
				$this->json['link'] = $this->get_link();
			}

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
					<div class="desktop responsive-control-wrap columns-{{data.columns}} active">					
						<# _.each( data.desktopChoices, function( choice, key ) { #>
							<#  var value = ( data.desktop.value ) ? data.desktop.value : data.desktop.default; #>
							<label>
								<# if ( key == value ) { #>
									<input type="radio" class="desktop-radio-button-input" name="{{data.desktop.id}}" value="{{ key }}" {{{ data.desktop.link }}} checked/>
								<# } else { #>
									<input type="radio" class="desktop-radio-button-input" name="{{data.desktop.id}}" value="{{ key }}" {{{ data.desktop.link }}}/>
								<# } #>						
								<# if ( data.item == 'image' ) { #>
									<img src="{{ choice.image }}" title="{{ choice.name }}" alt="{{ choice.name }}">
								<# } #>

								<# if ( data.item == 'icon' ) { #>
									<span class="dashicons {{ choice }}"></span>
								<# } #>

								<# if ( data.item == 'icon-text' ) { #>
									<span class="dashicons {{ choice.icon }}">{{{ choice.text }}}</span>
								<# } #>

								<# if ( data.item == 'text' ) { #>
									<span>{{{ choice }}}</span>
								<# } #>
							</label>
						<# } ) #>					
			    	</div>
			    <# } #>

				<# if ( data.tablet ) { #>
					<div class="tablet responsive-control-wrap columns-{{data.columns}}">
						<# _.each( data.tabletChoices, function( choice, key ) { #>
							<#  var value = ( data.tablet.value ) ? data.tablet.value : data.tablet.default; #>
							<label>	
								<# if ( key == value ) { #>
									<input type="radio" class="tablet-radio-button-input" name="{{data.tablet.id}}" value="{{ key }}" {{{ data.tablet.link }}} checked/>
								<# } else { #>
									<input type="radio" class="tablet-radio-button-input" name="{{data.tablet.id}}" value="{{ key }}" {{{ data.tablet.link }}}/>
								<# } #>	
								<# if ( data.item == 'image' ) { #>
									<img src="{{ choice.image }}" title="{{ choice.name }}" alt="{{ choice.name }}">
								<# } #>

								<# if ( data.item == 'icon' ) { #>
									<span class="dashicons {{ choice }}"></span>
								<# } #>

								<# if ( data.item == 'icon-text' ) { #>
									<span class="dashicons {{ choice.icon }}">{{{ choice.text }}}</span>
								<# } #>

								<# if ( data.item == 'text' ) { #>
									<span>{{{ choice }}}</span>
								<# } #>
							</label>
						<# } ) #>
					</div>
			    <# } #>

				<# if ( data.mobile ) { #>
					<div class="mobile responsive-control-wrap columns-{{data.columns}}">
						<# _.each( data.mobileChoices, function( choice, key ) { #>
							<# var value = ( data.mobile.value ) ? data.mobile.value : data.mobile.default; #>
							<label>	
								<# if ( key == value ) { #>
									<input type="radio" class="mobile-radio-button-input" name="{{data.mobile.id}}" value="{{ key }}" {{{ data.mobile.link }}} checked/>
								<# } else { #>
									<input type="radio" class="mobile-radio-button-input" name="{{data.mobile.id}}" value="{{ key }}" {{{ data.mobile.link }}}/>
								<# } #>
								<# if ( data.item == 'image' ) { #>
									<img src="{{ choice.image }}" title="{{ choice.name }}" alt="{{ choice.name }}">
								<# } #>

								<# if ( data.item == 'icon' ) { #>
									<span class="dashicons {{ choice }}"></span>
								<# } #>

								<# if ( data.item == 'icon-text' ) { #>
									<span class="dashicons {{ choice.icon }}">{{{ choice.text }}}</span>
								<# } #>

								<# if ( data.item == 'text' ) { #>
									<span>{{{ choice }}}</span>
								<# } #>
							</label>
						<# } ) #>
			    	</div>
			    <# } #>
			<# } else { #>
				<div class="control-wrap columns-{{data.columns}}">					
					<# _.each( data.choices, function( choice, key ) { #>
						<# var value = data.value; #>
						<label>		
							<# if ( key == value ) { #>
								<input type="radio" class="radio-button-input" name="{{data.id}}" value="{{ key }}" {{{ data.link }}} checked/>
							<# } else { #>
								<input type="radio" class="radio-button-input" name="{{data.id}}" value="{{ key }}" {{{ data.link }}}/>
							<# } #>	
							<# if ( data.item == 'image' ) { #>
								<img src="{{ choice.image }}" title="{{ choice.name }}" alt="{{ choice.name }}">
							<# } #>

							<# if ( data.item == 'icon' ) { #>
								<span class="dashicons {{ choice }}"></span>
							<# } #>

							<# if ( data.item == 'icon-text' ) { #>
								<span class="dashicons {{ choice.icon }}">{{{ choice.text }}}</span>
							<# } #>

							<# if ( data.item == 'text' ) { #>
								<span>{{{ choice }}}</span>
							<# } #>
						</label>
					<# } ) #>					
		    	</div>
			<# } #>
			<?php
		}
	}
}

