

//RECORDATORIO
// Copie literal el archivo de fechas.js 
// debo personalizarlo para metodos de pago



/*
###### ######  ####  #    #   ##   
#      #      #    # #    #  #  #  
#####  #####  #      ###### #    # 
#      #      #      #    # ###### 
#      #      #    # #    # #    # 
#      ######  ####  #    # #    #

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
	
	var id_web    	 	= ($(this).find("#id_web").val());
  var id_cliente   	= ($(this).find("#id_cliente").val());
	var id_fecha  		= ($(this).find("#id_fecha").val());

  	
	//console.log(id_web);
	//console.log(id_cliente);
	//console.log(switch_value);
	//console.log(id_fecha);
	

	if ($(this).find("#switch_checkbox").is(':checked')) {
		
		//console.log("activo");

		$.when(fecha_activar(id_web,id_cliente,id_fecha)).done(function () {   

		});

	}else{
		
		//console.log("NO activo");

		$.when(fecha_desactivar(id_web,id_cliente,id_fecha)).done(function () {   

		});	
	}
	


});




function fecha_activar(id_w,id_c,id_fecha){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/fecha_d_entrega/fecha_d_entrega_activar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_fecha:id_fecha
            }
  })   

  .done(function(response){

	console.log(response);

	//Materialize.toast('Cateo'+switch_value+' activado', 3000, 'rounded')
  	//window.location.reload();

 	deferred.resolve();
	    
  });
}

function fecha_desactivar(id_w,id_c,id_fecha){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/fecha_d_entrega/fecha_d_entrega_desactivar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_fecha:id_fecha
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

###### ######  ####  #    #   ##   
#      #      #    # #    #  #  #  
#####  #####  #      ###### #    # 
#      #      #      #    # ###### 
#      #      #    # #    # #    # 
#      ######  ####  #    # #    #

*/


/*Click en btn*/
$('.index_cont_lista').click(function(){


  	var id_web 			 = ($(this).parent().find("#id_web").val());
	  var id_cliente 	 = ($(this).parent().find("#id_cliente").val());
  	var id_fecha 	   = ($(this).parent().find("#id_fecha").val());
  	var dato			   = ($(this).parent().find(".index_input_editlea").val());

	/*
	console.log(id_web);
	console.log(id_cliente);
	console.log(id_fecha);
	console.log(dato);
	*/

  // Activo fonto transparente y mouse reload         --> funcion en index.js
  $.when(start_reloader()).done(function () {

	$.when(enviar_data(id_web,id_cliente,id_fecha,dato)).done(function () {   

  // Desctivo fonto transparente y mouse reload         --> funcion en index.js
  toast = 'Fecha '+dato+' actualizada';
  $.when(finish_reloader_with_toast(toast)).done(function () {

    
  });

  });
	
  });

});






function enviar_data(id_w,id_c,id_fecha,dato){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/fecha_d_entrega/fecha_d_entrega_actualizar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              id_fecha:id_fecha,
              dato:dato
            }
  })   

  .done(function(response){

 	console.log(response);

    //Materialize.toast('Categoría '+dato+' actualizada', 3000, 'rounded');
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

###### ######  ####  #    #   ##   
#      #      #    # #    #  #  #  
#####  #####  #      ###### #    # 
#      #      #      #    # ###### 
#      #      #    # #    # #    # 
#      ######  ####  #    # #    #

*/

$('#nueva_fecha').keypress(function(e){
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

	if( $('#nueva_fecha').val() == ''){

		$('#nueva_fecha').css("border-bottom", "1px solid #F44336");

	} 
	else{

		var id_web      = $("#id_web").val();
	  var id_cliente  = $("#id_cliente").val();
	  var dominio     = $('#dominio').val();
	  var dato      	= $('#nueva_fecha').val();

	 	console.log(id_web);
		console.log(id_cliente);
		console.log(dominio);
		console.log(dato);

		
		$('#nueva_fecha').css("border-bottom", "1px solid whitesmoke");

    // Activo fonto transparente y mouse reload         --> funcion en index.js
    $.when(start_reloader()).done(function () {

		$.when(enviar_nueva_fecha(id_web,id_cliente,dominio,dato)).done(function () {   

    });
		
    });


	}
}





function enviar_nueva_fecha(id_w,id_c,dominio,dato){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/fecha_d_entrega/fecha_d_entrega_add.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              dominio:dominio,
              dato:dato
            }
  })   

  .done(function(response){

 	console.log(response);

    //Materialize.toast('Categoría '+dato+' actualizada', 3000, 'rounded');
    window.location.reload();

    deferred.resolve();
        
  });


}









