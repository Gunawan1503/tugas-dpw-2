<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.  These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// HALAMAN STORE
Route::get('/Home', [HomeController::class, 'showHome']);
Route::get('/Laptop', [HomeController::class, 'showLaptop']);
Route::get('/Hp', [HomeController::class, 'showHp']);
Route::get('/Handphone', [HomeController::class, 'showHandphone']);
Route::get('/Ipad', [HomeController::class, 'showIpad']);
Route::get('/Kamera', [HomeController::class, 'showKamera']);
Route::get('/Realme', [HomeController::class, 'showRealme']);

// HALAMAN ADMIN
Route::get('Dashboard', [HomeController::class, 'showDashboard']);
Route::get('Kategori', [HomeController::class, 'showKategori']);
Route::get('Promo', [HomeController::class, 'showPromo']);

// HALAMAN LOGIN DAN REGISTER
Route::get('Login', [AuthController::class, 'showLogin']);
Route::get('Register', [AuthController::class, 'registration']);

Route::get('Produk', [ProdukController::class, 'index']);
Route::get('Produk/Create', [ProdukController::class, 'create']);
Route::post('Produk', [ProdukController::class, 'store']);
Route::get('Produk/{produk}', [ProdukController::class, 'show']);
Route::get('Produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('Produk/{produk}', [ProdukController::class, 'update']);
Route::delete('Produk/{produk}', [ProdukController::class, 'destroy']);


