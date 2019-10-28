<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
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
