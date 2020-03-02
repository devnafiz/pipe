<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pdfdownload;
use Illuminate\Support\Facades\Input;
use Mail;
use Validator;


class PdfController extends Controller
{
     public function addPdf(Request $request){
     	if($request->isMethod('post')){

         $data=$request->all();
         //echo "<pre>";print_r($data);die;

         if(empty($data['status'])){
         	$data['status']=0;
         }
          $validator=Validator::make($request->all(),[
           'pdf_name' => 'required|max:255',
           
           'description'=>'required',
           'pdf_file'=>'required',
            
            
           ]);
            if($validator->passes()){
         $pdfupload =new Pdfdownload;
         	$pdfupload->pdf_name= $data['pdf_name'];
         	$pdfupload->description= $data['description'];
         	$pdfupload->status= $data['status'];
           if($request->hasFile('pdf_file')){

           	$pdf_tmp=Input::file('pdf_file');
           	if($pdf_tmp->isValid()){
           		 $extension=$pdf_tmp->getClientOriginalExtension();
           		 $filename=rand(111,99999).'.'.$extension;
           		 //$pdf_path ='images/backend_image/pdf/'.$filename;
           		 $pdf_tmp->move('images/backend_image/pdf/',$filename);
                $pdfupload->pdf_file= $filename;

             

           }
         

          }
          $pdfupload->save();

          return redirect()->back()->with('flash_message','Pdf upload successfully');
          
           	}else{

            }
          }

           	return view('admin.pdf.add_pdf');
     	}

     	public function viewPdf(Request $request){

     		$pdfDetails=Pdfdownload::get();
     		//echo "<pre>";print_r($pdfDetails);die;

     		return view('admin.pdf.view_pdf')->with(compact('pdfDetails'));
     	}
}
