@extends('frontend_layout.design_layout')

@section('title')
shop
@endsection



@section('content')

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
                <li>Shop</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                	<!--Shop Single-->
                	<div class="shop-section">
						
                        <!--Sort By-->
                        <div class="items-sorting">
                        	<div class="row clearfix">
                                <div class="results-column col-md-6 col-sm-6 col-xs-12">
                                    <h6>Showing Items 1–9 of 36 results</h6>
                                </div>


                                <div class=" pull-right col-md-6 col-sm-6 col-xs-12 search-box">

                                	<div id="custom-search-input">
                                		   <form method="post" action="blog.html">
			                                <div class=" input-group">
			                                    <input type="search" name="search-field" class="form-control" value="" placeholder="Search">
                                                <span class="input-group-append">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" fa fa-search"></span>
                                    </button>
                                </span>

			                                    <!-- <button type="submit"><span class="icon fa fa-search"></span></button> -->
			                                </div>
			                            </form>
                        			
                                		
                                	</div>
			                           
                                    <!-- <div class="form-group">
                                        <select name="sort-by">
                                            <option>Default Sorting</option>
                                            <option>By Order</option>
                                            <option>By Price</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="our-shops">
                        	
                            <div class="row clearfix">

                                @foreach($products as  $product)
                            	
                                <!--Shop Item-->
                                <div class="shop-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{asset('/images/backend_image/products/large/'.$product->image)}}" alt="" style="height: 200px;width: 200px;"  />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                   <!--  <li><a href="shop-single.html"><span class="flaticon-shopping-cart-of-checkered-design"></span></a></li> -->
                                                    <li><a href="{{asset('/images/backend_image/products/large/'.$product->image)}}" data-fancybox="images" data-caption="" class="link"><span class="icon fa fa-search"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="lower-content clearfix" >
                                        	<div style="text-align: center;border: 1px solid #ccc;">
                                            	<h6><a href="{{url('/products/'.$product->slug)}}">{{$product->product_name}}</a></h6>
                                            </div>
                                            <div class="pull-right">
                                            	<ul class="price">
                                                	<!-- <li>$12.00</li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                              
                                
                            </div>
                            
                        </div>
                        
                        <!--Styled Pagination-->
                        <div class="styled-pagination text-center">
                             

                            <!-- <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li> -->
                        </div>                
                        <!--End Styled Pagination-->
                        
                    </div>
                </div>
                
                <!--Sidebar Side-->
                
			</div>
       
        </div>
    </div>


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