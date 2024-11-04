<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController; // Perbaiki nama controller

Route::get('/', function () {
    return view('welcome'); // Halaman beranda
});

// Rute ke halaman "Thank You"
Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

// Rute ke halaman "Shop"
Route::get('/shop', function () {
    return view('shop');
});

// Rute ke halaman "Contact"
Route::get('/contact', function () {
    return view('contact');
});

// Rute ke halaman "Service"
Route::get('/service', function () {
    return view('service');
});

// Rute ke halaman "Checkout" menggunakan CheckoutController
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
// Rute ke halaman "Cart"
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Rute ke halaman "Blog"
Route::get('/blog', function () {
    return view('blog');
});

// Rute ke halaman "About"
Route::get('/about', function () {
    return view('about');
});

// Rute ke halaman "Index"
Route::get('/index', function () {
    return view('index');
});

// Rute pencarian
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Rute untuk wishlist
Route::post('/wishlist/add', [WishlistController::class, 'add']);
Route::post('/wishlist/remove', [WishlistController::class, 'remove']);
