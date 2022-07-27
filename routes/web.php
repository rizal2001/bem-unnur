<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\KabinetController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;
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

// loading
Route::get('/', function () {
    return view('layouts.loading');
});

// beranda
Route::get('/beranda', function () {
    return view('guest.beranda');
});

// news
Route::get('/news', function () {
    return view('guest.news');
});


// profil
Route::get('/profil', function () {
    return view('guest.profil');
});

// kementerian
Route::get('/kementerian', function () {
    return view('guest.kementerian');
});

// ormawa
Route::get('/ormawa', function () {
    return view('guest.ormawa');
});

// aspirasi
Route::get('/aspirasi', function () {
    return view('guest.aspirasi');
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

        //Aspirasi
        Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi');

         //Berita
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
        
         //Ormawa
         Route::get('/ormawa', [OrmawaController::class, 'index'])->name('ormawa');
         Route::get('/ormawa/create', [OrmawaController::class, 'create'])->name('ormawa.create');
    });
});