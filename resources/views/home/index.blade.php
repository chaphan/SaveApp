@extends('home.main')

@section('css')
    @include('layouts.css-includes')
@endsection

@section('content')

<section id="banner" class="banner">
		<div class="bg-color">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			  	<div class="col-md-12">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
                      <a class="navbar-brand" href="#">BahoNeza</a>
				    </div>
				    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="#banner">Home</a></li>
				        <li class=""><a href="#service">Shop</a></li>
				        <li class=""><a href="#testimonial">Investment</a></li>
                          <li class=""><a href="#about">About</a></li>
                          <li class=""><a href="#contact">Login</a></li>
                      </ul>
				    </div>
				</div>
			  </div>
			</nav>
<div class="container">
	<div class="row">
		<div class="banner-info">
			<div class="banner-logo text-center">
				<!-- <img src="img/logo.png" class="img-responsive"> -->
			</div>
			<div class="banner-text text-center">
				<h1 class="white" style="font-family: 'Chewy', cursive; text-transform: none;">BahoNeza</h1>
				<p style="font-weight: 600; font-size: 18pt;
line-height: 1.5;color: #faf0e6;">
                    When equipped with the right tools, Refugees can improve their lives,<BR> contribute to country's economy,
                    create new jobs and fuel growth!
                </p>
                <a href="#shop" class="btn btn-dark btn-lg">SHOPPING</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#about" class="btn btn-dark btn-lg">INVEST</a>
            </div>
			<div class="overlay-detail text-center">
				<a href="#shop"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<div role="main" class="main shop" id="shop">

    <div class="container">

        <hr class="tall">

        <div class="row">
            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-6">
                        <h1 class="shorter"><strong>Shop</strong></h1>
                    </div>
                </div>

                <div class="row">

                    <ul class="products product-thumb-info-list" data-plugin-masonry data-plugin-options='{"layoutMode": "fitRows"}'>
                        <li class="col-md-4 col-sm-6 col-xs-12 product">
                            <span class="product-thumb-info">
											<a href="shop-product-sidebar.html">
												<span class="product-thumb-info-image">
													
													<img alt="" class="img-responsive" src="{{asset('img/2.jpg')}}">
												</span>
											</a>
											<span class="product-thumb-info-content">
												<a href="shop-product-sidebar.html">
													<h4>Kitenge Bag</h4>
													<span class="price">
														<del><span class="amount">RWF 8000</span></del>
														<ins><span class="amount">RWF 5000</span></ins>
													</span><button class="btn-sm btn-success">Add To Cart</button>
												</a>
											</span>
										</span>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="shop-product-sidebar.html">
												<span class="product-thumb-info-image">
													<img alt="" class="img-responsive" src="{{asset('img/8.jpg')}}">
												</span>
											</a>
											<span class="product-thumb-info-content">
												<a href="shop-product-sidebar.html">
													<h4>Agaseke</h4>
													<span class="price">
														<span class="amount">RWF 7400</span>
													</span>
                                                    </span><button class="btn-sm btn-success">Add To Cart</button>
												</a>
											</span>
										</span>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 product">
										<span class="product-thumb-info">

											<a href="shop-product-sidebar.html">
												<span class="product-thumb-info-image">

													<img alt="" class="img-responsive" src="{{asset('img/7.jpg')}}">
												</span>
                            </a>
                            <span class="product-thumb-info-content">
												<a href="shop-product-sidebar.html">
													<h4>Bamboo Can</h4>
													<span class="price">
														<span class="amount">RWF 8000</span>
													</span>
                                            </a>
                                                    </span><button class="btn-sm btn-success">Add To Cart</button>
											</span>
										</span>
                        </li>
                    </ul>

                </div>

            </div>
            <div class="col-md-3">
                <aside class="sidebar">
                    <h5>Top Rated Products</h5>
                    <ul class="simple-post-list">
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="shop-product-sidebar.html">
                                        <img alt="" width="60" height="60" class="img-responsive" src="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="shop-product-sidebar.html">AGRICULTURE</a>

                            </div>
                        </li>
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="shop-product-sidebar.html">
                                        <img alt="" width="60" height="60" class="img-responsive" src="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="shop-product-sidebar.html">HANDICRAFTS</a>
                            </div>
                        </li>
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="shop-product-sidebar.html">
                                        <img alt="" width="60" height="60" class="img-responsive" src="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="shop-product-sidebar.html">ARTS</a>

                            </div>
                        </li>
                    </ul>

                </aside>
            </div>
        </div>
    </div>

</div>
@endsection
@section('js')

    @include('layouts.js-includes')
    
@endsection