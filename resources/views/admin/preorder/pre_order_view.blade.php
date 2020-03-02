@extends('backend_layout.backend_design')


@section('title')

PreOrder List

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
                            <th> Product name</th>
                            <th>Product type</th>
                            <th>Thickness</th>
                            <th>Qty</th>
                            <th>Destination</th>
                           
                           
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($orderView as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->product_name}}</td>
                            <td>{{$order->product_type}}</td>
                            <td>{{$order->thickness}}</td>
                            <td>{{$order->qty}}</td>
                            <td>{{$order->destination_address}}</td>
                            
                            
                            
                            <td>
                             <a href="{{url('/admin/details-preorder/'.$order->id)}}" class=" btn btn-outline-primary"><i class="fa fa-eye"></i></a>    
                             <a rel="{{$order->id}}"  rel1="delete-preorder" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delDelivery"><i class="fa fa-trash"></i></a>
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