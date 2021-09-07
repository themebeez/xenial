wp.customize.controlConstructor['xenial-slimselect-dropdown'] = wp.customize.Control.extend({

	ready: function() {

		'use strict';

		var setting = this;

		var selectEle = setting.container.find('select');

		var showSearchVal = ( selectEle.attr('data-showsearch') == 'enable' ) ? true : false;

		var slimselectInit = new SlimSelect({
			select: '#'+selectEle.attr('id'),
			showSearch: showSearchVal
		});
	}
});