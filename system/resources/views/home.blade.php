<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d0ee1fa2b0.js" crossorigin="anonymous"></script>
    <title>WS Shop</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		  	<a class="navbar-brand font-weight-bold text-muted" href="{{ url('/Home') }}">WWW.WSSHOP.COM</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse text-muted ml-5" id="navbarSupportedContent">
		    	<h3 class="ml-5"><i class="fas fa-phone-alt ml-5 mr-3"></i>Call Us: +6281231231234</h3>
		    	<div class="icon ml-5">
		    		<a href="{{ url('/Login') }}" class="btn btn-white my-2 ml-5 mr-3"><i class="fas fa-lock ml-5 mr-2"></i>Login</a>
		    		<a href="#" class="btn btn-white"><i class="fas fa-user mr-2"></i>Register</a>
		    		<a href="#" class="btn btn-info ml-5"><i class="fas fa-shopping-cart mr-2"></i>SHOPPING CART</a>
		    	</div>
		  	</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  		<div class="container">
		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item">
		        		<a class="nav-link" href="{{ url('/Home') }}"><i class="fas fa-home"></i><span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Services <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Shops <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Reviews <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">New Product <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Specials <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
		      		</li>
		    	</ul>
		    	<form class="form-inline my-2 my-lg-0">
		      		<input class="form-control mr-sm-2" type="search" placeholder="Find Something..." aria-label="Search">
		      		<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
		    	</form>
		  	</div>
		</div>
	</nav>
	<div class="row no-gutters">
		<div class="col-md-3 bg-light">
			<ul class="list-group list-group-flush p-2">
			  	<li class="list-group-item bg-dark text-white">BEST SELLING</li>
			  	<li class="list-group-item">
			  		<div class="row">
			  			<div class="col-sm-3">
				  			<img style="width:70px;" src="system/vendor/assets/best-selling/iphone-11.jpg" alt="...">
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
				  			<img style="width:70px;" src="system/vendor/assets/best-selling/iphone-6s.png" alt="...">
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
				  			<img style="width:70px;" src="system/vendor/assets/best-selling/iphone-7.jfif" alt="...">
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
		</div>
		<div class="col-md-9 mt-2">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  	<ol class="carousel-indicators">
			    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  	</ol>
			  	<div class="carousel-inner">
			    	<div class="carousel-item active">
			      		<img style="height: 600px;"src="system/vendor/assets/slide-show/laptop.jpg" class="d-block w-100" alt="...">
			    	</div>
			    	<div class="carousel-item">
			      		<img style="height: 600px" src="system/vendor/assets/slide-show/komputer.jpg" class="d-block w-100" alt="...">
			    	</div>
			    	<div class="carousel-item">
			      		<img style="height: 600px" src="system/vendor/assets/slide-show/handphone.jpg" class="d-block w-100" alt="...">
			    	</div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
			<h3 class="text-center text-weight-bold m-4">Rekomendasi</h3>
			<div class="row mx-auto mb-3">
				<div class="card ml-3 mr-4" style="width: 18rem;">
				  	<img style="height: 200px" src="system/vendor/assets/rekomendasi/acer.jpg" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Laptop Acer Predator</h5>
				    	<p class="card-text">Prosesor Core-i7 </p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star-half-alt"></i>
				    	<i class="far fa-star"></i><br><br>
				    	<a href="{{ url('/Laptop') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp 9.500.000,00</a>
				  	</div>
				</div>
				<div class="card ml-4 mr-4" style="width: 18rem;">
				  	<img style="height: 200px" src="system/vendor/assets/rekomendasi/hp-core15.jfif" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Laptop Hp </h5>
				    	<p class="card-text">Prosesor Core i5</p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star-half-alt"></i><br><br>
				    	<a href="{{ url('/Komputer') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp. 10.000.000,00</a>
				  	</div>
				</div>
				<div class="card ml-4 mr-3" style="width: 18rem;">
				  	<img style="height: 200px" src="system/vendor/assets/rekomendasi/iphone.jpg" class="card-img-top" alt="...">
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
				  	<img style="height: 200px" src="system/vendor/assets/rekomendasi/ipad-11pro.jpg" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Ipad 12 Pro</h5>
				    	<p class="card-text">Prosesor Snapdragon 865 </p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star-half-alt"></i><br><br>
				    	<a href="{{ url('/Laptop') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp 11.500.000,00</a>
				  	</div>
				</div>
				<div class="card ml-4 mr-4" style="width: 18rem;">
				  	<img style="height: 200px" src="system/vendor/assets/rekomendasi/nikon-d5100.jfif" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Kamera Nikon D5100</h5>
				    	<p class="card-text">Kamera Yang Membuat Kulit Hitam Menjadi Putih</p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i><br><br>
				    	<a href="{{ url('/Komputer') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp. 15.000.000,00</a>
				  	</div>
				</div>
				<div class="card ml-4 mr-3" style="width: 18rem;">
				  	<img style="height: 200px" src="system/vendor/assets/rekomendasi/realme-8pro.jpg" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<h5 class="card-title">Realme 8 Pro</h5>
				    	<p class="card-text">Prosesor Snapdragon 845</p>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star"></i>
				    	<i class="fas fa-star-half-alt"></i>
				    	<i class="far fa-star"></i><br><br>
				    	<a href="{{ url('/Handphone') }}" class="btn btn-primary">Detail</a>
				    	<a href="#" class="btn btn-danger">Rp.6.500.000,00</a>
				  	</div>
				</div>
			</div>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>