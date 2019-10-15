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
                    



                   <table class="table table-bordered">
                      <tbody>
                          <tr>
                            <th>Feature</th>
                             <th>Description</th>
                             
                              
                          </tr>
                          <tr>
                            
                              <td>Job Title</td>
                              <td> {{$careerDetails->job_title}}</td>
                              
                          </tr>
                          <tr>
                            
                              <td>Job Description</td>
                              <td>{{$careerDetails->job_description}}</td>
                              
                          </tr>
                          <tr>
                            
                              <td>Requirement</td>
                              <td>{{$careerDetails->job_requirement}}</td>
                              
                          </tr>
                          <tr>
                            
                              <td>Required Skills &amp; Qualifications</td>
                              <td>{{$careerDetails->skill}}</td>
                              
                          </tr>
                          <tr>
                            
                              <td>Vacancy No</td>
                              <td>{{$careerDetails->vacancy_no}}</td>
                              
                          </tr>
                          <tr>
                            
                              <td>Valid date</td>
                              <td>{{$careerDetails->valid_date}}</td>
                              
                          </tr>
                      </tbody>
                  </table>


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