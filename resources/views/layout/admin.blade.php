
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Admin</title>

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
      <link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/photoswipe.min.css')}}" type="text/css" media="all" />
      <link rel="stylesheet" href="{{asset('assets/stylesheets/vendor/default-skin.min.css')}}" type="text/css" media="all" />
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

  <body class="body-lateral">
    <!-- It Is Preloader Markup -->
    <div class="loading-screen"><div class="spinner-wrap"><div class="spinner" id="spinner_one"></div><div class="spinner" id="spinner_two"></div><div class="spinner" id="spinner_three"></div><div class="spinner" id="spinner_four"></div></div></div>

    
    <!-- Site Search Form -->
    <div class="site-search-form">
      <div class="inner">
        <span class="close-btn"><i class="material-icons clear"></i></span>

        <form method="get" class="search-box" autocomplete="off">
          <input type="text" name="s" placeholder="Search" value=">
          <button type="submit"><i class="material-icons search"></i></button>
        </form>
      </div>
    </div><!-- Site Serch Form END -->

    <aside class="off-canvas-menu">
      <span class="close-btn"><i class="material-icons clear"></i></span>
      <nav class="vertical-navigation">
        <ul class="menu">
          <li class="menu-item">
            <a class="scroll-to" href="#home">Home<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#speakers">Speakers<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#partners">Partners<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#gallery">Gallery<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#tickets">Tickets<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#contacts">Contacts<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>
        </ul>
      </nav>

      <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
        <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
        <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
        <a class="social-btn" href="#"><i class="socicon-twitter"></i></a>
      </div>

      <div class="header-buttons">
        <section class="widget widget_startapp_button">
          <a class="btn btn-solid btn-rounded btn-primary btn-default btn-block waves-effect waves-light scroll-to" href="#tickets">Get Tickets Now</a><span></span>
        </section>
      </div>
    </aside>

    <header class="site-header navbar-sticky navbar-lateral">
      <a class="custom-logo-link" href="index.html">
        <img alt="" src="{{asset('assets/img/logo-event.png')}}">
      </a>
      
      <div class="toolbar">
        <a class="topbar-btn tool" href="#"><i class="material-icons more_horiz"></i></a><a class="menu-btn tool" data-toggle="offcanvas" href="#"><i class="material-icons menu"></i></a>
      </div>

      <nav class="vertical-navigation">
        <ul class="menu">
          <li class="menu-item">
            <a class="scroll-to" href="#home">Home<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#speakers">Speakers<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#partners">Partners<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#gallery">Gallery<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#tickets">Tickets<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>

          <li class="menu-item">
            <a class="scroll-to" href="#contacts">Contacts<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
          </li>
        </ul>
      </nav>

      <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
        <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
        <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
        <a class="social-btn" href="#"><i class="socicon-twitter"></i></a>
      </div>

      <div class="header-buttons">
        <section class="widget widget_startapp_button">
          <a class="btn btn-solid btn-rounded btn-primary btn-default btn-block waves-effect waves-light scroll-to" href="#tickets">Get Tickets Now</a><span></span>
        </section>
      </div>
    </header>
    
    <main class="page-wrap">
      <article class="page">
        <section class="fw-section layout-full" data-offset-top="2" id="home">
          <div class="container-fluid" style="background-color: #000;">
            <div class="row event-hero text-center padding-top-8x padding-bottom-4x" style="background-image: url({{asset('assets/img/event_hero-bg.jpg)">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                <div class="text-block hero-title">
                  <h1 style="text-align: center;">
                    <span class="text-light">Sydney StarApp Battle</span>
                  </h1>

                  <h2 style="text-align: center;">
                    <span class="text-light">12-16 December, 2016, Sydney</span>
                  </h2>
                </div>

                <div class="text-block">
                  <p class="lead" style="text-align: center;">
                    <span class="text-light text-thin">Startups Start Here. The world’s leading authority in debuting revolutionary startups, introducing game-changing technologies, and discussing what’s top of mind for the tech industry’s key innovators.</span>
                  </p>
                </div>

                <div style="text-align: center;" class="padding-top-2x">
                  <a class="startapp-scroll-down scroll-to" style="display: inline-block; width: 45px; height: 45px;" href="#features"><img src="{{asset('assets/img/event-scroll-down.png')}}"></a>
                </div>
              </div>
            </div>

            <div class="text-block">
              <h5 style="text-align: center;">
                <span class="text-light">Time Until Event:</span>
              </h5>
            </div>

            <div class="countdown skin-light padding-top-1x" data-date-time="10/15/2017 00:00:00">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="box">
                    <div class="days digit">
                      00
                    </div>

                    <h4 class="days_ref description">
                      Days
                    </h4>
                  </div>
                </div>

                <div class="col-md-3 col-sm-6">
                  <div class="box">
                    <div class="hours digit">
                      00
                    </div>

                    <h4 class="hours_ref description">
                      Hours
                    </h4>
                  </div>
                </div>

                <div class="col-md-3 col-sm-6">
                  <div class="box">
                    <div class="minutes digit">
                      00
                    </div>

                    <h4 class="minutes_ref description">
                      Minutes
                    </h4>
                  </div>
                </div>

                <div class="col-md-3 col-sm-6">
                  <div class="box">
                    <div class="seconds digit">
                      00
                    </div>

                    <h4 class="seconds_ref description">
                      Seconds
                    </h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="row padding-top-2x padding-bottom-3x">
              <div class="col-sm-12">
                <hr class="hr-solid hr-light" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
              </div>
            </div>

            <div class="row" id="features">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                <h2 class="block-title text-light text-center">
                  StartApp Battlefield<small class="h4">StartApp Battlefield brings the world&#039;s top early stage startups together on one stage to compete for the coveted Cup, a $50,000 prize, and the attention of media and investors.</small>
                </h2>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-3">
                <div class="icon-box icon-box-vertical icon-box-light icon-box-type-image bg-no text-center">
                  <div class="icon-box-icon">
                    <img alt="" src="{{asset('assets/img/event-feature-1.png')}}">
                  </div>

                  <h3 class="icon-box-title">
                    Startup Battlefield
                  </h3>

                  <div class="icon-box-description">
                    <p style="text-align: center;">
                      <span class="text-light opacity-50">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="icon-box icon-box-vertical icon-box-light icon-box-type-image bg-no text-center">
                  <div class="icon-box-icon">
                    <img alt="" src="{{asset('assets/img/event-feature-2.png')}}">
                  </div>

                  <h3 class="icon-box-title">
                    Mentors Leadership
                  </h3>

                  <div class="icon-box-description">
                    <p style="text-align: center;">
                      <span class="text-light opacity-50">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="icon-box icon-box-vertical icon-box-light icon-box-type-image bg-no text-center">
                  <div class="icon-box-icon">
                    <img alt="" src="{{asset('assets/img/event-feature-3.png')}}">
                  </div>

                  <h3 class="icon-box-title">
                    Startup Alley
                  </h3>

                  <div class="icon-box-description">
                    <p style="text-align: center;">
                      <span class="text-light opacity-50">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="icon-box icon-box-vertical icon-box-light icon-box-type-image bg-no text-center">
                  <div class="icon-box-icon">
                    <img alt="" src="{{asset('assets/img/event-feature-4.png')}}">
                  </div>

                  <h3 class="icon-box-title">
                    Hackathon
                  </h3>

                  <div class="icon-box-description">
                    <p style="text-align: center;">
                      <span class="text-light opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="fw-section layout-full padding-top-1x padding-bottom-2x" data-offset-top="-50" id="speakers" style="background-color: #000;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <hr class="hr-solid hr-light" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

                <h2 class="block-title text-light text-center padding-top-3x">
                  Notorious Speakers &amp; Judges<small class="h4">Special This Year</small>
                </h2>

                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teammate teammate-dark-skin teammate-tile">
                      <div class="teammate-thumb">
                        <img alt="" src="{{asset('assets/img/event-team-1.jpg">
                      </div>

                      <div class="teammate-info-wrap">
                        <span class="teammate-info">Marketing, <a href="#">Confluence</a></span>
                        <h3 class="teammate-name">
                          Katharine Wells
                        </h3>

                        <div class="hidden-info">
                          <span class="teammate-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
                            <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-pinterest"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-vimeo"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teammate teammate-dark-skin teammate-tile">
                      <div class="teammate-thumb">
                        <img alt="" src="{{asset('assets/img/event-team-2.jpg">
                      </div>

                      <div class="teammate-info-wrap">
                        <span class="teammate-info">CEO, <a href="#">Telegram</a></span>
                        <h3 class="teammate-name">
                          Ray Singleton
                        </h3>

                        <div class="hidden-info">
                          <span class="teammate-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
                            <a class="social-btn" href="#"><i class="socicon-telegram"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-twitter"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teammate teammate-dark-skin teammate-tile">
                      <div class="teammate-thumb">
                        <img alt="" src="{{asset('assets/img/event-team-8.jpg">
                      </div>

                      <div class="teammate-info-wrap">
                        <span class="teammate-info">PR Manager, <a href="#">Frinkle Ltd.</a></span>
                        <h3 class="teammate-name">
                          Daisy Nelson
                        </h3>

                        <div class="hidden-info">
                          <span class="teammate-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
                            <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-mail"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-tumblr"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teammate teammate-dark-skin teammate-tile">
                      <div class="teammate-thumb">
                        <img alt="" src="{{asset('assets/img/event-team-3.jpg">
                      </div>

                      <div class="teammate-info-wrap">
                        <span class="teammate-info">CTO, <a href="#">BitBucket</a></span>
                        <h3 class="teammate-name">
                          Joshua Owens
                        </h3>

                        <div class="hidden-info">
                          <span class="teammate-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
                            <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-mail"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-twitter"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teammate teammate-dark-skin teammate-tile">
                      <div class="teammate-thumb">
                        <img alt="" src="{{asset('assets/img/event-team-4.jpg">
                      </div>

                      <div class="teammate-info-wrap">
                        <span class="teammate-info">CEO, <a href="#">Awesomeware</a></span>
                        <h3 class="teammate-name">
                          Douglas Vargas
                        </h3>

                        <div class="hidden-info">
                          <span class="teammate-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
                            <a class="social-btn" href="#"><i class="socicon-vkontakte"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-wordpress"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-instagram"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teammate teammate-dark-skin teammate-tile">
                      <div class="teammate-thumb">
                        <img alt="" src="{{asset('assets/img/event-team-5.jpg">
                      </div>

                      <div class="teammate-info-wrap">
                        <span class="teammate-info">Lead Developer, <a href="#">Git</a></span>
                        <h3 class="teammate-name">
                          Carlos Solis
                        </h3>

                        <div class="hidden-info">
                          <span class="teammate-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
                            <a class="social-btn" href="#"><i class="socicon-stackoverflow"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-twitter"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teammate teammate-dark-skin teammate-tile">
                      <div class="teammate-thumb">
                        <img alt="" src="{{asset('assets/img/event-team-6.jpg">
                      </div>

                      <div class="teammate-info-wrap">
                        <span class="teammate-info">Lead Designer, <a href="#">Dribbble</a></span>
                        <h3 class="teammate-name">
                          Lottie Wilkins
                        </h3>

                        <div class="hidden-info">
                          <span class="teammate-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
                            <a class="social-btn" href="#"><i class="socicon-dribbble"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-behance"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="teammate teammate-dark-skin teammate-tile">
                      <div class="teammate-thumb">
                        <img alt="" src="{{asset('assets/img/event-team-7.jpg">
                      </div>

                      <div class="teammate-info-wrap">
                        <span class="teammate-info">HR, <a href="#">BrainStorage</a></span>
                        <h3 class="teammate-name">
                          Theresa Parks
                        </h3>

                        <div class="hidden-info">
                          <span class="teammate-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
                          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
                            <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-twitter"></i></a>
                            <a class="social-btn" href="#"><i class="socicon-skype"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="fw-section layout-full padding-top-3x" data-offset-top="-10" id="partners" style="background-color: #000;">
          <div class="container-fluid">
            <h2 class="block-title text-light text-center">
              Some Of Our Fantastic Partners<small class="h4">Disrupt can’t happen without the support of our amazing sponsors and attendees.</small>
            </h2>
            <img alt="" class="single-image attachment-full size-full" data-aos="" src="{{asset('assets/img/event-partners.jpg">
            <div class="text-block padding-top-1x margin-bottom-1x">
              <h4 style="text-align: center;">
                <span class="opacity-50 text-light">Interested in StartApp Battle?</span>
              </h4>
            </div>

            <div class="text-center">
              <a class="btn btn-solid btn-rounded btn-light btn-nl waves-effect waves-dark" href="#">Become a partner</a>
            </div>
          </div>
        </section>

        <section class="fw-section layout-full section-no-gap padding-top-3x" data-offset-top="-10" id="gallery" style="background-color: #000;">
          <div class="container-fluid">
            <h2 class="block-title text-light text-center">
              The Best Place to Battle<small class="h4">Sidney, Australia</small>
            </h2>

            <div class="gallery-grid grid-justified">
              <div class="grid-item">
                <a class="gallery-tile" data-size="1000x666" href="{{asset('assets/img/event-gallery-1.jpg">
                <figure class="without-caption">
                  <div class="image" style="background-image: url({{asset('assets/img/event-gallery-1.jpg);">
                  </div>
                </figure></a>
              </div>

              <div class="grid-item">
                <a class="gallery-tile" data-size="1000x674" href="{{asset('assets/img/event-gallery-2.jpg">
                <figure class="without-caption">
                  <div class="image" style="background-image: url({{asset('assets/img/event-gallery-2.jpg);">
                  </div>
                </figure></a>
              </div>

              <div class="grid-item">
                <a class="gallery-tile" data-size="1000x667" href="{{asset('assets/img/event-gallery-3.jpg">
                <figure class="without-caption">
                  <div class="image" style="background-image: url({{asset('assets/img/event-gallery-3.jpg);">
                  </div>
                </figure></a>
              </div>

              <div class="grid-item">
                <a class="gallery-tile" data-size="1000x653" href="{{asset('assets/img/event-gallery-4.jpg">
                <figure class="without-caption">
                  <div class="image" style="background-image: url({{asset('assets/img/event-gallery-4.jpg);">
                  </div>
                </figure></a>
              </div>

              <div class="grid-item">
                <a class="gallery-tile" data-size="1000x667" href="{{asset('assets/img/event-gallery-5.jpg">
                <figure class="without-caption">
                  <div class="image" style="background-image: url({{asset('assets/img/event-gallery-5.jpg);">
                  </div>
                </figure></a>
              </div>

              <div class="grid-item">
                <a class="gallery-tile" data-size="1000x620" href="{{asset('assets/img/event-gallery-6.jpg">
                <figure class="without-caption">
                  <div class="image" style="background-image: url({{asset('assets/img/event-gallery-6.jpg);">
                  </div>
                </figure></a>
              </div>
            </div>
          </div>
        </section>

        <section class="fw-section layout-full padding-top-3x padding-bottom-3x" data-offset-top="-10" id="tickets" style="background-color: #000;">
          <div class="container-fluid">
            <h2 class="block-title text-light text-center">
              Tickets<small class="h4">Buy a ticket. Support startups in their rivalry for the main prize.</small>
            </h2>

            <div class="row">
              <div class="col-sm-4">
                <div>
                  <div class="pricing-plan pricing-plan-v3 text-center">
                    <div class="inner">
                      <h3 class="pricing-plan-name">
                        Hardware Alley Exhibitor Package
                      </h3>

                      <div class="pricing-plan-badge-wrap">
                        <span class="pricing-plan-badge bg-muted">Exhibitor</span>
                      </div>

                      <div class="pricing-plan-features">
                        <h5 class="pricing-plan-feature-title">
                          Features
                        </h5>

                        <ul class="text-gray">
                          <li>Two General Admission Conference Passes
                          </li>

                          <li>One day exhibit in Hardware Alley
                          </li>
                        </ul>
                      </div>

                      <hr>

                      <h4 class="pricing-plan-price padding-top-1x">
                        $1720
                      </h4>
                      <span class="text-gray">/ 2 Tickets</span>
                      <div class="padding-top-1x">
                        <div class="text-center">
                          <a class="btn btn-transparent btn-rounded btn-primary btn-default waves-effect waves-light" href="#">Buy Tickets</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div>
                  <div class="pricing-plan pricing-plan-v3 text-center">
                    <div class="inner">
                      <h3 class="pricing-plan-name">
                        General Admission Ticket
                      </h3>

                      <div class="pricing-plan-badge-wrap">
                        <span class="pricing-plan-badge bg-muted">General</span>
                      </div>

                      <div class="pricing-plan-features">
                        <h5 class="pricing-plan-feature-title">
                          Features
                        </h5>

                        <ul class="text-gray">
                          <li>Three day General Admission Conference Pass
                          </li>

                          <li>Access to over 300 early stage startups, Startup Battlefield competition and main-stage content
                          </li>
                        </ul>
                      </div>

                      <hr>

                      <h4 class="pricing-plan-price padding-top-1x">
                        $2599
                      </h4>
                      <span class="text-gray">/ Ticket</span>
                      <div class="padding-top-1x">
                        <div class="text-center">
                          <a class="btn btn-solid btn-rounded btn-primary btn-default waves-effect waves-light" href="#">Buy Ticket</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div>
                  <div class="pricing-plan pricing-plan-v3 text-center">
                    <div class="inner">
                      <h3 class="pricing-plan-name">
                        Startup Alley Exhibitor Package
                      </h3>

                      <div class="pricing-plan-badge-wrap">
                        <span class="pricing-plan-badge bg-muted">Exhibitor</span>
                      </div>

                      <div class="pricing-plan-features">
                        <h5 class="pricing-plan-feature-title">
                          Features
                        </h5>

                        <ul class="text-gray">
                          <li>Two General Admission Conference Passes
                          </li>

                          <li>One day exhibit in Startup Alley
                          </li>
                        </ul>
                      </div>

                      <hr>

                      <h4 class="pricing-plan-price padding-top-1x">
                        $1720
                      </h4>
                      <span class="text-gray">/ 2 Tickets</span>
                      <div class="padding-top-1x">
                        <div class="text-center">
                          <a class="btn btn-transparent btn-rounded btn-primary btn-default waves-effect waves-light" href="#">Buy Tickets</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="fw-section layout-full section-no-gap" data-offset-top="-10" id="contacts">
          <div class="container-fluid">
            <div class="row" style="background-color: #f5f5f5;">
              <div class="col-sm-6">
                <div class="google-map" data-address="Sydney, Australia" data-disable-controls="true" data-height="500" data-scrollwheel="false" data-zoom="14">
                </div>
              </div>

              <div class="col-sm-6" style="padding: 8% 5% !important;">
                <div class="row split-section">
                  <div class="col-sm-12">
                    <div class="text-block">
                      <h2>
                        How To Find Us
                      </h2>
                    </div>

                    <div class="contacts-tile">
                      <div class="contacts-tile-body">
                        <div class="contacts-tile-country">
                          <span class="country-flag"><img alt="" src="{{asset('assets/img/australia-flag.png')}}"></span><span class="country-name">Australia</span>
                        </div>

                        <h3 class="contacts-tile-title">
                          Sydney
                        </h3>

                        <div class="contacts-tile-content">
                          <p>
                            <span class="text-gray">44 West 28th Street 8th Floor,</span><br>
                            <span class="text-gray">Sydney, Australia 10001</span>
                          </p>

                          <p>
                            <a href="mailto:info@stavrtapp.com">info@stavrtapp.com</a><br>
                            <span class="text-gray">T: (8610) 66575566</span><br>
                            <span class="text-gray">F: (8610) 66573553</span>
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

        <section class="fw-section layout-full-equal section-no-gap" data-offset-top="180">
          <div class="container-fluid">
            <div class="row" style="background-color: #f5f5f5;">
              <div class="col-sm-6" style="padding: 8% 5% !important;">
                <div class="row split-section last-section">
                  <div class="col-sm-12">
                    <div class="text-block">
                      <h2>
                        Subscribe for News
                      </h2>
                    </div>

                    <section class="widget widget_startapp_subscribe" id="startapp_subscribe-2" style="padding-bottom:0; border-bottom: 0;">
                      <form class="subscribe-form" method="post" novalidate="" target="_blank">
                        <p>
                          Subscribe to our newspaper. Be informed about all new themes and updates.
                        </p>

                        <div class="input-group">
                          <i class="material-icons mail_outline"></i> <input name="EMAIL" placeholder="Enter email" type="email"> <button type="submit"><i class="material-icons send"></i></button>
                        </div>
                      </form>
                    </section>

                    <div class="text-block">
                      <p>
                        Or follow us on social networks
                      </p>
                    </div>

                    <div class="social-bar sb-border sb-rounded sb-dark-skin text-left padding-bottom-1x">
                      <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="Facebook"><i class="socicon-facebook"></i></a>
                      <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="socicon-linkedin"></i></a>
                      <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="https://twitter.com/8guild" title="Twitter"><i class="socicon-twitter"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6" style="background-image: url({{asset('assets/img/event-split-bg.jpg)"></div>
            </div>
          </div>
        </section>
      </article>

      <!-- Main Footer -->
      <footer class="site-footer footer-light">
        <div class="copyright bg-primary text-light">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright-text">
                  StartApp. Made with <i class="material-icons favorite_border"></i> by <a href="http://8guild.com">8Guild</a>
                </p>
              </div>

              <div class="col-sm-6 text-right">
                <nav class="footer-menu">
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="index.html">Home</a>
                    </li>

                    <li class="menu-item">
                      <a href="#">Careers</a>
                    </li>

                    <li class="menu-item">
                      <a href="#">Contacts</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </footer><!-- Main Footer END -->
    </main>

    <!-- PhotoSwipe PopUp Markup -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>

            <button class="pswp__button pswp__button--close" title=""></button>
            <button class="pswp__button pswp__button--share" title=""></button>
            <button class="pswp__button pswp__button--fs" title=""></button>
            <button class="pswp__button pswp__button--zoom" title=""></button>

            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip">
            </div>
          </div>

          <button class="pswp__button pswp__button--arrow--left" title=""></button>
          <button class="pswp__button pswp__button--arrow--right" title=""></button>

          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div><!-- PhotoSwipe PopUp Markup END -->

    <a class="scroll-to-top-btn" href="#"><i class="material-icons keyboard_arrow_up"></i></a>
    <div class="site-backdrop"></div>

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
        <script type="text/javascript" src="{{asset('assets/js/vendor/jquery.downCount.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/photoswipe.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/photoswipe-ui-default.min.js')}}"></script>
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyA5DLwPPVAz88_k0yO2nmFe7T9k1urQs84"></script>
        <script type="text/javascript" src="//startapp.8guild.com/wp-content/plugins/startapp-core/{{asset('assets/js/vendor/gmap3.min.js')}}"></script>
      <!-- Vendor Script Section END-->
      <!-- *************************************************************************************** -->
    <script type="text/javascript" src="{{asset('assets/js/startapp-theme.js')}}"></script>
    <!-- **************************************************************************************************************************** -->
    <!-- Scripts section END -->
  </body>
</html>