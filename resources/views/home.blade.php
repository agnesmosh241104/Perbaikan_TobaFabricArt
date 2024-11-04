<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                {{-- <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                </li> --}}
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('profile') }}"><img src="{{ asset('images/user.svg') }}" alt="User"></a>
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
<div class="hero bg-toba-pattern py-5 text-center text-white">
    <div class="container">
        <h1 class="display-4 mb-3">Keindahan Toba yang Tak Tertandingi</h1>
        <p class="lead">Nikmati keunikan dan kekayaan budaya Batak Toba yang dituangkan dalam setiap karya seni kami. Setiap produk memiliki cerita, makna, dan keindahan yang menghubungkan Anda dengan tradisi kami.</p>
        <p><a href="shop" class="btn btn-outline-light mt-3">Jelajahi Koleksi Kami</a></p>
    </div>
</div>
<!-- End Hero Section -->

<div class="container mt-5">
    <h2 class="mb-4 text-center">Mengapa Budaya Batak Toba Istimewa</h2>
    <p class="text-center mb-5">Budaya Batak Toba memiliki keunikan yang tidak dapat ditemukan di tempat lain. Mulai dari kain tenun yang kaya warna hingga kerajinan tangan yang penuh dengan simbol-simbol tradisional, setiap produk mencerminkan keindahan, keahlian, dan cerita turun-temurun yang menjadi bagian dari warisan budaya kami.</p>
    
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="images/ulos.jpg" class="card-img-top" alt="Ulos Tradisional">
                <div class="card-body">
                    <h5 class="card-title">Ulos Sibolang</h5>
                    <p class="card-text">Kain ulos yang ditenun dengan teknik tradisional dan memiliki simbol kebanggaan serta kekuatan dalam budaya Batak Toba.</p>
                    <p class="card-text"><strong>Harga: Rp120.000</strong></p>
                    <a href="cart" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="images/sortali1.jpg" class="card-img-top" alt="Sortali">
                <div class="card-body">
                    <h5 class="card-title">Sortali</h5>
                    <p class="card-text">Ikatan kepala yang melambangkan status sosial dan kebanggaan etnis. Dipakai pada upacara dan perayaan adat.</p>
                    <p class="card-text"><strong>Harga: Rp135.000</strong></p>
                    <a href="cart" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="images/topi.jpg" class="card-img-top" alt="Topi Batak">
                <div class="card-body">
                    <h5 class="card-title">Topi Batak</h5>
                    <p class="card-text">Topi khas Batak yang dibuat dengan detail tradisional dan sering dikenakan pada acara-acara adat.</p>
                    <p class="card-text"><strong>Harga: Rp75.000</strong></p>
                    <a href="cart" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Product Highlights Section -->
<div class="product-highlights py-5">
    <div class="container">
        <h2 class="mb-5 text-center">Produk Pilihan Toba Fabric Art</h2>
        <div class="row">

            <!-- Highlight 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-400">
                    <img src="images/sadum.jpg" class="card-img-top" alt="Ulos Sibolang">
                    <div class="card-body">
                        <h5 class="card-title">Ulos Sadum</h5>
                        <p class="card-text">Ulos Sadum sangat identik dengan warna dasar merah serta mempunya motif bunga dan gorga yang sangat ramai. Ciri khas dari ulos sadum selalu memiliki frame atau bingkai bergaris gelap di setiap kedua sisinya.

							Ulos Sadum dimaknai oleh suku Batak sebagai simbol suka cita sebagai pertanda motifasi penyemangat dalam suatu keluarga agar tetap bersuka cita melakukan segala aktifitas sehari-hari.</p>
                    </div>
                </div>
            </div>

            <!-- Highlight 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="images/Gondangbatak.jpg" class="card-img-top" alt="Gondang Batak">
                    <div class="card-body">
                        <h5 class="card-title">Gondang Batak</h5>
                        <p class="card-text">Alunan musik tradisional Batak yang menggugah semangat dan jiwa. Saksikan keindahan irama Gondang yang digunakan dalam berbagai acara adat.</p>
                    </div>
                </div>
            </div>

            <!-- Highlight 3 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="images/Rumah bolon.jpg" class="card-img-top" alt="Rumah bolon">
                    <div class="card-body">
                        <h5 class="card-title">Rumah bolon </h5>
                        <p class="card-text">Rumah Bolon merupakan salah satu jenis rumah tradisional dari suku Batak. Bangunan ini juga sering disebut sebagai rumah gorga
							Rumah Bolon memiliki keistimewaan ukuran bangunan yang cukup besar dan kerap kali dijadikan sebagai ajang pamer antar masyarakat Batak.
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Highlights Section -->

<!-- Start Testimonials Section -->
<div class="testimonials bg-dark text-white py-5">
    <div class="container">
        <h2 class="text-center mb-5">Testimoni dari Pelanggan Kami</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <blockquote class="blockquote">
                    <p>"Produk dari Toba Fabric Art sungguh indah. Kualitas dan detailnya mencerminkan budaya yang kaya dan mempesona."</p>
                    <footer class="blockquote-footer text-white">Sinta, Jakarta</footer>
                </blockquote>
            </div>
            <div class="col-md-4 mb-4">
                <blockquote class="blockquote">
                    <p>"Setiap produk memiliki cerita yang begitu mendalam. Membeli dari sini seperti memiliki sepotong keindahan Toba di rumah."</p>
                    <footer class="blockquote-footer text-white">Rony, Medan</footer>
                </blockquote>
            </div>
            <div class="col-md-4 mb-4">
                <blockquote class="blockquote">
                    <p>"Saya sangat terkesan dengan ulos yang saya beli. Kainnya lembut dan motifnya penuh makna."</p>
                    <footer class="blockquote-footer text-white">Dewi, Surabaya</footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Section -->

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
