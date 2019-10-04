@extends('frontend_layout.design_layout')


@section('title')

{{$pages->title}}


@endsection

@section('content')
 
     <section class="fluid-section-one">
    	<div class="outer-container clearfix">
    	  

{!!$pages->content!!}


 	   		

 </div>
</section>

@endsection
