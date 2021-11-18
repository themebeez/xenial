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


	// init 
	var xeInitAll = function () {

		xeSmoothScroll();
		xeTabs();
		xeToolTip();
		xeToggleComment();
		xeBackToTopButton();
		xeTabHiddenItems();
		initSwiper();
	}

	xeInitAll();

	// smooth scroll
	function xeSmoothScroll() {
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();

				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
			});
		});
	}

	// tooltips
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


	// toggle comments
	function xeToggleComment() {

		var body = document.body;
		var commentToggleBtn = document.getElementById("xe-comment-toggle-btn");

		if (commentToggleBtn !== null || undefined) {

			commentToggleBtn.addEventListener('click', function () {

				body.classList.toggle("xe-visible-comments");
			});
		}
	}


	// back to top button 
	function xeBackToTopButton() {

		var body = document.body;
		//var backToTopButtonHolder = document.getElementById("xe-backtotop");
		var backToTopTriggerBtn = document.getElementById("xe-backtotop-button");

		window.addEventListener('scroll', function () {

			var yAxisHeight = window.pageYOffset;

			if (yAxisHeight > 600) {
				backToTopTriggerBtn.classList.add("visible");
			} else {
				backToTopTriggerBtn.classList.remove("visible");
			}
		});

		backToTopTriggerBtn.addEventListener('click', function () {
			body.scrollIntoView({
				behavior: 'smooth',
			});
		});
	}


	// tab
	function xeTabs() {
		var bindAllTabs = function () {
			var tabElements = document.querySelectorAll("[xe-data-tab]");

			for (var i = 0; i < tabElements.length; i++) {
				tabElements[i].addEventListener("click", change, false);
			}
		};

		var clear = function () {
			var tabElements = document.querySelectorAll("[xe-data-tab]");

			for (var i = 0; i < tabElements.length; i++) {
				tabElements[i].classList.remove("active");
				var id = tabElements[i].getAttribute("xe-data-tab");
				document.getElementById(id).classList.remove("active");
			}
		};

		var change = function (e) {
			clear();
			e.preventDefault();
			e.target.classList.add("active");
			var id = e.currentTarget.getAttribute("xe-data-tab");
			document.getElementById(id).classList.add("active");
		};

		bindAllTabs();
	}


	// tab hidden nav items
	function xeTabHiddenItems() {

		var hiddenTabNavToggleEle = document.querySelectorAll(".toggle-hidden-tabnav-items");
		var hiddenTabNavItemsEle = document.querySelectorAll(".xe-hidden-tabnavs");

		[].forEach.call(hiddenTabNavToggleEle, function (item) {
			item.addEventListener("click", function (e) {
				e.preventDefault();
				var parentNav = item.parentNode;
				var parentNavChildren = parentNav.children;
				for (var i = 0; i < parentNavChildren.length; i++) {
					if (
						parentNavChildren[i].classList.contains(
							"xe-hidden-tabnavs"
						)
					) {
						parentNavChildren[i].classList.toggle("visible");
					}
				}
			});
		});
	}

	// swiper
	function initSwiper() {
		var swiper = new Swiper("#product-block-1-demo-carosuel", {
			direction: "horizontal",
			effect: "slide",
			spaceBetween: 30,
			slidesPerView: 4,
			loopedSlides: 4,
			loop: true,
			freeMode: false,
			lazy: true,
			speed: 1000,
			breakpoints: {
				1024: {
					slidesPerView: 4,
				},
				991: {
					slidesPerView: 3,
				},
				768: {
					slidesPerView: 3,
				},
				575: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				0: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
			},
			pagination: {
				el: ".swiper-pagination",
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});

		var swiper = new Swiper("#product-block-2-demo-carosuel", {
			direction: "horizontal",
			effect: "slide",
			spaceBetween: 0,
			slidesPerView: 1,
			loopedSlides: 1,
			loop: true,
			freeMode: false,
			lazy: true,
			speed: 1000,
			pagination: {
				el: ".swiper-pagination",
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	}

});


