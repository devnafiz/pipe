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

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/add-delivery-tracking')}}" name="add_delivery_tracking" id="add_delivery_tracking" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label"> Name</label>
                <div class="controls">
                  <input type="text" name="name" id="name" class="form-control" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label"> Email</label>
                <div class="controls">
                  <input type="email" name="email" id="email" class="form-control" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Company Name</label>
                <div class="controls">
                  <input type="text" name="company_name" id="company_name" class="form-control" >
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Tracking Number</label>
                <div class="controls">
                  <input type="text" name="tracking_number" id="tracking_number" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Status Position</label>
                <div class="controls">
                 <select name="status_position" id="status_position" class="form-control">
                   
                      <option value="in_the_factory ">In the factory </option>
                      <option value="loading">Loading</option>
                      <option value="ready_for_delivery">Ready For Delivery</option>
                      <option value="out_factory ">Out Form The Factory </option>
                 </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label">Product Description</label>
                <div class="controls">
                  <textarea id='product_description' name="product_description" class="form-control">
                  
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
                <input type="submit" value="Add Tracking" id="submit" class="btn btn-success Tracking">
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
 <script type="text/javascript">
    


$(document).ready(function(){

  // $("#add_delivery_tracking").validate({

  //        rules:{
  //               name:{
  //                 required:true,
  //                 minLength:2,
  //                 lettersonly:true
  //               },
  //               email:'required',
  //               company_name:'required',
  //               tracking_number:{
  //                 required:true
  //               },
  //               product_description:{
  //                 required:true
  //               },
  //               delivery_date:{
  //                 required:true,
                 
  //               }
                 

  //        },
  //        messages:{
  //                 name:"Please Inter  Name",
  //                 email:"Please Inter Email",
                  
  //                 tracking_number:"Please Inter Tracking Code",
  //                 company_name:"Please Inter Company Name",
  //                 product_description:"Please Inter Product Add description",
  //                 delivery_date:"Please Inter Delivery Date"

                 

  //        }
  //   //      errorClass: "help-inline",
  //   // errorElement: "span",
  //   // highlight:function(element, errorClass, validClass) {
  //   //   $(element).parents('.control-group').addClass('error');
  //   // },
  //   // unhighlight: function(element, errorClass, validClass) {
  //   //   $(element).parents('.control-group').removeClass('error');
  //   //   $(element).parents('.control-group').addClass('success');
  //   // }
  // });


  
});

$(document).ready(function() {
// $(function() {
// $("#add_delivery_tracking").dialog({
// autoOpen: false
// });
// $(".Tracking").on("click", function() {
// $("#add_delivery_tracking").dialog("open");
// });
// });
// Validating Form Fields.....
$("#submit").click(function(e) {
  //alert('hi');
  var name = $("#name").val();
var email = $("#email").val();

var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
if (email === '' || name === '') {
alert("Please fill all fields...!!!!!!");
e.preventDefault();
} else if (!(email).match(emailReg)) {
alert("Invalid Email...!!!!!!");
e.preventDefault();
} else {
alert("Form Submitted Successfully......");
}
});
});
   </script>
<!-- <script src="{{ asset('back_end/vendors/jquery-validation/jquery.validate.min.js')}}"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
@endsection