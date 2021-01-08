<!DOCTYPE html>
<html lang="en">
<!--hello mundo-->

<head>
	<?php include('include-head.php'); ?>

	<title>A r t i N e | Photography</title>
</head>

<body>

	<!-- include pre-loader	-->
	<?php include('include-preloader.php');  ?>

	<!-- anchor tag for back to top button-->
	<a name="top"></a>

	<!-- back to top button -->
	<a href="#top" class="back-to-top js-back-to-top">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>

	<!-- include navbar	-->
	<?php include('include-navbar.php'); ?>

	<!-- Hero section -->
	<section id="hero">
		<div class="hero flex-center">

			<!-- Overlay -->
			<div class="overlay hide-on-lg"></div>

			<div class="hero__caption">

				<!-- Underlay -->
				<div class="underlay hide show-on-lg"></div>

				<p class="hero__sub-header">make your</p>
				<h1 class="hero__header">Treasured Moments</h1>
				<p class="hero__sub-header">last forever</p>
				<p class="hero__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, ab.</p>

				<a href="page-contact.php#contact" class="btn btn--large btn--dark">hire us </a>
			</div>
		</div> <!-- ./hero -->
	</section> <!-- /. hero section -->


	<!--	About section -->
	<section id="about-sec">
		<div class="container">
			<h2 class="sub-title" data-aos="fade">We are ArtiNe</h2>
			<div class="about-sec" data-aos="fade-up">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In provident dicta odit quis officiis consequatur facere quae quaerat laboriosam ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea modi praesentium illo vero assumenda, sit, atque. Qui voluptatibus esse tempora voluptate quia, possimus enim, ipsa beatae, delectus consequuntur quo in nostrum quos aperiam facere optio culpa ut dolores, deserunt. Harum doloribus minus ad unde minima tenetur modi, voluptates. Ullam, commodi!</p>
			</div>
		</div>
	</section> <!-- /. about section -->


	<!-- Benefits section -->
	<section id="benefits">

		<div class="container-full bg-alt">
			<div class="benefits">

				<div class="benefits__item" data-aos="flip-down" data-aos-delay="100">
					<img data-src="img/icons/pro-cam.png" class="benefits__icon lazy" alt="Professional Photographers">
					<h5>Professional</h5>
					<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, officia!</p>
				</div>

				<div class="benefits__item" data-aos="flip-down" data-aos-delay="200">
					<img data-src="img/icons/cheap-price.png" class="benefits__icon lazy" alt="Affordable">
					<h5>Affordable</h5>
					<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>

				<div class="benefits__item" data-aos="flip-down" data-aos-delay="300">
					<img data-src="img/icons/image.png" class="benefits__icon lazy" alt="High Quality Images">
					<h5>High Quality</h5>
					<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, sunt maxime eaque ea?</p>
				</div>
			</div>
		</div> <!-- ./container -->
	</section> <!-- /. benefits section -->


	<!-- Services section -->
	<section id="services">
		<div class="container-full">
			<h2 class="sub-title" data-aos="fade">Services</h2>
			<div class="flex-center">
				<div class="services__item" data-aos="fade-right" data-aos-duration="750">
					<img data-src="img/banners/wedding-banner.jpg" class="img-fit lazy" alt="Wedding Packages">
				</div>

				<div class="services__item services__text" data-aos="fade" data-aos-duration="750">
					<h2 class="services__header">Weddings</h2>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae incidunt iure, quos nisi esse ut!</p>
					<a href="page-packages.php#weddings" class="btn btn--small btn--light">View Packages</a>
				</div>

				<div class="services__item services__text" data-aos="fade" data-aos-duration="750">
					<h2 class="services__header">Birthdays</h2>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum laboriosam culpa quibusdam est optio libero.</p>
					<a href="page-packages.php#birthdays" class="btn btn--small btn--light">View Packages</a>
				</div>

				<div class="services__item" data-aos="fade-left" data-aos-duration="750">
					<img data-src="img/banners/birthday-banner.jpg" class="img-fit lazy" alt="Birthday Packages">
				</div>

				<a href="page-packages.php" class="btn-outline btn-outline--dark btn--large mt-4 order-last" data-aos="fade-up">SEE MORE</a>
			</div>
		</div> <!-- ./container -->
	</section> <!-- /. services section -->


	<!-- Testimonials section -->
	<section id="testimonials">
		<div class="container-full relative">
			<h2 class="sub-title" data-aos="fade">Testimonials</h2>

			<!-- background diagonal svg  box-->
			<svg class="svg-box" viewBox="0 0 500 150" preserveAspectRatio="none">
				<path d="M-4.22,35.03 C-2.54,35.03 -3.67,35.03 542.61,-0.48 L500.00,150.00 L-0.84,178.13 Z"></path>
			</svg>

			<div class="ow1 owl-carousel owl-theme test-owl">

				<div class="item">
					<div class="testimonials">
						<div class="testimonials__img-wrap">
							<img data-src="img/testimonials/testimonial-1.JPG" class="testimonials__img lazy" alt="ArtiNe's Client">

							<div class="star-rating-box">
								<div class="rating" style="width:90%;"></div>
							</div>
						</div>

						<div class="testimonials__text-wrap">
							<p class="testimonials__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi.</p>
							<span class="testimonials__author">&#8212; Lorem Ipsum</span>
						</div>
					</div> <!-- ./testimonials item -->
				</div> <!-- ./owl item -->

				<div class="item">
					<div class="testimonials">
						<div class="testimonials__img-wrap">
							<img data-src="img/testimonials/testimonial-1.JPG" class="testimonials__img lazy" alt="ArtiNe's Client">

							<div class="star-rating-box">
								<div class="rating" style="width:90%;"></div>
							</div>
						</div>

						<div class="testimonials__text-wrap">
							<p class="testimonials__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi.</p>
							<span class="testimonials__author">&#8212; Lorem Ipsum</span>
						</div>
					</div> <!-- ./testimonials item -->
				</div> <!-- ./owl item -->

				<div class="item">
					<div class="testimonials">
						<div class="testimonials__img-wrap">
							<img data-src="img/testimonials/testimonial-1.JPG" class="testimonials__img lazy" alt="ArtiNe's Client">

							<div class="star-rating-box">
								<div class="rating" style="width:90%;"></div>
							</div>
						</div>

						<div class="testimonials__text-wrap">
							<p class="testimonials__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi.</p>
							<span class="testimonials__author">&#8212; Lorem Ipsum</span>
						</div>
					</div> <!-- ./testimonials item -->
				</div> <!-- ./owl item -->
			</div> <!-- ./owl carousel -->
		</div> <!-- ./container -->
	</section> <!-- /. testimonials section -->


	<!-- Quote section -->
	<section id="quote">
		<div class="quote-sec flex-center lazy">
			<div class="overlay"></div>
			<h2 class="quote-sec__text" data-aos="fade-up">"Capture Moments that Matter"</h2>
		</div>
	</section><!-- /. quote section -->


	<!-- Featured section -->
	<section id="featured">
		<div class="container-full">
			<h2 class="sub-title" data-aos="fade">Our Latest Work</h2>

			<div class="flex-center">
				<div class="featured__item" data-aos="fade-right">
					<video controls controlsList="nodownload" playsinline poster="img/video-thumbnails/featured-thumb.jpg" class="w-100" lazy>
						<source data-src="videos/us.mp4" type="video/mp4">
					</video>
				</div>

				<div class="featured__item" data-aos="fade-left">

					<h2 class="featured__title">Us the Duo</h2>
					<span class="featured__sub-header"><em>No Matter Where You Are. (Wedding Edition)</em></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iure ducimus facere, consectetur natus necessitatibus, aliquam ab dolore atque mollitia inventore molestiae rerum ut nesciunt, aliquid porro repellat beatae repellendus.</p>
				</div>

				<div class="featured__blogs">
					<div class="ow1 owl-carousel owl-theme">

						<div class="item">
							<a href="page-blog.php#jose-maria" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/kendra-allen/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#patricia" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/patricia-prudente/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#baby-zhou" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/minnie-zhou/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#ana-7th" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/ana-tavares/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#baby-yuri" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/yuri-tasso/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#vitor-jillian" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/vitor-pinto/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#baby-joven" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/minnie-zhou-2/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#kian-rose" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/vitor-pinto-3/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#hanna-debut" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/hanna-busing/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#jake-joanna" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/vitor-pinto-2/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#william-stelle" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/kendra-allen-2/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>

						<div class="item">
							<a href="page-blog.php#baby-moreira" class="overlay opacity-0 show-on-hover">
								<span class="overlay__text">View Our Blogs</span>
							</a>

							<img class="owl-lazy" data-src="img/gallery/douglas-j-s-moreira/thumb-1.jpg" alt="Photo from unsplash.com">
						</div>
					</div>
				</div> <!-- ./featured blogs -->
			</div> <!-- ./flex-center -->
		</div> <!-- ./container -->
	</section> <!-- ./blog section -->


	<!-- Email section -->
	<section id="email-sec">
		<div class="container-full email-sec flex-center">
			<div class="email-sec__content flex-center" data-aos="flip-left">
				<div class="email-sec__text">
					<span>Got some questions?</span>
					<h3 class="email-sec__text-header">Connect with us!</h3>
					<span>(We'll answer as soon as possible.)</span>
				</div>

				<div class="email-sec__img">
					<img data-src="img/banners/email-banner.jpg" class="img-fit lazy" alt="">
				</div>
			</div>

			<form action="send-email.php" method="POST" class="email-sec__form" data-aos="flip-right">
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

				<input type="submit" value="Send Message" name="submit" class="btn-outline btn--large btn-outline--dark mb-1 w-100">

				<label>Note: <span>*</span> indicates required.</label>
			</form>
		</div> <!-- ./container -->
	</section> <!-- /. email section -->


	<?php include('include-footer.php') ?>

	<!-- navbar active state -->
	<script>
		$(document).ready(function() {
			$('.footer__nav-link:eq(0)').addClass('is-active');
		});

	</script>
</body>

</html>
