<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use App\Product;

class ProductController extends Controller
{
    

    public function index(Request $request){
    	$products =Product::get();

    	return view('admin.product.product_list')->with(compact('products'));
    }


    public function addProduct(Request $request){

         if($request->isMethod('post')){

         	$data=$request->all();

         	//echo "<pre>";print_r($data);die;
         	$products =new Product;
         	$products->product_name= $data['product_name'];
         	$products->product_code= $data['product_code'];
         	$products->product_color= $data['product_color'];
         	if(!empty($data['description'])){
                 $products->description= $data['description'];
         	}else{
              $products->description= '';
         	}

         	if($request->hasFile('image')){

         		$image_tmp =Input::file('image');
         		if($image_tmp->isValid()){

         			$extension =$image_tmp->getClientOriginalExtension();
         			$filename =rand(111,99999).'.'.$extension;
         			$large_image_path ='images/backend_image/products/large/'.$filename;
         			$medium_image_path ='images/backend_image/products/medium/'.$filename;
         			$small_image_path ='images/backend_image/products/small/'.$filename;
         			Image::make($image_tmp)->save($large_image_path);
         			Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
         			Image::make($image_tmp)->resize(300,300)->save($small_image_path);
         			$products->image =$filename;
         		}

         	}
         	
         	//$products->image= $data['image'];
         	$products->price= $data['price'];
         	if(!empty($data['status'])){
         		$status= 0;
         	}else{
         		$status= 1;
         	}
         	$products->status= $status;
         	$products->save();
         	return redirect()->back()->with('flash_message','Product has been added successfully');

         }

    	return view('admin.product.add_product');
    }

    //edit product

    public function editProduct(Request $request,$id =null){
        if($request->isMethod('post')){

            $data=$request->all();
            //echo"<pre>";print_r($data);die;
            if($request->hasFile('image')){

                $image_tmp=Input::file('image');
                if($image_tmp->isValid()){

                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename =rand(111,99999).'.'.$extension;
                    $large_image_path='images/backend_image/products/large/'.$filename;
                    $medium_image_path='images/backend_image/products/medium/'.$filename;
                    $small_image_path='images/backend_image/products/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            }else{
                $filename=$data['current_image'];
            }
            if(!empty($data['status'])){
                $status=1;
            }else{
                $status=0;
            }


            Product::where('id',$id)->update(['product_name'=>$data['product_name'],'product_code'=>$data['product_code'],'product_color'=>$data['product_color'],'description'=>$data['description'],'price'=>$data['price'],'image'=>$filename,'status'=>$status]);
            return redirect()->back()->with('flash_message','Product update successfully!');
          

       }
        $productDetails=Product::where(['id'=>$id])->first();
        return view('admin.product.edit_product')->with(compact('productDetails'));
        
    }

    public function delProduct($id){

        Product::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message','Product has been successfully Deleted');
    }

}
