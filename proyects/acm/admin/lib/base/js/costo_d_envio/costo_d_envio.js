



/*
 ####   ####   ####  #####  ####        ###### #    # #    # #  ####  
#    # #    # #        #   #    #       #      ##   # #    # # #    # 
#      #    #  ####    #   #    #       #####  # #  # #    # # #    # 
#      #    #      #   #   #    #       #      #  # # #    # # #    # 
#    # #    # #    #   #   #    #       #      #   ##  #  #  # #    # 
 ####   ####   ####    #    ####        ###### #    #   ##   #  ####

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
	
	var id_web    	 			= ($(this).find("#id_web").val());
  	var id_cliente   			= ($(this).find("#id_cliente").val());
	var id_costo_d_envio  		= ($(this).find("#id_costo_d_envio").val());
	var nombre_zona			 	= ($(this).find("#nombre_zona").val());


  	/*
	console.log(id_web);
	console.log(id_cliente);
	console.log(id_costo_d_envio);
	*/
	//console.log(nombre_zona);

	if ($(this).find("#switch_checkbox").is(':checked')) {
		
		//console.log("activo");

		$.when(costo_envio_activar(id_web,id_cliente,id_costo_d_envio)).done(function () {   

		});

	}else{
		
		//console.log("NO activo");

		$.when(costo_envio_desactivar(id_web,id_cliente,id_costo_d_envio)).done(function () {   

		});	
	}
	


});




function costo_envio_activar(id_w,id_c,id_costo_d_envio){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/costo_d_envio/costo_envio_activar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_costo_d_envio:id_costo_d_envio
            }
  })   

  .done(function(response){

	console.log(response);

	//Materialize.toast('Cateo'+switch_value+' activado', 3000, 'rounded')
  	//window.location.reload();

 	deferred.resolve();
	    
  });
}

function costo_envio_desactivar(id_w,id_c,id_costo_d_envio){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/costo_d_envio/costo_envio_desactivar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_costo_d_envio:id_costo_d_envio
            }
  })   

  .done(function(response){

	console.log(response);

	//Materialize.toast('Cateo'+switch_value+' desactivado', 3000, 'rounded')
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

 ####   ####   ####  #####  ####        ###### #    # #    # #  ####  
#    # #    # #        #   #    #       #      ##   # #    # # #    # 
#      #    #  ####    #   #    #       #####  # #  # #    # # #    # 
#      #    #      #   #   #    #       #      #  # # #    # # #    # 
#    # #    # #    #   #   #    #       #      #   ##  #  #  # #    # 
 ####   ####   ####    #    ####        ###### #    #   ##   #  ####

*/


/*Click en btn*/
$('.index_cont_lista').click(function(){


  	var id_web 				= ($(this).parent().find("#id_web").val());
	var id_cliente 			= ($(this).parent().find("#id_cliente").val());
  	var id_costo_d_envio 	= ($(this).parent().find("#id_costo_d_envio").val());
  	var nombre_zona			= ($(this).parent().find(".input_nombre_zona").val());
  	var data_precio			= ($(this).parent().find(".input_precio").val());

	/*
	console.log(id_web);
	console.log(id_cliente);
	console.log(id_costo_d_envio);
	console.log(nombre_zona);
	console.log(data_precio);
	*/
	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	$.when(enviar_data(id_web,id_cliente,id_costo_d_envio,nombre_zona,data_precio)).done(function () {   

	// Desctivo fonto transparente y mouse reload					--> funcion en index.js
	toast = nombre_zona+' actualizado';
  	$.when(finish_reloader_with_toast(toast)).done(function () {

		
	});

	});
	});

});






function enviar_data(id_w,id_c,id_costo_d_envio,nombre_zona,data_precio){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/costo_d_envio/costo_envio_actualizar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_costo_d_envio:id_costo_d_envio,
              nombre_zona:nombre_zona,
              data_precio:data_precio  
            }
  })   

  .done(function(response){

 	console.log(response);

    //Materialize.toast(nombre_zona+' actualizado', 3000, 'rounded');
    //window.location.reload();

    deferred.resolve();
        
  });


}




















/*
  ##   #####  #####  
 #  #  #    # #    # 
#    # #    # #    # 
###### #    # #    # 
#    # #    # #    # 
#    # #####  ##### 

 ####   ####   ####  #####  ####        ###### #    # #    # #  ####  
#    # #    # #        #   #    #       #      ##   # #    # # #    # 
#      #    #  ####    #   #    #       #####  # #  # #    # # #    # 
#      #    #      #   #   #    #       #      #  # # #    # # #    # 
#    # #    # #    #   #   #    #       #      #   ##  #  #  # #    # 
 ####   ####   ####    #    ####        ###### #    #   ##   #  ####

*/

$('#nueva_zona').keypress(function(e){
  if(e.which == 13) {
    verificar_inpot_add();
  }
});

$('#nueva_zona_precio').keypress(function(e){
  if(e.which == 13) {
    verificar_inpot_add();
  }
});


/*Click en btn*/
$('.index_btn_add').click(function(){
	
	verificar_inpot_add();

});



function verificar_inpot_add(){

	// Comprobando  input 
	// Si está vacio...

	var error=0;

	if( $('#nueva_zona').val() == ''){

		$('#nueva_zona').css("border-bottom", "1px solid #F44336");
		error++;
	}else{
		
		$('#nueva_zona').css("border-bottom", "1px solid whitesmoke");
	}


	if( $('#nueva_zona_precio').val() == ''){

		$('#nueva_zona_precio').css("border-bottom", "1px solid #F44336");
		error++;

	}else{
		
		$('#nueva_zona_precio').css("border-bottom", "1px solid whitesmoke");
	}


	setTimeout(function(){            
		
		if (error==0) {

			var id_web      		= $("#id_web").val();
		    var id_cliente  		= $("#id_cliente").val();
		    var dominio     		= $('#dominio').val();
		    var nueva_zona      	= $('#nueva_zona').val();
		    var nueva_zona_precio   = $('#nueva_zona_precio').val();

		 	console.log(id_web);
			console.log(id_cliente);
			console.log(dominio);
			console.log(nueva_zona);
			console.log(nueva_zona_precio);

			// Activo fonto transparente y mouse reload					--> funcion en index.js
  			$.when(start_reloader()).done(function () {

			$.when(enviar_nueva_categoria(id_web,id_cliente,dominio,nueva_zona,nueva_zona_precio)).done(function () {   

			});
			
			});
		}
		

	},10);


}





function enviar_nueva_categoria(id_w,id_c,dominio,nueva_zona,nueva_zona_precio){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/costo_d_envio/costo_envio_add.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              dominio:dominio,
              nueva_zona:nueva_zona,
              nueva_zona_precio:nueva_zona_precio
            }
  })   

  .done(function(response){

 	console.log(response);

    //Materialize.toast('Categoría '+dato+' actualizada', 3000, 'rounded');
    window.location.reload();

    deferred.resolve();
        
  });


}
