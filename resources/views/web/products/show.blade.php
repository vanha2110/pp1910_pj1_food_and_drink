@extends('web.layout.app')
@section('title', 'Products')
@section('content')

	<!--title-bar start-->
	<section class="title-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="left-title-text">
					<h3>Meal Detail View</h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-title-text">  
						<ul>
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item"><a href="meals.html">All Meals</a></li>
							<li class="breadcrumb-item active" aria-current="page">Meal Detail View</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--title-bar end-->	
	<!--meal-detail-start-->
	<section class="all-partners">			
		<div class="container">		
			<div class="row">					
				<div class="col-lg-8 col-md-8">
					<div id="sync1" class="owl-carousel owl-theme">
						<div class="item">
                        <img src="/storage/img/{{$product->image}}" alt="">
						</div>			
					</div>
					
					<div class="resto-meal-dt">
						<div class="resto-detail">
							<div class="resto-picy">
								<a href="restaurant_detail.html"><img src="images/restaurant-detail/logo-10.jpg" alt=""></a>
							</div>
							<div class="name-location">
								<a href="restaurant_detail.html"><h1>Restaurant Name</h1></a>
								<p><span><i class="fas fa-map-marker-alt"></i></span>Sidney, Australia</p>
							</div>
						</div>
						<div class="right-side-btns">
							<div class="bagde-dt">
								<div class="partner-badge">
									Partner
								</div>											
							</div>
							<div class="resto-review-stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>								
								<span>4.5/5</span>									
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="right-side">
						<div class="new-heading t-bottom">
							<h1>{{$product->name}}</h1>
						</div>
						<div class="about-meal">
							<h4> Description</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada libero ex, scelerisque suscipit orci tincidunt non. Nulla magna urna, accumsan ac turpis eget, tempor scelerisque sapien. Vivamus porttitor a enim id mattis. Duis volutpat felis sed massa dignissim luctus. Pellentesque a elit quis lacus finibus pellentesque.<span id="dots">..</span><span id="more"> Cras fringilla sollicitudin libero, eu commodo erat aliquet at. Donec euismod odio vitae venenatis blandit. Cras ut purus imperdiet massa viverra pellentesque. Curabitur feugiat luctus feugiat. </span></p>
							<a href="javascript:;" onclick="myFunction()" id="readBtn">See All</a>
						</div>					
						<div class="price">
							<span>$11.00</span>
						</div>
						<div class="dt-detail">
							<ul>
								<li>
									<div class="delivery"><i class="fas fa-shopping-cart"></i>Delivery Free : Free</div>
								</li>
								<li>
									<div class="time"><i class="far fa-clock"></i>Delivery Time : 30 Min</div>
								</li>
							</ul>
						</div>
						<div class="Extra-option">
							<h4> Extras - <ins>(Please select any option)</ins></h4>
							<div class="non-veg">
								<h6>Non Vegetarian</h6>
								<ul class="food-bootom">
									<li>
										<p class="food-left">
											<input type="checkbox" id="c1" name="cb">
											<label for="c1">Non Veg Tikki</label>
										</p>
										<span>$2.00</span>
									</li>
								</ul>
							</div>
							<div class="non-veg j-top">
								<h6>Vegetarian</h6>
								<ul class="food-bootom">
									<li>
										<p class="food-left">
											<input type="checkbox" id="c2" name="cb">
											<label for="c2">Double Allu Tikki</label>
										</p>
										<span>$2.00</span>
									</li>
									<li>
										<p class="food-left">
											<input type="checkbox" id="c3" name="cb">
											<label for="c3">Double Cheese</label>
										</p>
										<span>$2.00</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="Qty">
							<h4> Qty</h4>
							 <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="minus-btn btn-sm" id="minus-btn"><i class="fas fa-minus-square"></i></button>
                                </div>
                                <input type="number" id="qty_input" class="qty-control" value="1" min="1">
                                <div class="input-group-prepend">
                                    <button class="add-btn btn-sm" id="plus-btn"><i class="fas fa-plus-square"></i></button>
                                </div>
                            </div>
						</div>
						<div class="total-cost">
							<div class="total-text">
								<h5>Total</h5>
							</div>
							<div class="total-price">
								<p>$17.00</p>
							</div>
						</div>
						<div class="order-now-check">
							<button class="on-btn btn-link" onclick="">Order Now</button>
						</div>
					</div>
						
				</div>
			</div>			
		</div>
	</section>			
    <!--meal-deail end-->
    
@endsection