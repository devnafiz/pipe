@extends('backend_layout.backend_design')


@section('title')

Contact View
@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />

<script src="{{asset('back_end/js/custom.js')}}"></script>


@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Contact LIst</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Name</th>
                            
                            <th>Email</th>
                           
                            
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($contactus as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            
                            <td>{{$contact->name}}</td>
                           
                            <td><a href="{{url('/admin/send-mail/'.$contact->id)}}" >{{$contact->email}}</a></td>
                            
                            <td>
                                 <button class="btn btn-outline-primary"><a href="{{url('/admin/contact-details/'.$contact->id)}}"> <i class="fa fa-eye"></i></a></button>
                              <a rel="{{$contact->id}}"  rel1="delete-contact" href="javascript:" class=" btn btn-outline-primary deleteRecord"><i class="fa fa-trash"></i></a>
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