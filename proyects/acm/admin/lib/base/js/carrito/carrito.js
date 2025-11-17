


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
// para activar o desactivar logo(carrito)
// Dice logo porque el js es copiado literal de logo.js
// Le hice algunas modificiones como x ej cambiar los nombres de las 
// funciones de "logo_activar" a "carrito_acivar"

$('#checkbox_logo_active').click(function(){
	
	var id_web  		= $("#id_web").val();
	var id_cliente  	= $("#id_cliente").val();

	if ($('#checkbox_logo_active').is(':checked')) {
	  	
		$.when(carrito_activar(id_web,id_cliente)).done(function () {   

		});

	}else{

		$.when(carrito_desactivar(id_web,id_cliente)).done(function () {   

		});
	}
});







function carrito_activar(id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/carrito/carrito_activar.php",
    "data": {
              id_web:id_w,id_cliente:id_c
            }
  })   

  .done(function(response){

	console.log(response);

  	//window.location.reload();
  	$('#carrito_txt_estado').html('Activado');

 	deferred.resolve();
	    
  });

}


function carrito_desactivar(id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/carrito/carrito_desactivar.php",
    "data": {
              id_web:id_w,id_cliente:id_c
            }
  })   

  .done(function(response){

	console.log(response);

  	//window.location.reload();
  	$('#carrito_txt_estado').html('Desactivado');

 	deferred.resolve();
	    
  });

}
















































