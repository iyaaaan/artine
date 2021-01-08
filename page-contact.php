<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-head.php'); ?>

	<title>A r t i N e | Contact</title>
</head>

<body>

	<!-- include pre-loader	-->
	<?php include('include-preloader.php');  ?>

	<!-- include navigation bar	-->
	<?php include('include-navbar.php'); ?>

	<!-- anchor tag for back to top button-->
	<a name="top"></a>

	<!-- back to top button -->
	<a href="#top" class="back-to-top js-back-to-top">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>

	<!-- contact-hero -->
	<div class="hero-banner">
		<img data-src="img/banners/contact-banner.jpg" alt="Contact Banner" class="img-fit lazy">
	</div>

	<div class="container-full" id="contact">
		<h2 class="sub-title" data-aos="fade">How Can We Help?</h2>

		<form action="send-email.php" method="POST" class="contact-form">
			<div class="form-fields">
				<div class="form-fields__col">
					<div class="input-wrap">
						<input type="text" id="name" name="name" placeholder="Name" class="capitalize" pattern="[A-Za-z0-9\s]{2,36}" autocomplete="off" required>
						<label for="name">Name <span>*</span></label>
					</div>

					<div class="input-wrap">
						<input type="email" id="email" name="email" placeholder="your@email.com" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" autocomplete="off" required>
						<label for="email">E-mail <span>*</span></label>
					</div>

					<div class="input-wrap">
						<input type="text" id="number" name="number" placeholder="Contact Number" minlength="7" maxlength="13" pattern="^(09|\+639)\d{9}$" autocomplete="off">
						<label for="number">Contact Number</label>
					</div>
				</div> <!-- ./form-fields__col -->

				<div class="form-fields__col">
					<div class="input-wrap">
						<input type="text" id="event" name="event" placeholder="Type of Event" class="capitalize" autocomplete="off" required>
						<label for="event">Event <span>*</span></label>
					</div>

					<div class="input-wrap">
						<input type="text" id="date" name="date" class="datepicker" placeholder="Date of Event" autocomplete="off" required>
						<label for="date">Date <span>*</span></label>
					</div>

					<div class="input-wrap">
						<input type="text" id="venue" name="venue" placeholder="Event's Venue" class="capitalize" autocomplete="off" required>
						<label for="venue">Venue <span>*</span></label>
					</div>
				</div> <!-- ./form-fields__col -->
			</div> <!-- ./form-fields -->

			<div class="input-wrap">
				<textarea name="message" id="message" placeholder="Message" autocomplete="off" required></textarea>
				<label for="message">Message <span>*</span></label>
			</div>

			<input type="submit" name="submit" value="Send Message" class="btn-outline btn--large btn-outline--dark mb-1 w-100">

			<label>Note: <span>*</span> indicates required.</label>
		</form>


		<div class="flex-center contact-info">
			<div class="contact-info__item">
				<iframe class="google-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.6887497394337!2d122.9446994680506!3d14.095542007222564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3398aef000000003% 3A0x7485dbb588ce057b!2sD%20House%20Hotel%20Camarines%20Norte!5e0!3m2!1sen!2sph!4v1590473732780!5m2!1sen!2sph" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="contact-info__item">
				<div class="mb-2">
					<i class="fa fa-map-marker mb-1">
					</i>
					<p>P-5 Brgy. Magang, Daet, Camarines Norte</p>
				</div>
				<div class="mb-2">
					<i class="fa fa-envelope mb-1"></i>
					<p>christianocol12@gmail.com</p>
				</div>
				<div>
					<i class="fa fa-phone mb-1"></i>
					<p>+(63) 929- 8211- 353</p>
				</div>
			</div>
		</div>
	</div>

	<?php include('include-footer.php') ?>

	<!-- navbar active state -->
	<script>
		$(document).ready(function() {
			$('.navbar__link:eq(4)').addClass('is-active');
			$('.footer__nav-link:eq(5)').addClass('is-active');
		});

	</script>

</body>

</html>
