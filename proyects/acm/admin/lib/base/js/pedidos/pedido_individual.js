




$(document).ready(function(){

	// FUNCION
	// Mejora la visualizacion del id del peidod y nombre de usuario 
	vista_d_id_y_name_d_usuario();
});
















/*
#####    ##   #####  ####   ####     #    #  ####  ###### #####  
#    #  #  #    #   #    # #         #    # #      #      #    # 
#    # #    #   #   #    #  ####     #    #  ####  #####  #    # 
#    # ######   #   #    #      #    #    #      # #      #####  
#    # #    #   #   #    # #    #    #    # #    # #      #   #  
#####  #    #   #    ####   ####      ####   ####  ###### #    # 

#####  ######  ####  #####  #      ######  ####    ##   #####  #      ###### 
#    # #      #      #    # #      #      #    #  #  #  #    # #      #      
#    # #####   ####  #    # #      #####  #      #    # #####  #      #####  
#    # #           # #####  #      #      #  ### ###### #    # #      #      
#    # #      #    # #      #      #      #    # #    # #    # #      #      
#####  ######  ####  #      ###### ######  ####  #    # #####  ###### ###### 
*/



// FUNCION
// Si hago click se despliega hacia abajo el menu
var select_open = 0;
$('#view_ind_list_icon').click(function(){

	// Si es mayor a 600
	if ($(window).width()>=600) {

		if (select_open==0) {
			select_open=1;
			$(".select_desplazable").css("height", "105px");
			$("#view_ind_list_icon").css("transform", "rotate(180deg)");
		}
		else{
			select_open=0;
			$(".select_desplazable").css("height", "35px");
			$("#view_ind_list_icon").css("transform", "rotate(0deg)");
		}

	}
	// Si es menor a 600
	else{

		if (select_open==0) {
			select_open=1;
			$(".select_desplazable").css("height", "365px");
			$("#view_ind_list_icon").css("transform", "rotate(180deg)");
		}
		else{
			select_open=0;
			$(".select_desplazable").css("height", "45px");
			$("#view_ind_list_icon").css("transform", "rotate(0deg)");
		}

	}

});


//Cuando se redimensiona la pantalla hacer...
$(window).resize(function(){

	// FUNCION 
	// Ajusta las dimensiones en css de la seccion "datos del usuario" 

	// Si es mayor a 600
	if ($(window).width()>=600) {
		switch(select_open){

		    case 0: 
		    	$(".select_desplazable").css("height", "35px");
				$("#view_ind_list_icon").css("transform", "rotate(0deg)");
		    break;

		    case 1: 
		      	$(".select_desplazable").css("height", "105px");
				$("#view_ind_list_icon").css("transform", "rotate(180deg)");
		    break;
		}
		}
		//Si es menor a 600
		else{
			switch(select_open){

		    case 0: 
		    	$(".select_desplazable").css("height", "45px");
				$("#view_ind_list_icon").css("transform", "rotate(0deg)");
		    break;

		    case 1: 
		      	$(".select_desplazable").css("height", "365px");
				$("#view_ind_list_icon").css("transform", "rotate(180deg)");
		    break;
		}
	}

	// FUNCION
	// Mejora la visualizacion del id del pedido y nombre de usuario 
	vista_d_id_y_name_d_usuario();

});














/*
##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### 
*/






// FUNCION
// Mejora la visualizacion del id del peidod y nombre de usuario 
// (Usuario: Quien realizó el pedido)

function vista_d_id_y_name_d_usuario(){
	
	// Si es mayor a 600
	if ($(window).width()>600) {
		$(".view_ind_list_id_name_pc").css("display", 	"flex");
		$(".view_ind_list_id_name_mob").css("display", 	"none");
	}
	else{
		$(".view_ind_list_id_name_pc").css("display", 	"none");
		$(".view_ind_list_id_name_mob").css("display", 	"flex");	
	}
}








/*
##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### 
*/







// FUNCION 
// Detecta cuando modifico el estado del pedido individual desde el select 
// Y realiza la modificacion en la base de datos

$('.ped_indi_estado_select').change(function(){

	var estado 		= ($(this).find("#id_estado").val());
	var id_pedido 	= ($(this).find("#id_p").val());
	var id_web 		= ($(this).find("#id_web").val());
	var id_cliente 	= ($(this).find("#id_cliente").val());


	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	$.when(actualizar_estado_pedido_dsd_indi(estado,id_pedido,id_web,id_cliente)).done(function () {   

	});

	});
	
});



function actualizar_estado_pedido_dsd_indi(e,id_p,id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/pedidos/pedidos_general/update_estado_pedido.php",
    "data": {
              estado:e,id_pedido:id_p,
              id_web:id_w,id_cliente:id_c
            }
  })   

  .done(function(response){

	console.log(response);

  	window.location.reload();

 	deferred.resolve();
	    
  });

}











/*
##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### 
*/







// FUNCION 
// Detecta cuando modifico el input radio del producto en pedido
// Y realiza la modificacion en la base de datos

$('.view_indi_stock_prod_cont .view_indi_radio_cancel').change(function(){

	var id_pedido 	= ($(this).find("#id_pedido").val());
	var id_producto = ($(this).find("#id_producto").val());
	var id_web 		= ($(this).find("#id_web").val());
	var id_cliente 	= ($(this).find("#id_cliente").val());
	var anot_stock 	= 3;

	//console.log("cancel : "+id_pedido+", "+id_producto+", "+anot_stock+", "+id_web+", "+id_cliente );

	$.when(actualizar_anot_stock(id_pedido,id_producto,id_web,id_cliente,anot_stock)).done(function () {   

	});

});

$('.view_indi_stock_prod_cont .view_indi_radio_incomplet').change(function(){

	var id_pedido 	= ($(this).find("#id_pedido").val());
	var id_producto = ($(this).find("#id_producto").val());
	var id_web 		= ($(this).find("#id_web").val());
	var id_cliente 	= ($(this).find("#id_cliente").val());
	var anot_stock 	= 2;

	//console.log("cancel : "+id_pedido+", "+id_producto+", "+anot_stock+", "+id_web+", "+id_cliente );

	$.when(actualizar_anot_stock(id_pedido,id_producto,id_web,id_cliente,anot_stock)).done(function () {   

	});

});

$('.view_indi_stock_prod_cont .view_indi_radio_completo').change(function(){

	var id_pedido 	= ($(this).find("#id_pedido").val());
	var id_producto = ($(this).find("#id_producto").val());
	var id_web 		= ($(this).find("#id_web").val());
	var id_cliente 	= ($(this).find("#id_cliente").val());
	var anot_stock 	= 1;

	//console.log("cancel : "+id_pedido+", "+id_producto+", "+anot_stock+", "+id_web+", "+id_cliente );

	$.when(actualizar_anot_stock(id_pedido,id_producto,id_web,id_cliente,anot_stock)).done(function () {   

	});

});



function actualizar_anot_stock(id_ped,id_prod,id_web,id_cli,anot_stock){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/pedidos/pedido_individual/update_anot_stock.php",
    "data": {
    		  anot_stock:anot_stock,
              id_producto:id_prod,id_pedido:id_ped,
              id_web:id_web,id_cliente:id_cli
            }
  })   

  .done(function(response){

	console.log(response);

  	//window.location.reload();

 	deferred.resolve();
	    
  });

}




/*
##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### 
*/






// FUNCION 
// Al hacer click en boton de accion "pedido preparado"
// Cambia el estado a "preparado"


$('.view_indi_btn_pedido_preparado').click(function(){

	var estado 		= 'preparado';
	var id_pedido 	= ($(this).find("#id_pedido").val());
	var id_web 		= ($(this).find("#id_web").val());
	var id_cliente 	= ($(this).find("#id_cliente").val());

	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	$.when(actualizar_estado_pedido_dsd_indi(estado,id_pedido,id_web,id_cliente)).done(function () {   

	});
	
	});

	/*
	console.log("preparado");
	console.log(id_pedido);
	console.log(id_web);
	console.log(id_cliente);
	*/
	
});













