//gallery

//initialize lightGallery
$(function () {
	$(".gallery").lightGallery({
		selector: '.gallery__item',
		showThumbByDefault: false
	});
});

$(function () {
	var $grid = $('.gallery').imagesLoaded(function () {
		$grid.isotope({
			itemSelector: '.gallery__item',
			percentPosition: true,

			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.gallery__sizer',
				gutter: '.gallery__gutter'
			}
		});
	});

	// filter functions
	var filterFns = {};

	// bind filter button click
	$('.gallery-filter').on('click', 'button', function () {
		var filterValue = $(this).attr('data-filter');
		// use filterFn if matches value
		filterValue = filterFns[filterValue] || filterValue;
		$grid.isotope({
			filter: filterValue
		});

		$(".gallery").data('lightGallery').destroy(true);
		$(".gallery").lightGallery({
			selector: filterValue.replace('*', '')
		});
	});

	// change active state class on buttons
	$('.gallery-filter').each(function (i, buttonGroup) {
		var $buttonGroup = $(buttonGroup);
		$buttonGroup.on('click', 'button', function () {
			$buttonGroup.find('.is-active').removeClass('is-active');
			$(this).addClass('is-active');

		});

	});
});

//show gallery filter
$(function () {
	function galNav() {
		var opened = $(".gallery-filter__menu").hasClass("is-active");

		if (opened === false) {
			$(".gallery-filter__menu").addClass("is-active");
			$(".gallery-filter__toggler").addClass("is-active");

		} else {
			$(".gallery-filter__menu").removeClass("is-active");
			$(".gallery-filter__toggler").removeClass("is-active");
		}
	}
});
