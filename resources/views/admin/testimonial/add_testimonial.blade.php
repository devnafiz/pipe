@extends('backend_layout.backend_design')


@section('title')

@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Testimonial</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/addTestimonial')}}" name="Testimonial" id="add_Testimonial" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label"> Name</label>
                <div class="controls">
                  <input type="text" name="name" id="name" class="form-control"  required="">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label"> Designation</label>
                <div class="controls">
                  <input type="text" name="designation" id="designation" class="form-control"  required="">
                </div>
              </div>

               
   
              <div class="form-group">
                <label class="control-label">Choose your profile picture&nbsp</label>
                <div class="controls">
                  <input type="file" name="image" id="image" required="" >
                </div>
              </div>
               <div class="form-group">
                <label class="control-label"></label>
                <div class="controls">
                  <textarea name="details" class="" ows="4" cols="85"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Testimonial" class="btn btn-success" style="background-color: #16c4c1;">
                 <a href="{{url('admin/testimonial-list')}}" class="btn btn-primary" style="background-color: #16c4c1;">Back </a>
              </div>
            </form>



              </div>
          </div>

      </div>
@endsection


@section('extra-js')
   <script type="text/javascript">
    


$(document).ready(function(){

  $("#add_Testimonial").validate({

         rules:{
                name:{
                  required:true,
                  minLength:2,
                  lettersonly:true
                },
                designation:'required',
                
                details:{
                  required:true
                },
                
                
                 image:{
                  required:true
                }

         },
         messages:{
                  name:"Please Inter  Name",
                  designation:"Please Inter Designation",
                  image:"Please Inter Product Image",
                 
                  details:"Please Inter Product Description"
                  

                 

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