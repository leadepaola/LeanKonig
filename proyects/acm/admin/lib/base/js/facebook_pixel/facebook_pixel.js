





/*
  ##    ####  ##### # #    #   ##   #####  
 #  #  #    #   #   # #    #  #  #  #    # 
#    # #        #   # #    # #    # #    # 
###### #        #   # #    # ###### #####  
#    # #    #   #   #  #  #  #    # #   #  
#    #  ####    #   #   ##   #    # #    # 


######   ##    ####  ###### #####   ####   ####  #    # 
#       #  #  #    # #      #    # #    # #    # #   #  
#####  #    # #      #####  #####  #    # #    # ####   
#      ###### #      #      #    # #    # #    # #  #   
#      #    # #    # #      #    # #    # #    # #   #  
#      #    #  ####  ###### #####   ####   ####  #    #

 
#####  # #    # ###### #      
#    # #  #  #  #      #      
#    # #   ##   #####  #      
#####  #   ##   #      #      
#      #  #  #  #      #      
#      # #    # ###### ###### 
*/



// FUNCION 
// Detecta cuando se activa o desactiva checkbox 
// para activar o desactivar mapa

$('#checkbox_tit_active').click(function(){
	
	var id_web  		= $("#id_web").val();
	var id_cliente  	= $("#id_cliente").val();


	if ($('#checkbox_tit_active').is(':checked')) {
	  	
		$.when(facebook_pixel_activar(id_web,id_cliente)).done(function () {   

		});

	}else{

		$.when(facebook_pixel_desactivar(id_web,id_cliente)).done(function () {   

		});
	}
	
});







function facebook_pixel_activar(id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/facebook_pixel/facebook_pixel_activar.php",
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


function facebook_pixel_desactivar(id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/facebook_pixel/facebook_pixel_desactivar.php",
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

 ####   ####  #####  # #####  ##### 
#      #    # #    # # #    #   #   
 ####  #      #    # # #    #   #   
     # #      #####  # #####    #   
#    # #    # #   #  # #        #   
 ####   ####  #    # # #        # 
*/



/*Click en btn*/
$('#facebook_pixel_cont_btn_1').click(function(){
    verificar_campos_vacios_script();
});



function verificar_campos_vacios_script(){

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

	    $.when(enviar_data_script(id_web,id_cliente,new_iframe)).done(function () {   

      // Desctivo fonto transparente y mouse reload         --> funcion en index.js
      toast = 'Script actualizado';
        $.when(finish_reloader_with_toast(toast)).done(function () {

        
      });  

      });
		  
      });

    }

}




function enviar_data_script(id_w,id_c,new_iframe){

 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/facebook_pixel/facebook_pixel_new_script.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              new_iframe:new_iframe
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

#    # ###### #####   ##   
##  ## #        #    #  #  
# ## # #####    #   #    # 
#    # #        #   ###### 
#    # #        #   #    # 
#    # ######   #   #    # 
*/



/*Click en btn*/
$('#facebook_pixel_cont_btn_2').click(function(){
    verificar_campos_vacios_meta_dom();
});



function verificar_campos_vacios_meta_dom(){

  // Comprobando  textarea 
  // Si está vacio...

    if( $('#face_pixel_text_area_meta_dom').val() == ''){

        $('#face_pixel_text_area_meta_dom').css("border", "1px solid #F44336");
    } 

    else{

      var id_web      = $("#id_web").val();
      var id_cliente    = $("#id_cliente").val();
      var new_iframe      = $('#face_pixel_text_area_meta_dom').val();

      $('#face_pixel_text_area_meta_dom').css("border", "1px solid #cccccc");

      // Activo fonto transparente y mouse reload         --> funcion en index.js
      $.when(start_reloader()).done(function () {

      $.when(enviar_data_meta_dom(id_web,id_cliente,new_iframe)).done(function () {   

      // Desctivo fonto transparente y mouse reload         --> funcion en index.js
      toast = 'Meta actualizada';
        $.when(finish_reloader_with_toast(toast)).done(function () {

        
      });  

      });
      
      });

    }

}




function enviar_data_meta_dom(id_w,id_c,new_iframe){

 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/facebook_pixel/facebook_pixel_new_meta_dom.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              new_iframe:new_iframe
            }
  })   

  .done(function(response){

  console.log(response);

    //window.location.reload();

  deferred.resolve();
      
  });

}




























