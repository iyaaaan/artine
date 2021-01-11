//shows back to top button after scrolling 500px
$(document).scroll(function () {
	var y = $(this).scrollTop();
	if (y > 800) {
		$('.js-back-to-top').fadeIn('slow');
	} else {
		$('.js-back-to-top').fadeOut('slow');
	}
});
