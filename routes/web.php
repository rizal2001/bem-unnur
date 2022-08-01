<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KabinetController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\KementerianController;
use App\Http\Controllers\KategoriOrmawaController;
use App\Http\Controllers\KategoriKementerianController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('front.')->middleware('visitor')->group(function() {

    // loading
    Route::get('/', function () {
        return view('layouts.loading');
    });
    // beranda
    Route::get('/beranda', [FrontController::class, 'beranda'])->name('beranda');
    
    // profil
    Route::get('/profil', [FrontController::class, 'profil'])->name('profil');

    // kementerian
    Route::get('/kementerian', [FrontController::class, 'kementerian'])->name('kementerian');

    // ormawa
    Route::get('/ormawa', [FrontController::class, 'ormawa'])->name('ormawa');
        
    // aspirasi
    Route::get('/aspirasi', [FrontController::class, 'aspirasi'])->name('aspirasi');
    
});

// news
Route::get('/news/{id}', [NewsController::class, 'index'])->name('news');

Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');

// notif email aspirasi
Route::get('/email', function () {
    return view('layouts.email');
});

// login
Route::get('/login-admin', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login-proccess', [AuthenticatedSessionController::class, 'store'])->name('login.proccess');

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'admin'], function () {
        //users
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

        //kabinet
        Route::get('/kabinet', [KabinetController::class, 'index'])->name('kabinet');
        Route::get('/kabinet/create', [KabinetController::class, 'create'])->name('kabinet.create');
        Route::post('/kabinet/store', [KabinetController::class, 'store'])->name('kabinet.store');
        Route::get('/kabinet/edit/{id}', [KabinetController::class, 'edit'])->name('kabinet.edit');
        Route::put('/kabinet/update/{id}', [KabinetController::class, 'update'])->name('kabinet.update');
        Route::get('/kabinet/delete/{id}', [KabinetController::class, 'delete'])->name('kabinet.delete');

        Route::get('/kabinet/{kabinetId}/misi', [MisiController::class, 'index'])->name('misi');
        Route::get('/kabinet/{kabinetId}/misi/create', [MisiController::class, 'create'])->name('misi.create');
        Route::post('/kabinet/{kabinetId}/misi/store', [MisiController::class, 'store'])->name('misi.store');
        Route::get('/kabinet/{kabinetId}/misi/edit/{id}', [MisiController::class, 'edit'])->name('misi.edit');
        Route::put('/kabinet/{kabinetId}/misi/update/{id}', [MisiController::class, 'update'])->name('misi.update');
        Route::get('/kabinet/{kabinetId}/misi/delete/{id}', [MisiController::class, 'delete'])->name('misi.delete');

        //Fakultas
        Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas');
        Route::get('/fakultas/create', [FakultasController::class, 'create'])->name('fakultas.create');
        Route::post('/fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');
        Route::get('/fakultas/edit/{id}', [FakultasController::class, 'edit'])->name('fakultas.edit');
        Route::put('/fakultas/update/{id}', [FakultasController::class, 'update'])->name('fakultas.update');
        Route::get('/fakultas/delete/{id}', [FakultasController::class, 'delete'])->name('fakultas.delete');

        //Kategori Kementerian
        Route::get('/kategori-kementerian', [KategoriKementerianController::class, 'index'])->name('kategori.kementerian');
        Route::get('/kategori-kementerian/create', [KategoriKementerianController::class, 'create'])->name('kategori.kementerian.create');
        Route::post('/kategori-kementerian/store', [KategoriKementerianController::class, 'store'])->name('kategori.kementerian.store');
        Route::get('/kategori-kementerian/edit/{id}', [KategoriKementerianController::class, 'edit'])->name('kategori.kementerian.edit');
        Route::put('/kategori-kementerian/update/{id}', [KategoriKementerianController::class, 'update'])->name('kategori.kementerian.update');
        Route::get('/kategori-kementerian/delete/{id}', [KategoriKementerianController::class, 'delete'])->name('kategori.kementerian.delete');

        //Kategori Ormawa
        Route::get('/kategori-ormawa', [KategoriOrmawaController::class, 'index'])->name('kategori.ormawa');
        Route::get('/kategori-ormawa/create', [KategoriOrmawaController::class, 'create'])->name('kategori.ormawa.create');
        Route::post('/kategori-ormawa/store', [KategoriOrmawaController::class, 'store'])->name('kategori.ormawa.store');
        Route::get('/kategori-ormawa/edit/{id}', [KategoriOrmawaController::class, 'edit'])->name('kategori.ormawa.edit');
        Route::put('/kategori-ormawa/update/{id}', [KategoriOrmawaController::class, 'update'])->name('kategori.ormawa.update');
        Route::get('/kategori-ormawa/delete/{id}', [KategoriOrmawaController::class, 'delete'])->name('kategori.ormawa.delete');

        //Jabatan
        Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');
        Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');
        Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
        Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
        Route::put('/jabatan/update/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
        Route::get('/jabatan/delete/{id}', [JabatanController::class, 'delete'])->name('jabatan.delete');

        //Kementerian
        Route::get('/kementerian', [KementerianController::class, 'index'])->name('kementerian');
        Route::get('/kementerian/create', [KementerianController::class, 'create'])->name('kementerian.create');
        Route::post('/kementerian/store', [KementerianController::class, 'store'])->name('kementerian.store');
        Route::get('/kementerian/edit/{id}', [KementerianController::class, 'edit'])->name('kementerian.edit');
        Route::put('/kementerian/update/{id}', [KementerianController::class, 'update'])->name('kementerian.update');
        Route::get('/kementerian/delete/{id}', [KementerianController::class, 'delete'])->name('kementerian.delete');


        //Aspirasi
        Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi');
        Route::get('/aspirasi/delete/{id}', [AspirasiController::class, 'delete'])->name('aspirasi.delete');


         //Berita
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
        Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');
        Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::put('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::get('/berita/delete/{id}', [BeritaController::class, 'delete'])->name('berita.delete');


         //Ormawa
         Route::get('/ormawa', [OrmawaController::class, 'index'])->name('ormawa');
         Route::get('/ormawa/create', [OrmawaController::class, 'create'])->name('ormawa.create');
         Route::post('/ormawa/store', [OrmawaController::class, 'store'])->name('ormawa.store');
         Route::get('/ormawa/edit/{id}', [OrmawaController::class, 'edit'])->name('ormawa.edit');
         Route::put('/ormawa/update/{id}', [OrmawaController::class, 'update'])->name('ormawa.update');
         Route::get('/ormawa/delete/{id}', [OrmawaController::class, 'delete'])->name('ormawa.delete');


         //Halaman
         Route::get('/halaman', [HalamanController::class, 'index'])->name('halaman');

         Route::get('/halaman/{halamanId}/background', [BackgroundController::class, 'index'])->name('background');
         Route::get('/halaman/{halamanId}/background/create', [BackgroundController::class, 'create'])->name('background.create');
         Route::post('/halaman/{halamanId}/background/store', [BackgroundController::class, 'store'])->name('background.store');
         Route::get('/halaman/{halamanId}/background/edit/{id}', [BackgroundController::class, 'edit'])->name('background.edit');
         Route::put('/halaman/{halamanId}/background/update/{id}', [BackgroundController::class, 'update'])->name('background.update');
         Route::get('/halaman/{halamanId}/background/delete/{id}', [BackgroundController::class, 'delete'])->name('background.delete');
    });
});
