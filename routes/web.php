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







//Halaman Detail
Route::get('/guru', function () {
    return view('FP/Detail-Halaman/guru');
});

Route::get('/osis-lainnya', function () {
    return view('FP.Detail-Halaman.osis');
})->name('osislainnya');

Route::get('/deepartikel', function () {
    return view('FP.Detail-Halaman.deepartikel');
})->name('deepartikel');

Route::get('/deepinformasi', function () {
    return view('FP.Detail-Halaman.deepinformasi');
})->name('deepinformasi');







//Back Page
Route::get('/login', function () {
    return view('BP/login');
});

Route::get('/admin', function () {
    return view('BP/admin');
});







//Kebijakan/Layanan
Route::get('/kebijakan', function () {
    return view('Layanan/kebijakan');
});

Route::get('/pengaduan', function () {
    return view('Layanan/pengaduan');
});