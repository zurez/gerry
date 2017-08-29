@extends('layout.template')
@section('content')
<style type="text/css">
	.text-dark{
		/*color:white;*/
	}
	.white{
		color: white !important;
	}
	.black{
		/*color: black !important;*/
	}
</style>


 <section class="fw-section bg-parallax padding-top-10x padding-bottom-10x full-height" data-parallax-speed="0.4" data-parallax-type="scale" id="home" style="background-image: url({{asset('assets/img/funding.jpeg')}});">
		      <div class="container">
		        <div class="row">
		          <div class="col-sm-12">
		            <div class="row">
		              <div class="col-sm-12 padding-top-2x">
		                <div class="text-block">
		                  <h1>
		                    <span class="text-light"><span class="text-semibold black">Business Loans:</span> <span class="opacity-150 black">from £25,000 to £1m+</span></span>
		                  </h1>

		                  <h1>
		                    <span class="text-light opacity-150 black">Find the right finance for your business</span>
		                  </h1>

		                  <h5 class="p1">
		                    <span class="s1 text-light opacity-50 black">“We had the opportunity for growth and needed to find appropriate finance, Capitalise’s single application really helped speed up the process.” MD - Medical Distribution Company</span>
		                    <div class="text-center">
		                    	<a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="https://capitalise.com/partners/cognitive-research">Apply Now&nbsp;<i class="material-icons trending_up"></i></a>
		                    </div>
		                  </h5>

		                </div>
		              </div>
		            </div>
		            
		            
		        		
		      
		          </div>

		        </div>
		        
		      </div>
	</section>
  <section class="fw-section"  id="features">
		      <div class="container">
            <h2 class="block-title text-dark text-center" data-aos="fade-up">
             How it works
              {{-- <small class="h4">Aliquam ac mi et ante vestibulum convallis. Fusce non orci elementum, egestas enim ut, sodales orci.</small> --}}
            </h2>

            <div class="row padding-top-1x">
              <div class="col-sm-4">
                <div class="icon-box icon-box-vertical icon-box-dark icon-box-type-image bg-no text-center" data-aos="zoom-in">
                  <div class="icon-box-icon">
                    <img alt="" src="{{asset('assets/img/credit.png')}}">
                  </div>

                  <h3 class="icon-box-title">
                   Check eligibility without affecting your credit score
                  </h3>

                  <div class="icon-box-description">
                    <p style="text-align: center;">
                      {{-- <span class="text-gray">Aliquam ac mi et ante vestibulum convallis. Fusce non orci elementum, egestas enim ut.</span> --}}
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="icon-box icon-box-vertical icon-box-dark icon-box-type-image bg-no text-center" data-aos="zoom-in">
                  <div class="icon-box-icon">
                    <img alt="" src="{{asset('assets/img/form.png')}}">
                  </div>

                  <h3 class="icon-box-title">
                   Fill in an online application form
                  </h3>

                  <div class="icon-box-description">
                    <p style="text-align: center;">
                      {{-- <span class="text-gray">Aliquam ac mi et ante vestibulum convallis. Fusce non orci elementum, egestas enim ut.</span> --}}
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="icon-box icon-box-vertical icon-box-dark icon-box-type-image bg-no text-center" data-aos="zoom-in">
                  <div class="icon-box-icon">
                    <img alt="" src="{{asset('assets/img/advisor.png')}}">
                  </div>

                  <h3 class="icon-box-title">
                  Get a dedicated advisor to work with you
                  </h3>

                  <div class="icon-box-description">
                    <p style="text-align: center;">
                     {{--  <span class="text-gray">Aliquam ac mi et ante vestibulum convallis. Fusce non orci elementum, egestas enim ut.</span> --}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
		    </section>
		     <section class="fw-section padding-top-3x padding-bottom-2x" data-offset-top="180" style="background-image: url({{asset('assets/img/funding2.jpeg')}})">
			    <div class="container">
			      <div class="row">
			        <div class="col-lg-8 col-md-9 col-sm-10">
			          <h2 class="block-title text-dark text-left mobile-center">
			            The Cognitive Advantage
			          </h2>

			          <div class="row">
			            <div class="col-sm-6">
			              <ul class="list-icon list-bordered text-lg text-dark">
			                <li>
			                  <i class="material-icons check_box text-primary"></i>Adpatible<small class="white">Cognitive Research works with SME’s to help grow their business we are professional corporate advisors and as such introducers to a range of lending institutions.</small>
			                </li>

			                <li>
			                  <i class="material-icons check_box text-primary"></i>Compatible<small class="white"> Lending is based on the borrower’s ability to service the loan payments, the type of security available if any, business expertise, together with credit checks on the individuals involved in the application, poor or adverse credit will be considered .</small>
			                </li>

			                <li>
			                  <i class="material-icons check_box text-primary"></i>Dedicated<small class="white">A dedicated professional advisor will manage your application and help develop the best possible business case and associated documentation to assist in the loan application process.</small>
			                </li>
			              </ul>
			            </div>

			            <div class="col-sm-6">
			              <ul class="list-icon list-bordered text-lg text-dark">
			                <li>
			                  <i class="material-icons check_box text-primary"></i>Specialization<small class="white">We specialise in lending transactions over £75,000 that are not property related.</small>
			                </li>

			                <li>
			                  <i class="material-icons check_box text-primary"></i>Security<small class="white">We can complete rapid eligibility checks and identify possible source of funding in a matter of minutes without leaving a credit application footprint.</small>
			                </li>
			                <li>
			                <i class="material-icons check_box text-primary"></i>Take a step<br>
			                <a class="btn btn-solid btn-primary btn-rounded btn-light btn-nl waves-effect waves-light" href="https://capitalise.com/partners/cognitive-research">Apply Now</a>
			                </li>
			              </ul>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>

		    {{-- Products Offered --}}
	  <section class="fw-section" style="background-color: #f5f5f5" data-offset-top="70" id="amenities">
		<div class="container">
	          <hr class="hr-solid hr-primary" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

	          <h2 class="block-title  padding-top-2x mobile-center">
	            Products Offered <small>Some of the products Capitalise offers include:</small>
	          </h2>

	          <div class="row">
	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/asset.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Asset Finance
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Fund any asset, from telephones to forklift trucks, through asset finance.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/invoice.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Invoice Finance
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">If you invoice other businesses, use your invoices to get funding.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/cash.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Merchant Cash Advance
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Use your credit card transactions to get funding.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/trading.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Trade Finance
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Pay for goods based on an order using trade finance.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>

	          <div class="row">
	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/working.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Working Capital
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Get a working capital loan to finance every day operations.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/property.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Property Finance
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Get access to bridging loans, development and commercial finance.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	             <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/franchise.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Franchise Expansion
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Buying into a new franchise or buying out an existing one.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/expansion.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Business Expansion
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Expanding your existing business with new equipment, staff or property.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	           <div class="row">
	           	<div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/management.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Management Buy Outs
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Succession acquisition or a spin-off from a existing business.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/overdraft.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Business Overdrafts
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Borrowing based on a revolving line of credit.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('assets/img/acq.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Business Acquisition
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">Buying your first business or adding to your current portfolio.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>
	        

	           </div>
	          </div>
			    {{-- </div> --}}
			  </section>
			  {{--new capitalise partner  --}}
			    <section class="fw-section with-overlay bg-parallax padding-top-5x padding-bottom-5x" data-parallax-speed="0.4" data-parallax-type="scroll" style="background-image: url({{asset('assets/img/funding4.jpg')}});">
			    <span class="overlay" style="opacity: 0.25; background-color: #000000;"></span>

			    <div class="container">
			      <div class="row">
			        <div class="col-sm-2"></div>

			        <div class="col-sm-6">
			          <div class="text-block">
			            <h1 style="text-align: center;">
			              <span class="text-light">We have partnered with Capitalise</span>
			            </h1>

			            <p style="text-align: center;">
			              <span class="text-light opacity-90 white">Cognitive Research has partnered with Capitalise to make it easy for businesses to access funding. Capitalise created a platform where businesses can find, compare and select the right lender in less than 3 minutes. Not only will you find lenders who specialise in your industry but you’ll also find lenders most likely to give you an offer.</span>
			            </p>
			          </div>

			          <div class="text-center">
			            <a class="btn btn-transparent btn-primary btn-rounded btn-light btn-nl waves-effect waves-light" href="https://capitalise.com/partners/cognitive-research">Apply Now</a>
			          </div>
			        </div>

			        <div class="col-sm-3"></div>
			      </div>
			    </div>
			  </section>
			  {{-- Ends  --}}
			  {{-- Capitalise partner --}}
			  {{--<section class="fw-section layout-full section-no-gap padding-top-3x" data-offset-top="180">
		      <div class="container-fluid">
		        <div class="row">
		          <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0" data-aos="fade-right">
		            <div class="row vc_custom_1476452768081">
		              <div class="col-sm-12 mobile-center">
		                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
		                  <div class="wpb_wrapper">
		                    <div class="padding-top-4x visible-lg visible-md">
		                    </div>
		                  </div>
		                </div>

		                <h2 class="block-title text-dark text-left mobile-center" style="color: black">
		                  We have parterned with Capitalise<small class="h4">Find the right funding for your business</small>
		                </h2>

		                <div class="text-block padding-bottom-1x">
		                  <p>
		                    <span class="text-gray">Cognitive Research has partnered with Capitalise to make it easy for businesses to access funding. Capitalise created a platform where businesses can find, compare and select the right lender in less than 3 minutes.  Not only will you find lenders who specialise in your industry but you’ll also find lenders most likely to give you an offer.</span>
		                  </p>
		                </div>
		               
		                <a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="https://capitalise.com/partners/cognitive-research">Apply Now&nbsp;<i class="material-icons trending_up"></i></a>
		             
		                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
		                  <div class="wpb_wrapper">
		                    <div class="padding-bottom-3x visible-xs">
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>

		          <div class="col-sm-6" data-aos="fade-left">
		            <img alt="" data-aos="" src="{{asset('assets/img/rocketman.png')}}">
		          </div>
		        </div>
		      </div>
		    </section>--}}

		    <section class="fw-section layout-full section-no-gap vc_custom_1476466696938" data-offset-top="180">
		      <div class="container-fluid">
          	<hr class="hr-solid hr-primary" data-aos="none" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
		      </div>
		    </section>
			  {{-- END --}}
			  {{-- Lender --}}
			  <section class="fw-section padding-top-3x padding-bottom-3x" data-offset-top="82" id="clients">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-12">
			          <h2 class="block-title text-dark text-center" style="color: black;">
			            We have access to over 80+ lenders!
			          </h2>

			          <div class="row">
			            <div class="col-sm-12 col-xs-12">
			              <img alt="" class="single-image attachment-full size-full" data-aos="" src="{{asset('assets/img/lenders.png')}}">
			            </div>

			          
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>
			  {{-- New help box --}}
			  <section class="fw-section bg-parallax padding-top-2x padding-bottom-2x mobile-center" data-parallax-speed="0.4" data-parallax-type="scroll" style="background-image: url(../assets/img/shortcodes/cw-cta-bg.jpg);">
			    <span class="overlay" style="opacity: 0.65; background-color: #000000;"></span>

			    <div class="container">
			      <div class="row">
			        <div class="col-sm-9 padding-top-1x">
			          <div class="text-block vc_custom_1478637871769" data-aos="fade-up-left">
			            <p class="lead">
			              <span class="text-light">Funding success requires more than just completing an application. You’ll need to provide information that is easily understood and attractive to lenders. We can support you in all stages of the funding process and position your company in the best possible light for securing finance. </span>
			            </p>
			          </div>
			        </div>

			        <div class="col-sm-3 text-right mobile-center margin-top-1x">
			          <div class="text-inline" data-aos="fade-up-right">
			            <a class="btn btn-solid btn-primary btn-rounded btn-primary btn-nl waves-effect waves-light" href="https://capitalise.com/partners/cognitive-research">Apply Now&nbsp;<i class="material-icons trending_up"></i></a>
			            <div class="text-center white">&nbsp;&nbsp;-OR-</div>
			            <div class="text-inline">
			            <a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="{{url('contact')}}">Contact Us&nbsp;<i class="material-icons email"></i></a>
			                      {{-- <span class="text-gray">F: (8610) 66573553</span> --}}
			            </div>

			          </div>
			        </div>
			      </div>
			    </div>
			  </section>
			  {{-- Ends --}}
			   

@stop