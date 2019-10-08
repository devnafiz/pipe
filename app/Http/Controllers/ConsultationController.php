<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Consultation;
use Mail;

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

     public function sendMail(Request $request,$id){
        if($request->isMethod('post')){
            $data=$request->all();
            $dataDetails=array(
            
            'email'=>$request->email,
            'content'=>$request->content,
            

      );
            Mail::send('admin.contact.email',$dataDetails,function($message)use($dataDetails){
               $message->from('nafiz016@gmail.com');

                $message->to($dataDetails['email'])->subject('Contact Form Query');
            });

            
            //echo "<pre>";print_r($data);die; 
        return redirect()->back()->with('flash_message','Sent Mail Successfully');  

        }

         $sentMail=Consultation::where('id',$id)->first();
           return view('admin.contact.send_mail')->with(compact('sentMail'));
     }
}
