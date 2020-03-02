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
        			<div class="image-column col-lg-12 col-md-12 col-sm-12">
        				<div class="inner-column">
        					<div class="image">
        						<img src="{{asset('images/backend_image/gallery/single/'.$gallery->image)}}" alt="" />
							</div>
						</div>
					</div>
					<!--Detail Column-->
        			
				</div>
			</div>
      		<!--Lower Section-->
      		<div class="lower-section">
				<h2>{{$gallery->client_name}}</h2>
				<div class="text">
					{!!$gallery->content!!}
				</div>
			</div>
       </div>
    </section>         


@endsection