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
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Toba Fabric Art </title>
	</head>
	<body>

		<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Toba Fabric Art navigation bar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Welcome to Toba Fabric Art<span></span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsToba" aria-controls="navbarsToba" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 

        <div class="collapse navbar-collapse" id="navbarsToba">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('home') }}">Home</a>
                </li>
                <li class="nav-item {{ request()->is('shop') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                </li>
                <li class="nav-item {{ request()->is('aboutus') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('aboutus') }}">About us</a>
                </li>
                <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="{{ asset('images/user.svg') }}" alt="User"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('cart') }}"><img src="{{ asset('images/cart.svg') }}" alt="Cart"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
		<!-- End Header/Navigation -->

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="intro-excerpt">
					<h1 class="display-4 mb-3">About Us</h1>
                </div>
            </div>
            <div class="col-lg-7">
                {{-- <div class="hero-img-wrap">
                    <img src="images/toba.jpg" alt="Keindahan Toba" class="img-fluid">
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start About Us Section -->
<div class="about-us-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 mb-4">
                <h2 class="section-title">Sejarah Toba Fabric Art</h2>
                <p>Toba Fabric Art merupakan representasi kekayaan budaya Batak Toba yang telah ada sejak lama. Dengan keahlian dan tradisi yang diwariskan dari nenek moyang, kami menciptakan berbagai produk dari kain dan kerajinan tangan yang indah, mencerminkan keunikan dan nilai-nilai budaya lokal.</p>
                
                <h3 class="section-title">Tujuan Kami</h3>
                <p>Tujuan kami adalah untuk melestarikan dan mempromosikan budaya Batak Toba melalui karya-karya seni yang tidak hanya menarik tetapi juga fungsional. Kami percaya bahwa setiap produk yang kami buat tidak hanya menjadi alat, tetapi juga sebuah cerita yang menghubungkan penggunanya dengan akar budaya kami.</p>
                
                <h3 class="section-title">Awal Karir</h3>
                <p>Perjalanan kami dimulai dengan semangat untuk mengenalkan kerajinan tangan Batak Toba kepada dunia. Dengan dukungan masyarakat lokal, kami berkomitmen untuk mengembangkan keterampilan pengrajin dan menciptakan lapangan kerja, sehingga meningkatkan ekonomi lokal dan menjaga tradisi.</p>
                
                <h3 class="section-title">Distribusi Produk</h3>
                <p>Kami menjalin kemitraan dengan berbagai distributor dan pengecer lokal, serta menjelajahi platform e-commerce untuk menjangkau pelanggan yang lebih luas. Produk kami mencakup kain tenun, kerajinan tangan, dan aksesori yang terbuat dengan cinta dan perhatian terhadap detail. Setiap produk adalah hasil karya seni yang unik dan memiliki makna tersendiri.</p>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="images/budaya.jpg" alt="Budaya" class="img-fluid" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Us Section -->
		<!-- End Why Choose Us Section -->

	<!-- Start Team Section -->
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
                <img src="images/Bronson.png" class="img-fluid mb-4" alt="Bronson Siallagan">
                <h3><a href="#"><span class="">Bronson</span> Siallagan</a></h3>
                <span class="d-block position mb-3">CEO & Founder</span>
                <p>Bronson adalah pendiri dan pemimpin tim kami. Dengan pengalaman bertahun-tahun di industri, dia memiliki visi yang jelas untuk membawa produk Batak Toba ke pasar internasional.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/Agnes.png" class="img-fluid mb-4" alt="Agnes Harefa">
                <h3><a href="#"><span class="">Agnes</span> Harefa</a></h3>
                <span class="d-block position mb-3">Chief Operating Officer</span>
                <p>Agnes mengawasi semua operasi harian dan memastikan setiap produk yang kami hasilkan berkualitas tinggi dan sesuai dengan standar kami.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/Rosari.png" class="img-fluid mb-4" alt="Rosari Simanjuntak">
                <h3><a href="#"><span class="">Rosari</span> Simanjuntak</a></h3>
                <span class="d-block position mb-3">Marketing Director</span>
                <p>Rosari bertanggung jawab untuk strategi pemasaran dan promosi produk kami, menjalin hubungan dengan mitra dan pelanggan di seluruh dunia.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/Difya.png" class="img-fluid mb-4" alt="Difya Ambarita">
                <h3><a href="#"><span class="">Difya</span> Ambarita</a></h3>
                <span class="d-block position mb-3">Product Designer</span>
                <p>Difya adalah desainer produk kami yang berfokus pada inovasi dan kreativitas, menciptakan desain yang tidak hanya estetis tetapi juga fungsional.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 4 -->

        </div>
    </div>
</div>
<!-- End Team Section -->
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		

		<footer class="footer-section">
			<div class="container relative">
		
				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Toba Fabric Art<span>.</span></a></div>
		
						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>
		
					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>
						</div>
					</div>
		
				</div>
		
				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">TobaFabricArt</a>
						</div>
		
						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
		
					</div>
				</div>
		
			</div>
		</footer>
							
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
