@extends('frontend_layout.design_layout')

@section('title')
contact-us

@endsection



@section('content')

  <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Contact</h2>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Contact Location Section-->
    <section class="contact-location-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Column-->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                	<div class="column-inner">
                    	<div class="image">
                        	<img src="images/icons/iceland.jpg" alt="" />
                        </div>
                        <h3>ICELAND</h3>
                        <div class="text"> Montreal Ave, Staten <br> Island,NY 10306</div>
                        <ul>
                            <li>E: abcd@yousite.com</li>
                            <li>H: 7.00 AM – 10.00PM</li>
                        </ul>
                    </div>
                </div>
                
                 <!--Column-->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                	<div class="column-inner">
                    	<div class="image">
                        	<img src="images/icons/france.jpg" alt="" />
                        </div>
                        <h3>FRANCE</h3>
                        <div class="text">West 14th North Street, <br> Suite 21, Netherlands</div>
                        <ul>
                            <li>E: abcd@yousite.com</li>
                            <li>H: 7.00 AM – 10.00PM</li>
                        </ul>
                    </div>
                </div>
                
                 <!--Column-->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                	<div class="column-inner">
                    	<div class="image">
                        	<img src="images/icons/switzerland.jpg" alt="" />
                        </div>
                        <h3>SWITZERLAND</h3>
                        <div class="text">Avennu Ave, Staten <br> Island,NY 10306 USA</div>
                        <ul>
                            <li>E: abcd@yousite.com</li>
                            <li>H: 7.00 AM – 10.00PM</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Contact Location Section-->
	
	<!--Contact Section-->
    <section class="contact-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
               <!--Map Column-->
                <div class="map-column col-lg-4 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	<!--Map Canvas-->
                        <div class="map-canvas"
                            data-zoom="12"
                            data-lat="-37.817085"
                            data-lng="144.955631"
                            data-type="roadmap"
                            data-hue="#ffc400"
                            data-title="Envato"
                            data-icon-path="images/icons/map-marker.png"
                            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                        </div>
                    </div>
                </div>
               
                <!--Form Column-->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	<!--Sec Title-->
                       	<div class="sec-title">
						   <h2>Contact us</h2>
						</div>
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="POST" action="{{url('/post-contact')}}" id="contact-form">
                            	{{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Your name" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email" value="" placeholder="Your email address" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone number" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Subject" required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Type your massage here..."></textarea>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit now</span></button>
                                    </div>                                        
                                </div>
                            </form>
                        </div>
                        <!--End Contact Form-->
						<h3>OUR SOCIALS LINKS</h3>
						<div class="print">Print this page to PDF for the complete set of vectors.</div>
                   		<ul class="social-icon-one">
							<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
                    </div>
                </div>
                
			</div>
        </div>
    </section>
    <!--End Faq Section-->
    
	<!--Main Footer-->
	<div class="bottom-parallax">
		
	</div>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->


@endsection