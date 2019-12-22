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
              <h4 class="card-title">Product LIst</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id #</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Detail</th>
                            <th> Price</th>
                            
                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td><img src="{{asset('/images/backend_image/products/medium/'.$product->image)}}" width="48" alt="Product img"></td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->description}}</td>
                            >
                            <td>{{$product->price}}</td>
                            
                            <td>
                                 <button class="btn btn-outline-primary"><a href="{{url('/admin/edit-product/'.$product->id)}}"> <i class="fa fa-edit"></i></a></button>
                                 <a href="{{url('/admin/add-product-image/'.$product->id)}}"><i class="fa fa-upload"></i></a>
                             <a rel="{{$product->id}}"  rel1="delete-product" href="javascript:" class="deleteRecord btn btn-outline-primary" id="delProduct"><i class="fa fa-trash"></i></a>
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