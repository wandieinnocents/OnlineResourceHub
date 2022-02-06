@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')
<!-- content  -->

<!--================Slider Area =================-->
@include('frontend.includes_frontend.slider')
		<!--================End Slider Area =================-->
        



		

		<!-- Products Section -->
		<section class="products-section">
			<div class="auto-container">

				<!-- Sec Title -->
				<div class="sec-title centered">
					<h2>Our Food Menu</h2>
				</div>

				<!-- MixitUp Galery -->
				<div class="mixitup-gallery">

					<!--Filter-->
					<div class="filters clearfix">
						<ul class="filter-tabs filter-btns clearfix">
							<li class="active filter" data-role="button" data-filter="all">All</li>
							<li class="filter" data-role="button" data-filter=".chicken">Chicken</li>
							<li class="filter" data-role="button" data-filter=".pizza">Pizza</li>
						</ul>
					</div>

					<div class="filter-list row clearfix">
						<!-- Products Block -->
						@foreach($foodmenus as $foodmenu)
						<div class="product-block all mix salad fest wraps foods col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/1.jpg" alt="">
								</figure>
								<div class="lower-content">
								<span class="badge badge-pill badge-primary">{{ $foodmenu->foodmenu_category_r->foodmenu_category_name }}</span>
									<h4><a href="shop-single.html">{{ $foodmenu->foodmenu_name }}</a> </h4>
									<div class="text">{{ $foodmenu->foodmenu_description }}</div>
									<!-- <div class="price">${{ $foodmenu->foodmenu_price }}</div> -->
									<div class="lower-box">
										<!-- <a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a> -->
									</div>
								</div>
							</div>
						</div>
						@endforeach

						<!-- Chicken - Products Block -->
						@foreach($foodmenus_chicken_categories as $foodmenu)
							<div class="product-block all mix chicken col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
									<figure class="image-box">
										<img src="{{ asset($foodmenu->foodmenu_photo) }}" alt="">
									</figure>
									<div class="lower-content">
									<span class="badge badge-pill badge-primary">{{ $foodmenu->foodmenu_category_r->foodmenu_category_name }}</span>
										<h4><a href="shop-single.html">{{ $foodmenu->foodmenu_name }}</a> </h4>
										<div class="text">{{ $foodmenu->foodmenu_description }}</div>
										<div class="price">${{ $foodmenu->foodmenu_price }}</div>
										<div class="lower-box">
											<!-- <a href="shop-single.html" class="theme-btn btn-style-five"><span
													class="txt">Order Now</span></a> -->
										</div>
									</div>
								</div>
							</div>
						@endforeach

						<!-- Pizza products block -->
						<!-- Chicken - Products Block -->
						@foreach($foodmenus_pizza_categories as $foodmenu)
							<div class="product-block all mix pizza col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
									<figure class="image-box">
										<img src="assets/frontend_assets/assets/images/resource/products/1.jpg" alt="">
									</figure>
									<div class="lower-content">
									<span class="badge badge-pill badge-primary">{{ $foodmenu->foodmenu_category_r->foodmenu_category_name }}</span>
										<h4><a href="shop-single.html">{{ $foodmenu->foodmenu_name }}</a> </h4>
										<div class="text">{{ $foodmenu->foodmenu_description }}</div>
										<div class="price">${{ $foodmenu->foodmenu_price }}</div>
										<div class="lower-box">
											<!-- <a href="shop-single.html" class="theme-btn btn-style-five"><span
													class="txt">Order Now</span></a> -->
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>

				</div>

			</div>
		</section>
		<!-- End Products Section -->

		<!-- Order Section -->
		<section class="order-section" style="background-image: url(assets/frontend_assets/assets/images/background/1.jpg)">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Empty Column -->
					<div class="empty-column col-lg-5 col-md-12 col-sm-12">

					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="offer">Exclusive Offer</div>
							<h1>Vegetable Pizza</h1>
							<div class="order-price">
								<div class="price-inner">
									<div class="price"><sup>$</sup>20<sub>Each</sub></div>
									<ul class="order-offer">
										<li>- Vegetable Spice</li>
										<li>- Summer Pizza</li>
										<li>- Vegge Lover</li>
									</ul>
								</div>
							</div>
							<!-- <a href="shop-single.html" class="theme-btn btn-style-two"><span class="txt">Order
									Now</span></a> -->
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Order Section -->

		<!-- Services Section -->
		<section class="services-section style-two">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-1.png" alt="" />
							</div>
							<h6>Reliable</h6>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-2.png" alt="" />
							</div>
							<h6>Consistent</h6>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-3.png" alt="" />
							</div>
							<h6>Variety of Dishes</h6>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-4.png" alt="" />
							</div>
							<h6>Timely</h6>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Services Section -->
		@endsection