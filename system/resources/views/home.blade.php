@extends('templateClient.base')

@section('content')
	<div class="row mx-auto mb-3">
		<div class="card ml-3 mr-4" style="width: 18rem;">
		  	<img style="height: 200px" src="system/resources/assets/rekomendasi/acer.jpg" class="card-img-top" alt="...">
		  	<div class="card-body">
		    	<h5 class="card-title">Laptop Acer Predator</h5>
			  	<p class="card-text">Prosesor Core-i7 </p>
			   	<i class="fas fa-star"></i>
			   	<i class="fas fa-star"></i>
			   	<i class="fas fa-star"></i>
			   	<i class="fas fa-star-half-alt"></i>
		    	<i class="far fa-star"></i><br><br>
		    	<a href="{{ url('/Laptop') }}" class="btn btn-primary">Detail</a>
		    	<a href="#" class="btn btn-danger">Rp 37.500.000,00</a>
		  	</div>
		</div>
		<div class="card ml-4 mr-4" style="width: 18rem;">
		  	<img style="height: 200px" src="system/resources/assets/rekomendasi/hp-core15.jfif" class="card-img-top" alt="...">
		  	<div class="card-body">
				<h5 class="card-title">Laptop Hp </h5>
		    	<p class="card-text">Prosesor Core i5</p>
		    	<i class="fas fa-star"></i>
		    	<i class="fas fa-star"></i>
		    	<i class="fas fa-star"></i>
		    	<i class="fas fa-star"></i>
		    	<i class="fas fa-star-half-alt"></i><br><br>
		    	<a href="{{ url('/Hp') }}" class="btn btn-primary">Detail</a>
		    	<a href="#" class="btn btn-danger">Rp. 10.000.000,00</a>
		  	</div>
		</div>
				<div class="card ml-4 mr-3" style="width: 18rem;">
				  	<img style="height: 200px" src="system/resources/assets/rekomendasi/iphone.jpg" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Iphone 8+</h5>
				    	<p class="card-text">Prosesor Snapdragon 845</p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star-half-alt"></i>
				    	<i class="far fa-star"></i>
				    	<i class="far fa-star"></i><br><br>
				    	<a href="{{ url('/Handphone') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp.10.500.000,00</a>
				  	</div>
				</div>
			</div>
			<div class="row mx-auto">
				<div class="card ml-3 mr-4" style="width: 18rem;">
				  	<img style="height: 200px" src="system/resources/assets/rekomendasi/ipad-11pro.jpg" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Ipad 12 Pro</h5>
				    	<p class="card-text">Prosesor Snapdragon 865 </p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star-half-alt"></i><br><br>
				    	<a href="{{ url('/Ipad') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp 11.500.000,00</a>
				  	</div>
				</div>
				<div class="card ml-4 mr-4" style="width: 18rem;">
				  	<img style="height: 200px" src="system/resources/assets/rekomendasi/nikon-d5100.jfif" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Kamera Nikon D5100</h5>
				    	<p class="card-text">Kamera Yang Membuat Kulit Hitam Menjadi Putih</p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i><br><br>
				    	<a href="{{ url('/Kamera') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp. 50.000.000,00</a>
				  	</div>
				</div>
				<div class="card ml-4 mr-3" style="width: 18rem;">
				  	<img style="height: 200px" src="system/resources/assets/rekomendasi/realme-8pro.jpg" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Realme 8 Pro</h5>
				    	<p class="card-text">Prosesor Snapdragon 845</p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star-half-alt"></i>
				    	<i class="far fa-star"></i><br><br>
				    	<a href="{{ url('/Realme') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp.6.500.000,00</a>
				  	</div>
				</div>
			</div>
@endsection