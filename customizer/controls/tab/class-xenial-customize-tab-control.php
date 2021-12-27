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
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M5.33 3.271a3.5 3.5 0 0 1 4.254 4.963l10.709 10.71-1.414 1.414-10.71-10.71a3.502 3.502 0 0 1-4.962-4.255L5.444 7.63a1.5 1.5 0 1 0 2.121-2.121L5.329 3.27zm10.367 1.884l3.182-1.768 1.414 1.414-1.768 3.182-1.768.354-2.12 2.121-1.415-1.414 2.121-2.121.354-1.768zm-6.718 8.132l1.414 1.414-5.303 5.303a1 1 0 0 1-1.492-1.327l.078-.087 5.303-5.303z"/></svg>
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
