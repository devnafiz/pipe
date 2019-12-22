@extends('frontend_layout.design_layout')

@section('title')
shop
@endsection



@section('content')
 @if(Session::has('flash_message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>{{session('flash_message')}}</strong>
                                    </div>
          
                                     
                                    @endif
                                    @if(Session::has('flash_message_success'))
                                     <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>{{session('flash_message_warning')}}</strong>
                                    </div>
                                    @endif

     <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Shop</h2>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Shop<span class="fa fa-angle-right"></span></li>

                 <li>Shop</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
   <section class="shop-single-section">
        <div class="auto-container">
            
            <!--Shop Single-->
            <div class="shop-page product-details">
                
                <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">
                    
                        <div class="image-column col-lg-7 col-md-12 col-sm-12">
                            <div class="carousel-outer">
                               
                                
                                <ul class="image-carousel owl-carousel owl-theme">
                                     @foreach($productImages as $Image)
                                    <li><a href="{{asset('images/backend_image/products/medium/'.$Image->image)}}" class="lightbox-image" title="Image Caption Here"><img src="{{asset('images/backend_image/products/medium/'.$Image->image)}}" height="500px" alt=""></a></li>
                                    @endforeach

                                </ul>
                               
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    @foreach($productImages as $Image)
                                   <li><img src="{{asset('images/backend_image/products/small/'.$Image->image)}}" alt=""></li>
                                     @endforeach
                                   
                                </ul>

                                
                                <!-- <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="images/resource/products/14.jpg" alt=""></li>
                                    <li><img src="images/resource/products/15.jpg" alt=""></li>
                                    <li><img src="images/resource/products/16.jpg" alt=""></li>
                                    <li><img src="images/resource/products/17.jpg" alt=""></li>
                                    <li><img src="images/resource/products/14.jpg" alt=""></li>
                                    <li><img src="images/resource/products/15.jpg" alt=""></li>
                                    <li><img src="images/resource/products/16.jpg" alt=""></li>
                                    <li><img src="images/resource/products/17.jpg" alt=""></li>
                                </ul> -->
                               
                            </div>
                        </div>
                        
                        <!--Info Column-->
                        <div class="info-column col-lg-5 col-md-12 col-sm-12">
                            <div class="details-header">
                                <h2>{{$productDetails->product_name}}</h2>
                                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                <div class="item-price">Price: {{$productDetails->price}} TK</div>
                            </div>

                            <div class="text">
                                <p>Asininely angelic less lighted bought we flung reindeer however irrespective solemny as listlessly thus famous. Mauris turpis nisi, egestas non enim at gravida rutrum mauris.</p>
                            </div>

                            <!-- <div class="other-options">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div>
                                    </div>
                                    <div class="pull-left">
                                        Btns Box
                                        <div class="btns-box">
                                            <button type="button" class="theme-btn btn-style-one add-to-cart"><span class="txt">Add To Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> -->
                            
                            <ul class="shop-list">
                                <li><strong>Product Code:</strong><span class="theme_color">.</span>{{$productDetails->product_code}}</li>
                                <!-- <li><strong>Category</strong><span class="theme_color">.</span>Branding, Web Design</li> -->
                               <!--  <li><strong>share</strong><span class="theme_color">.</span></li>
                                <li><a href="#">Add to Wishlist .</a></li> -->
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
                <!--Basic Details-->
                
                <!--Product Info Tabs-->
                <div class="product-info-tabs">
                    <!--Product Tabs-->
                    <div class="prod-tabs tabs-box">
                    
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-details" class="tab-btn active-btn">Description</li>
                            <li data-tab="#prod-info" class="tab-btn">Additional Information</li>
                            <li data-tab="#Inquriy" class="tab-btn">Inquriy Now </li> 
                        </ul>
                        
                        <!--Tabs Container-->
                        <div class="tabs-content">
                            
                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="prod-details">
                                <div class="content">
                                    <p>{{$productDetails->description}}</p>
                                </div>
                            </div>
                            
                            <!--Tab / Active Tab-->
                            <div class="tab" id="prod-info">
                                <div class="content">
                                    <p>{{$productDetails->additional_des}}.</p>
                                </div>
                            </div>
                            
                            <!--Tab-->
                            <div class="tab" id="Inquriy">
                                <div class="content">
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-8 ">
                                    <form action="{{url('/inquery')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                                         <div class="input-group form-group">
                                       
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="">
                                    </div>

                                    <div class="input-group form-group">
                                       
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                    </div>

                                    <div class="input-group form-group">
                                       
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" required="">
                                    </div>
                                    <div class="input-group form-group">
                                       
                                        <input type="text" name="company_address" class="form-control" placeholder="Company Name " required="">
                                    </div>
                                    <div class="input-group form-group">
                                       
                                        <textarea name="description" class="form-control">
                                            
                                        </textarea>
                                    </div>
                                     
                                    

                                    <div class="form-group">
                                        <button type="submit" class="btn  btn-block  " style="background:#13b5ea ">inquriy now </button>
                                    </div>
                                        

                                    </form>
                                </div>
                                </div>
                                        
                                </div>
                            </div>
                            
                            <!--End Tab-->
                            
                        </div>
                    </div>
                    
                </div>
                <!--End Product Info Tabs-->
                
            </div>
            
        </div>
    </section>


@endsection
@section('extra-js')
<script type="text/javascript">
    
    $(".alert").alert();
</script>
@endsection
@section('extra-css')
<style type="text/css">
	#custom-search-input button {
    border: 0;
    background: none;
    padding: 2px 5px;
    margin-top: 2px;
    position: relative;
    left: -28px;
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: #D9230F;
}
</style>


@endsection