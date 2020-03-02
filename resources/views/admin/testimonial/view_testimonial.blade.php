@extends('backend_layout.backend_design')


@section('title')

Testtimonial List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')
<div class="row">

  <div class="col-12">
    <a href="{{url('admin/addTestimonial')}}" class="btn btn-primary" style="background-color: #16c4c1;">Add Testimonials </a>
  </div>
</div>

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Testimonials</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            
                            <th>Dtails</th>
                            <th>Status</th>
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($testimonials as $testimonial)
                        <tr>
                            <td>{{$testimonial->id}}</td>
                            <td><img src="{{asset('images/backend_image/testimonial/small/'.$testimonial->image)}}" width="50px" height="50px"></td>
                            <td>{{$testimonial->name}}</td>
                            <td>{{$testimonial->designation}}</td>
                            
                            <td>{{$testimonial->details}}</td>
                             <td>@if($testimonial->status==1)
                            <a href="{{url('/admin/update-testimonial-status/'.$testimonial->id.'/0')}}">  Active</a>

                               @else

                              <a href="{{url('/admin/update-testimonial-status/'.$testimonial->id.'/1')}}">  Inactive</a>

                               @endif</td>
                            
                            
                            <td>
                                 
                             <a rel="{{$testimonial->id}}"  rel1="delete-testimonial" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delTest"><i class="fa fa-trash"></i></a>
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