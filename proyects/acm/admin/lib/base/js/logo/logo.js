


/*
  ##    ####  ##### # #    #   ##   #####  
 #  #  #    #   #   # #    #  #  #  #    # 
#    # #        #   # #    # #    # #    # 
###### #        #   # #    # ###### #####  
#    # #    #   #   #  #  #  #    # #   #  
#    #  ####    #   #   ##   #    # #    # 

#       ####   ####   ####  
#      #    # #    # #    # 
#      #    # #      #    # 
#      #    # #  ### #    # 
#      #    # #    # #    # 
######  ####   ####   #### 
*/



// FUNCION 
// Detecta cuando se activa o desactiva checkbox 
// para activar o desactivar logo

$('#checkbox_logo_active').click(function(){
	
	var id_web  		= $("#id_web").val();
	var id_cliente  	= $("#id_cliente").val();

	if ($('#checkbox_logo_active').is(':checked')) {
	  	
		$.when(logo_activar(id_web,id_cliente)).done(function () {   

		});

	}else{

		$.when(logo_desactivar(id_web,id_cliente)).done(function () {   

		});
	}
});







function logo_activar(id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/logo/logo_activar.php",
    "data": {
              id_web:id_w,id_cliente:id_c
            }
  })   

  .done(function(response){

	console.log(response);

  	//window.location.reload();

 	deferred.resolve();
	    
  });

}


function logo_desactivar(id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/logo/logo_desactivar.php",
    "data": {
              id_web:id_w,id_cliente:id_c
            }
  })   

  .done(function(response){

	console.log(response);

  	//window.location.reload();

 	deferred.resolve();
	    
  });

}











/*
  ##    ####  ##### #    #   ##   #      # ######   ##   #####  
 #  #  #    #   #   #    #  #  #  #      #     #   #  #  #    # 
#    # #        #   #    # #    # #      #    #   #    # #    # 
###### #        #   #    # ###### #      #   #    ###### #####  
#    # #    #   #   #    # #    # #      #  #     #    # #   #  
#    #  ####    #    ####  #    # ###### # ###### #    # #    # 

#       ####   ####   ####  
#      #    # #    # #    # 
#      #    # #      #    # 
#      #    # #  ### #    # 
#      #    # #    # #    # 
######  ####   ####   #### 
*/

$('#img_logo').change(function(){

	start_reloader();

	var parametros		= new FormData($("#form_logo")[0]);


	$.ajax({
		
		type: "POST",
		url: "../php/logo/logo_actualizar.php",
		data: parametros,

		cache: false,
		contentType: false,
		processData: false,
	})   


	.done(function(response){

		console.log(response);

		window.location.reload();

	});



});


















































