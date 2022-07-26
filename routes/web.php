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

Route::get('/', function () {
    return view('guest.beranda');
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

        Route::get('/kabinet', [KabinetController::class, 'index'])->name('kabinet');
        Route::get('/kabinet/create', [KabinetController::class, 'create'])->name('kabinet.create');
        Route::post('/kabinet/store', [KabinetController::class, 'store'])->name('kabinet.store');
        Route::get('/kabinet/edit/{id}', [KabinetController::class, 'edit'])->name('kabinet.edit');
        Route::put('/kabinet/update/{id}', [KabinetController::class, 'update'])->name('kabinet.update');
        Route::get('/kabinet/delete/{id}', [KabinetController::class, 'delete'])->name('kabinet.delete');
        
        //Aspirasi
        Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi');

         //Berita
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    });
});