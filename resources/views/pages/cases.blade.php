@extends('layout.template')
@section('content')
			<div class="page-title title-size-lg text-light" style="background-image: url(assets/img/demo-marketing-page-title.jpg);">
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          {{$case->client or 'Client Name Missing'}}
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
		          		<span property="name">{{$case->client or 'Client Name Missing'}}</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<article>
			  <section class="fw-section padding-top-3x">
			    <div class="container">
			      <div class="row">
			        <div class="col-lg-8 col-md-8 col-sm-12">
			          <div class="cs_headline">
			            <h4>
			              Investigating Customer Experience to Improve Performance
			            </h4>

			            <h5>
			              <span class="text-semibold">Client:</span> <span class="text-gray">Alaska Enterprise</span><br>
			              <span class="text-semibold">Working Time:</span> <span class="text-gray">May 2015 &#8211; January 2016</span><br>
			              <span class="text-semibold">Purpose:</span> <span class="text-gray">Сonsolidation in the market of high technologies and advertising campaign</span>
			            </h5>

			            <p>
			              <span class="text-gray">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit amet, ultrices eu eros. Phasellus feugiat libero quis efficitur sodales. Nullam rhoncus, magna facilisis porttitor dapibus, augue diam tristique tortor, at porta turpis dui vitae leo. Sed at enim consectetur, ornare libero eget, suscipit sem.</span>
			            </p>
			          </div>

			          <hr class="hr-solid hr-primary margin-top-2x margin-bottom-1x" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

			          <div class="tabs tabs-horizontal tabs-horizontal-left" id="tta-cb0adc6a">
			            <ul class="nav-tabs nav-tabs-dark text-left" role="tablist">
			              <li class="active">
			                <a data-toggle="tab" href="#1477817996017-ea495ea4-4ba3" role="tab">The Challenge</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1477817996105-c230f773-e316" role="tab">Insights</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1477818035812-a33fad81-0d57" role="tab">The Plan</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1477818062116-12e90849-2cc6" role="tab">Results</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1477818046405-821b8c79-e7fc" role="tab">Awards and Recognition</a>
			              </li>
			            </ul>

			            <div class="tab-content text-dark">
			              <div class="tab-pane transition fade in active" id="1477817996017-ea495ea4-4ba3">
			                <div class="text-block">
			                  <h6>
			                    <span class="text-gray">Two Simple Ways To Reach Stability</span>
			                  </h6>

			                  <p>
			                    <img alt="demo-marketing-the_challenge" class="alignright" src="assets/img/demo-marketing-the_challenge.png">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit amet, ultrices eu eros. Phasellus feugiat libero quis efficitur sodales. Nullam rhoncus, magna facilisis porttitor dapibus, augue diam tristique tortor, at porta turpis dui vitae leo. Sed at enim consectetur, ornare libero eget, suscipit sem. Donec nulla sem, elementum at cursus in, lacinia nec sem. Phasellus consectetur, turpis sed congue laoreet, dui diam cursus eros.
			                  </p>
			                </div>
			              </div>

			              <div class="tab-pane transition fade" id="1477817996105-c230f773-e316">
			                <div class="text-block">
			                  <h6>
			                    <span class="text-gray">Two Simple Ways To Reach Stability</span>
			                  </h6>

			                  <p>
			                    <img alt="demo-marketing-insights" class="alignright" src="assets/img/demo-marketing-insights.png">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit amet, ultrices eu eros. Phasellus feugiat libero quis efficitur sodales. Nullam rhoncus, magna facilisis porttitor dapibus, augue diam tristique tortor, at porta turpis dui vitae leo. Sed at enim consectetur, ornare libero eget, suscipit sem. Donec nulla sem, elementum at cursus in, lacinia nec sem. Phasellus consectetur, turpis sed congue laoreet, dui diam cursus eros.
			                  </p>
			                </div>
			              </div>

			              <div class="tab-pane transition fade" id="1477818035812-a33fad81-0d57">
			                <div class="text-block">
			                  <h6>
			                    <span class="text-gray">Two Simple Ways To Reach Stability</span>
			                  </h6>

			                  <p>
			                    <img alt="demo-marketing-the_plan" class="alignright" src="assets/img/demo-marketing-the_plan.png">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit amet, ultrices eu eros. Phasellus feugiat libero quis efficitur sodales. Nullam rhoncus, magna facilisis porttitor dapibus, augue diam tristique tortor, at porta turpis dui vitae leo. Sed at enim consectetur, ornare libero eget, suscipit sem. Donec nulla sem, elementum at cursus in, lacinia nec sem. Phasellus consectetur, turpis sed congue laoreet, dui diam cursus eros.
			                  </p>
			                </div>
			              </div>

			              <div class="tab-pane transition fade" id="1477818062116-12e90849-2cc6">
			                <div class="text-block">
			                  <h6>
			                    <span class="text-gray">Two Simple Ways To Reach Stability</span>
			                  </h6>

			                  <p>
			                    <img alt="demo-marketing-results" class="alignright" src="assets/img/demo-marketing-results.png">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit amet, ultrices eu eros. Phasellus feugiat libero quis efficitur sodales. Nullam rhoncus, magna facilisis porttitor dapibus, augue diam tristique tortor, at porta turpis dui vitae leo. Sed at enim consectetur, ornare libero eget, suscipit sem. Donec nulla sem, elementum at cursus in, lacinia nec sem. Phasellus consectetur, turpis sed congue laoreet, dui diam cursus eros.
			                  </p>
			                </div>
			              </div>

			              <div class="tab-pane transition fade" id="1477818046405-821b8c79-e7fc">
			                <div class="text-block">
			                  <h6>
			                    <span class="text-gray">Two Simple Ways To Reach Stability</span>
			                  </h6>

			                  <p>
			                    <img alt="demo-marketing-awards_and_recognition" class="alignright" src="assets/img/demo-marketing-awards_and_recognition.png">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit amet, ultrices eu eros. Phasellus feugiat libero quis efficitur sodales. Nullam rhoncus, magna facilisis porttitor dapibus, augue diam tristique tortor, at porta turpis dui vitae leo. Sed at enim consectetur, ornare libero eget, suscipit sem. Donec nulla sem, elementum at cursus in, lacinia nec sem. Phasellus consectetur, turpis sed congue laoreet, dui diam cursus eros.
			                  </p>
			                </div>
			              </div>
			            </div>
			          </div>

			          <hr class="hr-solid hr-primary margin-top-2x margin-bottom-1x" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

			          <div class="image-carousel carousel-navs-rounded carousel-navs-sm carousel-navs-on-sides carousel-dark carousel-dots-outside carousel-dots-center without-captions margin-bottom-3x margin-top-2x" data-slick='{"arrows":true,"dots":true,"fade":false,"infinite":false,"autoplay":false,"autoplaySpeed":3000,"adaptiveHeight":false}'>
			            <figure class="carousel-item">
			              <img alt="" src="assets/img/demo-marketing-case-01.jpg">
			            </figure>

			            <figure class="carousel-item">
			              <img alt="" src="assets/img/demo-marketing-case-02.jpg">
			            </figure>
			          </div>

			          <div class="text-block">
			            <p>
			              <span class="text-gray">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit amet, ultrices eu eros. Phasellus feugiat libero quis efficitur sodales. Nullam rhoncus, magna facilisis porttitor dapibus, augue diam tristique tortor, at porta turpis dui vitae leo. Sed at enim consectetur, ornare libero eget, suscipit sem. Donec nulla sem, elementum at cursus in, lacinia nec sem. Phasellus consectetur, turpis sed congue laoreet, dui diam cursus eros, vitae tincidunt neque mi non tellus. Vestibulum convallis est non velit vulputate auctor. Donec nec gravida purus. Aliquam a ante sit amet lectus imperdiet faucibus in a orci.</span>
			            </p>

			            <p>
			              <span class="text-gray">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit amet, ultrices eu eros. Phasellus feugiat libero quis efficitur sodales. Nullam rhoncus, magna facilisis porttitor dapibus, augue diam tristique tortor, at porta turpis dui vitae leo. Sed at enim consectetur, ornare libero eget, suscipit sem. Donec nulla sem, elementum at cursus in, lacinia nec sem. Phasellus consectetur, turpis sed congue laoreet, dui diam cursus eros, vitae tincidunt neque mi non tellus. Vestibulum convallis est non velit vulputate auctor. Donec nec gravida purus. Aliquam a ante sit amet lectus imperdiet faucibus in a orci. Pellentesque sed volutpat turpis. Aliquam vulputate id eros eu scelerisque. Donec bibendum sapien nulla, id hendrerit est ornare et. Proin dictum nisi sagittis velit malesuada scelerisque. Duis vulputate tristique eleifend.</span>
			            </p>

			            <p>
			              <span class="text-gray">Duis enim neque, scelerisque ullamcorper pretium et, accumsan vel est. Morbi enim lectus, auctor id diam quis, dapibus suscipit urna. Aenean sed aliquet lacus. Pellentesque rhoncus massa nec lectus lacinia auctor. Cras aliquet pulvinar nibh eget tincidunt.</span>
			            </p>
			          </div>

			          <div class="row padding-bottom-2x">
			            <div class="col-sm-4">
			              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
			                <span class="icon-box-backdrop" style="background-color: #000000;"></span>
			                
			                <div class="icon-box-icon">
			                  <img alt="" src="assets/img/demo-marketing-icon-01.png">
			                </div>

			                <h3 class="icon-box-title">
			                  Srtategy
			                </h3>

			                <div class="icon-box-description">
			                  <p>
			                    <span class="text-gray">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit</span>
			                  </p>
			                </div>
			              </div>
			            </div>

			            <div class="col-sm-4">
			              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-up text-center">
			                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>
			                
			                <div class="icon-box-icon">
			                  <img alt="" src="assets/img/demo-marketing-icon-03.png">
			                </div>

			                <h3 class="icon-box-title">
			                  Consulting
			                </h3>

			                <div class="icon-box-description">
			                  <p>
			                    <span class="text-gray">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit</span>
			                  </p>
			                </div>
			              </div>
			            </div>

			            <div class="col-sm-4">
			              <div class="icon-box icon-box-vertical icon-box-dark icon-box-bg-enabled icon-box-type-image bg-hover hover-scale-down text-center">
			                <span class="icon-box-backdrop" style="background-color: #0a0a0a;"></span>

			                <div class="icon-box-icon">
			                  <img alt="" src="assets/img/demo-marketing-icon-02.png">
			                </div>

			                <h3 class="icon-box-title">
			                  Advertising
			                </h3>

			                <div class="icon-box-description">
			                  <p>
			                    <span class="text-gray">Praesent convallis nibh in odio pellentesque aliquam. Vestibulum ipsum felis, porttitor vel viverra sit</span>
			                  </p>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-lg-4 col-md-4 col-sm-12 padding-bottom-2x">
	              <section class="widget widget_nav_menu">
	                <h3 class="widget-title">
	                  Featured Cases
	                </h3>

	                <div class="menu-case-studies-container">
	                  <ul class="menu">
	                    <li class="menu-item">
	                      <a href="#">Mobile Venture</a>
	                    </li>

	                    <li class="menu-item">
	                      <a href="#">Kalka Media</a>
	                    </li>

	                    <li class="menu-item">
	                      <a href="#">Cash Inc.</a>
	                    </li>

	                    <li class="menu-item">
	                      <a href="#">Alaska Enterprise</a>
	                    </li>

	                    <li class="menu-item">
	                      <a href="#">Team Agency</a>
	                    </li>

	                    <li class="menu-item">
	                      <a href="#">Must Group City Agency</a>
	                    </li>
	                  </ul>
	                </div>
	              </section>

	              <section class="widget widget_startapp_recent_posts">
	                <div class="post-item">
	                  <div class="post-item-info">
	                    <span class="post-item-date">November 2</span>
	                    <h3 class="post-item-title">
	                      <a href="#" rel="bookmark">Consultant-Client Relations</a>
	                    </h3>
	                  </div>
	                </div>

	                <div class="post-item">
	                  <div class="post-item-info">
	                    <span class="post-item-date">November 2</span>
	                    <h3 class="post-item-title">
	                      <a href="#" rel="bookmark">Competition in Modular Clusters</a>
	                    </h3>
	                  </div>
	                </div>

	                <div class="post-item">
	                  <div class="post-item-info">
	                    <span class="post-item-date">November 2</span>
	                    <h3 class="post-item-title">
	                      <a href="#" rel="bookmark">6 Steps to Getting Work Done</a>
	                    </h3>
	                  </div>
	                </div>

	                <div class="post-item">
	                  <div class="post-item-info">
	                    <span class="post-item-date">November 2</span>
	                    <h3 class="post-item-title">
	                      <a href="#" rel="bookmark">The Pros and Cons of Venture</a>
	                    </h3>
	                  </div>
	                </div>

	                <div class="post-item">
	                  <div class="post-item-info">
	                    <span class="post-item-date">November 2</span>
	                    <h3 class="post-item-title">
	                      <a href="#" rel="bookmark">5 Steps to Find a Business Mentor</a>
	                    </h3>
	                  </div>
	                </div>
	              </section>

	              <section class="widget widget_startapp_subscribe">
	                <h3 class="widget-title">
	                  Subscribe For News
	                </h3>

	                <form>
	                  <p>
	                    Subscribe to our newspaper. Be informed about all new themes and updates.
	                  </p>

	                  <div class="input-group">
	                    <i class="material-icons mail_outline"></i> <input name="EMAIL" placeholder="Enter email" type="email"> <button type="submit"><i class="material-icons send"></i></button>
	                  </div>
	                </form>
	              </section>
	            </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section with-overlay vc_custom_1478037444147 padding-top-3x padding-bottom-3x mobile-center" style="background-image: url(assets/img/demo-marketing-bg-02.jpg);">
			    <span class="overlay" style="opacity: 0.65; background-color: #3a63af;"></span>
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-8">
			          <div class="text-block">
			            <h4>
			              <span class="text-light">Aenean vulputate porta enim, sit amet ornare erat egestas sed. Suspendisse congue est vel tempus tristique. Aenean eu scelerisque arcu, ut fringilla nunc. Nulla placerat porttitor mi sit.</span>
			            </h4>
			          </div>
			        </div>

			        <div class="col-sm-4">
			          <div class="wpb_raw_code wpb_content_element wpb_raw_html">
			            <div class="wpb_wrapper">
			              <div class="padding-top-1x visible-lg visible-xs">
			              </div>

			              <div class="padding-top-2x visible-md visible-sm">
			              </div>
			            </div>
			          </div>

			          <div class="text-center">
			            <a class="btn btn-ghost btn-rounded btn-light btn-nl waves-effect waves-light margin-top-3x margin-bottom-3x" href="#">Become a partner</a>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>
			</article>
@stop