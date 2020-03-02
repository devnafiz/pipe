@extends('backend_layout.backend_design')


@section('title')

Scrap List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Pre Order Details</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                   <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        
                        <td>Name</td>
                        <td>{{$preorderDetails->name}}</td>
                        
                      </tr>
                      <tr>
                        
                        <td>Email</td>
                        <td>{{$preorderDetails->email}}</td>
                        
                      </tr>
                      <tr>
                       
                        <td>Phone</td>
                        <td>{{$preorderDetails->phone}}</td>
                      </tr>
                      <tr>
                       
                        <td>Company Name</td>
                        <td>{{$preorderDetails->company_name}}</td>
                      </tr>
                      <tr>
                       
                        <td>Company Address</td>
                        <td>{{$preorderDetails->company_address}}</td>
                      </tr>
                      <tr>
                       
                        <td>City Name</td>
                        <td>{{$preorderDetails->city_name}}</td>
                      </tr>
                      <tr>
                       
                        <td>Product name</td>
                        <td>{{$preorderDetails->product_name}}</td>
                      </tr>
                      <tr>
                       
                        <td>Product type</td>
                        <td>{{$preorderDetails->product_type}}</td>
                      </tr>
                      <tr>
                       
                        <td>Thickness</td>
                        <td>{{$preorderDetails->thickness}}</td>
                      </tr>
                      <tr>
                       
                        <td>Qty</td>
                        <td>{{$preorderDetails->qty}}</td>
                      </tr>
                      <tr>
                       
                        <td>Destination</td>
                        <td>{{$preorderDetails->destination_address}}</td>
                      </tr>
                      <tr>
                       
                        <td>Message</td>
                        <td>{{$preorderDetails->comment}}</td>
                      </tr>
                      <tr>
                       
                        <td>Sent Date</td>
                        <td>{{$preorderDetails->created_at}}</td>
                      </tr>
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