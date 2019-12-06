<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sheikh Tube Mills @yield('title')</title>
<!-- Stylesheets -->
<link href="{{ asset('front_end/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('front_end/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('front_end/css/slick.css')}}" rel="stylesheet">
<link href="{{ asset('front_end/css/responsive.css')}}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{ asset('front_end/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('front_end/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
@yield('extra-css4')

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('front_end/js/respond.js')}}"></script><![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
   <!--  <div class="preloader"></div> -->
 	
	<!-- Main Header-->
    <header class="main-header header-style-two">
    	
    	<!--Header Top-->
    	<div class="header-top">
    		<div class="auto-container">
				<div class="clearfix">
					<!--Top Left-->
					<div class="top-left">
						<div class="text">Welcome to Lezo Financial Services, we have over 25 years of expertise</div>
					</div>
					<!--Top Right-->
					<div class="top-right">
						<!--Social Box-->
						<ul class="social-box">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-youtube"></span></a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
    	
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="{{url('/')}}"><img src="{{asset('front_end/images/logo2.jpg')}}" alt="" title=""    style="height: 61px;width: 152px;" 
    ></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                    	
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-pin"></span></div>
                            <ul>
								<li>Ahmed Mansion, <br>936,SK.Mujib Road, CTG.</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-technology-1"></span></div>
                            <ul>
								<li>+880-184-3507 243 <br> sheikhtubemills@gmail.com</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-clock"></span></div>
                            <ul>
								<li>10:00am to 6:00pm <br> Sunday Closed</li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Hidden Nav Toggler -->
		<!-- <div class="nav-toggler">
		   <div class="nav-btn"><button class="hidden-bar-opener"><span class="icon flaticon-menu"></span></button></div>
		</div> -->
		<!-- / Hidden Nav Toggler -->
		
        <!--Header Lower-->
        <div class="header-lower">
            
        	<div class="auto-container">
            	<div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current "><a href="{{url('/')}}">Home</a>
									
								</li>
								<li class=""><a href="{{url('/page/about-us')}}">About</a>
									
								</li>
								<li ><a href="{{url('/news')}}">News</a>
									
								</li>
								<li ><a href="{{url('/gallery')}}">Gallery</a>
									
								</li>
								<li class=""><a href="{{url('/products')}}">Products</a>
									
								</li>
								<li class=""><a href="{{url('/view-pre-order')}}">Pre Order</a>
									
								</li>
								<li><a href="{{url('/scrap')}}">Scrap</a></li>
								<li><a href="{{url('/contact-us')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
					
						<!--Option Box-->
                    	<div class="option-box">
							
							<!--Search Box-->
							<div class="search-box-outer">
								<div class="dropdown">
									<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
									<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
										<li class="panel-outer">
											<div class="form-container">
												<form method="post" action="{{url('/products/serach-product')}}">
													{{csrf_field()}}
													<div class="form-group">
														<input type="text" name="product_name" value="" placeholder="Search Here" required>
														<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
                    </div>
					<div class="side-curve"></div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li class="current "><a href="{{url('/')}}">Home</a>
									
								</li>
								<li class=""><a href="{{url('/page/about-us')}}">About</a>
									
								</li>
								<li ><a href="{{url('/news')}}">News</a>
									
								</li>
								<li class=""><a href="{{url('/gallery')}}">Gallery</a>
									
								</li>
								<li class=""><a href="{{url('/products')}}">Products</a>
									
								</li>
								<li class=""><a href="{{url('/view-pre-order')}}">Pre Order</a>
									
								</li>
								<li><a href="{{url('/scrap')}}">Scrap</a></li>
								<li><a href="{{url('/contact-us')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
	
	<!--FullScreen Menu-->
	<div class="fullscreen-menu">
		<!--Close Btn-->
		<div class="close-menu"><span class="flaticon-cancel-1"></span></div>
		
		<div class="menu-outer-container">
			<div class="menu-box">
				<nav class="full-menu">
					<ul class="navigation">
						<li ><a href="{{url('/')}}">Home</a>
							
						</li>
						<li class=""><a href="{{url('/page/about-us')}}">About</a>
							
						</li>
						<li ><a href="{{url('/news')}}">News</a>
							
						</li>
						<li ><a href="{{url('/gallery')}}">Gallery</a>
							
						</li>
						<li ><a href="{{url('/products')}}">Product</a>
							
						</li>
						<li class=""><a href="{{url('/view-pre-order')}}">Pre Order</a>
									</li>
						<li><a href="{{url('/scrap')}}">Scrap</a></li>			
						
						<li><a href="{{url('/contact-us')}}">Contact us</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div><!--End FullScreen Menu-->
	