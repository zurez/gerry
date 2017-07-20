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
	<section class="fw-section padding-bottom-4x">
			    <div class="container">
	          <h4 class="block-title text-dark text-left mobile-center">
	          {{--   With Large Arrows --}}
	          </h4>

	          <div class="image-carousel carousel-navs-rounded carousel-navs-lg carousel-navs-on-sides with-captions slick-initialized slick-slider" data-slick="{&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;fade&quot;:false,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:3000,&quot;adaptiveHeight&quot;:false}"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>


	            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 7980px; transform: translate3d(-1140px, 0px, 0px);" role="listbox">


	            @foreach($images as $e)
	            <figure class="carousel-item wp-caption slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 1140px;" tabindex="-1">
	              <img alt="" src="{{asset('page_images/'.$e)}}">
	              <figcaption class="wp-caption-text">
	                School at Nicaragua
	              </figcaption>
	            </figure>
	              @endforeach  
	            </div>
	            </div>

	            

	            

	            

	            
	          <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></div>
			    </div>
			  </section>
@stop