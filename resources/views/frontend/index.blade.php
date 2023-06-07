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

<div id="header-wrap">
	
	<div class="top-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="social-links">
						<ul>
							<li>
								<a href="#"><i class="icon icon-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-youtube-play"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-behance-square"></i></a>
							</li>
						</ul>
					</div><!--social-links-->
				</div>
				<div class="col-md-6">
					<div class="right-element">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                    <a class="cart for-buy" href="{{ route('login') }}">{{ __('Login') }}</a>

                            @endif

                            @if (Route::has('register'))
                                    <a class="cart for-buy" href="{{ route('register') }}">{{ __('Register') }}</a>

                            @endif
                        @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->uname }}
                                </a>

                                <div class="" aria-labelledby="profileDropdown">
              
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout text-primary"></i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    
                                </form>
                                </div>
                        @endguest
                        
						<a href="{{url('cart')}}" class="cart for-buy" >
							<i class="icon icon-clipboard"></i>
							<span>Cart:()</span>
						</a>

						<div class="action-menu">

							<div class="search-bar">
								<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
									<i class="icon icon-search"></i>
								</a>
								<form action="{{url('search')}}" role="search" method="get" class="search-box">
									<input class="search-field text search-input" placeholder="Search" type="search">
								</form>
							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>

	<header id="header">
		<div class="container">
			<div class="row">

				<div class="col-md-2">
					<div class="main-logo">
						<a href="index.html"><img src="images/main-logo.png" alt="logo"></a>
					</div>

				</div>

				<div class="col-md-10">
					
					@include('frontend.navbar')

				</div>

			</div>
		</div>
	</header>
		
</div><!--header-wrap-->

<section id="billboard">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<button class="prev slick-arrow">
					<i class="icon icon-arrow-left"></i>
				</button>

				<div class="main-slider pattern-overlay">
                @foreach($sliders as $key =>$sliderItem)
					<div class="slider-item">
						<div class="banner-content">
							<h2 class="banner-title">{{$sliderItem->title}}</h2>
							<p>{{$sliderItem->description}}</p>
							<div class="btn-wrap">
								<a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>
							</div>
						</div><!--banner-content--> 
						<img src="{{asset($sliderItem->image)}}" alt="banner" class="banner-image">
					</div><!--slider-item-->
                   @endforeach

					
					
				<button class="next slick-arrow">
					<i class="icon icon-arrow-right"></i>
				</button>
				 
			</div>
		</div>
	</div>
	
</section>

<section id="client-holder" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="inner-content">
				<div class="logo-wrap">
					<div class="grid">
						<a href="#"><img src="images/client-image1.png" alt="client"></a>
						<a href="#"><img src="images/client-image2.png" alt="client"></a>
						<a href="#"><img src="images/client-image3.png" alt="client"></a>
						<a href="#"><img src="images/client-image4.png" alt="client"></a>
						<a href="#"><img src="images/client-image5.png" alt="client"></a>
					</div>
				</div><!--image-holder-->
			</div>
		</div>
	</div>
</section>

<section id="featured-books">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

			<div class="section-header align-center">
				<div class="title">
					<span>Some quality items</span>
				</div>
				<h2 class="section-title">Featured Books</h2>
			</div>

			<div class="product-list" data-aos="fade-up">
				<div class="row">

					<div class="col-md-3">
						<figure class="product-style">
							<img src="images/product-item1.jpg" alt="Books" class="product-item">
								<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>
				
					<div class="col-md-3">
						<figure class="product-style">
							<img src="images/product-item2.jpg" alt="Books" class="product-item">
								<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 38.00</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-md-3">
						<figure class="product-style">
							<img src="images/product-item3.jpg" alt="Books" class="product-item">
								<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>The lady beauty Scarlett</h3>
								<p>Arthur Doyle</p>
								<div class="item-price">$ 45.00</div>
							</figcaption>
						</figure>
					</div>
									
					<div class="col-md-3">
						<figure class="product-style">
							<img src="images/product-item4.jpg" alt="Books" class="product-item">
								<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Once upon a time</h3>
								<p>Klien Marry</p>
								<div class="item-price">$ 35.00</div>
							</figcaption>
						</figure>
					</div>

			    </div><!--ft-books-slider-->				
			</div><!--grid-->
<section id="popular-books" class="bookshelf">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		@if(session()->has('message'))
			<div class="alert alert-seccess">
				{{session('message')}}
			</div>
		@endif
			<div class="section-header align-center">
				<div class="title">
					<span>Some quality items</span>
				</div>
				<h2 class="section-title">All Books</h2>
			</div>
   			@foreach($products as $product)
			<div class="col-md-3">
					  	<figure class="product-style">
							
							<a href="{{ route('product.details', ['id' => $product->id]) }}">
								<img src="{{asset($product->productImages[0]->image)}}" alt="Books" class="product-item">
							</a>
							<figcaption>
								<h3>{{$product->name}}</h3>
								<p>{{$product->author}}</p>
								@if($product-> category)
                                    <p>{{$product->category->name}}</p>
                                @else
                                    <p>No Category</p> 
                                @endif
								<div class="item-price">$ {{$product->selling_price}}</div>
							</figcaption>
						</figure>
					</div>
				@endforeach
		    	</div>
			  </div>

			</div>

		</div><!--inner-tabs-->
			
		</div>
	</div>
</section>


			</div><!--inner-content-->
		</div>
		
		<div class="row">
			<div class="col-md-12">

				<div class="btn-wrap align-right">
					<a href="#" class="btn-accent-arrow">View all products <i class="icon icon-ns-arrow-right"></i></a>
				</div>
				
			</div>		
		</div>
	</div>
</section>

<section id="best-selling" class="leaf-pattern-overlay">
	<div class="corner-pattern-overlay"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<div class="row">

					<div class="col-md-6">
						<figure class="products-thumb">
							<img src="images/single-image.jpg" alt="book" class="single-image">
						</figure>	
					</div>

					<div class="col-md-6">
						<div class="product-entry">
							<h2 class="section-title divider">Best Selling Book</h2>

							<div class="products-content">
								<div class="author-name">By Timbur Hood</div>
								<h3 class="item-title">Birds gonna be happy</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac.</p>
								<div class="item-price">$ 45.00</div>
								<div class="btn-wrap">
									<a href="#" class="btn-accent-arrow">shop it now <i class="icon icon-ns-arrow-right"></i></a>
								</div>
							</div>

						</div>
					</div>

				</div>
				<!-- / row -->

			</div>

		</div>
	</div>
</section>



<section id="quotation" class="align-center">
	<div class="inner-content">
		<h2 class="section-title divider">Quote of the day</h2>
		<blockquote data-aos="fade-up">
			<q>“The more that you read, the more things you will know. The more that you learn, the more places you’ll go.”</q>
			<div class="author-name">Dr. Seuss</div>			
		</blockquote>
	</div>		
</section>

@include('frontend.offer')

<section id="subscribe">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2">
				<div class="row">

					<div class="col-md-6">

						<div class="title-element">
							<h2 class="section-title divider">Subscribe to our newsletter</h2>
						</div>

					</div>
					<div class="col-md-6">

						<div class="subscribe-content" data-aos="fade-up">
							<p>Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit amet, consectetur. Elit adipiscing enim pharetra hac.</p>
							<form id="form">
								<input type="text" name="email" placeholder="Enter your email addresss here">
								<button class="btn-subscribe">
									<span>send</span> 
									<i class="icon icon-send"></i>
								</button>
							</form>
						</div>

					</div>
					
				</div>
			</div>
			
		</div>
	</div>
</section>

<section id="latest-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="section-header align-center">
					<div class="title">
						<span>Read our articles</span>
					</div>
					<h2 class="section-title">Latest Articles</h2>
				</div>

				<div class="row">

					<div class="col-md-4">

						<article class="column" data-aos="fade-up">

							<figure>
								<a href="#" class="image-hvr-effect">
									<img src="images/post-img1.jpg" alt="post" class="post-image">			
								</a>
							</figure>

							<div class="post-item">	
								<div class="meta-date">Mar 30, 2021</div>			
							    <h3><a href="#">Reading books always makes the moments happy</a></h3>

							    <div class="links-element">
								    <div class="categories">inspiration</div>
								    <div class="social-links">
										<ul>
											<li>
												<a href="#"><i class="icon icon-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="icon icon-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="icon icon-behance-square"></i></a>
											</li>
										</ul>
									</div>
								</div><!--links-element-->

							</div>
						</article>
						
					</div>
					<div class="col-md-4">

						<article class="column" data-aos="fade-down">
							<figure>
								<a href="#" class="image-hvr-effect">
									<img src="images/post-img2.jpg" alt="post" class="post-image">
								</a>
							</figure>
							<div class="post-item">	
								<div class="meta-date">Mar 29, 2021</div>			
							    <h3><a href="#">Reading books always makes the moments happy</a></h3>

							    <div class="links-element">
								    <div class="categories">inspiration</div>
								    <div class="social-links">
										<ul>
											<li>
												<a href="#"><i class="icon icon-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="icon icon-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="icon icon-behance-square"></i></a>
											</li>
										</ul>
									</div>
								</div><!--links-element-->

							</div>
						</article>
						
					</div>
					<div class="col-md-4">

						<article class="column" data-aos="fade-up">
							<figure>
								<a href="#" class="image-hvr-effect">
									<img src="images/post-img3.jpg" alt="post" class="post-image">
								</a>
							</figure>
							<div class="post-item">		
								<div class="meta-date">Feb 27, 2021</div>			
							    <h3><a href="#">Reading books always makes the moments happy</a></h3>

							    <div class="links-element">
								    <div class="categories">inspiration</div>
								    <div class="social-links">
										<ul>
											<li>
												<a href="#"><i class="icon icon-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="icon icon-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="icon icon-behance-square"></i></a>
											</li>
										</ul>
									</div>
								</div><!--links-element-->

							</div>
						</article>
						
					</div>

				</div>

				<div class="row">

					<div class="btn-wrap align-center">
						<a href="#" class="btn btn-outline-accent btn-accent-arrow" tabindex="0">Read All Articles<i class="icon icon-ns-arrow-right"></i></a>
					</div>
				</div>

			</div>	
		</div>
	</div>
</section>

<section id="download-app" class="leaf-pattern-overlay">
	<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">

						<div class="col-md-5">
							<figure>
								<img src="images/device.png" alt="phone" class="single-image">
							</figure>
						</div>

						<div class="col-md-7">
							<div class="app-info">
								<h2 class="section-title divider">Download our app now !</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames semper erat ac in suspendisse iaculis.</p>
								<div class="google-app">
									<img src="images/google-play.jpg" alt="google play">
									<img src="images/app-store.jpg" alt="app store">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
</section>

@include('frontend.footer')



<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>
</html>	
@endsection