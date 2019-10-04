<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeliveryTracking;

class DeliveryTrackingController extends Controller
{
    

    public function addTracking(Request $request){
    	if($request->isMethod('post')){

    		$data=$request->all();

    		//echo "<pre>";print_r($data);die;
    		if(empty($data['status'])){
    			$data['status']=0;
    		}

    		$delivery_tracking= new DeliveryTracking;

    		$delivery_tracking->name=$data['name'];
    		$delivery_tracking->company_name=$data['company_name'];
    		$delivery_tracking->tracking_number=$data['tracking_number'];
    		$delivery_tracking->status_position=$data['status_position'];
    		$delivery_tracking->product_description=$data['product_description'];
    		$delivery_tracking->delivery_date=$data['delivery_date'];
    		$delivery_tracking->status=$data['status'];
    		$delivery_tracking->save();
    		return redirect()->back()->with('flash_message','Successfully Add Tracking');

    	}
    	return view('admin.tracking.add_delivery_tracking');
    }

    public function EditTracking(Request $request,$id=null){
        if($request->isMethod('post')){
            


        }
        $deliveryDeatails=DeliveryTracking::where('id',$id)->first();
        return view('admin.tracking.edit_delivery')->with(compact('deliveryDeatails'));
    }

    public function viewTracking(Request $request){
    	$deliveryDeatails=DeliveryTracking::get();

    	return view('admin.tracking.view_delivery_tracking')->with(compact('deliveryDeatails'));
    }
}
