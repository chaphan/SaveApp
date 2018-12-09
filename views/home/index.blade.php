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
				        <li class=""><a href="#service">Services</a></li>
				        <li class=""><a href="#about">About</a></li>
				        <li class=""><a href="#testimonial">Testimonial</a></li>
				        <li class=""><a href="#contact">Contact</a></li>
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
							<h1 class="white">Healthcare at your desk!!</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#about" class="btn btn-dark btn-lg">SHOP</a>
                            <a href="#about" class="btn btn-dark btn-lg">WHAT WE DO</a>
						</div>
						<div class="overlay-detail text-center">
			               <a href="#service"><i class="fa fa-angle-down"></i></a>
			             </div>		
					</div>
				</div>
			</div>
		</div>
    </section>
    
@endsection
@section('js')

    @include('layouts.js-includes')
    
@endsection