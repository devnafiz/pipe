<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeliveryTracking;
use Mail;
use Validator;

class DeliveryTrackingController extends Controller
{
    

    public function addTracking(Request $request){
    	if($request->isMethod('post')){

    		$data=$request->all();

    		//echo "<pre>";print_r($data);die;
    		if(empty($data['status'])){
    			$data['status']=0;
    		}
            $validator=Validator::make($request->all(),[
           'name' => 'required|max:255',
           'email' => 'required|email',
           'phone'=>'required',
           'company_name'=>'required|max:255',
            'tracking_number'=>'required',
            'status_position'=>'required',
            'product_description'=>'required',
            'delivery_date'=>'required'
            
           ]);
             if($validator->passes()){
    		$delivery_tracking= new DeliveryTracking;

    		$delivery_tracking->name=$data['name'];
            $delivery_tracking->email=$data['email'];
    		$delivery_tracking->company_name=$data['company_name'];
    		$delivery_tracking->tracking_number=$data['tracking_number'];
    		$delivery_tracking->status_position=$data['status_position'];
    		$delivery_tracking->product_description=$data['product_description'];
    		$delivery_tracking->delivery_date=$data['delivery_date'];
    		$delivery_tracking->status=$data['status'];
    		$delivery_tracking->save();
    		return redirect()->back()->with('flash_message','Successfully Add Tracking');
           }else{
             return redirect()->back()->with('flash_message','Your Tracking information  not valid!');
           }
    	}
    	return view('admin.tracking.add_delivery_tracking');
    }

    public function EditTracking(Request $request,$id=null){
        if($request->isMethod('post')){
            
              $data=$request->all();

            
             if(!empty($data['status'])){
                $status=1;
            }else{
                $status=0;
            }

            DeliveryTracking::where(['id'=>$id])->update(['name'=>$data['name'],'email'=>$data['email'],'company_name'=>$data['company_name'],'tracking_number'=>$data['tracking_number'],'status_position'=>$data['status_position'],'status'=>$status,'product_description'=>$data['product_description'],'delivery_date'=>$data['delivery_date']]);
             $dataDetails=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'company_name'=>$request->company_name,
            'tracking_number'=>$request->tracking_number,
            'status_position'=>$request->status_position,
            'product_description'=>$request->product_description,
            'delivery_date'=>$request->delivery_date,
            

      );
             Mail::send('admin.contact.delivery_mail',$dataDetails,function($message)use($dataDetails){
            $message->from('nafiz0162@gmail.com');
            $message->to($dataDetails['email'])->subject("Delivery Tracking Email ");
       });
            return redirect()->back()->with('flash_message','Delivery perfectly update');

        }
        $deliveryDeatails=DeliveryTracking::where('id',$id)->first();
        return view('admin.tracking.edit_delivery')->with(compact('deliveryDeatails'));
    }

    public function viewTracking(Request $request){
    	$deliveryDeatails=DeliveryTracking::get();

    	return view('admin.tracking.view_delivery_tracking')->with(compact('deliveryDeatails'));
    }
   
}
