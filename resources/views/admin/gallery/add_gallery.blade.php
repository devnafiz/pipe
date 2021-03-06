@extends('backend_layout.backend_design')


@section('title')
Add Gallery
@endsection
@section('extra-css')
 <link rel="stylesheet" href="{{asset('back_end/vendors/quill/quill.snow.css')}}">
 <link rel="stylesheet" href="{{asset('back_end/vendors/summernote/dist/summernote-bs4.css')}}">

@endsection

@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add gallery Content</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/add-gallery')}}" name="add_gallery" id="add_gallery" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label"> Name</label>
                <div class="controls">
                  <input type="text" name="client_name" id="client_name" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Enter Url</label>
                <div class="controls">
                  <input type="text" name="slug" id="slug" class="form-control" placeholder="Emp:-/new-job" >
                </div>
              </div>
              
              
              

              <div class="form-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea id='tinyMceExample' name="content">
                    Edit your content here...
                  </textarea>
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
                <input type="submit" value="Add gallery" class="btn btn-success">
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
<script src="{{asset('back_end/js/form-validation.js')}}"></script>
<script src="{{asset('back_end/js/editorDemo.js')}}"></script>
<script type="text/javascript">
    


$(document).ready(function(){

  $("#add_gallery").validate({

         rules:{
                client_name:{
                  required:true,
                  minLength:2,
                  lettersonly:true
                },
                slug:'required',
                
                content:{
                  required:true
                },
                
                
                 image:{
                  required:true
                }

         },
         messages:{
                  client_name:"Please Inter  Name",
                  slug:"Please Inter Url",
                  image:"Please Inter Product Image",
                  
                  content:"Please Inter Product Description",
                  
                 

                 

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