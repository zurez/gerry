@extends('layout.template')
@section('content')
<style type="text/css">
	.text-dark{
		color:white;
	}
	.white{
		color: white !important;
	}
</style>
 <section class="fw-section bg-parallax padding-top-10x padding-bottom-10x full-height" data-parallax-speed="0.4" data-parallax-type="scale" id="home" style="background-image: url({{asset('assets/img/funding.jpeg')}}); height: 100vh;">
		      <div class="container">
		        <div class="row">
		          <div class="col-sm-12">
		            <div class="row">
		              <div class="col-sm-6 padding-top-2x">
		                <div class="text-block">
		                  <h1>
		                    <span class="text-light"><span class="text-semibold">Business Loans:</span> <span class="opacity-75">from £25,000 to £1m+</span></span>
		                  </h1>

		                  <h1>
		                    <span class="text-light opacity-75">Find the right finance or your business</span>
		                  </h1>

		                  <h5 class="p1">
		                    <span class="s1 text-light opacity-50">We had the opportunity for growth and needed to find appropriate finance, Capitilise’s single application really helped speed up the process.</span>
		                  </h5>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
	</section>
  <section class="fw-section padding-top-4x padding-bottom-2x" data-offset-top="82" id="features">
		      <div class="container">
            <h2 class="block-title text-dark text-center" data-aos="fade-up">
              One quick application seen by multiple lenders
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
                      <span class="text-gray">Aliquam ac mi et ante vestibulum convallis. Fusce non orci elementum, egestas enim ut.</span>
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
                      <span class="text-gray">Aliquam ac mi et ante vestibulum convallis. Fusce non orci elementum, egestas enim ut.</span>
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
                      <span class="text-gray">Aliquam ac mi et ante vestibulum convallis. Fusce non orci elementum, egestas enim ut.</span>
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
			                  <i class="material-icons check_box text-primary"></i>Speciazilation<small class="white">We specialise in lending transactions over £75,000 that are not property related.</small>
			                </li>

			                <li>
			                  <i class="material-icons check_box text-primary"></i>Security<small class="white">We can complete rapid eligibility checks and identify possible source of funding in a matter of minutes without leaving a credit application footprint.</small>
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
	                  <img alt="" src="{{asset('assets/img/capitalise/asset.png')}}">
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
	                  <img alt="" src="{{asset('assets/img/capitalise/invoice.png')}}">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Invoice Finance
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">f you invoice other businesses, use your invoices to get funding.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/cw-icon-04.png">
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
	                  <img alt="" src="assets/img/cw-icon-02.png">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Trade finance
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
	                  <img alt="" src="assets/img/cw-icon-03.png">
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
	                  <img alt="" src="assets/img/cw-icon-01.png">
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
	                  <img alt="" src="assets/img/cw-icon-06.png">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Coffeine
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">In cursus sit amet metus a fermentum. Sed ornare metus ut elit placerat sodales. Donec et mattis lectus.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div>

	           {{--  <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-horizontal icon-box-dark icon-box-type-image bg-no icon-left">
	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/cw-icon-08.png">
	                </div>

	                <div class="icon-box-info-wrap">
	                  <h3 class="icon-box-title">
	                    Community
	                  </h3>

	                  <div class="icon-box-description">
	                    <p>
	                      <span class="text-gray">In cursus sit amet metus a fermentum. Sed ornare metus ut elit placerat sodales. Donec et mattis lectus.</span>
	                    </p>
	                  </div>
	                </div>
	              </div>
	            </div --}}>
	          </div>
			    </div>
			  </section>

			  <section class="fw-section layout-full section-no-gap" data-offset-top="180">
			    <div class="container-fluid">
			      <div class="row">
			        <div class="col-sm-12">
			          <img alt="" data-aos="" src="assets/img/cw-people.jpg">
			        </div>
			      </div>
			    </div>
			  </section>

@stop