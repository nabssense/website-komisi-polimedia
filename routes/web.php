<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

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

// Route::namespace('App\Http\Controllers\Discussions')->group(function()){
    
// }

// Harus Login atau Sudah Login
Route::middleware('auth.warning')->group(function () {
    
    Route::namespace('App\Http\Controllers\ForumDiscussions')->group(function(){
        
        Route::get('forum-diskusi-ajukan-pertanyaan', 'ForumDiscussionsController@askQuestions')->name('forumdiscussions.askquestion.index');
    });
});


// Harus Login atau Sudah Login
Route::middleware('auth')->group(function () {
    // Akun
        // Akun - Kelola Web
        Route::get('kelola-website', function () {
            return view('pages.user.kelola-web.index', [
                "title" => "Website Komisi | Kelola Website",
                "active" => "Kelola Website",
            ]);
        });
        Route::get('/kelola-kabinet-tambah', function () {
            return view('pages.user.kelola-web.kelola-kabinet-tambah', [
                "title" => "Website Komisi | Tambah Kabinet",
                "active" => "Tambah Kabinet",
            ]);
        });
        Route::get('/kelola-kabinet', function () {
            return view('pages.user.kelola-web.kelola-kabinet', [
                "title" => "Website Komisi | Kelola Kabinet",
                "active" => "Kelola Kabinet",
            ]);
        });
        Route::get('/kelola-kabinet-pilih', function () {
            return view('pages.user.kelola-web.kelola-kabinet-pilih', [
                "title" => "Website Komisi | Kelola Kabinet",
                "active" => "Kelola Kabinet",
            ]);
        });
        Route::get('/kelola-berita', function () {
            return view('pages.user.kelola-web.kelola-berita', [
                "title" => "Website Komisi | Kelola Berita",
                "active" => "Kelola Berita",
            ]);
        });
        Route::get('/kelola-berita-tambah', function () {
            return view('pages.user.kelola-web.kelola-berita-tambah', [
                "title" => "Website Komisi | Tambah Berita",
                "active" => "Tambah Berita",
            ]);
        });
        Route::get('/kelola-akun', function () {
            return view('pages.user.kelola-web.kelola-akun', [
                "title" => "Website Komisi | Kelola Akun",
                "active" => "Kelola Akun",
            ]);
        });
        Route::get('/kelola-akun-tambah', function () {
            return view('pages.user.kelola-web.kelola-akun-tambah', [
                "title" => "Website Komisi | Tambah Akun",
                "active" => "Tambah Akun",
            ]);
        });
        Route::get('/kelola-komisi', function () {
            return view('pages.user.kelola-web.kelola-komisi', [
                "title" => "Website Komisi | Kelola Komisi",
                "active" => "Kelola Komisi",
            ]);
        });
        Route::get('/kelola-komisi-ubah', function () {
            return view('pages.user.kelola-web.kelola-komisi-ubah', [
                "title" => "Website Komisi | Ubah Komisi",
                "active" => "Ubah Komisi",
            ]);
        });
        Route::get('/kelola-pengajuan-pencairan', function () {
            return view('pages.user.kelola-web.kelola-pengajuan-pencairan', [
                "title" => "Website Komisi | kelola-pengajuan-pencairan",
                "active" => "Kelola Pengajuan Pencairan",
            ]);
        });

        // Logout 
        Route::namespace('App\Http\Controllers\Auth')->group(function () {
            Route::post('keluar-akun', 'LoginController@logout')->name('auth.masuk.logout');
        });

        // User
        Route::namespace('App\Http\Controllers\User')->group(function() {
            // Route::resource('akun-profil', UserController::class)->only(['show']);
            Route::resource('user-profile', UserController::class)->only(['index']);
        });
});





// Hanya Tanpa Login atau Belum Login
Route::middleware('guest')->group(function () {
    Route::namespace('App\Http\Controllers\Auth')->group(function () {
        Route::get('masuk-akun', 'LoginController@index')->name('auth.masuk.index');
        Route::post('masuk-akun', 'LoginController@login')->name('auth.masuk.login');
        
        Route::get('daftar-akun', 'RegisterController@index')->name('auth.daftar.index');
        Route::post('daftar-akun', 'RegisterController@register')->name('auth.daftar.register');
    });
    
});

Route::namespace('App\Http\Controllers\ForumDiscussions')->group(function(){
    Route::get('forum-diskusi', 'ForumDiscussionsController@index')->name('forumdiscussions.index');
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



// // Forum Diskusi


Route::get('/forum-diskusi-pertanyaan', function () {
    return view('pages.forum-diskusi.forum-diskusi-pertanyaan', [
        "title" => "Website Komisi | Pertanyaan",
        "active" => "Pertanyaan",
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
        "title" => "Website Komisi | Tentang Kabinet",
        "active" => "Tentang Kabinet",
    ]);
});





// Notifikasi
Route::get('/notifikasi', function () {
    return view('pages.notifikasi.notifikasi', [
        "title" => "Website Komisi | Notifikasi",
        "active" => "Notifikasi",
    ]);
});


