<?php

if( ! class_exists( 'Xenial_Customize_Tab_Control' ) ) :
    /**
	 * Tab Custom Control Class.
	 *
	 * Tabs for grouping settings.
	 *
	 * @since 1.0.0
	 */
    class Xenial_Customize_Tab_Control extends WP_Customize_Control {

        /**
         * The type of customize control being rendered.
         *
         * @var   string
         */
        public $type = 'xenial-tab';

        /**
         * The tabs with keys of the controls that are under each tab.
         *
         * @var array
         */
        public $tabs;

        /**
         * Controls from tabs.
         *
         * @var array
         */
        public $controls;

        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue() {

            $asset_uri = XENIAL_THEME_URI . '/customizer/controls/tab/';

            wp_enqueue_style( 
                XENIAL_THEME_SLUG . '-tab',
                $asset_uri . 'tab.css', 
                null, 
                XENIAL_THEME_VERSION 
            );

            wp_enqueue_script( 
                XENIAL_THEME_SLUG . '-tab',
                $asset_uri . 'tab.js', 
                array( 'jquery', 'customize-base' ), 
                XENIAL_THEME_VERSION, 
                true 
            );
        }

        /**
         * Add custom JSON parameters to use in the JS template.
         *
         * @return array
         */
        public function json() {
            $json             = parent::json();
            $json['tabs']     = $this->tabs;
            $json['controls'] = $this->controls;
            return $json;
        }

        /**
         * Underscore JS template to handle the control's output.
         *
         * @return void
         */
        public function content_template() {
            ?>
            <# if ( ! data.tabs ) { return; } #>

            <div class="xenial-tab-control" id="">
            <# var i = 1;
                for( tab in data.tabs) { #>
                    <#
                    var allControlsInTabs = ''
                    _.each( data.controls[tab], function( val, key ) {
                        allControlsInTabs+= key + ' '
                        if(val){
                            var allvals = Object.keys(val).map(function(e) {
                                return val[e]
                            });
                            allvals = _.uniq(_.flatten(allvals))
                            allvals = allvals.join(' ')
                            allControlsInTabs += allvals
                        }
                    });
                    #>
                <div class="customizer-tab-label <# if( i === 1 ){#> active <#}#>" data-tab="{{tab}}">
                    <label class="{{allControlsInTabs}}">
                        <span class="xe-customizer-svg">
                           {{{ data.tabs[tab]['icon'] }}}
                        </span>
                        <span class="tab-label">{{data.tabs[tab]['label']}}</span>                        
                    </label>
                </div>
            <# i++;} #>
            </div>


            <?php
        }
    }
endif;
