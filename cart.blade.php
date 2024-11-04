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
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co</title>
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
        <div class="container">
            <!-- <a class="navbar-brand" href="index.html">Furni<span>.</span></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ url('/shop') }}">Shop</a></li>
                    <li><a class="nav-link" href="{{ url('/about') }}">About us</a></li>
                    <li><a class="nav-link" href="{{ url('/contact') }}">Contact us</a></li>
                    <li><a class="nav-link" href="{{ url('/index') }}">H</a></li>

                </ul>

                <!-- Form Pencarian -->
                <form id="searchForm" class="d-flex ms-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari Produk...">
                    <button type="submit" class="btn btn-outline-light ms-2">Cari</button>
                </form

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{asset('vendor/images/user.svg')}}" alt="User Icon"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="{{asset('vendor/images/cart.svg')}}" alt="Cart Icon"></a></li>
                </ul>
            </div>
        </div>
    </nav> 
</nav>
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1></h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div> 
<div class="untree_co-section before-footer-section">
	<div class="container">
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">
					<table class="table">
						<thead>
							<tr>
								<th class="product-thumbnail">Image</th>
								<th class="product-name">Product</th>
								<th class="product-price">Price</th>
								<th class="product-quantity">Quantity</th>
								<th class="product-total">Total</th>
								<th class="product-remove">Remove</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="product-thumbnail">
								<img src="{{url('vendor/images/tukkot.jpeg')}}" class="img-fluid" alt="Cross Icon">
								</td>
								<td class="product-name">
									<h2 class="h5 text-black">Product 1</h2>
								</td>
								<td>500.000</td>
								<td>
									<div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
										<div class="input-group-prepend">
											<button class="btn btn-outline-black decrease" type="button">&minus;</button>
										</div>
										<input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
										<div class="input-group-append">
											<button class="btn btn-outline-black increase" type="button">&plus;</button>
										</div>
									</div> 
								</td>
								<td>400.000</td>
								<td><a href="#" class="btn btn-black btn-sm">X</a></td>
							</tr>

							<tr>
								<td class="product-thumbnail">
								<img src="{{url('vendor/images/sortali.jpg')}}" class="img-fluid" alt="Cross Icon">
								</td>
								<td class="product-name">
									<h2 class="h5 text-black">Product2</h2>
								</td>
								<td>100.000</td>
								<td>
									<div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
										<div class="input-group-prepend">
											<button class="btn btn-outline-black decrease" type="button">&minus;</button>
										</div>
										<input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
										<div class="input-group-append">
											<button class="btn btn-outline-black increase" type="button">&plus;</button>
										</div>
									</div>

								</td>
								<td>400.000</td>
								<td><a href="#" class="btn btn-black btn-sm">X</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
						<button class="btn btn-black btn-sm btn-block">Update Cart</button>
					</div>
					<div class="col-md-6">
						<button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label class="text-black h4" for="coupon">Coupon</label>
						<p>Enter your coupon code if you have one.</p>
					</div>
					<div class="col-md-8 mb-3 mb-md-0">
						<input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
					</div>
					<div class="col-md-4">
						<button class="btn btn-black">Apply Coupon</button>
					</div>
				</div>
			</div>
			<div class="col-md-6 pl-5">
				<div class="row justify-content-end">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12 text-right border-bottom mb-5">
								<h3 class="text-black h4 text-uppercase">Cart Totals</h3>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6">
								<span class="text-black">Subtotal</span>
							</div>
							<div class="col-md-6 text-right">
								<strong class="text-black">3.000.000</strong>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-md-6">
								<span class="text-black">Total</span>
							</div>
							<div class="col-md-6 text-right">
								<strong class="text-black">3.000.000</strong>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Start Footer Section -->
<footer class="footer-section">
	<div class="container relative">

		<div class="sofa-img">
		<img src="{{url('vendor/images/tukkot.jpeg')}}" class="img-fluid" alt="Cross Icon">
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="subscription-form">
					<h3 class="d-flex align-items-center"><span class="me-1"> <img src="{{url('vendor/images/cross.svg')}}" class="img-fluid" alt="Cross Icon"><span>Subscribe to Newsletter</span></h3>

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
		</div>

		</p>
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
