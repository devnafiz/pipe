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


