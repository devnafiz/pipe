<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\ContactUs;
use Mail;
use App\NewsLetter;


class AdminController extends Controller
{
    public function dashbord(){
    	return view('admin_dashbord');
    }

    //deshbord login

    public function login(Request $request){

    	if($request->isMethod('post')){


    		$data=$request->input();
            //echo "<pre>";print_r($data);die;
            $adminCount=Admin::where(['username'=>$data['username'],'password'=>md5($data['password']),'status'=>1])->count();

    		if($adminCount>0){
                Session::put('adminSession',$data['username']);
    			return redirect('/admin/dashbord');
    		}else{
    			return redirect()->back()->with('flash_message','Invalid Password Or Email');
    		}

    	}

    	return view('backend_layout.login.login');
    }
    //add admin
    public function addAdmin(Request $request){

        if($request->isMethod('post')){

            $data=$request->all();
            $adminCount=Admin::where('username',$data['username'])->count();
            //echo "<pre>";print_r($data);die;

            if($adminCount>0){
                return redirect()->back()->with('flash_message','UserName Already Exist!');
            }else{
                if(empty($data['status'])){
                    $data['status']=0;
                }
                if($data['type']=="Admin"){
                    $admin= new Admin;
                      $admin->type=$data['type'];
                      $admin->username=$data['username'];
                      $admin->password=md5($data['password']);
                      $admin->status=$data['status'];
                      $admin->save();

                      return redirect()->back()->with('flash_message_success','Successfully Add New Admin');

                }else if($data['type']=="Sub Admin"){
                    if(empty($data['gallery_access'])){
                        $data['gallery_access']=0;
                    }
                    if(empty($data['page_access'])){
                        $data['page_access']=0;
                    }
                    if(empty($data['products_access'])){
                        $data['products_access']=0;
                    }

                    $admin= new Admin;
                    $admin->type=$data['type'];
                    $admin->username=$data['username'];
                    $admin->password=md5($data['password']);
                    $admin->status=$data['status'];
                    $admin->gallery_access=$data['gallery_access'];
                    $admin->page_access=$data['page_access'];
                    $admin->products_access=$data['products_access'];
                    $admin->save();
                     return redirect()->back()->with('flash_message_success','Successfully Add New Sub Admin');


                }
            }
            

        }
        return view('backend_layout.login.add_admin');
    }

    //edit admin Sub admin

    public function editAdmin(Request $request,$id){
        if($request->isMethod('post')){
            $data=$request->all();

            if(empty($data['status'])){
                $data['status']=0;
            }
            if($data['type']=="Admin"){
                    
                      Admin::where('usernmae',$data['username'])->update(['type'=>$data['type'],'username'=>$data['username'],'password'=>md5($data['password']),'status'=>$data['status']]);

                      return redirect()->back()->with('flash_message_success','Successfully Updated   Admin');

                }else if($data['type']=="Sub Admin"){
                    if(empty($data['gallery_access'])){
                        $data['gallery_access']=0;
                    }
                    if(empty($data['page_access'])){
                        $data['page_access']=0;
                    }
                    if(empty($data['products_access'])){
                        $data['products_access']=0;
                    }

                   
                    Admin::where('username',$data['username'])->update(['type'=>$data['type'],'username'=>$data['username'],'password'=>md5($data['password']),'status'=>$data['status'],'gallery_access'=>$data['gallery_access'],'page_access'=>$data['page_access'],'products_access'=>$data['products_access']]);
                     return redirect()->back()->with('flash_message_success','Successfully Updated Sub Admin');


                }


        }


      $adminDetails=Admin::where('id',$id)->first();

      return view('backend_layout.login.edit_admin')->with(compact('adminDetails'));


    }

    //view Admin List
    public function viewAdmin(Request $request){

        $admins=Admin::get();
        return view('backend_layout.login.view_admin')->with(compact('admins'));
    }

    //delte
     public function logout(){
        Session::flush();
        return redirect('/dashbord_login')->with('flash_message_success','Successfully logout');
    }
    public function delAdmin($id){

        Admin::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Admin Successfully has been Deleted');

    }

    //contact
     public function viewContact(Request $request){

        $contactus=ContactUs::get();

        return view('admin.contact.contact_list')->with(compact('contactus'));

     }

     public function conactDetails($id){
         $contactDetails=ContactUs::where('id',$id)->first();
           return view('admin.contact.contact_details')->with(compact('contactDetails'));

     }

      //delete

    public function delContact($id){

        ContactUs::where('id',$id)->delete();
        return redirect()->back()->with('flash_message','Successfully Contact has been Deleted!');
    }

     //send mail contact
     public function sendMail(Request $request,$id){
        if($request->isMethod('post')){
            $data=$request->all();

            $dataDetails=array(
            
            'email'=>$request->email,
            'content'=>$request->content,
            

      );
            Mail::send('frontend_layout.contact.email',$dataDetails,function($message)use($dataDetails){
               $message->from('nafiz016@gmail.com');

                $message->to($dataDetails['email'])->subject('Contact Form Query');
            });

            
            //echo "<pre>";print_r($data);die; 
        return redirect()->back()->with('flash_message','Sent Mail Successfully');


        }

         $sentMail=ContactUs::where('id',$id)->first();
           return view('admin.contact.send_mail')->with(compact('sentMail'));
     }

     //News letter

     public function viewNewsletter(Request $request){

        $newletter= NewsLetter::get();

        return view('admin.newsletter.view_news')->with(compact('newletter'));
     }

     //update newsletter status
     public function updateNewsletterStatus($id,$status){
        NewsLetter::where('id',$id)->update(['status'=>$status]);
        return redirect()->back()->with('flash_message','Successfully change status');
     }
}
