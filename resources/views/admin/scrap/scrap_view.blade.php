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
              <h4 class="card-title">Scrap list</h4>
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
                            <th>Company Name</th>
                            <th>Company Address</th>
                            <th>Scrap type</th>
                            <th>Quantity</th>
                            <th>Destination</th>
                            <th>Message</th>
                           
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($scrapView as $scrap)
                        <tr>
                            <td>{{$scrap->id}}</td>
                            <td>{{$scrap->name}}</td>
                            <td>{{$scrap->email}}</td>
                            <td>{{$scrap->phone}}</td>
                            <td>{{$scrap->company_name}}</td>
                            <td>{{$scrap->company_address}}</td>
                            <td>{{$scrap->scrap_type}}</td>
                            <td>{{$scrap->qty}}</td>
                            <td>{{$scrap->destination_address}}</td>
                            <td>{{$scrap->comment}}</td>
                            
                            
                            <td>
                                 
                             <a rel="{{$scrap->id}}"  rel1="delete-scrap" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delDelivery"><i class="fa fa-trash"></i></a>
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