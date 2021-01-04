@extends('templateClient.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-dark">
						Daftar Produk
					</div>
					<div class="card-body">
						<table class="table table-datatable">
							<thead class="thead-dark">
								<th>No.</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th width="90x">Berat</th>
								<th width="110px">Harga</th>
								<th>Stok</th>
							</thead>
							<tbody class="text-dark">
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<a href="{{url('Client/Produk', $produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->berat}} Kg</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->stok}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection