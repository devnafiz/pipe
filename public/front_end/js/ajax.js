$(document).ready(function(e){

	$("#apply").click(function(e){
		//e.preventDefault();
		$.ajaxSetup({
                headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

		
          e.preventDefault(); 
		var email=$("input[name=email]").val();
		//alert(email);

		$.ajax({

			     type:'POST',
			     url :'/subscribe',
			     data:{email:email},
			     success:function(data){

                     alert(data.success);
			     	//$("#success").text('Successfully Subscribe Email');
			     }





		});



	});


});