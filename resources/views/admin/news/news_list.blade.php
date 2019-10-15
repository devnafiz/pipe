@extends('backend_layout.backend_design')


@section('title')

Gallery List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">News list Footer</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Status</th>
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($newsView as $news)
                        <tr>
                            <td>{{$news->id}}</td>
                            <td>{{$news->title}}</td>
                            <td>{{$news->icon}}</td>
                             <td>@if($news->status==1) Active @else Inactive @endif</td>
                            
                            
                            <td>
                                 <button class="btn btn-outline-primary"><a href="{{url('/admin/edit-news/'.$news->id)}}"> <i class="fa fa-edit"></i></a></button>
                             <a rel="{{$news->id}}"  rel1="delete-news" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delNews"><i class="fa fa-trash"></i></a>
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