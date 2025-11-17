





/*
  ##    ####  ##### # #    #   ##   #####  
 #  #  #    #   #   # #    #  #  #  #    # 
#    # #        #   # #    # #    # #    # 
###### #        #   # #    # ###### #####  
#    # #    #   #   #  #  #  #    # #   #  
#    #  ####    #   #   ##   #    # #    # 

#    #   ##   #####    ##   
##  ##  #  #  #    #  #  #  
# ## # #    # #    # #    # 
#    # ###### #####  ###### 
#    # #    # #      #    # 
#    # #    # #      #    #
*/



// FUNCION 
// Detecta cuando se activa o desactiva checkbox 
// para activar o desactivar mapa

$('#checkbox_tit_active').click(function(){
	
	var id_web  		= $("#id_web").val();
	var id_cliente  	= $("#id_cliente").val();


	if ($('#checkbox_tit_active').is(':checked')) {
	  	
		$.when(mapa_activar(id_web,id_cliente)).done(function () {   

		});

	}else{

		$.when(mapa_desactivar(id_web,id_cliente)).done(function () {   

		});
	}
	
});







function mapa_activar(id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/mapa/mapa_activar.php",
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


function mapa_desactivar(id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/mapa/mapa_desactivar.php",
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

# ###### #####    ##   #    # ###### 
# #      #    #  #  #  ##  ## #      
# #####  #    # #    # # ## # #####  
# #      #####  ###### #    # #      
# #      #   #  #    # #    # #      
# #      #    # #    # #    # ###### 
*/



/*Click en btn*/
$('.mapa_btn_accion_cont').click(function(){
    verificar_campos_vacios();
});



function verificar_campos_vacios(){

	// Comprobando  textarea 
	// Si está vacio...

    if( $('#mapa_textarea_tit').val() == ''){

      	$('#mapa_textarea_tit').css("border", "1px solid #F44336");
    } 

    else{

	   	var id_web  		= $("#id_web").val();
		var id_cliente  	= $("#id_cliente").val();
   	 	var new_iframe     	= $('#mapa_textarea_tit').val();

	    $('#mapa_textarea_tit').css("border", "1px solid #cccccc");

      // Activo fonto transparente y mouse reload         --> funcion en index.js
      $.when(start_reloader()).done(function () {

	    $.when(enviar_data(id_web,id_cliente,new_iframe)).done(function () {   

      });
		  
      });

    }

}




function enviar_data(id_w,id_c,new_iframe){

 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/mapa/mapa_new_iframe.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              new_iframe:new_iframe
            }
  })   

  .done(function(response){

	console.log(response);

  	window.location.reload();

 	deferred.resolve();
	    
  });

}






























