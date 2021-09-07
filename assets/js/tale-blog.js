'use strict';

var body = document.querySelector('body');

var taleBlogInit = {

	init: function() {
		this.bannerInit();
		this.toggleSearch();
		this.backToTop();
		this.toggleComment();
		this.stickyNav();
		this.offCanvasNav();
		this.mobileNavToggle();
	},

	bannerInit: function() {
		if ( body.classList.contains('xenial-banner-slider-enabled') ) {
			const bannerSlider = new Swiper( '#xenial-banner-container', {
                loop: true,
                slidesPerView: 1,
                direction: 'horizontal',
                speed: 700,
                autoplay : {
                    delay: 4500
                },
                navigation: {
                    nextEl: '.xenial-banner-button-next',
                    prevEl: '.xenial-banner-button-prev',
                },
                pagination: {
                    el: '.xenial-banner-pagination',
                    type: 'bullets',
                    clickable: true,
                },
            } );
		}
	},

	toggleSearch: function() {
		var searchEle = document.querySelector("#xenial-header-search");
		if ( searchEle ) {
			searchEle.addEventListener('click', function(e){
				e.preventDefault();
				var searchContainerEle = document.querySelector('#xenial-main-header-search-element .xenial-search-container');
				searchContainerEle.classList.toggle('xenial-hide');
			});
		}
	},

	backToTop: function() {
		var scrollTopEle = document.querySelector("#xenial-scroll-top-btn");
		if ( scrollTopEle ) {
			window.addEventListener('scroll', function(){			
				if ( window.pageYOffset > 300 ) {
					scrollTopEle.classList.remove('xenial-hide-stb');
				} else {
					scrollTopEle.classList.add('xenial-hide-stb');
				}
			});
			scrollTopEle.addEventListener('click',function(e){
				e.preventDefault();
				window.scrollTo({
					top: 0,
					behavior: 'smooth'
				});
			});
		}
	},

	toggleComment: function() {
		if ( body.classList.contains('xenial-has-togglable-comments-box') ) {
			var commentToggleEle = document.querySelector('#xenial-cmnt-tgl-btn');
			commentToggleEle.addEventListener('click',function(e){
				e.preventDefault();
				var commentsWrapEle = document.querySelector('#comments');
				commentsWrapEle.classList.toggle('xenial-show');
			});
		}
	},

	stickyNav: function() {
		if ( body.classList.contains('xenial-sticky-main-navigation-enabled') ) {
			var stickyMainNav = new Sticky( '.xenial-sticky-main-navigation', {
                wrap: true,
                stickyClass: 'xenial-sticky-enabled'
            } );
		}
	},

	offCanvasNav: function() {
		var offCanvasNavActionEles = document.querySelectorAll('#xenial-mobile-nav-toggle-btn, #xenial-mobile-nav-overlay, #xenial-mobile-nav-close-btn');
		[].forEach.call(offCanvasNavActionEles, function(offCanvasNavActionEle){
			offCanvasNavActionEle.addEventListener('click', function(e){
				e.preventDefault();
			    var offCanvasNavOverlay = document.querySelector('#xenial-mobile-nav-overlay');
				var offCanvasNavEle = document.querySelector('#xenial-mobile-nav-container');
				offCanvasNavOverlay.classList.toggle('display-mobile-nav-overlay');
				offCanvasNavEle.classList.toggle('display-mobile-nav');
			});
		});
	},

	mobileNavToggle: function() {
		var subMenuDropdownActionEles = document.querySelectorAll('.dropdown-btn');
		[].forEach.call(subMenuDropdownActionEles, function(subMenuDropdownActionEle){
			subMenuDropdownActionEle.addEventListener('click',function(e){
				e.preventDefault();
				var subMenuEle = subMenuDropdownActionEle.nextElementSibling;
				subMenuEle.classList.toggle('display-sub-menu');

				var dropDownIconEle = subMenuDropdownActionEle.firstChild;
				console.log(dropDownIconEle);
				if ( dropDownIconEle.classList.contains('icon-arrow-down') ) {
					dropDownIconEle.classList.remove('icon-arrow-down');
					dropDownIconEle.classList.add('icon-arrow-up');
				} else {
					dropDownIconEle.classList.remove('icon-arrow-up');
					dropDownIconEle.classList.add('icon-arrow-down');
				}
			});
		});
	}
}

taleBlogInit.init();