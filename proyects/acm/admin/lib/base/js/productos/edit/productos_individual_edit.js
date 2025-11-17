



/*
###### #####  # ##### 
#      #    # #   #   
#####  #    # #   #   
#      #    # #   #   
#      #    # #   #   
###### #####  #   #

#####  #####   ####  #####  #    #  ####  #####  ####  
#    # #    # #    # #    # #    # #    #   #   #    # 
#    # #    # #    # #    # #    # #        #   #    # 
#####  #####  #    # #    # #    # #        #   #    # 
#      #   #  #    # #    # #    # #    #   #   #    # 
#      #    #  ####  #####   ####   ####    #    #### 
*/


/*Click en btn*/
$('.prod_indi_edit_btn_accion').click(function(){

	verificar_campos_Vacios();

});



descripcion_active 	= 0;
precio_tach_active 	= 0;
txt_off_active 		= 0;



function verificar_campos_Vacios(){

	error = 0;

	//	0
	//	Tomo variables generales
	var id_web      	= $("#id_web").val();
	var id_cliente  	= $("#id_cliente").val();
	var id_producto  	= $("#id_producto").val();


	//  1 
	//	Verifico TIPO 
	if ($('.tipo').val() == '') {

        $('.tipo').css("border-bottom", "1px solid #F44336");
    	error++;
    } 
    else {
    	
    	var tipo 		= $(".tipo").val();
		//console.log("tipo: "+tipo);
		$('.tipo').css("border-bottom", "1px solid whitesmoke");
    }


    //	2
    // 	Verifico CATEGORIA
    if ($('.categoria').val() == '') {

        $('.categoria').css("border-bottom", "1px solid #F44336");
    	error++;

    } 
    else {
    	
    	var id_categoria 		= $(".categoria").val();
		//console.log(id_categoria);
		$('.categoria').css("border-bottom", "1px solid whitesmoke");
    }

    //	3
    // 	Verifico TITULO 
    if ($('.titulo').val() == '') {

        $('.titulo').css("border-bottom", "1px solid #F44336");
    	error++;
    } 
    else {
    	
    	var titulo 		= $(".titulo").val();
		//console.log(titulo);
		$('.titulo').css("border-bottom", "1px solid whitesmoke");
    }

    //	4
    // 	Verifico UNIDAD
    if ($('.unidad').val() == '') {

        $('.unidad').css("border-bottom", "1px solid #F44336");
    	error++;

    } 
    else {
    	
    	var unidad 		= $(".unidad").val();
		//console.log(unidad);
		$('.unidad').css("border-bottom", "1px solid whitesmoke");

    }

    //	5
    // 	Verifico PRECIO 
    if ($('.precio').val() == '') {

        $('.precio').css("border-bottom", "1px solid #F44336");
    	error++;

    } 
    else {
    	
    	var precio 		= $(".precio").val();
		//console.log(precio);
		$('.precio').css("border-bottom", "1px solid white");

    }


    //	6
    // 	Verifico DESCRIPCION ACTIVE 
    if ($(".descripcion_checkbox").is(':checked')) {

    	descripcion_active = 1;
		//console.log(descripcion_active);
    } 
    else {

    	descripcion_active = 0;
		//console.log(descripcion_active);
    }


    //	7
    //	Tomo lo que haya en textarea descripcion
    var descripcion_txt 		= $(".descripcion").val();
	//console.log(descripcion_txt);



	//	8
    // 	Verifico precio tach ACTIVE 
    if ($(".precio_tach_checkbox").is(':checked')) {

    	precio_tach_active = 1;
		//console.log(precio_tach_active);
    } 
    else {

    	precio_tach_active = 0;
		//console.log(precio_tach_active);
    }

    //	9
    var precio_tach_txt 		= $(".precio_tach_txt").val();
	//console.log(precio_tach_txt);



	//	10
    // 	Verifico txt OFF ACTIVE 
    if ($(".txt_off_checkbox").is(':checked')) {

    	txt_off_active = 1;
		//console.log(txt_off_active);
    } 
    else {

    	txt_off_active = 0;
		//console.log(txt_off_active);
    }

    //	11
    var txt_off_txt 		= $(".txt_off_txt").val();
	//console.log(txt_off_txt);






	setTimeout(function(){            
		
		if (error==0) {
			
			// Activo fonto transparente y mouse reload					--> funcion en index.js
		  	$.when(start_reloader()).done(function () {
			// Agrego al producto
			$.when(producto_edit(id_web,id_cliente,id_producto,tipo,id_categoria,titulo,unidad,precio,descripcion_active,descripcion_txt,precio_tach_active,precio_tach_txt,txt_off_active,txt_off_txt)).done(function () {   

			// Desctivo fonto transparente y mouse reload					--> funcion en index.js
			toast = 'Producto Actualizado';
		  	$.when(finish_reloader_with_toast(toast)).done(function () {

				
			});

			});			
		
			});			
		}

	},10);



}







function producto_edit(id_w,id_c,id_producto,tipo,id_categoria,titulo,unidad,precio,descripcion_active,descripcion_txt,precio_tach_active,precio_tach_txt,txt_off_active,txt_off_txt){


	$.ajax({
		"method": "POST",
		"url": "../php/productos/edit/individual/actualizar_all_data.php",
		"data": {
		          id_web:id_w,id_cliente:id_c,
		          id_producto:id_producto,
		          tipo:tipo,
		          id_categoria:id_categoria,
		          titulo:titulo,
		          unidad:unidad,
		          precio:precio,
		          descripcion_active:descripcion_active,
		          descripcion_txt:descripcion_txt,
		          precio_tach_active:precio_tach_active,
		          precio_tach_txt:precio_tach_txt,
		          txt_off_active:txt_off_active,
		          txt_off_txt:txt_off_txt,
		        }
	})   

	.done(function(response_id_prod){

		console.log(response_id_prod);


    	//Materialize.toast('Producto Actualizado', 3000, 'rounded');

		//window.location.href = 'productos.php?id_web='+id_w+'&id_cliente='+id_c;


	
	    
	});

}











/*
#############################################################################################
*/




















/*

 ####    ##   #####   ####    ##   #####  
#    #  #  #  #    # #    #  #  #  #    # 
#      #    # #    # #      #    # #    # 
#      ###### #####  #  ### ###### #####  
#    # #    # #   #  #    # #    # #   #  
 ####  #    # #    #  ####  #    # #    # 

# #    #   ##    ####  ###### #    # ######  ####  
# ##  ##  #  #  #    # #      ##   # #      #      
# # ## # #    # #      #####  # #  # #####   ####  
# #    # ###### #  ### #      #  # # #           # 
# #    # #    # #    # #      #   ## #      #    # 
# #    # #    #  ####  ###### #    # ######  ####

*/



















/*

# #    #   ##    ####  ###### 
# ##  ##  #  #  #    # #      
# # ## # #    # #      #####  
# #    # ###### #  ### #      
# #    # #    # #    # #      
# #    # #    #  ####  ###### 

#####  #####  # #    #  ####  # #####    ##   #      
#    # #    # # ##   # #    # # #    #  #  #  #      
#    # #    # # # #  # #      # #    # #    # #      
#####  #####  # #  # # #      # #####  ###### #      
#      #   #  # #   ## #    # # #      #    # #      
#      #    # # #    #  ####  # #      #    # ###### 

*/


$('#img_form_princ').change(function(){	

	// Actualiza preview de la imagen cargada
	$.when(filePreview(this)).done(function () {  

	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	// Actualiza nueva imagen en base de datos y en carpeta 
	$.when(actualizar_img_princ()).done(function () {   

	// Desctivo fonto transparente y mouse reload					--> funcion en index.js
	toast = 'Imagen principal actualizada';
  	$.when(finish_reloader_with_toast(toast)).done(function () {

		
	});

	});

	});	

	});	



});



function filePreview(input) {
	
	var deferred = $.Deferred();

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();

        reader.onload = function (e) {

		    var tag_img =  '<img src="'+e.target.result+'" class="prod_indi_edit_item_lista_img" id="prod_indi_edit_item_lista_img_princ">';

	        $('#img_principal_cont').html(tag_img);
	        deferred.resolve();
        }

        reader.readAsDataURL(input.files[0]);
   }

   return deferred.promise();
    
}


function actualizar_img_princ(){

	var deferred = $.Deferred();

	var data_img_principal	= new FormData($("#form_img_princ")[0]);

	$.ajax({
		
		type: "POST",
		url: "../php/productos/edit/individual/actualizar_img_principal.php",
		data: data_img_principal,

		cache: false,
		contentType: false,
		processData: false,
	})   


	.done(function(response){

		// Elimina el salto de linea que trae la variable response
		resp = response.trim();
		console.log(resp);

		// Actualizo el valor del del input para poder reactualizar img si se quiere
		$("#name_img_principal_actual").val(resp);

		//Materialize.toast('Imagen principal actualizada', 3000, 'rounded');

		deferred.resolve();

	});

	return deferred.promise();

	 
}


/*

# #    #   ##    ####  ###### 
# ##  ##  #  #  #    # #      
# # ## # #    # #      #####  
# #    # ###### #  ### #      
# #    # #    # #    # #      
# #    # #    #  ####  ###### 

                           #   
 ####  ######  ####       ##   
#      #      #    #     # #   
 ####  #####  #            #   
     # #      #            #   
#    # #      #    #       #   
 ####  ######  ####      ##### 

*/



$('#img_form_sec_1').change(function(){	

	// Actualiza preview de la imagen cargada
	$.when(filePreview_sec_1(this)).done(function () {   
	
	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	// Actualiza nueva imagen en base de datos y en carpeta 
	$.when(actualizar_img_sec_1()).done(function () {   

	// Desctivo fonto transparente y mouse reload					--> funcion en index.js
	toast = 'Imagen secundaria 1 actualizada';
  	$.when(finish_reloader_with_toast(toast)).done(function () {

		
	});

	});

	});	

	});	

});



function filePreview_sec_1(input) {
	
    if (input.files && input.files[0]) {
        
        var reader = new FileReader();

        reader.onload = function (e) {

		    var tag_img =  '<img src="'+e.target.result+'" class="prod_indi_edit_item_lista_img_sec">';

	        $('#img_sec_1').html(tag_img);

        }

        reader.readAsDataURL(input.files[0]);
   }
    
}

function actualizar_img_sec_1(){

	var deferred = $.Deferred();

	var data_img_principal	= new FormData($("#form_img_sec_1")[0]);

	$.ajax({
		
		type: "POST",
		url: "../php/productos/edit/individual/actualizar_img_sec_1.php",
		data: data_img_principal,

		cache: false,
		contentType: false,
		processData: false,
	})   


	.done(function(response){

		// Elimina el salto de linea que trae la variable response
		resp = response.trim();
		console.log(resp);
		
		// Actualizo el valor del del input para poder reactualizar img si se quiere
		$("#name_img_sec_1_actual").val(resp);

		//Materialize.toast('Imagen secundario 1 actualizada', 3000, 'rounded');

		deferred.resolve();

	});

	return deferred.promise();

	 
}


/*

# #    #   ##    ####  ###### 
# ##  ##  #  #  #    # #      
# # ## # #    # #      #####  
# #    # ###### #  ### #      
# #    # #    # #    # #      
# #    # #    #  ####  ###### 

                         #####  
 ####  ######  ####     #     # 
#      #      #    #          # 
 ####  #####  #          #####  
     # #      #         #       
#    # #      #    #    #       
 ####  ######  ####     #######

*/


$('#img_form_sec_2').change(function(){	

	// Actualiza preview de la imagen cargada
	$.when(filePreview_sec_2(this)).done(function () {   
	
	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	// Actualiza nueva imagen en base de datos y en carpeta 
	$.when(actualizar_img_sec_2()).done(function () {   

	// Desctivo fonto transparente y mouse reload					--> funcion en index.js
	toast = 'Imagen secundaria 2 actualizada';
  	$.when(finish_reloader_with_toast(toast)).done(function () {

		
	});

	});

	});	

	});	

});



function filePreview_sec_2(input) {
	
    if (input.files && input.files[0]) {
        
        var reader = new FileReader();

        reader.onload = function (e) {

		    var tag_img =  '<img src="'+e.target.result+'" class="prod_indi_edit_item_lista_img_sec">';

	        $('#img_sec_2').html(tag_img);

        }

        reader.readAsDataURL(input.files[0]);
   }
    
}


function actualizar_img_sec_2(){

	var deferred = $.Deferred();

	var data_img_principal	= new FormData($("#form_img_sec_2")[0]);

	$.ajax({
		
		type: "POST",
		url: "../php/productos/edit/individual/actualizar_img_sec_2.php",
		data: data_img_principal,

		cache: false,
		contentType: false,
		processData: false,
	})   


	.done(function(response){

		// Elimina el salto de linea que trae la variable response
		resp = response.trim();
		console.log(resp);
		
		// Actualizo el valor del del input para poder reactualizar img si se quiere
		$("#name_img_sec_2_actual").val(resp);

		//Materialize.toast('Imagen secundario 2 actualizada', 3000, 'rounded');

		deferred.resolve();

	});

	return deferred.promise();

	 
}



/*

# #    #   ##    ####  ###### 
# ##  ##  #  #  #    # #      
# # ## # #    # #      #####  
# #    # ###### #  ### #      
# #    # #    # #    # #      
# #    # #    #  ####  ###### 


                         #####  
 ####  ######  ####     #     # 
#      #      #    #          # 
 ####  #####  #          #####  
     # #      #               # 
#    # #      #    #    #     # 
 ####  ######  ####      #####

*/


$('#img_form_sec_3').change(function(){	

	// Actualiza preview de la imagen cargada
	$.when(filePreview_sec_3(this)).done(function () {   
	
	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	// Actualiza nueva imagen en base de datos y en carpeta 
	$.when(actualizar_img_sec_3()).done(function () {   

	// Desctivo fonto transparente y mouse reload					--> funcion en index.js
	toast = 'Imagen secundaria 3 actualizada';
  	$.when(finish_reloader_with_toast(toast)).done(function () {

		
	});

	});

	});	

	});	

});



function filePreview_sec_3(input) {
	
    if (input.files && input.files[0]) {
        
        var reader = new FileReader();

        reader.onload = function (e) {

		    var tag_img =  '<img src="'+e.target.result+'" class="prod_indi_edit_item_lista_img_sec">';

	        $('#img_sec_3').html(tag_img);

        }

        reader.readAsDataURL(input.files[0]);
   }
    
}



function actualizar_img_sec_3(){

	var deferred = $.Deferred();

	var data_img_principal	= new FormData($("#form_img_sec_3")[0]);

	$.ajax({
		
		type: "POST",
		url: "../php/productos/edit/individual/actualizar_img_sec_3.php",
		data: data_img_principal,

		cache: false,
		contentType: false,
		processData: false,
	})   


	.done(function(response){

		// Elimina el salto de linea que trae la variable response
		resp = response.trim();
		console.log(resp);
		
		// Actualizo el valor del del input para poder reactualizar img si se quiere
		$("#name_img_sec_3_actual").val(resp);

		//Materialize.toast('Imagen secundario 3 actualizada', 3000, 'rounded');

		deferred.resolve();

	});

	return deferred.promise();

	 
}




























































































/*
#############################################################################################
*/











/*

 ####   ####   ####  
#    # #      #      
#       ####   ####  
#           #      # 
#    # #    # #    # 
 ####   ####   ####

*/

// FUNCION 
// Css. En la seccion talle
// Cuando paso el mas por arriba del "+"
// Se agranda

$("#index_item_img_add_cont").mouseover(function(){
    $("#index_item_img_add").css("width",  "16px");
});


$("#index_item_img_add_cont").mouseout(function(){
  $("#index_item_img_add").css("width",  "12px");
});

