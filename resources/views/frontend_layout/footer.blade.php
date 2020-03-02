<!--Subscribe Style One-->
    <section class="subscribe-style-one">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h2>Newsletter Subscribe</h2>
                    <div class="text">Sign up today for hints, tips and the latest Updates.</div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <form action="javascript:void(0)" method="POST">
                    	{{csrf_field()}}
                        <div class="form-group clearfix">
                            <input onfocus="enableSubscribe();" onfocusout="checkSubscriber();" type="email" name="email"  id="subscribe_email"  placeholder="Enter Email Address" required>
                            <button type="submit" class="theme-btn btn-style-one" id="apply"><span class="txt">Subscribe</span></button>
                            <span id="statusSubcribe" onclick="checkSubscriber();" style="display: hidden;"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<!--End Subscribe Style One-->
	
	<!--Main Footer-->
    <div class="bottom-parallax">
		<footer class="main-footer">
			<!--Widgets Section-->
			<div class="auto-container">

				<div class="widgets-section">
					<div class="row clearfix">

						<!--Footer Column-->
						<div class="footer-column col-lg-4 col-md-6 col-sm-12">
							<!--About Widget-->
							<div class="footer-widget logo-widget">
								<div class="logo">
									<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
								</div>
								<div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </div>
								<a href="#" class="theme-btn btn-style-two"><span class="txt">Read More</span></a>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-lg-4 col-md-6 col-sm-12">
							<!--About Widget-->
							<div class="footer-widget links-widget">
								<h5>Usefull Links</h5>
								<div class="row clearfix">
									<ul class="link-list col-md-6 col-sm-6 col-xs-12">
										
										<li><a href="{{url('/faq')}}"> Faq</a></li>
										<li><a href="{{url('/view-delivery-tracking')}}">Delivery Tracking</a></li>
										<li><a href="{{url('/truck-rent')}}">Truck Rent </a></li>
										<li><a href="{{url('/pdf-download')}}">Download Pdf</a></li>
										
									</ul>
									<ul class="link-list col-md-6 col-sm-6 col-xs-12">
										<!-- <li><a href="#">About Industry</a></li> -->
										<li><a href="{{url('/career')}}">Careers</a></li>
										<li><a href="{{url('/add-testimonial')}}">Testimonials</a></li>
										<li><a href="{{url('/free-consultation')}}">Free Consultation</a></li>
										<li><a href="{{url('/agent')}}">Become Our Agent</a></li>
									</ul>
								</div>
							</div>
						</div>  

						<!--Footer Column-->
						<div class="footer-column col-lg-4 col-md-6 col-sm-12">
							<!--About Widget-->
							<div class="footer-widget news-widget">
								<h5>Latest News</h5>

								<div class="news-widget-block">
									<div class="inner">
										<div class="icon flaticon-world"></div>
										<div class="post-date">February 14, 2019</div>
										<div class="text"><a href="#">Seminar for improve  business profit & loss</a></div>
									</div>
								</div>

								<div class="news-widget-block">
									<div class="inner">
										<div class="icon flaticon-graduation-cap"></div>
										<div class="post-date">January 21, 2019</div>
										<div class="text"><a href="#">Experts Openion for save money for your future.</a></div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

				<!--Footer Info Section-->
				<div class="footer-info-section">
					<div class="row clearfix">

						<!--Info Block-->
						<div class="info-block col-md-4 col-sm-6 col-xs-12">
							<div class="inner">
								<div class="icon flaticon-pin"></div>
								<h6>Address</h6>
								<div class="text">Ahmed Mansion, 936,SK.Mujib Road, CTG.</div>
							</div>
						</div>

						<!--Info Block-->
						<div class="info-block col-md-4 col-sm-6 col-xs-12">
							<div class="inner">
								<div class="icon flaticon-technology-1"></div>
								<h6>Call Us On</h6>
								<div class="text">Front Desk: +880-184-3507 243</div>
							</div>
						</div>

						<!--Info Block-->
						<div class="info-block col-md-4 col-sm-6 col-xs-12">
							<div class="inner">
								<div class="icon flaticon-web"></div>
								<h6>Email at</h6>
								<div class="text">sheikhtubemills@gmail.com</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<!--Footer Bottom-->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="column col-md-6 col-sm-12 col-xs-12">
							<div class="copyright">Copyrights &copy; 2019 All Rights Reserved. Powered by <a href="#">Sheikh Tube Mills.</a></div>
						</div>
						<div class="nav-column col-md-6 col-sm-12 col-xs-12">
							<ul class="footer-nav">
								<li><a href="#">Customer Registration Coming Soon..</a></li>
								<li><a href="#">Certification</a></li>
								<li><a href="#">Terms & Condition</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer Bottom-->

		</footer>
	</div>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<!-- <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div> -->

<!-- Color Palate / Color Switcher -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d3d6a0c9b94cd38bbe9ad03/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script type="text/javascript">
	// $.ajaxSetup({
 //                headers: {
 //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 //          }
 //        });

	

	// $("#apply").click(function(e){
	// 	//e.preventDefault();
		
		
 //          e.preventDefault();
	// 	var email=$("input[name=email]").val();
	// 	//alert(email);

	// 	$.ajax({

	// 		     type:'POST',
	// 		     url :'/subscribe',
	// 		     data:{email:email},
	// 		     success:function(data){

 //                     alert(data.success);
	// 		     	//$("#success").text('Successfully Subscribe Email');
	// 		     }





	// 	});



	// });



</script>
<script >
	function checkSubscriber(){
         var email=$('#subscribe_email').val();
		//alert(subscribe_email);
		$.ajax({
                 type:'post',
                 url:'/check-subcribe-email',
                 data:{email:email},
                 success:function(resp){
                   if(resp=="Exists"){
                   	 //alert("Email Already Exists");
                   	 $("#statusSubcribe").show();
                   	 $("#apply").hide();
                   	 $("#statusSubcribe").html("<font color='red'>Email Already Exists</font>");

                   }else if(resp=="Error"){
                       $("#statusSubcribe").html("<font color='red'>Email Not Valid</font>");
                   }else{
                   	  $("#statusSubcribe").html("<font color='#13b5ea'>Email Successfully Sent</font>");
                   }
                 	
                 },error:function(){

                 	alert("Error");
                 }


		});
	}
	function enableSubscribe(){
		$("#apply").show();
		$("#statusSubcribe").show();
	}

</script>
<!-- <script src="{{asset('front_end/js/ajax.js')}}"></script> -->
<!--End of Tawk.to Script-->
<script src="{{ asset('front_end/js/jquery.js')}}"></script>
<script src="{{ asset('front_end/js/popper.min.js')}}"></script>
<script src="{{ asset('front_end/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('front_end/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('front_end/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('front_end/js/appear.js') }}"></script>
<script src="{{ asset('front_end/js/owl.js')}}"></script>
<script src="{{ asset('front_end/js/wow.js')}}"></script>
<script src="{{ asset('front_end/js/slick.js')}}"></script>
<script src="{{ asset('front_end/js/jquery-ui.js')}}"></script>
<script src="{{ asset('front_end/js/script.js')}}"></script>

<!--Google Map APi Key-->
<<!-- script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="{{ asset('front_end/js/map-script.js')}}"></script> -->

<!--End Google Map APi-->


<script src="{{ asset('front_end/js/color-settings.js')}}"></script>

@yield('extra-css')
@yield('extra-js')


</body>
</html>