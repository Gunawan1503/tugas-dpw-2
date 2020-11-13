@extends('templateAdmin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-dark">
						Data Produk
						<a href="{{url('Produk/Create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead class="thead-dark">
								<th>No.</th>
								<th width="150px">Aksi</th>
								<th width="450px">Nama</th>
								<th>Harga</th>
								<th>Stok</th>
							</thead>
							<tbody class="text-dark">
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('Produk', $produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i> </a>
											<a href="{{url('Produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
											@include('templateAdmin.utils.delete', ['url' => url('Produk', $produk->id)])
										</div>
									</td>
									<td>{{$produk->nama}}</td>
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
