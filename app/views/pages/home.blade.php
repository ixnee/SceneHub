{{--

 Author:          Lisa Balogh
 Revision Date:   May 7, 2014
 File Name:       home.blade.php
 Description:     Renders the home page content

--}}

@extends('layouts.default')

@section('title')
	 | Home
@stop

@section('content')
<!-- Carousel -->
<div id="carousel-home" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-home" data-slide-to="1"></li>
    <li data-target="#carousel-home" data-slide-to="2"></li>
    <li data-target="#carousel-home" data-slide-to="3"></li>
    <li data-target="#carousel-home" data-slide-to="4"></li>
    <li data-target="#carousel-home" data-slide-to="5"></li>
    <li data-target="#carousel-home" data-slide-to="6"></li>
    <li data-target="#carousel-home" data-slide-to="7"></li>
    <li data-target="#carousel-home" data-slide-to="8"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
    	<div class="carousel-caption">
        <h1>Connect with your scene</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="first-slide" src="images/home_slider/hooper.jpg" alt="Hooper">
		</div>
    <div class="item">
    	<div class="carousel-caption">
        <h1>Join the community</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="second-slide" src="images/home_slider/dj_arms_up.jpg" alt="Dj with arms up">
		</div>
    <div class="item">
	    <div class="carousel-caption">
        <h1>Never miss a show</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="third-slide" src="images/home_slider/hoop_crowd.jpg" alt="Hoop in crowd">
		</div>
    <div class="item">
    	<div class="carousel-caption">
        <h1>Follow your favorite djs</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="fourth-slide" src="images/home_slider/dj_booth.jpg" alt="Dj at booth">
		</div>
    <div class="item">
    	<div class="carousel-caption">
        <h1>Get involved</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="fifth-slide" src="images/home_slider/psytrance.jpg" alt="Psytrance dj">
		</div>
    <div class="item">
    	<div class="carousel-caption">
        <h1>Connect with your scene</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="sixth-slide" src="images/home_slider/crowd.jpg" alt="Crowd">
		</div>
    <div class="item">
    	<div class="carousel-caption">
        <h1>Join the community</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="seventh-slide" src="images/home_slider/dj_intense.jpg" alt="Intense dj">
		</div>
    <div class="item">
    	<div class="carousel-caption">
        <h1>Never miss a show</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="eighth-slide" src="images/home_slider/hoop_lights.jpg" alt="Lights from hoop">
		</div>
    <div class="item">
    	<div class="carousel-caption">
        <h1>Follow your favorite djs</h1>
        <p><a class="btn btn-lg btn-default" href="/login" role="button">Login / Register</a></p>
      </div>
			<img class="ninth-slide" src="images/home_slider/dj_laptop.jpg" alt="Laptop dj">
		</div>
</div><!-- end carousel -->

@stop