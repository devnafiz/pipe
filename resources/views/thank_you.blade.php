@extends('frontend_layout.design_layout')

@section('title')
Thank You
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
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Consultation</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Case Section-->
	 <section class="register-section " style="color:#fff;">
        <div class="auto-container">
            <div class="row clearfix justify-content-md-center">
                
                <!--Form Column-->
               <!--  <div class="form-column column col-lg-8 col-md-8 col-sm-12 "> -->
              <div class="form-column column col-lg-12 col-md-12 col-sm-12 ">
                <div class=" jumbotron text-center">
                  <h1 class="display-3" style="color:red;">Thank You!</h1>
                  <p class="lead"><strong>Your Information </strong> has been sent  Successfully </p>
                  <hr>
                  <p>
                    Having trouble? <a href="">Contact us</a>
                  </p>
                  <p class="lead">
                    <a class="btn btn-primary btn-sm" href="{{url('/')}}" role="button">Continue to homepage</a>
                  </p>
                </div>
                	
                      
                
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

 /*.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}*/

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
            color: #2393e2;
            background-color: transparent;
            background-clip: padding-box;
            border: 1px solid #2393e2;
            border-radius: 0;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        /*.input-group-text {
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
        }*/
	


</style>



@endsection