@section('page_name'){{ 'Home' }}@endsection

@include('themes.default.inc.header')

		<!-- =====================================
	    	==== Start slider -->
		<div class="slider slider_slick stick-dots">
		 	<!--  slide1 -->
		    <div class="slide">
		      <div class="slide__img section-bg" style="background-image:url(/themes/{{env('THEME_NAME')}}/assets/images/slider/home3_slider1.jpg)">
		        <img src="" alt="" data-lazy="/themes/{{env('THEME_NAME')}}/assets/images/slider/home3_slider1.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
		      </div>
		      <div class="slide__content">
		      	<div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">layStorerim</div>
		        <div class="slide__content--headings">
		           <h2 class="animated bg-text" data-animation-in="fadeInUp">Costume Rim</h2>
		        </div>
		        <div class="slide__content--headings">
		        	<h3 class="animated bg-text" data-animation-in="fadeInUp">Battle Quest</h3>
		        </div>
		        <div class="shopnow animated" data-animation-in="fadeInUp">
			         <a href="product_grid.html" class="mt-40 btn btn-features btn-primary">Shop now</a>
			    </div>
		      </div>
		    </div>
		    <!--  slide2 -->
		    <div class="slide">
		      <div class="slide__img section-bg" style="background-image:url(/themes/{{env('THEME_NAME')}}/assets/images/slider/home3_slider2.jpg)">
		        <img src="" alt="" data-lazy="/themes/{{env('THEME_NAME')}}/assets/images/slider/home3_slider2.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
		      </div>
		      <div class="slide__content">
		      	<div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">layStorerim</div>
		        <div class="slide__content--headings">
		           <h2 class="animated bg-text" data-animation-in="fadeInUp">Costume Rim</h2>
		        </div>
		        <div class="slide__content--headings">
		        	<h3 class="animated bg-text" data-animation-in="fadeInUp">Battle Quest</h3>
		        </div>
		        <div class="shopnow animated" data-animation-in="fadeInUp">
			         <a href="product_grid.html" class="mt-40 btn btn-features btn-primary">Shop now</a>
			    </div>
		      </div>
		    </div>
		     <!--  slide3 -->
		    <div class="slide">
		      <div class="slide__img section-bg" style="background-image:url(/themes/{{env('THEME_NAME')}}/assets/images/slider/home3_slider3.jpg)">
		        <img src="" alt="" data-lazy="/themes/{{env('THEME_NAME')}}/assets/images/slider/home3_slider3.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
		      </div>
		      <div class="slide__content">
		      	<div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">layStorerim</div>
		        <div class="slide__content--headings">
		           <h2 class="animated bg-text" data-animation-in="fadeInUp">Costume Rim</h2>
		        </div>
		        <div class="slide__content--headings">
		        	<h3 class="animated bg-text" data-animation-in="fadeInUp">Battle Quest</h3>
		        </div>
		        <div class="shopnow animated" data-animation-in="fadeInUp">
			         <a href="product_grid.html" class="mt-40 btn btn-features btn-primary">Shop now</a>
			    </div>
		      </div>
		    </div>
		</div>

		<!-- End slider ====
	    	======================================= -->


	    <!-- Start features_icon ====
	    	======================================= -->
		<section class="features border-bottom">
			<div class="container">
				<div class="row">
		    		<div class="features_list col-md-4">
						<div class="features-images">
							<img src="/themes/{{env('THEME_NAME')}}/assets/images/feature/icon_feature_1.png" alt="">
						</div>
						<div class="features-description">
							<h4>Free Pickup in store</h4>
							<div>
								Save time and mOne1y when you buy online
								and pick up in store.
							</div>
						</div>
					</div>
					<div class="features_list col-md-4">
						<div class="features-images">
							<img src="/themes/{{env('THEME_NAME')}}/assets/images/feature/icon_feature_2.png" alt="">
						</div>
						<div class="features-description">
							<h4>Free Shipping</h4>
							<div>
								on most orders of $25 or more
							</div>
						</div>
					</div>
					<div class="features_list col-md-4">
						<div class="features-images">
							<img src="/themes/{{env('THEME_NAME')}}/assets/images/feature/icon_feature_3.png" alt="">
						</div>
						<div class="features-description">
							<h4>Bonus Points Offers</h4>
							<div>
								Earn loyaty points every time you shop in-store
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End slider ====
	    ======================================= -->

		<!-- =====================================
	    	==== Start Featured Products  -->
	    <section class="products">
	    	<div class="container">
		    	<div class="heading text-center">
		    		<div class="heading__sub">Over Million part available</div>
		    		<h2 class="heading__title">Featured Products</h2>
		    	</div>
		    	<ul class="columns columns-6">
					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_1.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">CAfter Shave Balm, 4 fl. oz.</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>

					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_3.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Super Drinking YoungBoy</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>
					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_4.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Burnout New Vegas Paradise</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>
					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_5.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Burnout New Vegas Paradise</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>
					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_6.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Homefront Modern Warfare</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>
					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_2.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Revolution Darkside Resol</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>
				</ul>
		    </div>
	    </section>
		<!-- =====================================
	    	==== End Featured Products -->

		<!-- =====================================
	    	==== Start section-banner  -->
        <section class="section-banner">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-6">
						<div class="banner-image">
							<div class="banner-image-inner">
							   <img src="/themes/{{env('THEME_NAME')}}/assets/images/banner_1.jpg" alt="">
							</div>
							<div class="banner-meta text-white">
								<h3 class="banner-meta__heading text-uppercase text-white">Sale off 50%</h3>
								<p class="banner-meta__description d-none d-lg-block  text-white">Just enter<span class="color-primary">Punibor</span>as a <br/> discout code</p>
								<a href="product_grid.html" class="btn btn-primary text-uppercase">shop now!</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="banner-image">
							<div class="banner-image-inner">
							   <img  src="/themes/{{env('THEME_NAME')}}/assets/images/banner_2.jpg" alt="">
							</div>
							<div class="banner-meta text-white">
								<h3 class="banner-meta__heading text-uppercase text-white">Sale off</h3>
								<h4 class="banner-meta__sale text-uppercase d-none d-lg-block text-white">35% off</h4>
								<a href="product_grid.html" class="btn btn-primary text-uppercase">shop now!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =====================================
	    	==== End section-banner -->

		<!-- =====================================
	    	==== Start Best seller  -->
	    <section class="products">
	    	<div class="container">
		    	<div class="heading text-center">
		    		<div class="heading__sub">For all Contemporary Stores</div>
		    		<h2 class="heading__title">Best seller</h2>
		    	</div>
		    	<ul class="columns columns-4">
					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_1.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Costume Battle Quest</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>

					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_3.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Super Drinking YoungBoy</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>
					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_4.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Burnout New Vegas Paradise</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>
					<li class="item-product">
						<div class="product-block">
							<div class="product-image ">
								<div class="product-thumbnail">
									<a href="product_single.html" title="">
										<img class="product-featured-image" src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_5.jpg" alt="">
									</a>
								</div>
								<div class="product-actions">
									<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
									<i class="fa fa-heart-o"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
									    <i class="fa fa-eye"></i>
									</a>
									<a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
									    <i class="fa fa-retweet"></i>
									</a>
								</div>
							</div>
							<div class="product-caption">
								<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
								<h4 class="product-title">
									<a href="product_single.html" title="">Burnout New Vegas Paradise</a>
								</h4>
								<div class="product-form-cart">
									<div class="product-price">
										<ins>
											<span class="amout">$19.99</span>
										</ins>
										<del>
											<span class="amout">$44.45</span>
										</del>
									</div>
									<a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</li>


				</ul>
		    </div>
	    </section>
		<!-- =====================================
	    	==== End Best seller -->

	    <!-- =====================================
	    	==== Start products list carousel   -->
	    <section class="products products_list">
	    	<div class="container">
	    		<div class="row">
                    <div class="col-lg-4 col-md-12">
				    	<div class="heading style_v2">
				    		<h2 class="heading__title">Xtox One games</h2>
				    	</div>
				    	<div class="product-list product-block-list-carousel">
				    		<div class="owl-carousel owl-theme" data-pagination="false" data-nav="true" data-items="1" data-large="1" data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="false">
					            <div class="item">
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_4.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_2.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>
													<del>
														<span class="amout">$44.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_1.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$9.59</span>
													</ins>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_2.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>
													<del>
														<span class="amout">$44.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_1.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$10.9</span>
													</ins>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_3.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>
													<del>
														<span class="amout">$44.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
				    	<div class="heading style_v2">
				    		<h2 class="heading__title">PCool Stuff games</h2>
				    	</div>
				    	<div class="product-list product-block-list-carousel">
				    		<div class="owl-carousel owl-theme" data-pagination="false" data-nav="true" data-items="1" data-large="1" data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="false">
					            <div class="item">
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_8.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>
													<del>
														<span class="amout">$44.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_7.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$39.79</span>
													</ins>

												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_3.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>
													<del>
														<span class="amout">$44.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_1.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$8.99</span>
													</ins>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_8.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>
													<del>
														<span class="amout">$44.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_4.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
				    	<div class="heading style_v2">
				    		<h2 class="heading__title">laystorerim games</h2>
				    	</div>
				    	<div class="product-list product-block-list-carousel">
				    		<div class="owl-carousel owl-theme" data-pagination="false" data-nav="true" data-items="1" data-large="1" data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="false">
					            <div class="item">
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_5.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>
													<del>
														<span class="amout">$44.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_4.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$25.2</span>
													</ins>
													<del>
														<span class="amout">$44.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_2.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$21.99</span>
													</ins>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_4.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$7.5</span>
													</ins>

												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_3.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$19.99</span>
													</ins>

												</div>
											</div>
										</div>
									</div>
									<div class="product-list__item">
										<div class="inner">
											<a class="product-thumbnail" href="product_single.html">
												<img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_2.jpg" alt="">
											</a>
											<div class="product-content">
												<span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
												<h4 class="product-title">
												<a href="product_single.html">After Shave Balm, 4 fl. oz.</a>
												</h4>
												<div class="product-price">
													<ins>
														<span class="amout">$29.99</span>
													</ins>
													<del>
														<span class="amout">$34.45</span>
													</del>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
	    </section>
		<!-- =====================================
	    	==== End products list carousel   -->

		 <!-- =====================================
	    	==== Start testimonials  -->
		<section class="testimonials section-bg clearfix" style="background-image:url(/themes/{{env('THEME_NAME')}}/assets/images/bg_testimonial.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12"></div>
					<div class="col-lg-7 col-md-12 testimonials_content">
		 				<div class="owl-carousel owl-theme" data-pagination="true" data-nav="false" data-items="1" data-large="1" data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="true">
				            <div class="item">
				             	<div class="testimonial_item">
					                <cite>
					                	Thinking of surnames can be a tedious task, whether the last name is for a character in a fictional book, game or for an alias. I am guessing you are here because you are an author and have found it difficult to think of a good surname.
									</cite>
					                <h3 class="testimonials__name">Norbert Wunsch</h3>
					                <div class="testimonials__job">Developer Front-end</div>
					            </div>
				            </div>
				            <div class="item">
				             	<div class="testimonial_item">
					                <cite>
					                	Thinking of surnames can be a tedious task, whether the last name is for a character in a fictional book, game or for an alias. I am guessing you are here because you are an author and have found it difficult to think of a good surname.
									</cite>
					                <h3 class="testimonials__name">Norbert Wunsch</h3>
					                <div class="testimonials__job">Developer Front-end</div>
					            </div>
				            </div>
				            <div class="item">
				             	<div class="testimonial_item">
					                <cite>
					                	Thinking of surnames can be a tedious task, whether the last name is for a character in a fictional book, game or for an alias. I am guessing you are here because you are an author and have found it difficult to think of a good surname.
									</cite>
					                <h3 class="testimonials__name">Norbert Wunsch</h3>
					                <div class="testimonials__job">Developer Front-end</div>
					            </div>
				            </div>
				        </div>
		 			</div>
				</div>
			</div>
		</section>
		<!-- =====================================
	    	==== End testimonials  -->

@include('themes.default.inc.footer')