

/*

  ##   #####  #####  
 #  #  #    # #    # 
#    # #    # #    # 
###### #    # #    # 
#    # #    # #    # 
#    # #####  ##### 

#####  #####  ######  ####     ###### #####  ######  ####  #    # 
#    # #    # #      #    #    #      #    # #      #    # #    # 
#    # #    # #####  #         #####  #    # #####  #      #    # 
#####  #####  #      #  ###    #      #####  #      #      #    # 
#      #   #  #      #    #    #      #   #  #      #    # #    # 
#      #    # ######  ####     #      #    # ######  ####   ####

*/




/*Click en btn*/
$('.preg_frec_add_btn_cont').click(function(){

  	verificar_inputs_vacios();

});





function verificar_inputs_vacios(){

	// Comprobando  input 
	// Si está vacio...

	var error=0;

	if( $('#nueva_pregunta').val() == ''){

		$('#nueva_pregunta').css("border-bottom", "1px solid #F44336");
		error++;
	}else{
		
		$('#nueva_pregunta').css("border-bottom", "1px solid white");
	}


	if( $('#nueva_respuesta').val() == ''){

		$('#nueva_respuesta').css("border-bottom", "1px solid #F44336");
		error++;

	}else{
		
		$('#nueva_respuesta').css("border-bottom", "1px solid white");
	}


	setTimeout(function(){            
		
		if (error==0) {

			var id_web	 			= $("#id_web").val();
		  	var id_cliente	 		= $("#id_cliente").val();
		  	var dominio	 			= $("#dominio").val();

		  	var nueva_pregunta 		= $("#nueva_pregunta").val();
		  	var nueva_respuesta	 	= $("#nueva_respuesta").val();

			
			console.log(id_web);
			console.log(id_cliente);
			console.log(dominio);
			console.log(nueva_pregunta);
			console.log(nueva_respuesta);
			
			// Activo fonto transparente y mouse reload					--> funcion en index.js
 		 	$.when(start_reloader()).done(function () {
			
			$.when(actualizar_pregunta_frecuente(id_web,id_cliente,dominio,nueva_pregunta,nueva_respuesta)).done(function () {   

			});

			});

		}

	},10);

}




function actualizar_pregunta_frecuente(id_w,id_c,dominio,nueva_pregunta,nueva_respuesta){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/preg_frecuentes/add/preg_frecu_add.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              dominio:dominio,
              nueva_pregunta:nueva_pregunta,
              nueva_respuesta:nueva_respuesta
            }
  })   

  .done(function(response){

 	console.log(response);

    //Materialize.toast('Nueva pregunta agregada', 3000, 'rounded');
    //window.location.reload();   
    window.location.href = 'preguntas_frecuentes.php?id_web='+id_w+'&id_cliente='+id_c;

    deferred.resolve();
        
  });


}

