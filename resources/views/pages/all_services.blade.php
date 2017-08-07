@extends('layout.template')
@section('content')
<div class="page-title title-size-lg text-light">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          Services
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
		          		<span property="name">Services</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<article class="page">
			  <section class="fw-section padding-top-3x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            What We Can Offer You<small class="h4">“the hand that rocks the cradle”</small>
	          </h2>
	          <?php
	          $i=0;
	           $services=DB::table('page')->where('category',"service")->whereNull('deleted_at')->get();
	          ?>

	          <div class="row">
	          @foreach($services as $s)
	          	<?php
	          		$img=$s->logo;
	          	?>
	          	@if($i%4==0)</div><div class="row">@endif
	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('page_images/'.$img)}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    {{$s->title}}
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">{{$s->short_desc}}.</span><br>
	                      <a class="btn btn-sm btn-primary btn-link" href="{{url('service',$s->custom_url)}}" style="padding: 0;">Learn More <i class="material-icons trending_flat"></i></a>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <?php
	            $i++;
	            ?>
	          @endforeach
	         
	          
	          </div>


			    </div>
			  </section>

{{-- 			  <section class="fw-section padding-top-2x padding-bottom-4x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Our Featured Clients<small class="h4">Cras ligula velit, mattis nec ligula vel, laoreet ullamcorper nisl.</small>
	          </h2>

	          <div class="row vc_custom_1478638009824">
	            <div class="col-sm-12">
	              <div class="logo-carousel carousel-navs-ghost carousel-navs-top-outside carousel-dark" data-items-lg="6" data-items-md="5" data-items-sm="3" data-items-xs="1" data-slick='{"dots":true,"arrows":false,"infinite":true,"autoplay":true,"autoplaySpeed":3000}'>
	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-01.png" srcset="assets/img/demo-marketing-logo-01.png 340w, assets/img/demo-marketing-logo-01-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Must Group
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-02.png" srcset="assets/img/demo-marketing-logo-02.png 340w, assets/img/demo-marketing-logo-02-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Alaska
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-03.png" srcset="assets/img/demo-marketing-logo-03.png 340w, assets/img/demo-marketing-logo-03-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Team Agency
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-04.png" srcset="assets/img/demo-marketing-logo-04.png 340w, assets/img/demo-marketing-logo-04-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Sideplain
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-05.png" srcset="assets/img/demo-marketing-logo-05.png 340w, assets/img/demo-marketing-logo-05-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Ministry Group
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-06.png" srcset="assets/img/demo-marketing-logo-06.png 340w, assets/img/demo-marketing-logo-06-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    City Lights
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-07.png" srcset="assets/img/demo-marketing-logo-07.png 340w, assets/img/demo-marketing-logo-07-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    LegalCorp
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-08.png" srcset="assets/img/demo-marketing-logo-08.png 340w, assets/img/demo-marketing-logo-08-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Accounting Gropu
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-09.png" srcset="assets/img/demo-marketing-logo-09.png 340w, assets/img/demo-marketing-logo-09-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Vipster
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-10.png" srcset="assets/img/demo-marketing-logo-10.png 340w, assets/img/demo-marketing-logo-10-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Flytime
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="assets/img/demo-marketing-logo-11.png" srcset="assets/img/demo-marketing-logo-11.png 340w, assets/img/demo-marketing-logo-11-300x85.png 300w">
	                  <h4 class="logo-item-title">
	                    Boost Corp.
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
	                </div>
	              </div>
	            </div>
	          </div>
			    </div>
			  </section> --}}
			</article>
@stop