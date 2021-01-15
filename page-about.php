<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-header.php'); ?>

	<title>A r t i N e | This Is Us</title>
</head>

<body>

	<!-- include pre-loader	-->
	<?php include('include-preloader.php'); ?>

	<!-- include navigation bar	-->
	<?php include('include-navbar.php'); ?>

	<!-- anchor tag for back to top button-->
	<a name="top"></a>

	<!-- back to top button -->
	<a href="#top" class="back-to-top js-back-to-top">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>

	<!-- about-hero -->
	<div class="hero-banner">
		<img src="img/banners/about-banner.jpg" alt="Artine Photography Family" class="img-fit">
	</div>

	<div class="container">
		<!--	title -->
		<h2 class="title" data-aos="fade">Our Story</h2>
		<div class="our-story" data-aos="fade-up">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste eaque porro odit, nihil officia quisquam recusandae ducimus enim voluptatum quos, aut minus adipisci tenetur consectetur nulla! Vero quos eum expedita culpa. Consequatur dignissimos nisi, eius cum mollitia, accusantium ipsum sit aliquid rem laborum illum nulla asperiores alias magni molestiae aliquam. Nam quo, assumenda, iste quos quidem, architecto dolores rem, neque illum nulla harum repudiandae nihil voluptates atque nostrum et porro similique aut dicta eligendi laboriosam eum? Inventore, harum eius impedit.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit in consequuntur repellat iusto quod officia obcaecati excepturi delectus pariatur rerum quibusdam nostrum autem, soluta sint debitis fuga culpa saepe reiciendis, eligendi id perspiciatis, ducimus optio! Eius natus, quasi, officia dolorem tempora omnis ad autem doloribus delectus, ea accusantium obcaecati assumenda!</p>
		</div>
	</div>

	<!--	our team -->
	<section>
		<div class="container">
			<h2 class="title" data-aos="fade">Meet the Team</h2>

			<div class="team">

				<!-- team card -->
				<div class="team-card" data-aos="fade-right">
					<img data-src="img/team/team-1.jpg" alt="Juan Dela Cruz Jr." class="img-fit team-img lazy" data-target="member-1" onclick="openTeamModal(this);">

					<div class="py-1">
						<span class="team-card__name">JUAN DELA CRUZ Jr.</span>
						<span class="team-card__role">Photographer | Videographer</span>

					</div>
				</div>

				<!-- team card -->
				<div class="team-card" data-aos="fade-left">
					<img data-src="img/team/team-1.jpg" alt="Juan Dela Cruz Jr." class="img-fit team-img lazy" data-target="member-2" onclick="openTeamModal(this);">

					<div class="py-1">
						<span class="team-card__name">JUAN DELA CRUZ II</span>
						<span class="team-card__role">Photographer | Videographer</span>
					</div>
				</div>

				<!-- team card -->
				<div class="team-card" data-aos="fade-right">
					<img data-src="img/team/team-1.jpg" alt="Juan Dela Cruz Jr." class="img-fit team-img lazy" data-target="member-3" onclick="openTeamModal(this);">

					<div class="py-1">
						<span class="team-card__name">JUAN DELA CRUZ III</span>
						<span class="team-card__role">Photographer | Videographer</span>
					</div>
				</div>

				<!-- team card -->
				<div class="team-card" data-aos="fade-right">
					<img data-src="img/team/team-1.jpg" alt="Juan Dela Cruz Jr." class="img-fit team-img lazy" data-target="member-4" onclick="openTeamModal(this);">

					<div class="py-1">
						<span class="team-card__name">JUAN DELA CRUZ Sr.</span>
						<span class="team-card__role">Photographer | Videographer</span>
					</div>
				</div> <!-- ./team -->

				<!-- team card -->
				<div class="team-card" data-aos="fade-left">
					<img data-src="img/team/team-1.jpg" alt="Juan Dela Cruz Jr." class="img-fit team-img lazy" data-target="member-5" onclick="openTeamModal(this);">

					<div class="py-1">
						<span class="team-card__name">JUAN DELA CRUZ V</span>
						<span class="team-card__role">Photographer | Videographer</span>
					</div>
				</div> <!-- ./team -->

				<!-- team card -->
				<div class="team-card" data-aos="fade-right">
					<img data-src="img/team/team-1.jpg" alt="Juan Dela Cruz Jr." class="img-fit team-img lazy" data-target="member-6" onclick="openTeamModal(this);">

					<div class="py-1">
						<span class="team-card__name">JUAN DELA CRUZ VI</span>
						<span class="team-card__role">Photographer | Videographer</span>
					</div>
				</div>

			</div> <!-- ./team -->
		</div> <!-- ./container-full -->
	</section>

	<section>
		<div class="container-full">
			<!--	title -->
			<h2 class="title">Why ArtiNe?</h2>

			<div class="flex-center mb-5">
				<div class="featured__item">
					<video controls controlsList="nodownload" playsinline poster="img/video-thumbnails/explainer-thumb.jpg" class="w-100 lazy">
						<source data-src="videos/explainer.mp4" type="video/mp4">
					</video>
				</div>

				<div class="featured__item">
					<h2 class="featured__title">We made this is for you.</h2>
					<span class="featured__sub-header"><em>If you made it this far, better check our blogs and take a look of our works!</em></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iure ducimus facere, consectetur natus necessitatibus, aliquam ab dolore atque mollitia inventore molestiae rerum ut nesciunt, aliquid porro repellat beatae repellendus.</p>
				</div>
			</div>

			<div class="benefits">
				<div class="benefits__item">
					<img data-src="img/icons/pro-cam.png" class="benefits__icon lazy" alt="Professional Photographers">
					<h5>Professional</h5>
					<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, officia!</p>
				</div>

				<div class="benefits__item">
					<img data-src="img/icons/cheap-price.png" class="benefits__icon lazy" alt="Affordable">
					<h5>Affordable</h5>
					<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>

				<div class="benefits__item">
					<img data-src="img/icons/image.png" class="benefits__icon lazy" alt="High Quality Images">
					<h5>High Quality</h5>
					<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, sunt maxime eaque ea?</p>
				</div>
			</div>

			<div class="stats">
				<div class="stats__item">
					<div class="stats__inner">
						<span>4</span>
					</div>
					<span class="stats__text">Years</span>
				</div>

				<div class="stats__item">
					<div class="stats__inner">
						<span>1.5k</span>
					</div>
					<span class="stats__text">Clients</span>
				</div>

				<div class="stats__item">
					<div class="stats__inner">
						<span>800</span>
					</div>
					<span class="stats__text">Events</span>
				</div>

				<div class="stats__item">
					<div class="stats__inner">
						<span>200K+</span>
					</div>
					<span class="stats__text">Shots Taken</span>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="book-now">
				<div class="book-now__content">
					<h2 class="book-now__header">Book your special day!</h2>
					<p class="leading-lg">Be part of the highly satisfied clients that we've worked with! We will capture every single smile on your special day. We'll work extra for you! ;) </p>
					<a href="page-contact.php" class="btn-outline btn-outline--light btn--large">BOOK NOW</a>
				</div>

				<div class="book-now__img">
					<img data-src="img/banners/book-banner.png" alt="Telephone" class="img-fit lazy">
				</div>
			</div>
		</div>
	</section>


	<!-- include team-modal -->
	<?php include('modal-team.php') ?>

	<!-- include footer -->
	<?php include('include-footer.php') ?>

	<!-- navbar active state -->
	<script>
		$(document).ready(function() {
			$('.navbar__link:eq(0)').addClass('is-active');
			$('.footer__nav-link:eq(1)').addClass('is-active');
		});

	</script>

	<script>
		function openTeamModal(d) {
			$(document).ready(function() {
				$('body').addClass('overflow-hidden');
				$target = d.getAttribute("data-target");

				$('.team-modal').addClass('is-shown');
				$('#' + $target).addClass('is-shown');
			});
		}

		function closeTeamModal() {
			$(document).ready(function() {
				$('.team-modal').removeClass('is-shown');
				$('.team-modal__slide').removeClass('is-shown');
				$('body').removeClass('overflow-hidden');
			});
		}

	</script>

</body>

</html>
