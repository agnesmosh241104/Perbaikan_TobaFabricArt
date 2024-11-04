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
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co</title>
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ url('/shop') }}">Shop</a></li>
                    <li><a class="nav-link" href="{{ url('/about') }}">About us</a></li>
                    <li><a class="nav-link" href="{{ url('/contact') }}">Contact us</a></li>
                </ul>

                <!-- Form Pencarian -->
                <form id="searchForm" class="d-flex ms-3" method="GET" action="{{ url('/search') }}">
                    <!-- Pencarian Berdasarkan Kategori -->
                    <select id="category" name="category" class="form-select me-2">
                        <option value="">Kategori</option>
                        <option value="tenun">Tenun</option>
                        <option value="ulos">Ulos</option>
                        <option value="songket">Songket</option>
                        <option value="batik">Batik</option>
                    </select>

                  

                    <!-- Pencarian Berdasarkan Kata Kunci -->
                    <input type="text" id="keyword" name="keyword" class="form-control me-2" placeholder="Kata Kunci (misalnya warna, motif)">

                    <!-- Pencarian Berdasarkan Harga -->
                    <input type="number" id="price_min" name="price_min" class="form-control me-2" placeholder="Harga Minimum">
                    <input type="number" id="price_max" name="price_max" class="form-control me-2" placeholder="Harga Maksimum">

                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="{{ asset('vendor/images/user.svg') }}" alt="User Icon"></a></li>
                    <!-- Updated Cart Link -->
                    <li><a class="nav-link" href="{{ url('/cart') }}"><img src="{{ asset('vendor/images/cart.svg') }}" alt="Cart Icon"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->

    <!-- End Hero Section -->

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{url('vendor/images/gantungan.jpeg')}}" class="img-fluid product-thumbnail" alt="Gantungan">
                        <h3 class="product-title">Tukkot</h3>
                        <strong class="product-price">$50.00</strong>
                        <span class="icon-cross">
                            <img src="{{url('vendor/images/cross.svg')}}" class="img-fluid" alt="Cross Icon">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{url('vendor/images/hoda-hoda.webp')}}" class="img-fluid product-thumbnail" alt="Hoda Hoda">
                        <h3 class="product-title">Tukkot</h3>
                        <strong class="product-price">500.000</strong>
                        <span class="icon-cross">
                            <img src="{{url('vendor/images/cross.svg')}}" class="img-fluid" alt="Cross Icon">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{url('vendor/images/lak-lak.jpeg')}}" class="img-fluid product-thumbnail" alt="Buku Lak-lak">
                        <h3 class="product-title">Buku Lak-lak</h3>
                        <strong class="product-price">430.000</strong>
                        <span class="icon-cross">
                            <img src="{{url('vendor/images/cross.svg')}}" class="img-fluid" alt="Cross Icon">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

                <!-- Start Column 5 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{url('vendor/images/jabu.jpeg')}}" class="img-fluid product-thumbnail" alt="Jabu">
                        <h3 class="product-title">Tukkot</h3>
                        <strong class="product-price">500.000</strong>
                        <span class="icon-cross">
                            <img src="{{url('vendor/images/cross.svg')}}" class="img-fluid" alt="Cross Icon">
                        </span>
                    </a>
                </div>
                <!-- End Column 5 -->

                <!-- Start Column 6 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{url('vendor/images/tukkot.jpeg')}}" class="img-fluid product-thumbnail" alt="Patung Batak">
                        <h3 class="product-title">Patung Batak</h3>
                        <strong class="product-price">570.000</strong>
                        <span class="icon-cross">
                            <img src="{{url('vendor/images/cross.svg')}}" class="img-fluid" alt="Cross Icon">
                        </span>
                    </a>
                </div>
                <!-- End Column 6 -->

                <!-- Start Column 7 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{url('vendor/images/tukkot1.jpeg')}}" class="img-fluid product-thumbnail" alt="Patung">
                        <h3 class="product-title">Patung</h3>
                        <strong class="product-price">300.000</strong>
                        <span class="icon-cross">
                            <img src="{{url('vendor/images/cross.svg')}}" class="img-fluid" alt="Cross Icon">
                        </span>
                    </a>
                </div>
                <!-- End Column 7 -->

                <!-- Start Column 8 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{url('vendor/images/patung.jpeg')}}" class="img-fluid product-thumbnail" alt="Patung">
                        <h3 class="product-title">Patung</h3>
                        <strong class="product-price">500</strong>
                        <span class="icon-cross">
                            <img src="{{url('vendor/images/cross.svg')}}" class="img-fluid" alt="Cross Icon">
                        </span>
                    </a>
                </div>
                <!-- End Column 8 -->

            </div>
        </div>
    </div>

    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-8">
                    <div class="subscription-form">
                        <h3 class="d-flex align-items-center"><span class="me-1"><img src="{{url('vendor/images/envelope-outline.svg')}}" alt="Envelope Icon"></span> Subscribe to our Newsletter</h3>
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
                </div>
                <div class="col-lg-4">
                    <div class="footer-logo-wrap">
                        <!-- <a href="#" class="footer-logo">Furni<span>.</span></a> -->
                    </div>
                    <p>Your description here.</p>
                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Bootstrap JS -->
    <script src="{{asset('vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/js/tiny-slider.js')}}"></script>
    <script src="{{asset('vendor/js/main.js')}}"></script>
</body>

</html>