









/*
 ####  ###### #    # ###### #####    ##   #      
#    # #      ##   # #      #    #  #  #  #      
#      #####  # #  # #####  #    # #    # #      
#  ### #      #  # # #      #####  ###### #      
#    # #      #   ## #      #   #  #    # #      
 ####  ###### #    # ###### #    # #    # ###### 
*/



















/*
##### # #####   ####  
  #   # #    # #    # 
  #   # #    # #    # 
  #   # #####  #    # 
  #   # #      #    # 
  #   # #       #### 

#####    ##   #    # #    # ###### #####   ####  
#    #  #  #  ##   # ##   # #      #    # #      
#####  #    # # #  # # #  # #####  #    #  ####  
#    # ###### #  # # #  # # #      #####       # 
#    # #    # #   ## #   ## #      #   #  #    # 
#####  #    # #    # #    # ###### #    #  #### 
*/

// FUNCION 
// Modifica el tipo de banner ( unico o duo)

$('.select_banner_cont').change(function(){

	var banner 		= $(".select_banner").val();
	
	var id_web 		= ($(this).find("#id_web").val());
	var id_cliente 	= ($(this).find("#id_cliente").val());
	
	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	$.when(modifico_tipo_banner(banner,id_web,id_cliente)).done(function () {   

	});

	});
	
/*
	console.log(banner);
	console.log(id_web);
	console.log(id_cliente);
*/

});



function modifico_tipo_banner(tipo,id_w,id_c){
 
  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/banners/general/update_tipo_banner.php",
    "data": {
              banner:tipo,
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
#####    ##   #    # #    # ###### #####   ####  
#    #  #  #  ##   # ##   # #      #    # #      
#####  #    # # #  # # #  # #####  #    #  ####  
#    # ###### #  # # #  # # #      #####       # 
#    # #    # #   ## #   ## #      #   #  #    # 
#####  #    # #    # #    # ###### #    #  #### 

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

$('.banner_checkbox').change(function(){

	//console.log("banner");
	
	var id_web    	= ($(this).find("#id_web").val());
  	var id_cliente  = ($(this).find("#id_cliente").val());
  	var banner_num  = ($(this).find("#name_banner_actual").val());

  	/*
	console.log(id_web);
	console.log(id_cliente);
	console.log(banner_num);
	*/

	if ($(this).find("#switch_checkbox").is(':checked')) {
		console.log("activo");

		$.when(banner_activar(id_web,id_cliente,banner_num)).done(function () {   

		});

	}else{
		console.log("NO activo");

		$.when(banner_desactivar(id_web,id_cliente,banner_num)).done(function () {   

		});	
	}


});




function banner_activar(id_w,id_c,bann_num){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/banners/general/banner_activar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              banner_num:bann_num
            }
  })   

  .done(function(response){

	console.log(response);

  	//window.location.reload();

 	deferred.resolve();
	    
  });
}

function banner_desactivar(id_w,id_c,bann_num){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/banners/general/banner_desactivar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              banner_num:bann_num
            }
  })   

  .done(function(response){

	console.log(response);

  	//window.location.reload();

 	deferred.resolve();
	    
  });
}































/*
#####    ##   #    # #    # ###### #####  
#    #  #  #  ##   # ##   # #      #    # 
#####  #    # # #  # # #  # #####  #    # 
#    # ###### #  # # #  # # #      #####  
#    # #    # #   ## #   ## #      #   #  
#####  #    # #    # #    # ###### #    #

#    # #    # #  ####   ####  
#    # ##   # # #    # #    # 
#    # # #  # # #      #    # 
#    # #  # # # #      #    # 
#    # #   ## # #    # #    # 
 ####  #    # #  ####   #### 

  ##    ####  ##### #    #   ##   #      # ######   ##   #####  
 #  #  #    #   #   #    #  #  #  #      #     #   #  #  #    # 
#    # #        #   #    # #    # #      #    #   #    # #    # 
###### #        #   #    # ###### #      #   #    ###### #####  
#    # #    #   #   #    # #    # #      #  #     #    # #   #  
#    #  ####    #    ####  #    # ###### # ###### #    # #    # 
*/



$('#img_form').change(function(){	

	start_reloader();

	var parametros		= new FormData($("#form_logo")[0]);


	$.ajax({
		
		type: "POST",
		url: "../php/banners/unico/banner_actualizar.php",
		data: parametros,

		cache: false,
		contentType: false,
		processData: false,

	})   


	.done(function(response){

		console.log(response);

		window.location.reload();

	});

});






















/*
#####    ##   #    # #    # ###### #####  
#    #  #  #  ##   # ##   # #      #    # 
#####  #    # # #  # # #  # #####  #    # 
#    # ###### #  # # #  # # #      #####  
#    # #    # #   ## #   ## #      #   #  
#####  #    # #    # #    # ###### #    #

#####  #    #  ####  
#    # #    # #    # 
#    # #    # #    # 
#    # #    # #    # 
#    # #    # #    # 
#####   ####   ####

  ##    ####  ##### #    #   ##   #      # ######   ##   #####  
 #  #  #    #   #   #    #  #  #  #      #     #   #  #  #    # 
#    # #        #   #    # #    # #      #    #   #    # #    # 
###### #        #   #    # ###### #      #   #    ###### #####  
#    # #    #   #   #    # #    # #      #  #     #    # #   #  
#    #  ####    #    ####  #    # ###### # ###### #    # #    # 
*/




/*	PC 	*/

$('#img_form_pc').change(function(){

	start_reloader();

	var parametros		= new FormData($("#form_logo_pc")[0]);


	$.ajax({
		
		type: "POST",
		url: "../php/banners/duo/banner_actualizar_pc.php",
		data: parametros,

		cache: false,
		contentType: false,
		processData: false,
	})   


	.done(function(response){

		console.log(response);

		window.location.reload();

	});

});




/*	MOBILE 	*/

$('#img_form_mob').change(function(){

	start_reloader();
	
	var parametros		= new FormData($("#form_logo_mob")[0]);


	$.ajax({
		
		type: "POST",
		url: "../php/banners/duo/banner_actualizar_mob.php",
		data: parametros,

		cache: false,
		contentType: false,
		processData: false,
	})   


	.done(function(response){

		console.log(response);

		window.location.reload();

	});

});


























































