<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KabinetController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;

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
Route::get('/login-admin', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login-proccess', [CustomAuthController::class, 'login'])->name('login.proccess');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    //kabinet
    Route::get('/kabinet', [KabinetController::class, 'index'])->name('kabinet');
    Route::get('/kabinet/create', [KabinetController::class, 'create'])->name('kabinet.create');

    //Aspirasi
    Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi');

     //Berita
     Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
     Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
});