@extends('frontend_layout.design_layout')

@section('title')
contact-us

@endsection
@section('extra-css')
<style>
.contact-form input, .contact-form textarea {
    width: 100%;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    border-radius: 0;
    padding-left: 10px;
    line-height: 46px;
    margin-bottom: 10px;
    background-color: #fff;
}
</style>
@endsection


@section('content')

  <!--Page Title-->
   <!--  <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Contact</h2>
        </div>
    </section> -->
    
    <!--Breadcrumb-->
    <!-- <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Contact</li>
            </ul>
        </div>
    </div> -->
    <!--End Page Title-->
    <section class="contact-location-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-12"> 
                   <div class="google-maps" >
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.5308002474303!2d91.81042131422619!3d22.33357794733148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8b7d3f57035%3A0x174693a5259ed4d2!2sSheikh+International+Trading+Company!5e0!3m2!1sen!2sbd!4v1518516662419" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<!--Contact Location Section-->
    <section class="contact-location-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Column-->

                <div class="info-column col-lg-6 col-md-6 col-sm-12">
                    <h2 class="title">Contact Us</h2>

                    <p class="pre-text">
                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br>
                Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat sed do eiusmod tempor incididunt ut labore
            </p>
            <div class="info">
                        
                <ul>
                    <li class="address">
                        <label class="icon"><i class="fa fa-home"></i></label>
                        <span>Ahmed Mansion,936,SK.Mujib Road, CTG</span>
                    </li>
                    <li class="hotline">
                        <label class="icon"><i class="fa fa-phone"></i></label>
                        <span>+880-184-3507 243</span>
                    </li>
                    <li class="email">
                        <label class="icon"><i class="fa fa-envelope"></i></label>
                        <span><a href="#">Sheikhtubemills@Gmail.Com</a></span>
                    </li>
                    
                </ul>
                <ul class="social-icon-one">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
                	
                </div>
                
                 <!--Column-->
                <div class="info-column col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form method="POST" action="{{url('/post-contact')}}" id="contact-form">
                                {{csrf_field()}}
                            <div class="contact-form-top">
                                <input type="text" placeholder="Your name..." name="name" id="name" class='required' Required>
                                <input type="email" placeholder="Your email" name="email" id="email" class='required' Required>
                                <input type="text" placeholder="Your phone number" name="phone" id="phone" class='required' Required>
                                <input type="text" placeholder="Subject"  name="subject" id="subject" class='required' Required>
                            </div>
                            <textarea name="message" id="message" cols="3" rows="3" placeholder="Comment..." class='required' Required></textarea>
                            
                                

                                 <input type="submit" value="Submit" class="button button-check-out" style="background-color:#13b5ea;color:#fff">
                            </form>

                        </div>
                    
                	
                </div>
                
                 <!--Column-->
                <!-- <div class="info-column col-lg-4 col-md-6 col-sm-12">
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
                </div> -->
                
            </div>
        </div>
    </section>
    <!--End Contact Location Section-->
	
	
    
	<!--Main Footer-->
	<div class="bottom-parallax">
		
	</div>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->


@endsection