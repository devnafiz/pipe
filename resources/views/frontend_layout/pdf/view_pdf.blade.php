@extends('frontend_layout.design_layout')

@section('title')
shop
@endsection



@section('content')

   <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Pdf Download</h2>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Pdf</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Case Section-->
	<section class="case-section alternate gallery-page-case">
		<div class="auto-container">
			<!--Sec Title-->
			
		</div>
		<!--Four Item Carousel-->
		
        	<div class="row clearfix">

			<!--Case block-->
			@foreach($pdfDetails as $pdf)
			  <div class="news-block col-lg-3 col-md-4 col-sm-6">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{url('/pdf-information/'.$pdf->id)}}"><img src="{{asset('/images/backend_image/pdf/pdf.png')}}" alt="" width="370px"  height="200px" /></a>
							
						</div>
						<div class="lower-content">
							<div class="author">
								
							</div>
							<h5><a href="{{url('/pdf-information/'.$pdf->id)}}">{{$pdf->pdf_name}}</a></h5>
							<!-- <div class="text">{!! str_limit($pdf->description, $limit = 150, $end = '...') !!}</div> -->
							<ul class="post-date">
								
							</ul>
						</div>
					</div>
				</div>

			@endforeach
            </div>
			<!--Case block-->
			
		</div>
		<!--Lower Box-->
		
		
	</section>
	<!--End Case Section-->
    
    


@endsection