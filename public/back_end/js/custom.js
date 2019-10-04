
$(document).ready(function(){

	$('#type').change(function(){

         //alert('test');
         var type=$('#type').val();
         //alert(type);
         if(type=="Admin"){
         	$('#Access').hide();
         }else{
         	$('#Access').show();
         }

	});
	
	

	$("#delCat").click(function(){
          if(confirm('Are you sure  want to delete category ?')){

          	return true;
          }
          return false;

	});

	// $('#delProduct').click(function(){
	// 	if(confirm('Are you sure  want  to delete Product')){
	// 		return true;
	// 	}else{
	// 		return false;

	// 	}

	// });
	$(document).on('click','.deleteRecord',function(e){
		//alert('hi');
		var id = $(this).attr('rel');
		var deleteFunction =$(this).attr('rel1');
    swal({

    	title:"are you sure?",
    	text:"you will no be recovery",
    	type:"warning",
    	showCancelButton:true,
    	cancelButtonClass: 'btn btn-danger',
    	confirmButtonText:"yes delete"
    },

     function(){
     	window.location.href ="/admin/"+deleteFunction+"/"+id;
     });
		
		//alert(deleteFunction);
		//return false;https://sweetalert2.github.io/https://cdnjs.com/libraries/sweetalert/1.1.3
	});

    $(document).on('click','.notification',function(e){
            var id = $(this).attr('rel');
            var notificationFunction =$(this).attr('rel1');

            //alert(notificationFunction);


             $.ajax(
               {
                url: "/admin/"+notificationFunction+"/"+id,
                type: 'get',
                data: {
                    "id": id,
                   
                },
                success: function (){
                    window.location.reload(true);
                }

        });

            // function(){
            //      window.location.href ="/admin/"+notificationFunction+"/"+id;    

            // }



    });



	
});
