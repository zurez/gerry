@extends('layout.template')
@section('content')
<?php
$user=DB::table('users')->leftJoin('userdetails as ud','ud.user_id','=','users.id')
            ->where('users.id',1)->first();
?>
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

			         {{--    <div class="post-share-buttons">
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
			            </div> --}}

			            <!-- Widget Start -->
			            <section class="post-author">
			              <div class="post-author-thumb">
			                <a href="#">
			                	<img alt="" src="{{asset('page_images/'.$user->display_pic)}}">
			                </a>
			              </div>

			              <div class="post-author-info">
			                <h3 class="post-author-name">
			                  <a href="#">{{$user->display_name}}</a>
			                </h3>

			                <p>
			                  {{$user->bio}}
			                </p>

			                <div class="social-bar sb-border sb-rounded sb-dark-skin inline">
			                
			                  <a class="social-btn" href="{{$user->linkedin}}" target="_blank"><i class="socicon-linkedin"></i></a>
			                  
			                  <a class="social-btn" href="{{$user->twitter}}" target="_blank"><i class="socicon-twitter"></i></a>
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
                  {{$user->display_name}}
                </h2>

                <div class="startapp-author text-left">
                  <img alt="author" src="{{asset('page_images/'.$user->display_pic)}}">
                  <p>
                    {{$user->bio}}
                  </p>

                  <div class="social-bar sb-border sb-rounded sb-dark-skin inline">
                    
                    <a class="social-btn" href="{{$user->linkedin}}" target="_blank"><i class="socicon-linkedin"></i></a>
                  {{--   <a class="social-btn" href="#"><i class="socicon-odnoklassniki"></i></a>
 --}}                    <a class="social-btn" href="{{$user->twitter}}"><i class="socicon-twitter"></i></a>
                  </div>
                </div>
              </section><!-- Widget END -->


              <!-- Widget Start -->
              <section class="widget widget_startapp_recent_posts"">
                <h2 class="widget-title">
                  Recent Posts
                </h2>
                <?php 
			          	$older= DB::table('blog')->orderBy('created_at','DESC')->limit(5)->get();
			          ?>
                @foreach($older as $n)
  		              <?php
		              	        $s= strtotime($n->created_at);
        						$date= date("M d, Y ",$s);
		              ?>
				        <div class="post-item">
				         <a class="post-item-thumb" href="{{url('blog',$n->custom_url)}}">
                  			<img alt="" src="{{asset('blog_images/'.$n->imagefilepath)}}">
                  		</a>
		                  <div class="post-item-info">
		                    <span class="post-item-date">{{$date}}</span>
		                    <h3 class="post-item-title">
		                       <a href="{{url('blog',$n->custom_url)}}" rel="bookmark">{{$n->title}}</a>
		                    </h3>
		                  </div>

                 
			      		</div>
			          @endforeach
       
              </section><!-- Widget END -->


		        </div><!-- Sidebar Column END -->
			    </div>
			  </div>
			</section>
@stop