<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function addNews(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->all();
              //echo "<pre>";print_r($data);die;
    		$news= new News;
    		$news->title=$data['title']; 
    		$news->icon=$data['icon']; 
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

       News::where('id',$id)->update(['title'=>$data['title'],'icon'=>$data['icon'],'description'=>$data['description'],'status'=>$status])
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

}
