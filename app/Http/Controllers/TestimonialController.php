<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Image;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TestimonialController extends Controller
{


    public function addTestimonial(Request $request){

      if($request->isMethod('post')){
        $data=$request->all();

         $validator = Validator::make($request->all(), [

                    'name' => 'required|max:255',
                   'designation' => 'required',
                   'image'=>'required',
                   'details'=>'required|max:500'
                 

                   ]);
         if($validator->passes()){

          $testimonial= new Testimonial;
          $testimonial->name=$request->name;
          $testimonial->designation=$request->designation;
          
          
          if($request->hasFile('image')){
            $image_tmp=Input::file('image');
            if($image_tmp->isValid()){
              $extension=$image_tmp->getClientOriginalExtension();
              $filename=rand(111,99999).'.'.$extension;
              $small_image_path ='images/backend_image/testimonial/small/'.$filename;
              Image::make($image_tmp)->resize(150,150)->save($small_image_path);
              $testimonial->image=$filename;

            }
          }
          //$testimonial->image =$filename;
            $testimonial->details=$request->details;
            $testimonial->status=0;
           $testimonial->save();

           //return redirect()->b
            return redirect()->back()->with('flash_message','Successfully add information');

         }else{
            return redirect()->back()->with('flash_message','Testimonial information not valid!');
         }
        

       
      }


      return view('admin.testimonial.add_testimonial');

    }

    public function viewTestimonial(Request $request){

        $testimonials=Testimonial::get();
        return view('admin.testimonial.view_testimonial')->with(compact('testimonials'));
    }


    public function delTest($id)
    {
    	Testimonial::where('id',$id)->delete();
    	return redirect()->back()->with('flash_message','Testimonial has been deleted Successfully! ');
    }

    

    public function updateTestimonialStatus($id,$status){
        Testimonial::where('id',$id)->update(['status'=>$status]);
        return redirect()->back()->with('flash_message','Successfully change status');
     }
}
