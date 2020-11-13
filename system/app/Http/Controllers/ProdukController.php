<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller{
	function index(){
		$data['list_produk'] = Produk::all();
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('Produk')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('Produk')->with('warning', 'Data Berhasil Diedit');	
	}
	function destroy(Produk $produk){
		$produk->delete();
		
		return redirect('Produk')->with('danger', 'Data Berhasil Dihapus');
	}
}

?>