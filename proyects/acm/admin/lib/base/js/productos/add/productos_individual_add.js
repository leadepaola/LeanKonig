



/*
  ##   #####  #####  
 #  #  #    # #    # 
#    # #    # #    # 
###### #    # #    # 
#    # #    # #    # 
#    # #####  ##### 

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
	var dominio  		= $("#dominio").val();


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
			$.when(producto_add(id_web,id_cliente,dominio,tipo,id_categoria,titulo,unidad,precio,descripcion_active,descripcion_txt,precio_tach_active,precio_tach_txt,txt_off_active,txt_off_txt)).done(function () {   

			// Desctivo fonto transparente y mouse reload					--> funcion en index.js
/*			toast = 'Producto cargado';
		  	$.when(finish_reloader_with_toast(toast)).done(function () {

				setTimeout(function(){            
					//window.location.href = 'productos.php?id_web='+id_web+'&id_cliente='+id_cliente;
				},200);
				
			});
*/
			});			

			});		


		}

	},10);



}





function producto_add(id_w,id_c,dominio,tipo,id_categoria,titulo,unidad,precio,descripcion_active,descripcion_txt,precio_tach_active,precio_tach_txt,txt_off_active,txt_off_txt){
	console.log("comienza carga de producto");
	var deferred = $.Deferred();

	$.ajax({
		"method": "POST",
		"url": "../php/productos/add/producto_add.php",
		"data": {
		          id_web:id_w,id_cliente:id_c,
		          dominio:dominio,
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

		//console.log(response_id_prod);

		var input_id_prod = '<input type="hidden" id="id_producto" 	name="id_producto" value="'+response_id_prod+'">';
		$('.index_form_invi_btn_cargar_img').append(input_id_prod);

		console.log("Termina carga de producto");

		deferred.resolve();	


			setTimeout(function(){  

				// Subo imagen principal 
			    $.when(add_img_princ()).done(function () {   

			    // Subo imagen secundaria 1
			    $.when(add_img_sec_1(response_id_prod)).done(function () {   

			    // Subo imagen secundaria 2
			    $.when(add_img_sec_2(response_id_prod)).done(function () {   

			    // Subo imagen secundaria 3
			    $.when(add_img_sec_3(response_id_prod)).done(function () {   

			    // Desctivo fonto transparente y mouse reload					--> funcion en index.js
				toast = 'Producto cargado';
			  	$.when(finish_reloader_with_toast(toast)).done(function () {

					setTimeout(function(){            
						window.location.href = 'productos.php?id_web='+id_w+'&id_cliente='+id_c;
					},200);
					
				});
			    	
			    	//Materialize.toast('Producto cargado', 1500, 'rounded');
			    	/*
					setTimeout(function(){            
						window.location.href = 'productos.php?id_web='+id_w+'&id_cliente='+id_c;
					},200);
					*/


					//setTimeout(function(){  
						
						
					//},2000);
					
				});

				});

				});

				});

			},1000);
	    	
	});

	return deferred.promise();
}









function add_img_princ(){
	console.log("Comienza verif y carga de img principal");

	var deferred = $.Deferred();

	//	8
	//	Verifico IMAGEN PRINCIPAL

	// Si el id llamado NO está vacio, es porque hay una imagen cargada
	// Entonces la subo
	setTimeout(function(){  
		if ($('#img_form_princ').val() != '') {

			var data_img_principal	= new FormData($("#form_img_princ")[0]);

			$.ajax({
				
				type: "POST",
				url: "../php/productos/add/img_principal_add.php",
				data: data_img_principal,

				cache: false,
				contentType: false,
				processData: false,
			})   


			.done(function(response){
				console.log("Termina verif y carga de img principal");
				console.log(response);

				//window.location.reload();
				deferred.resolve();
			});

			
	    }else{
			deferred.resolve();
	    }
    },1000); 
	 
	return deferred.promise();
}



function add_img_sec_1(){
	console.log("Comineza img sec 1");
	var deferred = $.Deferred();

	//	9
	//	Verifico IMAGEN SECUNDARIA 1

	if ($('#img_form_sec_1').val() != '') {

		var data_img_sec_1		= new FormData($("#form_img_sec_1")[0]);

		$.ajax({
			
			type: "POST",
			url: "../php/productos/add/img_sec_1_add.php",
			data: data_img_sec_1,
				

					
			cache: false,
			contentType: false,
			processData: false,
		})   


		.done(function(response){
			console.log("Termina img sec 1");
			console.log(response);

			//window.location.reload();
			deferred.resolve();
		});


    }else{
		deferred.resolve();
    }
    
	return deferred.promise();
}


function add_img_sec_2(){
	console.log("Comineza img sec 2");
	var deferred = $.Deferred();

	//	10
	//	Verifico IMAGEN SECUNDARIA 2

	if ($('#img_form_sec_2').val() != '') {

		var data_img_sec_2		= new FormData($("#form_img_sec_2")[0]);

		$.ajax({
			
			type: "POST",
			url: "../php/productos/add/img_sec_2_add.php",
			data: data_img_sec_2,
				

					
			cache: false,
			contentType: false,
			processData: false,
		})   


		.done(function(response){
			console.log("Termina img sec 2");

			console.log(response);

			//window.location.reload();
			deferred.resolve();
		});

    }else{
		deferred.resolve();
    }
    
	return deferred.promise();

}


function add_img_sec_3(){
	console.log("Comineza img sec 3");

	var deferred = $.Deferred();

	//	11
	//	Verifico IMAGEN SECUNDARIA 1

	if ($('#img_form_sec_3').val() != '') {

		var data_img_sec_3		= new FormData($("#form_img_sec_3")[0]);

		$.ajax({
			
			type: "POST",
			url: "../php/productos/add/img_sec_3_add.php",
			data: data_img_sec_3,
				

					
			cache: false,
			contentType: false,
			processData: false,
		})   


		.done(function(response){
			console.log("Termina img sec 3");

			console.log(response);

			//window.location.reload();
			deferred.resolve();
		});

    }else{
		deferred.resolve();
    }
    
	return deferred.promise();

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

	filePreview(this);

});



function filePreview(input) {
	
    if (input.files && input.files[0]) {
        
        var reader = new FileReader();

        reader.onload = function (e) {

		    var tag_img =  '<img src="'+e.target.result+'" class="prod_indi_edit_item_lista_img" id="prod_indi_edit_item_lista_img_princ">';

	        $('#img_principal_cont').html(tag_img);

        }

        reader.readAsDataURL(input.files[0]);
   }
    
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

	filePreview_sec_1(this);

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

	filePreview_sec_2(this);

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

	filePreview_sec_3(this);

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

