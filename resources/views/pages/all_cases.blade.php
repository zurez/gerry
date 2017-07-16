@extends('layout.template')
@section('content')
			<div class="page-title title-size-lg text-light">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          Case Studies
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
		          		<span property="name">Case Studies</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<article class="page">
			  <section class="fw-section padding-top-3x padding-bottom-2x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Some Exclusive Cases<small class="h4">Explore the clients we’ve worked with and dive into their success stories.</small>
	          </h2>

	  
	          <div class="portfolio-posts masonry-grid col-3 filter-grid" id="grid">
	            <div class="gutter-sizer"></div>
	            <div class="grid-sizer"></div>
	            @foreach($case as $c)
	            <div class="grid-item case-study cloud financial">
	              <article class="portfolio-tile">
	              <?php
	              $rawi=unserialize($c->images)[0];
	              $img=asset('page_images/'.$rawi);
	              $title=$c->title;
	              ?>
	                <a class="portfolio-thumb" href="#"><img alt="" src="{{$img}}"></a>
	                
	                <div class="portfolio-info">
	                  <h3 class="portfolio-title">
	                    <a href="#">{{$title}}</a>
	                  </h3>
	                  
	                  <a class="btn btn-sm btn-primary btn-ghost" href="{{url('case',$c->id)}}">View Project</a>
	                </div>
	              </article>
	            </div>
	            @endforeach
	         
	          </div>
			    </div>
			  </section>


			</article>

@stop