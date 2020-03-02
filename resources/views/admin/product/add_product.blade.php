@extends('backend_layout.backend_design')


@section('title')

@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Product</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/add-product')}}" id="add_product" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label">Product Name</label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name" class="form-control" required >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Product url</label>
                <div class="controls">
                  <input type="text" name="slug" id="slug" class="form-control" required >
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Product Code</label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code" class="form-control" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <input type="text" name="description" id="description" class="form-control" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Additional Information</label>
                <div class="controls">
                  <textarea name="additional_des" class="form-control" required></textarea>
                  
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Product Price</label>
                <div class="controls">
                  <input type="text" name="price" id="price" class="form-control" required> 
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add product" class="btn btn-success add_product">
              </div>
            </form>



              </div>
          </div>

      </div>
@endsection

@section('extra-js')
   <script type="text/javascript">
    


$(document).ready(function(){

  $("#add_product").validate({

         rules:{
                product_name:{
                  required:true,
                  minLength:2,
                  lettersonly:true
                },
                slug:'required',
                product_code:'required',
                description:{
                  required:true
                },
                additional_des:{
                  required:true
                },
                price:{
                  required:true,
                  number:true,
                },
                 image:{
                  required:true
                }

         },
         messages:{
                  product_name:"Please Inter Product Name",
                  slug:"Please Inter Url",
                  image:"Please Inter Product Image",
                  product_code:"Please Inter Product Code",
                  description:"Please Inter Product Description",
                  additional_des:"Please Inter Product Add description",
                  price:"Please Inter Product Price"

                 

         }
    //      errorClass: "help-inline",
    // errorElement: "span",
    // highlight:function(element, errorClass, validClass) {
    //   $(element).parents('.control-group').addClass('error');
    // },
    // unhighlight: function(element, errorClass, validClass) {
    //   $(element).parents('.control-group').removeClass('error');
    //   $(element).parents('.control-group').addClass('success');
    // }
  });


  
});
   </script>
<script src="{{ asset('back_end/vendors/jquery-validation/jquery.validate.min.js')}}"></script>

@endsection


