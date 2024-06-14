<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Masuk & Daftar
// Route::get('/masuk-akun', function () {
//    
// });
// Route::get('/daftar-akun', function () {
//     return view('pages.auth.daftar-akun', [
//         "title" => "Website Komisi | Daftar",
//         "active" => "Daftar Akun",
//     ]);
// });
// Route::get('/beranda', function () {
//     return view('pages.beranda', [
//         "title" => "Website Komisi | Beranda",
//         "active" => "Beranda",
//     ]);
// });

Route::namespace('App\Http\Controllers\Auth')->group(function () {
    Route::get('masuk-akun', 'LoginController@index')->name('auth.masuk.index');
    Route::post('masuk-akun', 'LoginController@login')->name('auth.masuk.login');
    Route::get('daftar-akun', 'RegisterController@index')->name('auth.daftar.index');
    Route::post('daftar-akun', 'RegisterController@register')->name('auth.daftar.register');
});

Route::namespace('App\Http\Controllers\Home')->group(function () {
    Route::get('beranda', 'HomeController@index')->name('beranda.index');
});

Route::get('/testing', function () {
    return view('pages.auth.testing', [
        "title" => "Website Komisi | Testing",
        "active" => "Testing",
    ]);
});


// Beranda 
Route::get('/', function () {
    return view('pages.beranda', [
        "title" => "Website Komisi | Beranda",
        "active" => "Beranda",
    ]);
});



// Berita
Route::get('/berita', function () {
    return view('pages.berita.berita', [
        "title" => "Website Komisi | Berita",
        "active" => "Berita",
    ]);
});

Route::get('/berita-detail', function () {
    return view('pages.berita.berita-detail', [
        "title" => "Website Komisi | Berita",
        "active" => "Berita",
    ]);
});



// Forum Diskusi
Route::get('/forum-diskusi', function () {
    return view('pages.forum-diskusi.forum-diskusi', [
        "title" => "Website Komisi | Tanya Jawab",
        "active" => "Forum Diskusi",
    ]);
});
Route::get('/forum-diskusi-pertanyaan', function () {
    return view('pages.forum-diskusi.forum-diskusi-pertanyaan', [
        "title" => "Website Komisi | Pertanyaan",
        "active" => "Pertanyaan",
    ]);
});

Route::get('/forum-diskusi-ajukan-pertanyaan', function () {
    return view('pages.forum-diskusi.forum-diskusi-ajukan-pertanyaan', [
        "title" => "Website Komisi | Ajukan Pertanyaan",
        "active" => "Ajukan Pertanyaan",
    ]);
});

// Tentang Komisi
Route::get('/tentang-komisi', function () {
    return view('pages.tentang-komisi.tentang-komisi', [
        "title" => "Website Komisi | Tentang Komisi",
        "active" => "Tentang Komisi",
    ]);
});
Route::get('/tentang-kabinet', function () {
    return view('pages.tentang-komisi.tentang-kabinet', [
        "title" => "Website Komisi | Detail Kabinet",
        "active" => "Detail Kabinet",
    ]);
});





// Notifikasi
Route::get('/notifikasi', function () {
    return view('pages.notifikasi.notifikasi', [
        "title" => "Website Komisi | Notifikasi",
        "active" => "Notifikasi",
    ]);
});

// Akun
Route::get('/akun', function () {
    return view('pages.akun.akun-profil', [
        "title" => "Website Komisi | Profil",
        "active" => "Profil",
    ]);
});
// Akun - Kelola Web
Route::get('/kelola-website', function () {
    return view('pages.akun.kelola-web.kelola-web', [
        "title" => "Website Komisi | Kelola Website",
        "active" => "Kelola Website",
    ]);
});
Route::get('/tambah-kabinet', function () {
    return view('pages.akun.kelola-web.kelola-kabinet-tambah', [
        "title" => "Website Komisi | Tambah Kabinet",
        "active" => "Tambah Kabinet",
    ]);
});
Route::get('/kelola-kabinet', function () {
    return view('pages.akun.kelola-web.kelola-kabinet', [
        "title" => "Website Komisi | Kelola Kabinet",
        "active" => "Kelola Kabinet",
    ]);
});
Route::get('/kelola-kabinet-pilih', function () {
    return view('pages.akun.kelola-web.kelola-kabinet-pilih', [
        "title" => "Website Komisi | Kelola Kabinet",
        "active" => "Kelola Kabinet",
    ]);
});
Route::get('/kelola-berita', function () {
    return view('pages.akun.kelola-web.kelola-berita', [
        "title" => "Website Komisi | Kelola Berita",
        "active" => "Kelola Berita",
    ]);
});
Route::get('/kelola-berita-tambah', function () {
    return view('pages.akun.kelola-web.kelola-berita-tambah', [
        "title" => "Website Komisi | Tambah Berita",
        "active" => "Tambah Berita",
    ]);
});
Route::get('/kelola-akun', function () {
    return view('pages.akun.kelola-web.kelola-akun', [
        "title" => "Website Komisi | Kelola Akun",
        "active" => "Kelola Akun",
    ]);
});
Route::get('/kelola-akun-tambah', function () {
    return view('pages.akun.kelola-web.kelola-akun-tambah', [
        "title" => "Website Komisi | Tambah Akun",
        "active" => "Tambah Akun",
    ]);
});
Route::get('/kelola-komisi', function () {
    return view('pages.akun.kelola-web.kelola-komisi', [
        "title" => "Website Komisi | Kelola Komisi",
        "active" => "Kelola Komisi",
    ]);
});
Route::get('/kelola-komisi-ubah', function () {
    return view('pages.akun.kelola-web.kelola-komisi-ubah', [
        "title" => "Website Komisi | Ubah Komisi",
        "active" => "Ubah Komisi",
    ]);
});
Route::get('/kelola-pengajuan-pencairan', function () {
    return view('pages.akun.kelola-web.kelola-pengajuan-pencairan', [
        "title" => "Website Komisi | kelola-pengajuan-pencairan",
        "active" => "Kelola Pengajuan Pencairan",
    ]);
});



