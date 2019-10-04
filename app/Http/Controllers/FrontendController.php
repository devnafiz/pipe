<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Page;
use App\Product;
use App\Banner;
use App\Gallery;

use App\DeliveryTracking;
use App\Career;
use App\TruckRent;
use App\Pdfdownload;
use App\PdfInformation;
use App\Consultation;
use Validator;


class FrontendController extends Controller
{
    public function index(Request $request){
      $slider=Banner::get();

    	return view('index')->with(compact('slider'));
    }


    //contact page

    public function contact(Request $request){

    	if($request->isMethod('post')){
          $data=$request->all();
          echo "<pre>";print_r($data);die;
         

    	}

    	return view('frontend_layout.contact.contact');
    }

    // page view
    public function getPage($slug){
        $pages =Page::where('slug',$slug)->first();
        return view('frontend_layout.page.index')->with(compact('pages'));

    }


    //product show
    public function viewProduct(Request $request){
     $products=Product::paginate(1);
     //$products=json_decode(json_encode($products));
     //echo "<pre>";print_r($products);die;
     return view('frontend_layout.product.shop')->with(compact('products'));

    }
    //gallery

    public function viewGallery(Request $request){
      $galleries =Gallery::get();
       //echo "<pre>";print_r($galleries);die;
      return view('frontend_layout.gallery.gallery')->with(compact('galleries'));
    }

    public function singleGallery($slug){
       $gallery=Gallery::where('slug',$slug)->first();
       return view('frontend_layout.gallery.single_gallery')->with(compact('gallery'));

    }

    //pre order   view

    public function viewPreOder(Request $request){
      if($request->isMethod('post')){

        Validator::make($request->all(),[
           'name' => 'required|max:255',
           'email' => 'required|email',
           'phone'=>'required',

           ]);

          if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

       // $data=$request->all();
        //echo "<pre>";print_r($data);die;
      }

      return view('frontend_layout.preorder.pre_order');
    }


    //delivery Tracking

    public function viewDelivery(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();
         $DeliveryTrackingCount=DeliveryTracking::where('tracking_number',$data['tracking_number'])->count();
       //echo "<pre>";print_r( $DeliveryTrackingCount);die;
         if($DeliveryTrackingCount>0){

            $DeliveryTrackingDetails=DeliveryTracking::where('tracking_number',$data['tracking_number'])->first();

            return view('frontend_layout.tracking.delivery_details')->with(compact('DeliveryTrackingDetails'));

         }else{

          return redirect()->back()->with('flash_message','Your Tracking Numner Is not Valid!');
         }

      }

      return view('frontend_layout.tracking.view_tracking');
    }


    //Truck rent 
    public function addTruckRent(Request $request){
      if($request->isMethod('post')){

        $data=$request->all();
        //echo "<pre>";print_r($data);die;
         $validator = Validator::make($request->all(), [

                    'name' => 'required|max:255',
                    'email' => 'required|email',
                    'phone' => 'required|min:2',
                    'company_address' => 'required|max:300',
                    'product_qty' => 'required|min:1',
                    'destination' => 'required|max:300',
                    'quoate' => 'required',


                   ]);
                    if($validator->passes()){

                    $truckrent= new TruckRent;
                    $truckrent->name=$request->name;
                    $truckrent->email=$request->email;
                    $truckrent->phone=$request->phone;
                    $truckrent->company_address=$request->company_address;
                    $truckrent->product_qty=$request->product_qty;

                    $truckrent->destination=$request->destination;
                    $truckrent->quoate=$request->quoate;
                    $truckrent->save();
                    return redirect()->back()->with('flash_message','Successfully has been sent');

                    }else{
                          return redirect()->back()->with('flash_message','Sorry  your Informationmay be  not valid');
                    }


      }

      return view('frontend_layout.truck.truck_rent');
    }




    //consultation

    public function consultation(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();

        //echo "<pre>";print_r($data);die;

        $validator = Validator::make($request->all(), [

                    'name' => 'required|max:255',
                    'email' => 'required|email',
                    'phone' => 'required|min:2',
                    'company_address' => 'required|max:300',
                    'date' => 'required',
                    


                   ]);
                    if($validator->passes()){

                    $consultations= new Consultation;
                    $consultations->name=$request->name;
                    $consultations->email=$request->email;
                    $consultations->phone=$request->phone;
                    $consultations->company_address=$request->company_address;
                   

                    $consultations->date=$request->date;
                    
                    $consultations->save();
                    return redirect()->back()->with('flash_message','Successfully has been sent');

                    }else{
                          return redirect()->back()->with('flash_message','Sorry  your Informationmay be  not valid');
                    }

      }

      return view('frontend_layout.consultation.free_consultation');
    }


    //career
    public function viewJob(Request $request){

      $careerDetails=Career::get();

      return view('frontend_layout.career.view_career')->with(compact('careerDetails'));
    }

    public function detailsJob($id){
       $careerDetails=Career::where('id',$id)->first();
        return view('frontend_layout.career.job_details')->with(compact('careerDetails'));

    }

    //pdf

    public function viewPdf(Request $request){

        $pdfDetails=Pdfdownload::where('status','1')->get();
        return view('frontend_layout.pdf.view_pdf')->with(compact('pdfDetails'));

    }

    public function informationForPdf(Request $request,$id=null){

      if($request->isMethod('post')){

        $data=$request->all();
        //echo "<pre>";print_r($data);die;


          $validator = Validator::make($request->all(), [

                    'name' => 'required|max:255',
                    'email' => 'required|email',
                    'phone' => 'required|min:2',
                    'company_address' => 'required|max:300',
                    


                   ]);
                    if($validator->passes()){

                    $pdfinformation= new PdfInformation;
                    $pdfinformation->name=$request->name;
                    $pdfinformation->email=$request->email;
                    $pdfinformation->phone=$request->phone;
                    $pdfinformation->company_address=$request->company_address;
                   
                    $pdfinformation->save();

                    $pdfDetails=Pdfdownload::where('id',$id)->first();
                    return view('frontend_layout.pdf.pdf_details')->with(compact('pdfDetails'));

                    }else{
                          return redirect()->back()->with('flash_message','Sorry  your Informationmay be  not valid');
                    }


      }
        
      $pdfDetails=Pdfdownload::where('id',$id)->first();
      return view('frontend_layout.pdf.pdf_form')->with(compact('pdfDetails'));
    }
}
