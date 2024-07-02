<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ForumDiscussion\AnswerController;
use App\Http\Controllers\ManageWebsite\ManageUserController;
use App\Http\Controllers\ForumDiscussion\DiscussionController;
use App\Http\Controllers\ManageWebsite\ManageBeritaController;
use App\Http\Controllers\ManageWebsite\ManageNewsController;
use App\Http\Controllers\News\NewsController;

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
// Route::middleware('auth.warning')->group(function () {

//     // Route::namespace('App\Http\Controllers\ForumDiscussions')->group(function(){

//     //     // Route::get('ajukan-pertanyaan', 'ForumDiscussionsController@askQuestions')->name('forumdiscussions.askquestion.index');
//     // });
// });


// Harus Login atau Sudah Login
Route::middleware('auth')->group(function () {
    // DISKUSI
    Route::namespace('App\Http\Controllers\ForumDiscussion')->group(function () {
        Route::resource('forum-diskusi', DiscussionController::class)
            ->only(['create', 'store', 'edit', 'update', 'destroy']);

        Route::post('forum-diskusi/{discussion}/like', 'LikeController@discussionLike')
            ->name('forum-diskusi.diskusi.like');

        Route::post('forum-diskusi/{discussion}/unlike', 'LikeController@discussionUnLike')
            ->name('forum-diskusi.diskusi.unlike');

        Route::post('discussions/{discussion}/answer', 'AnswerController@store')
            ->name('forum-diskusi.diskusi.jawab');


        Route::resource('answers', AnswerController::class)
            ->only(['edit', 'update', 'destroy']);
        Route::post('jawab/{answer}/like', 'LikeController@answerLike')->name('jawab.like.like');
        Route::post('jawab/{answer}/unlike', 'LikeController@answerUnlike')->name('jawab.like.unlike');
    });

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
    Route::namespace('App\Http\Controllers\User')->group(function () {
        // Route::resource('akun-profil', UserController::class)->only(['show']);
        Route::resource('user-profile', UserController::class)->only(['index']);
        Route::get('user', [UserController::class, 'indexUser'])->name('index.user');
        Route::post('update-fullname', [UserController::class, 'updateFullname'])->name('update-fullname');
        Route::post('update-password', [UserController::class, 'updatePassword'])->name('update-password');

        Route::get('edit-profile-picture', [UserController::class, 'editProfilePicture'])->name('user.edit.profile-picture');
        Route::patch('update-profile-picture', [UserController::class, 'updateProfilePicture'])->name('user.update.profile-picture')->middleware('auth');
    });


    Route::get('kelola-akun', [ManageUserController::class, 'index'])->name('manage-web.manage-users.index');
    Route::get('kelola-akun/tambah', [ManageUserController::class, 'create'])->name('manage-web.manage-users.create');
    Route::post('kelola-akun/tambah/store', [ManageUserController::class, 'store'])->name('manage-web.manage-users.store');

    Route::prefix('kelola-berita')->group(function () {
        Route::get('/', [ManageNewsController::class, 'index'])->name('kelola.berita.index');
        Route::get('/tambah', [ManageNewsController::class, 'create'])->name('kelola.berita.create');
        Route::post('/store', [ManageNewsController::class, 'store'])->name('kelola.berita.store');
        Route::get('/ubah/{id}', [ManageNewsController::class, 'edit'])->name('kelola.berita.edit');
        Route::put('/update/{id}', [ManageNewsController::class, 'update'])->name('kelola.berita.update');
        Route::delete('/delete/{id}', [ManageNewsController::class, 'destroy'])->name('kelola.berita.destroy');
        Route::post('/berita/{id}/toggle-headline', [ManageNewsController::class, 'toggleHeadline'])->name('kelola.berita.toggleHeadline');    
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

Route::namespace('App\Http\Controllers\ForumDiscussion')->group(function () {
    Route::resource('forum-diskusi', DiscussionController::class)
        ->only(['index', 'show']);

    Route::get('forum-diskusi/diskusi/kategori/{category}', 'CategoryController@show')
        ->name('forum-diskusi.diskusi.kategori.show');
});

Route::namespace('App\Http\Controllers\Home')->group(function () {
    Route::get('/', 'HomeController@index')->name('beranda.index');
    Route::get('beranda', 'HomeController@index')->name('beranda.index');
});



Route::get('/testing', function () {
    return view('pages.auth.testing', [
        "title" => "Website Komisi | Testing",
        "active" => "Testing",
    ]);
});



// Berita
Route::namespace('berita')->group(function () {
    Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
    
});

Route::get('/berita-detail', function () {
    return view('pages.berita.berita-detail', [
        "title" => "Website Komisi | Berita",
        "active" => "Berita",
    ]);
});



// // Forum Diskusi


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
