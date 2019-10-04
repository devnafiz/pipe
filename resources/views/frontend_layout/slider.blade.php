  <section class="main-slider">
    	
        <div class="main-slider-carousel owl-carousel owl-theme">
            @foreach($slider as $slide)
            
            <div class="slide" style="background-image:url(/images/backend_image/slides/large/{{$slide->image}})">
                <div class="auto-container">
                	<div class="content clearfix">
						<div class="title">We Help</div>
						<h1>Growing Business</h1>
						<div class="text">We help you managing asset, provide financial advise. Leave money issue with us and focus on your core business.</div>
                    	<div class="link-box">
							<a href="#" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a> <a href="#" class="theme-btn btn-style-two"><span class="txt">Contact Us</span></a>
						</div>
                    </div>
                </div>
            </div>
           @endforeach 
            
            
            
            
        </div>
    </section>