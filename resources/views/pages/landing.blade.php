@extends('layout.template')
@section('content')

			<article class="page">
			  <section class="fw-section with-overlay bg-parallax padding-top-8x padding-bottom-8x" data-jarallax-video="{{asset('assets/vid/Slow_Typer.mp4')}}" data-parallax-speed="0.4" data-parallax-type="scroll" style="background-image: url(assets/vid/Slow_Typer.jpg);">
			    <span class="overlay" style="opacity: 0.4; background-color: #131e3f;"></span>

			    <div class="container">
	          <div class="text-block huge-text">
	            <h1 style="text-align: center;">
	              <span class="text-light text-semibold">Cognitive Research</span>
	            </h1>
	          </div>

	          <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
	              <div class="text-block">
	              <h4 style="text-align: center;">
	                  <span class="text-light text-thin">Helping application developers & their investors, SME's & their professional advisors to utilise technology and experienced commercial consultants to help them grow.</span>
	                
	                </h4>
	              </div>
	            </div>
	          </div>

	          <div class="row padding-top-1x">
	            <div class="col-sm-12 text-center">
	              <a class="btn btn-ghost btn-rounded btn-light btn-nl waves-effect waves-dark" href="{{url('service')}}">Learn More</a>
	              <a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="{{url('contact')}}">Contact Us</a>
	            </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-top-3x padding-bottom-1x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Cognitive Services<small class="h4">the hand that rocks the cradle.</small>
	          </h2>

	          <div class="row">
	          	<?php
	          		$services=DB::table('page')->where('category','service')->whereNull('deleted_at')
	          		->get();
	          	?>
	          	@foreach($services as $s)
	          	<div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="{{asset('page_images/'.$s->logo)}}">
	                </div>

	                <h3 class="icon-box-title">
	                  {{$s->title}}
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">{{$s->short_desc}}</span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="{{url('service',$s->id)}}">Learn More</a>
	                </div>
	              </div>
	            </div>
	          	@endforeach
	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/demo-marketing-feature-01.png">
	                </div>

	                <h3 class="icon-box-title">
	                  Strategy
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sapien sapien. Morbi elementum</span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="service-01.html">Learn More</a>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/demo-marketing-feature-02.png">
	                </div>

	                <h3 class="icon-box-title">
	                  Consulting
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sapien sapien. Morbi elementum</span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="service-01.html">Learn More</a>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/demo-marketing-feature-03.png">
	                </div>

	                <h3 class="icon-box-title">
	                  News Gathering & Monitoring
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">News gathering and curation helps us listen, benchmark and understand our market before engaging. </span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="service-01.html">Learn More</a>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/demo-marketing-feature-04.png">
	                </div>

	                <h3 class="icon-box-title">
	                  Advanced Analytics
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sapien sapien. Morbi elementum</span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="service-01.html">Learn More</a>
	                </div>
	              </div>
	            </div>
	          </div>

	          <div class="row">
	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/demo-marketing-feature-05.png">
	                </div>

	                <h3 class="icon-box-title">
	                  Marketing & Onboarding
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sapien sapien. Morbi elementum</span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="service-01.html">Learn More</a>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/demo-marketing-feature-06.png">
	                </div>

	                <h3 class="icon-box-title">
	                  Accelerating Growth
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sapien sapien. Morbi elementum</span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="service-01.html">Learn More</a>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/demo-marketing-feature-07.png">
	                </div>

	                <h3 class="icon-box-title">
	                 	Succession Planning
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">We help organizations make critical decisions related to sustainability strategy and environmental</span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="service-01.html">Learn More</a>
	                </div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-3 col-sm-6">
	              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
	                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

	                <div class="icon-box-icon">
	                  <img alt="" src="assets/img/demo-marketing-feature-08.png">
	                </div>

	                <h3 class="icon-box-title">
	                  Structured Finance
	                </h3>

	                <div class="icon-box-description">
	                  <p>
	                    <span class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sapien sapien. Morbi elementum</span>
	                  </p>
	                  <a class="btn btn-link btn-rounded btn-primary btn-sm" href="service-01.html">Learn More</a>
	                </div>
	              </div>
	            </div>
	          </div>
			    </div>
			  </section>


	

			  <section class="fw-section layout-full-equal section-no-gap">
			    <div class="container-fluid">
			      <div class="row">
			        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-3x padding-bottom-2x" style="background-color: #183978; padding-left: 96px !important; padding-right: 96px !important;">
                {!! Form::open(array('url'=>'contactus','method'=>'POST'))!!}
                  <div class="row home-contact-form">
                    <div class="col-sm-6" style="padding-right: 15px !important;">
                      <input name="name" placeholder="Your name" size="40" type="text" value="">
                    </div>

                    <div class="col-sm-6" style="padding-left: 15px !important;">
                      <input name="phone" placeholder="Your phone" size="40" type="text" value="">
                    </div>
                  </div>

                  <p>
                    <input name="email" placeholder="Your email" size="40" type="email" value="">

                    <textarea cols="40" name="message" placeholder="Your message" rows="4"></textarea>
                    <a href="#" class="btn btn-ghost btn-light" style="margin-top: 0; outline: none;" type="submit">Send Message <i class="material-icons send"></i></a>
                  </p>
                </form>
			        </div>

			        <div class="col-lg-6 col-md-6 col-sm-12 padding-top-3x padding-bottom-2x" style="background-color: #3f6bbe; padding-left: 96px !important; padding-right: 96px !important;">
	              <div class="text-block">
	                <h4 style="text-align: center;">
	                  <span class="text-light">Request a Call Back</span>
	                </h4>

	                <h2 style="text-align: center;">
	                  <span class="text-light">Duis enim neque, scelerisque ullamcorper pretium et, accumsan vel est.</span>
	                </h2>
	              </div>

	              <div class="text-block">
	                <p class="text-lg" style="text-align: center;">
	                  <span class="text-light">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</span>
	                </p>
	              </div>

	              <div class="text-block hide-on-1440">
	                <p class="text-lg" style="text-align: center;">
	                  <span class="text-light">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
	                </p>
	              </div>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-top-3x">
			    <div class="container">
	          <div class="row">
	            <div class="col-lg-6 col-md-6 col-sm-12">
	              <h2 class="block-title text-dark text-left tablet-center">
	                Meet The Team<small class="h4">Duis enim neque, scelerisque ullamcorper pretium et, accumsan vel est. Duis enim neque.</small>
	              </h2>
	            </div>

	           
	          </div>

	          <div class="row">
	            <div class="col-sm-4">
	              <div class="teammate teammate-dark-skin text-center teammate-rounded">
	                <div class="teammate-thumb">
	                  <img alt="" src="assets/img/demo-marketing-team-01.jpg">
	                </div>

	                <h3 class="teammate-name">
	                  Phill Terrence
	                </h3>
	                <span class="teammate-info">CEO, <a href="#">Bain &amp; Company</a></span>
	                <span class="teammate-info">Ph.D. in bioengineering. Investor in Collective Health and LendUp.</span>

	            
	              </div>
	            </div>

	            <div class="col-sm-4">
	              <div class="teammate teammate-dark-skin text-center teammate-rounded">
	                <div class="teammate-thumb">
	                  <img alt="" src="assets/img/demo-marketing-team-02.jpg">
	                </div>

	                <h3 class="teammate-name">
	                  Samuel Word
	                </h3>
	                <span class="teammate-info">CEO, <a href="#">Nielsen</a></span>
	                <span class="teammate-info">Ph.D. in bioengineering. Investor in Collective Health and LendUp.</span>

	            
	              </div>
	            </div>

	            <div class="col-sm-4">
	              <div class="teammate teammate-dark-skin text-center teammate-rounded">
	                <div class="teammate-thumb">
	                  <img alt="" src="assets/img/demo-marketing-team-03.jpg">
	                </div>

	                <h3 class="teammate-name">
	                  Jason Dome
	                </h3>
	                <span class="teammate-info">CEO, <a href="#">Cunfluence</a></span>
	                <span class="teammate-info">Ph.D. in bioengineering. Investor in Collective Health and LendUp.</span>

	            
	              </div>
	            </div>
	          </div>
			    </div>
			  </section>

			  <section class="fw-section padding-top-1x padding-bottom-2x">
			    <div class="container">
	          <div class="row">
	            <div class="col-lg-6 col-md-6 col-sm-12 tablet-center">
	              <h2 class="block-title text-dark text-left tablet-center">
	                 Case Studies<small class="h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac sapien sapien. Morbi elementum.</small>
	              </h2>
	            </div>

	            <div class="col-lg-6 col-md-6 col-sm-12 text-right tablet-center">
	              <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">See all cases&nbsp;<i class="material-icons trending_flat"></i></a>

	              <div class="padding-bottom-2x visible-sm visible-xs"></div>
	            </div>
	          </div>

	          <div class="row">
	            <div class="col-sm-4">
	              <div>
	                <article class="portfolio-tile">
	                  <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/demo-marketing-01.jpg"></a>

	                  <div class="portfolio-info">
	                    <h3 class="portfolio-title">
	                      <a href="#">Alaska Enterprise</a>
	                    </h3>

	                    <a class="btn btn-sm btn-primary btn-ghost" href="#">View Project</a>
	                  </div>
	                </article>
	              </div>
	            </div>

	            <div class="col-sm-4">
	              <div>
	                <article class="portfolio-tile">
	                  <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/demo-marketing-04.jpg"></a>

	                  <div class="portfolio-info">
	                    <h3 class="portfolio-title">
	                      <a href="#">Mobile Venture</a>
	                    </h3>

	                    <a class="btn btn-sm btn-primary btn-ghost" href="#">View Project</a>
	                  </div>
	                </article>
	              </div>
	            </div>

	            <div class="col-sm-4">
	              <div>
	                <article class="portfolio-tile">
	                  <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/demo-marketing-06.jpg"></a>

	                  <div class="portfolio-info">
	                    <h3 class="portfolio-title">
	                      <a href="#">Must Group City Agency</a>
	                    </h3>

	                    <a class="btn btn-sm btn-primary btn-ghost" href="#">View Project</a>
	                  </div>
	                </article>
	              </div>
	            </div>
	          </div>
			    </div>
			  </section>

			  <section class="fw-section with-overlay padding-top-3x padding-bottom-3x mobile-center" style="background-image: url(assets/img/demo-marketing-bg-01.jpg);">
			    <span class="overlay" style="opacity: 0.65; background-color: #3a63af;"></span>

			    <div class="container">
			      <div class="row">
			        <div class="col-sm-8">
			          <div class="text-block">
			            <h4>
			              <span class="text-dark">ARE YOU LOOKING FOR A DIFFERENT WORK EXPERIENCE?</span> <br>
			              <span class="text-light">We can offer you the freedom to always do the right thing for your customers, unburdened by unncecessary bureaucracy, overbearing management or internal politics. We're looking for agents of change, people with the ideas, experience and the ability to produce real outcomes and make a real difference to the future of our client's business.</span>
			            </h4>
			          </div>
			        </div>

			        <div class="col-sm-4">
	              <div class="padding-top-1x visible-lg visible-xs"></div>
	              <div class="padding-top-2x visible-md visible-sm"></div>

			          <div class="text-center">
			            <a class="btn btn-transparent btn-rounded btn-light btn-nl waves-effect waves-light margin-top-3x margin-bottom-3x" href="#">Join the team</a>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-top-3x padding-bottom-3x">
			    <div class="container">
	          <div class="row">
	            <div class="col-lg-6 col-md-6 col-sm-12">
	              <h2 class="block-title text-dark text-left tablet-center">
	                News<small class="h4"> news</small>
	              </h2>
	            </div>

	            <div class="col-lg-6 col-md-6 col-sm-12 text-right tablet-center">
	              <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="{{url('blog')}}">See all news&nbsp;<i class="material-icons trending_flat"></i></a>
	              <div class="padding-bottom-2x visible-sm visible-xs"></div>
	            </div>
	          </div>

	          <div class="row">

	          	@foreach($news as $n)
		              <?php
		              	        $s= strtotime($n->created_at);
        						$date= date("M d, Y ",$s);
		              ?>
	            <div class="col-sm-4">
	              <div class="blog-post-tile">
	                <article class="post-tile">
	                  <div class="post-body">
	                    <header class="post-header">
	                      <div class="column">
	                        <a class="post-date" href="#">{{$date}}</a>by {{$n->display_name}}
	                 
	                      </div>

	                      <div class="column">
	                        {{-- <a class="post-comments" href="#">2&nbsp;<i class="material-icons chat_bubble"></i></a> --}}
	                      </div>
	                    </header>

	                    <h3 class="post-title">
	                      <a href="{{url('blog',$n->id)}}">{{$n->title}}</a>
	                    </h3>


	                    <p class="post-excerpt summernote">
	                      	{{ strip_tags(substr($n->description,0,200)) }}
	                    </p>>
	                  </div>
	                </article>
	              </div>
	            </div>
	          	@endforeach

	          </div>
			    </div>
			  </section>
			</article>
<script type="text/javascript">
jQuery(function($) {


});

</script>
@stop