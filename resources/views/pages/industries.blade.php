@extends('layout.template')
@section('content')
			<div class="page-title title-size-lg text-light">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          Sector
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
		          		<span property="name">Sector</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<article class="page">
			  <section class="fw-section padding-top-3x padding-bottom-3x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Cognitive Research<small class="h4"> has experience in the multiple software sectors within industry sectors that include Finance, Accounting, Hospitality & Facilities Management.

				</small>
	          </h2>

	          
	          <?php
	          $i=0;
	          ?>
	       
	          <div class="row">
	          @foreach($sectors as $s)

	          	@if($i%3==0)</div><div class="row">@endif
	            <div class="col-sm-4">
	              <img alt="{{$s->title}}" src="{{asset('page_images/'.$s->logo)}}">
	              <div class="text-block margin-top-1x">
	                <h4 style="text-align: center;">
	                  {{$s->title}}
	                </h4>

	                <p style="text-align: center;">
	                  <span class="text-gray">{{$s->short_desc}}</span>
	                </p>
	              </div>
	            </div>
	            <?php
	            $i++;
	            ?>
	           @endforeach
	           </div>
	      
	          
	        </div>
			  </section>

			{{--   <section class="fw-section padding-bottom-4x">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-6">
			          <h4 class="block-title text-dark text-left mobile-center">
			            Frequently Asked Questions<small class="h6">Aenean vulputate porta enim, sit amet ornare erat egestas sed.</small>
			          </h4>

			          <div class="panel-group panel-group-dark" id="tta-05027dbd">
			            <div class="panel">
			              <h4 class="panel-title">
			                <a class="open" data-parent="#tta-05027dbd" data-toggle="collapse" href="#panel-48ced7f4">A foundation of innovation and academic rigor</a>
			              </h4>

			              <div class="panel-collapse collapse in" id="panel-48ced7f4">
			                <div class="panel-collapse-inner">
			                  <div class="text-block">
			                    <p>
			                      <span class="text-gray">Aenean vulputate porta enim, sit amet ornare erat egestas sed. Suspendisse congue est vel tempus tristique. Aenean eu scelerisque arcu, ut fringilla nunc. Nulla placerat porttitor mi sit amet dapibus. Duis mi purus, tempus sed mollis eu, ornare sed ipsum.</span>
			                    </p>

			                    <p>
			                      <span style="color: #808080;">Aenean vulputate porta enim, sit amet ornare erat egestas sed. Suspendisse congue est vel tempus tristique. Aenean eu scelerisque arcu, ut fringilla nunc. Nulla placerat porttitor mi sit amet dapibus. Duis mi purus, tempus sed mollis eu, ornare sed ipsum.</span>
			                    </p>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <div class="panel">
			              <h4 class="panel-title">
			                <a class="collapsed" data-parent="#tta-05027dbd" data-toggle="collapse" href="#panel-2cadb047">Growth through focused and practical problem solving</a>
			              </h4>

			              <div class="panel-collapse collapse out" id="panel-2cadb047">
			                <div class="panel-collapse-inner">
			                  <div class="text-block">
			                    <p>
			                      <span class="text-gray">Aenean vulputate porta enim, sit amet ornare erat egestas sed. Suspendisse congue est vel tempus tristique. Aenean eu scelerisque arcu, ut fringilla nunc. Nulla placerat porttitor mi sit amet dapibus. Duis mi purus, tempus sed mollis eu, ornare sed ipsum.</span>
			                    </p>

			                    <p>
			                      <span style="color: #808080;">Aenean vulputate porta enim, sit amet ornare erat egestas sed. Suspendisse congue est vel tempus tristique. Aenean eu scelerisque arcu, ut fringilla nunc. Nulla placerat porttitor mi sit amet dapibus. Duis mi purus, tempus sed mollis eu, ornare sed ipsum.</span>
			                    </p>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <div class="panel">
			              <h4 class="panel-title">
			                <a class="collapsed" data-parent="#tta-05027dbd" data-toggle="collapse" href="#panel-82e726f4">Expanding capabilities to serve clients’ sales and marketing</a>
			              </h4>

			              <div class="panel-collapse collapse out" id="panel-82e726f4">
			                <div class="panel-collapse-inner">
			                  <div class="text-block">
			                    <p>
			                      <span class="text-gray">Aenean vulputate porta enim, sit amet ornare erat egestas sed. Suspendisse congue est vel tempus tristique. Aenean eu scelerisque arcu, ut fringilla nunc. Nulla placerat porttitor mi sit amet dapibus. Duis mi purus, tempus sed mollis eu, ornare sed ipsum.</span>
			                    </p>

			                    <p>
			                      <span style="color: #808080;">Aenean vulputate porta enim, sit amet ornare erat egestas sed. Suspendisse congue est vel tempus tristique. Aenean eu scelerisque arcu, ut fringilla nunc. Nulla placerat porttitor mi sit amet dapibus. Duis mi purus, tempus sed mollis eu, ornare sed ipsum.</span>
			                    </p>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-sm-6">
			          <div class="padding-top-3x visible-xs"></div>

			          <h4 class="block-title text-dark text-left mobile-center">
			            We Are Good At<small class="h6">Aenean vulputate porta enim, sit amet ornare erat egestas sed.</small>
			          </h4>

			          <div class="progress-bars with-units animated">
			            <div class="progress progress-dark progress-animated" data-current-value="70">
			              <div class="progress-bar">
			                <span class="value text-primary"><i>70</i> %</span><span class="bar bg-primary"></span><span class="rails"></span>
			              </div>

			              <h4 class="progress-bar-label">
			                Strategy
			              </h4>
			            </div>

			            <div class="progress progress-dark progress-animated" data-current-value="85">
			              <div class="progress-bar">
			                <span class="value text-primary"><i>85</i> %</span><span class="bar bg-primary"></span><span class="rails"></span>
			              </div>

			              <h4 class="progress-bar-label">
			                Advertising
			              </h4>
			            </div>

			            <div class="progress progress-dark progress-animated" data-current-value="90">
			              <div class="progress-bar">
			                <span class="value text-primary"><i>90</i> %</span><span class="bar bg-primary"></span><span class="rails"></span>
			              </div>

			              <h4 class="progress-bar-label">
			                Consulting
			              </h4>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section> --}}

			   <section class="fw-section padding-top-2x padding-bottom-4x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Our Featured Clients, Suppliers and Supporters
	            {{-- <small class="h4">Cras ligula velit, mattis nec ligula vel, laoreet ullamcorper nisl.</small> --}}
	          </h2>

	          <div class="row vc_custom_1478638009824">
	            <div class="col-sm-12">
	              <div class="logo-carousel carousel-navs-ghost carousel-navs-top-outside carousel-dark" data-items-lg="6" data-items-md="5" data-items-sm="3" data-items-xs="1" data-slick='{"dots":true,"arrows":false,"infinite":true,"autoplay":true,"autoplaySpeed":3000}'>
	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/blueconic_logo.jpg')}}">
	                 {{--  <h4 class="logo-item-title">
	                    Blueconic
	                  </h4>

	                  <p class="logo-item-description">
	                    blueconic.com
	                  </p> --}}
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/burrito_logo.png')}}">
	                 {{--  <h4 class="logo-item-title">
	                    Burrito
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/daspalla_logo.png')}}" >
	                  {{-- <h4 class="logo-item-title">
	                    Daspalla
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/ginger_logo.png')}}">
	                  {{-- <h4 class="logo-item-title">
	                    Ginger
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/Deputy_logo.png')}}">
	                  {{-- <h4 class="logo-item-title">
	                    Deputy
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
 --}}	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/la_marvella_logo.png')}}">
	                 {{--  <h4 class="logo-item-title">
	                    La Marvella
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/mango_logo.png')}}">
	                 {{--  <h4 class="logo-item-title">
	                    Mango
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/mistay_logo.png')}}">
	                  {{-- <h4 class="logo-item-title">

	                    Mistay
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p>
 --}}	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/octave_logo.png')}}">
	                  {{-- <h4 class="logo-item-title">

	                    Octave
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/qikstay_logo.png')}}">
	                  {{-- <h4 class="logo-item-title">

	                    Qikstay
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/residency_logo.jpg')}}">
	                 {{--  <h4 class="logo-item-title">

	                    Residency
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>
	                	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/tamara_logo.png')}}">
	                 {{--  <h4 class="logo-item-title">

	                    Tamara
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>
	                	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/tgm_logo.png')}}">
	               {{--    <h4 class="logo-item-title">

	                    TGM
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>
	                	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/xero_logo.png')}}">
	                  {{-- <h4 class="logo-item-title">

	                    Xero
	                  </h4>

	                  <p class="logo-item-description">
	                    Sed fermentum in felis feugiat
	                  </p> --}}
	                </div>
	                {{--  --}}

	                <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/receipt_bank_logo.png')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/cin7_logo.png')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/citi_logo.jpg
	                  pg')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/kpmg_logo.png')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/lloyds_logo.png')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/mailchimp_logo.jpg')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/meltwater_logo.png')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/onepage_crm_logo.jpg')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/profitsee_logo.jpg')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/quickbooks_logo.png')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/raffingers_logo.png')}}">
	          	    </div>
	          	    <div class="logo-item">
	                  <img alt="" sizes="(max-width: 340px) 100vw, 340px" src="{{asset('logos/roller/sage_logo.png')}}">
	          	    </div>
	              </div>
	            </div>
	          </div>
			    </div>
			  </section>
			</article>
@stop