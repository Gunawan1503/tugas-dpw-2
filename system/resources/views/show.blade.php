@extends('templateClient.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-dark">
						Detail Data Produk
					</div>
					<div class="card-body text-dark">
						<div class="row mb-5">
							<div class="col-5">
								<img src="{{url("public", $produk->foto)}}" alt="" class="img-fluid">
							</div>
							<div class="col-7"></div>
						</div>
						<h3>{{$produk->nama}}</h3>
						<hr>
						<p>
							{{$produk->harga}}  |
							Stok : {{$produk->stok}} Unit  |
							Berat : {{$produk->berat}} g
						</p>
						<p>
							{!! nl2br($produk->deskripsi) !!}
						</p>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection