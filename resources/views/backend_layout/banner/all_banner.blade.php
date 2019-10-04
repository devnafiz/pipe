@extends('backend_layout.backend_design')


@section('title')

Home Slide

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />

<script src="{{asset('back_end/js/custom.js')}}"></script>


@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Slide LIst</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Image</th>
                            <th> Top head</th>
                            <th>Title</th>
                            <th> Sub Title</th>
                            
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($slides as $slide)
                        <tr>
                            <td>{{$slide->id}}</td>
                            <td><img src="{{asset('/images/backend_image/slides/large/'.$slide->image)}}" width="48" alt="Product img"></td>
                            <td>{{$slide->top_head}}</td>
                            <td>{{$slide->title}}</td>
                            >
                            <td>{{$slide->sub_title}}</td>
                            
                            <td>
                                 <button class="btn btn-outline-primary"><a href="{{url('/admin/edit-slide/'.$slide->id)}}"> <i class="fa fa-edit"></i></a></button>
                              <a rel="{{$slide->id}}"  rel1="delete-slide" href="javascript:" class=" btn btn-outline-primary deleteRecord"><i class="fa fa-trash"></i></a>
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