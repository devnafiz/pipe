<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreOrder;

class PreOrderController extends Controller
{
     //scrap
     public function viewOrder(Request $request){

      $orderView=PreOrder::get();
      return view('admin.preorder.pre_order_view')->with(compact('orderView'));
     }
     public function delOrder($id){
       PreOrder::where('id',$id)->delete();

       return redirect()->back()->with('flash_message','Pre Order has been Deleted!');

     }

     public function singleOrder(Request $request,$id){

     	 $preorderDetails=PreOrder::where('id',$id)->first();
     	 return view('admin.preorder.single_order')->with(compact('preorderDetails'));


     }
}
