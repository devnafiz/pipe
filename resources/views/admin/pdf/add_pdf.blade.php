@extends('backend_layout.backend_design')


@section('title')

@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Product</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/add-pdf')}}" name="add_pdf" id="add_pdf" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label">PDF Name</label>
                <div class="controls">
                  <input type="text" name="pdf_name" id="pdf_name" class="form-control"  required="">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <input type="text" name="description" id="description" class="form-control"  required="">
                </div>
              </div>
   
              <div class="form-group">
                <label class="control-label">PDF File</label>
                <div class="controls">
                  <input type="file" name="pdf_file" id="pdf_file" required="" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Pdf" class="btn btn-success">
              </div>
            </form>



              </div>
          </div>

      </div>
@endsection

@section('extra-js')
   <script type="text/javascript">
    


$(document).ready(function(){

  $("#add_pdf").validate({

         rules:{
                pdf_name:{
                  required:true,
                  minLength:2,
                  lettersonly:true
                },
                
                
                description:{
                  required:true
                },
                
               
                 pdf_file:{
                  required:true
                }

         },
         messages:{
                  pdf_name:"Please Inter Pdf Name",
                 
                  pdf_file:"Please Inter Pdf file",
                 
                  description:"Please Inter Pdf Description"
                  
                  

                 

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
