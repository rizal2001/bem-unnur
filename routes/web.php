<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KabinetController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;
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
        Route::get('/users', [UserController::class, 'index'])->name('users');

        Route::get('/kabinet', [KabinetController::class, 'index'])->name('kabinet');
        Route::get('/kabinet/create', [KabinetController::class, 'create'])->name('kabinet.create');

        //Aspirasi
        Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi');

         //Berita
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    });
});