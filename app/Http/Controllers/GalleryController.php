<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use Image;

class GalleryController extends Controller
{
    public function addgallery(Request $request){
    	if($request->isMethod('post')){
    		$data=$request->all();
    		//echo "<pre>";print_r($data);die;

    		$gallery=new Gallery;
    		$gallery->client_name=$data['client_name'];
    		$gallery->location=$data['location'];
    		$gallery->project_value=$data['project_value'];
    		$gallery->completed=$data['completed'];
          $gallery->slug=$data['slug'];

    		$gallery->content=$data['content'];
    		if($request->hasFile('image')){

                  $tmp_image=Input::file('image');
                  if($tmp_image->isValid()){

                  	$extension=$tmp_image->getClientOriginalExtension();
                  	$filename=rand(111,99999).'.'.$extension;
                  	$large_image_path ='images/backend_image/gallery/large/'.$filename;
                    $medium_image_path='images/backend_image/gallery/medium/'.$filename;
                    $single_image_path='images/backend_image/gallery/single/'.$filename;

                  	Image::make($tmp_image)->save($large_image_path);
                    Image::make($tmp_image)->resize(600,400)->save($medium_image_path);
                    Image::make($tmp_image)->resize(700,400)->save($single_image_path);
                  	$gallery->image =$filename;

                  }





    		}

           if(empty($data['status'])){
           	 $status=0;
           }else{
           	$status=1;
           }
            $gallery->status=$status;
            $gallery->save();
            return redirect()->back()->with('flash_message','Successfully add gallery');


    	}

    	return view('admin.gallery.add_gallery');
    }

    //edit gallery
    public function editGallery(Request $request,$id=null){
    	if($request->isMethod('post')){
    		$data=$request->all();
    		if($request->hasFile('image')){
    			$tmp_image=Input::file('image');
    			if($tmp_image->isValid()){

    				$extension=$tmp_image->getClientOriginalExtension();
    				$filename=rand(111,99999).'.'.$extension;
    				$large_image_path='images/backend_image/gallery/large/'.$filename;
            $medium_image_path='images/backend_image/gallery/medium/'.$filename;
            $single_image_path='images/backend_image/gallery/single/'.$filename;
    				Image::make($tmp_image)->save($large_image_path);
            Image::make($tmp_image)->resize(600,400)->save($medium_image_path);
            Image::make($tmp_image)->resize(700,400)->save($single_image_path);

    			}
    		}else{
    			$filename=$data['current_image'];
    		}
    		if(!empty($data['status'])){
                $status=1;
            }else{
                $status=0;
            }

          Gallery::where(['id'=>$id])->update(['client_name'=>$data['client_name'],'location'=>$data['location'],'project_value'=>$data['project_value'],'completed'=>$data['completed'],'slug'=>$data['slug'],'content'=>$data['content'],'image'=>$filename,'status'=>$status]);
          return redirect()->back()->with('flash_message','Successfully edit Gallery');  

    		
    	}
    	$galleryDetails=Gallery::where(['id'=>$id])->first();

    	return  view('admin.gallery.edit_gallery')->with(compact('galleryDetails'));
    }
    //view gallery list
    public function viewGallery(Request $request){
    	$galleries=Gallery::get();
      //echo "<pre>";print_r($galleries);die;
    	return view('admin.gallery.gallery_list')->with(compact('galleries'));
    }
    //delete gallery
    public function delGallery($id){
    	Gallery::where(['id'=>$id])->delete();

    	return redirect()->back()->with('flash_message','Successfully gallery Deleted');
    }
}
