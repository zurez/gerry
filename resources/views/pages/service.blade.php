@extends('layout.template')
@section('content')
			<div class="page-title title-size-lg text-light" style="background-image: url(assets/img/demo-marketing-page-title.jpg); background-color:#A12434; ">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          {{$page->title}}
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
		          		<span property="name">{{$page->title}}</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<article class="">
			  <section class="fw-section padding-top-3x padding-bottom-1x">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-8">
			          <div class="row">
			            <div class="col-sm-12">
			              <div class="text-block">
			                <h4>
			                  {{$page->title}}
			                </h4>

			                <p class="text-gray">
			               		{{$page->long_desc}}
			                </p>
			              </div>

			              <figure class="single-image wp-caption">
			                {{-- <img alt="" src="assets/img/demo-marketing-services-01.png"> --}}
			                <figcaption class="wp-caption-text">
			                 {{--  Business Review, November 2017 --}}
			                </figcaption>
			              </figure>
			            </div>

			           
			          </div>

			          <hr class="hr-solid hr-primary" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

			          <div class="row margin-top-2x">
			            <div class="col-sm-12">
			              <div class="testimonial testimonial-ava-circle testimonial-background bg-primary text-light text-left">
			                <div class="testimonial-body">
			                  <p>
			                    {{$page->short_desc}}
			                  </p>
			                </div>

			                <div class="testimonial-cite">
			                  <div class="testimonial-author-ava">
			                    <img alt="" src="assets/img/demo-marketing-services-03.jpg">
			                  </div>

			                  <div class="testimonial-author-info">
			                    
			                  </div>
			                </div>
			              </div>
			            </div>

			            
			          </div>


			
			        </div>

			        <div class="col-sm-4">
	              <section class="widget widget_nav_menu">
	                <h3 class="widget-title">
	                  Other Services
	                </h3>

	                <div class="menu-services-container">
	                  <ul class="menu">
	                  @foreach($services as $s)
	                    <li class="menu-item">
	                      <a href="{{url('service',$s->custom_url)}}">{{$s->title}}</a>
	                    </li>
	                   @endforeach
	                  </ul>
	                </div>
	              </section>
			</article>
@stop