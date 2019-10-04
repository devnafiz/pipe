@extends('frontend_layout.design_layout')

@section('title')
|career
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
        	<h4>Job Details</h4>
        </div>
    </section>

    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>job details</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Case Section-->
	 <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix justify-content-md-center">

                     <div class="col-md-12" id="post-single-block">
      <div class="post-container blog_text">
        
          <div class="text-center" style="padding: 10px;">
           
          </div>
       
                    <hr/>
                    <h4>job Title</h4>
                    <p>
                      <b>
                       {{$careerDetails->job_title}}
                      </b>
                    </p>
                    <h4>Job Description</h4>
                    <p> {{$careerDetails->job_description}}</p>
                    <h4>Responsibilities</h4>
                    <p>{{$careerDetails->job_requirement}}</p>
                    <h4>Required Skills &amp; Qualifications</h4>
                    <p>{{$careerDetails->skill}}
            </p>

            <h4>Vacancy No</h4>
                    <p>{{$careerDetails->vacancy_no}}
            </p>

            <h4>Valid date</h4>
                    <p>{{$careerDetails->valid_date}}
            </p>


                  </div>
                </div>

                <div class="row justify-content-md-center">

                    <div class="col-md-auto">
                       <u>Apply here</u>
                       <p>Email:exmple@gmail.com</p>
                        
                    </div>
                    

                </div>
                
               
            </div>
        </div>
    </section>
	<!--End Case Section-->
    
   



@endsection

@section('extra-css')



@endsection