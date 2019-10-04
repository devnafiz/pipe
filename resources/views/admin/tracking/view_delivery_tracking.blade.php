@extends('backend_layout.backend_design')


@section('title')

Delivery List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Gallery list</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>Tracking Number</th>
                            <th>Status Position</th>
                            <th>Product Description</th>
                            <th>Delivery Date</th>
                            <th>Status</th>
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($deliveryDeatails as $delivery)
                        <tr>
                            <td>{{$delivery->id}}</td>
                            <td>{{$delivery->name}}</td>
                            <td>{{$delivery->company_name}}</td>
                            <td>{{$delivery->tracking_number}}</td>
                            <td>{{$delivery->status_position}}</td>
                            <td>{{$delivery->product_description}}</td>
                            <td>{{$delivery->delivery_date}}</td>
                            <td>@if($delivery->status==1) Active @else Inactive @endif</td>
                            
                            
                            <td>
                                 <button class="btn btn-outline-primary"><a href="{{url('/admin/edit-delivery-tracking/'.$delivery->id)}}"> <i class="fa fa-edit"></i></a></button>
                             <a rel="{{$delivery->id}}"  rel1="delete-delivery" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delDelivery"><i class="fa fa-trash"></i></a>
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