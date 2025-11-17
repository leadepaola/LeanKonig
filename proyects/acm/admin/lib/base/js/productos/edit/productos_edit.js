








/*
#####  #####   ####  #####  #    #  ####  #####  ####   ####  
#    # #    # #    # #    # #    # #    #   #   #    # #      
#    # #    # #    # #    # #    # #        #   #    #  ####  
#####  #####  #    # #    # #    # #        #   #    #      # 
#      #   #  #    # #    # #    # #    #   #   #    # #    # 
#      #    #  ####  #####   ####   ####    #    ####   #### 

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
	var id_producto  		= ($(this).find("#id_producto").val());

  	/*
	console.log(id_web);
	console.log(id_cliente);
	console.log(id_producto);
	*/

	if ($(this).find("#switch_checkbox").is(':checked')) {
		
		//console.log("activo");

		$.when(productos_activar(id_web,id_cliente,id_producto)).done(function () {   

		});

	}else{
		
		//console.log("NO activo");

		$.when(productos_desactivar(id_web,id_cliente,id_producto)).done(function () {   

		});	

	}
	


});




function productos_activar(id_w,id_c,id_producto){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/productos/edit/productos_activar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_producto:id_producto
            }
  })   

  .done(function(response){

	console.log(response);

	//Materialize.toast('Cateo'+switch_value+' activado', 3000, 'rounded')
  	//window.location.reload();

 	deferred.resolve();
	    
  });
}

function productos_desactivar(id_w,id_c,id_producto){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/productos/edit/productos_desactivar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_producto:id_producto
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


#####  #####  ######  ####  #  ####  
#    # #    # #      #    # # #    # 
#    # #    # #####  #      # #    # 
#####  #####  #      #      # #    # 
#      #   #  #      #    # # #    # 
#      #    # ######  ####  #  ####  


#####  #####   ####  #####  #    #  ####  #####  ####   ####  
#    # #    # #    # #    # #    # #    #   #   #    # #      
#    # #    # #    # #    # #    # #        #   #    #  ####  
#####  #####  #    # #    # #    # #        #   #    #      # 
#      #   #  #    # #    # #    # #    #   #   #    # #    # 
#      #    #  ####  #####   ####   ####    #    ####   #### 

*/
$('.index_input_editlea').keypress(function(e){

	if(e.which == 13) {
	  	
	  	var id_web 			= ($(this).parent().find("#id_web").val());
		var id_cliente 		= ($(this).parent().find("#id_cliente").val());
	  	var id_producto 	= ($(this).parent().find("#id_producto").val());
	  	var precio 			= ($(this).parent().find(".input_precio").val());

	  	/*
	  	console.log(id_web);
		console.log(id_cliente);
		console.log(id_producto);
		console.log(precio);
		*/

		// Activo fonto transparente y mouse reload					--> funcion en index.js
  		$.when(start_reloader()).done(function () {

		$.when(precio_actualizar(id_web,id_cliente,id_producto,precio)).done(function () {   

		// Desctivo fonto transparente y mouse reload					--> funcion en index.js
		toast = 'Precio actualizado a $'+precio;
	  	$.when(finish_reloader_with_toast(toast)).done(function () {

			
		});

		});

		});

	}

});

/*Click en btn*/
$('.btn_actualizar_precio').click(function(){


  	var id_web 			= ($(this).parent().find("#id_web").val());
	var id_cliente 		= ($(this).parent().find("#id_cliente").val());
  	var id_producto 	= ($(this).parent().find("#id_producto").val());
  	var precio 			= ($(this).parent().find(".input_precio").val());

	/*
	console.log(id_web);
	console.log(id_cliente);
	console.log(id_producto);
	console.log(precio);
	*/

	// Activo fonto transparente y mouse reload					--> funcion en index.js
	$.when(start_reloader()).done(function () {

	$.when(precio_actualizar(id_web,id_cliente,id_producto,precio)).done(function () {   

	// Desctivo fonto transparente y mouse reload					--> funcion en index.js
	toast = 'Precio actualizado a $'+precio;
  	$.when(finish_reloader_with_toast(toast)).done(function () {

		
	});

	});

	});

});





function precio_actualizar(id_w,id_c,id_producto,precio){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/productos/edit/productos_actualizar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_producto:id_producto,
              precio:precio
            }
  })   

  .done(function(response){

 	console.log(response);

    //Materialize.toast('Precio actualizado a $'+precio, 3000, 'rounded');
    //window.location.reload();

    deferred.resolve();
        
  });


}
















/*

###### # #      ##### #####    ##   #####  
#      # #        #   #    #  #  #  #    # 
#####  # #        #   #    # #    # #    # 
#      # #        #   #####  ###### #####  
#      # #        #   #   #  #    # #   #  
#      # ######   #   #    # #    # #    # 

#####  #####   ####  #####  #    #  ####  #####  ####   ####  
#    # #    # #    # #    # #    # #    #   #   #    # #      
#    # #    # #    # #    # #    # #        #   #    #  ####  
#####  #####  #    # #    # #    # #        #   #    #      # 
#      #   #  #    # #    # #    # #    #   #   #    # #    # 
#      #    #  ####  #####   ####   ####    #    ####   #### 

*/



// FUNCION 
// Filtra y muestra segun categoria seleccionada

$('.select_filtro_prods_cont').change(function(){
	
	start_reloader();

	var id_web 			= ($(this).find("#id_web").val());
	var id_cliente 		= ($(this).find("#id_cliente").val());
	
	var id_categ		= $(".select_filtro_prods").val();


    window.location.href = 'productos_edit.php?id_web='+id_web+'&id_cliente='+id_cliente+'&id_categ='+id_categ;

});





































