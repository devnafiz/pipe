@extends('backend_layout.backend_design')


@section('title')
Email Option
@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Email Send</h4>
                  
                  <form class="forms-sample" method="POST" action="{{url('/admin/send-mail/'.$sentMail->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputName1" value="{{$sentMail->email}}" readonly="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Content</label>
                      <textarea name="content" class="form-control" rows="4"></textarea> 
                    </div>
                    
                    
                    <!-- <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                    </div> -->
                   
                    <button type="submit" class="btn btn-success mr-2">Send</button>
                    
                  </form>
                </div>
              </div>
            </div>



@endsection