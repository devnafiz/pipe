@extends('frontend_layout.design_layout')

@section('title')
|News
@endsection



@section('content')

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
                
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!--Blog Single-->
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('images/backend_image/news/large/'.$NewsDetails->image)}}" alt="" />
                            </div>
                            <div class="lower-content">
                                <h6>{{$NewsDetails->title}}</h6>
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-user"></span>Admin</li>
                                    <!-- <li><span class="icon fa fa-eye"></span>32 Views</li> -->
                                    <li><span class="icon fa fa-comment-o"></span>10 Comments</li>
                                    <li><span class="icon fa fa-calendar"></span>{{{\Carbon\Carbon::parse($NewsDetails->created_at)->format('d M Y')}}}</li>
                                </ul>
                                <div class="text">
                                    <p>{!! $NewsDetails->description!!}</p>
                                </div>
                                <!--post-share-options-->
                                <div class="post-share-options clearfix">
                                    <div class="pull-left">
                                        <div class="addthis_inline_share_toolbox_4poi"></div>
                                       <!--  <ul class="social-icon-three">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul> -->
                                    </div>
                                    <!-- <div class="pull-right social-icon-three clearfix">
                                        <div class="new-posts">
                                            <a class="prev" href="#"><span class="icon fa fa-angle-left"></span>&ensp;Prev</a>
                                            <a class="next" href="#">Next&ensp;<span class="icon fa fa-angle-right"></span></a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <!--Comments Area-->
                    <div class="comments-area">
                        <div class="group-title"><h3>Comments <?php $CommentCount=DB::table('news_comments')->where('news_id',$NewsDetails->id)->count();?>(<?php echo $CommentCount; ?>)</h3></div>
                        <!--Comment Box-->

                        @foreach($newsComments as $Comment)
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="{{asset('images/backend_image/news/profile.png')}}" alt=""></div> 
                                <div class="comment-inner">
                                    <div class="comment-info clearfix"><strong>{{$Comment->name}}</strong></div>
                                    <!-- <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div> -->
                                    <div class="text">{{$Comment->comments}}.</div>
                                    <!-- <a href="#" class="reply">reply</a> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--Comment Box-->
                        
                        
                    </div>
                    
                    <!-- Comment Form -->
                    <div class="comment-form">  
                        <div class="group-title"><h3>Add Your Reviews</h3></div>
                        
                        <form method="post" action="{{url('/news/comment')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="news_id" value="{{$NewsDetails->id}}" required>
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="name" placeholder="Your Name*" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email Address*" required>
                                </div>
                                
                               
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="comments" placeholder="Write Your Comments..."></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" ><span class="txt">Submit</span></button>
                                </div>
                                
                            </div>
                        </form>
                            
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side sticky-container col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
                        <div class="inner sticky-box">
                        
                            <!-- Search Form -->
                            <div class="sidebar-widget search-box">
                                <form method="post" action="blog.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search" required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Form -->
                        
                            <!--Blog Category Widget-->
                           <!--  <div class="sidebar-widget sidebar-blog-category">
                                <div class="sidebar-title">
                                    <h6>Categories</h6>
                                </div>
                                <ul class="blog-cat-two">
                                    <li><a href="#">Business Growth <span>(6)</span></a></li>
                                    <li><a href="#">Consulting <span>(2)</span></a></li>
                                    <li><a href="#">Management <span>(5)</span></a></li>
                                    <li><a href="#">Customer Insights <span>(10)</span></a></li>
                                    <li><a href="#">Organization <span>(4)</span></a></li>
                                </ul>
                            </div> -->

                            <!-- Popular Posts -->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title"><h6>Recent News</h6></div>
                               @foreach($NewsList as $list)
                                <article class="post">
                                    <div class="text"><a href="blog-detail.html">{{$list->title}}</a></div>
                                    <div class="post-info">{{{\Carbon\Carbon::parse($list->created_at)->format('d M Y')}}}</div>
                                </article>
                                @endforeach

                                
                            </div>

                            
                            
                        </div>
                        
                    </aside>
                </div>
            
            </div>
            
        </div>

		
		
		
		
	</section>
	



@endsection

@section('extra-js')

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dd52e30b9e9cdca"></script>

@endsection