'use strict';

/*
====================================================================
= 
= Since: 1.0.0
= Function: DOMContentLoaded. Only load functions once DOM is loaded.
= 
===============================================================================================
*/

document.addEventListener("DOMContentLoaded", function () {

	// Init functions
	var xeInitAll = function () {

		xeToolTip();
		xeToggleComment();
		xeBackToTopButton();
		xeCanvasNavigationSubMenuToggleBtn();
		//xeTabs();
		//xeTabHiddenItems();
		//initSwiper();
	}

	xeInitAll();

	// Tooltip
	function xeToolTip() {
		tippy(".xe-tippy", {
			content: "",
			allowHTML: false,
			arrow: true,
			delay: 10,
			duration: 350,
			maxWidth: 350,
			placement: "left",
			animation: "scale",
		});
	}


	// Toggle comments
	function xeToggleComment() {

		var body = document.body;
		var commentToggleBtn = document.getElementById("xe-comment-toggle-btn");

		if (commentToggleBtn !== null || undefined) {

			commentToggleBtn.addEventListener('click', function () {

				body.classList.toggle("xe-visible-comments");
			});
		}
	}


	// Back to top button 
	function xeBackToTopButton() {

		var yAxisHeight = window.pageYOffset;
		var backToTopBtn = document.getElementById("xe-backtotop-button");

		window.addEventListener('scroll', function () {

			if (backToTopBtn !== null || undefined) {

				if (yAxisHeight > 600) {

					backToTopBtn.classList.add("visible");

				} else {

					backToTopBtn.classList.remove("visible");
				}

				backToTopBtn.addEventListener('click', function () {

					window.scrollTo({
						top: 0,
						left: 0,
						behavior: 'smooth'
					});
				});
			}
		});
	}

	// Append toggle button in mobile canvas navigation dropdown
	function xeCanvasNavigationSubMenuToggleBtn() {

		var mobileCanvas = document.getElementById("xe-mobile-canvas");
		var mobileCanvasNavChildren = document.querySelectorAll("#xe-mobile-canvas .xe-offcanvas-navigation li.menu-item-has-children");
		var subMenuTooglePlusIconClass = "ti-plus";
		var subMenuToogleMinusIconClass = "ti-minus";
		var appendSubMenuToggleBtn = '<button class="xe-button xe-false-button xe-toggle-canvassubmenu"><i class="ti-plus"></button>';

		if (mobileCanvas !== null || undefined) {

			if (mobileCanvasNavChildren !== null || undefined) {

				mobileCanvasNavChildren.forEach(function (child) {

					child.insertAdjacentHTML('beforeend', appendSubMenuToggleBtn);
				});
			}
		}

		// Attribute xe-submenu-style="" | options = default | revealing
		var mobileCanvasSubMenuStyleEle = document.querySelector("#xe-mobile-canvas .is-offcanvas-menu");

		if (mobileCanvasSubMenuStyleEle !== null || undefined) {

			var mobileCanvasSubMenuStyleEleAttribute = mobileCanvasSubMenuStyleEle.getAttribute('xe-submenu-style');

			if (mobileCanvasSubMenuStyleEleAttribute == "revealing") {

				var mobileCanvasSubMenuBackButton = '<li class="goback"><button class="xe-button xe-false-button xe-canvassubmenu-goback-button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 13v7l-8-8 8-8v7h8v2z" fill="rgba(105,105,105,1)"/></svg> <span class="text">Go Back</span></button></li>';
				var mobileCanvasSubMenuEle = document.querySelectorAll("#xe-mobile-canvas .xe-offcanvas-navigation .sub-menu");

				if (mobileCanvasSubMenuEle !== null || undefined) {

					mobileCanvasSubMenuEle.forEach(function (childEle) {

						childEle.insertAdjacentHTML('afterbegin', mobileCanvasSubMenuBackButton);
					});
				}

				var mobileCanvasSubMenuBackButtonEle = document.querySelectorAll("#xe-mobile-canvas .xe-offcanvas-navigation .sub-menu .xe-canvassubmenu-goback-button");

				if (mobileCanvasSubMenuBackButtonEle !== null || undefined) {

					mobileCanvasSubMenuBackButtonEle.forEach(function (backBtn) {

						backBtn.addEventListener('click', function () {

							this.parentElement.parentElement.parentElement.classList.remove("xe-submenu-open");
						});
					});
				}
			}
		}

		// Canvas submenu toggle button
		var mobileCanvasSubMenuToggleBtn = document.querySelectorAll("#xe-mobile-canvas .xe-offcanvas-navigation .menu-item-has-children .xe-toggle-canvassubmenu");

		if (mobileCanvasSubMenuToggleBtn !== null || undefined) {

			mobileCanvasSubMenuToggleBtn.forEach(function (toggleBtn) {

				toggleBtn.addEventListener('click', function () {

					this.classList.toggle("active");
					this.parentElement.classList.toggle("xe-submenu-open");

					if (mobileCanvasSubMenuStyleEleAttribute !== "revealing") {

						// Toggle plus/minus icon.
						if (this.classList.contains("active")) {

							this.querySelector("i").classList.remove(subMenuTooglePlusIconClass);
							this.querySelector("i").classList.add(subMenuToogleMinusIconClass);

						} else {

							this.querySelector("i").classList.remove(subMenuToogleMinusIconClass);
							this.querySelector("i").classList.add(subMenuTooglePlusIconClass);
						}
					}
				});
			});
		}
	}

	// tab
	//function xeTabs() {
	//	var bindAllTabs = function () {
	//		var tabElements = document.querySelectorAll("[xe-data-tab]");

	//		for (var i = 0; i < tabElements.length; i++) {
	//			tabElements[i].addEventListener("click", change, false);
	//		}
	//	};

	//	var clear = function () {
	//		var tabElements = document.querySelectorAll("[xe-data-tab]");

	//		for (var i = 0; i < tabElements.length; i++) {
	//			tabElements[i].classList.remove("active");
	//			var id = tabElements[i].getAttribute("xe-data-tab");
	//			document.getElementById(id).classList.remove("active");
	//		}
	//	};

	//	var change = function (e) {
	//		clear();
	//		e.preventDefault();
	//		e.target.classList.add("active");
	//		var id = e.currentTarget.getAttribute("xe-data-tab");
	//		document.getElementById(id).classList.add("active");
	//	};

	//	bindAllTabs();
	//}


	// tab hidden nav items
	//function xeTabHiddenItems() {

	//	var hiddenTabNavToggleEle = document.querySelectorAll(".toggle-hidden-tabnav-items");
	//	var hiddenTabNavItemsEle = document.querySelectorAll(".xe-hidden-tabnavs");

	//	[].forEach.call(hiddenTabNavToggleEle, function (item) {
	//		item.addEventListener("click", function (e) {
	//			e.preventDefault();
	//			var parentNav = item.parentNode;
	//			var parentNavChildren = parentNav.children;
	//			for (var i = 0; i < parentNavChildren.length; i++) {
	//				if (
	//					parentNavChildren[i].classList.contains(
	//						"xe-hidden-tabnavs"
	//					)
	//				) {
	//					parentNavChildren[i].classList.toggle("visible");
	//				}
	//			}
	//		});
	//	});
	//}

	// swiper
	//function initSwiper() {
	//	var swiper = new Swiper("#product-block-1-demo-carosuel", {
	//		direction: "horizontal",
	//		effect: "slide",
	//		spaceBetween: 30,
	//		slidesPerView: 4,
	//		loopedSlides: 4,
	//		loop: true,
	//		freeMode: false,
	//		lazy: true,
	//		speed: 1000,
	//		breakpoints: {
	//			1024: {
	//				slidesPerView: 4,
	//			},
	//			991: {
	//				slidesPerView: 3,
	//			},
	//			768: {
	//				slidesPerView: 3,
	//			},
	//			575: {
	//				slidesPerView: 2,
	//				spaceBetween: 10,
	//			},
	//			0: {
	//				slidesPerView: 2,
	//				spaceBetween: 10,
	//			},
	//		},
	//		pagination: {
	//			el: ".swiper-pagination",
	//		},
	//		navigation: {
	//			nextEl: ".swiper-button-next",
	//			prevEl: ".swiper-button-prev",
	//		},
	//	});

	//	var swiper = new Swiper("#product-block-2-demo-carosuel", {
	//		direction: "horizontal",
	//		effect: "slide",
	//		spaceBetween: 0,
	//		slidesPerView: 1,
	//		loopedSlides: 1,
	//		loop: true,
	//		freeMode: false,
	//		lazy: true,
	//		speed: 1000,
	//		pagination: {
	//			el: ".swiper-pagination",
	//		},
	//		navigation: {
	//			nextEl: ".swiper-button-next",
	//			prevEl: ".swiper-button-prev",
	//		},
	//	});
	//}

});


