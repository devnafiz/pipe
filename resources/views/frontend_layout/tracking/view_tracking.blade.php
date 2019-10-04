@extends('frontend_layout.design_layout')

@section('title')
shop
@endsection



@section('content')
        @if(Session::has('flash_message'))
          
							          <div class="alert alert-error alert-block">
							            <button type="button" class="close" data-dismiss="alert">×</button> 
							                <strong>{{session('flash_message')}}</strong>
							        </div>
							        @endif
							        @if(Session::has('flash_message_success'))
							          
							          <div class="alert alert-error alert-block">
							            <button type="button" class="close" data-dismiss="alert">×</button> 
							                <strong>{{session('flash_message_success')}}</strong>
							        </div>
							        @endif
   <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2> Delivery Tracking</h2>
        </div>
    </section>

    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>delivery</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Case Section-->
	 <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix justify-content-md-center">
                
                <!--Form Column-->
               <!--  <div class="form-column column col-lg-8 col-md-8 col-sm-12 "> -->


                	 <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="welcome_text">
                                <h1>Get the fastest service </h1>
                                <h1>for your product</h1>
                                <div class="welcome_p">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
                                    <p>nibh euismod tincidunt ut laoreet dolore magna.</p>
                                </div>
                                 

                                <div class="welcome_form">
                                    <form action="{{url('/view-delivery-tracking')}}" method="POST">

                                    	{{csrf_field()}}
                                       <div class="row clearfix">
                                         <div class=" col-md-12 col-sm-12 col-xs-12">  
                                        	<input class="form-control" type="text" name="tracking_number" placeholder="Enter your Tracking Number">
                                        	<input class="submit" type="submit" value="Track your product">
                                    	</div>
                                    	<div class=" col-md-4 col-sm-4 col-xs-12"> 
                                       		 
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- <div class="sec-title">
                        <h2>Login Now</h2>
                    </div>
                    
               
                    <div class="styled-form login-form">
                   <div class="card card-login mx-auto text-center " style="background-color:#13b5ea;"> 	

			           <div class="card-body">
			            <form action="" method="post">
			                <div class="input-group form-group">
			                   
			                    <input type="text" name="name" class="form-control" placeholder="Name">
			                </div>

			                <div class="input-group form-group">
			                   
			                    <input type="text" name="password" class="form-control" placeholder="Password">
			                </div>

			                <div class="form-group">
			                    <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
			                </div>

			            </form>
			        </div>
                 </div> -->



			<!--Case block-->
					<!--   <form action="#" method="POST">
							<div class="agileinfo">
							</div>
								<div class="agileinfo-row">
									<div class="ferry ferry-from">
										<label>Name</label>
										<input type="text" name="Name" placeholder="" required="">
									</div>
									<div class="ferry ferry-from">
										<label>E-mail</label>
										<input type="email" name="email" placeholder="" required="">
									</div>
									<div class="ferry ferry-from">
										<label>Order ID</label>
										<input type="text" name="Name" placeholder="" required="">
									</div>
									
										
									<div class="clear"></div>
								</div>
							<div class="wthree-text"> 
								<div class="wthreesubmitaits">
									<input type="submit" name="submit" value="Submit">
								</div>  
							</div>
					</form> -->
				<!-- </div> -->
                    
                </div>
                
            </div>
        </div>
    </section>
	<!--End Case Section-->
    
   



@endsection

@section('extra-css')
<style type="text/css">

.welcome_form .form-control {
    /*border: medium none;*/
    border-radius: 50px;
    font-size: 16px;
    height: 55px;
    padding-left: 35px;
    width: 100%;
}


.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 2px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.submit {
    background: #13b5ea none repeat scroll 0 0;
    border: medium none;
     border-radius: 50px;
    color: #ffffff;
    font-weight: 700;
    height: 90%;
    position: absolute;
    right: 2%;
    text-transform: capitalize;
    top: 5.7%;
    width: 260px;
}

 .input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}

   .input-group-prepend span{
            width: 50px;
            background-color: #ff0000;
            color: #fff;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;
        }

        .login_btn{
            width: 130px;
        }

        .login_btn:hover{
            color: #fff;
            background-color: #ff0000;
        }

        .btn-outline-danger {
            color: #fff;
            font-size: 18px;
            background-color: #28a745;
            background-image: none;
            border-color: #28a745;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1.2rem;
            line-height: 1.6;
            color: #28a745;
            background-color: transparent;
            background-clip: padding-box;
            border: 1px solid #28a745;
            border-radius: 0;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .input-group-text {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.6;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0;
        }
	


</style>



@endsection