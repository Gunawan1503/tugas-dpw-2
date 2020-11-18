<?php 

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller{

	function index(){
		$data['list_produk'] = Produk::all();
		return view('home', $data);
	}
	
	function showHome(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('Home');
	}
	function showDashboard(){
		return view('dashboard');
	}
}