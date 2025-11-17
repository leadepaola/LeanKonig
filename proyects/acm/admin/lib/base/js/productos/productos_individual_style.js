


/*

MOSTRAR Y OCULTAR CAMPOS DE DESCUENTO

*/


$('#prod_indi_edit_descipcion_cont').click(function(){

	if (campos_d_descuento_view==1) {	
		ocultar_campos_d_descuento();
	}
	else{
		mostrar_campos_d_descuento();
	}

});



function ocultar_campos_d_descuento(){
	campos_d_descuento_view = 0;
	$('#prod_indi_edit_precio_tach_cont').css("display", "none");
	$('#prod_indi_edit_txt_OFF_cont').css("display", "none");
	$('#prod_indi_tit_tach_y_off').css("color", "#cccccc");

	$('#prod_indi_flechita_seleccion').css("transform", "rotate(45deg)");
}

function mostrar_campos_d_descuento(){
	campos_d_descuento_view = 1;
	$('#prod_indi_edit_precio_tach_cont').css("display", "flex");
	$('#prod_indi_edit_txt_OFF_cont').css("display", "flex");
	$('#prod_indi_tit_tach_y_off').css("color", "rgb(68 68 68 / 87%)");

	$('#prod_indi_flechita_seleccion').css("transform", "rotate(-135deg)");
}







