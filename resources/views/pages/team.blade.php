@extends('layout.template')
@section('content')
				<div class="page-title title-size-lg text-light">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          Team
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
		          		<span property="name">Team</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
			<article class="page">
			  <section class="fw-section bg-parallax" data-parallax-speed="0.4" data-parallax-type="scroll" style="background-image: url({{asset('assets/img/ms-careers-hero.jpg')}}); height: 100vh;">

			    <div class="container">
			      <div class="row">
			        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 padding-top-6x">
	              <div class="padding-top-10x visible-lg"></div>
	              <div class="padding-top-9x visible-sm visible-md"></div>
	              <div class="padding-top-8x visible-xs"></div>

			          <div class="text-block">
			            <h1 style="text-align: center;">
			              <span class="text-thin text-light">Cognitive Require Awesome People</span>
			            </h1>

			            <h4 style="text-align: center;">
			              <span class="text-light opacity-50 text-thin">With a passion for growth.</span>
			            </h4>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>
			  <?php 
			  $quote_bg=asset('assets/img/ms-quote-bg.jpg');
			  ?>
			  <section class="fw-section layout-full padding-top-3x padding-bottom-3x " style="background-color: #3C4252">
			    <div class="container-fluid">
			      <div class="row">
			        <div class="col-lg-4 col-md-4 col-sm-5">
			          <h2 class="block-title text-light text-left">
			            Join Our Family<small class="h4">Some words From our CEO</small>
			          </h2>
			        </div>

			        <div class="col-lg-5 col-md-8 col-sm-7">
			          <div class="testimonial testimonial-ava-circle text-light text-left">
			            <div class="testimonial-body">
			              <h4>
			                <span class="text-light">Experience and adaptability matters, one day we might be marketing the world’s greatest cloud based performance management system the next acting as a non-executive directors to a waste management company</span>
			              </h4>
			            </div>

			            <div class="testimonial-cite">
			              <div class="testimonial-author-info">
			              </div>
			            </div>
			          </div>
			          <img alt=" " src="assets/img/ms-quote-signature-300x115.png">
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section layout-full-equal section-no-gap" style="background-color: #f5f5f5">
			    <div class="container-fluid">
			      <div class="row">
			        <div class="col-lg-6 col-md-6 col-sm-12 split-image" style="background-image: url(assets/img/ms-split-01.jpg);"></div>

			        <div class="col-lg-6 col-md-6 col-sm-12 " style="padding-left: 3% !important; padding-right: 3% !important;">
			          <div class="row padding-top-4x padding-bottom-4x split-section">
			            <div class="col-sm-12">
			              <div class="text-block">
			                <h2>
			                  <span class="text-thin">Creating business is easy when you have the expertise.</span>
			                </h2>

			                <h4>
			                  <span class="text-gray">We are a team of professional business owners, sales and marketing consultants, own with tested, practical experience in growing businesses through effective partnerships.  That partnership could be with a software vendor looking to expand into EMEA or partnerships with SME’s that we acquire to build strategy and future growth, that often means managing change and delivering successful business transformation..</span>
			                </h4>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-12 hidden-lg hidden-md">
			          <hr class="hr-solid hr-primary " style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section layout-full-equal section-no-gap">
			    <div class="container-fluid">
			      <div class="row">
			        <div class="col-lg-6 col-md-6 col-sm-12 " style="padding-left: 3% !important; padding-right: 3% !important;">
			          <div class="row padding-top-4x padding-bottom-4x split-section">
			            <div class="col-sm-12">
			              <div class="text-block">
			                <h2>
			                  <span class="text-thin">The only competition we care about is ourselves</span>
			                </h2>

			                <h4>
			                  <span class="text-gray"> You need capable and reliable people. On average, a Cognitive consultant has spent at least fifteen to twenty years working in their chosen field before joining the team.We also guarantee open and healthy communication at all times. Our independence of thought is vital in enabling us to give you additional viewpoints when you need them.</span>
			                </h4>
			              </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-lg-6 col-md-6 col-sm-12 split-image " style="background-image: url(assets/img/ms-split-02.jpg)"></div>
			      </div>
			    </div>
			  </section>


			</article>
@stop