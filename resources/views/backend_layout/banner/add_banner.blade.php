@extends('backend_layout.backend_design')


@section('title')
Add  slide
@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Slide Upload</h4>
                  
                  <form class="forms-sample" method="POST" action="{{url('/admin/add-slide')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputName1">Top Head</label>
                      <input type="text" class="form-control" name="top_head" id="exampleInputName1" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Slide Title" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Sub Title</label>
                      <input type="text" class="form-control" name="sub_title" id="Description" placeholder="Sub Title">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputName1">File upload</label>
                      <input type="file" name="image" id="image">
                      
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                    </div> -->
                    <div class="control-group">
                     <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>



@endsection