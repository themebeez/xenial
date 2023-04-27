<?php
/**
 * Customize typography control.
 *
 * @since 1.0.3
 *
 * @package Xenial
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return;
}

/**
 * Custom Customize Typography Control.
 *
 * @since 1.0.3
 */
class Xenial_Customize_Typography_Control extends WP_Customize_Control {

	/**
	 * The type of control being rendered.
	 *
	 * @var string $type
	 */
	public $type = 'xenial-typography';

	/**
	 * List of Google fonts.
	 *
	 * @var array $google_fonts
	 */
	private $google_fonts = array();

	/**
	 * Font size input field attributes.
	 *
	 * @var array $font_size_input_attrs
	 */
	private $font_size_input_attrs = array();

	/**
	 * Line height input field attributes.
	 *
	 * @var array $line_height_input_attrs
	 */
	private $line_height_input_attrs = array();

	/**
	 * Letter spacing input field attributes.
	 *
	 * @var array $letter_spacing_input_attrs
	 */
	private $letter_spacing_input_attrs = array();

	/**
	 * Get our list of fonts from the json file.
	 *
	 * @since 1.0.3
	 *
	 * @param object $manager WP Customize Manager.
	 * @param string $id Control ID.
	 * @param array  $args An associative array containing arguments for the setting.
	 */
	public function __construct( $manager, $id, $args = array() ) {

		parent::__construct( $manager, $id, $args );

		$this->google_fonts = $this->get_google_fonts();

		$this->font_size_input_attrs = apply_filters(
			'xenial_font_size_input_attrs',
			array(
				'min'  => '0',
				'max'  => '200',
				'step' => '1',
			)
		);

		$this->line_height_input_attrs = apply_filters(
			'xenial_line_height_input_attrs',
			array(
				'min'  => '0',
				'max'  => '10',
				'step' => '0.1',
			)
		);

		$this->letter_spacing_input_attrs = apply_filters(
			'xenial_letter_spacing_input_attrs',
			array(
				'min'  => '0',
				'max'  => '10',
				'step' => '0.1',
			)
		);
	}


	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @since 1.0.3
	 */
	public function enqueue() {

		$asset_uri = get_template_directory_uri() . '/customizer/controls/responsive-typography/';

		$select_asset_uri = get_template_directory_uri() . '/customizer/assets/';

		wp_enqueue_style(
			'slimselect',
			$select_asset_uri . 'css/slimselect.css',
			null,
			'2.0.2',
			'all'
		);

		wp_enqueue_style(
			'xenial-typography',
			$asset_uri . 'typography.css',
			null,
			XENIAL_THEME_VERSION,
			'all'
		);

		wp_enqueue_script(
			'slimselect',
			$select_asset_uri . 'js/slimselect.min.js',
			null,
			'2.0.2',
			true
		);

		wp_enqueue_script(
			'xenial-typography',
			$asset_uri . 'typography.js',
			array( 'jquery', 'customize-base', 'jquery-ui-slider' ),
			XENIAL_THEME_VERSION,
			true
		);
	}

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @since 1.0.3
	 */
	public function to_json() {

		parent::to_json();

		$setting_value                = ( $this->value() ) ? $this->value() : $this->setting->default;
		$json_decoded_setting_default = json_decode( $this->setting->default, true );
		$json_decoded_setting_value   = json_decode( $setting_value, true );

		$setting_value = wp_json_encode( xenial_recursive_parse_args( $json_decoded_setting_value, $json_decoded_setting_default ) );

		$this->json['id']                 = $this->id;
		$this->json['label']              = $this->label;
		$this->json['default']            = $this->setting->default;
		$this->json['value']              = $setting_value;
		$this->json['googleFontsList']    = $this->google_fonts;
		$this->json['websafeFontsList']   = $this->get_websafe_fonts();
		$this->json['defaultFontWeights'] = $this->get_default_font_weights();

		if ( isset( $json_decoded_setting_value['source'] ) && 'google' === $json_decoded_setting_value['source'] ) {
			$this->json['googleFontVariants'] = $this->get_google_font_variants( $json_decoded_setting_value['font_family'] );
		} else {
			$this->json['googleFontVariants'] = $this->get_google_font_variants();
		}

		$this->json['fontSizeInputAttrs'] = 'min="' . $this->font_size_input_attrs['min'] . '" max="' . $this->font_size_input_attrs['max'] . '" step="' . $this->font_size_input_attrs['step'] . '"';

		$this->json['lineHeightInputAttrs'] = 'min="' . $this->line_height_input_attrs['min'] . '" max="' . $this->line_height_input_attrs['max'] . '" step="' . $this->line_height_input_attrs['step'] . '"';

		$this->json['letterSpacingInputAttrs'] = 'min="' . $this->letter_spacing_input_attrs['min'] . '" max="' . $this->letter_spacing_input_attrs['max'] . '" step="' . $this->letter_spacing_input_attrs['step'] . '"';
	}

	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding WP_Customize_Control::to_json().
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @since 1.0.3
	 */
	public function content_template() {
		?>
		<# let defaultValue = JSON.parse(data.default); #>
		<# let savedValue = JSON.parse(data.value); #>
		<# let savedFontVariants = savedValue.font_variants; #>
		<div class="xenial-customize-control-label flex">
			<label class="customize-control-title">{{ data.label }}</label>
			<button class="xenial-customize-button xenial-control-toggle-button" data-control="{{ data.id }}">
				<span class="box-border-expand-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12.9 6.858l4.242 4.243L7.242 21H3v-4.243l9.9-9.9zm1.414-1.414l2.121-2.122a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414l-2.122 2.121-4.242-4.242z"/></svg>
				</span>
			</button>
		</div>
		<input
			type="hidden"
			name="xenial-typography-control-value-{{ data.id }}"
			id="xenial-typography-control-value-{{ data.id }}"
			value="{{ data.value }}"
			data-control="{{ data.id }}"
			{{ data.link }}
		>
		<div
			class="xenial-control-modal xenial-typograhy-control"
			id="xenial-typography-control-{{ data.id }}"
			data-control="{{ data.id }}"
		>
			<# if ( 'source' in savedValue && 'font_family' in savedValue ) { #>
				<div class="xenial-customize-control-section xenial-typography-section font-family">
					<div class="xenial-customize-control-section-inner xenial-typography-section-inner no-flex">
						<span class="label"><?php echo esc_html__( 'Font Family', 'xenial' ); ?></span>
						<select
							class="xenial-font-family-select"
							id="xenial-font-family-select-{{ data.id }}"
							data-control="{{ data.id }}"
						>
							<# if ( typeof data.websafeFontsList === 'object' && data.websafeFontsList !== null ) { #>
								<optgroup label="<?php echo esc_attr__( 'Websafe Fonts', 'xenial' ); ?>">
									<# _.each( data.websafeFontsList, function( value, key ) { #>
										<#
										let selectedFontFamily = '';							
										if ( savedValue.source == 'websafe' ) {
											if ( savedValue.font_family == value ) {
												selectedFontFamily = "selected";
											} else {
												if ( defaultValue.font_family == value ) {
													selectedFontFamily = "selected";
												}
											}
										}
										#>
										<option value="{{ key }}" data-variants="{{ data.websafeFontVariants }}" data-source="websafe" {{{ selectedFontFamily }}}>{{ value }}</option>
									<# } ); #>
								</optgroup>
							<# } #>
							<# if ( data.googleFontsList.length > 0 ) { #>
								<optgroup label="<?php echo esc_attr__( 'Google Fonts', 'xenial' ); ?>">
									<# _.each( data.googleFontsList, function( value, key ) { #>
										<#
										let selectedFontFamily = '';								
										if ( savedValue.source == 'google' ) {
											if ( savedValue.font_family == value.family ) {
												selectedFontFamily = "selected";
											} else {
												if ( defaultValue.font_family == value.family ) {
													selectedFontFamily = "selected";
												}
											}
										}
										#>
										<option
											value="{{ value.family }}"
											data-variants="{{ value.variants }}"
											data-subsets="{{ value.subsets }}"
											data-source="google"
											{{{ selectedFontFamily }}}
										>
											{{ value.family }}
										</option>
									<# } ); #>
								</optgroup>
							<# } #>
						</select>
						<#
						let variantsSelectWrapperClass = ( savedValue.source === 'google' ) ? 'customize-display' : 'customize-hidden';
						#>
						<div class="xenial-google-variants-select-wrapper {{ variantsSelectWrapperClass }}" id="xenial-google-variants-select-wrapper-{{ data.id }}">
							<span class="label"><?php echo esc_html__( 'Variants', 'xenial' ); ?></span>
							<select
								name="xenial-font-variants-select-{{ data.id }}"
								id="xenial-font-variants-select-{{ data.id }}"
								data-control="{{ data.id }}"
								multiple
							>
								<#
								let savedFontVariantsArray = ( savedFontVariants ) ? savedFontVariants.split(",") : [];
								let googleFontVariants = data.googleFontVariants;
								_.each( googleFontVariants, function( value, key ) {
									let selectedFontVariant = ( savedFontVariantsArray.includes( value ) ) ? 'selected' : '';
									#>
									<option value="{{ value }}" {{{ selectedFontVariant }}}>{{ value }}</option>
								<# 
								} );
								#>
							</select>
						</div>
					</div>
				</div>
			<# } #>
			<# if ( 'font_weight' in savedValue ) { #>
				<div class="xenial-customize-control-section xenial-typography-section font-weight">
					<div class="xenial-customize-control-section-inner xenial-typography-section-inner no-flex">
						<span class="label"><?php echo esc_html__( 'Font Weight', 'xenial' ); ?></span>
						<select
							class="xenial-font-weight-select"
							id="xenial-font-weight-select-{{ data.id }}"
							data-control="{{ data.id }}"
						>
							<#
							let savedFontVariantsArray = [];
							if ( savedValue.source == 'google' ) {
								savedFontVariantsArray = ( savedFontVariants ) ? savedFontVariants.split(",") : [];
							} else {
								savedFontVariantsArray = data.defaultFontWeights;
							}
							let selectedFontWeightInherit = ( savedValue.font_weight == 'inherit' ) ? 'selected' : '';
							#>
							<option value="inherit" {{{ selectedFontWeightInherit }}}>Inherit</option>
							<#
							_.each( savedFontVariantsArray, function( value, key ) {
								let selectedFontWeight = ( value === savedValue.font_weight ) ? 'selected' : '';
								#>
								<option value="{{ value }}" {{{ selectedFontWeight }}}>{{ value }}</option>
							<# } ); #>
						</select>
					</div>
				</div>
			<# } #>
			<input
				type="hidden"
				name="xenial-font-url-{{ data.id }}"
				id="xenial-font-url-{{ data.id }}"
				value="{{ savedValue.font_url }}"
			>
			<# if ( 'font_sizes' in savedValue || 'font_size' in savedValue ) { #>
				<div class="xenial-customize-control-section xenial-typography-section font-size">
					<div class="xenial-customize-control-section-inner xenial-typography-section-inner no-flex">
						<div style="display:flex; justify-content: space-between;">
							<span class="label"><?php echo esc_html__( 'Font Size', 'xenial' ); ?></span>
							<div class="xenial-responsive-switchers-reset-wrapper">
								<button
									type="button"
									class="xenial-customize-button xenial-customize-reset-button no-style" name="xenial-font-size-reset-{{ data.id }}"
									id="xenial-font-size-reset-{{ data.id }}"
									data-control="{{ data.id }}"
								>
									<span class="dashicons dashicons-image-rotate"></span>
								</button>
								<# if ( 'font_sizes' in defaultValue ) { #>
									<ul class="responsive-switchers">
										<?php xenial_get_customize_responsive_icon_desktop(); ?>
										<?php xenial_get_customize_responsive_icon_tablet(); ?>
										<?php xenial_get_customize_responsive_icon_mobile(); ?>
									</ul>
								<# } #>
							</div>
						</div>
						<div class="xenial-customizer-control-section-field-wrapper xenial-typography-control-wrapper">
							<# if ( 'font_sizes' in defaultValue ) { #>
								<div class="desktop responsive-control-wrap active">
									<div class="xenial-slider xenial-slider-font-size desktop-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<#
										let desktopFontSize = ( savedValue.font_sizes.desktop.value ) ? savedValue.font_sizes.desktop.value : defaultValue.font_sizes.desktop.value;
										let desktopFontSizeUnit = ( savedValue.font_sizes.desktop.unit ) ? savedValue.font_sizes.desktop.unit : defaultValue.font_sizes.desktop.unit;
										#>
										<input
											{{{ data.fontSizeInputAttrs }}}
											type="number"
											class="slider-input desktop-input xenial-font-size-input"
											data-device="desktop"
											value="{{ desktopFontSize }}"
											data-default="{{ defaultValue.font_sizes.desktop.value }}"
											id="xenial-desktop-font-size-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
										<div class="xenial-unit-wrapper">
											<button
												class="xenial-customize-button secondary xenial-unit-button unit-dropdown-toggle-button"
												value="{{ desktopFontSizeUnit }}"
												name="xenial-desktop-font-size-unit-{{ data.id }}"
												id="xenial-desktop-font-size-unit-{{ data.id }}"
												data-control="{{ data.id }}"
											>
												<span>{{ desktopFontSizeUnit }}</span>
												<input
													type="hidden"
													class="xenial-unit-input xenial-font-size-unit-input"
													data-device="desktop"
													id="xenial-desktop-font-size-unit-input-{{ data.id }}"
													data-default="{{ defaultValue.font_sizes.desktop.unit }}"
													name="xenial-desktop-font-size-unit-input-{{ data.id }}"
													value="{{ desktopFontSizeUnit }}"
													data-control="{{ data.id }}"
												>
											</button>
											<div class="xenial-unit-dropdown">
												<button
													class="xenial-customize-button xenial-unit-button"
													value="px"
													name="xenial-font-size-unit-px-{{ data.id }}"
												>px</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="em"
													name="xenial-font-size-unit-em-{{ data.id }}"
												>em</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="rem"
													name="xenial-font-size-unit-rem-{{ data.id }}"
												>rem</button>
											</div>
										</div>
									</div>
								</div>
								<div class="tablet responsive-control-wrap">
									<div class="xenial-slider xenial-slider-font-size tablet-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<#
										let tabletFontSize = ( savedValue.font_sizes.tablet.value ) ? savedValue.font_sizes.tablet.value : defaultValue.font_sizes.tablet.value;
										let tabletFontSizeUnit = ( savedValue.font_sizes.tablet.unit ) ? savedValue.font_sizes.tablet.unit : defaultValue.font_sizes.tablet.unit;
										#>
										<input 
											{{{ data.fontSizeInputAttrs }}}	
											type="number"
											class="slider-input tablet-input xenial-font-size-input"
											data-device="tablet"
											value="{{ tabletFontSize }}"
											data-default="{{ defaultValue.font_sizes.tablet.value }}"
											id="xenial-tablet-font-size-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
										<div class="xenial-unit-wrapper">
											<button
												class="xenial-customize-button secondary xenial-unit-button unit-dropdown-toggle-button"
												value="{{ tabletFontSizeUnit }}"
												name="xenial-tablet-font-size-unit-{{ data.id }}"
												id="xenial-tablet-font-size-unit-{{ data.id }}"
												data-control="{{ data.id }}"
											>
												<span>{{ tabletFontSizeUnit }}</span>
												<input
													type="hidden"
													class="xenial-unit-input xenial-font-size-unit-input"
													data-device="tablet"
													id="xenial-tablet-font-size-unit-input-{{ data.id }}"
													data-default="{{ defaultValue.font_sizes.tablet.unit }}"
													name="xenial-tablet-font-size-unit-input-{{ data.id }}"
													value="{{ tabletFontSizeUnit }}"
													data-control="{{ data.id }}"
												>
											</button>
											<div class="xenial-unit-dropdown">
												<button
													class="xenial-customize-button xenial-unit-button"
													value="px"
													name="xenial-font-size-unit-px-{{ data.id }}"
												>px</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="em"
													name="xenial-font-size-unit-em-{{ data.id }}"
												>em</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="rem"
													name="xenial-font-size-unit-rem-{{ data.id }}"
												>rem</button>
											</div>
										</div>
									</div>	
								</div>
								<div class="mobile responsive-control-wrap">
									<div class="xenial-slider xenial-slider-font-size mobile-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<#
										let mobileFontSize = ( savedValue.font_sizes.mobile.value ) ? savedValue.font_sizes.mobile.value : defaultValue.font_sizes.mobile.value;
										let mobileFontSizeUnit = ( savedValue.font_sizes.mobile.unit ) ? savedValue.font_sizes.mobile.unit : defaultValue.font_sizes.mobile.unit;
										#>
										<input
											{{{ data.fontSizeInputAttrs }}}
											type="number"
											class="slider-input mobile-input xenial-font-size-input"
											data-device="mobile"
											value="{{ mobileFontSize }}"
											data-default="{{ defaultValue.font_sizes.mobile.value }}"
											id="xenial-mobile-font-size-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
										<div class="xenial-unit-wrapper">
											<button
												class="xenial-customize-button secondary xenial-unit-button unit-dropdown-toggle-button"
												value="{{ mobileFontSizeUnit }}"
												name="xenial-mobile-font-size-unit-{{ data.id }}"
												id="xenial-mobile-font-size-unit-{{ data.id }}"
												data-control="{{ data.id }}"
											>
												<span>{{ mobileFontSizeUnit }}</span>
												<input
													type="hidden"
													class="xenial-unit-input xenial-font-size-unit-input"
													data-device="mobile"
													id="xenial-mobile-font-size-unit-input-{{ data.id }}"
													data-default="{{ defaultValue.font_sizes.mobile.unit }}"
													name="xenial-mobile-font-size-unit-input-{{ data.id }}"
													value="{{ mobileFontSizeUnit }}"
													data-control="{{ data.id }}"
												>
											</button>
											<div class="xenial-unit-dropdown">
												<button
													class="xenial-customize-button xenial-unit-button"
													value="px"
													name="xenial-font-size-unit-px-{{ data.id }}"
												>px</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="em"
													name="xenial-font-size-unit-em-{{ data.id }}"
												>em</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="rem"
													name="xenial-font-size-unit-rem-{{ data.id }}"
												>rem</button>
											</div>
										</div>
									</div>
								</div>
							<# } #>
							<# if ( 'font_size' in defaultValue ) { #>
								<div class="normal non-responsive-control-wrap">
									<div class="xenial-slider xenial-slider-font-size normal-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<#
										let normalFontSize = ( savedValue.font_size.value ) ? savedValue.font_size.value : defaultValue.font_size.value;
										let normalFontSizeUnit = ( savedValue.font_size.unit ) ? savedValue.font_size.unit : defaultValue.font_size.unit;
										#>
										<input
											{{{ data.fontSizeInputAttrs }}}
											type="number"
											class="slider-input normal-input xenial-font-size-input"
											data-device="normal"
											value="{{ normalFontSize }}"
											data-default="{{ defaultValue.font_size.value }}"
											id="xenial-normal-font-size-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
										<div class="xenial-unit-wrapper">
											<button
												class="xenial-customize-button secondary xenial-unit-button unit-dropdown-toggle-button"
												value="{{ normalFontSizeUnit }}"
												name="xenial-desktop-font-size-unit-{{ data.id }}"
												id="xenial-desktop-font-size-unit-{{ data.id }}"
												data-control="{{ data.id }}"
											>
												<span>{{ normalFontSizeUnit }}</span>
												<input
													type="hidden"
													class="xenial-unit-input xenial-font-size-unit-input"
													data-device="normal"
													id="xenial-normal-font-size-unit-input-{{ data.id }}"
													data-default="{{ defaultValue.font_size.unit }}"
													name="xenial-normal-font-size-unit-input-{{ data.id }}"
													value="{{ normalFontSizeUnit }}"
													data-control="{{ data.id }}"
												>
											</button>
											<div class="xenial-unit-dropdown">
												<button
													class="xenial-customize-button xenial-unit-button"
													value="px"
													name="xenial-font-size-unit-px-{{ data.id }}"
												>px</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="em"
													name="xenial-font-size-unit-em-{{ data.id }}"
												>em</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="rem"
													name="xenial-font-size-unit-rem-{{ data.id }}"
												>rem</button>
											</div>
										</div>
									</div>
								</div>
							<# } #>
						</div>
					</div>
				</div>
			<# } #>
			<# if ( 'line_heights' in savedValue || 'line_height' in savedValue ) { #>
				<div class="xenial-customize-control-section xenial-typography-section line-height">
					<div class="xenial-customize-control-section-inner xenial-typography-section-inner no-flex">
						<div style="display:flex; justify-content: space-between;">
							<span class="label"><?php echo esc_html__( 'Line Height', 'xenial' ); ?></span>
							<div class="xenial-responsive-switchers-reset-wrapper">
								<button
									type="button"
									class="xenial-customize-button xenial-customize-reset-button no-style"
									name="xenial-line-height-reset-{{ data.id }}"
									id="xenial-line-height-reset-{{ data.id }}"
									data-control="{{ data.id }}"
								>
									<span class="dashicons dashicons-image-rotate"></span>
								</button>
								<# if ( 'line_heights' in defaultValue ) { #>
									<ul class="responsive-switchers">
										<?php xenial_get_customize_responsive_icon_desktop(); ?>
										<?php xenial_get_customize_responsive_icon_tablet(); ?>
										<?php xenial_get_customize_responsive_icon_mobile(); ?>
									</ul>
								<# } #>
							</div>
						</div>
						<div class="xenial-customizer-control-section-field-wrapper xenial-typography-control-wrapper">
							<# if ( 'line_heights' in defaultValue ) { #>
								<div class="desktop responsive-control-wrap active">
									<div class="xenial-slider xenial-slider-line-height desktop-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<# let desktopLineHeight = ( savedValue.line_heights.desktop ) ? savedValue.line_heights.desktop : defaultValue.line_heights.desktop; #>
										<input
											{{{ data.lineHeightInputAttrs }}}
											type="number"
											class="slider-input desktop-input xenial-line-height-input"
											data-device="desktop"
											value="{{ desktopLineHeight }}"
											data-default="{{ defaultValue.line_heights.desktop }}"
											id="xenial-desktop-line-height-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
									</div>
								</div>
								<div class="tablet responsive-control-wrap">
									<div class="xenial-slider xenial-slider-line-height tablet-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<# let tabletLineHeight = ( savedValue.line_heights.tablet ) ? savedValue.line_heights.tablet : defaultValue.line_heights.tablet; #>
										<input
											{{{ data.lineHeightInputAttrs }}}
											type="number"
											class="slider-input tablet-input xenial-line-height-input"
											data-device="tablet"
											value="{{ tabletLineHeight }}"
											data-default="{{ defaultValue.line_heights.tablet }}"
											id="xenial-tablet-line-height-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
									</div>
								</div>
								<div class="mobile responsive-control-wrap">
									<div class="xenial-slider xenial-slider-line-height mobile-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<# let mobileLineHeight = ( savedValue.line_heights.mobile ) ? savedValue.line_heights.mobile : defaultValue.line_heights.mobile; #>
										<input
											{{{ data.lineHeightInputAttrs }}}
											type="number"
											class="slider-input mobile-input xenial-line-height-input"
											data-device="mobile"
											value="{{ mobileLineHeight }}"
											data-default="{{ defaultValue.line_heights.mobile }}"
											id="xenial-mobile-line-height-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
									</div>
								</div>
							<# } #>
							<# if ( 'line_height' in defaultValue ) { #>
								<div class="normal non-responsive-control-wrap">
									<div class="xenial-slider xenial-slider-line-height normal-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<# let normalLineHeight = ( savedValue.line_height ) ? savedValue.line_height : defaultValue.line_height; #>
										<input
											{{{ data.lineHeightInputAttrs }}}
											type="number"
											class="slider-input normal-input xenial-line-height-input"
											data-device="normal"
											value="{{ normalLineHeight }}"
											data-default="{{ defaultValue.line_height }}"
											id="xenial-normal-line-height-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
									</div>
								</div>
							<# } #>
						</div>
					</div>
				</div>
			<# } #>
			<# if ( 'letter_spacings' in savedValue || 'letter_spacing' in savedValue ) { #>
				<div class="xenial-customize-control-section xenial-typography-section letter-spacing">
					<div class="xenial-customize-control-section-inner xenial-typography-section-inner no-flex">
						<div style="display:flex; justify-content: space-between;">
							<span class="label"><?php echo esc_html__( 'Letter Spacing', 'xenial' ); ?></span>
							<div class="xenial-responsive-switchers-reset-wrapper">
								<button
									type="button"
									class="xenial-customize-button xenial-customize-reset-button no-style"
									name="xenial-letter-spacing-reset-{{ data.id }}"
									id="xenial-letter-spacing-reset-{{ data.id }}"
									data-control="{{ data.id }}"
								>
									<span class="dashicons dashicons-image-rotate"></span>
								</button>
								<# if ( 'letter_spacings' in savedValue ) { #>
									<ul class="responsive-switchers">
										<?php xenial_get_customize_responsive_icon_desktop(); ?>
										<?php xenial_get_customize_responsive_icon_tablet(); ?>
										<?php xenial_get_customize_responsive_icon_mobile(); ?>
									</ul>
								<# } #>
							</div>
						</div>
						<div class="xenial-customizer-control-section-field-wrapper xenial-typography-control-wrapper">
							<# if ( 'letter_spacings' in savedValue ) { #>
								<div class="desktop responsive-control-wrap active">
									<div class="xenial-slider xenial-slider-letter-spacing desktop-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<#
										let desktopLetterSpacing = ( savedValue.letter_spacings.desktop.value ) ? savedValue.letter_spacings.desktop.value : defaultValue.letter_spacings.desktop.value;
										let desktopLetterSpacingUnit = ( savedValue.letter_spacings.desktop.unit ) ? savedValue.letter_spacings.desktop.unit : defaultValue.letter_spacings.desktop.unit;
										#>
										<input
											{{{ data.letterSpacingInputAttrs }}}
											type="number"
											class="slider-input desktop-input xenial-letter-spacing-input"
											data-device="desktop"
											value="{{ desktopLetterSpacing }}"
											data-default="{{ defaultValue.letter_spacings.desktop.value }}"
											id="xenial-desktop-letter-spacing-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
										<div class="xenial-unit-wrapper">
											<button
												class="xenial-customize-button secondary xenial-unit-button unit-dropdown-toggle-button"
												value="{{ desktopLetterSpacingUnit }}"
												name="xenial-desktop-letter-spacing-unit-{{ data.id }}"
												id="xenial-desktop-letter-spacing-unit-{{ data.id }}"
												data-control="{{ data.id }}"
											>
												<span>{{ desktopLetterSpacingUnit }}</span>
												<input
													type="hidden"
													class="xenial-unit-input xenial-letter-spacing-unit-input"
													data-device="desktop"
													id="xenial-desktop-letter-spacing-unit-input-{{ data.id }}"
													data-default="{{ defaultValue.letter_spacings.desktop.unit }}"
													name="xenial-desktop-letter-spacing-unit-input-{{ data.id }}"
													value="{{ desktopLetterSpacingUnit }}"
													data-control="{{ data.id }}"
												>
											</button>
											<div class="xenial-unit-dropdown">
												<button
													class="xenial-customize-button xenial-unit-button"
													value="px"
													name="xenial-font-size-unit-px-{{ data.id }}"
												>px</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="em"
													name="xenial-font-size-unit-em-{{ data.id }}"
												>em</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="rem"
													name="xenial-font-size-unit-rem-{{ data.id }}"
												>rem</button>
											</div>
										</div>
									</div>	
								</div>
								<div class="tablet responsive-control-wrap">
									<div class="xenial-slider xenial-slider-letter-spacing tablet-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<#
										let tabletLetterSpacing = ( savedValue.letter_spacings.tablet.value ) ? savedValue.letter_spacings.tablet.value : defaultValue.letter_spacings.tablet.value;
										let tabletLetterSpacingUnit = ( savedValue.letter_spacings.tablet.unit ) ? savedValue.letter_spacings.tablet.unit : defaultValue.letter_spacings.tablet.unit;
										#>
										<input
											{{{ data.letterSpacingInputAttrs }}}
											type="number"
											class="slider-input tablet-input xenial-letter-spacing-input"
											data-device="tablet"
											value="{{ tabletLetterSpacing }}"
											data-default="{{ defaultValue.letter_spacings.tablet.value }}"
											id="xenial-tablet-letter-spacing-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
										<div class="xenial-unit-wrapper">
											<button
												class="xenial-customize-button secondary xenial-unit-button unit-dropdown-toggle-button"
												value="{{ tabletLetterSpacingUnit }}"
												name="xenial-tablet-letter-spacing-unit-{{ data.id }}"
												id="xenial-tablet-letter-spacing-unit-{{ data.id }}"
												value="{{ tabletLetterSpacingUnit }}"
												data-control="{{ data.id }}"
											>
												<span>{{ tabletLetterSpacingUnit }}</span>
												<input
													type="hidden"
													class="xenial-unit-input xenial-letter-spacing-unit-input"
													data-device="tablet"
													id="xenial-tablet-letter-spacing-unit-input-{{ data.id }}"
													data-default="{{ defaultValue.letter_spacings.tablet.unit }}"
													name="xenial-tablet-letter-spacing-unit-input-{{ data.id }}"
													data-control="{{ data.id }}"
												>
											</button>
											<div class="xenial-unit-dropdown">
												<button
													class="xenial-customize-button xenial-unit-button"
													value="px"
													name="xenial-font-size-unit-px-{{ data.id }}"
												>px</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="em"
													name="xenial-font-size-unit-em-{{ data.id }}"
												>em</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="rem"
													name="xenial-font-size-unit-rem-{{ data.id }}"
												>rem</button>
											</div>
										</div>
									</div>
								</div>
								<div class="mobile responsive-control-wrap">
									<div class="xenial-slider xenial-slider-letter-spacing mobile-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<#
										let mobileLetterSpacing = ( savedValue.letter_spacings.mobile.value ) ? savedValue.letter_spacings.mobile.value : defaultValue.letter_spacings.mobile.value;
										let mobileLetterSpacingUnit = ( savedValue.letter_spacings.mobile.unit ) ? savedValue.letter_spacings.mobile.unit : defaultValue.letter_spacings.mobile.unit;
										#>
										<input
											{{{ data.letterSpacingInputAttrs }}}
											type="number"
											class="slider-input mobile-input xenial-letter-spacing-input"
											data-device="mobile"
											value="{{ mobileLetterSpacing }}"
											data-default="{{ defaultValue.letter_spacings.mobile.value }}"
											id="xenial-mobile-letter-spacing-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
										<div class="xenial-unit-wrapper">
											<button
												class="xenial-customize-button secondary xenial-unit-button unit-dropdown-toggle-button"
												value="{{ mobileLetterSpacingUnit }}"
												name="xenial-mobile-letter-spacing-unit-{{ data.id }}"
												id="xenial-mobile-letter-spacing-unit-{{ data.id }}"
												data-control="{{ data.id }}"
											>
												<span>{{ mobileLetterSpacingUnit }}</span>
												<input
													type="hidden"
													class="xenial-unit-input xenial-letter-spacing-unit-input"
													data-device="mobile"
													id="xenial-mobile-letter-spacing-unit-input-{{ data.id }}"
													data-default="{{ defaultValue.letter_spacings.mobile.unit }}"
													name="xenial-mobile-letter-spacing-unit-input-{{ data.id }}"
													value="{{ mobileLetterSpacingUnit }}"
													data-control="{{ data.id }}"
												>
											</button>
											<div class="xenial-unit-dropdown">
												<button
													class="xenial-customize-button xenial-unit-button"
													value="px"
													name="xenial-font-size-unit-px-{{ data.id }}"
												>px</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="em"
													name="xenial-font-size-unit-em-{{ data.id }}"
												>em</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="rem"
													name="xenial-font-size-unit-rem-{{ data.id }}"
												>rem</button>
											</div>
										</div>
									</div>
								</div>
							<# } #>
							<# if ( 'letter_spacing' in savedValue ) { #>
								<div class="normal non-responsive-control-wrap">
									<div class="xenial-slider xenial-slider-letter-spacing normal-slider"></div>
									<div class="xenial-slider-input" style="display:flex;">
										<#
										let normalLetterSpacing = ( savedValue.letter_spacing.value ) ? savedValue.letter_spacing.value : defaultValue.letter_spacing.value;
										let normalLetterSpacingUnit = ( savedValue.letter_spacing.unit ) ? savedValue.letter_spacing.unit : defaultValue.letter_spacing.unit;
										#>
										<input
											{{{ data.letterSpacingInputAttrs }}}
											type="number"
											class="slider-input normal-input xenial-letter-spacing-input"
											data-device="normal"
											value="{{ normalLetterSpacing }}"
											data-default="{{ defaultValue.letter_spacing.value }}"
											id="xenial-normal-letter-spacing-{{ data.id }}"
											data-control="{{ data.id }}"
										/>
										<div class="xenial-unit-wrapper">
											<button
												class="xenial-customize-button secondary xenial-unit-button unit-dropdown-toggle-button"
												value="{{ normalLetterSpacingUnit }}"
												name="xenial-normal-letter-spacing-unit-{{ data.id }}"
												id="xenial-normal-letter-spacing-unit-{{ data.id }}"
												data-control="{{ data.id }}"
											>
												<span>{{ normalLetterSpacingUnit }}</span>
												<input
													type="hidden"
													class="xenial-unit-input xenial-letter-spacing-unit-input"
													data-device="normal"
													id="xenial-normal-letter-spacing-unit-input-{{ data.id }}"
													data-default="{{ defaultValue.letter_spacing.unit }}"
													name="xenial-normal-letter-spacing-unit-input-{{ data.id }}"
													value="{{ normalLetterSpacingUnit }}"
													data-control="{{ data.id }}"
												>
											</button>
											<div class="xenial-unit-dropdown">
												<button
													class="xenial-customize-button xenial-unit-button"
													value="px"
													name="xenial-font-size-unit-px-{{ data.id }}"
												>px</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="em"
													name="xenial-font-size-unit-em-{{ data.id }}"
												>em</button>
												<button
													class="xenial-customize-button xenial-unit-button"
													value="rem"
													name="xenial-font-size-unit-rem-{{ data.id }}"
												>rem</button>
											</div>
										</div>
									</div>	
								</div>
							<# } #>
						</div>
					</div>
				</div>
			<# } #>
			<# if ( 'font_style' in savedValue ) { #>
				<div class="xenial-customize-control-section xenial-typography-section text-style">
					<div class="xenial-customize-control-section-inner xenial-typography-section-inner no-flex">
						<div style="display:flex; justify-content: space-between;">
							<span class="label"><?php echo esc_html__( 'Text Style', 'xenial' ); ?></span>
							<div class="xenial-responsive-switchers-reset-wrapper">
								<button
									type="button"
									class="xenial-customize-button xenial-customize-reset-button no-style"
									name="xenial-text-style-reset-{{ data.id }}"
									id="xenial-text-style-reset-{{ data.id }}"
									data-control="{{ data.id }}"
								>
									<span class="dashicons dashicons-image-rotate"></span>
								</button>
							</div>
						</div>
						<div class="xenial-customizer-control-section-field-wrapper xenial-typography-style">
							<#
							let textStyle = ( savedValue.font_style ) ? savedValue.font_style : defaultValue.font_style;
							let textStyles = ['normal','italic','underline','line-through'];
							#>
							<input
								type="hidden"
								class="xenial-typography-font-style-input"
								data-change="text-style"
								id="xenial-typography-font-style-input-{{ data.id }}"
								name="xenial-typography-font-style-input-{{ data.id }}"
								value="inherit"
								data-default="{{ defaultValue.font_style }}"
								data-control="{{ data.id }}"
							>
							<div class="xenial-customize-button-group">
								<# _.each( textStyles, function( value ) {
									let selectedTextStyle = ( textStyle == value ) ? 'active' : '';
									switch(value) {
										case 'italic':
											#>
											<button
												class="xenial-customize-button xenial-typography-font-style-button {{ selectedTextStyle }}"
												value="italic"
												name="xenial-font-style-italic-{{ data.id }}"
												id="xenial-font-style-italic-{{ data.id }}"
												style="font-style: italic;"
											>I</button>
											<#
											break;
										case 'underline':
											#>
											<button
												class="xenial-customize-button xenial-typography-font-style-button {{ selectedTextStyle }}"
												value="underline"
												name="xenial-font-style-underline-{{ data.id }}"
												id="xenial-font-style-underline-{{ data.id }}"
												style="text-decoration: underline;"
											>U</button>
											<#
											break;
										case 'line-through':
											#>
											<button
												class="xenial-customize-button xenial-typography-font-style-button {{ selectedTextStyle }}"
												value="line-through"
												name="xenial-font-style-line-through-{{ data.id }}"
												id="xenial-font-style-line-through-{{ data.id }}"
												style="text-decoration: line-through;"
											>S</button>
											<#
											break;
										default:
										#>
										<button
											class="xenial-customize-button xenial-typography-font-style-button {{ selectedTextStyle }}"
											value="normal"
											name="xenial-font-style-normal-{{ data.id }}"
											id="xenial-font-style-normal-{{ data.id }}"
										>-</button>
										<# 
									} 
								} );
								#>
							</div>
						</div>
					</div>
				</div>
			<# } #>
			<# if ( 'text_transform' in savedValue ) { #>
				<div class="xenial-customize-control-section xenial-typography-section text-transform">
					<div class="xenial-customize-control-section-inner xenial-typography-section-inner no-flex">
						<div style="display:flex; justify-content: space-between;">
							<span class="label"><?php echo esc_html__( 'Text Transform', 'xenial' ); ?></span>
							<div class="xenial-responsive-switchers-reset-wrapper">
								<button
									type="button"
									class="xenial-customize-button xenial-customize-reset-button no-style"
									name="xenial-text-transform-reset-{{ data.id }}"
									id="xenial-text-transform-reset-{{ data.id }}"
									data-control="{{ data.id }}"
								>
									<span class="dashicons dashicons-image-rotate"></span>
								</button>
							</div>
						</div>
						<div class="xenial-customizer-control-section-field-wrapper xenial-typography-text-transform">
							<#
							let textTransform = ( savedValue.text_transform ) ? savedValue.text_transform : defaultValue.text_transform;
							let textTransforms = ['inherit','lowercase','capitalize','uppercase'];
							#>
							<input
								type="hidden"
								class="xenial-typography-text-transform-input"
								data-change="text-transform"
								id="xenial-typography-text-transform-input-{{ data.id }}"
								name="xenial-typography-text-transform-input-{{ data.id }}"
								value="inherit"
								data-default="{{ defaultValue.text_transform }}"
								data-control="{{ data.id }}"
							>
							<div class="xenial-customize-button-group">
								<#
								_.each( textTransforms, function( value ) {
									let selectedTextTransform = ( textTransform == value ) ? 'active' : '';
									switch(value) {
										case 'lowercase':
											#>
											<button
												class="xenial-customize-button xenial-typography-text-transform-button {{ selectedTextTransform }}"
												value="lowercase"
												name="xenial-text-transform-lowercase-{{ data.id }}"
												id="xenial-text-transform-lowercase-{{ data.id }}"
											>aa</button>
											<#
											break;
										case 'capitalize':
											#>
											<button
												class="xenial-customize-button xenial-typography-text-transform-button {{ selectedTextTransform }}"
												value="capitalize"
												name="xenial-text-transform-capitalize-{{ data.id }}"
												id="xenial-text-transform-capitalize-{{ data.id }}"
											>Aa</button>
											<#
											break;
										case 'uppercase':
											#>
											<button
												class="xenial-customize-button xenial-typography-text-transform-button {{ selectedTextTransform }}"
												value="uppercase"
												name="xenial-text-transform-uppercase-{{ data.id }}"
												id="xenial-text-transform-uppercase-{{ data.id }}"
											>AA</button>
											<#
											break;
										default:
										#>
										<button
											class="xenial-customize-button xenial-typography-text-transform-button {{ selectedTextTransform }}"
											value="inherit"
											name="xenial-text-transform-inherit-{{ data.id }}"
											id="xenial-text-transform-inherit-{{ data.id }}"
										>-</button>
										<#
									} 
								} );
								#>
							</div>
						</div>
					</div>
				</div>
			<# } #>
		</div>
		<?php
	}

	/**
	 * Read google-fonts.json file and retrieve all the Google fonts detail in an array.
	 *
	 * @since 1.0.3
	 */
	public function get_google_fonts() {

		$asset_uri = get_template_directory_uri() . '/customizer/controls/responsive-typography/';

		// Google Fonts json generated from https://developers.google.com/fonts/docs/developer_api.

		$google_fonts_file = $asset_uri . 'google-fonts.json';

		$request = wp_remote_get( $google_fonts_file );

		if ( is_wp_error( $request ) ) {
			return array();
		}

		$body = wp_remote_retrieve_body( $request );

		$content = json_decode( $body, true );

		return $content['items'];
	}

	/**
	 * Define and returns the list of Websafe fonts.
	 *
	 * @since 1.0.3
	 */
	public function get_websafe_fonts() {

		return apply_filters(
			'xenial_websafe_fonts',
			array(
				'Arial, sans-serif'                        => 'Arial',
				'Baskerville, Baskerville Old Face, serif' => 'Baskerville, Baskerville Old Face',
				'Bodoni MT, Bodoni 72, serif'              => 'Bodoni MT, Bodoni 72',
				'Bookman Old Style, serif'                 => 'Bookman Old Style',
				'Calibri, sans-serif'                      => 'Calibri',
				'Calisto MT, serif'                        => 'Calisto MT',
				'Cambria, serif'                           => 'Cambria',
				'Candara, sans-serif'                      => 'Candara',
				'Century Gothic, CenturyGothic, sans-serif' => 'Century Gothic, CenturyGothic',
				'Consolas, monaco, monospace'              => 'Consolas',
				'Copperplate, Copperplate Gothic Light, fantasy' => 'Copperplate, Copperplate Gothic Light',
				'Courier New, Courier, monospace'          => 'Courier New, Courier',
				'Dejavu Sans, sans-serif'                  => 'Dejavu Sans',
				'Didot, Didot LT STD, serif'               => 'Didot, Didot LT STD',
				'Franklin Gothic'                          => 'Franklin Gothic',
				'Garamond, serif'                          => 'Garamond',
				'Georgia, serif'                           => 'Georgia',
				'Gill Sans, Gill Sans MT, sans-serif'      => 'Gill Sans, Gill Sans MT',
				'Goudy Old Style, serif'                   => 'Goudy Old Style, serif',
				'Helvetica Neue, Helvetica, sans-serif'    => 'Helvetica Neue, Helvetica',
				'Impact, sans serif'                       => 'Impact',
				'Lucida Bright, serif'                     => 'Lucida Bright',
				'Lucida Sans, sans-serif'                  => 'Lucida Sans',
				'MS Sans Serif, sans-serif'                => 'MS Sans Serif',
				'Optima, sans-serif'                       => 'Optima',
				'Palatino, Palatino Linotype, Palatino LT STD, serif' => 'Palatino, Palatino Linotype, Palatino LT STD',
				'Perpetua, serif'                          => 'Perpetua',
				'Rockwell, serif'                          => 'Rockwell',
				'Segoe UI, sans-serif'                     => 'Segoe UI',
				'Tahoma, sans-serif'                       => 'Tahoma',
				'Times New Roman, Times, serif'            => 'Times New Roman, Times',
				'Trebuchet MS, sans-serif'                 => 'Trebuchet MS',
				'Verdana, sans-serif'                      => 'Verdana',
			)
		);
	}

	/**
	 * Define and returns the list of Websafe font variants.
	 *
	 * @since 1.0.3
	 */
	public function get_default_font_weights() {

		return apply_filters(
			'xenial_websafe_font_variants',
			array( '300', '400', '500', '600', '700' )
		);
	}

	/**
	 * Retrieves the font variants of specific Google font family.
	 *
	 * @since 1.0.3
	 *
	 * @param string $font_family Google font family.
	 * @return array $modified_font_variants Google font variants.
	 */
	public function get_google_font_variants( $font_family = '' ) {

		$google_fonts = $this->google_fonts;

		if ( ! empty( $font_family ) ) {

			foreach ( $google_fonts as $google_font ) {

				if ( $google_font['family'] === $font_family ) {

					$modified_font_variants = array();

					foreach ( $google_font['variants'] as $font_variant ) {

						switch ( $font_variant ) {
							case 'regular':
								$modified_font_variants[] = '400';
								break;
							case 'italic':
								$modified_font_variants[] = '400italic';
								break;
							default:
								$modified_font_variants[] = $font_variant;
						}
					}

					return $modified_font_variants;
				}
			}
		} else {
			return array( '400' );
		}
	}
}
