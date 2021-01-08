<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include-head.php'); ?>

	<title>A r t i N e | Baby Moreira's Photoshoot</title>
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

	<div class="container">
		<a href="page-blog.php" class="btn-outline btn-outline--light btn--large my-2"><i class="fa fa-long-arrow-left"></i> More Blogs</a>

		<div class="fotorama mx-auto">
			<a href="img/gallery/douglas-j-s-moreira/img-1.jpg" class="lazy">
				<img data-src="img/gallery/douglas-j-s-moreira/thumb-1.jpg" alt="Photo from Douglas Moreira on unsplash.com" class="lazy">
			</a>
			<a href="img/gallery/douglas-j-s-moreira/img-1.jpg" class="lazy">
				<img data-src="img/gallery/douglas-j-s-moreira/thumb-1.jpg" alt="Photo from Douglas Moreira on unsplash.com" class="lazy">
			</a>
			<a href="img/gallery/douglas-j-s-moreira/img-2.jpg" class="lazy">
				<img data-src="img/gallery/douglas-j-s-moreira/thumb-2.jpg" alt="Photo from Douglas Moreira on unsplash.com" class="lazy">
			</a>
			<a href="img/gallery/douglas-j-s-moreira/img-3.jpg" class="lazy">
				<img data-src="img/gallery/douglas-j-s-moreira/thumb-3.jpg" alt="Photo from Douglas Moreira on unsplash.com" class="lazy">
			</a>
			<a href="img/gallery/douglas-j-s-moreira/img-4.jpg" class="lazy">
				<img data-src="img/gallery/douglas-j-s-moreira/thumb-4.jpg" alt="Photo from Douglas Moreira on unsplash.com" class="lazy">
			</a>
		</div>

		<div class="blog__info">
			<span class="block">Baby Moreira's Photoshoot</span>

			<span class="block">Jakarta, Indonesia</span>

			<span class="block">June 02, 2020</span>
		</div>

		<div class="p-1">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi impedit aspernatur nostrum inventore facere beatae aperiam ullam tempore omnis, praesentium odio quaerat numquam autem accusamus ipsam ab velit nisi repudiandae.</p>
		</div>

		<div class="blog__nav">
			<a href="page-blog11.php" class="btn-outline btn-outline--dark btn--large blog__nav-link"><i class="fa fa-long-arrow-left"></i> William and Stelle's Pre-Nuptial</a>

			<a href="page-blog1.php" class="btn-outline btn-outline--dark btn--large blog__nav-link">Jose and Maria's Wedding <i class="fa fa-long-arrow-right"></i></a>
		</div>
	</div>


	<?php include('include-footer.php'); ?>

	<!-- navbar active state -->
	<script>
		$(document).ready(function() {
			$('.navbar__link:eq(2)').addClass('is-active');
			$('.footer__nav-link:eq(3)').addClass('is-active');
		});

	</script>


</body>

</html>
