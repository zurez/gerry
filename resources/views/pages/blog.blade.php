@extends('layout.template')
@section('content')
			<section class="single-cover-image bg-parallax" data-parallax-speed="0.4" data-parallax-type="scroll" style="background-image: url({{asset('blog_images/'.$blog->imagefilepath)}}); height: 500px;">
			</section><!-- Page Title Start END -->

			<section class="fw-section">
			  <div class="container padding-top-3x">
			    <div class="row">
			    	<!-- Posts Column -->
			      <div class="col-lg-9 col-md-8 col-sm-8 padding-bottom-2x">
      		              <?php
		              	        $s= strtotime($blog->created_at);
        						$date= date("M d, Y ",$s);
		              ?>

			      	<!-- Post Section Start -->
			        <article>
			        	<!-- Section Start -->
			          <div class="container">
			            <header class="post-header">
			              <div class="column">
			                <a class="post-date" href="#">{{$date}}</a>by
			                <a href="#">{{$blog->display_name}}</a>
			                
			              </div>

			              <div class="column"></div>
			            </header>

			            <h1 class="post-title">
			              {{$blog->title}}
			            </h1>

			            <div class="featured-image padding-bottom-1x">
			              <img alt="" src="assets/img/demo-blog-grid-01.jpg">
			            </div>
			          </div><!-- Section END -->

			          <!-- Section Start -->
			          <section class="fw-section">
			            <div class="container">
	               			{!! $blog->description!!}
			            </div>
			          </section><!-- Section END -->


			         
			          <!-- Post Footer -->
			          <div class="container">

			            <div class="post-share-buttons">
			              <div class="column">
			                <a class="startapp-share-twitter" href="#"><i class="socicon-twitter"></i> Share on Twitter</a>
			              </div>

			              <div class="column">
			                <a class="startapp-share-facebook" href="#"><i class="socicon-facebook"></i> Share on Facebook</a>
			              </div>

			              <div class="column">
			                <a class="startapp-share-googleplus" href="#"><i class="socicon-googleplus"></i> Share on Google+</a>
			              </div>

			              <div class="column">
			                <a class="startapp-share-pinterest" href="#"><i class="socicon-pinterest"></i> Share on Pinterest</a>
			              </div>
			            </div>

			            <!-- Widget Start -->
			            <section class="post-author">
			              <div class="post-author-thumb">
			                <a href="#">
			                	<img alt="" src="assets/img/demo-marketing-author.jpg">
			                </a>
			              </div>

			              <div class="post-author-info">
			                <h3 class="post-author-name">
			                  <a href="#">{{$blog->display_name}}</a>
			                </h3>

			                <p>
			                  SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer<br>
			                  Palo Alto
			                </p>

			                <div class="social-bar sb-border sb-rounded sb-dark-skin inline">
			                  <a class="social-btn" href="#"><i class="socicon-instagram"></i></a>
			                  <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
			                  <a class="social-btn" href="#"><i class="socicon-odnoklassniki"></i></a>
			                  <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
			                </div>
			              </div>
			            </section><!-- Widget END -->

			    

			
			      
			        </article><!-- Post Section END -->
			      </div><!-- Posts Column END -->

			      <!-- Sidebar Column -->
			      <div class="col-lg-3 col-md-4 col-sm-4 padding-bottom-2x">
			      	<!-- Widget Start -->


              <!-- Widget Start -->
              <section class="widget widget_startapp_author"">
                <h2 class="widget-title">
                  
                </h2>

                <div class="startapp-author text-left">
                  <img alt="demo-marketing-author" src="assets/img/demo-marketing-author.jpg">

                  <p>
                    SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, ConsumerPalo Alto
                  </p>

                  <div class="social-bar sb-border sb-rounded sb-dark-skin inline">
                    <a class="social-btn" href="#"><i class="socicon-instagram"></i></a>
                    <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
                    <a class="social-btn" href="#"><i class="socicon-odnoklassniki"></i></a>
                    <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
                  </div>
                </div>
              </section><!-- Widget END -->


              <!-- Widget Start -->
              <section class="widget widget_startapp_recent_posts"">
                <h2 class="widget-title">
                  Recent Posts
                </h2>

                <div class="post-item">
                  <a class="post-item-thumb" href="blog-single-post-right-sidebar.html">
                  	<img alt="" src="assets/img/demo-blog-list-05-150x150.jpg">
                  </a>

                  <div class="post-item-info">
                    <span class="post-item-date">October 29</span>
                    <h3 class="post-item-title">
                      <a href="blog-single-post-right-sidebar.html" rel="bookmark">Incredible City View</a>
                    </h3>
                  </div>
                </div>

                <div class="post-item">
                  <a class="post-item-thumb" href="blog-single-post-right-sidebar.html">
                  	<img alt="" src="assets/img/demo-blog-list-04-150x150.jpg">
                  </a>

                  <div class="post-item-info">
                    <span class="post-item-date">October 29</span>
                    <h3 class="post-item-title">
                      <a href="blog-single-post-right-sidebar.html" rel="bookmark">Thoughts About Car Concepts</a>
                    </h3>
                  </div>
                </div>

                <div class="post-item">
                  <a class="post-item-thumb" href="blog-single-post-right-sidebar.html">
                  	<img alt="" src="assets/img/demo-blog-list-03-150x150.jpg">
                  </a>

                  <div class="post-item-info">
                    <span class="post-item-date">October 29</span>
                    <h3 class="post-item-title">
                      <a href="blog-single-post-right-sidebar.html" rel="bookmark">Drones and Delivery</a>
                    </h3>
                  </div>
                </div>
              </section><!-- Widget END -->


		        </div><!-- Sidebar Column END -->
			    </div>
			  </div>
			</section>
@stop