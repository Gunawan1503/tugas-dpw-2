@extends('templateClient.base')

@section('content')
	<div class="container">
		<div class="row">
			@foreach($list_produk as $produk)
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
				 	<img class="card-img-top" src="{{url("public", $produk->foto)}}" alt="Card image cap">
				  	<div class="card-body">
				   		<h5 class="card-title">{{$produk->nama}}</h5>
				    	<p class="card-text">{{$produk->harga}}</p>
				    	<div class="btn-group">
				    		<a href="{{url('Client/Produk', $produk->id)}}" class="btn btn-primary mr-2">Detail</a>
				    		<a href="{{url('Pesan')}}" class="btn btn-warning">Pesan</a>
				    	</div>
				  	</div>
				</div>
			</div>
			@endforeach
			<div class="row">
				<div class="col-md-12">
					{{$list_produk->links()}}
				</div>
			</div>
		</div>
	</div>
@endsection