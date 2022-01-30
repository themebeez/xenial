<?php 

if ( ! class_exists( 'Xenial_Customize_Box_Border_Control' ) ) {

	/**
	 * 
	 */
	class Xenial_Customize_Box_Border_Control extends WP_Customize_Control {
		
		public $type = 'xenial-box-border';

		public $is_responsive = false;

		public function __construct( $manager, $id, $args = array(), $options = array() ) {

			parent::__construct( $manager, $id, $args );

			$this->is_responsive = isset( $args['input_attrs']['is_responsive'] ) ? $args['input_attrs']['is_responsive'] : false;
		}

		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/box-border/';

			$pickr_asset_uri = XENIAL_THEME_URI . '/customizer/assets/';

			wp_enqueue_style(
				'nano',
				$pickr_asset_uri . 'css/nano.min.css',
				null,
				'1.8.2',
				'all'
			);

			wp_enqueue_style(
				XENIAL_THEME_SLUG . '-box-border',
				$asset_uri . 'box-border.css',
				null,
				XENIAL_THEME_VERSION,
				'all'
			);

			wp_enqueue_script(
				'pickr',
				$pickr_asset_uri . 'js/pickr.min.js',
				array(),
				'1.8.2',
				true
			);

			wp_enqueue_script(
				XENIAL_THEME_SLUG . '-box-border',
				$asset_uri . 'box-border.js',
				array('jquery', 'pickr'),
				XENIAL_THEME_VERSION,
				true
			);
		}

		protected function render() {

			$control_class = array(
				'customize-control',
				'customize-control-' . $this->type,
			);

			if ( $this->is_responsive ) {
				$control_class[] = 'has-switchers';
			}
			?>
			<li id="customize-control-<?php echo esc_attr( $this->id ); ?>" class="<?php echo esc_attr( implode( ' ', $control_class ) ); ?>">
				<?php $this->render_content(); ?>
			</li>
			<?php
		}

		public function to_json() {

			parent::to_json();

			$allowed_fields = isset( $this->input_attrs['allowed_fields'] ) ? $this->input_attrs['allowed_fields'] : array();

			$default = $this->setting->default;

			$this->json['is_responsive'] = $this->is_responsive;

			$this->json['id'] = $this->id;

			$this->json['allowed_fields'] = $allowed_fields;

			$this->json['units'] = $this->get_units();

			$this->json['border_styles'] = $this->get_border_styles();

			$this->json['border_icons'] = $this->get_border_icons();

			$this->json['labels'] = $this->get_labels();

			$this->json['link'] = $this->get_link();

			$this->json['value'] = ( $this->value() ) ? $this->value() : $default;

			$this->json['default'] = $default;
		}


		protected function content_template() {
			?>
			<# 
			let savedValue;
			if ( data.value ) {
				savedValue = JSON.parse( data.value );
			}
			let allowedFields = data.allowed_fields; #>
			<# let collapseClass = ( savedValue.expanded == true ) ? '' : 'box-border-hidden'; #>
			<input type="hidden" id="xenial-box-border-responsive-{{ data.id }}" name="xenial-box-border-responsive-{{ data.id }}" value="{{ data.is_responsive }}">
			<span class="customize-control-title">
				<# if ( data.label ) { #>
					<span class="control-title">{{{ data.label }}}</span>
				<# } #>
				<div class="xenial-control-buttons-wrapper">
					<# if ( data.is_responsive ) { #>
						<ul class="responsive-switchers {{ collapseClass }}">
							<?php xenial_get_customize_responsive_icon_desktop(); ?>
							<?php xenial_get_customize_responsive_icon_tablet(); ?>
							<?php xenial_get_customize_responsive_icon_mobile(); ?>
						</ul>
					<# } #>
					<button class="button box-border-button box-border-controls-toggle-button" value="{{ savedValue.expanded }}">
						<span class="box-border-expand-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12.9 6.858l4.242 4.243L7.242 21H3v-4.243l9.9-9.9zm1.414-1.414l2.121-2.122a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414l-2.122 2.121-4.242-4.242z"/></svg></span>
					</button>
				</div>
			</span>
			<input type="hidden" id="{{ data.id }}-box-border-value" name="{{{ data.id }}}-box-border-value" value="{{ data.value }}" {{ data.link }}>
			
			<# if ( data.is_responsive ) { #>
				<div class="xenial-box-border-controls-wrapper xenial-responsive-box-border-controls-wrapper {{ collapseClass }}">
					<# let desktopAllowedFields = allowedFields.desktop; #>
					<# let desktopBorderOptionHideClass = '';
					if ( ( 'border_style' in savedValue.desktop ) && savedValue.desktop.border_style == 'none' ) {
						desktopBorderOptionHideClass = 'box-border-hidden';
					} #>
					<ul class="desktop responsive-control-wrap active {{ collapseClass }}">
						<li id="{{ data.id }}-desktop-box-border-style-li" class="box-border-item box-border-style-item">
							<span class="box-border-control-label"><?php echo esc_html__( 'Style', 'xenial' ); ?></span>
							<div class="box-border-style-inputs-wrapper">
								<# let savedDesktopBorderStyle = ( ( 'border_style' in savedValue.desktop ) && ( savedValue.desktop.border_style != '' ) ) ? savedValue.desktop.border_style : 'none'; #>
								<button id="{{ data.id }}-border-style-button" class="button box-border-button box-border-style-input box-border-dropdown-toggle-button" value="{{ savedDesktopBorderStyle }}" data-device="desktop" data-dropdown="border-style">
									<# _.each( data.border_styles, function( value, key ) { #>
										<# let desktopBorderStyleActiveClass = ( key == savedDesktopBorderStyle ) ? 'active' : ''; #>
										<span class="box-border-style {{ desktopBorderStyleActiveClass }}" data-value="{{ key }}">{{ value }}</span>
									<# } ); #>
								</button>
								<div id="{{ data.id }}-border-style-options" class="box-border-style-options box-border-dropdown">
									<# _.each( data.border_styles, function( value, key ) { #>
										<# let desktopBorderStyleActiveClass = ( key == savedDesktopBorderStyle ) ? 'active' : ''; #>
										<button class="button box-border-button box-border-style {{ desktopBorderStyleActiveClass }}" data-value="{{ key }}">{{ value }}</button>
									<# } ); #>
								</div>
							</div>							
						</li>
						<# if ( 'border_widths' in desktopAllowedFields ) { #>
							<# let desktopBorderWidths = desktopAllowedFields.border_widths; #>
							<li id="{{ data.id }}-desktop-box-border-widths-li" class="box-border-item box-border-widths-item {{ desktopBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Width', 'xenial' ); ?></span>
								<div class="box-border-width-inputs-wrapper">
									<div class="box-border-inputs">
										<# let savedDesktopBorderWidths = savedValue.desktop.border_widths; #>
										<# _.each( savedDesktopBorderWidths, function( value, key ) { #>
											<# if ( key != 'unit' && desktopBorderWidths.includes( key ) ) { #>
												<div class="box-border-input-control box-border-width-input-control box-border-width-{{ key }}">
													<input type="number" name="desktop-box-border-width-{{ key }}" class="box-border-input-field box-border-width-input" data-border="width" data-side="{{ key }}" data-device="desktop" value="{{ value }}">
													<label class="box-border-label">{{{ data.border_icons[ key ] }}}</label>
												</div>
											<# } #>
										<# }); #>
									</div>

									<div class="box-border-lock-unit-wrapper">								
										<div class="box-border-input-control box-border-width-input-control box-border-width-lock">
											<# let desktopBorderWidthsLockedClass = ( true == savedDesktopBorderWidths.locked ) ? 'locked' : ''; #>
											<button class="button box-border-button box-button-input-lock box-border-width-lock {{ desktopBorderWidthsLockedClass }}" data-device="desktop" data-border="width" value="{{ savedDesktopBorderWidths.locked }}">
												{{{ data.border_icons[ 'locked_icon' ] }}}
												{{{ data.border_icons[ 'unlocked_icon' ] }}}
											</button>
										</div>
										<div class="box-border-input-control box-border-unit-wrapper box-border-width-input-control box-border-width-unit">
											<button id="{{ data.id }}-border-width-unit-input" class="button box-border-button box-border-width-input box-border-dropdown-toggle-button" data-device="desktop" value="{{ savedDesktopBorderWidths.unit }}" data-dropdown="border-width-unit">
												<# _.each( data.units, function( value, key ) { #>
													<# let desktopBorderWidthUnitActiveClass = ( key == savedDesktopBorderWidths.unit ) ? 'active' : ''; #>
													<span class="box-border-unit-value {{ desktopBorderWidthUnitActiveClass }}" data-value="{{ key }}">{{ value }}</span>
												<# } ); #>
											</button>
											
											<div id="{{ data.id }}-border-width-unit-dropdown" class="box-border-unit-dropdown box-border-unit-value-options box-border-dropdown">
												<# _.each( data.units, function( value, key ) { #>
													<# let desktopBorderWidthUnitActiveClass = ( key == savedDesktopBorderWidths.unit ) ? 'active' : ''; #>
													<button class="button box-border-button box-border-unit-value {{ desktopBorderWidthUnitActiveClass }}" data-value="{{ key }}">{{ value }}</button>
												<# } ); #>
											</div>
										</div>
									</div>
								</div>
							</li>
						<# } #>
						<# if ( 'border_radius' in desktopAllowedFields ) { #>
							<# let desktopBorderRadius = desktopAllowedFields.border_radius; #>
							<li id="{{ data.id }}-desktop-box-border-radius-li" class="box-border-item box-border-radius-item {{ desktopBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Radius', 'xenial' ); ?></span>
								<div class="box-border-radius-inputs-wrapper">
									<div class="box-border-inputs">
										<# let savedDesktopBorderRadius = savedValue.desktop.border_radius; #>
										<# _.each( savedDesktopBorderRadius, function( value, key ) { #>
											<# if ( key != 'unit' && desktopBorderRadius.includes( key ) ) { #>
											<div class="box-border-input-control box-border-radius-input-control box-border-radius-top-left">
												<input type="number" name="desktop-box-border-radius-{{ key }}" class="box-border-input-field box-border-radius-input" data-border="radius" data-side="{{ key }}" data-device="desktop" value="{{ value }}">
												<label class="box-border-label">{{{ data.border_icons[ key ] }}}</label>
											</div>
											<# } #>
										<# } ); #>
									</div>
									<div class="box-border-lock-unit-wrapper">
										<div class="box-border-input-control box-border-radius-input-control box-border-radius-lock">
											<# let desktopBorderRadiusLockedClass = ( true == savedDesktopBorderRadius.locked ) ? 'locked' : ''; #>
											<button class="button box-border-button box-button-input-lock box-border-radius-lock {{ desktopBorderRadiusLockedClass }}" data-device="desktop" data-border="radius" value="{{ savedDesktopBorderRadius.locked }}">
												{{{ data.border_icons[ 'locked_icon' ] }}}
												{{{ data.border_icons[ 'unlocked_icon' ] }}}
											</button>
										</div>
										<div class="box-border-input-control box-border-unit-wrapper box-border-radius-input-control box-border-radius-unit">
											<button class="button box-border-button box-border-radius-input box-border-dropdown-toggle-button" data-device="desktop" value="{{ savedDesktopBorderRadius.unit }}" data-dropdown="border-radius-unit">
												<# _.each( data.units, function( value, key ) { #>
													<# let desktopBorderRadiusUnitActiveClass = ( key == savedDesktopBorderRadius.unit ) ? 'active' : ''; #>
													<span class="box-border-unit-value {{ desktopBorderRadiusUnitActiveClass }}" data-value="{{ key }}">{{ value }}</span>
												<# } ); #>
											</button>
											<div class="box-border-unit-dropdown box-border-unit-value-options box-border-dropdown">
												<# _.each( data.units, function( value, key ) { #>
													<# let desktopBorderRadiusUnitActiveClass = ( key == savedDesktopBorderRadius.unit ) ? 'active' : ''; #>
													<button class="button box-border-button box-border-unit-value {{ desktopBorderRadiusUnitActiveClass }}" data-value="{{ key }}">{{ value }}</button>{{ value }}</span>
												<# } ); #>
											</div>
										</div>
									</div>
									
								</div>
							</li>
						<# } #>
						<# if ( 'border_colors' in desktopAllowedFields ) { #>
							<# let desktopBorderColors = desktopAllowedFields.border_colors; #>
							<li id="{{ data.id }}-desktop-box-border-colors-li" class="box-border-item box-border-colors-item {{ desktopBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Border Color', 'xenial' ); ?></span>
								<div class="box-border-colors-inputs-wrapper">
									<ul class="box-border-colors">
										<# let savedDesktopColors = savedValue.desktop.border_colors; #>
										<# _.each( savedDesktopColors, function( value, key ) { #>
											<# if ( desktopBorderColors.includes( key ) ) { #>
												<li class="xe-customize-tippy" data-tippy-content="{{ data.labels[ key ] }}">
													<input type="hidden" name="{{{ data.id }}}-desktop-border-top-color" class="border-box-color-field" data-color="{{ key }}" data-device="desktop"  value="{{ value }}" data-default="">
													<div id="{{ data.id }}-desktop-border-{{ key }}-color" class="xenial-color-picker" data-color="{{ value }}"></div>
												</li>
											<# } #>
										<# } ); #>
									</ul>
								</div>
							</li>
						<# } #>
					</ul>

					<# let tabletAllowedFields = allowedFields.tablet; #>
					<# let tabletBorderOptionHideClass = '';
					if ( ( 'border_style' in savedValue.tablet ) && savedValue.tablet.border_style == 'none' ) {
						tabletBorderOptionHideClass = 'box-border-hidden';
					} #>
					<ul class="tablet responsive-control-wrap">
						<li id="{{ data.id }}-tablet-box-border-style-li" class="box-border-item box-border-style-item">
							<span class="box-border-control-label"><?php echo esc_html__( 'Style', 'xenial' ); ?></span>
							<div class="box-border-style-inputs-wrapper">
								<# let savedTabletBorderStyle = ( ( 'border_style' in savedValue.tablet ) && ( savedValue.tablet.border_style != '' ) ) ? savedValue.tablet.border_style : 'none'; #>
								<button id="{{ data.id }}-border-style-button" class="button box-border-button box-border-style-input box-border-dropdown-toggle-button" value="{{ savedTabletBorderStyle }}" data-device="tablet" data-dropdown="border-style">
									<# _.each( data.border_styles, function( value, key ) { #>
										<# let tabletBorderStyleActiveClass = ( key == savedTabletBorderStyle ) ? 'active' : ''; #>
										<span class="box-border-style {{ tabletBorderStyleActiveClass }}" data-value="{{ key }}">{{ value }}</span>
									<# } ); #>
								</button>
								<div id="{{ data.id }}-border-style-options" class="box-border-style-options box-border-dropdown">
									<# _.each( data.border_styles, function( value, key ) { #>
										<# let tabletBorderStyleActiveClass = ( key == savedTabletBorderStyle ) ? 'active' : ''; #>
										<button class="button box-border-button box-border-style {{ tabletBorderStyleActiveClass }}" data-value="{{ key }}">{{ value }}</button>
									<# } ); #>
								</div>
							</div>							
						</li>
						<# if ( 'border_widths' in tabletAllowedFields ) { #>
							<# let tabletBorderWidths = tabletAllowedFields.border_widths; #>
							<li id="{{ data.id }}-tablet-box-border-widths-li" class="box-border-item box-border-widths-item {{ tabletBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Width', 'xenial' ); ?></span>
								<div class="box-border-width-inputs-wrapper">
									<div class="box-border-inputs">
										<# let savedTabletBorderWidths = savedValue.tablet.border_widths; #>
										<# _.each( savedTabletBorderWidths, function( value, key ) { #>
											<# if ( key != 'unit' && tabletBorderWidths.includes( key ) ) { #>
												<div class="box-border-input-control box-border-width-input-control box-border-width-{{ key }}">
													<input type="number" name="tablet-box-border-width-{{ key }}" class="box-border-input-field box-border-width-input" data-border="width" data-side="{{ key }}" data-device="tablet" value="{{ value }}">
													<label class="box-border-label">{{{ data.border_icons[ key ] }}}</label>
												</div>
											<# } #>
										<# }); #>
									</div>

									<div class="box-border-lock-unit-wrapper">								
										<div class="box-border-input-control box-border-width-input-control box-border-width-lock">
											<# let tabletBorderWidthsLockedClass = ( true == savedTabletBorderWidths.locked ) ? 'locked' : ''; #>
											<button class="button box-border-button box-button-input-lock box-border-width-lock {{ tabletBorderWidthsLockedClass }}" data-device="tablet" data-border="width" value="{{ savedTabletBorderWidths.locked }}">
												{{{ data.border_icons[ 'locked_icon' ] }}}
												{{{ data.border_icons[ 'unlocked_icon' ] }}}
											</button>
										</div>
										<div class="box-border-input-control box-border-unit-wrapper box-border-width-input-control box-border-width-unit">
											<button id="{{ data.id }}-border-width-unit-input" class="button box-border-button box-border-width-input box-border-dropdown-toggle-button" data-device="tablet" value="{{ savedTabletBorderWidths.unit }}" data-dropdown="border-width-unit">
												<# _.each( data.units, function( value, key ) { #>
													<# let tabletBorderWidthUnitActiveClass = ( key == savedTabletBorderWidths.unit ) ? 'active' : ''; #>
													<span class="box-border-unit-value {{ tabletBorderWidthUnitActiveClass }}" data-value="{{ key }}">{{ value }}</span>
												<# } ); #>
											</button>
											
											<div id="{{ data.id }}-border-width-unit-dropdown" class="box-border-unit-dropdown box-border-unit-value-options box-border-dropdown">
												<# _.each( data.units, function( value, key ) { #>
													<# let tabletBorderWidthUnitActiveClass = ( key == savedTabletBorderWidths.unit ) ? 'active' : ''; #>
													<button class="button box-border-button box-border-unit-value {{ tabletBorderWidthUnitActiveClass }}" data-value="{{ key }}">{{ value }}</button>
												<# } ); #>
											</div>
										</div>
									</div>
								</div>
							</li>
						<# } #>
						<# if ( 'border_radius' in tabletAllowedFields ) { #>
							<# let tabletBorderRadius = tabletAllowedFields.border_radius; #>
							<li id="{{ data.id }}-tablet-box-border-radius-li" class="box-border-item box-border-radius-item {{ tabletBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Radius', 'xenial' ); ?></span>
								<div class="box-border-radius-inputs-wrapper">
									<div class="box-border-inputs">
										<# let savedTabletBorderRadius = savedValue.tablet.border_radius; #>
										<# _.each( savedTabletBorderRadius, function( value, key ) { #>
											<# if ( key != 'unit' && tabletBorderRadius.includes( key ) ) { #>
											<div class="box-border-input-control box-border-radius-input-control box-border-radius-top-left">
												<input type="number" name="tablet-box-border-radius-{{ key }}" class="box-border-input-field box-border-radius-input" data-border="radius" data-side="{{ key }}" data-device="tablet" value="{{ value }}">
												<label class="box-border-label">{{{ data.border_icons[ key ] }}}</label>
											</div>
											<# } #>
										<# } ); #>
									</div>
									<div class="box-border-lock-unit-wrapper">
										<div class="box-border-input-control box-border-radius-input-control box-border-radius-lock">
											<# let tabletBorderRadiusLockedClass = ( true == savedTabletBorderRadius.locked ) ? 'locked' : ''; #>
											<button class="button box-border-button box-button-input-lock box-border-radius-lock {{ tabletBorderRadiusLockedClass }}" data-device="tablet" data-border="radius" value="{{ savedTabletBorderRadius.locked }}">
												{{{ data.border_icons[ 'locked_icon' ] }}}
												{{{ data.border_icons[ 'unlocked_icon' ] }}}
											</button>
										</div>
										<div class="box-border-input-control box-border-unit-wrapper box-border-radius-input-control box-border-radius-unit">
											<button class="button box-border-button box-border-radius-input box-border-dropdown-toggle-button" data-device="tablet" value="{{ savedTabletBorderRadius.unit }}" data-dropdown="border-radius-unit">
												<# _.each( data.units, function( value, key ) { #>
													<# let tabletBorderRadiusUnitActiveClass = ( key == savedTabletBorderRadius.unit ) ? 'active' : ''; #>
													<span class="box-border-unit-value {{ tabletBorderRadiusUnitActiveClass }}" data-value="{{ key }}">{{ value }}</span>
												<# } ); #>
											</button>
											<div class="box-border-unit-dropdown box-border-unit-value-options box-border-dropdown">
												<# _.each( data.units, function( value, key ) { #>
													<# let tabletBorderRadiusUnitActiveClass = ( key == savedTabletBorderRadius.unit ) ? 'active' : ''; #>
													<button class="button box-border-button box-border-unit-value {{ tabletBorderRadiusUnitActiveClass }}" data-value="{{ key }}">{{ value }}</button>{{ value }}</span>
												<# } ); #>
											</div>
										</div>
									</div>
									
								</div>
							</li>
						<# } #>
						<# if ( 'border_colors' in tabletAllowedFields ) { #>
							<# let tabletBorderColors = tabletAllowedFields.border_colors; #>
							<li id="{{ data.id }}-tablet-box-border-colors-li" class="box-border-item box-border-colors-item {{ tabletBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Border Color', 'xenial' ); ?></span>
								<div class="box-border-colors-inputs-wrapper">
									<ul class="box-border-colors">
										<# let savedTabletColors = savedValue.tablet.border_colors; #>
										<# _.each( savedTabletColors, function( value, key ) { #>
											<# if ( tabletBorderColors.includes( key ) ) { #>
												<li class="xe-customize-tippy" data-tippy-content="{{ data.labels[ key ] }}">
													<input type="hidden" name="{{{ data.id }}}-tablet-border-top-color" class="border-box-color-field" data-color="{{ key }}" data-device="tablet"  value="{{ value }}" data-default="">
													<div id="{{ data.id }}-tablet-border-{{ key }}-color" class="xenial-color-picker" data-color="{{ value }}"></div>
												</li>
											<# } #>
										<# } ); #>
									</ul>
								</div>
							</li>
						<# } #>
					</ul>

					<# let mobileAllowedFields = allowedFields.mobile; #>
					<# let mobileBorderOptionHideClass = '';
					if ( ( 'border_style' in savedValue.mobile ) && savedValue.mobile.border_style == 'none' ) {
						mobileBorderOptionHideClass = 'box-border-hidden';
					} #>
					<ul class="mobile responsive-control-wrap">
						<li id="{{ data.id }}-mobile-box-border-style-li" class="box-border-item box-border-style-item">
							<span class="box-border-control-label"><?php echo esc_html__( 'Style', 'xenial' ); ?></span>
							<div class="box-border-style-inputs-wrapper">
								<# let savedMobileBorderStyle = ( ( 'border_style' in savedValue.mobile ) && ( savedValue.mobile.border_style != '' ) ) ? savedValue.mobile.border_style : 'none'; #>
								<button id="{{ data.id }}-border-style-button" class="button box-border-button box-border-style-input box-border-dropdown-toggle-button" value="{{ savedMobileBorderStyle }}" data-device="mobile" data-dropdown="border-style">
									<# _.each( data.border_styles, function( value, key ) { #>
										<# let mobileBorderStyleActiveClass = ( key == savedMobileBorderStyle ) ? 'active' : ''; #>
										<span class="box-border-style {{ mobileBorderStyleActiveClass }}" data-value="{{ key }}">{{ value }}</span>
									<# } ); #>
								</button>
								<div id="{{ data.id }}-border-style-options" class="box-border-style-options box-border-dropdown">
									<# _.each( data.border_styles, function( value, key ) { #>
										<# let mobileBorderStyleActiveClass = ( key == savedMobileBorderStyle ) ? 'active' : ''; #>
										<button class="button box-border-button box-border-style {{ mobileBorderStyleActiveClass }}" data-value="{{ key }}">{{ value }}</button>
									<# } ); #>
								</div>
							</div>							
						</li>
						<# if ( 'border_widths' in mobileAllowedFields ) { #>
							<# let mobileBorderWidths = mobileAllowedFields.border_widths; #>
							<li id="{{ data.id }}-mobile-box-border-widths-li" class="box-border-item box-border-widths-item {{ mobileBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Width', 'xenial' ); ?></span>
								<div class="box-border-width-inputs-wrapper">
									<div class="box-border-inputs">
										<# let savedMobileBorderWidths = savedValue.mobile.border_widths; #>
										<# _.each( savedMobileBorderWidths, function( value, key ) { #>
											<# if ( key != 'unit' && mobileBorderWidths.includes( key ) ) { #>
												<div class="box-border-input-control box-border-width-input-control box-border-width-{{ key }}">
													<input type="number" name="mobile-box-border-width-{{ key }}" class="box-border-input-field box-border-width-input" data-border="width" data-side="{{ key }}" data-device="mobile" value="{{ value }}">
													<label class="box-border-label">{{{ data.border_icons[ key ] }}}</label>
												</div>
											<# } #>
										<# }); #>
									</div>

									<div class="box-border-lock-unit-wrapper">								
										<div class="box-border-input-control box-border-width-input-control box-border-width-lock">
											<# let mobileBorderWidthsLockedClass = ( true == savedMobileBorderWidths.locked ) ? 'locked' : ''; #>
											<button class="button box-border-button box-button-input-lock box-border-width-lock {{ mobileBorderWidthsLockedClass }}" data-device="mobile" data-border="width" value="{{ savedMobileBorderWidths.locked }}">
												{{{ data.border_icons[ 'locked_icon' ] }}}
												{{{ data.border_icons[ 'unlocked_icon' ] }}}
											</button>
										</div>
										<div class="box-border-input-control box-border-unit-wrapper box-border-width-input-control box-border-width-unit">
											<button id="{{ data.id }}-border-width-unit-input" class="button box-border-button box-border-width-input box-border-dropdown-toggle-button" data-device="mobile" value="{{ savedMobileBorderWidths.unit }}" data-dropdown="border-width-unit">
												<# _.each( data.units, function( value, key ) { #>
													<# let mobileBorderWidthUnitActiveClass = ( key == savedMobileBorderWidths.unit ) ? 'active' : ''; #>
													<span class="box-border-unit-value {{ mobileBorderWidthUnitActiveClass }}" data-value="{{ key }}">{{ value }}</span>
												<# } ); #>
											</button>
											
											<div id="{{ data.id }}-border-width-unit-dropdown" class="box-border-unit-dropdown box-border-unit-value-options box-border-dropdown">
												<# _.each( data.units, function( value, key ) { #>
													<# let mobileBorderWidthUnitActiveClass = ( key == savedMobileBorderWidths.unit ) ? 'active' : ''; #>
													<button class="button box-border-button box-border-unit-value {{ mobileBorderWidthUnitActiveClass }}" data-value="{{ key }}">{{ value }}</button>
												<# } ); #>
											</div>
										</div>
									</div>
								</div>
							</li>
						<# } #>
						<# if ( 'border_radius' in mobileAllowedFields ) { #>
							<# let mobileBorderRadius = mobileAllowedFields.border_radius; #>
							<li id="{{ data.id }}-mobile-box-border-radius-li" class="box-border-item box-border-radius-item {{ mobileBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Radius', 'xenial' ); ?></span>
								<div class="box-border-radius-inputs-wrapper">
									<div class="box-border-inputs">
										<# let savedMobileBorderRadius = savedValue.mobile.border_radius; #>
										<# _.each( savedMobileBorderRadius, function( value, key ) { #>
											<# if ( key != 'unit' && mobileBorderRadius.includes( key ) ) { #>
											<div class="box-border-input-control box-border-radius-input-control box-border-radius-top-left">
												<input type="number" name="mobile-box-border-radius-{{ key }}" class="box-border-input-field box-border-radius-input" data-border="radius" data-side="{{ key }}" data-device="mobile" value="{{ value }}">
												<label class="box-border-label">{{{ data.border_icons[ key ] }}}</label>
											</div>
											<# } #>
										<# } ); #>
									</div>
									<div class="box-border-lock-unit-wrapper">
										<div class="box-border-input-control box-border-radius-input-control box-border-radius-lock">
											<# let mobileBorderRadiusLockedClass = ( true == savedMobileBorderRadius.locked ) ? 'locked' : ''; #>
											<button class="button box-border-button box-button-input-lock box-border-radius-lock {{ mobileBorderRadiusLockedClass }}" data-device="mobile" data-border="radius" value="{{ savedMobileBorderRadius.locked }}">
												{{{ data.border_icons[ 'locked_icon' ] }}}
												{{{ data.border_icons[ 'unlocked_icon' ] }}}
											</button>
										</div>
										<div class="box-border-input-control box-border-unit-wrapper box-border-radius-input-control box-border-radius-unit">
											<button class="button box-border-button box-border-radius-input box-border-dropdown-toggle-button" data-device="mobile" value="{{ savedMobileBorderRadius.unit }}" data-dropdown="border-radius-unit">
												<# _.each( data.units, function( value, key ) { #>
													<# let mobileBorderRadiusUnitActiveClass = ( key == savedMobileBorderRadius.unit ) ? 'active' : ''; #>
													<span class="box-border-unit-value {{ mobileBorderRadiusUnitActiveClass }}" data-value="{{ key }}">{{ value }}</span>
												<# } ); #>
											</button>
											<div class="box-border-unit-dropdown box-border-unit-value-options box-border-dropdown">
												<# _.each( data.units, function( value, key ) { #>
													<# let mobileBorderRadiusUnitActiveClass = ( key == savedMobileBorderRadius.unit ) ? 'active' : ''; #>
													<button class="button box-border-button box-border-unit-value {{ mobileBorderRadiusUnitActiveClass }}" data-value="{{ key }}">{{ value }}</button>{{ value }}</span>
												<# } ); #>
											</div>
										</div>
									</div>
									
								</div>
							</li>
						<# } #>
						<# if ( 'border_colors' in mobileAllowedFields ) { #>
							<# let mobileBorderColors = mobileAllowedFields.border_colors; #>
							<li id="{{ data.id }}-mobile-box-border-colors-li" class="box-border-item box-border-colors-item {{ mobileBorderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Border Color', 'xenial' ); ?></span>
								<div class="box-border-colors-inputs-wrapper">
									<ul class="box-border-colors">
										<# let savedMobileColors = savedValue.mobile.border_colors; #>
										<# _.each( savedMobileColors, function( value, key ) { #>
											<# if ( mobileBorderColors.includes( key ) ) { #>
												<li class="xe-customize-tippy" data-tippy-content="{{ data.labels[ key ] }}">
													<input type="hidden" name="{{{ data.id }}}-mobile-border-top-color" class="border-box-color-field" data-color="{{ key }}" data-device="mobile"  value="{{ value }}" data-default="">
													<div id="{{ data.id }}-mobile-border-{{ key }}-color" class="xenial-color-picker" data-color="{{ value }}"></div>
												</li>
											<# } #>
										<# } ); #>
									</ul>
								</div>
							</li>
						<# } #>
					</ul>

				</div>
			<# } else { #>
				<# 
				let borderOptionHideClass = '';
				if ( ( 'border_style' in savedValue ) && savedValue.border_style == 'none' ) {
					borderOptionHideClass = 'box-border-hidden';
				} #>
				<div class="xenial-box-border-controls-wrapper xenial-normal-box-border-controls-wrapper {{ collapseClass }}">
					<ul class="normal-control active">
						<li id="{{ data.id }}-box-border-style-li" class="box-border-item box-border-style-item">
							<span class="box-border-control-label"><?php echo esc_html__( 'Style', 'xenial' ); ?></span>
							<div class="box-border-style-inputs-wrapper">
								<# let savedBorderStyle = ( ( 'border_style' in savedValue ) && ( savedValue.border_style != '' ) ) ? savedValue.border_style : 'none'; #>
								<button id="{{ data.id }}-border-style-button" class="button box-border-button box-border-style-input box-border-dropdown-toggle-button" value="{{ savedBorderStyle }}" data-dropdown="border-style">
									<# _.each( data.border_styles, function( value, key ) { #>
										<# let borderStyleActiveClass = ( key == savedBorderStyle ) ? 'active' : ''; #>
										<span class="box-border-style {{ borderStyleActiveClass }}" data-value="{{ key }}">{{ value }}</span>
									<# } ); #>
								</button>
								<div id="{{ data.id }}-border-style-options" class="box-border-style-options box-border-dropdown">
									<# _.each( data.border_styles, function( value, key ) { #>
										<# let borderStyleActiveClass = ( key == savedBorderStyle ) ? 'active' : ''; #>
										<button class="button box-border-button box-border-style {{ borderStyleActiveClass }}" data-value="{{ key }}">{{ value }}</button>
									<# } ); #>
								</div>
							</div>							
						</li>
						<# if ( 'border_widths' in allowedFields ) { #>
							<# let borderWidths = allowedFields.border_widths; #>
							<li id="{{ data.id }}-box-border-widths-li" class="box-border-item box-border-widths-item {{ borderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Width', 'xenial' ); ?></span>
								<div class="box-border-width-inputs-wrapper">
									<div class="box-border-inputs">
										<# let savedBorderWidths = savedValue.border_widths; #>
										<# _.each( savedBorderWidths, function( value, key ) { #>
											<# if ( key != 'unit' && borderWidths.includes( key ) ) { #>
												<div class="box-border-input-control box-border-width-input-control box-border-width-{{ key }}">
													<input type="number" name="box-border-width-{{ key }}" class="box-border-input-field box-border-width-input" data-border="width" data-side="{{ key }}" value="{{ value }}">
													<label class="box-border-label">{{{ data.border_icons[ key ] }}}</label>
												</div>
											<# } #>
										<# }); #>
									</div>

									<div class="box-border-lock-unit-wrapper">								
										<div class="box-border-input-control box-border-width-input-control box-border-width-lock">
											<# let borderWidthsLockedClass = ( true == savedBorderWidths.locked ) ? 'locked' : ''; #>
											<button class="button box-border-button box-button-input-lock box-border-width-lock {{ borderWidthsLockedClass }}" data-border="width" value="{{ savedBorderWidths.locked }}">
												{{{ data.border_icons[ 'locked_icon' ] }}}
												{{{ data.border_icons[ 'unlocked_icon' ] }}}
											</button>
										</div>
										<div class="box-border-input-control box-border-unit-wrapper box-border-width-input-control box-border-width-unit">
											<button id="{{ data.id }}-border-width-unit-input" class="button box-border-button box-border-width-input box-border-dropdown-toggle-button" data-dropdown="border-width-unit" value="{{ savedBorderWidths.unit }}">
											<# _.each( data.units, function( value, key ) { #>
												<# let borderWidthUnitActiveClass = ( key == savedBorderWidths.unit ) ? 'active' : ''; #>
												<span class="box-border-unit-value {{ borderWidthUnitActiveClass }}" data-value="{{ key }}">{{ value }}</span>
											<# } ); #>
											</button>
											
											<div id="{{ data.id }}-border-width-unit-dropdown" class="box-border-unit-dropdown box-border-unit-value-options box-border-dropdown">
											<# _.each( data.units, function( value, key ) { #>
												<# let borderWidthUnitActiveClass = ( key == savedBorderWidths.unit ) ? 'active' : ''; #>
													<button class="button box-border-button box-border-unit-value {{ borderWidthUnitActiveClass }}" data-value="{{ key }}">{{ value }}</button>
											<# } ); #>
											</div>
										</div>
									</div>
								</div>
							</li>
						<# } #>
						<# if ( 'border_radius' in allowedFields ) { #>
							<# let borderRadius = allowedFields.border_radius; #>
							<li id="{{ data.id }}-box-border-radius-li" class="box-border-item box-border-radius-item {{ borderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Radius', 'xenial' ); ?></span>
								<div class="box-border-radius-inputs-wrapper">
									<div class="box-border-inputs">
										<# let savedBorderRadius = savedValue.border_radius; #>
										<# _.each( savedBorderRadius, function( value, key ) { #>
											<# if ( key != 'unit' && borderRadius.includes( key ) ) { #>
												<div class="box-border-input-control box-border-radius-input-control box-border-radius-{{ key }}">
													<input type="number" name="box-border-radius-{{ key }}" class="box-border-input-field box-border-radius-input" data-border="radius" data-side="{{ key }}" value="{{ value }}">
													<label class="box-border-label">{{{ data.border_icons[ key ] }}}</label>
												</div>
											<# } #>
										<# } ); #>
									</div>
									<div class="box-border-lock-unit-wrapper">
										<div class="box-border-input-control box-border-radius-input-control box-border-radius-lock">
											<# let borderRadiusLockedClass = ( true == savedBorderRadius.locked ) ? 'locked' : ''; #>
											<button class="button box-border-button box-button-input-lock box-border-radius-lock {{ borderRadiusLockedClass }}" data-border="radius" value="{{ savedBorderRadius.locked }}">
												{{{ data.border_icons[ 'locked_icon' ] }}}
												{{{ data.border_icons[ 'unlocked_icon' ] }}}
											</button>
										</div>
										<div class="box-border-input-control box-border-unit-wrapper box-border-radius-input-control box-border-radius-unit">
											<button class="button box-border-button box-border-radius-input box-border-dropdown-toggle-button" data-dropdown="border-radius-unit" value="{{ savedBorderRadius.unit }}">
												<# _.each( data.units, function( value, key ) { #>
													<# let borderRadiusUnitActiveClass = ( key == savedBorderRadius.unit ) ? 'active' : ''; #>
													<span class="box-border-unit-value {{ borderRadiusUnitActiveClass }}" data-value="{{ key }}">{{ value }}</span>
												<# } ); #>
											</button>
												
											<div id="{{ data.id }}-border-width-unit-dropdown" class="box-border-unit-dropdown box-border-unit-value-options box-border-dropdown">
												<# _.each( data.units, function( value, key ) { #>
													<# let borderRadiusUnitActiveClass = ( key == savedBorderRadius.unit ) ? 'active' : ''; #>
														<button class="button box-border-button box-border-unit-value {{ borderRadiusUnitActiveClass }}" data-value="{{ key }}">{{ value }}</button>
												<# } ); #>
											</div>
										</div>
									</div>
								</div>
							</li>
						<# } #>
						<# if ( 'border_colors' in allowedFields ) { #>
							<# let borderColors = allowedFields.border_colors; #>
							<li id="{{ data.id }}-box-border-colors-li" class="box-border-item box-border-colors-item {{ borderOptionHideClass }}">
								<span class="box-border-control-label"><?php echo esc_html__( 'Border Color', 'xenial' ); ?></span>
								<div class="box-border-colors-inputs-wrapper">
									<ul class="box-border-colors">
										<# let savedColors = savedValue.border_colors; #>
										<# _.each( savedColors, function( value, key ) { #>
											<# if ( allowedFields.border_colors.includes( key ) ) { #>
												<li class="xe-customize-tippy" data-tippy-content="{{ data.labels[ key ] }}">
													<input type="hidden" name="{{{ data.id }}}-border-top-color" class="border-box-color-field" value="{{ value }}" data-color="{{ key }}" data-default="">
													<div id="{{ data.id }}-border-top-color" class="xenial-color-picker" data-color="{{ value }}"></div>
												</li>
											<# } #>
										<# } ); #>
									</ul>
								</div>
							</li>
						<# } #>
					</ul>
				</div>
			<# } #>
			<?php
		}


		public function get_units() {

			return apply_filters(
				'xenial_css_units_filter',
				array(
					'px' => 'px',
					'em' => 'em',
					'rem' => 'rem'
				)
			);
		}

		public function get_border_styles() {

			return apply_filters(
				'xenial_border_styles_filter',
				array(
					'none' => esc_html__( 'None', 'xenial' ),
					'solid' => esc_html__( 'Solid', 'xenial' ),
					'dashed' => esc_html__( 'Dashed', 'xenial' ),
					'dotted' => esc_html__( 'Dotted', 'xenial' )
				)
			);
		}

		public function get_border_icons() {
			return apply_filters(
				'xenial_border_control_icons_filter',
				array(
					'top' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z"/></svg>',
					'right' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/></svg>',
					'bottom' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 16.172l5.364-5.364 1.414 1.414L12 20l-7.778-7.778 1.414-1.414L11 16.172V4h2v12.172z"/></svg>',
					'left' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z"/></svg>',
					'top_left' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.414 8l8.607 8.607-1.414 1.414L8 9.414V17H6V6h11v2z"/></svg>',
					'top_right' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.004 9.414l-8.607 8.607-1.414-1.414L14.589 8H7.004V6h11v11h-2V9.414z"/></svg>',
					'bottom_left' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 13.59l8.607-8.607 1.414 1.414-8.607 8.607H18v2H7v-11h2v7.585z"/></svg>',
					'bottom_right' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M14.59 16.004L5.982 7.397l1.414-1.414 8.607 8.606V7.004h2v11h-11v-2z"/></svg>',
					'locked_icon' => '<span class="box-border-lock-icon locked-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19 10h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V11a1 1 0 0 1 1-1h1V9a7 7 0 1 1 14 0v1zm-2 0V9A5 5 0 0 0 7 9v1h10zm-6 4v4h2v-4h-2z"/></svg></span>',
					'unlocked_icon' => '<span class="box-border-lock-icon unlocked-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 10h13a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V11a1 1 0 0 1 1-1h1V9a7 7 0 0 1 13.262-3.131l-1.789.894A5 5 0 0 0 7 9v1zm3 5v2h4v-2h-4z"/></svg></span>'
				)
			);
		}


		public function get_labels() {
			return apply_filters(
				'xenial_border_labels_filter',
				array(
					'top' => esc_html__( 'Top', 'xenial' ),
					'right' => esc_html__( 'Right', 'xenial' ),
					'bottom' => esc_html__( 'Bottom', 'xenial' ),
					'left' => esc_html__( 'Left', 'xenial' ),
					'initial' => esc_html__( 'Initial', 'xenial' ),
					'hover' => esc_html__( 'Hover', 'xenial' ),
					'active' => esc_html__( 'Active', 'xenial' ),
				)
			);
		}
	}
}