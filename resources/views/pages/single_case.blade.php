@extends('layout.template')
@section('content')
	<div class="page-title title-size-lg text-light">
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
	<section class="fw-section padding-bottom-4x">
			    <div class="container">
	          <h4 class="block-title text-dark text-left mobile-center">
	            With Large Arrows
	          </h4>

	          <div class="image-carousel carousel-navs-rounded carousel-navs-lg carousel-navs-on-sides with-captions slick-initialized slick-slider" data-slick="{&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;fade&quot;:false,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:3000,&quot;adaptiveHeight&quot;:false}"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
	            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 7980px; transform: translate3d(-1140px, 0px, 0px);" role="listbox"><figure class="carousel-item wp-caption slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 1140px;" tabindex="-1">
	              <img alt="" src="http://via.placeholder.com/1200X600">
	              <figcaption class="wp-caption-text">
	                School at Nicaragua
	              </figcaption>
	            </figure><figure class="carousel-item wp-caption slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1140px;" tabindex="-1" role="option" aria-describedby="slick-slide130">
	              <img alt="" src="../assets/img/shortcodes/image-gallery/demo-marketing-charity-06.jpg">
	              <figcaption class="wp-caption-text">
	                Small Wheat
	              </figcaption>
	            </figure><figure class="carousel-item wp-caption slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1140px;" tabindex="-1" role="option" aria-describedby="slick-slide131">
	              <img alt="" src="../assets/img/shortcodes/image-gallery/demo-marketing-charity-04.jpg">
	              <figcaption class="wp-caption-text">
	                Green Plants
	              </figcaption>
	            </figure><figure class="carousel-item wp-caption slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1140px;" tabindex="-1" role="option" aria-describedby="slick-slide132">
	              <img alt="" src="../assets/img/shortcodes/image-gallery/demo-marketing-charity-05.jpg">
	              <figcaption class="wp-caption-text">
	                Happy Child
	              </figcaption>
	            </figure><figure class="carousel-item wp-caption slick-slide" data-slick-index="3" aria-hidden="true" style="width: 1140px;" tabindex="-1" role="option" aria-describedby="slick-slide133">
	              <img alt="" src="../assets/img/shortcodes/image-gallery/demo-marketing-charity-07.jpg">
	              <figcaption class="wp-caption-text">
	                African Child
	              </figcaption>
	            </figure><figure class="carousel-item wp-caption slick-slide" data-slick-index="4" aria-hidden="true" style="width: 1140px;" tabindex="-1" role="option" aria-describedby="slick-slide134">
	              <img alt="" src="../assets/img/shortcodes/image-gallery/demo-marketing-charity-08.jpg">
	              <figcaption class="wp-caption-text">
	                School at Nicaragua
	              </figcaption>
	            </figure><figure class="carousel-item wp-caption slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 1140px;" tabindex="-1">
	              <img alt="" src="../assets/img/shortcodes/image-gallery/demo-marketing-charity-06.jpg">
	              <figcaption class="wp-caption-text">
	                Small Wheat
	              </figcaption>
	            </figure></div></div>

	            

	            

	            

	            
	          <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></div>
			    </div>
			  </section>
@stop