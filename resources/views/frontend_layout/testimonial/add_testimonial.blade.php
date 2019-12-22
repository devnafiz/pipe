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
	
	<!--Case Section-->
	 <section class="register-section " style="color:#fff;">
        <div class="auto-container">
            <div class="row clearfix justify-content-md-center">
                
                <!--Form Column-->
               <!--  <div class="form-column column col-lg-8 col-md-8 col-sm-12 "> -->


                	
                        <div class="col-md-10 text-center">
                            <div class="welcome_text">
                            <form action="{{url('/add-testimonial')}}" method="post" id="Testimonial" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="input-group form-group">
                                       
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required="">
                                    </div>

                                    <div class="input-group form-group">
                                       
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>

                                    <div class="input-group form-group">
                                       
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="input-group form-group">
                                       
                                        <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name " required="">
                                    </div>
                                    
                                     <div class="input-group form-group" style="color: black;">
                                       <span>Choose your profile picture&nbsp</span> 
                                       <input type="file" name="image" placeholder="Company Name " required="">

                                    </div>
                                    <div class="input-group form-group">
                                       
                                       <textarea name="details" class="" ows="4" cols="140" style="border: 1px solid #13b5ea">Enter Details...... 
                                          
                                       </textarea>
                                    </div>
                                    

                                    <div class="form-group">
                                        <button type="submit" class="btn  btn-block  " style="background:#13b5ea ">Submit</button>
                                    </div>

                            </form>

                        </div>
                    </div>
                
              
                
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