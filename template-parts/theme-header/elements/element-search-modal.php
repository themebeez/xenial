<?php 

?>
<aside id="xe-search-form">
	<div class="xe-search-entry">
		<div class="search-box-header">
			<button id="xe-close-search-box" class="xe-button xe-false-button">
				<span class="label">Close</span>
				<svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"y="0px" viewBox="0 0 64 64" xml:space="preserve">
					<path d="M34.5,32L62.2,4.2c0.7-0.7,0.7-1.8,0-2.5c-0.7-0.7-1.8-0.7-2.5,0L32,29.5L4.2,1.8c-0.7-0.7-1.8-0.7-2.5,0c-0.7,0.7-0.7,1.8,0,2.5L29.5,32L1.8,59.8c-0.7,0.7-0.7,1.8,0,2.5c0.3,0.3,0.8,0.5,1.2,0.5s0.9-0.2,1.2-0.5L32,34.5l27.7,27.8c0.3,0.3,0.8,0.5,1.2,0.5c0.4,0,0.9-0.2,1.2-0.5c0.7-0.7,0.7-1.8,0-2.5L34.5,32z"/>
				</svg>
			</button>
		</div><!-- // search-box-header -->
		<div class="xe-search-box-text-outer">
			<p class="xe-search-box-text"><?php echo __('Please enter search keyword & hit enter.', 'xenial'); ?></p>
		</div><!-- // search-box-text-outer -->
		<?php get_search_form(); ?>
	</div>
</aside>
