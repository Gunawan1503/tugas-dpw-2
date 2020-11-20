<ul class="list-group list-group-flush p-2">
	<li class="list-group-item bg-dark text-white">BEST SELLING</li>
	<li class="list-group-item">
		<div class="row">
			<div class="col-sm-3">
	  			<img style="width:70px;" src="system/resources/assets/best-selling/iphone-11.jpg" alt="...">
	  		</div>
			<div class="col-sm-9">
	  			<h4>Iphone 11 Max Pro</h4>
	  			<p>Rp. 12.000.000,00 <i class="fas fa-cart-plus float-right"></i></p>
	  		</div>
		</div>
	</li>
  	<li class="list-group-item">
		<div class="row">
  			<div class="col-sm-3">
	  			<img style="width:70px;" src="system/resources/assets/best-selling/iphone-6s.png" alt="...">
	  		</div>
	  		<div class="col-sm-9">
	  			<h4>Iphone 6S</h4>
	  			<p>Rp. 9.500.000,00 <i class="fas fa-cart-plus float-right"></i></p>
	  		</div>
		</div>
  	</li>
	<li class="list-group-item">
		<div class="row">
 			<div class="col-sm-3">
	  			<img style="width:70px;" src="system/resources/assets/best-selling/iphone-7.jfif" alt="...">
	  		</div>
	  		<div class="col-sm-9">
				<h4>Iphone 7</h4>
	  			<p>Rp. 8.500.000,00 <i class="fas fa-cart-plus float-right"></i></p>
	  		</div>
  		</div>
  	</li>
</ul>
<ul class="list-group list-group-flush p-2">
  	<li class="list-group-item bg-dark text-white">Our Services</li>
  	<li class="list-group-item"><i class="fas fa-greater-than mr-2"></i>Mobile</li>
  	<li class="list-group-item"><i class="fas fa-greater-than mr-2"></i>Laptop</li>
  	<li class="list-group-item"><i class="fas fa-greater-than mr-2"></i>Camera</li>
  	<li class="list-group-item"><i class="fas fa-greater-than mr-2"></i>Ipod</li>
 	<li class="list-group-item"><i class="fas fa-greater-than mr-2"></i>Apple</li>
  	<li class="list-group-item"><i class="fas fa-greater-than mr-2"></i>Accessories</li>
</ul>
<ul>
	<div class="card  text-dark mt-5">
		<div class="card-header font-weight-bold">
			Filter
		</div>
		<div class="card-body">
			<form action="{{url('Produk/Filter')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="" class="control-label">Nama</label>
					<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Stok</label>
					<input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Harga_Min</label>
							<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Harga_Max</label>
							<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
						</div>
					</div>
				</div>
				<button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
			</form>
		</div>
	</div>
</ul>