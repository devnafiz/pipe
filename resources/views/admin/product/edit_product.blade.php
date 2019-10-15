@extends('backend_layout.backend_design')


@section('title')

@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Banner Upload</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/edit-product/'.$productDetails->id)}}" name="add_product" id="edit_product" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label">Product Name</label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name" class="form-control" value="{{$productDetails->product_name}}" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Product url</label>
                <div class="controls">
                  <input type="text" name="slug" id="slug" class="form-control" value="{{$productDetails->slug}}" >
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Product Code</label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code" class="form-control" value="{{$productDetails->product_code}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">product Color</label>
                <div class="controls">
                  <input type="text" name="product_color" id="product_color" class="form-control" value="{{$productDetails->product_color}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <input type="text" name="description" id="description" class="form-control" value="{{$productDetails->description}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Additional Information</label>
                <div class="controls">
                  <textarea name="additional_des" class="form-control">{{$productDetails->additional_des}}"></textarea>
                  
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">product price</label>
                <div class="controls">
                  <input type="text" name="price" id="price" class="form-control" value="{{$productDetails->price}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image" >
                  <input type="hidden" name="current_image" value="{{$productDetails->image}}">
                   @if(!empty($productDetails->image))
                  <img src="{{asset('/images/backend_image/products/medium/'.$productDetails->image)}}" style="width: 40px;">|<a href="{{url('/admin/delete-product-image/'.$productDetails->id)}}"></a>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1" @if($productDetails->status=='1') checked @endif>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="update product" class="btn btn-success">
              </div>
            </form>



              </div>
          </div>

      </div>
@endsection


