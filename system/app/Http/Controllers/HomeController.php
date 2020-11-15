<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{
	
	function showHome(){
		return view('home');
	}
	function showlaptop(){
		return view('Laptop');
	}
	function showHp(){
		return view('Hp');
	}
	function showHandphone(){
		return view('Handphone');
	}
	function showIpad(){
		return view('Ipad');
	}
	function showKamera(){
		return view('Kamera');
	}
	function showRealme(){
		return view('Realme');
	}
	function showDashboard(){
		return view('dashboard');
	}
	function showKategori(){
		return view('kategori');
	}
}