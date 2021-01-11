//pre-loader
$(function () {
	$('body, html').addClass('overflow-hidden');

	$(window).on("load", function () {
		setTimeout(function () {
			$('.js-pre-loader').fadeOut('slow', function () {
				$(this).remove();
			});
			$('body, html').removeClass('overflow-hidden');
		}, 500);
	});
});
