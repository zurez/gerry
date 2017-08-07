@extends('layout.template')
@section('content')
	<?php
		$images=unserialize($case->images);
		asort($images);
		// dump($images)
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
			<div class="row">
				<div class="col-sm-12 text-block">
				<h2>@if($case->pdf!="")
					<a href="{{url('case/pdf/download',$case->id)}}" class="btn btn-ghost btn-pill btn-primary btn-nl waves-effect waves-light">Download</a>
				@else Insight @endif</h2>
				<p class="text-gray" style="padding: 10px;">{{$case->description}}</p>
				
			</div>
			</div>
			<div class="col-sm-row">
				<div class="col-sm-12">
		          <div class="image-carousel carousel-navs-rounded carousel-navs-sm carousel-navs-on-sides carousel-dark carousel-dots-outside carousel-dots-center without-captions" data-slick='{"arrows":true,"dots":true,"fade":false,"infinite":true,"autoplay":false,"autoplaySpeed":3000,"adaptiveHeight":false}'>

		          @foreach($images as $i)
		            <figure class="carousel-item">
		              <img alt="" src="{{asset('page_images/'.$i)}}">
		            </figure>
		          @endforeach
		          </div>

				</div>
			{{-- <div class="col-sm-1"></div> --}}
			</div>


	</section>
</div>
			
@stop