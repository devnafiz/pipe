@extends('frontend_layout.design_layout')

@section('title')
{{$gallery->slug}}
@endsection



@section('content')
                       
               <section class="case-single-section">
    	<div class="auto-container">
       		<!--Upper Section-->
        	<div class="upper-section">
        		<div class="row clearfix">
        			<!--Image Column-->
        			<div class="image-column col-lg-8 col-md-12 col-sm-12">
        				<div class="inner-column">
        					<div class="image">
        						<img src="{{asset('images/backend_image/gallery/single/'.$gallery->image)}}" alt="" />
							</div>
						</div>
					</div>
					<!--Detail Column-->
        			<div class="detail-column col-lg-4 col-md-12 col-sm-12">
        				<div class="inner-column">
							<h2>Case Study Details</h2>
							<ul class="detail-list">
								<li>Project Name: <span>{{$gallery->client_name}}</span></li>
								<li>Location: <span>{{$gallery->location}}</span></li>
								<li>Project Value: <span>{{$gallery->project_value}}</span></li>
								<li>Year Completed: <span>{{$gallery->completed}}</span></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
      		<!--Lower Section-->
      		<div class="lower-section">
				<h2>Our Challenge</h2>
				<div class="text">
					{!!$gallery->content!!}
				</div>
			</div>
       </div>
    </section>         


@endsection