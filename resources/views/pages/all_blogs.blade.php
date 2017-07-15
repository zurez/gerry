@extends('layout.template')
@section('content')
<?php

$user=DB::table('users')->leftJoin('userdetails as ud','ud.user_id','=','users.id')
            ->where('users.id',1)->first();
?>
			<div class="page-title title-size-lg text-light" >
			  <div class="container">
			    <div class="inner">
			      <div class="column">
			        <h1>
			          Blog
			        </h1>
			      </div>

			      <div class="column">
			        <div class="breadcrumbs">
			          <span>
			          	<a href="{{url('/')}}">
			          		<span property="name">Home</span>
			          	</a>
			          </span>

		          	<i class="material-icons keyboard_arrow_right"></i>

		          	<span property="itemListElement" typeof="ListItem">
		          		<span property="name">Blog</span>
		          	</span>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="container padding-top-3x padding-bottom-3x" >
			  <div class="row">
			    <div class="col-md-9 col-sm-8" >
			      <div class="masonry-grid col-2">
			        <div class="gutter-sizer"></div>
			        <div class="grid-sizer"></div>
			        @foreach($blogs as $n)
		              <?php
		              	        $s= strtotime($n->created_at);
        						$date= date("M d, Y ",$s);
		              ?>
			        <div class="grid-item">
			          <article class="post-tile">
			            <div class="post-body">
			              <header class="post-header">
			                <div class="column">
			                  <a class="post-date" href="#">{{$date}}</a>by
			                  <a href="#">{{$n->display_name}}</a>
			                </div>

			         {{--        <div class="column">
			                  <a class="post-comments" href="#">0&nbsp;<i class="material-icons chat_bubble"></i></a>
			                </div> --}}
			              </header>

			              <h3 class="post-title">
			                <a href="{{url('blog',$n->id)}}">{{$n->title}}</a>
			              </h3>

			              <p class="post-excerpt">
			                {{ strip_tags(substr($n->description,0,200)) }}
			              </p>

			        {{--       <footer class="post-footer">
			                <div class="tags-links">
			                  <a href="#" rel="tag">Mentor</a>
			                  <a href="#" rel="tag">Venture</a>
			                </div>
			              </footer --}}
			            </div>
			          </article>
			        </div>
			        @endforeach
	
	

		

			      </div>
			    </div>

			    <div class="col-md-3 col-sm-4">
			      <div class="padding-top-2x visible-sm visible-xs"></div>

			      <aside class="sidebar" role="complementary">
{{-- 			        <section class="widget widget_search">
			          <form class="search-box">
			            <input name="s" placeholder="Search" type="text" value=""> <button type="submit"><i class="material-icons search"></i></button>
			          </form>
			        </section> --}}

			        <section class="widget widget_startapp_author">
			          <h2 class="widget-title">
			            {{$user->display_name}}
			          </h2>

			          <div class="startapp-author text-left">
			            <img alt="" src="{{asset('page_images/'.$user->display_pic)}}">
			            <p>
			              {{$user->bio}}
			            </p>


			          </div>
			        </section>

			        <section class="widget widget_recent_entries">
			          <h2 class="widget-title">
			            Older Posts
			          </h2>

			          <ul>
			          @foreach($older as $n)
  		              <?php
		              	        $s= strtotime($n->created_at);
        						$date= date("M d, Y ",$s);
		              ?>
				            <li>
			              <a href="{{url('blog',$n->id)}}">{{$n->title}}</a> <span class="post-date">{{$date}}</span>
			            </li>
			          @endforeach



			          </ul>
			        </section>

			   
			      </aside>
			    </div>
			  </div>
			</div>

			
@stop