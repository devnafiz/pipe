@extends('backend_layout.backend_design')


@section('title')

Truck Rent List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Truck Rent list</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Name</th>
                            <th>Company Address</th>
                            <th>Email</th>
                            <th>Quantity</th>
                            <th>Destination</th>
                            <th>Quoate</th>
                            <th>Submite Date</th>
                            
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($truckrentDetails as $truckrent)
                        <tr>
                            <td>{{$truckrent->id}}</td>
                            <td>{{$truckrent->name}}</td>
                            <td>{{$truckrent->company_address}}</td>
                            <td>{{$truckrent->email}}</td>
                            <td>{{$truckrent->product_qty}}</td>
                            <td>{{$truckrent->destination}}</td>
                            <td>{{$truckrent->quoate}}</td>
                            <td>{{$truckrent->created_at}}</td>

                           
                            
                            
                            <td>
                                 
                             <a rel="{{$truckrent->id}}"  rel1="delete-truck-rent" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delTruckRent"><i class="fa fa-trash"></i></a>
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