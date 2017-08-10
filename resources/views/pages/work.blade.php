@extends('layout.template')
@section('content')
			<div class="page-title title-size-lg text-light">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          How We Work
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
		          		<span property="name">How We Work</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<article class="page">
			  <section class="fw-section padding-top-3x padding-bottom-1x">
			    <div class="container1">
	          <h2 class="block-title text-dark text-center">
	            We Can Do It For You <small class="h4">Listen  Communicate  Deliver </small>
	          </h2>

	          <div class="steps steps-dark">
	            <div class="inner">
	              <div class="step">
	                <h4 class="step-label">
	                  Step 1
	                </h4>

	                <div class="step-body">
	                  <div class="icon-box icon-box-bg-enabled hover-fade text-center">
	                    <span class="icon-box-backdrop" style="background-color: #000000;"></span>
	                    <div class="icon-box-icon">
	                      <img alt="" src="{{asset('logos/Vision.png')}}">
	                    </div>

	                    <h3 class="icon-box-title">
	                      Vision&nbsp;&nbsp;&nbsp;&nbsp;
	                    </h3>

	                {{--     <div class="icon-box-description">
	                      <p class="text-gray">
	                        Maecenas interdum orci dolor, sed faucibus tellus aliquet at.
	                      </p>
	                    </div> --}}
	                  </div>
	                </div>
	              </div>

	              <div class="step">
	                <h4 class="step-label">
	                  Step 2
	                </h4>

	                <div class="step-body">
	                  <div class="icon-box icon-box-bg-enabled hover-fade text-center">
	                    <span class="icon-box-backdrop" style="background-color: #000000;"></span>
	                    <div class="icon-box-icon">
	                      <img alt="" src="{{asset('logos/process.png')}}">
	                    </div>

	                    <h3 class="icon-box-title">
	                      Process
	                    </h3>

	                   {{--  <div class="icon-box-description">
	                      <p class="text-gray">
	                        Maecenas interdum orci dolor, sed faucibus tellus aliquet at.
	                      </p>
	                    </div> --}}
	                  </div>
	                </div>
	              </div>

	             <div class="step">
	                <h4 class="step-label">
	                  Step 3
	                </h4>

	                <div class="step-body">
	                  <div class="icon-box icon-box-bg-enabled hover-fade text-center">
	                    <span class="icon-box-backdrop" style="background-color: #000000;"></span>
	                    <div class="icon-box-icon">
	                      <img alt="" src="{{asset('logos/understanding.png')}}">
	                    </div>

	                    <h3 class="icon-box-title">
	                      Understanding
	                    </h3>

	                   {{--  <div class="icon-box-description">
	                      <p class="text-gray">
	                        Lorem Ipsum Dip
	                      </p>
	                    </div> --}}
	                  </div>
	                </div>
	              </div>
	             <div class="step">
	                <h4 class="step-label">
	                  Step 4
	                </h4>

	                <div class="step-body">
	                  <div class="icon-box icon-box-bg-enabled hover-fade text-center">
	                    <span class="icon-box-backdrop" style="background-color: #000000;"></span>
	                    <div class="icon-box-icon">
	                      <img alt="" src="{{asset('logos/Communicate.png')}}">
	                    </div>

	                    <h3 class="icon-box-title">
	                      Communication
	                    </h3>

	                   {{--  <div class="icon-box-description">
	                      <p class="text-gray">
	                        Lorem Ipsum Dip
	                      </p>
	                    </div> --}}
	                  </div>
	                </div>
	              </div>

	              <div class="step">
	                <h4 class="step-label">
	                  Step 5
	                </h4>

	                <div class="step-body">
	                  <div class="icon-box icon-box-bg-enabled hover-fade text-center">
	                    <span class="icon-box-backdrop" style="background-color: #000000;"></span>
	                    <div class="icon-box-icon">
	                      <img alt="" src="{{asset('logos/Feedback.png')}}">
	                    </div>

	                    <h3 class="icon-box-title">
	                      Feedback
	                    </h3>

	                 {{--    <div class="icon-box-description">
	                      <p class="text-gray">
	                        Lorem Ipsum Dip
	                      </p>
	                    </div> --}}
	                  </div>
	                </div>
	              </div>
	              <div class="step">
	                <h4 class="step-label">
	                  Step 6
	                </h4>

	                <div class="step-body">
	                  <div class="icon-box icon-box-bg-enabled hover-fade text-center">
	                    <span class="icon-box-backdrop" style="background-color: #000000;"></span>
	                    <div class="icon-box-icon">
	                      <img alt="" src="{{asset('logos/plan.png')}}">
	                    </div>

	                    <h3 class="icon-box-title">
	                      Planning
	                    </h3>

	                  {{--   <div class="icon-box-description">
	                      <p class="text-gray">
	                        Lorem Ipsum Dip
	                      </p>
	                    </div> --}}
	                  </div>
	                </div>
	              </div>
	            <div class="step">
	                <h4 class="step-label">
	                  Step 7
	                </h4>

	                <div class="step-body">
	                  <div class="icon-box icon-box-bg-enabled hover-fade text-center">
	                    <span class="icon-box-backdrop" style="background-color: #000000;"></span>
	                    <div class="icon-box-icon">
	                      <img alt="" src="{{asset('logos/Deliver.png')}}">
	                    </div>

	                    <h3 class="icon-box-title">
	                      Deliver
	                    </h3>

	                    {{-- <div class="icon-box-description">
	                      <p class="text-gray">
	                        Lorem Ipsum Dip
	                      </p>
	                    </div> --}}
	                  </div>
	                </div>
	              </div>
	              <div class="step">
	                <h4 class="step-label">
	                  Step 8
	                </h4>

	                <div class="step-body">
	                  <div class="icon-box icon-box-bg-enabled hover-fade text-center">
	                    <span class="icon-box-backdrop" style="background-color: #000000;"></span>
	                    <div class="icon-box-icon">
	                      <img alt="" src="{{asset('logos/Support.png')}}">
	                    </div>

	                    <h3 class="icon-box-title">
	                      Support
	                    </h3>

	                  {{--   <div class="icon-box-description">
	                      <p class="text-gray">
	                        Maecenas interdum orci dolor, sed faucibus tellus aliquet at.
	                      </p>
	                    </div> --}}
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
			  </section>
			{{--WORK SO FAR  --}}

			<section class="fw-section layout-full padding-top-3x padding-bottom-3x " >
				<div class="row">
					<img src="{{asset('logos/work.png')}}" class="single-image">
				</div>
			 </section>

 		  	<section class="fw-section layout-full padding-top-3x padding-bottom-3x" data-offset-top="-10" id="tickets" style="background-color: #000;">
			    <div class="container-fluid">
	          <h2 class="block-title text-light text-center">
	            What We Charge<small class="h4">We work on either an hourly rate, fixed fee or revenue split plus retainer basis.</small>
	          </h2>

	          <div class="row">
	            <div class="col-sm-4">
	              <div>
	                <div class="pricing-plan pricing-plan-v3 text-center">
	                  <div class="inner">
	                    <h3 class="pricing-plan-name">
	                      Under Six Months
	                    </h3>

	                    <div class="pricing-plan-badge-wrap">
	                      <span class="pricing-plan-badge bg-muted">B2C/B2B</span>
	                    </div>

	                    <div class="pricing-plan-features">
	                      <h5 class="pricing-plan-feature-title">
	                        Features
	                      </h5>

	                      <ul class="text-gray">
	                        <li>Assignments under six months we negotiate an hourly rate of fix a price for a clearly defined piece of work.
	                        </li>

	                        <li>Our hourly rates start from £70 plus vat with a minimum value of £2,800.
	                        </li>
	                        <li>Our fixed price contracts are normally between £5,000 and £20,000</li>
	                      </ul>
	                    </div>

	                    <hr>

	                 

	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-sm-4">
	              <div>
	                <div class="pricing-plan pricing-plan-v3 text-center">
	                  <div class="inner">
	                    <h3 class="pricing-plan-name">
	                      Over Six Months
	                    </h3>

	                    <div class="pricing-plan-badge-wrap">
	                      <span class="pricing-plan-badge bg-muted">B2B</span>
	                    </div>

	                    <div class="pricing-plan-features">
	                      <h5 class="pricing-plan-feature-title">
	                        Features
	                      </h5>

	                      <ul class="text-gray">
	                        <li>Long term partnership deals are negotiated individually but typically include a low fixed monthly fee and a revenue split.
	                        </li>

	                        <li>These types of agreements are often linked to revenue performance targets.
	                        </li>
	                      </ul>
	                    </div>

	                    <hr>

	           
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-sm-4">
	              <div>
	                <div class="pricing-plan pricing-plan-v3 text-center">
	                  <div class="inner">
	                    <h3 class="pricing-plan-name">
	                      Twelve Months Plus
	                    </h3>

	                    <div class="pricing-plan-badge-wrap">
	                      <span class="pricing-plan-badge bg-muted">B2C</span>
	                    </div>

	                    <div class="pricing-plan-features">
	                      <h5 class="pricing-plan-feature-title">
	                        Features
	                      </h5>

	                      <ul class="text-gray">
	                        <li>We will also work on an Enablement as a Service (EaaS) basis for certain types of SaaS product implementations that include both business consulting, technical implementation and ongoing support.
	                        </li>

	                        <li>EaaS works on a fixed monthly sum that includes all service activities.
	                        </li>
	                      </ul>
	                    </div>

	                    <hr>

	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
			  </section>

			</article>
@stop