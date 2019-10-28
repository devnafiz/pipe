<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function addPage(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->all();
    		 $pages = new Page;
    		 $pages->title =$data['title'];
    		 $pages->slug =$data['slug'];
    		 $pages->content =$data['content'];
    		 $pages->save();
    		 return redirect()->back()->with('flash_message','Successfully add New Page');
    		//echo "<pre>";print_r($data);die;
    	}

    	return view('backend_layout.page.create');
    }

    public function viewPage(Request $request){

        $pages =Page::get();

    	return view('backend_layout.page.index')->with(compact('pages'));
    }

    //page edit
    public function editPage(Request $request,$id=null){
          if($request->isMethod('post')){
            $data =$request->all();

        Page::where('id',$id)->update(['title'=>$data['title'],'slug'=>$data['slug'],'content'=>$data['content']]);
        return redirect()->back()->with('flash_message','Successfully page has been updated');

          	
          }

          $pageDetails =Page::where('id',$id)->first();
          return  view('backend_layout.page.edit')->with(compact('pageDetails'));

    }
}
