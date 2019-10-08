@extends('backend_layout.backend_design')


@section('title')

@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Product</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/add-product')}}" name="add_product" id="add_product" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label">product Name</label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name" class="form-control" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Product url</label>
                <div class="controls">
                  <input type="text" name="slug" id="slug" class="form-control" required="" >
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">product Code</label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">product Color</label>
                <div class="controls">
                  <input type="text" name="product_color" id="product_color" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <input type="text" name="description" id="description" class="form-control">
                </div>
              </div>
              
              
              <div class="form-group">
                <label class="control-label">product price</label>
                <div class="controls">
                  <input type="text" name="price" id="price" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add product" class="btn btn-success">
              </div>
            </form>



              </div>
          </div>

      </div>
@endsection


