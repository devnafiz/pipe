@extends('backend_layout.backend_design')


@section('title')
Add Delivery Tracking
@endsection
@section('extra-css')
 <link rel="stylesheet" href="{{asset('back_end/vendors/quill/quill.snow.css')}}">
 <link rel="stylesheet" href="{{asset('back_end/vendors/summernote/dist/summernote-bs4.css')}}">
 <link rel="stylesheet" href="{{asset('back_end/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
  

@endsection

@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Delivery  Content</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/edit-delivery-tracking'.$deliveryDeatails->id)}}" name="add_delivery_tracking" id="add_delivery_tracking" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label"> Name</label>
                <div class="controls">
                  <input type="text" name="name" id="name" class="form-control" value="{{$deliveryDeatails->name}}" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Company Name</label>
                <div class="controls">
                  <input type="text" name="company_name" id="company_name" class="form-control" value="{{$deliveryDeatails->company_name}}">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Tracking Number</label>
                <div class="controls">
                  <input type="text" name="tracking_number" id="tracking_number" class="form-control" value="{{$deliveryDeatails->tracking_number}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Status Position</label>
                <div class="controls">
                 <select name="status_position" id="status_position" class="form-control">
                    @if($deliveryDeatails->status_position)
                      <option value="{{$deliveryDeatails->status_position}} " selected> @if($deliveryDeatails->status_position=='in_the_factory') In the factory @elseif($deliveryDeatails->status_position=='loading')Loading @elseif($deliveryDeatails->status_position=='ready_for_delivery')Ready For Delivery @elseif($deliveryDeatails->status_position=='out_factory') Out Form The Factory @endif </option>

                    @else  
                      <option value="in_the_factory ">In the factory </option>
                      <option value="loading">Loading</option>
                      <option value="ready_for_delivery">Ready For Delivery</option>
                      <option value="out_factory ">Out Form The Factory </option>

                    @endif  
                 </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label">Product Description</label>
                <div class="controls">
                  <textarea id='' name="product_description" class="form-control">
                  
                  </textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Delivery Date</label>
                <div class="controls">
                  <input type="text" name="delivery_date" id="datepicker-popup" class="form-control date datepicker">

                </div>
              </div>

              
              
              
              
              
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit Tracking" class="btn btn-success">
              </div>
            </form>



              </div>
          </div>

      </div>
@endsection


@section('extra-js')
<script src="{{asset('back_end/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
<script src="{{asset('back_end/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('back_end/vendors/quill/quill.min.js')}}"></script>
<script src="{{asset('back_end/js/editorDemo.js')}}"></script>
<script src="{{asset('back_end/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="../../"></script>
@endsection