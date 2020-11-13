@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-dark">
						Detail Data Produk
					</div>
					<div class="card-body text-dark">
						<h3>{{$produk->nama}}</h3>
						<hr>
						<p>
							Rp. {{number_format($produk->harga)}}  |
							Stok : {{$produk->stok}} Unit  |
							Berat : {{$produk->berat}} gr
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