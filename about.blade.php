<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="{{asset('vendor/css/tiny-slider.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/css/style.css')}}" rel="stylesheet">
	<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

	<div class="container">
		<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsFurni">
			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Home</a>
				</li>
				<!-- <li><a class="nav-link" href="shop.blade.php">Shop</a></li>
                <li><a class="nav-link" href="about.html">About us</a></li>
                <li><a class="nav-link" href="services.html">Services</a></li>
                <li><a class="nav-link" href="blog.html">Blog</a></li>
                <li><a class="nav-link" href="contact.html">Contact us</a></li> -->
				<li><a class="nav-link" href="{{ url('/shop') }}">Shop</a></li>
				<li><a class="nav-link" href="{{ url('/about') }}">About us</a></li>
				<li><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
				<li><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
				<li><a class="nav-link" href="{{ url('/contact') }}">Contact us</a></li>

			</ul>

			<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
				<li><a class="nav-link" href="#"><img src="{{ asset('vendor/images/user.svg') }}"></a></li>
				<li><a class="nav-link" href="{{ route('cart') }}"><img src="{{ asset('vendor/images/cart.svg') }}"></a></li>
			</ul>


</nav>
<!-- End Header/Navigation -->

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">

					<p class="mb-4">Welcome Produk Batak Toba</p>
					<!-- <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p> -->
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="{{url('vendor/images/toba.jpg')}}" alt="Image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->



<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6">
				<h2 class="section-title">Mari Lestarikan Budayamu</h2>
				<p>Batak Is The Best</p>
				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{url('vendor/images/truck.svg"')}} alt=" Image" class="imf-fluid">
							</div>
							<h3>Fast &amp; Free Shipping</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{url('vendor/images/bag.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Easy to Shop</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{url('vendor/images/support.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>24/7 Support</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{url('vendor/images/return.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Hassle Free Returns</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="{{url('vendor/images/siallagan.jpeg')}}" alt="Image" style="width: 100%; height: auto;" class="img-fluid">

				</div>
			</div>

		</div>
	</div>
</div>
<div class="untree_co-section">
	<div class="container">

		<div class="row mb-5">
			<div class="col-lg-5 mx-auto text-center">
				<h2 class="section-title">Our Team</h2>
			</div>
		</div>

		<div class="row">

			<!-- Start Column 1 -->
			<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
				<img src="{{url('vendor/images/bronson.png')}}" class="img-fluid mb-5">
				<h3 clas><a href="#"><span class="">Bronson</span>Siallagan</a></h3>
				<span class="d-block position mb-4">CEO, Founder, Atty.</span>
				<p>Separated they live in.
					Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
			</div>
			<!-- End Column 1 -->

			<!-- Start Column 2 -->
			<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
				<img src="{{url('vendor/images/person_2.jpg')}}" class="img-fluid mb-5">

				<h3 clas><a href="#"><span class="">Agnes</span>Harefa</a></h3>
				<span class="d-block position mb-4">CEO, Founder, Atty.</span>
				<p>Separated they live in.
					Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

			</div>
			<!-- End Column 2 -->

			<!-- Start Column 3 -->
			<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
				<img src="{{url('vendor/images/person_3.jpg')}}" class="img-fluid mb-5">
				<h3 clas><a href="#"><span class="">Rosari</span> Simanjuntak</a></h3>
				<span class="d-block position mb-4">CEO, Founder, Atty.</span>
				<p>Separated they live in.
					Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
			</div>
			<!-- End Column 3 -->

			<!-- Start Column 4 -->
			<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
				<img src="{{url('vendor/images/person_4.jpg"')}} class=" img-fluid mb-5">

				<h3 clas><a href="#"><span class="">Difya</span>Ambarita</a></h3>
				<span class="d-block position mb-4">CEO, Founder, Atty.</span>
				<p>Separated they live in.
					Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>



			</div>
		</div>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
	</body>

</html>