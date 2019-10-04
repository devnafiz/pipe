@extends('backend_layout.backend_design')


@section('title')
Edit silde
@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">

          @if(Session::has('flash_message'))
          
          <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{session('flash_message')}}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
          
          <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{session('flash_message_success')}}</strong>
        </div>
        @endif

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Slide Update</h4>
                  
                  <form class="forms-sample" method="POST" action="{{url('/admin/edit-slide/'.$slideDetails->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputName1">Top Head</label>
                      <input type="text" class="form-control" name="top_head" id="exampleInputName1" placeholder="Name" required value="{{$slideDetails->top_head}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Slide Title" required value="{{$slideDetails->title}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Sub Title</label>
                      <input type="text" class="form-control" name="sub_title" id="Description" placeholder="Sub Title" value="{{$slideDetails->sub_title}}">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputName1">File upload</label>
                      <input type="file" name="image" id="image">

                      @if(!empty($bannerDetails->image))
                  <img src="{{asset('/images/backend_image/slides/large/'.$slideDetails->image)}}" style="width: 40px;">|<a href="{{url('/admin/delete-product-image/'.$slideDetails->id)}}"></a>
                  @endif
                      
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
                  <input type="checkbox" name="status" id="status" value="1" @if($slideDetails->status=='1') checked @endif>
                </div>
              </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>



@endsection