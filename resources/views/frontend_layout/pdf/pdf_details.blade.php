@extends('frontend_layout.design_layout')

@section('title')

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
        						<img src="{{asset('/images/backend_image/pdf/pdf.png')}}" alt="" />
							</div>
						</div>
					</div>
					<!--Detail Column-->
        			<div class="detail-column col-lg-4 col-md-12 col-sm-12">
        				<div class="inner-column">
							<h2>{{$pdfDetails->pdf_name}}</h2>
							<ul class="detail-list">
								{{$pdfDetails->Description}}
							</ul>
						</div>
					</div>
				</div>
			</div>
      		<!--Lower Section-->
      		<!-- <div class="lower-section">
				<h2>Our Challenge</h2>
				<div class="text">
					
				</div>
			</div> -->
       </div>
    </section>         


@endsection