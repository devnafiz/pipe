@extends('frontend_layout.design_layout')

@section('title')
|Pre Order
@endsection



@section('content')

   <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Pre Order</h2>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Pre Order</li>
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

		<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-10 pb-5">


                    <!--Form with header-->

                    <form action="{{url('/view-pre-order')}}" method="POST" name="accountFrom" id="accountFrom">
                    	{{csrf_field()}}
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Pre Order Form</h3>
                                    <p class="m-0">You Can Pre Order From Here</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-list text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="icon flaticon-pin text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Company Address" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="city_name" name="city_name" placeholder="City Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-briefcase text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-calculator text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="qty" name="qty" placeholder="Product Quantity" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="icon flaticon-pin text-info" ></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="destination_address" name="destination_address" placeholder="Destination Address" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control"  name="comment"placeholder="Enter Your Message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
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

@section('extra-js')
<script type="text/javascript">
	$(document).ready(function(){
        //alert('hi');

	});

	$("#accountFrom").validate({

         rules:{
                name:{
                	required:true,
                	minLength:2,
                	lettersonly:true
                },
                address:{
                	required:true,
                	minlength:4,
                	
                },
                city:{
                	required:true,
                	minlength:4,

                	
                },
                state:{
                	required:true,
                	

                	 },
              country:{
                	required:true
                	

                	
                }  	 

         },
         messages:{
                  name:"Please Inter Name",

                  address:{
                          required:"Please Provide your Address",
                          minlength:"Please must be atleast 6 cherecter"
                  },
                  city:{

                  	required:"PLease Inter  your City Name",
                  	minlength:"Please must be atleast 4 cherecter"
                  	
                  },

                  state:{

                  	required:"PLease Inter  your state Name",
                  	
                  	
                  },
                   country:{

                  	required:"PLease Inter  your Country Name",
                  	
                  	
                  },


         }

  });

</script>

@endsection