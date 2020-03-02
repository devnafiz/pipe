@extends('backend_layout.backend_design')


@section('title')

Inquery List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Pre Order list</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th> Company Address</th>
                            <th>Description</th>
                            <th>Product Name</th>
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($inqueryView as $inquery)
                        <tr>
                            <td>{{$inquery->id}}</td>
                            <td>{{$inquery->name}}</td>
                            <td>{{$inquery->email}}</td>
                            <td>{{$inquery->phone}}</td>
                            <td>{{$inquery->company_address}}</td>
                            <td>{{$inquery->description}}</td>
                            <td><?php $product_name=DB::table('contactus')->where('id',$inquery->product_id)->first(); ?>{{$product_name}}</td>
                            
                            
                            
                            
                            <td>
                             
                             <a rel="{{$inquery->id}}"  rel1="delete-inquery" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delDelivery"><i class="fa fa-trash"></i></a>
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