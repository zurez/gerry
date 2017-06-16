@extends('layout.template')
@section('content')
			<div class="page-title title-size-lg text-light">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          Contacts
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
		          		<span property="name">Contacts</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<article class="page">
			  <section class="fw-section padding-top-3x padding-bottom-3x">
			    <div class="container">
	          <div class="text-block">
	            <h2>
	              Since 2000, we have partnered with the founders of companies that now have an aggregate, public market value of over $1.4 trillion. Meet our main Offices.
	            </h2>
	          </div>
			    </div>
			  </section>

			  <section class="fw-section">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-4">
			          <div class="contacts-tile">
			            <div class="contacts-tile-body">
			              <div class="contacts-tile-country">
			                <span class="country-flag"><img alt="" src="assets/img/demo-marketing-flag-01.png"></span><span class="country-name">United States</span>
			              </div>

			              <h3 class="contacts-tile-title">
			                Menlo Park
			              </h3>

			              <div class="contacts-tile-content">
			                <p style="text-align: left;">
			                  <span class="text-normal">2855 Sand Hill Road</span> <span class="text-normal">Menlo Park,<br>
			                  CA 94025</span>
			                </p>

			                <p style="text-align: left;">
			                  T: (650) 854-9499<br>
			                  <span class="text-normal">F: (650) 854-9397</span>
			                </p>
			              </div>
			            </div>

			            <div class="google-map" data-address="1125 Merrill Street, Menlo Park, CA 94025, USA" data-disable-controls="true" data-height="230" data-marker-title="StartApp Office" data-scrollwheel="false" data-styles='[{"stylers":[{"hue":"#2c3e50"},{"saturation":250}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]}]' data-zoom="14">
			            </div>
			          </div>
			        </div>

			        <div class="col-sm-4 vc_custom_1478639336231">
			          <div class="contacts-tile">
			            <div class="contacts-tile-body">
			              <div class="contacts-tile-country">
			                <span class="country-flag"><img alt="" src="assets/img/demo-marketing-flag-01.png"></span><span class="country-name">United States</span>
			              </div>

			              <h3 class="contacts-tile-title">
			                New York
			              </h3>

			              <div class="contacts-tile-content">
			                <p style="text-align: left;">
			                  44 West 28th Street 8th Floor,<br>
			                  New York, NY 10001
			                </p>

			                <p style="text-align: left;">
			                  T: (8610) 66575566<br>
			                  F: (8610) 66573553
			                </p>
			              </div>
			            </div>

			            <div class="google-map" data-address="44 West 28th Street 8th Floor, New York, NY 10001" data-disable-controls="true" data-height="230" data-marker-title="StartApp Office" data-scrollwheel="false" data-styles='[{"stylers":[{"hue":"#2c3e50"},{"saturation":250}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]}]' data-zoom="14">
			            </div>
			          </div>
			        </div>

			        <div class="col-sm-4 vc_custom_1478639342812">
			          <div class="contacts-tile">
			            <div class="contacts-tile-body">
			              <div class="contacts-tile-country">
			                <span class="country-flag"><img alt="" src="assets/img/demo-marketing-flag-02.png"></span><span class="country-name">China</span>
			              </div>

			              <h3 class="contacts-tile-title">
			                Shanghai
			              </h3>

			              <div class="contacts-tile-content">
			                <p style="text-align: left;">
			                  Unit 2202, Plaza 66 1266 Nanjing West Road, Shanghai 200040
			                </p>

			                <p style="text-align: left;">
			                  T: (8621) 61381000<br>
			                  F: (8621) 61381010
			                </p>
			              </div>
			            </div>

			            <div class="google-map" data-address="Unit 2202, Plaza 66 1266 Nanjing West Road, Shanghai 200040" data-disable-controls="true" data-height="230" data-marker-title="StartApp Office" data-scrollwheel="false" data-styles='[{"stylers":[{"hue":"#2c3e50"},{"saturation":250}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]}]' data-zoom="14">
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-top-2x">
			    <div class="container">
          	<hr class="hr-solid hr-primary" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
			    </div>
			  </section>

			  <section class="fw-section padding-top-2x padding-bottom-3x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            <small class="h4">Drop us a line</small>
	          </h2>

	          {!! Form::open(array('url'=>'contactus','method'=>'POST')) !!}
	            <p>
	              <textarea cols="40" name="message" placeholder="Your message" rows="4"></textarea>
	            </p>

	            <div class="row">
	              <div class="col-md-3 col-sm-6">
	                <input name="name" placeholder="Full Name" size="40" type="text" value=""></span>
	              </div>

	              <div class="col-md-3 col-sm-6 padding-bottom-1x">
	                <input name="phone" placeholder="Phone Number" size="40" type="text" value=""></span>
	              </div>

	              <div class="col-md-3 col-sm-6 padding-bottom-1x">
	                <input name="email" placeholder="Your Email" size="40" type="email" value=""></span>
	              </div>

	              <div class="col-md-3 col-sm-6 padding-bottom-1x">
	                <button class="btn btn-block btn-transparent btn-primary" style="margin-top: 0; outline: none;" type="submit">Send Message <i class="material-icons send"></i></button>
	              </div>
	            </div>
	          	{{ Form::close() }}
			    </div>
			  </section>

			</article>
@stop