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
                           <div class="step active"><span class="label">Delivered</span></div>
                         </div>
                        </div>

            
             
                        @elseif($DeliveryTrackingDetails->status_position=="loading")



                        <div class="wizard-steps-container">
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 25%;"></div>
                            </div>
                         <div class="steps">
                          <div class="step done"><span class="label">In The Factory</span></div>
                          <div class="step active"><span class="label">Loading</span></div>
                          <div class="step "><span class="label">Ready For Delivery</span></div>
                          <div class="step"><span class="label">Out Form The Factory</span></div>
                           <div class="step active"><span class="label">Delivered</span></div>
                         </div>
                        </div>

                         @elseif($DeliveryTrackingDetails->status_position=="ready_for_delivery")



                        <div class="wizard-steps-container">
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width:50%;"></div>
                            </div>
                         <div class="steps">
                          <div class="step done"><span class="label">In The Factory</span></div>
                          <div class="step active"><span class="label">Loading</span></div>
                          <div class="step active"><span class="label">Ready For Delivery</span></div>
                          <div class="step"><span class="label">Out Form The Factory</span></div>
                           <div class="step active"><span class="label">Delivered</span></div>
                         </div>
                        </div>
                         @elseif($DeliveryTrackingDetails->status_position=="out_factory")



                        <div class="wizard-steps-container">
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                            </div>
                         <div class="steps">
                          <div class="step done"><span class="label">In The Factory</span></div>
                          <div class="step active"><span class="label">Loading</span></div>
                          <div class="step active"><span class="label">Ready For Delivery</span></div>
                          <div class="step active"><span class="label">Out From The Factory</span></div>
                           <div class="step active"><span class="label">Delivered</span></div>
                         </div>
                        </div>
                        @elseif($DeliveryTrackingDetails->status_position=="delivered ")



                        <div class="wizard-steps-container">
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width:100%;"></div>
                            </div>
                         <div class="steps">
                          <div class="step done"><span class="label">In The Factory</span></div>
                          <div class="step active"><span class="label">Loading</span></div>
                          <div class="step active"><span class="label">Ready For Delivery</span></div>
                          <div class="step active"><span class="label">Out From The Factory</span></div>
                           <div class="step active"><span class="label">Delivered</span></div>
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

/*
  Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
  */
  @media
    only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {

    /* Force table to not be like tables anymore */
    table, thead, tbody, th, td, tr {
      display: block;
    }

    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
    }

    tr {
      margin: 0 0 1rem 0;
    }
      
    tr:nth-child(odd) {
      background: #ccc;
    }
    
    td {
      /* Behave  like a "row" */
      border: none;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 50% !important;
    }

    td:before {
      /* Now like a table header */
      position: absolute;
      /* Top/left values mimic padding */
      top: 0;
      left: 6px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
    }

    /*
    Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
    */
    td:nth-of-type(1):before { content: "Name"; }
    td:nth-of-type(2):before { content: "Company Name"; }
    td:nth-of-type(3):before { content: "Tracking Number"; }
    td:nth-of-type(4):before { content: "Status"; }
    td:nth-of-type(5):before { content: "Description"; }
    td:nth-of-type(6):before { content: "Delivery Date"; }
    /*td:nth-of-type(7):before { content: "Date of Birth"; }
    td:nth-of-type(8):before { content: "Dream Vacation City"; }
    td:nth-of-type(9):before { content: "GPA"; }
    td:nth-of-type(10):before { content: "Arbitrary Data"; }*/
  }

</style>

@endsection