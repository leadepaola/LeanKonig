

var categoria      = document.getElementsByClassName("categoria");

/*
$.when(carga_categorias()).done(function () { 
	
	$.when(imagenes_banner()).done(function () {

	});
	
});
*/


function imagenes_banner(){

	setTimeout(function(){            
  		$("#img_banner_1").css("zIndex",  "1");
  	},2000);

	setTimeout(function(){            
  		$("#img_banner_1").css("transform",  "scale(1.25)");
  	},4500);

	
  	
  	setTimeout(function(){              		
  		$("#img_banner_2").css("transform",  "scale(1)");
  		$("#img_banner_2").css("opacity",  "1");
  	},10500);
  	setTimeout(function(){            
  		$("#img_banner_1").css("opacity",  "0");
  	},11000);


  	setTimeout(function(){            
  		$("#img_banner_3").css("transform",  "scale(1.25)");
  		$("#img_banner_3").css("opacity",  "1");
  	},18500);
  	setTimeout(function(){            
  		$("#img_banner_2").css("opacity",  "0");
  	},19000);


  	setTimeout(function(){            
  		$("#img_banner_4").css("transform",  "scale(1)");
  		$("#img_banner_4").css("opacity",  "1");
  	},26500);
  	setTimeout(function(){            
  		$("#img_banner_3").css("opacity",  "0");
  	},27000);


  	setTimeout(function(){            
  		$("#img_banner_5").css("transform",  "scale(1.25)");
  		$("#img_banner_5").css("opacity",  "1");
  	},34500);
  	setTimeout(function(){            
  		$("#img_banner_4").css("opacity",  "0");
  	},35000);


  	setTimeout(function(){            
  		$("#img_banner_1").css("transform",  "scale(1)");
  		$("#img_banner_1").css("opacity",  "1");
  	},42500);
  	setTimeout(function(){            
  		$("#img_banner_5").css("opacity",  "0");
  	},43000);

}



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

				                	`<div class="contenedor_img">`+
				                		`<div class="img_cat" id="img_cat_`+cant_RESPUESTA+`"></div> `+
				                	`</div>`+

				                	`<div class="titulo_cat" id="titulo_cat">`+
				                		RESPUESTA.titulo+
				                		`<div class="linea_titulo"></div>`+
				                	`</div>`+

				                	`<div class="txt_cat">`+
				                		RESPUESTA.texto+
				                	`</div>`+

				                `</a>`;


			                  	$('#content_cat').append(template);  
			                    
			                    console.log("   Cantidad de elementos : "+cant_RESPUESTA);
			                    //categoria[cant_RESPUESTA_front].addEventListener('click',function(){V9=RESPUESTA.id;click_boton_verde();});
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

