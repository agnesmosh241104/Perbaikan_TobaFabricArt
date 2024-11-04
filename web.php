<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome'); // Change 'welcome' if you have a different homepage file
});

// Route to the "Thank You" page
Route::get('/thankyou', function () {
    return view('thankyou');
});

// Route to the "Shop" page
Route::get('/shop', function () {
    return view('shop');
});

// Route to the "Contact" page
Route::get('/contact', function () {
    return view('contact');
});

// Route to the "Contact" page
Route::get('/service', function () {
    return view('service');
});


// Route to the "Checkout" page (make sure the filename matches exactly)
Route::get('/checkout', function () {
    return view('chekout');
});

// Route to the "Cart" page
Route::get('/cart', function () {
    return view('cart');
})->name('cart');


// Route to the "Blog" page
Route::get('/blog', function () {
    return view('blog');
});

// Route to the "About" page
Route::get('/about', function () {
    return view('about');
});

Route::get('/index', function () {
    return view('index');
});