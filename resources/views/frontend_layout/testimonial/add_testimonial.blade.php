@extends('frontend_layout.design_layout')

@section('title')
shop
@endsection



@section('content')
         @if(Session::has('flash_message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>{{session('flash_message')}}</strong>
                                    </div>
          
                                     
                                    @endif
                                    @if(Session::has('flash_message_success'))
                                     <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>{{session('flash_message_warning')}}</strong>
                                    </div>
                                    @endif
   <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2> Testimonial</h2>
        </div>
    </section>

    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span class="fa fa-angle-right"></span></li>
                <li>Testimonial</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<section class="testimonial-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                
               <!--Testimonial Block Two-->
               @foreach($testimonials as $testimonial)
                <div class="testimonial-block-two col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="text">{{ $testimonial->details}}</div>
                        <div class="author-box">
                            <div class="inner">
                                <div class="image"><img src="{{asset('images/backend_image/testimonial/small/'.$testimonial->image)}}" alt="" /></div>
                                <h5>{{ $testimonial->name}}</h5>
                                <div class="designation">Chairman of nova appartment</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </section>
	<!--End Case Section-->
    
   



@endsection
@section('extra-js')
<script type="text/javascript">
    
    $(".alert").alert();
</script>
@endsection

@section('extra-css')
<style type="text/css">

.welcome_form .form-control {
    /*border: medium none;*/
    border-radius: 50px;
    font-size: 16px;
    height: 55px;
    padding-left: 35px;
    width: 100%;
}




.submit {
    background: #13b5ea none repeat scroll 0 0;
    border: medium none;
     border-radius: 50px;
    color: #ffffff;
    font-weight: 700;
    height: 90%;
    position: absolute;
    right: 2%;
    text-transform: capitalize;
    top: 5.7%;
    width: 260px;
}

 /*.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}*/

   .input-group-prepend span{
            width: 50px;
            background-color: #ff0000;
            color: #fff;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;
        }

        .login_btn{
            width: 130px;
        }

        .login_btn:hover{
            color: #fff;
            background-color: #ff0000;
        }

        .btn-outline-danger {
            color: #fff;
            font-size: 18px;
            background-color: #28a745;
            background-image: none;
            border-color: #28a745;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1.2rem;
            line-height: 1.6;
            color: #2393e2;
            background-color: transparent;
            background-clip: padding-box;
            border: 1px solid #2393e2;
            border-radius: 0;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        /*.input-group-text {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.6;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0;
        }*/
	


</style>



@endsection

@section('extra-js')
<script type="text/javascript">
    $(document).ready(function(){
        //alert('hi');

    });

    $("#Testimonial").validate({

         rules:{
                name:{
                    required:true,
                    minLength:2,
                    lettersonly:true
                },
                company_name:{
                    required:true,
                    minlength:4,
                    
                },
                email:{
                    required:true,
                   

                    
                },
                
              country:{
                    required:true
                    

                    
                }    

         },
         messages:{
                  name:"Please Inter Name",

                  address:{
                          required:"Please Provide your Address",
                          minlength:"Please must be atleast 6 cherecter"
                  },
                  email:{

                    required:"PLease Inter  your Email",
                    
                    
                  },

                  state:{

                    required:"PLease Inter  your state Name",
                    
                    
                  },
                   phone:{

                    required:"PLease Inter  your Phone Number ",
                    
                    
                  },


         }

  });

</script>

@endsection