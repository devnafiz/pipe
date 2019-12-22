@extends('frontend_layout.design_layout')

@section('title')
|News
@endsection



@section('content')
 @if(Session::has('flash_message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>{{session('flash_message')}}</strong>
                                    </div>
          
                                     
                                    @endif
                                    @if(Session::has('flash_message_success'))
                                     <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>{{session('flash_message_warning')}}</strong>
                                    </div>
                                    @endif

   <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Lestest News</h2>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Lestest News</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Case Section-->
	<section class="case-section alternate gallery-page-case">
		<!-- <div class="auto-container">
			
			<div class="sec-title centered">
				<h2>Our Gallery</h2>
			</div>
		</div> -->
		<!--Four Item Carousel-->

		<div class="auto-container">
		
		<div class="row clearfix">
                @foreach($NewsList as $news)
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{url('/news/'.$news->id)}}"><img src="{{asset('images/backend_image/news/small/'.$news->image)}}" alt="" /></a>
                            <!-- <ul class="category">
                                <li><a href="blog-single.html">Initiative, </a></li>
                                <li><a href="blog-single.html">Programs</a></li>
                            </ul> -->
                        </div>
                        <div class="lower-content">
                            <!-- <div class="author">
                                Golifa Mona
                            </div> -->
                            <h5><a href="{{url('/news/'.$news->id)}}">{{$news->title}}</a></h5>
                            <!-- <div class="text">{!! str_limit($news->description, $limit = 150, $end = '...') !!}</div>
                            <ul class="post-date">
                                <li>{{ \Carbon\Carbon::parse($news->created_at)->format('d M Y')}}</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                @endforeach
                
               
                
            </div>
        </div>
		
	</section>
	



@endsection

@section('extra-js')

</script>

@endsection