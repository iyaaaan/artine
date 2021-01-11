//Close modal when pressed ESC key
$(document).keyup(function (e) {
	var shown = $(".modal").hasClass("is-shown");
	var teamModal = $(".team-modal").hasClass("is-shown");

	if (e.keyCode == 27) { // escape key maps to keycode `27`
		if (shown === true) {
			$(".modal").removeClass("is-shown");
			$("body").removeClass("overflow-hidden");
		}

		if (teamModal === true) {
			$(".team-modal").removeClass("is-shown");
			$('.team-modal__slide').removeClass('is-shown');
			$('body').removeClass('overflow-hidden');
		}
	}
});

//hides modal when clicked outside
$(function () {
	$(document).click(function (event) {
		var clickover = $(event.target);
		var modal = $(".modal").hasClass("is-shown");
		var teamModal = $(".team-modal").hasClass("is-shown");

		if (modal === true && clickover.hasClass("modal")) {
			$(".modal").removeClass("is-shown");
			$("body").removeClass("overflow-hidden");
		}

		if (teamModal === true && !clickover.hasClass("team-modal") && !clickover.hasClass("team-modal__slide")) {
			$(".team-modal").removeClass("is-shown");
			$("body").removeClass("overflow-hidden");
		}
	});
});
