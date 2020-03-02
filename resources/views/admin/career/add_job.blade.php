@extends('backend_layout.backend_design')


@section('title')

@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Job</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/add-jobs')}}" name="add_jobs" id="add_jobs" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label">Job Title</label>
                <div class="controls">
                  <input type="text" name="job_title" id="job_title" class="form-control" required="">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Job Description</label>
                <div class="controls">
                  <textarea name="job_description" id="job_description" class="form-control" required=""></textarea>
                  
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Vaccancy Number</label>
                <div class="controls">
                  <input type="text" name="vacancy_no" id="vacancy_no" class="form-control" required="">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label">Skills Requirement</label>
                <div class="controls">
                  <textarea name="skill" id="skill" class="form-control" required="" rows="5"></textarea>
                 
                </div>
              </div>

              <div class="form-group">
                <label class="control-label">Job Requirement</label>
                <div class="controls">
                  <textarea name="job_requirement" id="job_requirement" class="form-control" required="" rows="5"></textarea>
                  
                </div>
              </div>
              
              
              <div class="form-group">
                <label class="control-label">Valid Date</label>
                <div class="controls">
                  <input type="text" name="valid_date" id="valid_date" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Job" class="btn btn-success">
              </div>
            </form>



              </div>
          </div>

      </div>
@endsection
@section('extra-js')
   <script type="text/javascript">
    


$(document).ready(function(){

  $("#add_jobs").validate({

         rules:{
                job_title:{
                  required:true,
                  minLength:2,
                  lettersonly:true
                },
                job_description:'required',
                vacancy_no:'required',
                description:{
                  required:true
                },
                skill:{
                  required:true
                },
                job_requirement:{
                  required:true,
                  number:true,
                },
                 valid_date:{
                  required:true
                }

         },
         messages:{
                  job_title:"Please Inter Job Name",
                  job_description:"Please Inter Job Description",
                  valid_date:"Please Inter Date",
                  vacancy_no:"Please Inter Vaccancy Number",
                  description:"Please Inter Product Description",
                  skill:"Please Inter Skill description",
                  job_requirement:"Please Inter Job requirement"

                 

         }
    //      errorClass: "help-inline",
    // errorElement: "span",
    // highlight:function(element, errorClass, validClass) {
    //   $(element).parents('.control-group').addClass('error');
    // },
    // unhighlight: function(element, errorClass, validClass) {
    //   $(element).parents('.control-group').removeClass('error');
    //   $(element).parents('.control-group').addClass('success');
    // }
  });


  
});
   </script>
<script src="{{ asset('back_end/vendors/jquery-validation/jquery.validate.min.js')}}"></script>

@endsection

