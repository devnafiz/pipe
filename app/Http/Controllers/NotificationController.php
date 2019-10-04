<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class NotificationController extends Controller
{
    public function seenNotify($id){

    	Notification::where('id',$id)->update(['admin_seen'=>1]);
    }
}
