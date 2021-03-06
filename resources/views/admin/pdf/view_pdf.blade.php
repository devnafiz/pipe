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
              <h4 class="card-title">Pdf LIst</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Pdf</th>
                            <th>Pdf Name</th>
                           
                            
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($pdfDetails as $pdf)
                        <tr>
                            <td>{{$pdf->id}}</td>
                            <td><a href="{{asset('/images/backend_image/pdf/'.$pdf->pdf_file)}}" target="_blank"><img src="{{asset('/images/backend_image/pdf/pdf.png')}}" width="48"  height="48"></a></td>
                            <td>{{$pdf->pdf_name}}</td>
                            
                            
                            <td>
                                 
                             <a rel="{{$pdf->id}}"  rel1="delete-pdf" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delPdf"><i class="fa fa-trash"></i></a>
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