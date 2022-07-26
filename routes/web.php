<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// beranda
Route::get('/', function () {
    return view('layouts.loading');
});

Route::get('/beranda', function () {
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
Route::get('/login-admin', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login-proccess', [CustomAuthController::class, 'login'])->name('login.proccess');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users');
});