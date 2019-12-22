@extends('backend_layout.backend_design')


@section('title')

@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Image</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/add-product-image/'.$productDetails->id)}}" name="add_product" id="add_product" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <input type="hidden" name="product_id" value="{{$productDetails->id}}">
             

              <div class="form-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image" >
                </div>
              </div>
              
              <div class="form-actions">
                <input type="submit" value="Add product" class="btn btn-success">
              </div>
            </form>
             <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Image</th>
                           
                            
                            
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($productImage as $image)
                        <tr>
                            <td>{{$image->id}}</td>
                            <td><img src="{{asset('images/backend_image/products/small/'.$image->image)}}" width="150" height="150"></td>
                            
                            <td><a href="{{url('admin/delete-image/'. $image->product_id .'/'.$image->id)}}"> delete</a></td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                  
                </div>


              </div>

          </div>

      </div>

          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   
              </div>
            </div>


@endsection


