






/*
  ##    ####  ##### #    #   ##   #      # ######   ##   #####  
 #  #  #    #   #   #    #  #  #  #      #     #   #  #  #    # 
#    # #        #   #    # #    # #      #    #   #    # #    # 
###### #        #   #    # ###### #      #   #    ###### #####  
#    # #    #   #   #    # #    # #      #  #     #    # #   #  
#    #  ####    #    ####  #    # ###### # ###### #    # #    # 

#####  #####  ######  ####     ###### #####  ######  ####  #    # 
#    # #    # #      #    #    #      #    # #      #    # #    # 
#    # #    # #####  #         #####  #    # #####  #      #    # 
#####  #####  #      #  ###    #      #####  #      #      #    # 
#      #   #  #      #    #    #      #   #  #      #    # #    # 
#      #    # ######  ####     #      #    # ######  ####   ####

*/


/*Click en btn*/
$('.preg_frec_edit_btn_cont').click(function(){

  	verificar_inputs_vacios();

});





function verificar_inputs_vacios(){

	// Comprobando  input 
	// Si está vacio...

	var error=0;

	if( $('#preg_frec_edit_textarea_tit').val() == ''){

		$('#preg_frec_edit_textarea_tit').css("border", "1px solid #F44336");
		error++;
	}else{
		
		$('#preg_frec_edit_textarea_tit').css("border", "1px solid white");
	}


	if( $('#preg_frec_edit_descipcion_textarea').val() == ''){

		$('#preg_frec_edit_descipcion_textarea').css("border", "1px solid #F44336");
		error++;

	}else{
		
		$('#preg_frec_edit_descipcion_textarea').css("border", "1px solid white");
	}


	setTimeout(function(){            
		
		if (error==0) {

			var id_web	 		= $("#id_web").val();
		  	var id_cliente	 	= $("#id_cliente").val();
		  	var id_pregunta	 	= $("#id_pregunta").val();
		  	var pregunta 		= $("#preg_frec_edit_textarea_tit").val();
		  	var respuesta	 	= $("#preg_frec_edit_descipcion_textarea").val();

			/*
			console.log(id_web);
			console.log(id_cliente);
			console.log(pregunta);
			console.log(respuesta);
			*/
			
			// Activo fonto transparente y mouse reload					--> funcion en index.js
 		 	$.when(start_reloader()).done(function () {
		
			$.when(actualizar_pregunta_frecuente(id_web,id_cliente,id_pregunta,pregunta,respuesta)).done(function () {   

			// Desctivo fonto transparente y mouse reload					--> funcion en index.js
			toast = 'Pregunta frecuente actualizada';
		  	$.when(finish_reloader_with_toast(toast)).done(function () {

				
			});

			});
		
			});

		}
		

	},10);

}




function actualizar_pregunta_frecuente(id_w,id_c,id_pregunta,pregunta,respuesta){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/preg_frecuentes/edit/preg_frecu_actualizar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_pregunta:id_pregunta,
              pregunta:pregunta,
              respuesta:respuesta
            }
  })   

  .done(function(response){

 	console.log(response);

    //Materialize.toast('Pregunta frecuente actualizada', 3000, 'rounded');
    //window.location.reload();

    deferred.resolve();
        
  });


}

