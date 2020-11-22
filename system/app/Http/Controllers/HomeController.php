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

	function showKategori(){
		return view('kategori');
	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		// $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		// $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		// $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::whereNull('stok')->get();
		// $data['list_produk'] = Produk::whereNotNull('stok')->get();
		// $data['list_produk'] = Produk::whereDate('created_at', '2020-11-14')->get();
		// $data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '11')->get();
		// $data['list_produk'] = Produk::whereTime('created_at', '17:49:30')->get();		
		$data['nama'] = $nama;
		$data['stok'] = request('stok');


		return view('home', $data);
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('show', $data);
	}
}