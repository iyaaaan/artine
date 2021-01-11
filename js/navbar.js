//Navbar

//Open Navigation bar
function toggleNavbar() {
	var opened = $(".js-navbar__menu").hasClass("is-opened");
	var toggled = $(".js-navbar__bar").hasClass("is-toggled");


	if (opened === false && toggled === false) {
		$(".js-navbar__menu").addClass("is-opened");
		$(".js-navbar__bar").addClass("is-toggled");

	} else {
		$(".js-navbar__menu").removeClass("is-opened");
		$(".js-navbar__bar").removeClass("is-toggled");
	}
}

//Hides/shows navbar on scroll down/up
$(function () {
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function () {
		var currentScrollPos = window.pageYOffset;
		$('.js-navbar').css('position', 'fixed');

		if (prevScrollpos > currentScrollPos) {
			$(".js-navbar").css('top', '0px');
		} else {
			$('.js-navbar').css('top', '-200px');
			$('.js-navbar').css('position', 'fixed');
		}
		prevScrollpos = currentScrollPos;
	}
});

//Hides navbar when clicked outside
$(function () {
	$(document).click(function (event) {
		var clickover = $(event.target);
		var opened = $(".js-navbar__menu").hasClass("is-opened");
		var toggled = $(".js-navbar__bar").hasClass("is-toggled");

		if (opened === true && toggled === true && !clickover.hasClass("navbar__toggler") && !clickover.hasClass("js-navbar__bar") && !clickover.hasClass("js-navbar__menu") && !clickover.hasClass("navbar__item") && !clickover.hasClass("js-navbar")) {
			$(".js-navbar__menu").removeClass("is-opened");
			$(".js-navbar__bar").removeClass("is-toggled");
		}
	});
});

//Hides navbar-menu on scroll
$(function () {
	$(document).scroll(function () {
		$(".js-navbar__menu").removeClass('is-opened');
		$(".js-navbar__bar").removeClass('is-toggled');
	});
});

//Hides navbar when pressed ESC key
$(document).keyup(function (e) {
	var opened = $(".js-navbar__menu").hasClass("is-opened");
	var toggled = $(".js-navbar__bar").hasClass("is-toggled");
	var shown = $(".modal").hasClass("is-shown");
	var teamModal = $(".team-modal").hasClass("is-shown");

	if (e.keyCode == 27) { // escape key maps to keycode `27`
		if (opened === true && toggled === true) {
			$(".js-navbar__menu").removeClass("is-opened");
			$(".js-navbar__bar").removeClass("is-toggled");
		}
	}
});
