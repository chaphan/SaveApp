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
				
			</div>
		</div>
    </section>
    
@endsection
@section('js')

    @include('layouts.js-includes')
    
@endsection