@extends('layout.template')
@section('content')
	<?php
		$images=unserialize($case->images);
	?>
	<div class="page-title title-size-lg text-light">
	  <div class="container">
	    <div class="inner">
	      <div class="column">
	        <h1>
	          {{$case->title or 'Client Name Missing'}}
	        </h1>
	      </div>

	      <div class="column">
	        <div class="breadcrumbs">
	          <span>
	          	<a href="#">
	          		<span property="name">Home</span>
	          	</a>
	          </span>

          	<i class="material-icons keyboard_arrow_right"></i>

          	<span property="itemListElement" typeof="ListItem">
          		<span property="name">{{$case->title or 'Client Name Missing'}}</span>
          	</span>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<section class="fw-section layout-full section-no-gap padding-bottom-5x">
			    <div class="container-fluid">
	          <div class="image-carousel carousel-navs-rounded carousel-navs-sm carousel-navs-on-sides carousel-dark carousel-dots-outside carousel-dots-center without-captions" data-slick='{"arrows":true,"dots":true,"fade":false,"infinite":true,"autoplay":false,"autoplaySpeed":3000,"adaptiveHeight":false}'>

	          @foreach($images as $i)
	            <figure class="carousel-item">
	              <img alt="" src="{{asset('page_images/'.$i)}}">
	            </figure>
	          @endforeach
	          </div>
			    </div>
			  </section>

@stop