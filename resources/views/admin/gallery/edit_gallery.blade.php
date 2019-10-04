@extends('backend_layout.backend_design')


@section('title')
Edit Gallery
@endsection
@section('extra-css')
 <link rel="stylesheet" href="{{asset('back_end/vendors/quill/quill.snow.css')}}">
 <link rel="stylesheet" href="{{asset('back_end/vendors/summernote/dist/summernote-bs4.css')}}">

@endsection

@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Edit gallery Content</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/edit-gallery/'.$galleryDetails->id)}}" name="edit_gallery" id="edit_gallery" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label">Project Name</label>
                <div class="controls">
                  <input type="text" name="client_name" id="client_name" class="form-control"  value="{{$galleryDetails->client_name}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Enter Url</label>
                <div class="controls">
                  <input type="text" name="slug" id="slug" class="form-control"  value="{{$galleryDetails->slug}}">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">location</label>
                <div class="controls">
                  <input type="text" name="location" id="location" class="form-control" value="{{$galleryDetails->location}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Projet Value</label>
                <div class="controls">
                  <input type="text" name="project_value" id="project_value" class="form-control" value="{{$galleryDetails->project_value}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Completed</label>
                <div class="controls">
                  <input type="text" name="completed" id="completed" class="form-control" value="{{$galleryDetails->completed}}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea id='tinyMceExample' name="content">
                   {{$galleryDetails->content}}
                  </textarea>
                </div>
              </div>
              
              
              
              <div class="form-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image" >
                  <input type="hidden" name="current_image" value="{{$galleryDetails->image}}">
                   @if(!empty($galleryDetails->image))
                  <img src="{{asset('/images/backend_image/gallery/large/'.$galleryDetails->image)}}" style="width: 40px;">|<a href="{{url('/admin/delete-product-image/'.$galleryDetails->id)}}"></a>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1" @if($galleryDetails->status=='1') checked @endif>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Update" class="btn btn-success">
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
@endsection