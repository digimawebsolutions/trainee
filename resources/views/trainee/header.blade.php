@extends('trainee.flat')
@section('title')
    Flat Design
@endsection
@section('custom_css')
	<link rel="stylesheet" href="{{ URL::to('assets/sass/style.css') }}">
@endsection
@section('header')
	<nav class="navbar navbar-fixed-top nav_color">
	  <div class="container">
	    <div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="fa fa-bars" id="nav-i"></span>
	         </button>
	      	<a class="navbar-brand" href="#">Digima House</a>
	    </div>
		    <div id="navbar" class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
			      <li><a href="#">Business Plan</a></li>
			      <li><a href="#">Support</a></li>
			    </ul>
			    <ul class="nav navbar-nav navbar-right" >
			      <li>
			      	<button class="btn btn-default" id="nav-button" type="get">Sign In</button>
			      </li>
			    </ul>
			</div>
	  </div>
	</nav>
@endsection
@section('carousel')
<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <img src="{{ URL::to('assets/img/carousel1.jpg') }}" alt="Los Angeles">
	    </div>

	    <div class="item">
	      <img src="{{ URL::to('assets/img/carousel3.jpg') }}" alt="Chicago">
	    </div>

	    <div class="item">
	      <img src="{{ URL::to('assets/img/carousel4.jpg') }}" alt="New York">
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    
	  </a>
	</div>
</div>
@endsection
@section('content')
<div class="content1">
	<div class="container">
		<ul>
			<li><a href="#">Plans & Pricing</li>
			<li><a href="#">Why QBO</li>
			<li><a href="#">QB Destop User?</li>
			<li><a href="#">Add-on Apps</li>
		</ul>
	</div>
</div>
@endsection
