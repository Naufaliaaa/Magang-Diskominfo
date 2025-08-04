<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/deepguru', function () {
    return view('FP/Detail-Halaman/deepguru');
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
})->name('login');

Route::post('/login', function (Request $request) {
    $emailPercobaan = 'smpn1cimaung@gmail.com';
    $passwordPercobaan = 'admin1234';

    if ($request->email === $emailPercobaan && $request->password === $passwordPercobaan) {
        return redirect('/dbartikel');
    }

    return redirect()->back()->with('error', 'Email atau Password salah!');
})->name('login.process');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // redirect ke halaman beranda
})->name('logout');

Route::get('/dbartikel', function () {
    return view('BP/dbartikel');
});

Route::get('/dbinformasi', function () {
    return view('BP/dbinformasi');
});

Route::get('/guru', function () {
    return view('BP/guru');
});

Route::get('/osis', function () {
    return view('BP/osis');
});

Route::get('/organisasi', function () {
    return view('BP/organisasi');
});







//Halaman Tambah
Route::get('/tambah-artikel', function () {
    return view('BP/Plus/tambah-artikel');
})->name('tambah-artikel');

Route::get('/tambah-informasi', function () {
    return view('BP/Plus/tambah-informasi');
})->name('tambah-informasi');

Route::get('/tambah-guru', function () {
    return view('BP/Plus/tambah-guru');
})->name('tambah-guru');

Route::get('/tambah-osis', function () {
    return view('BP/Plus/tambah-osis');
})->name('tambah-osis');

Route::get('/tambah-organisasi', function () {
    return view('BP/Plus/tambah-organisasi');
})->name('tambah-organisasi');







//Kebijakan/Layanan
Route::get('/kebijakan', function () {
    return view('Layanan/kebijakan');
});

Route::get('/pengaduan', function () {
    return view('Layanan/pengaduan');
});
