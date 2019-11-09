<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CientIpController extends Controller
{
    public function ClientIp(Request $request){
    	dd($request->ip());
    }
}
