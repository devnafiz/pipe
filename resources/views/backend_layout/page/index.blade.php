@extends('backend_layout.backend_design')

@section('title')

  Create Page
@endsection

@section('extra-css')
 <link rel="stylesheet" href="{{asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
 

@endsection

@section('content')
           <div class="card">
            <div class="card-body">
              <h4 class="card-title">Page list</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>id #</th>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Option</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                     @foreach($pages as $page)
                        <tr>
                            <td>{{$page->id}}</td>
                            <td>{{$page->created_at}}</td>
                            <td>{{$page->title}}</td>
                            <td>{{$page->slug}}</td>
                            
                            
                            <td>
                            <!-- <button type="button" class="btn btn-info"><i class="mdi mdi-delete"></i>Delete</button> -->
                              <button class="btn btn-outline-primary"><a href="{{url('/page/'.$page->slug)}}" target="_blank">View</a></button>
                              <button class="btn btn-outline-success"><a href="{{url('/admin/page-edit/'.$page->id)}}">Edit</a> </button>
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
<script src="{{asset('back_end/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
 <script src="{{asset('back_end/js/data-table.js')}}"></script>

@endsection