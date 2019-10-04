@extends('backend_layout.backend_design')


@section('title')

Admin List
@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />

<script src="{{asset('back_end/js/custom.js')}}"></script>


@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Admin LIst</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>User Name</th>
                            <th> Admin Type</th>
                            <th> Role</th>
                            <th>Status</th>
                            
                            
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($admins as $admin)

                         <?php
                            if($admin->type=="Admin"){
                               $role="ALL";
                            }else{

                              $role="";
                              if($admin->gallery_access==1){
                                $role.="Gallery,";
                              }
                              if($admin->page_access==1){
                                $role.="Page,";
                              }
                              if($admin->products_access==1){
                                $role.="Products,";
                              }
                            }
                           

                         ?>
                        <tr>
                            <td>{{$admin->id}}</td>
                            <td>{{$admin->username}}</td>
                            <td>{{$admin->type}}</td>
                            <td>{{$role}}</td>
                            
                             <td> @if($admin->status==1) Active @else Inactive @endif</td>
                            
                            <td>
                                 <button class="btn btn-outline-primary"><a href="{{url('/admin/edit-admin/'.$admin->id)}}"> <i class="fa fa-edit"></i></a></button>
                              <a rel="{{$admin->id}}"  rel1="delete-admin" href="javascript:" class=" btn btn-outline-primary deleteRecord"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>                    
                  </div>
                </div>
              </div>
            </div>
          </div>







@endsection

@section('extra-js')

<script src="{{ asset('back_end/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>

  <script src="{{ asset('back_end/js/data-table.js')}}"></script>
  

@endsection