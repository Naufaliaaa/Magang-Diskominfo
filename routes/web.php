<?php

use Illuminate\Support\Facades\Route;

//Front Page
Route::get('/', function () {
    return view('FP/beranda' , ['title' => 'Beranda']);
});

Route::get('/profile', function () {
    return view('FP/profile', ['title' => 'Profile']);
});

Route::get('/artikel', function () {
    return view('FP/artikel', ['title' => 'Artikel']);
});

Route::get('/informasi', function () {
    return view('FP/informasi', ['title' => 'Irformasi']);
});

Route::get('/kontak', function () {
    return view('FP/kontak', ['title' => 'Kontak']);
});



//Back Page
Route::get('/login', function () {
    return view('BP/login');
});


//Kebijakan/Layanan
Route::get('/kebijakan', function () {
    return view('Layanan/kebijakan');
});

Route::get('/pengaduan', function () {
    return view('Layanan/pengaduan');
});