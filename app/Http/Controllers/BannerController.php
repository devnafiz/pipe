<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Banner;
use Image;

class BannerController extends Controller
{
    public function addSlide(Request $request){
    	if($request->isMethod('post')){

    		$data=$request->all();
    		//echo "<pre>";print_r($data);die;

    		$banner= new Banner;
    		$banner->top_head =$data['top_head'];
    		$banner->title =$data['title'];
    		$banner->sub_title =$data['sub_title'];
    		
    		if($request->hasFile('image')){
    			$image_tmp=Input::file('image');
    			if($image_tmp->isValid()){

    				$extension=$image_tmp->getClientOriginalExtension();
    				$filename=rand(111,99999).'.'.$extension;
    				$large_image_path ='images/backend_image/slides/large/'.$filename;

    				Image::make($image_tmp)->resize(1920,817)->save($large_image_path);
                    $banner->image =$filename;
    				}
                }
            if(!empty($data['status'])){
                $status=1;
            }else{
                $status=0;
            }
            $banner->image =$filename;
            $banner->status =$status;

    		$banner->save();
    		return redirect()->back()->with('flash_message','Banner has been uploaded Successfully');




    	}

    	

    	return view('backend_layout.banner.add_banner');
    }

    public function viewSlide(Request $request){

    	$slides= Banner::get();
    //echo "<pre>";print_r($slides);die;
    	return view('backend_layout.banner.all_banner')->with(compact('slides'));

    }


    public function editSlide(Request $request,$id=null){


    	if($request->isMethod('post')){

    		$data=$request->all();

    		if($request->hasFile('image')){

    			$image_tmp=Input::file('image');
    			if($image_tmp->isValid()){
    				$extension=$image_tmp->getClientOriginalExtension();
    				$filename =rand(111,99999).'.'.$extension;
    				$large_image_path='images/backend_image/slides/large/'.$filename;
    				Image::make($image_tmp)->resize(1920,817)->save($large_image_path);

    			}
    		}
    		 if(!empty($data['status'])){
                $status=1;
            }else{
                $status=0;
            }

            Banner::where(['id'=>$id])->update(['top_head'=>$data['top_head'],'title'=>$data['title'],'sub_title'=>$data['sub_title'],'image'=>$filename,'status'=>$status]);
            return redirect()->back()->with('flash_message','Slide perfectly update');
    	}
    	$slideDetails=Banner::where(['id'=>$id])->first();

    	return view('backend_layout.banner.edit_banner')->with(compact('slideDetails'));
    }

    //bamnner delete
    public function delSlide($id){

    	Banner::where(['id'=>$id])->delete();

    	return redirect()->back()->with('flash_message','Banner  has been Deleted');
    }
}
