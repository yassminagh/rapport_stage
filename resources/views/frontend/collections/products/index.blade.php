@extends('layouts.app')

@section('content')
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Book Store</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">

	    <link rel="stylesheet" type="text/css" href="css/normalize.css">
	    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="style.css">

		<!-- script
		================================================== -->
		<script src="js/modernizr.js"></script>

	</head>

<body> 
	
	

<section id="popular-books" class="bookshelf">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
   
        <div class="tab-content">
			  <div id="all-genre" data-tab-content class="active">
				<div class="col-md-3">
				<div class="col-md-9">
			  	<div class="row">
				  @foreach ($products as $product)
					<div class="col-md-3">
						<figure class="product-style">
							@if($product->quantity > 0)
								<label for="" class="stock bg-success">In Stock</label>
							@else
								<label for="" class="stock bg-danger">Out Of Stock</label>
							@endif

							@if($product->productImages->count() > 0)
								<a href="{{url('/collections/'.$product->category->name.'/'.$product->name)}}">
									<img src="{{ asset($product->productImages[0]->image) }}" alt="{{$product->name}}" class="product-item">
								</a>
							@endif
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<a href="{{url('/collections/'.$product->category->name.'/'.$product->name)}}">
									{{ $product->name }}
								</a>
								<p>{{ $product->author }}</p>
								<div class="item-price">${{ $product->selling_price }}</div>
							</figcaption>
						</figure>
					</div>
				@endforeach

		    	 </div>
				 </div>
			  </div>
			  </div>

			</div>

		</div><!--inner-tabs-->
			
		</div>
</section>

@endsection


<!-- <div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item2.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Once upon a time</h3>
								<p>Klien Marry</p>
								<div class="item-price">$ 35.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Tips of simple lifestyle</h3>
								<p>Bratt Smith</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item4.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Just felt from outside</h3>
								<p>Nicole Wilson</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				</div>
				<div class="row">

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Peaceful Enlightment</h3>
								<p>Marmik Lama</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item6.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item8.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

		    	</div>

			  </div>
			  <div id="business" data-tab-content>
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item2.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Peaceful Enlightment</h3>
								<p>Marmik Lama</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item4.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item6.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item8.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

		    	 </div>
			  </div>

			  <div id="technology" data-tab-content>
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item1.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Peaceful Enlightment</h3>
								<p>Marmik Lama</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="romantic" data-tab-content>
			  	<div class="row">
		    	  <div class="col-md-3">
			    	  <figure class="product-style">
							<img src="images/tab-item1.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Peaceful Enlightment</h3>
								<p>Marmik Lama</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="adventure" data-tab-content>
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="fictional" data-tab-content>
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div> -->