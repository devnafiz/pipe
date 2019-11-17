<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsLetter;
use Validator;

class NewsLetterController extends Controller
{
    public function postNews(Request $request){
    	

    		$data=$request->all();
    		//echo "<pre>";print_r($data);die;

    		$NewsLetter =new NewsLetter;
    		$NewsLetter->email=$data['email'];
    		$NewsLetter->save();

           //echo "<pre>";print_r($data);die;


    	


    }
    public function checkSubscribe(Request $request){
          if($request->ajax()){

           $data=$request->all();
           //echo "<pre>";print_r($data);die;
           $newsLetter=NewsLetter::where('email',$data['email'])->count();
           if($newsLetter>0){

            echo "Exists";
           }else{
                    $validator = Validator::make($request->all(), [

                    'email' => 'required|email',

                   ]);
                    if($validator->passes()){

                    $newsLetter= new NewsLetter;
                    $newsLetter->email=$request->email;
                     $newsLetter->status=1;
                    $newsLetter->save();
                    return Redirect::away('/thank-you')->with('flash_message','Successfully has been sent');

                    }else{
                         echo "Error";

                    }

            
              }

          }

    }
}
