@extends('backend_layout.backend_design')


@section('title')

Product List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Consultation LIst</h4>
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
                            <th>Company Address</th>
                            <th>Date</th>
                            
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($ConsultationDetails as $consultation)
                        <tr>
                            <td>{{$consultation->id}}</td>
                           
                           
                           
                            <td>{{$consultation->name}}</td>
                             <td><a href="{{url('/admin/send-mail/'.$consultation->id)}}">{{$consultation->email}}</a></td>
                            <td>{{$consultation->phone}}</td>
                            <td>{{$consultation->company_address}}</td>
                             <td>{{$consultation->date}}</td>
                             
                              <td>  
                             <a rel="{{$consultation->id}}"  rel1="delete-consultation" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delNews"><i class="fa fa-trash"></i></a>
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