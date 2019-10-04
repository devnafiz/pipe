<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Consultation;

class ConsultationController extends Controller
{
    public function viewConsultation(Request $request){
         $ConsultationDetails=Consultation::get();

         return view('admin.consultation.view_consultation')->with(compact('ConsultationDetails'));

    }

    public function delConsultation($id){
         Consultation::where('id',$id)->delete();
         return redirect()->back()->with('flash_message','deleted successfully');

    }
}
