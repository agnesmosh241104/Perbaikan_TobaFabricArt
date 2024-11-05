<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewAuthorManager;

Route::get('/home', function () {
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/cart', function () {
    return view('cart'); 
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/login', [NewAuthorManager::class , 'login'])->name('login');
Route::post('/login', [NewAuthorManager::class , 'loginPost'])->name('login.post');

Route::get('/registrasi', [NewAuthorManager::class , 'registrasi'])->name('registrasi');
Route::post('/registrasi', [NewAuthorManager::class , 'registrasiPost'])->name('registrasi.post');
