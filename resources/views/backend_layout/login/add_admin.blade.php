@extends('backend_layout.backend_design')


@section('title')
Add  Admin
@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Admin/Sub Admin</h4>
                  
                  <form class="forms-sample" method="POST" action="{{url('/admin/add-admin')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputName1">User name</label>
                      <input type="text" class="form-control" name="username" id="exampleInputName1" placeholder="User Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Full Name</label>
                      <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputName1" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" class="form-control" name="password" id="exampleInputName1"  required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Type</label>
                           <select name="type" id="type" class="form-control">
                              <option value="Admin" >Admin</option>
                              <option value="Sub Admin" >Sub Admin</option>
                              
                           </select>
                    </div>
                    
                    
                    <div id="Access">
                      <h6>Admin Access</h6>
                        <div class="control-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="gallery_access" id="status" value="1">
                        Gallery </label>
                       
                         <label class="checkbox-inline"> <input type="checkbox" name="page_access" id="status" value="1">Page </label>
                        
                         <label class="checkbox-inline">
                         <input type="checkbox" name="products_access" id="status" value="1">
                         Product </label>
                        
                    </div>

                      
                    </div>
                    <div class="control-group">
                        <label class="control-label">Enable </label>
                        <div class="controls">
                          <input type="checkbox" name="status" id="status" value="1">
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