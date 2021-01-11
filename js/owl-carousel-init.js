//owl carousel
$(function () {
	$('.owl-carousel:not(".test-owl")').owlCarousel({
		loop: true,
		nav: true,
		margin: 10,
		responsiveClass: true,
		center: true,
		dots: false,
		lazyLoad: true,
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3
			},
			1000: {
				items: 5,
				loop: false
			}
		}
	});
});

$(function () {
	$('.test-owl').owlCarousel({
		loop: true,
		margin: 10,
		responsiveClass: true,
		center: true,
		dots: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 1,
			},
			1000: {
				items: 1,
			}
		}
	});
});
