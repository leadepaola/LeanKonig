



// FUNCION 
// Detecta cuando cambia el estado del select "leido o no leido "
// Y ejecuta la busqueda


$('.msjs_filas_cont').change(function(){

	start_reloader();
	
	var filtro 		= ($(this).find(".msjs_select").val());

	var id_web 		= ($(this).find("#id_web").val());
	var id_cliente 	= ($(this).find("#id_cliente").val());
	
	/*
	$.when(actualizar_estado_pedido_dsd_gral(estado,id_pedido,id_web,id_cliente)).done(function () {   

	});
	*/
	
	window.location.href = 'mensajes_general.php?id_web='+id_web+'&id_cliente='+id_cliente+'&filtro='+filtro;

	//console.log(estado);

});
