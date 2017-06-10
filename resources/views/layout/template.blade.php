<!DOCTYPE html>
<html>
	<head>
		<title>Cognires</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon Images -->
		<link rel="icon" href="{{asset('assets/img/favicon/cropped-favicon-32x32.png')}}" />
		<link rel="icon" href="{{asset('assets/img/favicon/cropped-favicon-192x192.png')}}" />
		<link rel="apple-touch-icon-precomposed" href="{{asset('assets/img/favicon/cropped-favicon-180x180.png')}}" />
		<meta name="msapplication-TileImage" content="{{asset('assets/img/favicon/cropped-favicon-270x270.png')}}" />

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
<body class="{{$body_class or "n"}}">
	<!-- It Is Preloader Markup -->
		<div class="loading-screen"><div class="spinner-wrap"><div class="spinner" id="spinner_one"></div><div class="spinner" id="spinner_two"></div><div class="spinner" id="spinner_three"></div><div class="spinner" id="spinner_four"></div></div></div>
				<!-- Site Search Form -->
		<div class="site-search-form">
			<div class="inner">
				<span class="close-btn"><i class="material-icons clear"></i></span>

				<form method="get" class="search-box" autocomplete="off">
					<input type="text" name="s" placeholder="Search" value="">
					<button type="submit"><i class="material-icons search"></i></button>
				</form>
			</div>
		</div><!-- Site Serch Form END -->

		<!-- Offcanvas Sidebar Mobile Menu -->
		<aside class="off-canvas-menu">
		  <span class="close-btn"><i class="material-icons clear"></i></span>

		  <!-- Main navigation -->
		  <!-- Visible only on mobile -->
		  <nav class="vertical-navigation">
			  <ul class="menu">
			    <li class="menu-item">
			      <a href="{{url('/')}}">Home<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			    </li>

			    <li class="menu-item current-menu-item">
			      <a href="{{url('industries')}}">Industries<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			    </li>

			    <li class="menu-item menu-item-has-children">
			      <a href="{{url('service')}}">Services<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

			      <ul class="sub-menu">
			        <li class="menu-item">
			          <a href="{{url('service')}}">All Services<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="service-01.html">Strategy<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="service-02.html">Advanced Analytics<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="service-03.html">Marketing & Onboarding<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="service-04.html">Consulting<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="service-05.html">Accelerating Growth<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="service-06.html">Digital Transformation<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="service-07.html">Sustainability<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>
			      </ul>
			    </li>

			    <li class="menu-item menu-item-has-children">
			      <a href="{{url('case')}}">Case Studies<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

			      <ul class="sub-menu">
			        <li class="menu-item">
			          <a href="{{url('case')}}">All Cases<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="studies-01.html">Mobile Venture<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="studies-02.html">Kalka Media<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="studies-03.html">Cash Inc.<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="studies-04.html">Alaska Enterprise<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="studies-05.html">Team Agency<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="studies-06.html">Must Group City Agency<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>
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
			          <a href="page-work.html">How We Work<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			        <li class="menu-item">
			          <a href="page-team.html">Team<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
			        </li>

			   

			        <li class="menu-item">
			          <a href="page-contacts.html">Contacts<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
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
			          <i class="material-icons phone"></i> 1-518-474-5766 &nbsp;&nbsp;&nbsp;Call Us 24/7
			        </p>
			      </div>

			      <div class="column text-right">
			      

			        <div class="social-bar sb-solid-bg sb-rounded sb-dark-skin text-left">
			          <a class="social-btn" href="#"><i class="socicon-facebook"></i></a><a class="social-btn" href="#"><i class="socicon-telegram"></i></a><a class="social-btn" href="#"><i class="socicon-twitter"></i></a>
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
	        	      <li class="menu-item">
	        	        <a href="{{url('/')}}">Home</a>
	        	      </li>

	        	      <li class="menu-item current-menu-item">
	        	        <a href="{{url('industries')}}">Industries</a>
	        	      </li>

	        	      <li class="menu-item menu-item-has-children">
	        	        <a href="{{url('service')}}">Services</a>

	        	        <ul class="sub-menu">
	        	          <li class="menu-item">
	        	            <a href="{{url('service')}}">All Services</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="service-01.html">Strategy</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="service-02.html">Advanced Analytics</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="service-03.html">Marketing & Onboarding</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="service-04.html">Consulting</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="service-05.html">Accelerating Growth</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="service-06.html">Digital Transformation</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="service-07.html">Sustainability</a>
	        	          </li>
	        	        </ul>
	        	      </li>

	        	      <li class="menu-item menu-item-has-children">
	        	        <a href="{{url('case')}}">Case Studies</a>

	        	        <ul class="sub-menu">
	        	          <li class="menu-item">
	        	            <a href="{{url('case')}}">All Cases</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="studies-01.html">Mobile Venture</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="studies-02.html">Kalka Media</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="studies-03.html">Cash Inc.</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="studies-04.html">Alaska Enterprise</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="studies-05.html">Team Agency</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="studies-06.html">Must Group City Agency</a>
	        	          </li>
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
	        	            <a href="page-work.html">How We Work</a>
	        	          </li>

	        	          <li class="menu-item">
	        	            <a href="page-team.html">Team</a>
	        	          </li>

	        	       
	        	          <li class="menu-item">
	        	            <a href="page-contacts.html">Contacts</a>
	        	          </li>
	        	        </ul>
	        	      </li>
	        	    </ul>
	        	  </nav><!-- Main navigation END -->

		          <!-- Header Toolbar, search, offcanvas toggle etc -->
		          <div class="toolbar">
		          	<!-- SIte Search Toggle -->
		            <a class="site-search-btn tool" href="#"><i class="material-icons search"></i></a>

		          

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
		              	<img alt="" src="assets/img/logo-light.png">
		              </a>
		              <p>
		                Cras quis sem ut sapien efficitur tempus et ut metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam aliquam pretium lectus quis bibendum.
		              </p>

		              <div class="social-bar sb-solid-bg sb-square sb-dark-skin text-left">
		                <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="Facebook"><i class="socicon-facebook"></i></a>
		                <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="Foursquare"><i class="socicon-foursquare"></i></a>
		                <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="socicon-linkedin"></i></a>
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
		                  <span>New York, NY 10001</span>
		                </div>
		              </div>

		              <div class="contact-item">
		                <div class="contact-icon">
		                  <i class="material-icons smartphone"></i>
		                </div>

		                <div class="contact-info">
		                  <span>001 800 8080</span>
		                </div>
		              </div>

		              <div class="contact-item">
		                <div class="contact-icon">
		                  <i class="socicon-mail"></i>
		                </div>

		                <div class="contact-info">
		                  <span>info@8guild.com</span>
		                </div>
		              </div>
		            </section>
		          </div>

		          <div class="col-md-3 col-sm-6">
		            <section class="widget widget_nav_menu">
		              <h3 class="widget-title">
		                Industries
		              </h3>

		              <div class="menu-footer-menu-1-container">
		                <ul class="menu">
		                  <li class="menu-item">
		                    <a href="#">IT &#038; Biotechnology</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Shipping &#038; Logistics</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Health &#038; Pharmaceutical</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Social Media</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Aviation &#038; Travel</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Private Equity</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Natural Resources</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Technology</a>
		                  </li>
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
		                  <li class="menu-item">
		                    <a href="#">Strategy</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Consulting</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">News Gathering & Monitoring</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Advanced Analytics</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Digital Transformation</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Acclerating Growth</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Marketing & Onboarding</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Accelerating Growth</a>
		                  </li>
		                </ul>
		              </div>
		            </section>
		          </div>

		          <div class="col-md-3 col-sm-6">
		            <section class="widget widget_recent_entries">
		              <h3 class="widget-title">
		                Latest News
		              </h3>

		              <ul>
		                <li>
		                  <a href="#">Consultant-Client Relations</a> <span class="post-date">November 2, 2016</span>
		                </li>

		                <li>
		                  <a href="#">Competition in Modular Clusters</a> <span class="post-date">November 2, 2016</span>
		                </li>

		                <li>
		                  <a href="#">6 Steps to Getting Work Done</a> <span class="post-date">November 2, 2016</span>
		                </li>

		                <li>
		                  <a href="#">The Pros and Cons of Venture</a> <span class="post-date">November 2, 2016</span>
		                </li>

		                <li>
		                  <a href="#">5 Steps to Find a Business Mentor</a> <span class="post-date">November 2, 2016</span>
		                </li>

		                <li>
		                  <a href="#">How to Set Fees for Your Services</a> <span class="post-date">November 2, 2016</span>
		                </li>
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
			           {{-- Text --}}
			          </p>
			        </div>

			        <div class="col-sm-6 text-right"></div>
			      </div>
			    </div>
			  </div>
			</footer><!-- Main Footer END -->
		</main>
		<!-- Scripts section -->
		<!-- **************************************************************************************************************************** -->
		<script type="text/javascript" src="{{asset('assets/js/vendor/jquery.js')}}"></script>

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

</body>
</html>
