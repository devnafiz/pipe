<?php



Route::get('/','FrontendController@index');

Route::get('/dashbord','AdminController@dashbord');

//page
Route::get('/page/{slug}','FrontendController@getPage');
//contact page
Route::get('/contact-us','ContactUsController@contactUs');
Route::post('/post-contact','ContactUsController@postContact');

//product view
Route::get('/products','FrontendController@viewProduct');
Route::get('/products/{slug}','FrontendController@singleProductView');
Route::post('/products/serach-product','FrontendController@searchProduct');
//gallery
Route::get('/gallery','FrontendController@viewGallery');

Route::get('/view-gallery/{slug}','FrontendController@singleGallery');
//subscribe
Route::post('/check-subcribe-email','NewsLetterController@checkSubscribe');

//pre order 
Route::match(['get','post'],'/view-pre-order','FrontendController@viewPreOder');
//deliver Tracking
Route::match(['get','post'],'/view-delivery-tracking','FrontendController@viewDelivery');

//Route::get('/view-gallery/{slug}','FrontendController@singleGallery');

//Truck Rent

Route::match(['get','post'],'/truck-rent','FrontendController@addTruckRent');
//consultation
Route::match(['get','post'],'/free-consultation','FrontendController@consultation');

//career
Route::get('/career','FrontendController@viewJob');
Route::get('/details-career/{id}','FrontendController@detailsJob');
//pdf
Route::get('/pdf-download','FrontendController@viewPdf');
Route::match(['get','post'],'/pdf-information/{id}','FrontendController@informationForPdf');
//testimonial
Route::match(['get','post'],'/add-testimonial','FrontendController@addTestimonial');

//Thank you Page
Route::get('/thank-you','FrontendController@thakyou');
//faq
Route::get('/faq','FrontendController@faqView');

//ip
Route::get('/clientIp','CientIpController@ClientIp');
//Scarp
Route::match(['get','post'],'/scrap','FrontendController@scrap');
//newws view
Route::get('/news','FrontendController@viewNews');
Route::get('/news/{id}','FrontendController@singleNews');
Route::post('/news/comment','FrontendController@NewComment');




//admin panel

Route::match(['get','post'],'/dashbord_login','AdminController@login');


Route::group(['middleware'=>['adminLogin']],function(){
      Route::get('/admin/dashbord','AdminController@dashbord');

      //slide  area

      Route::match(['get','post'],'/admin/add-slide','BannerController@addSlide');
      Route::match(['get','post'],'/admin/edit-slide/{id}','BannerController@editSlide');
      Route::get('/admin/view-slide','BannerController@viewSlide');

      Route::get('/admin/delete-slide/{id}','BannerController@delSlide');


      //Pages 
      Route::match(['get','post'],'/admin/pages','PageController@addPage');
      Route::get('/admin/view-page','PageController@viewPage');
      Route::match(['get','post'],'/admin/page-edit/{id}','PageController@editPage');

      //product 
      Route::get('/admin/product-list','ProductController@index');
      Route::match(['get','post'],'/admin/add-product','ProductController@addProduct');
      Route::match(['get','post'],'/admin/edit-product/{id}','ProductController@editProduct');
      Route::get('/admin/delete-product/{id}','ProductController@delProduct');

      //gallery
      Route::match(['get','post'],'/admin/add-gallery','GalleryController@addgallery');
      Route::get('/admin/gallery-list','GalleryController@viewGallery');
      Route::match(['get','post'],'/admin/edit-gallery/{id}','GalleryController@editGallery');
      Route::get('/admin/delete-gallery/{id}','GalleryController@delGallery');

      //Admin ...SubAdmin
      Route::match(['get','post'],'/admin/add-admin','AdminController@addAdmin');
      Route::match(['get','post'],'/admin/edit-admin/{id}','AdminController@editAdmin');
      Route::get('/admin/view-admin','AdminController@viewAdmin');
      Route::get('/admin/delete-admin/{id}','AdminController@delAdmin');
      Route::get('/admin/logout','AdminController@logout');

      //Contact
      Route::get('/admin/view-contact','AdminController@viewContact');
      Route::get('/admin/contact-details/{id}','AdminController@conactDetails');
      Route::get('/admin/delete-contact/{id}','AdminController@delContact');
      Route::match(['get','post'],'/admin/send-mail/contact/{id}','AdminController@sendMail');

      //notification
      Route::get('/admin/seen-notification/{id}','NotificationController@seenNotify');

      //Newsletter
      Route::get('/admin/view-subscriber','AdminController@viewNewsletter');
      Route::get('/admin/update-newslleter-status/{id}/{status}','AdminController@updateNewsletterStatus');

      //delivery tracking
      Route::match(['get','post'],'/admin/add-delivery-tracking','DeliveryTrackingController@addTracking');
      Route::get('/admin/view-delivery-tracking','DeliveryTrackingController@viewTracking');
      Route::match(['get','post'],'/admin/edit-delivery-tracking/{id}','DeliveryTrackingController@EditTracking');

      //career
      Route::match(['get','post'],'/admin/add-jobs','CareerController@addJobs');
      Route::match(['get','post'],'/admin/edit-jobs/{id}','CareerController@editCareer');
      Route::get('/admin/job-list','CareerController@viewJobs');
      Route::get('/admin/view-job/{id}','CareerController@singleJob');
      //Route::get('/admin/delete-job/{id}','CareerController@delJobs');

      Route::get('/admin/delete-career/{id}','CareerController@delJobs');

      //Truck rent
      Route::get('/admin/view-truck-rent','TruckRentController@viewTruck');
      Route::get('/admin/delete-truck-rent/{id}','TruckRentController@delTruckRent');


      //pdf upload
      Route::match(['get','post'],'/admin/add-pdf','PdfController@addPdf');
      Route::get('/admin/view-pdf','PdfController@viewPdf');

      //consultation
      Route::get('/admin/view-consultation','ConsultationController@viewConsultation');
      Route::get('/admin/delete-consultation/{id}','ConsultationController@delConsultation');
      Route::match(['get','post'],'/admin/send-mail/{id}','ConsultationController@sendMail');

      //news fotter 
      Route::match(['get','post'],'/admin/add-news','NewsController@addNews');
      Route::match(['get','post'],'/admin/edit-news/{id}','NewsController@editNews');
      Route::get('/admin/news-list','NewsController@viewNews');
      Route::get('/admin/news-details/{id}','NewsController@singleNews');
      Route::get('/admin/delete-news/{id}','NewsController@delNews');
      Route::get('/admin/news-comments','NewsController@newsCommentView');
       Route::get('/addmin/comments-Update-status/{id}/{status}','NewsController@updateNewsStatus');

      //testimonial

      Route::get('/admin/testimonial-list','TestimonialController@viewTestimonial');
      Route::get('/admin/delete-testimonial/{id}','TestimonialController@delTest');
      Route::get('/admin/update-testimonial-status/{id}/{status}','TestimonialController@updateTestimonialStatus');

      //scrap
      Route::get('/admin/view-scarp','AdminController@viewScrap');
      Route::get('/admin/delete-scrap/{id}','AdminController@delScrap');



});

//contact  page 
Route::match(['get','post'],'/contact-us','FrontendController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
