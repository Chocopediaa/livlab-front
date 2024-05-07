<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Home Page 
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/tentang', [AboutController::class, 'index'])->name('about');

// Partner
Route::get('/daftar-instansi', [PartnerController::class, 'index'])->name('partner');

// Product
Route::prefix('produk-baik')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('product');
    Route::get('/{slug}', [ProductController::class, 'show'])->name('product.detail');
});

// Media
Route::resource('media', MediaController::class);

// News
Route::resource('artikel', NewsController::class);

// Agenda
Route::resource('agenda', AgendaController::class);

//Mentor
Route::get('mentor', [MentorController::class, 'index'])->name('mentor.index');

// Registrasi
// Route::get('/registrasi', [UserController::class, 'register'])->name('register');

