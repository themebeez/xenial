<?php
/**
 * Google Font Select Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	
	return;
}

class Xenial_Customize_Google_Font_Selector_Control extends WP_Customize_Control {

		/**
		 * The type of control being rendered
		 */
		public $type = 'xenial-google-fonts';

		/**
		 * The list of Google Fonts
		 */
		private $fontList = false;

		/**
		 * The saved font values decoded from json
		 */
		private $fontValues = [];

		/**
		 * The index of the saved font within the list of Google fonts
		 */
		private $fontListIndex = 0;

		/**
		 * The number of fonts to display from the json file. Either positive integer or 'all'. Default = 'all'
		 */
		private $fontCount = 'all';

		/**
		 * The font list sort order. Either 'alpha' or 'popular'. Default = 'alpha'
		 */
		private $fontOrderBy = 'alpha';

		/**
		 * Get our list of fonts from the json file
		 */
		public function __construct( $manager, $id, $args = array(), $options = array() ) {

			parent::__construct( $manager, $id, $args );

			// Get the font sort order
			if ( isset( $this->input_attrs['orderby'] ) && strtolower( $this->input_attrs['orderby'] ) === 'popular' ) {
				$this->fontOrderBy = 'popular';
			}

			// Get the list of Google fonts
			if ( isset( $this->input_attrs['font_count'] ) ) {
				if ( 'all' != strtolower( $this->input_attrs['font_count'] ) ) {
					$this->fontCount = ( abs( (int) $this->input_attrs['font_count'] ) > 0 ? abs( (int) $this->input_attrs['font_count'] ) : 'all' );
				}
			}

			$this->fontList = $this->getGoogleFonts( 'all' );

			// Decode the default json font value
			$this->fontValues = json_decode( $this->value() );

			// Find the index of our default font within our list of Google fonts
			$this->fontListIndex = $this->getFontIndex( $this->fontList, $this->fontValues->font );
		}


		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/typography/';

			$select_asset_uri = XENIAL_THEME_URI . '/customizer/assets/';

			wp_enqueue_style(
				'slimselect',
				$select_asset_uri . 'css/slimselect.css',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_style(
				XENIAL_THEME_SLUG . '-typography-control',
				$asset_uri . 'typography-control.css',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script(
				'slimselect',
				$select_asset_uri . 'js/slimselect.min.js',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script(
				XENIAL_THEME_SLUG . '-typography-control',
				$asset_uri . 'typography-control.js',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);
		}
		
		/**
		 * Export our List of Google Fonts to JavaScript
		 */
		public function to_json() {
			parent::to_json();
			$this->json['googlefontslist'] = $this->fontList;
		}
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {

			$fontCounter = 0;
			$isFontInList = false;
			$fontListStr = '';

			if ( ! empty( $this->fontList ) ) {
				$font_variants = $this->fontList[$this->fontListIndex]->variants;
				?>
				<div class="google_fonts_select_control">
					<?php 
					if ( ! empty( $this->label ) ) { 
						?>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
						<?php 
					} 

					if ( ! empty( $this->description ) ) { 
						?>
						<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
						<?php 
					} 
					?>
					<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-google-font-selection" <?php $this->link(); ?> />
					<div class="customize-control-description">
						<strong><?php echo esc_html__( 'Font Family', 'xenial' );?></strong>
					</div>
					<div class="google-fonts">
						<select class="google-fonts-list" id="google-font-<?php echo esc_attr( $this->id ); ?>" control-name="<?php echo esc_attr( $this->id ); ?>" data-id="<?php echo esc_attr( $this->id ); ?>">
							<?php
							foreach ( $this->fontList as $key => $value ) {
								$fontCounter++;
								$fontListStr .= '<option value="' . $value->family . '" ' . selected( $this->fontValues->font, $value->family, false ) . '>' . $value->family . '</option>';

								if ( $this->fontValues->font === $value->family ) {
									$isFontInList = true;
								}

								if ( is_int( $this->fontCount ) && $fontCounter === $this->fontCount ) {
									break;
								}
							}

							if ( ! $isFontInList && $this->fontListIndex ) {
								// If the default or saved font value isn't in the list of displayed fonts, add it to the top of the list as the default font
								$fontListStr = '<option value="' . $this->fontList[$this->fontListIndex]->family . '" ' . selected( $this->fontValues->font, $this->fontList[$this->fontListIndex]->family, false ) . '>' . $this->fontList[$this->fontListIndex]->family . ' (default)</option>' . $fontListStr;
							}

							// Display our list of font options
							echo $fontListStr;
							?>
						</select>
					</div>
					<div class="customize-control-description">
						<strong><?php echo esc_html__( 'Font Variants', 'xenial' );?></strong>
					</div>
					<div class="weight-style">
						<select class="google-fonts-regularweight-style" id="google-font-weights-<?php echo esc_attr( $this->id ); ?>" multiple>
							<?php
							
							if ( $font_variants ) {
								$font_weights = $this->fontValues->regularweight;
								foreach ( $font_variants as $key => $value ) {
									$selected = '';
									if ( 
										is_array( $font_weights ) && 
										in_array( $value, $font_weights ) 
									) {
										$selected = 'selected="selected"';
									}
									?>
									<option value="<?php echo esc_attr( $value ); ?>" <?php echo $selected; ?>><?php echo esc_html( $this->getReadableFontWeight( $value ) ); ?></option>
									<?php
								}
							}
							?>
						</select>
					</div>
					<div class="customize-control-description">
						<strong><?php echo esc_html__( 'Font Weight', 'xenial' ) ?></strong>
					</div>
					<div class="weight-style">
						<select class="google-fonts-weights" id="google-font-weight-<?php echo esc_attr( $this->id ); ?>">
							<?php
							$optionCount = 0;
							if ( 
								is_array( $font_variants ) &&
								$font_variants
							) { 
								$bold_weights = $this->fontValues->boldweight;
								foreach ( $font_variants as $key => $value ) {
									$selected = '';
									if ( 
										is_array( $bold_weights ) && 
										in_array( $value, $bold_weights ) 
									) {
										$selected = 'selected="selected"';
									}
									echo '<option value="' . $value . '" '. $selected . '>' . esc_html( $this->getReadableFontWeight( $value ) ) . '</option>';
									$optionCount++;
								}
							}
							// This should never evaluate as there'll always be at least a 'regular' weight
							if( $optionCount == 0 ) {

								echo '<option value="">' . esc_html__( 'Not Available for this font', 'xenial' ) . '</option>';
							}
							?>
						</select>
					</div>
					<input type="hidden" class="google-fonts-category" value="<?php echo $this->fontValues->category; ?>">
				</div>
				<?php
			}
		}

		/**
		 * Find the index of the saved font in our multidimensional array of Google Fonts
		 */
		public function getFontIndex( $haystack, $needle ) {

			if ( ! $haystack ) {
				return;
			}

			foreach( $haystack as $key => $value ) {

				if( $value->family == $needle ) {

					return $key;
				}
			}

			return false;
		}

		/**
		 * Return the list of Google Fonts from our json file. Unless otherwise specfied, list will be limited to 30 fonts.
		 */
		public function getGoogleFonts( $count = 30 ) {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/typography/';

			// Google Fonts json generated from https://www.googleapis.com/webfonts/v1/webfonts?sort=popularity&key=YOUR-API-KEY

			$fontFile = $asset_uri . 'google-fonts-alphabetical.json';

			if ( $this->fontOrderBy === 'popular' ) {

				$fontFile = $asset_uri . 'google-fonts-popularity.json';
			}

			$request = wp_remote_get( $fontFile );

			if( is_wp_error( $request ) ) {
				return "";
			}

			$body = wp_remote_retrieve_body( $request );

			$content = json_decode( $body );

			if( $count == 'all' ) {
				return $content->items;
			} else {
				return array_slice( $content->items, 0, $count );
			}
		}


		public function getReadableFontWeight( $font_weight_value ) {

			$font_weight = '';

			switch ( $font_weight_value ) {

				case 'regular' :
					$font_weight = '400';
					break;
				case 'italic' :
					$font_weight = '400 ' . ucfirst( $font_weight_value );
					break;
				default :
					$font_weight = preg_split( '/(?<=[0-9])(?=[a-z]+)/i', $font_weight_value );	

					if ( is_array( $font_weight ) && count( $font_weight ) > 1 ) {
						$font_weight = $font_weight[0] . ' ' . $font_weight[1];
					} else {
						$font_weight = $font_weight[0];
					}
			}

			return $font_weight;
		}
	}