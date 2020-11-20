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
								<th width="150px">Nama</th>
								<th>Berat</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Deskripsi</th>
							</thead>
							<tbody class="text-dark">
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->berat}} gr</td>
									<td>Rp. {{number_format($produk->harga)}}</td>
									<td>{{$produk->stok}}</td>
									<td>{{$produk->deskripsi}}</td>
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