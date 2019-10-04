@extends('frontend_layout.design_layout')

@section('title')
shop
@endsection



@section('content')

   <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Gallery Fullwidth</h2>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Case Section-->
	<section class="case-section alternate gallery-page-case">
		<div class="auto-container">
			<!--Sec Title-->
			<div class="sec-title centered">
				<h2>Our Gallery</h2>
			</div>
		</div>
		<!--Four Item Carousel-->
		<div class="four-item-carousel owl-carousel owl-theme">

			<!--Case block-->
			@foreach($galleries as $gallery)
			<div class="case-block">
				<div class="inner-box">
					<div class="image">
						<img src="{{asset('images/backend_image/gallery/large/'.$gallery->image)}}" alt="" />
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<h3><a href="{{url('/view-gallery/'.$gallery->slug)}}" target="_blank">{{$gallery->client_name}}</a></h3>
									<div class="text">{!! str_limit($gallery->content,50)!!}</div>
									<a href="{{url('/view-gallery/'.$gallery->slug)}}" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			@endforeach

			<!--Case block-->
			
		</div>
		<!--Lower Box-->
		<div class="lower-box">
			<div class="case-text">Want to make new project? <a href="{{url('/contact-us')}}">contact with us.</a> Our expert is ready to help you</div>
		</div>
		
	</section>
	<!--End Case Section-->
    
    <!--Sponsors Section-->
   <!--  <section class="sponsors-section" style="background-image:url(images/background/1.jpg);">
    	<div class="auto-container">
        	<div class="carousel-outer">
                
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                </ul>
            </div>
    	</div>
    </section> -->
    <!--End Sponsors Section-->



@endsection