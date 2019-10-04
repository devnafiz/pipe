@extends('backend_layout.backend_design')

@section('title')

  Create Page
@endsection

@section('extra-css')
 <link rel="stylesheet" href="{{asset('back_end/vendors/quill/quill.snow.css')}}">
 <link rel="stylesheet" href="{{asset('back_end/vendors/summernote/dist/summernote-bs4.css')}}">

@endsection

@section('content')

  <form method="POST" action="{{ url('/pages')}}" >
    {{csrf_field()}}
   <div class="form-group">
     <label for="exampleInputPassword1">Title</label>
      <input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="Page title">

    </div> 
    <div class="form-group">
       <label for="exampleInputPassword1">Slug</label>
        <input type="text" class="form-control" name="slug" id="exampleInputPassword1" placeholder="Page url">

    </div>               
   <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tinymce Editor</h4>
                  <textarea id='tinyMceExample' name="content">
                    Edit your content here...
                  </textarea>
                </div>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-success">submit</button>

      </form>    

@endsection

@section('extra-js')
<script src="{{asset('back_end/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
<script src="{{asset('back_end/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('back_end/vendors/quill/quill.min.js')}}"></script>
<script src="{{asset('back_end/js/editorDemo.js')}}"></script>
@endsection