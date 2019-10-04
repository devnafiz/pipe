<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;

use Closure;
use Session;
use App\Admin;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(empty(Session::has('adminSession'))){
            return redirect('/dashbord_login');
        }else{
           $adminDetails=Admin::where('username',Session::get('adminSession','username'))->first();
           $adminDetails=json_decode(json_encode($adminDetails),true);

           //echo "<pre>";print_r($adminDetails);die;
           if($adminDetails['type']=="Admin"){
                $adminDetails['gallery_access']=1;
                $adminDetails['page_access']=1;
                $adminDetails['products_access']=1;
           }
           Session::put('adminDetails',$adminDetails);
           $currentPath= Route::getFacadeRoot()->current()->uri();
              if($currentPath=="admin/view-page" && Session::get('adminDetails')['page_access']==0){
                return redirect('admin/dashboard')->with('flash_message','You have not access this menu');

              }
              if($currentPath=="admin/product-list" && Session::get('adminDetails')['products_access']==0){
                return redirect('admin/dashboard')->with('flash_message','You have not access this menu');

              }
              if($currentPath=="admin/gallery-list" && Session::get('adminDetails')['gallery_access']==0){
                return redirect('admin/dashboard')->with('flash_message','You have not access this menu');

              }
              //echo "<pre>";print_r($adminDetails);die;



        }


        return $next($request);
    }
}
