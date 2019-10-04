<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;

class CareerController extends Controller
{
     public function addJobs(Request $request){

     	if($request->isMethod('post')){

     		$data=$request->all();
     		if(empty($data['status'])){
     			$data['status']=0;
     		}

     		$careers= new Career;
     		$careers->job_title= $data['job_title'];
     		$careers->job_description= $data['job_description'];
     		$careers->vacancy_no= $data['vacancy_no'];
     		$careers->job_requirement= $data['job_requirement'];
               $careers->skill= $data['skill'];
     		$careers->valid_date= $data['valid_date'];
     		$careers->status= $data['status'];
     		$careers->save();
     		return redirect()->back()->with('flash_message','Job has been Added successfully');
     	}

     	return view('admin.career.add_job');
     }


     public function editCareer(Request $request,$id=null){

          if($request->isMethod('post')){

               $data=$request->all();
               if(empty($data['status'])){

                    $data['status']=0;
               }
               if(empty($data['job_title'])){

                    $data['job_title']='';
               }
               if(empty($data['job_description'])){

                    $data['job_description']='';
               }
               if(empty($data['skill'])){

                    $data['skill']='';
               }
               if(empty($data['job_requirement'])){

                    $data['job_requirement']='';
               }
               if(empty($data['valid_date'])){

                    $data['valid_date']='';
               }
            Career::where('id',$id)->update(['job_title'=>$data['job_title'],'job_description'=>$data['job_description'],'vacancy_no'=>$data['vacancy_no'],'job_requirement'=>$data['job_requirement'],'skill'=>$data['skill'],'valid_date'=>$data['valid_date'],'status'=>$data['status']]);

            return redirect()->back()->with('flash_message','Successfully update Job');

          }
          $careerDetails=Career::where('id',$id)->first();

          return view('admin.career.edit_job')->with(compact('careerDetails'));

     }

     //job view

     public function viewJobs(Request $request){

     	$careerDetails=Career::get();

     	return view('admin.career.job_list')->with(compact('careerDetails'));
     }

     public function editJobs(Request $request,$id=null){

     	if($request->isMethod('post')){

     		$data=$request->all();

     		Career::where('id',$id)->update(['job_title'=>$data['job_title'],'job_description'=>$data['job_description'],'vacancy_no'=>$data['vacancy_no'],'job_requirement'=>$data['job_requirement'],'valid_date'=>$data['valid_date'],'status'=>$data['status']]);
     		return redirect()->back()->with('flash_message','Successfullu updated Jobs');
     	}

         $careerDetails=Career::where('id',$id)->first();
     	return view('admin.career.edit_job')->with(compact('careerDetails'));
     }
     //single view job

     public function singleJob($id){

         $careerDetails=Career::where('id',$id)->first();  
         return view('admin.career.single_job')->with(compact('careerDetails'));    

     }

     //delete jobs

     public function delJobs($id){


     	Career::where('id',$id)->delete();

     	return redirect()->back()->with('flash_message','Successfullu deleted this Job');
     }
}
