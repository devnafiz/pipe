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
             
              <div class="row">
                <div class="col-12">
                     <div class="card">
                <div class="card-body">
                  <div class="faq-section">
                    <div class="container-fluid bg-success py-2">
                      <p class="mb-0 text-white">Contact Details</p>
                    </div>
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="accordion">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                                   Name: {{$contactDetails->name}}&nbsp Email:{{$contactDetails->email}} &nbsp Mobile:{{$contactDetails->phone}}
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                   {{$contactDetails->message}}
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                  </div>
                  
                  </div>
                  
                </div>
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