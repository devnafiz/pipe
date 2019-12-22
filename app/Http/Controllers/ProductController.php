<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use App\Product;
use App\ProductImage;

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
            $products->slug= $data['slug'];
         	$products->additional_des= $data['additional_des'];
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


            Product::where('id',$id)->update(['product_name'=>$data['product_name'],'slug'=>$data['slug'],'product_code'=>$data['product_code'],'product_color'=>$data['product_color'],'description'=>$data['description'],'additional_des'=>$data['additional_des'],'price'=>$data['price'],'image'=>$filename,'status'=>$status]);
            return redirect()->back()->with('flash_message','Product update successfully!');
          

       }
        $productDetails=Product::where(['id'=>$id])->first();
        return view('admin.product.edit_product')->with(compact('productDetails'));
        
    }

    public function delProduct($id){

        Product::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message','Product has been successfully Deleted');
    }
     //add image
    public function addImage(Request $request,$id)
    {

     //$data=$request->all();
     //echo "<pre>";print_r($data);die;
      $productDetails=Product::where('id',$id)->first();
      //$productDetails=json_decode(json_encode($productDetails));
      //echo "<pre>";print_r($productDetails);die;
      if($request->isMethod('post')){
        $data=$request->all();
        $image=new ProductImage;
        if($request->hasFile('image')){
          $file=$request->file('image');
          //echo "<pre>";print_r($files);die;
          //foreach($files as $file){

             if($file->isValid()){
            
            $extension=$file->getClientOriginalExtension();
            $filename=rand(111,99999).'.'.$extension;

            $large_image_path ='images/backend_image/products/large/'.$filename;
            $medium_image_path ='images/backend_image/products/medium/'.$filename;
            $small_image_path ='images/backend_image/products/small/'.$filename;
            Image::make($file)->save($large_image_path);
            Image::make($file)->resize(300,300)->save($medium_image_path);
            Image::make($file)->resize(180,180)->save($small_image_path);
            $image->image=$filename;
            

          }


        }

        $image->product_id=$data['product_id'];
            $image->save();
            return redirect()->back()->with('flash_message','upload Image');


      }
      $productImage=ProductImage::where(['product_id'=>$id])->get();
      return view('admin.product.add_image')->with(compact('productDetails','productImage'));
    }
    //delte product Image
    public function delProductImage($product_id,$id){


        ProductImage::where(['id'=>$id,'product_id'=>$product_id])->delete();
    return redirect()->back()->with('flash_message','Delete Image!');
    }

    


}
