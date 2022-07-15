

var categoria      = document.getElementsByClassName("categoria");


$.when(carga_categorias()).done(function () { 

});



var cant_RESPUESTA 			=  0;
var cant_RESPUESTA_front 	= -1;
var M1 = 0;

function carga_categorias(){

  console.log("\n\nCARGA DE CATEGORIAS:");
  var deferred = $.Deferred(); 

    $.ajax({
  		url: './php/categorias.php',
  		type: 'GET',
	  	success: function(response){
	  		
	        for(var xw=1; xw<=2; xw++){
	        	switch(xw){

		            case 1: 
		              	console.log("peticion exitosa");

		              	var RESPUESTA = JSON.parse(response);


		              	RESPUESTA.forEach(RESPUESTA=> {
		          			cant_RESPUESTA++;
		          			
		                	var template =  ''; 

			                if(RESPUESTA.activo==1){
			                	cant_RESPUESTA_front++;
		          				var font = cant_RESPUESTA_front;
			                  
				                template += 

				                `<a href="./html/categoria_`+cant_RESPUESTA+`.html" class="categoria">`+

				                	`<div class="titulo_cat" id="titulo_cat">`+
				                		RESPUESTA.titulo+
				                		`<div class="linea_titulo"></div>`+
				                	`</div>`+

				                	`<div class="txt_cat">`+
				                		RESPUESTA.texto+
				                	`</div>`+

				                	`<div class="contenedor_img">`+
				                		`<div class="img_cat" id="img_cat_`+cant_RESPUESTA+`"></div> `+
				                	`</div>`+

				                `</a>`;


			                  	$('#content_cat').append(template);  
			                    
			                    console.log("   Cantidad de elementos : "+cant_RESPUESTA);
			                    categoria[cant_RESPUESTA_front].addEventListener('click',function(){V9=RESPUESTA.id;click_boton_verde();});
			                    //categoria[font].click  = function() {ON_mouse_over_categoria(M1=font)};  
								//categoria[font].click   = function() {OUT_mouse_over_categoria(M1=font)};

			                    categoria[font].onmouseover  = function() {ON_mouse_over_categoria(M1=font)};  
								categoria[font].onmouseout   = function() {OUT_mouse_over_categoria(M1=font)};

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

