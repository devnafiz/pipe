@extends('backend_layout.backend_design')


@section('title')
Add  Admin
@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Admin/Sub Admin</h4>
                  
                  <form class="forms-sample" method="POST" action="{{url('/admin/edit-admin/'.$adminDetails->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputName1">User name</label>
                      <input type="text" class="form-control" name="username" id="exampleInputName1" readonly="" value="{{$adminDetails->username}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Full Name</label>
                      <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{$adminDetails->name}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputName1" value="{{$adminDetails->email}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Type</label>
                           <input type="text" class="form-control" name="type" id="exampleInputName1"  readonly="" value="{{$adminDetails->type}}">
                           
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" class="form-control" name="password" id="exampleInputName1"  required>
                    </div>
                    
                    
                   @if($adminDetails->type=="Sub Admin") 
                    <div id="">
                      <h6>Admin Access</h6>
                        <div class="control-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="gallery_access" id="gallery_access"@if($adminDetails->gallery_access==1) checked @endif value="1">
                        Gallery </label>
                       
                         <label class="checkbox-inline"> <input type="checkbox" name="page_access" @if($adminDetails->page_access==1) checked @endif id="page_access" value="1">Page </label>
                        
                         <label class="checkbox-inline">
                         <input type="checkbox" name="products_access" id="products_access" @if($adminDetails->products_access==1) checked @endif value="1">
                         Product </label>
                        
                    </div>
                
                      
                    </div>
                      @endif
                    <div class="control-group">
                        <label class="control-label">Enable </label>
                        <div class="controls">
                          <input type="checkbox" name="status" @if($adminDetails->status==1) checked @endif id="status" value="1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Add Admin</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>



@endsection

@section('extra-js')
 <script src="{{ asset('back_end/js/custom.js')}}"></script>

@endsection