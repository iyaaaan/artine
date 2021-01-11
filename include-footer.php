<!-- Footer -->
<footer>
	<div class="footer">
		<div class="footer__about">
			<img src="img/logos/artine-logo.png" class="footer__about-img lazy" alt="">
			<p class="footer__about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ad architecto laborum totam asperiores assumenda facere saepe quisquam debitis quos.</p>
			<p class="footer__about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, quibusdam?</p>
		</div>

		<hr class="bg-muted w-75 hide-on-sm">

		<div class="footer__terms">
			<h5 class="footer__header text-center text-left-sm tracking-3 mb-1">Terms and Conditions</h5>
			<p class="footer__terms-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro modi odio, vitae, veniam praesentium dicta libero inventore rem fuga qui?</p>
		</div>

		<hr class="bg-muted w-75 hide-on-sm">

		<div class="footer__navigation">
			<h5 class="footer__header text-center text-left-sm tracking-3 mb-1">Navigation</h5>
			<ul class="footer__nav text-center text-left-sm list-none">
				<li class="my-1">
					<a href="index.php" class="footer__nav-link text-white">Home</a>
				</li>
				<li class="my-1">
					<a href="page-about.php" class="footer__nav-link text-white">About</a>
				</li>
				<li class="my-1">
					<a href="page-packages.php" class="footer__nav-link text-white">Packages</a>
				</li>
				<li class="my-1">
					<a href="page-blog.php" class="footer__nav-link text-white">Blog</a>
				</li>
				<li class="my-1">
					<a href="page-gallery.php" class="footer__nav-link text-white">Gallery</a>
				</li>
				<li class="my-1">
					<a href="page-contact.php" class="footer__nav-link text-white">Contact</a>
				</li>
			</ul>
		</div>

		<hr class="bg-muted w-75 hide-on-sm">

		<div class="footer__contact">
			<h5 class="footer__header text-center text-left-sm tracking-3 mb-1">Contact Us</h5>
			<ul class="fa-ul break-all">
				<li><i class="fa-li fa fa-map-marker">
					</i>
					<p class="footer__contact-info">P-5 Brgy. Magang, Daet, Camarines Norte</p>
				</li>
				<li>
					<i class="fa-li fa fa-envelope"></i>
					<p class="footer__contact-info">christianocol12@gmail.com</p>
				</li>
				<li>
					<i class="fa-li fa fa-phone"></i>
					<p class="footer__contact-info">+(63) 929- 8211- 353</p>
				</li>
			</ul>
			<div>
				<ul class="social-media">
					<li class="social-media__item">
						<a href="http://facebook.com/christian.ocol" target="_blank" class="btn--fb text-white"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
					</li>
					<li class="social-media__item">
						<a href="http://twitter.com/Iyan87540607" target="_blank" class="btn--twit text-white"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
					<li class="social-media__item">
						<a href="http://instagra.com/iyaaaan__" target="_blank" class="btn--insta text-white">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
				</ul>
			</div>
			<a href="page-contact.php#contact" class="btn btn--large btn--light w-100">Hire Us</a>
		</div>
	</div><!-- end c-footer -->

	<div class="sub-footer">
		<div class="sub-footer__copyright">
			<span>© 2020 Copyright: <a href="http://iyaaaan.github.io" target="_blank" class="text-secondary">Kristyan.</a> All Rights Reserved. </span>
		</div>
		<div>
			<ul class="sub-footer__legalities">
				<li class="sub-footer__legalities-item relative mx-1">
					<span class="sub-footer__legalities-link" onclick="openModal(this);" data-target="terms-modal">Legal Notice</span>
				</li>
				<li class="sub-footer__legalities-item relative mx-1">
					<span class="sub-footer__legalities-link" onclick="openModal(this);" data-target="privacy-modal">Privacy Policy</span>
				</li>
			</ul>
		</div>
	</div>
</footer>
<!-- /. Footer -->


<?php include('modal-terms.php') ?>
<?php include('modal-privacy.php') ?>

<!-- External JS Files -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-lazy-init.js" defer></script>
<script src="js/jquery-lazy.min.js" defer></script>

<!-- Pre-loader JS -->
<script src="js/pre-loader.js"></script>

<!-- Back to top JS -->
<script src="js/back-to-top.js"></script>

<!-- Navbar JS -->
<script src="js/navbar.js"></script>

<!-- Modal JS -->
<script src="js/modal.js"></script>

<!-- AOS -->
<script src="js/aos-init.js"></script>
<script src="js/aos.min.js"></script>

<!--Main Script-->
<script src="js/main.js"></script>

<script>
	function openModal(d) {
		$target = d.getAttribute("data-target");

		$('#' + $target).addClass('is-shown');
		$('body').addClass('overflow-hidden');

	}

	function closeModal() {
		$('.modal').removeClass('is-shown');
		$('body').removeClass('overflow-hidden');
	}

</script>
