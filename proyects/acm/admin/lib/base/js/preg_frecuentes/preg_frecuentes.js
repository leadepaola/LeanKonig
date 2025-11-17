

/*
#####  #####  ######  ####     ###### #####  ######  ####  #    # 
#    # #    # #      #    #    #      #    # #      #    # #    # 
#    # #    # #####  #         #####  #    # #####  #      #    # 
#####  #####  #      #  ###    #      #####  #      #      #    # 
#      #   #  #      #    #    #      #   #  #      #    # #    # 
#      #    # ######  ####     #      #    # ######  ####   ####

  ##    ####  ##### # #    # ######  ####  
 #  #  #    #   #   # #    # #      #      
#    # #        #   # #    # #####   ####  
###### #        #   # #    # #           # 
#    # #    #   #   #  #  #  #      #    # 
#    #  ####    #   #   ##   ######  ####  
*/


// FUNCION 
// Detecta cuando se activa o desactiva checkbox 
// para activar o desactivar Banner 1,2 o 3

$('.label_checkbox').change(function(){

	//console.log("banner");
	
	var id_web    	 		= ($(this).find("#id_web").val());
  	var id_cliente   		= ($(this).find("#id_cliente").val());
	var id_preg_frecu  		= ($(this).find("#id_preg_frecu").val());

  	
	//console.log(id_web);
	//console.log(id_cliente);
	//console.log(switch_value);
	//console.log(id_preg_frecu);
	

	if ($(this).find("#switch_checkbox").is(':checked')) {
		
		//console.log("activo");

		$.when(preg_frecu_activar(id_web,id_cliente,id_preg_frecu)).done(function () {   

		});

	}else{
		
		//console.log("NO activo");

		$.when(preg_frecu_desactivar(id_web,id_cliente,id_preg_frecu)).done(function () {   

		});	
	}
	


});




function preg_frecu_activar(id_w,id_c,id_preg_frecu){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/preg_frecuentes/general/preg_frecu_activar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_preg_frecu:id_preg_frecu
            }
  })   

  .done(function(response){

	console.log(response);

	//Materialize.toast('Cateo'+switch_value+' activado', 3000, 'rounded')
  	//window.location.reload();

 	deferred.resolve();
	    
  });
}

function preg_frecu_desactivar(id_w,id_c,id_preg_frecu){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/preg_frecuentes/general/preg_frecu_desactivar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_preg_frecu:id_preg_frecu
            }
  })   

  .done(function(response){

	console.log(response);

	//Materialize.toast('Cateo'+switch_value+' desactivado', 3000, 'rounded')
  	//window.location.reload();

 	deferred.resolve();
	    
  });
}

