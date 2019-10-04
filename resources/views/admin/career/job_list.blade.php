@extends('backend_layout.backend_design')


@section('title')

Job List

@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('back_end/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />



@endsection


@section('content')

 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Jobs list</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Job Title</th>
                            <th>Job Description</th>
                            <th>Vacancy No</th>
                             <th>Valid  date</th>
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($careerDetails as $career)
                        <tr>
                            <td>{{$career->id}}</td>
                            <td>{{$career->job_title}}</td>
                            <td>{{$career->job_description}}</td>
                            <td>{{$career->vacancy_no}}</td>
                            <td>{{$career->valid_date}}</td>
                            
                            
                            <td>
                              <a href="{{url('/admin/view-job/'.$career->id)}}" class=" btn btn-outline-primary"><i class="fa fa-eye"></i></a>
                                 <button class="btn btn-outline-primary"><a href="{{url('/admin/edit-jobs/'.$career->id)}}"> <i class="fa fa-edit"></i></a></button>
                             <a rel="{{$career->id}}"  rel1="delete-career" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delCareer"><i class="fa fa-trash"></i></a>
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