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
                <li><a href="{{url('/view-delivery-tracking')}}">delivery Tracking</a><span class="fa fa-angle-right"></li>
                <li>delivery Details</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Case Section-->
	 <section >
        <div class="auto-container">
            <div class="row "><br />
                
                <!--Form Column-->
               <!--  <div class="form-column column col-lg-8 col-md-8 col-sm-12 "> -->

                      @if($DeliveryTrackingDetails->status_position=="in_the_factory")

                           <div class="wizard-steps-container">
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 0%;"></div>
                            </div>
                         <div class="steps">
                          <div class="step done"><span class="label">In The Factory</span></div>
                          <div class="step active"><span class="label">Loading</span></div>
                          <div class="step done active"><span class="label">Ready For Delivery</span></div>
                          <div class="step"><span class="label">Out Form The Factory</span></div>
                         </div>
                        </div>

            
             
                        @elseif($DeliveryTrackingDetails->status_position=="loading")



                        <div class="wizard-steps-container">
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 33.33%;"></div>
                            </div>
                         <div class="steps">
                          <div class="step done"><span class="label">In The Factory</span></div>
                          <div class="step active"><span class="label">Loading</span></div>
                          <div class="step "><span class="label">Ready For Delivery</span></div>
                          <div class="step"><span class="label">Out Form The Factory</span></div>
                         </div>
                        </div>

                         @elseif($DeliveryTrackingDetails->status_position=="ready_for_delivery")



                        <div class="wizard-steps-container">
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 66.66%;"></div>
                            </div>
                         <div class="steps">
                          <div class="step done"><span class="label">In The Factory</span></div>
                          <div class="step active"><span class="label">Loading</span></div>
                          <div class="step active"><span class="label">Ready For Delivery</span></div>
                          <div class="step"><span class="label">Out Form The Factory</span></div>
                         </div>
                        </div>
                         @elseif($DeliveryTrackingDetails->status_position=="out_factory")



                        <div class="wizard-steps-container">
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 99.99%;"></div>
                            </div>
                         <div class="steps">
                          <div class="step done"><span class="label">In The Factory</span></div>
                          <div class="step active"><span class="label">Loading</span></div>
                          <div class="step active"><span class="label">Ready For Delivery</span></div>
                          <div class="step active"><span class="label">Out Form The Factory</span></div>
                         </div>
                        </div>
                	 
                      @endif
                    
                </div>

                <div class="row">
                      <table class="table  table-bordered">
                          
                          <thead class="thead-dark">
                              <tr>
                                   <th>Name</th>
                                   <th>Company Name</th>
                                   <th>Tracking Number</th>
                                   <th>Status </th>
                                   <th>Description</th>
                                   <th>Delivery Date</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>{{$DeliveryTrackingDetails->name}}</td>
                                   <td>{{$DeliveryTrackingDetails->company_name}}</td>
                                    <td>{{$DeliveryTrackingDetails->tracking_number}}</td>
                                     <td> @if($DeliveryTrackingDetails->status_position=='in_the_factory') In the factory @elseif($DeliveryTrackingDetails->status_position=='loading')Loading @elseif($DeliveryTrackingDetails->status_position=='ready_for_delivery')Ready For Delivery @elseif($DeliveryTrackingDetails->status_position=='out_factory') Out Form The Factory @endif</td>
                                      <td>{{$DeliveryTrackingDetails->product_description}}</td>
                                      <td>{{$DeliveryTrackingDetails->delivery_date}}</td>

                              </tr>

                          </tbody>
                      </table>
                              
                    
                </div>
                
            </div>
        </div>
    </section>
	<!--End Case Section-->
    
   



@endsection
@section('extra-css4')



@endsection

@section('extra-css')



<style type="text/css">
.wizard-steps-container {
     position: relative;
     margin: 0 30px;
     width: 100%;
}
 .wizard-steps-container .progress-bar-container {
     left: 20px;
     right: 20px;
     position: absolute;
     height: 12px;
     background-color: #ececec;
     top: 50%;
     transform: translateY(-50%);
}
 .wizard-steps-container .progress-bar-container .progress-bar {
     content: "";
     position: absolute;
     left: 0;
     top: 0;
     bottom: 0;
     height: 100%;
     width: 33%;
     background-color: #0e6cb5;
     transition: width 900ms ease;
}
 .steps {
     display: flex;
     justify-content: space-between;
     margin: 30px 0 0;
}
 .steps .step {
     height: 40px;
     width: 40px;
     background-color: #ececec;
     border-radius: 50%;
     position: relative;
     top: -16px;
}
 .steps .step.done, .steps .step.active {
     background-color: #0e6cb5;
}
 .steps .step.active:after {
     content: "";
     height: 16px;
     width: 16px;
     background-color: #ececec;
     position: absolute;
     border-radius: 50%;
     top: 50%;
     left: 50%;
     margin-top: -8px;
     margin-left: -8px;
}
 .steps .step .label {
     position: absolute;
     bottom: 100%;
     left: 50%;
     width: 100px;
     margin-left: -50px;
     margin-bottom: 4px;
     text-align: center;
}


    .one, .two, .three{
    position:absolute;
    margin-top:-10px;
    z-index:1;
    height:40px;
    width:40px;
    border-radius:25px;
    
}
.one{
    left:25%;
}
.two{
    left:50%;
}
.three{
    left:75%;
}
.primary-color{
    background-color:#4989bd;
}
.success-color{
    background-color:#5cb85c;
}
.danger-color{
    background-color:#d9534f;
}
.warning-color{
    background-color:#f0ad4e;
}
.info-color{
    background-color:#5bc0de;
}
.no-color{
    background-color:inherit;
}

</style>

@endsection