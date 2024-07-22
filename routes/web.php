<?php

use App\Models\PeriodsFunding;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ForumDiscussion\AnswerController;
use App\Http\Controllers\ManageWebsite\ManageNewsController;
use App\Http\Controllers\ManageWebsite\ManageUserController;
use App\Http\Controllers\ForumDiscussion\DiscussionController;
use App\Http\Controllers\ManageWebsite\ManageBeritaController;
use App\Http\Controllers\ScholarshipFunding\PeriodFundingController;
use App\Http\Controllers\ManageWebsite\ScholarshipFunding\ExportController;
use App\Http\Controllers\ManageWebsite\ScholarshipFunding\ScholarshipFundingController;
use App\Http\Controllers\ManageWebsite\ScholarshipFunding\PeriodFundingController as ScholarshipFundingPeriodFundingController;
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

// Harus Login atau Sudah Login
Route::middleware('auth')->group(function () {


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





    // Logout 
    Route::namespace('App\Http\Controllers\Auth')->group(function () {
        Route::post('keluar-akun', 'LoginController@logout')->name('auth.masuk.logout');
    });

    // User // Akun - Kelola Web

    Route::namespace('App\Http\Controllers\User')->group(function () {
        // Route::resource('akun-profil', UserController::class)->only(['show']);

        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'indexUser'])->name('user');
            Route::get('user-profile', [UserController::class, 'index'])->name('user.profile');

            Route::post('update-fullname', [UserController::class, 'updateFullname'])->name('update-fullname');
            Route::post('update-password', [UserController::class, 'updatePassword'])->name('update-password');

            Route::get('edit-profile-picture', [UserController::class, 'editProfilePicture'])->name('user.edit.profile-picture');
            Route::patch('update-profile-picture', [UserController::class, 'updateProfilePicture'])->name('user.update.profile-picture')->middleware('auth');
        });
    });
    // Notifikasi

    Route::get('/notifikasi', [NotificationController::class, 'index'])->name('notifikasi.index');


    Route::prefix('kelola-website')->group(function () {
        Route::get('/', function () {
            return view('pages.user.kelola-web.index', [
                "title" => "Website Komisi | Kelola Website",
                "active" => "Kelola Website",
            ]);
        })->name('kelola.website.index');
        // Kelola Akun
        Route::prefix('kelola-akun')->group(function () {
            Route::get('/', [ManageUserController::class, 'index'])->name('kelola.akun.index');
            Route::get('akun/tambah', [ManageUserController::class, 'create'])->name('kelola.akun.create');
            Route::post('akun/tambah/store', [ManageUserController::class, 'store'])->name('kelola.akun.store');
            Route::get('akun/ubah/{user}', [ManageUserController::class, 'edit'])->name('kelola.akun.edit');
            Route::put('akun/ubah/{user}', [ManageUserController::class, 'update'])->name('kelola.akun.update');
            Route::post('akun/ubah/{user}/toggle-status', [ManageUserController::class, 'toggleStatus'])->name('kelola.akun.toggleStatus');
            Route::post('akun/ubah/{user}/toggle-admin', [ManageUserController::class, 'toggleAdminStatus'])->name('kelola.akun.toggle-admin');
            Route::delete('akun/hapus/{user}', [ManageUserController::class, 'destroy'])->name('kelola.akun.destroy');

            Route::get('/load-more-users', [UserController::class, 'loadMoreUsers'])->name('load-more-users');
        });

        // Kelola Berita
        Route::prefix('kelola-berita')->group(function () {
            Route::get('/', [ManageNewsController::class, 'index'])->name('kelola.berita.index');
            Route::get('berita/tambah', [ManageNewsController::class, 'create'])->name('kelola.berita.create');
            Route::post('berita/store', [ManageNewsController::class, 'store'])->name('kelola.berita.store');
            Route::get('berita/ubah/{id}', [ManageNewsController::class, 'edit'])->name('kelola.berita.edit');
            Route::post('berita/ubah/{id}/toggle-headline', [ManageNewsController::class, 'toggleHeadline'])->name('kelola.berita.edit.toggleHeadline');
            Route::put('berita/update/{id}', [ManageNewsController::class, 'update'])->name('kelola.berita.update');
            Route::delete('berita/hapus/{id}', [ManageNewsController::class, 'destroy'])->name('kelola.berita.destroy');
        });

        // 
        Route::prefix('kelola-pengajuan-pencairan')->group(function () {
            Route::get('/', [ScholarshipFundingController::class, 'index'])->name('kelola.pencairan.index');
            Route::get('/kategori/{category}', [ScholarshipFundingController::class, 'kategori'])->name('kelola.pencairan.kategori');


            Route::resource('scholarship_funding', ScholarshipFundingController::class)->middleware(['auth', 'role:mahasiswa']);
            Route::get('/form/{period}', [ScholarshipFundingController::class, 'form'])->name('kelola.pencairan.form');
            Route::middleware(['RedirectUserNonActive'])->group(function () {
                // DISKUSI
                Route::post('/form/store', [ScholarshipFundingController::class, 'store'])->name('kelola.pencairan.store');
            });



            Route::get('/export-excel', [ExportController::class, 'exportExcel'])->name('export.excel');


            Route::prefix('periode')->group(function () {
                Route::get('/', [ScholarshipFundingPeriodFundingController::class, 'index'])->name('kelola.pencairan.periode.index');
                Route::get('/tambah', [ScholarshipFundingPeriodFundingController::class, 'create'])->name('kelola.pencairan.periode.show');
                Route::post('/tambah/store', [ScholarshipFundingPeriodFundingController::class, 'store'])->name('kelola.pencairan.periode.store');
                Route::get('/ubah', [ScholarshipFundingPeriodFundingController::class, 'edit'])->name('kelola.pencairan.periode.edit');
                Route::put('ubah/{id}', [ScholarshipFundingPeriodFundingController::class, 'update'])->name('kelola.pencairan.periode.update');
                Route::get('/hapus/{id}', [ScholarshipFundingPeriodFundingController::class, 'destroy'])->name('kelola.pencairan.periode.destroy');
            });
        });
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





// Berita
Route::namespace('berita')->group(function () {
    Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
    Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('berita.show');
});

Route::get('/berita-detail', function () {
    return view('pages.berita.berita-detail', [
        "title" => "Website Komisi | Berita",
        "active" => "Berita",
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




Route::get('/testing', function () {
    return view('pages.auth.testing', [
        "title" => "Website Komisi | Testing",
        "active" => "Testing",
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
