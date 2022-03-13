<?php 
?>
<div class="xe-header-element is-woo-minicart-icon">
    <div id="xe-woo-minicart-icon">
        <button class="xe-button xe-false-button" id="xe-woo-minicart-button">
            <svg viewBox="0 0 64 64" xml:space="preserve">
                <g>
                    <path d="M40.9,48.2c-3.9,0-7.1,3.3-7.1,7.3c0,4,3.2,7.3,7.1,7.3s7.1-3.3,7.1-7.3C48.1,51.5,44.9,48.2,40.9,48.2z M40.9,59.3
		c-2,0-3.6-1.7-3.6-3.8c0-2.1,1.6-3.8,3.6-3.8s3.6,1.7,3.6,3.8C44.6,57.6,42.9,59.3,40.9,59.3z" />
                    <path d="M18.2,48.2c-3.9,0-7.1,3.3-7.1,7.3c0,4,3.2,7.3,7.1,7.3s7.1-3.3,7.1-7.3C25.4,51.5,22.2,48.2,18.2,48.2z M18.2,59.3
		c-2,0-3.6-1.7-3.6-3.8c0-2.1,1.6-3.8,3.6-3.8s3.6,1.7,3.6,3.8C21.9,57.6,20.2,59.3,18.2,59.3z" />
                    <path d="M57.8,1.3h-6.4c-1.5,0-2.8,1.1-3,2.6l-1.8,13.2H7.3c-0.9,0-1.7,0.4-2.2,1.1c-0.5,0.7-0.7,1.6-0.5,2.4c0,0,0,0.1,0,0.1
		l6.1,18.9c0.3,1.2,1.4,2.1,2.8,2.1h29.5c2.2,0,4-1.6,4.3-3.8l4.6-33.2h6c1,0,1.8-0.8,1.8-1.8S58.8,1.3,57.8,1.3z M43.7,37.4
		c-0.1,0.4-0.4,0.8-0.9,0.8h-29L8.1,20.6h37.9L43.7,37.4z" />
                </g>
            </svg>
            <span class="count">0</span>
        </button>
    </div><!-- // xe-woo-minicart-icon -->
</div><!-- // xe-header-element -->
<aside id="xe-woo-minicart-canvas" class="close">
    <div class="xe-woo-minicart-inner">
        <header class="xe-woo-minicart-header">
            <h3 class="xe-woo-minicart-title">Shopping Cart</h3>
            <button class="xe-button xe-false-button" id="xe-woo-minicart-close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0H24V24H0z" />
                    <path d="M11 20L1 12l10-8v5c5.523 0 10 4.477 10 10 0 .273-.01.543-.032.81-1.463-2.774-4.33-4.691-7.655-4.805L13 15h-2v5zm-2-7h4.034l.347.007c1.285.043 2.524.31 3.676.766C15.59 12.075 13.42 11 11 11H9V8.161L4.202 12 9 15.839V13z" />
                </svg>
            </button>
        </header>
        <div class="xe-woo-minicart-entry">
            <?php woocommerce_mini_cart(); ?>
        </div>
    </div><!-- // xe-woo-minicart-inner -->
</aside>
<div id="xe-woo-minicart-overlay" class="hidden"></div>