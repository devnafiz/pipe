<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TruckRent;

class TruckRentController extends Controller
{
    public function viewTruck(Request $request){

    	$truckrentDetails=TruckRent::get();

    	return view('admin.truck_rent.truck_rent_view')->with(compact('truckrentDetails'));


    	
    }

    //Delete

    public function delTruckRent($id){
      TruckRent::where('id',$id)->delete();
      return redirect()->back()->with('flash_message','Truck Rent has been Successfully deleted!');

    }
}
