@extends('backend_layout.backend_design')


@section('title')

News Comment List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">News Comments List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Email</th>
                            <th>Comments</th>
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($newsCommentDetail as $Comments)
                        <tr>
                            <td>{{$Comments->id}}</td>
                            <td>{{$Comments->name}}</td>
                            <td>{{$Comments->email}}</td>
                            <td>{{$Comments->comments}}</td>
                             <td>@if($Comments->status==1) 

                             <a href="{{url('/addmin/comments-Update-status/'.$Comments->id.'/0')}}">Active</a>
                              @else 

                              <a href="{{url('/addmin/comments-Update-status/'.$Comments->id.'/1')}}">Inactive</a>
                             @endif</td>
                            
                            
                            <td>
                                 
                             <a rel="{{$Comments->id}}"  rel1="delete-news" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delNewsComments"><i class="fa fa-trash"></i></a>
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
  <script src="{{asset('back_end/js/custom.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
   

@endsection