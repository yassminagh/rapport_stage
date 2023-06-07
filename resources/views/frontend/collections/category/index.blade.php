<section id="popular-books" class="bookshelf">
	<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="section-header align-center">
				<div class="title">
					<span>Some quality items</span>
				</div>
				<h2 class="section-title">Popular Books</h2>
			</div>
   
			<ul class="tabs">
				@foreach($categories as $category)
				<div class="col-md-3">
						<figure class="product-style">
							<img src="{{ asset($category->image) }}" alt="Books" class="product-item">
							<figcaption>
							<li data-tab-target="#all-genre" class="tab"><a href="{{ url('/collections/'.$category->name) }}"> {{ $category->name }}</a></li>
							</figcaption>
						</figure>
					</div>
				
			 
			  @endforeach
			</ul>


				
		    	 </div>
			  </div>

			</div>

		</div><!--inner-tabs-->
			
		</div>
	</div>
</section>
