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
		                    <span class="text-light opacity-75">Find the right finance for your business</span>
		                  </h1>

		                  <h5 class="p1">
		                    <span class="s1 text-light opacity-50">“We had the opportunity for growth and needed to find appropriate finance, Capitilise’s single application really helped speed up the process.” MD - Medical Distribution Company</span>
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

	        {{--     <div class="col-lg-3 col-md-3 col-sm-6">
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
	            </div> --}}

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
	            </div> --}}
	          </div>
			    </div>
			  </section>
			  {{-- Capitalise partner --}}
			      <section class="fw-section layout-full section-no-gap padding-top-3x" data-offset-top="180">
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
		                <a class="market-btn btn-appstore" href="https://capitalise.com/partners/cognitive-research" target="_blank"><span>Visit us at</span><img src="{{asset('assets/img/capitalise.png')}}"></a>
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
		    </section>

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
			            We work with a panel of over 80 Lenders including: 
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

			    <section class="fw-section layout-full section-no-gap" data-offset-top="82" id="contacts">
			    <div class="container-fluid">
			      <div class="row" style="background-color: #f5f5f5;">
			        <div class="col-sm-6">
			        	<div class="text-block padding-bottom-1x">
			       		<p class="text-gray">Funding success requires more than just completing an application. You’ll need to provide information that is easily understood and attractive to lenders. We can support you in all stages of the funding process and position your company in the best possible light for securing finance. </p>
			       		</div>
			        </div>

			        <div class="col-sm-6" style="padding: 5% 5% !important;">
			          <div class="row split-section">
			            <div class="col-sm-12">
			              <div class="text-block">
			                <h2>
			                  We can help!
			                </h2>
			              </div>

			              <div class="contacts-tile custom-contacts">
			                <div class="contacts-tile-body">
			                  <div class="contacts-tile-country">
			                    <span class="country-flag"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAyIDUxMi4wMDIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDIgNTEyLjAwMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM0MTQ3OUI7IiBkPSJNNTAzLjE3Miw0MjMuNzI1SDguODI4Yy00Ljg3NSwwLTguODI4LTMuOTUzLTguODI4LTguODI4Vjk3LjEwNGMwLTQuODc1LDMuOTUzLTguODI4LDguODI4LTguODI4ICBoNDk0LjM0NWM0Ljg3NSwwLDguODI4LDMuOTUzLDguODI4LDguODI4djMxNy43OTNDNTEyLDQxOS43NzIsNTA4LjA0Nyw0MjMuNzI1LDUwMy4xNzIsNDIzLjcyNXoiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0Y1RjVGNTsiIGQ9Ik01MTIsOTcuMTA0YzAtNC44NzUtMy45NTMtOC44MjgtOC44MjgtOC44MjhoLTM5LjQ5NWwtMTYzLjU0LDEwNy4xNDdWODguMjc2aC04OC4yNzZ2MTA3LjE0NyAgTDQ4LjMyMiw4OC4yNzZIOC44MjhDMy45NTMsODguMjc2LDAsOTIuMjI5LDAsOTcuMTA0djIyLjgzMWwxNDAuMzA5LDkxLjkyN0gwdjg4LjI3NmgxNDAuMzA5TDAsMzkyLjA2NnYyMi44MzEgIGMwLDQuODc1LDMuOTUzLDguODI4LDguODI4LDguODI4aDM5LjQ5NWwxNjMuNTQtMTA3LjE0N3YxMDcuMTQ3aDg4LjI3NlYzMTYuNTc4bDE2My41NCwxMDcuMTQ3aDM5LjQ5NSAgYzQuODc1LDAsOC44MjgtMy45NTMsOC44MjgtOC44Mjh2LTIyLjgzMWwtMTQwLjMwOS05MS45MjdINTEydi04OC4yNzZIMzcxLjY5MUw1MTIsMTE5LjkzNVY5Ny4xMDR6Ii8+CjxnPgoJPHBvbHlnb24gc3R5bGU9ImZpbGw6I0ZGNEI1NTsiIHBvaW50cz0iNTEyLDIyOS41MTggMjgyLjQ4MywyMjkuNTE4IDI4Mi40ODMsODguMjc2IDIyOS41MTcsODguMjc2IDIyOS41MTcsMjI5LjUxOCAwLDIyOS41MTggICAgMCwyODIuNDgzIDIyOS41MTcsMjgyLjQ4MyAyMjkuNTE3LDQyMy43MjUgMjgyLjQ4Myw0MjMuNzI1IDI4Mi40ODMsMjgyLjQ4MyA1MTIsMjgyLjQ4MyAgIi8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRkY0QjU1OyIgZD0iTTE3OC45NDgsMzAwLjEzOEwwLjI1LDQxNi4xMzVjMC42MjUsNC4yNjMsNC4xNCw3LjU5LDguNTc3LDcuNTloMTIuMTU5bDE5MC4zOS0xMjMuNTg2aC0zMi40MjggICBWMzAwLjEzOHoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjRCNTU7IiBkPSJNMzQ2LjM4OCwzMDAuMTM4SDMxMy45NmwxOTAuMTEzLDEyMy40MDRjNC40MzEtMC40NzIsNy45MjgtNC4wOSw3LjkyOC04LjY0NnYtNy4yNTggICBMMzQ2LjM4OCwzMDAuMTM4eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGNEI1NTsiIGQ9Ik0wLDEwNi44NDlsMTYxLjc3OSwxMDUuMDE0aDMyLjQyOEw1LjE0Myw4OS4xMzdDMi4xMjMsOTAuNTQsMCw5My41NTUsMCw5Ny4xMDRWMTA2Ljg0OXoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjRCNTU7IiBkPSJNMzMyLjU2NiwyMTEuODYzTDUxMS42OTMsOTUuNTg2Yy0wLjc0NC00LjEyMi00LjE4NC03LjMwOS04LjUyMS03LjMwOWgtMTIuNjQ3TDMwMC4xMzgsMjExLjg2MyAgIEgzMzIuNTY2eiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></span><span class="country-name">United Kingdom</span>
			                  </div>

			                  <h3 class="contacts-tile-title">
			                    New York
			                  </h3>

			                  <div class="contacts-tile-content">
			                    {{-- <p>
			                      <span class="text-gray">44 West 28th Street 8th Floor,</span><br>
			                      <span class="text-gray">New York, USA 10001</span>
			                    </p> --}}

			                    <p>
			                      <a href="#">gerard@cognires.co.uk</a><br>
			                      <span class="text-gray">T: (07)  770-552-703</span>
			                      {{-- <span class="text-gray">F: (8610) 66573553</span> --}}
			                    </p>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>

@stop