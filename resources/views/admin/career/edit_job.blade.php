@extends('backend_layout.backend_design')


@section('title')
Edit Career

@endsection


@section('content')

   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Edit Job</h4>

                   <form class="form-horizontal forms-sample" method="post" action="{{url('/admin/edit-jobs/'.$careerDetails->id)}}" name="edit_jobs" id="edit_jobs" novalidate="novalidate" enctype="multipart/form-data">
            	{{ csrf_field()}}
              <div class="form-group">
                <label class="control-label">Job Title</label>
                <div class="controls">
                  <input type="text" name="job_title" id="job_title" class="form-control" required="" value="{{$careerDetails->job_title}}">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Job Description</label>
                <div class="controls">
                  <textarea name="job_description" id="job_description" class="form-control" required="">{{$careerDetails->job_description}}</textarea>
                 
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Vaccancy Number</label>
                <div class="controls">
                  <input type="text" name="vacancy_no" id="vacancy_no" class="form-control" required="" value="{{$careerDetails->vacancy_no}}">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label">Skills Requirement</label>
                <div class="controls">
                  <textarea name="skill" id="skill" class="form-control" required="">{{$careerDetails->skill}}</textarea>
                  
                </div>
              </div>

              <div class="form-group">
                <label class="control-label">Job Requirement</label>
                <div class="controls">
                  <textarea name="job_requirement" id="job_requirement" class="form-control" required="">{{$careerDetails->job_requirement}}</textarea>
                  
                </div>
              </div>
              
              
              <div class="form-group">
                <label class="control-label">Validation Date</label>
                <div class="controls">
                  <input type="text" name="valid_date" id="valid_date" class="form-control" value="{{$careerDetails->valid_date}}">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label">Enable </label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1" @if($careerDetails->status==1) checked @endif>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Update Job" class="btn btn-success">
              </div>
            </form>



              </div>
          </div>

      </div>
@endsection


