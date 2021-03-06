@extends('backend_layout.backend_design')


@section('title')
Add News
@endsection
@section('extra-css')
 <link rel="stylesheet" href="{{asset('back_end/vendors/quill/quill.snow.css')}}">
 <link rel="stylesheet" href="{{asset('back_end/vendors/summernote/dist/summernote-bs4.css')}}">

@endsection

@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add News</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/edit-news/'.$newsDetails->id)}}" name="edit_news" id="edit_news" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label">Title</label>
                <div class="controls">
                  <input type="text" name="title" id="title" class="form-control" required="" value="{{$newsDetails->title}}">
                </div>
              </div>
              <!-- <div class="form-group">
                <label class="control-label">Enter Url</label>
                <div class="controls">
                  <input type="text" name="slug" id="slug" class="form-control" placeholder="Emp:-/new-job" >
                </div>
              </div> -->
              
             <div class="form-group">
                <label class="control-label">Icon</label>
                <div class="controls">
                  <select name='icon' id="icon" class="form-control" @if(!empty($newsDetails->icon)) selected @endif >
                    <option value="flaticon-world">flaticon-world</option>
                    <option value="flaticon-graduation-cap">flaticon-graduation-cap</option>
                    <option value="flaticon-pie-chart-3">flaticon-pie-chart</option>
                    
                    

                  </select>
                </div>
              </div>
              
              

              <div class="form-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea id='tinyMceExample' name="description">
                   {{$newsDetails->description}}
                  </textarea>
                </div>
              </div>
           
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1" @if($newsDetails->status==1)checked @endif>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit News" class="btn btn-success">
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