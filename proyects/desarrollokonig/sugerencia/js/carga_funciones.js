


var img_cat      		= document.getElementsByClassName("img_cat");
var contenedor_img      = document.getElementsByClassName("contenedor_img");
var titulo_cat      = document.getElementsByClassName("titulo_cat");

var linea_titulo      = document.getElementsByClassName("linea_titulo");
var txt_cat      = document.getElementsByClassName("txt_cat");


function ON_mouse_over_categoria(){
	
	contenedor_img[M1].style.boxShadow 		= "3px 8px 21px -5px #2b2b2b"; 

	img_cat[M1].style.transform  			= "scale(1.5";

	//titulo_cat[M1].style.fontWeight  		= "600";
	titulo_cat[M1].style.left 				= "52%";

	linea_titulo[M1].style.width  			= "80%";

	txt_cat[M1].style.color  				= "white";
	//txt_cat[M1].style.left  				= "48%";
}


function OUT_mouse_over_categoria(){
	
	contenedor_img[M1].style.boxShadow 		= "0px 0px 0px 0px "; 

	img_cat[M1].style.transform  			= "scale(1";

	//titulo_cat[M1].style.fontWeight  		= "400";
	titulo_cat[M1].style.left  				= "50%";

	linea_titulo[M1].style.width  			= "95%";

	txt_cat[M1].style.color  				= "#f3d9ff";
	//txt_cat[M1].style.left  				= "50%";
}













/*
 #####     #    ####### #######  #####  ####### ######  ###    #     #####  
#     #   # #      #    #       #     # #     # #     #  #    # #   #     # 
#        #   #     #    #       #       #     # #     #  #   #   #  #       
#       #     #    #    #####   #  #### #     # ######   #  #     #  #####  
#       #######    #    #       #     # #     # #   #    #  #######       # 
#     # #     #    #    #       #     # #     # #    #   #  #     # #     # 
 #####  #     #    #    #######  #####  ####### #     # ### #     #  #####   
 */









/*
##### # ##### #    # #       ####  
  #   #   #   #    # #      #    # 
  #   #   #   #    # #      #    # 
  #   #   #   #    # #      #    # 
  #   #   #   #    # #      #    # 
  #   #   #    ####  ######  ####  
*/



function carga_titulo(){

  console.log("\n\nCARGA TITULO DE CATEGORIA:");
  var deferred = $.Deferred(); 

    $.ajax({
  		url: '../php/categorias.php',
  		type: 'GET',
	  	success: function(response){
	  		
	        for(var xw=1; xw<=2; xw++){
	        	switch(xw){

		            case 1: 
		              	console.log("peticion exitosa");

		              	var RESPUESTA = JSON.parse(response);


		              	RESPUESTA.forEach(RESPUESTA=> {
	
		                	var template =  ''; 

			                if(RESPUESTA.id==numero_de_categoria){
			                
				                template += RESPUESTA.titulo;

			                  	$('#titulo_listas').append(template);       
			                   
		                	}  
		        
		              	});// 	end FOREACH
		            
		            break;




		            case 2: 
			            console.log("FIN CARGA DE PEDIDOS\n\n\n");

			            //console.log("scroll2 : "+scroll2);
			            //content_1_DB.scrollTop = scroll2;

			            setTimeout(function(){
			            	deferred.resolve(); 
			                
			                //console.log(" ");
			                //console.log(" ");

		              	},500);  
		            break;



		        }   //end switch
	        } 		// FOR end 
  		} 		//success
  	}); 		//ajax


  return deferred.promise(); 
}





















/*
#      #  ####  #####   ##   
#      # #        #    #  #  
#      #  ####    #   #    # 
#      #      #   #   ###### 
#      # #    #   #   #    # 
###### #  ####    #   #    # 
*/



var cant_RESPUESTA 			=  0;
var cant_RESPUESTA_front 	= -1;
var M1 = 0;

function carga_lista_categoria(){

  console.log("\n\nCARGA DE CATEGORIA "+numero_de_categoria+":");
  var deferred = $.Deferred(); 

    $.ajax({
  		url: '../php/categories/categoria_'+numero_de_categoria+'.php',
  		type: 'GET',
	  	success: function(response){
	  		
	        for(var xw=1; xw<=2; xw++){
	        	switch(xw){

		            case 1: 
		              	console.log("peticion exitosa");

		              	var RESPUESTA = JSON.parse(response);


		              	RESPUESTA.forEach(RESPUESTA=> {
		          			cant_RESPUESTA++;
		          			cant_RESPUESTA_front++;
		          			var font = cant_RESPUESTA_front;
		                	var template =  ''; 

			                if(RESPUESTA.activo==1){
			                
			                  
				                template += 
				                `<div class="content_info">`+
				                	`<div class="codigo_prod txt">`+RESPUESTA.codigo+`</div>`+
				                	`<div class="nombre_prod txt">`+RESPUESTA.fragancia+`</div>`+
				                `</div>`;



			                  	$('#content_lista').append(template);  
			                    
		                	}  
		        
		              	});// 	end FOREACH
		            
		            break;




		            case 2: 
			            console.log("FIN CARGA\n\n\n");

			            //console.log("scroll2 : "+scroll2);
			            //content_1_DB.scrollTop = scroll2;

			            setTimeout(function(){
			            	deferred.resolve(); 
			                
			                //console.log(" ");
			                //console.log(" ");

		              	},500);  
		            break;



		        }   //end switch
	        } 		// FOR end 
  		} 		//success
  	}); 		//ajax


  return deferred.promise(); 
}



















/*
#      # #    # #    # 
#      # ##   # #   #  
#      # # #  # ####   
#      # #  # # #  #   
#      # #   ## #   #  
###### # #    # #    # 
*/



function carga_link_archivo(){

  console.log("\n\nCARGA DE LINK:");
  var deferred = $.Deferred(); 

    $.ajax({
  		url: '../php/link_descarga.php',
  		type: 'GET',
	  	success: function(response){
	  		
	        for(var xw=1; xw<=2; xw++){
	        	switch(xw){

		            case 1: 
		              	console.log("peticion exitosa");

		              	var RESPUESTA = JSON.parse(response);


		              	RESPUESTA.forEach(RESPUESTA=> {
		          			cant_RESPUESTA++;
		          			cant_RESPUESTA_front++;
		          			var font = cant_RESPUESTA_front;
		                	var template =  ''; 

			                if(RESPUESTA.activo==1){
			                
			                  
				                template += 

				                `<div class="texto_descarga_lista">`+RESPUESTA.texto+`</div>`+
				                `<div id="linea_titulo_descarga"></div>`+

				                `<a href="`+RESPUESTA.link+`"class="descargar">`+
				                	`<img src="../img/descarga_w.png" class="img_descarga" alt="esencias">`+
				                `</a>`+

				                `<img src="../img/otra_flor_w.png" class="img_lista" alt="esencias">`;
				


				      



			                  	$('#content_2_cat').append(template);  
			                    
		                	}  
		        
		              	});// 	end FOREACH
		            
		            break;




		            case 2: 
			            console.log("FIN CARGA\n\n\n");

			            //console.log("scroll2 : "+scroll2);
			            //content_1_DB.scrollTop = scroll2;

			            setTimeout(function(){
			            	deferred.resolve(); 
			                
			                //console.log(" ");
			                //console.log(" ");

		              	},500);  
		            break;



		        }   //end switch
	        } 		// FOR end 
  		} 		//success
  	}); 		//ajax


  return deferred.promise(); 
}


