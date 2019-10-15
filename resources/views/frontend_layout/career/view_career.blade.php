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
        	<h2> Career</h2>
        </div>
    </section>

    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Career</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Case Section-->
	 <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix justify-content-md-center">

                <table class="table table-bordered">

                    <thead class="thead-dark">
                        <tr>
                            <td>Id</td>
                            <td>Job Title</td>
                            <td>Job Requirement</td>
                            <td>Option</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($careerDetails as $job)
                        <tr>
                            <td>{{$job->id}}</td>
                            <td>{{$job->job_title}}</td>
                            <td>{{$job->job_requirement}}</td>
                            <td>
                                <a href="{{url('/details-career/'.$job->id)}}" class="btn btn-primary" target="_blank" style="background:#13b5ea;" >View</a>
                                 <!-- <a href="#" class="btn btn-primary">Apply</a> -->

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    

                </table>
                
               
            </div>
        </div>
    </section>
	<!--End Case Section-->
    
   



@endsection

@section('extra-css')



@endsection