<!DOCTYPE html>
<html>
	<head>
		<title>Cognitive Research(UK)</title>
		<?php
		$g= DB::table('global')->first();

		?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script type="text/javascript" src="{{asset('assets/js/vendor/jquery.js')}}"></script>
		
		<!-- Favicon Images -->
		<link rel="icon" href="{{asset('assets/img/favicon/logo.ico')}}" />
		{{-- <link rel="icon" href="{{asset('assets/img/favicon/cropped-favicon-192x192.png')}}" /> --}}
		<link rel="apple-touch-icon-precomposed" href="{{asset('assets/img/favicon/cropped-favicon-180x180.png')}}" />
		<meta name="msapplication-TileImage" content="{{asset('assets/img/favicon/cropped-favicon-270x270.png')}}" />
		<meta name="Description" content="Cognitive Research is an enterprise that supports four basic services, new gathering service, business development for technology companies opening new markets either geographically or in new business sector, financial platform services for small businesses and acquisition activities in the SME sector.">
		<meta name="Keywords" content="consulting,Acquisitions,Value-Add-Technology,News Monitoring & Curation,funding,united kingdom,finance,service,analytics,hotel, student,accomodations,business,Invoice Finance,Trade Finance,Spot Finance,Asset Finance,Property Finance,Cashflow Finance,Vat Finance,Wages Finance,
Secured lending,
Unsecured lending,
Overdraft,
Revolving credit facility,

Collateralise lending,

Commercial lending,

Small business lending,

SME loans,

Survaider,

Customer experience management,

CX,

CXM,

VoC,

Voice of the customer,

CEM,

Customer Review management,

Client review management,

Digital feedbackIn,

Moment,

Medallia,

NICE,

Qualtrics,

Satmetrix,

Verint,

SMG management,

Market research,

CFM platforms,

TripAdvisor reviews,

Booking.com reviews,

Managing reviews,

AI in CFM,

AI in CXM,

AI in CUM,

AI in CX,

NPS in customer review management,

NPS,

Net Promoter Score,

Consulting,

Strategic consulting,

Advisory,

Business development,

Ebook development,

Infographic creation,

Marketing automation,

Campaign management,

Acquisitions,

Funding business acquisitions,

Succession management,

Retirement sale,

Selling your business,

Buying businesses,

Selling your sme,

SME sales,

SME purchases,

Distress business sales,

Tower growth management,

Preferential shares,

Business disposal,

Business acquisition,

Succession planning,

Commercial business sales,

Commercial business purchase,

Vendor finance,

Structured finance in business purchase,

GDPR,

GDPR compliant,

Put your customers first,

Use encrypted channels for sending information,

Right to data portability,

GDPR for hotels,

GDPR for Accommodation providers,

GDPR for hotel groups,

GDPR for hotel chains,

GDPR for private operators,

Right to data portability,

Right to forget,

Data processors,

Data collectors,

4% fine,

May 2018,

GDPR outside Europe,

GDPR and Brexit,

GDPR and unstructured data,

GDPR and structured data,

Value Added Reseller,

VaR,

SaaS solutions,

Xero Ecosystems,

Xero intergrations,

Xero Add-ons,

QB solutions,

Quick Books,

Exact,

Sage,

EaaS,

CDP,

Customer Data Platform,

Smart Cities,

Configure-Price- quote,

CPQ,

FPX,

Quotation software,

Omni channel sales,

Hetras,

PMS,

Property management systems,

Mobile pms,

Mobile property management system,

UK partnership in technology,

Hotel software,

CCh,

Iris,

Digita,

Receipt bank,

CXM in health care,

CX in health care,

Cxm in Food technology,

Cx in food technology,

CXM in restaurants,

CX in restaurants,

PMS for serviced apartments,

PMS for student hotels,

Cloud accounting,

Student hotels,

Student hotel software

 

 ">
		<meta charset="utf-8" name="Author" content="https://github.com/zurez">

		<!-- Google Font Import -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">

		<!-- Animation, Icon Fonts, Bootsrap styles -->
		<link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/aos.min.css')}}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/material-icons.min.css')}}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/font-awesome.min.css')}}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/socicon.min.css')}}" type="text/css" media="screen" />
		<link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/bootstrap.min.css')}}" type="text/css" media="screen" />
		<link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/preloader.css')}}" type="text/css" media="screen" />
			
		<!-- *************************************************************************************** -->
		<!-- Vendor Styles Section -->
			<link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/magnific-popup.min.css')}}" type="text/css" media="screen" />
		<!-- Vendor Styles Section END-->
		<!-- *************************************************************************************** -->

		<!-- Main Theme Style -->
		<link rel="stylesheet" href="{{asset('assets/stylesheets/theme.min.css')}}" type="text/css" media="screen" />
		<style type="text/css">
			.page-title{
				background-color:#A12434;
			}


			.cs_headline{
			        font-family:Georgia,serif;
				color:#4E443C;
				font-variant: small-caps; text-transform: none; font-weight: 100; margin-bottom: 0;
			}

			.cs_para{
			        font-family: "Helvetica Neue", "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
			        font-size: 14px;
			        margin-top: .5em; color: #666;
			}

			.cs_para_start{
			        font-family:Georgia,serif;
				font-size: .8em;
			        font-weight: bold;
				text-transform:uppercase;
				letter-spacing:2px;
			} 
		</style>
		 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
		<!-- Modernizr Scripts -->
		<script type="text/javascript" src="{{asset('assets/js/vendor/modernizr.custom.js')}}"></script>

		<!-- Init For Page Prelodaer -->
		<script type="text/javascript">
			(function () {
		    window.onload = function () {
		      var body = document.querySelector( "body" );
		      var header = body.querySelector( ".site-header" );
		      var preloader = body.querySelector( ".loading-screen" );
		      body.style.overflowY = "auto";
		      preloader.classList.add( "loading-done" );
		      header.classList.add( "loading-done" );
		    };
		  })();
		</script>
	</head>
        <?php
			        $sectors=DB::table('page')->where('category',"sector")->whereNull('deleted_at')->get();
			        $services=DB::table('page')->where('category',"service")->whereNull('deleted_at')->get();
			        $cases=DB::table('case')->orderBy('title')->get();

        ?>

<body class="{{$body_class or "n"}}">
	<!-- It Is Preloader Markup -->
		<div class="loading-screen"><div class="spinner-wrap"><div class="spinner" id="spinner_one"></div><div class="spinner" id="spinner_two"></div><div class="spinner" id="spinner_three"></div><div class="spinner" id="spinner_four"></div></div></div>

		<!-- Offcanvas Sidebar Mobile Menu -->
		<aside class="off-canvas-menu">
		  <span class="close-btn"><i class="material-icons clear"></i></span>

		  <!-- Main navigation -->
		  <!-- Visible only on mobile -->
		  <nav class="vertical-navigation">
			  <ul class="menu">
			    <li class="menu-item current-menu-item-obs">
			      <a href="{{url('/')}}">Home<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			    </li>

			    <li class="menu-item menu-item-has-children">
			      <a href="{{url('sector')}}">Sector<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			    <ul class="sub-menu">
			        <li class="menu-item">
			          <a href="{{url('sector')}}">All Sectors<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        @foreach($sectors as $s)
			       	 <li class="menu-item">
			          <a href="{{url('sector',$s->custom_url)}}">{{$s->title}}</a>
			        </li>
			        @endforeach


			      </ul>
			    </li>

			    <li class="menu-item menu-item-has-children">
			      <a href="{{url('service')}}">Services<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

			      <ul class="sub-menu">
			        <li class="menu-item">
			          <a href="{{url('service')}}">All Services<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        @foreach($services as $s)
			       	 <li class="menu-item">
			          <a href="{{url('service',$s->custom_url)}}">{{$s->title}}</a>
			        </li>
			        @endforeach


			      </ul>
			    </li>


			    <li class="menu-item menu-item-has-children">
			      <a href="{{url('blog')}}">Blog<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

			      <ul class="sub-menu">
			        <li class="menu-item">
			          <a href="{{url('blog')}}">All Posts<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			    {{--     <li class="menu-item">
			          <a href="blog-single.html">Single Post<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li> --}}
			      </ul>
			    </li>

			    <li class="menu-item menu-item-has-children">
			      <a href="#">About Us<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

			      <ul class="sub-menu">
			        <li class="menu-item">
			          <a href="{{url('mission')}}">Our Mission<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="{{url('work')}}">How We Work<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="{{url('team')}}">Team<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			   

			        <li class="menu-item">
			          <a href="{{url('contact')}}">Contacts<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>
			      </ul>
			    </li>
			  </ul>
			</nav><!-- Main navigation END -->
		</aside><!-- Offcanvas Sidebar Mobile Menu END -->

		{{-- Footer --}}
		<a class="scroll-to-top-btn" href="#"><i class="material-icons keyboard_arrow_up"></i></a>
		<div class="site-backdrop"></div>


				<!-- Header -->
		<header class="site-header navbar-sticky">
			<div class="topbar topbar-primary text-light">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <p class="additional-info">
			          <i class="material-icons phone"></i>{{$g->phone}}  &nbsp;&nbsp;&nbsp;Call Us 24/7
			        </p>
			      </div>

			      <div class="column text-right">
			      

			        <div class="social-bar sb-solid-bg sb-rounded sb-dark-skin text-left">
			          <a class="social-btn" href="{{$g->linkedin}}"><i class="socicon-linkedin"></i></a><a class="social-btn" href="{{$g->twitter}}"><i class="socicon-twitter"></i></a>
			        </div>

			        <div class="toolbar">
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
			
		  <div class="navbar navbar-regular menu-right">
		    <div class="container">
		      <div class="inner">

		      	<!-- Main Logo Column -->
		        <div class="column">
		          <a class="site-logo" href="{{url('/')}}" rel="home">
		          	<img alt="" class="custom-logo"  src="{{asset('assets/img/logo.png')}}">
		          </a>
		        </div><!-- Main Logo Column END -->

		        <div class="column">

	        		<!-- Main navigation -->
	        		<!-- Visible only on desktop -->
	        	  <nav class="main-navigation">
	        	    <ul class="menu">
	        	      <li class="menu-item current-menu-item-obs">
	        	        <a href="{{url('/')}}">Home</a>
	        	      </li>

	        	      <li class="menu-item menu-item-has-children">
	        	        <a href="{{url('sector')}}">Sector</a>
	        	         <ul class="sub-menu">
	        	          <li class="menu-item">
	        	            <a href="{{url('sector')}}">All Sectors</a>
	        	          </li>
  			        @foreach($sectors as $s)
			       	 <li class="menu-item">
			          <a href="{{url('sector',$s->custom_url)}}">{{$s->title}}</a>
			        </li>
			        @endforeach
	        	        
	        	          
	        	        </ul>
	        	      </li>

	        	      <li class="menu-item menu-item-has-children">
	        	        <a href="{{url('service')}}">Services</a>

	        	        <ul class="sub-menu">
	        	          <li class="menu-item">
	        	            <a href="{{url('service')}}">All Services</a>
	        	          </li>
  			        @foreach($services as $s)
			       	 <li class="menu-item">
			          <a href="{{url('service',$s->custom_url)}}">{{$s->title}}</a>
			        </li>
			        @endforeach
	        	        
	        	          
	        	        </ul>
	        	      </li>

	        	      <li class="menu-item menu-item-has-children">
	        	        <a href="{{url('case')}}">Case Studies</a>

	        	        <ul class="sub-menu">
	        	          <li class="menu-item">
	        	            <a href="{{url('case')}}">All Cases</a>
	        	          </li>
	        	          @foreach($cases as $c)
	        	          <li class="menu-item">
	        	            <a href="{{url('case',$c->custom_url)}}">{{$c->title}}</a>
	        	          </li>
	        	          @endforeach
	        	        </ul>
	        	      </li>

	

	        	      <li class="menu-item menu-item-has-children">
	        	        <a href="{{url('blog')}}">Blog</a>

	        	        <ul class="sub-menu">
	        	          <li class="menu-item">
	        	            <a href="{{url('blog')}}">All Posts</a>
	        	          </li>

	        	      {{--     <li class="menu-item">
	        	            <a href="blog-single.html">Single Post</a>
	        	          </li> --}}
	        	        </ul>
	        	      </li>

	        	      <li class="menu-item menu-item-has-children">
	        	        <a href="#">About Us</a>

	        	        <ul class="sub-menu">
	        	          <li class="menu-item">
	        	            <a href="{{url('mission')}}">Our Mission</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="{{url('work')}}">How We Work</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="{{url('team')}}">Team</a>
	        	          </li>

	        	       
	        	          <li class="menu-item">
	        	            <a href="{{url('contact')}}">Contacts</a>
	        	          </li>
	        	        </ul>
	        	      </li>
	        	    </ul>
	        	  </nav><!-- Main navigation END -->

		          <!-- Header Toolbar, search, offcanvas toggle etc -->
		          <div class="toolbar">
		          	<!-- SIte Search Toggle -->
		           {{--  <a class="site-search-btn tool" href="#"><i class="material-icons search"></i></a> --}}

		          

		            <!-- Topbar Mobile View Toggle -->
		            <!-- Only Mobile view visible -->
		            <a class="topbar-btn tool" href="#"><i class="material-icons more_horiz"></i></a>

		            <!-- Mobile View Navigation Toggle -->
		            <!-- Only Mobile view visible -->
		            <a class="menu-btn tool" data-toggle="offcanvas" href="#"><i class="material-icons menu"></i></a>
		          </div><!-- Header Toolbar END -->

		    
		        </div>
		      </div>
		    </div>
		  </div>
		</header><!-- Header END -->
		<main>
			{{-- Content --}}

			@yield('content')

							<!-- Main Footer -->
			<footer class="site-footer footer-dark bg-parallax" data-parallax-speed="0.4" data-parallax-type="scroll" style="background-image: url(assets/img/demo-marketing-bg-02.jpg);">
			  <div class="footer-row">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-3 col-sm-6">
		            <section class="widget widget_startapp_site_info">
		              <a href="#">
		              	<img alt="" class="custom-logo"  src="{{asset('assets/img/logo.png')}}">
		              </a>
		              <p>
		                Helping application developers & their investors, SME's & their professional advisors to utilise technology and experienced commercial consultants to help them grow.
		              </p>

		              <div class="social-bar sb-solid-bg sb-square sb-dark-skin text-left">
		                <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="{{$g->twitter}}" title="twitter"><i class="socicon-twitter"></i></a>
		              
		                <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="{{$g->linkedin}}" title="LinkedIn"><i class="socicon-linkedin"></i></a>
		              </div>
		            </section>

		            <section class="widget widget_startapp_contacts">
		              <h3 class="widget-title">
		                Get In Touch
		              </h3>

		              <div class="contact-item">
		                <div class="contact-icon">
		                  <i class="material-icons location_on"></i>
		                </div>

		                <div class="contact-info">
		                  <span>London, UK</span>
		                </div>
		              </div>

		              <div class="contact-item">
		                <div class="contact-icon">
		                  <i class="material-icons smartphone"></i>
		                </div>

		                <div class="contact-info">
		                  <span>{{$g->phone}}</span>
		                </div>
		              </div>

		              <div class="contact-item">
		                <div class="contact-icon">
		                  <i class="socicon-mail"></i>
		                </div>

		                <div class="contact-info">
		                  <span> {{$g->email}}</span>
		                </div>
		              </div>
		            </section>
		          </div>

		          <div class="col-md-3 col-sm-6">
		            <section class="widget widget_nav_menu">
		              <h3 class="widget-title">
		                Sector
		              </h3>

		              <div class="menu-footer-menu-1-container">
		                <ul class="menu">
		                 @foreach($sectors as $s)
		                  <li class="menu-item">
		                    <a href="{{url('sector',$s->custom_url)}}">{{$s->title}}</a>
		                  </li>
		                 @endforeach
		                


		                </ul>
		              </div>
		            </section>
		          </div>

		          <div class="clearfix visible-sm">
		          </div>

		          <div class="col-md-3 col-sm-6">
		            <section class="widget widget_nav_menu">
		              <h3 class="widget-title">
		                Services
		              </h3>

		              <div class="menu-footer-menu-2-container">
		                <ul class="menu">
		                      @foreach($services as $s)
					       	 <li class="menu-item">
					          <a href="{{url('service',$s->custom_url)}}">{{$s->title}}</a>
					        </li>
					        @endforeach

		                </ul>
		              </div>
		            </section>
		          </div>

		          <div class="col-md-3 col-sm-6">
		            <section class="widget widget_recent_entries">
		              <h3 class="widget-title">
		                Latest News
		              </h3>
		              <?php
		              		$news=DB::table('blog')->where('published','!=','0')->whereNull('deleted_at')->orderBy('created_at','DESC')->limit(5)->get();

		              ?>
		              <ul>
		              @foreach($news as $n)
		              <?php
		              	        $s= strtotime($n->created_at);
        						$date= date("M d, Y ",$s);
		              ?>
		              			                <li>
		                  <a href="{{url('blog',$n->custom_url)}}">{{$n->title}}</a> <span class="post-date">{{$date}}</span>
		                </li>
		              @endforeach

		            
		              </ul>
		            </section>
		          </div>
		        </div>
		      </div>
		    </div>

			  <div class="copyright bg-primary text-light">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-6">
			          <p class="copyright-text">
			           © All rights reserved Cognitive Research Limited 2017
			          </p>
			        </div>

			        <div class="col-sm-6 text-right"><a href="{{url('privacy')}}">Privacy Policy</a></div>
			      </div>
			    </div>
			  </div>
			</footer><!-- Main Footer END -->
		</main>

		<!-- Scripts section -->
		<!-- **************************************************************************************************************************** -->
	

		<script type="text/javascript" src="{{asset('assets/js/vendor/aos.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/jquery.waypoints.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/jarallax.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/velocity.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/scrollspy.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/isotope.pkgd.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/counterup.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
			<!-- *************************************************************************************** -->
			<!-- Vendor Script Section -->

			<!-- Vendor Script Section END-->
			<!-- *************************************************************************************** -->
		<script type="text/javascript" src="{{asset('assets/js/startapp-theme.js')}}"></script>
		<!-- **************************************************************************************************************************** -->
		{{-- TAWK --}}
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59a40716b6e907673de0a0be/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>
