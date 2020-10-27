<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function(){
	return view('home');
});

Route::get('/Laptop', function(){
	return view('laptop');
});

Route::get('/Hp', function(){
	return view('hp');
});

Route::get('/Handphone', function(){
	return view('handphone');
});

Route::get('/Login', function(){
	return view('login');
});

Route::get('/Ipad', function(){
	return view('ipad');
});

Route::get('/Kamera', function(){
	return view('kamera');
});

Route::get('/Realme', function(){
	return view('realme');
});