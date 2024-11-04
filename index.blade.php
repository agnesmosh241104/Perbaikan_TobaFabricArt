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
    <link href="{{ asset('vendor/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/style.css') }}" rel="stylesheet">
    <title>BatakHeritage - Shop</title>
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ url('/shop') }}">Shop</a></li>
                    <li><a class="nav-link" href="{{ url('/about') }}">About us</a></li>
                    <li><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
                    <li><a class="nav-link" href="{{ url('/contact') }}">Contact us</a></li>
                </ul>

                <!-- Form Pencarian -->
                <form id="searchForm" class="d-flex ms-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari Produk...">
                    <button type="submit" class="btn btn-outline-light ms-2">Cari</button>
                </form>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="{{ asset('vendor/images/user.svg') }}" alt="User Icon"></a></li>
                    <li><a class="nav-link" href="{{ url('/cart') }}"><img src="{{ asset('vendor/images/cart.svg') }}" alt="Cart Icon"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1><span class="d-block">BatakHeritage</span></h1>
                        <p><a href="{{ url('/shop') }}" class="btn btn-secondary me-2">Ayok Berbelanja</a>
                            <a href="#" class="btn btn-white-outline">Nikmati Belanja mu</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ url('vendor/images/toba.jpg') }}" class="img-fluid" alt="Cross Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">This product is specially designed to reflect the beauty and richness of Batak Toba culture. With meticulous attention to detail, we ensure that each item is not only stunning but also functional. Experience the uniqueness and authenticity of Batak Toba in every product we offer, ready to enhance your experience.</p>
                    <p><a href="{{ url('/shop') }}" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ url('/cart') }}">
                        <img src="{{ url('vendor/images/topi.jpg') }}" class="img-fluid" alt="Cross Icon">
                        <h3 class="product-title">Sortali</h3>
                        <strong class="product-price">50.000</strong>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ url('/cart') }}">
                        <img src="{{ url('vendor/images/sortali.jpg') }}" class="img-fluid" alt="Cross Icon">
                        <h3 class="product-title">Sor tali</h3>
                        <strong class="product-price">78.000</strong>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ url('/cart') }}">
                        <img src="{{ url('vendor/images/sortali.jpg') }}" class="img-fluid" alt="Cross Icon">
                        <h3 class="product-title">Sortali</h3>
                        <strong class="product-price">50.00</strong>
                    </a>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img src="{{ url('vendor/images/cross.svg') }}" class="img-fluid" alt="Cross Icon"></span> Subscribe to Newsletter</h3>
                    <form action="#" class="row g-3">
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="col-auto">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="footer-logo-wrap mb-4"><a href="#" class="footer-logo">Furni<span>.</span></a>
                        <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>
                    </div>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5>About Us</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#">About us</a></li>
                        <li><a class="text-white" href="#">Services</a></li>
                        <li><a class="text-white" href="#">Blog</a></li>
                        <li><a class="text-white" href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#">Email</a></li>
                        <li><a class="text-white" href="#">Phone</a></li>
                        <li><a class="text-white" href="#">Address</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#">Facebook</a></li>
                        <li><a class="text-white" href="#">Twitter</a></li>
                        <li><a class="text-white" href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                <p>&copy; 2024 BatakHeritage. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('vendor/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/js/main.js') }}"></script>
</body>

</html>
