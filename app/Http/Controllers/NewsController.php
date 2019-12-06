<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Input;
use Image;
use App\NewsComment;

class NewsController extends Controller
{
    public function addNews(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->all();
              //echo "<pre>";print_r($data);die;
    		$news= new News;
    		$news->title=$data['title']; 
    		$news->icon=$data['icon']; 

            if($request->hasFile('image')){

                $image_tmp =Input::file('image');
                if($image_tmp->isValid()){

                    $extension =$image_tmp->getClientOriginalExtension();
                    $filename =rand(111,99999).'.'.$extension;
                    $large_image_path ='images/backend_image/news/large/'.$filename;
                    $medium_image_path ='images/backend_image/news/medium/'.$filename;
                    $small_image_path ='images/backend_image/news/small/'.$filename;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    $news->image =$filename;
                }

            }

    		$news->description=$data['description']; 
    		if(!empty($data['status'])){
    			$status=1;
    		}else{
                $status=0;
    		}
    		$news->status=$status; 
    		$news->save();
    		return  redirect()->back()->with('flash_message','Successfully add new');
    		
    	}
    	return view('admin.news.add_news');
    }

    //edit

    public function editNews(Request $request,$id=null){
    	if($request->isMethod('post')){
    		$data=$request>all();

             if(!empty($data['status'])){
    			$status=1;
    		}else{
                $status=0;
    		}

       News::where('id',$id)->update(['title'=>$data['title'],'icon'=>$data['icon'],'description'=>$data['description'],'status'=>$status]);
    	}
    	$newsDetails=News::where('id',$id)->first();

    	return view('admin.news.edit_news')->with(compact('newsDetails'));
    }
    //view

    public function viewNews(Request $request){

    	$newsView=News::get();
    	return view('admin.news.news_list')->with(compact('newsView'));
    }
  //delete
    public function delNews($id){
    	News::where('id',$id)->delete();
    	return  redirect()->back()->with('flash_message','News Has Been deleted');

    }

    public function newsCommentView(Request $request)
    {

        $newsCommentDetail=NewsComment::orderByRaw('id DESC')->get();
       return view('admin.news.news_comment_list')->with(compact('newsCommentDetail')); 
    }

    public function updateNewsStatus($id,$status)
    {
         NewsComment::where('id',$id)->update(['status'=>$status]);
        return redirect()->back()->with('flash_message','Successfully change status');
    }

}
