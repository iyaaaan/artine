<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-header.php'); ?>

	<title>A r t i N e | Galería</title>

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

	<!-- gallery-hero -->
	<div class="hero-banner">
		<img src="img/banners/gallery-banner.jpg" alt="Gallery Banner" class="img-fit">
	</div>

	<div class="container">
		<h2 class="sub-title" data-aos="fade">Galería</h2>

		<nav class="gallery-filter mb-1" id="gal-nav" data-aos="zoom-in">
			<a class="gallery-filter__toggler js-gal-nav" onclick="galNav()">Categories <i class="fa fa-caret-down" aria-hidden="true"></i></a>

			<div class="gallery-filter__menu">
				<button class="gallery-filter__btn navbar__link is-active" data-filter="*">Show All</button>
				<button class="gallery-filter__btn navbar__link" data-filter=".wedding">Weddings</button>
				<button class="gallery-filter__btn navbar__link" data-filter=".pre-nup">Pre-nups</button>
				<button class="gallery-filter__btn navbar__link" data-filter=".birthday">Birthdays</button>
				<button class="gallery-filter__btn navbar__link" data-filter=".baby">Babies</button>
			</div>
		</nav>

		<div class="gallery" data-aos="fade-up">
			<div class="gallery__sizer"></div>
			<div class="gallery__gutter"></div>

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/vitor-pinto-2/img-1.jpg">
				<img src="img/gallery/vitor-pinto-2/thumb-1-alt.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/ana-tavares/img-1.jpg">
				<img src="img/gallery/ana-tavares/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/hanna-busing/img-2.jpg">
				<img src="img/gallery/hanna-busing/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!--	./1 -->

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou-2/img-4.jpg">
				<img src="img/gallery/minnie-zhou-2/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto-3/img-1.jpg" alt="">
				<img src="img/gallery/vitor-pinto-3/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/douglas-j-s-moreira/img-1.jpg">
				<img src="img/gallery/douglas-j-s-moreira/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./2 -->

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/ana-tavares/img-2.jpg">
				<img src="img/gallery/ana-tavares/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/douglas-j-s-moreira/img-2.jpg">
				<img src="img/gallery/douglas-j-s-moreira/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/hanna-busing/img-3.jpg">
				<img src="img/gallery/hanna-busing/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./3 -->

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/kendra-allen-2/img-2.jpg">
				<img src="img/gallery/kendra-allen-2/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/patricia-prudente/img-1.jpg">
				<img src="img/gallery/patricia-prudente/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou/img-1.jpg">
				<img src="img/gallery/minnie-zhou/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./4 -->

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/yuri-tasso/img-3.jpg">
				<img src="img/gallery/yuri-tasso/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto-3/img-2.jpg">
				<img src="img/gallery/vitor-pinto-3/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/ana-tavares/img-3.jpg">
				<img src="img/gallery/ana-tavares/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./5 -->

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/kendra-allen/img-6.jpg">
				<img src="img/gallery/kendra-allen/thumb-6.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/kendra-allen/img-1.jpg">
				<img src="img/gallery/kendra-allen/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou-2/img-1.jpg">
				<img src="img/gallery/minnie-zhou-2/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./6 -->

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/ana-tavares/img-4.jpg">
				<img src="img/gallery/ana-tavares/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto-3/img-3.jpg">
				<img src="img/gallery/vitor-pinto-3/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou/img-5.jpg">
				<img src="img/gallery/minnie-zhou/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./7 -->

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/patricia-prudente/img-4.jpg">
				<img src="img/gallery/patricia-prudente/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/yuri-tasso/img-1.jpg">
				<img src="img/gallery/yuri-tasso/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/kendra-allen/img-3.jpg">
				<img src="img/gallery/kendra-allen/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./8 -->

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/kendra-allen-2/img-3.jpg">
				<img src="img/gallery/kendra-allen-2/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/patricia-prudente/img-2.jpg">
				<img src="img/gallery/patricia-prudente/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/ana-tavares/img-5.jpg">
				<img src="img/gallery/ana-tavares/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./9 -->

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/vitor-pinto-2/img-3.jpg">
				<img src="img/gallery/vitor-pinto-2/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto/img-1.jpg">
				<img src="img/gallery/vitor-pinto/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto-3/img-4.jpg">
				<img src="img/gallery/vitor-pinto-3/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./10 -->

			<!--	l-p-p -->
			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/yuri-tasso/img-2.jpg">
				<img src="img/gallery/yuri-tasso/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/kendra-allen-2/img-4.jpg">
				<img src="img/gallery/kendra-allen-2/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/hanna-busing/img-4.jpg">
				<img src="img/gallery/hanna-busing/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./11 -->

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/ana-tavares/img-6.jpg">
				<img src="img/gallery/ana-tavares/thumb-6.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto-3/img-5.jpg">
				<img src="img/gallery/vitor-pinto-3/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou/img-2.jpg">
				<img src="img/gallery/minnie-zhou/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./12 -->

			<!-- l-p-p -->
			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/kendra-allen/img-4.jpg">
				<img src="img/gallery/kendra-allen/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/douglas-j-s-moreira/img-3.jpg">
				<img src="img/gallery/douglas-j-s-moreira/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou-2/img-5.jpg">
				<img src="img/gallery/minnie-zhou-2/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./13 -->

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/vitor-pinto-2/img-4.jpg">
				<img src="img/gallery/vitor-pinto-2/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto-3/img-6.jpg">
				<img src="img/gallery/vitor-pinto-3/thumb-6.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto/img-2.jpg">
				<img src="img/gallery/vitor-pinto/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./14 -->

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/douglas-j-s-moreira/img-4.jpg">
				<img src="img/gallery/douglas-j-s-moreira/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/kendra-allen/img-7.jpg">
				<img src="img/gallery/kendra-allen/thumb-7.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/kendra-allen-2/img-5.jpg">
				<img src="img/gallery/kendra-allen-2/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./15 -->

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/patricia-prudente/img-5.jpg">
				<img src="img/gallery/patricia-prudente/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto/img-3.jpg">
				<img src="img/gallery/vitor-pinto/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto-3/img-7.jpg">
				<img src="img/gallery/vitor-pinto-3/thumb-7.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./16 -->

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/yuri-tasso/img-4.jpg">
				<img src="img/gallery/yuri-tasso/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/hanna-busing/img-1.jpg">
				<img src="img/gallery/hanna-busing/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/kendra-allen/img-2.jpg">
				<img src="img/gallery/kendra-allen/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./17 -->

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/kendra-allen-2/img-6.jpg">
				<img src="img/gallery/kendra-allen-2/thumb-6.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou/img-3.jpg">
				<img src="img/gallery/minnie-zhou/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou-2/img-2.jpg">
				<img src="img/gallery/minnie-zhou-2/thumb-2.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./18 -->

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/kendra-allen-2/img-1.jpg">
				<img src="img/gallery/kendra-allen-2/thumb-1.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou/img-4.jpg">
				<img src="img/gallery/minnie-zhou/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/patricia-prudente/img-3.jpg">
				<img src="img/gallery/patricia-prudente/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./19 -->

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto/img-4.jpg">
				<img src="img/gallery/vitor-pinto/thumb-4.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/yuri-tasso/img-5.jpg">
				<img src="img/gallery/yuri-tasso/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/kendra-allen/img-5.jpg">
				<img src="img/gallery/kendra-allen/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./20 -->

			<div class="gallery__item baby" data-category="baby" data-src="img/gallery/minnie-zhou-2/img-3.jpg">
				<img src="img/gallery/minnie-zhou-2/thumb-3.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item birthday" data-category="birthday" data-src="img/gallery/patricia-prudente/img-6.jpg">
				<img src="img/gallery/patricia-prudente/thumb-6.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>

			<div class="gallery__item pre-nup" data-category="pre-nup" data-src="img/gallery/vitor-pinto/img-5.jpg">
				<img src="img/gallery/vitor-pinto/thumb-5.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./21 -->

			<div class="gallery__item wedding" data-category="wedding" data-src="img/gallery/kendra-allen/img-8.jpg">
				<img src="img/gallery/kendra-allen/thumb-8.jpg" alt="Photo from Unsplash.com">
				<div class="gallery__overlay"></div>
			</div>
			<!-- ./22 -->

		</div> <!-- ./gallery -->
	</div> <!-- ./container -->


	<!-- include footer -->
	<?php include('include-footer.php'); ?>


	<!-- navbar/footer active state -->
	<script>
		$(document).ready(function() {
			$('.navbar__link:eq(3)').addClass('is-active');
			$('.footer__nav-link:eq(4)').addClass('is-active');
		});

	</script>

</body>

</html>
