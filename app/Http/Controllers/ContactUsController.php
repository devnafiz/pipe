<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use Mail;
use App\Notification;



class ContactUsController extends Controller
{
    public function contactUs(Request $request){
    	return view('frontend_layout.contact.contact');
    }

    public function postContact(Request $request){
    	//$data=$request->all();

    	//echo "<pre>";print_r($data);die;
    	$this->Validate($request,[
             'name'=>'required',
             'email'=>'required|email',
             'phone'=>'required',
             'message'=>'required'

    	]);

    	$instantId=ContactUs::create($request->all());
        $instantId=$instantId->id;
        $notification=new Notification;

         $notification->admin_seen=0;
         $notification->message=$request->message;
         $notification->contact_id=$instantId;
         $notification->save();




         //echo "<pre>";print_r($instantId);die;
        $dataDetails=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'user_message'=>$request->message
      );

        
    	Mail::send('frontend_layout.contact.email',$dataDetails
    		,function($message)use($dataDetails){

    		$message->from($dataDetails['email']);
    		$message->to('nafiz016@gmail.com')->subject('Contact Form Query');
    	});
        

    	return back()->with('success', 'Thanks for contacting us!');

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

         $sentMail=ContactUs::where('id',$id)->first();
           return view('admin.contact.send_mail')->with(compact('sentMail'));
     }

   
}
