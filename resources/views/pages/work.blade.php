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
			 <section class="fw-section padding-top-2x padding-bottom-1x" style="background-color:#FAEBD7;">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Our Work So Far{{-- <small class="h4">Praesent convallis nibh in odio pellentesque aliquam, vestibulum ipsum felis, porttitor.</small> --}}
	          </h2>
	          <ul class="list-unordered list-bordered text-normal text-bold" style="font-weight:bolder;">
	          	<li> US based Asset Liability Management modelling software marketed throughout Europe for three years before the company was acquired.
				</li>
				<li>US based in-memory multi-dimensional reporting tool marketed in the UK subsequently acquired.</li>
				<li>NZW based operational risk software marketed throughout the world over a three-year period before being acquired.</li>
				<li>Business plan development to raise capital for new restaurant.</li>
				<li>    Business plan development to raise capital for a hotel and conference centre.
</li>
				<li>Business plan development to raise capital for a cloud integration company.</li>
				<li>Business plan development to raise capital for an iBPM/CRM solution.</li>
				<li>Sales & marketing activity and product development of a NOPCommerce based quotation solution.</li>
				<li>    Sales & marketing activity for an Indian based Hospitality PMS .
</li>
				<li>    Research into the ‘student hotel’ market in preparation for marketing campaign for a Germany PMS company.
</li>
				<li>Initial partner and marketer for a large iBPM company prior to them setting up an office in the UK.</li>
				<li>Marketing campaign for a cloud based bookkeeping solution.</li>
				<li>Marketing campaign for a SAP based solution.Web site creation for a specialist silver trading company.</li>
				<li>    Business process mapping for a start-up water treatment company.
</li>
				<li>    Systems architect on banking software.
</li>

				<li>Product Director for a risk management solution.</li>
				<li>Founder and product designer for an operational risk management solution. </li>
				<li>Marketing campaign for an applied cloud based educational service to accountants.</li>
				<li>Marketing campaign for an accountant’s onboarding solution.</li>
				<li>Building Ecosystems around Xero and Receipt Bank cloud solutions.</li>
				<li>Feasibility study into a Configure-Price-Quote solution for professional services.</li>
				<li>CXM market review and building a marketing strategy for the introduction of a VC backed start-up (Cloud/SaaS/AI/NPS)</li>

				<li>Infographic creation for cloud based accountants, profitability forecasting, real-time bookkeeping, student hotels, CXM, Applied cloud educational concept.</li>
				<li>Ebook and articles on cloud based accounting practices.</li>
				<li>Ebook on CXM.</li>
				<li>   Acquisition planning and implementation for four companies with average turnover of £1.5m</li>
				
	          </ul>
	        </div>
			  </section>

			{{--  --}}
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