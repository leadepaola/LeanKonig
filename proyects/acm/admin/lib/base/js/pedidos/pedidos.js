







/*
#####  ###### #####  # #####   ####   ####  
#    # #      #    # # #    # #    # #      
#    # #####  #    # # #    # #    #  ####  
#####  #      #    # # #    # #    #      # 
#      #      #    # # #    # #    # #    # 
#      ###### #####  # #####   ####   ####  

 ####  ###### #    # ###### #####    ##   #      
#    # #      ##   # #      #    #  #  #  #      
#      #####  # #  # #####  #    # #    # #      
#  ### #      #  # # #      #####  ###### #      
#    # #      #   ## #      #   #  #    # #      
 ####  ###### #    # ###### #    # #    # ######
*/



// FUNCION 
// Detecta cuando modifico el estado del peiddo individual desde el select 
// Y realiza la modificacion en la base de datos

$('.estado_select_cont').change(function(){

	var estado 		= ($(this).find("#id_estado").val());
	var id_pedido 	= ($(this).find("#id_p").val());
	var id_web 		= ($(this).find("#id_web").val());
	var id_cliente 	= ($(this).find("#id_cliente").val());

	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	$.when(actualizar_estado_pedido_dsd_gral(estado,id_pedido,id_web,id_cliente)).done(function () {   

	});

	});

});



function actualizar_estado_pedido_dsd_gral(e,id_p,id_w,id_c){
 
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






var coment_cliente 	= '';
var direccion 		= '';
var altura 			= '';
var id_pedido 		= '';
var id_web 			= '';
var id_cliente 		= '';



// FUNCION
// Si hago click en comentario, se muestra

$('.lista_p_coment').click(function(){

	$('.youtube_fondo_cc_transparencia').css('display',  'flex');
	$('.ped_gral_coment').css('display',  'block');

	// Border de text area comentario en gris
	$('.ped_gral_coment_textarea').css("border", "1px solid #ececec");


	coment_cliente 	= ($(this).find("#ped_coment").val());
	direccion 		= ($(this).find("#ped_direc").val());
	altura 			= ($(this).find("#ped_altura").val());
	id_pedido 		= ($(this).find("#id_p").val());
	id_web 			= ($(this).find("#id_web").val());
	id_cliente 		= ($(this).find("#id_cliente").val());

	$('#ped_gral_coment_descr_1').html('Comentario de Pedido - ID '+id_pedido);
	$('#ped_gral_coment_descr_2').html(direccion+', '+altura);
	$('.ped_gral_coment_textarea').html(coment_cliente);

});



$('.youtube_fondo_cc_transparencia').click(function(){

	$('.youtube_fondo_cc_transparencia').css('display',  'none');
	$('.ped_gral_coment').css('display',  'none');

});







/*
##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### ##### 
*/






// FUNCION 
// Si hago hablo click en boton "guardar" de comentario
// Guarda el nuevo comentario del cliente sobre el pedido individual

$('.ped_gral_btn_coment_accion').click(function(){

	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	$('.youtube_fondo_cc_transparencia').css('display',  'none');
	$('.ped_gral_coment').css('display',  'none');
  

  	$.when(update_comentario_cliente_d_pedido()).done(function () {
    
	});


	});

});


function update_comentario_cliente_d_pedido(){

	coment_cliente = $(".ped_gral_coment_textarea").val();


	$.ajax({
	    "method": "POST",
	    "url": "../php/pedidos/pedidos_general/update_coment_pedido_individual.php",
	    "data": {
	              coment_cliente:coment_cliente,
	              id_pedido:id_pedido,
	              id_web:id_web,
	              id_cliente:id_cliente
	            }
	})

	.done(function(response){
	
		console.log(response);

	  	window.location.reload();
		    
	});
}




