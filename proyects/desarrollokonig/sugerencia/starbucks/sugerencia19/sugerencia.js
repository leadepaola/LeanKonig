








/*
$(document).ready(function(){
});
*/





var boton_verde      = document.getElementsByClassName("boton_verde");
var boton_blanco      = document.getElementsByClassName("boton_blanco");
var boton_rojo      = document.getElementsByClassName("boton_rojo");


var content_1_DB           = document.getElementById("content_1_DB");


//$.when(lista_pedidos()).done(function () { 

  


//});












var cant_pedido = -1;
var identificador = 0;
var V9=0;
var L1=0;

function lista_pedidos(){

  console.log("CARGA DE PEDIDOS:");
  var deferred = $.Deferred(); 

    $.ajax({
  		url: './sugerencia19/php/pedidos.php',
  		type: 'GET',
  		success: function(response){
  		
        for(var xw=1; xw<=2; xw++){
          switch(xw){
            case 1: 
            	console.log("case 1");

              	console.log("peticion pedidos exitosa");

              	var pedido = JSON.parse(response);

                //var template =  ''; //prueba

              	pedido.forEach(pedido=> {
          
                var template =  ''; //original 67

                cant_pedido++;

                identificador = pedido.id;

                //if(pedido.estado==0){
                
                  
	                template += 
	               
	                `<div class="pedido `+pedido.id+`">`+
                    `<div class="datos" id="estado">`+pedido.estado+`</div>`+
                    `<div class="datos" id="dispositivo">`+pedido.dispositivo+`</div>`+

                    `<div class="datos" id="fecha">`+pedido.fecha+`</div>`+
                    `<div class="datos" id="hora">`+pedido.hora+`</div>`+

                    `<div class="datos" id="nombre">`+pedido.nombre+`</div>`+
                    `<div class="datos" id="telefono">`+pedido.telefono+`</div>`+
                    `<div class="datos" id="correo">`+pedido.correo+`</div>`+
                    `<div class="datos" id="instagram">`+pedido.instagram+`</div>`+
                    `<div class="datos" id="localidad">`+pedido.localidad+`</div>`+
                    `<div class="datos" id="direccion">`+pedido.direccion+`</div>`+
                    
                    `<div class="datos" id="mensaje">`+pedido.mensaje+`</div>`+
                    `<div class="datos" id="lista">`+pedido.lista_productos+`</div>`+

                    `<div id="content_botones_accion">`+
                      `<div class="boton_accion boton_verde `+pedido.id+`" id="boton_verde">Entregado</div>`+
                      `<div class="boton_accion boton_blanco" id="boton_blanco">Proceso</div>`+
                      `<div class="boton_accion boton_rojo `+pedido.id+`" id="boton_rojo">Cancelado</div>`+
                    `</div>`+

                  `</div>`;


                  	$('#cuerpo_info2').append(template);  
                    


                    console.log(cant_pedido);
                    boton_verde[cant_pedido].addEventListener('click',function(){V9=pedido.id;click_boton_verde();});
                    boton_blanco[cant_pedido].addEventListener('click',function(){V9=pedido.id;click_boton_blanco();});
                    boton_rojo[cant_pedido].addEventListener('click',function(){V9=pedido.id;click_boton_rojo();});
                   

                    switch(pedido.estado){
                      case "PEDIDO ENTREGADO":
                            $('.pedido.'+pedido.id).css("background-color", "#81b281");
                            $('.boton_verde.'+pedido.id).css("background-color", "#81b281");
   
                      break;

                      case "ENTREGA EN PROCESO":
                            $('.pedido.'+pedido.id).css("background-color", "white");
                      break;

                      case "PEDIDO CANCELADO":
                            $('.pedido.'+pedido.id).css("background-color", "#bf7272");
                            $('.boton_rojo.'+pedido.id).css("background-color", "#bf7272");
         
                      break;

                    }


                //}  
        
              });//aca termina el FOR

          
            //$('#content_1_DB').html(template); //prueba original 108
            
            break;




            case 2: 
              console.log("case 3");
              console.log("FIN CARGA DE PEDIDOS");

              console.log("scroll2 : "+scroll2);
              content_1_DB.scrollTop = scroll2;

              setTimeout(function(){
                deferred.resolve(); 
                
                console.log(" ");
                console.log(" ");
              },500);  
            break;
          }
        } // FOR end 
  		} //success
  	}); //ajax
  return deferred.promise(); 
}












function click_boton_verde(){

  console.log("v9: "+V9);

  $.ajax({
  "method": "POST",
  "url": "./php/boton_verde.php",

  "data": {/*"json":json ,*/ V9:V9}
    
  }) 

  .done(function( info ){
      
      console.log(info);

      cant_pedido=-1;
      scroll2 = scroll;
      console.log("scroll2 : "+scroll2);

      setTimeout(function(){ 
        $(".pedido").remove();
        lista_pedidos();
      },0); 
      

      //location.reload();
  });


}









function click_boton_blanco(){

  console.log("v9: "+V9);

  $.ajax({
  "method": "POST",
  "url": "./php/boton_blanco.php",

  "data": {/*"json":json ,*/ V9:V9}
    
  }) 

  .done(function( info ){
      
      console.log(info);

      cant_pedido=-1;
      scroll2 = scroll;
      console.log("scroll2 : "+scroll2);

      setTimeout(function(){ 
        $(".pedido").remove();
        lista_pedidos();
      },0); 
      

      //location.reload();
  });


}












var scroll = 0 ;
var scroll2 = 0 ;

function click_boton_rojo(){

  console.log("v9: "+V9);

  $.ajax({
  "method": "POST",
  "url": "./php/boton_rojo.php",

  "data": {/*"json":json ,*/ V9:V9}
    
  }) 

  .done(function( info ){
      
      console.log(info);

      cant_pedido=-1;
      scroll2 = scroll;
      console.log("scroll2 : "+scroll2);

      setTimeout(function(){ 
        $(".pedido").remove();
        lista_pedidos();
      },0); 
      

      //location.reload();
  });


}

//document.getElementsByTagName("body")[0].scrollTop = scroll ;




function scroll_en_0() {

  scroll = content_1_DB.scrollTop ;

  //console.log("scroll :"+scroll);
  
}


































function lista_pedidos_actualizada(){

  console.log("CARGA DE PEDIDOS:");
  var deferred = $.Deferred(); 

    $.ajax({
      url: './pedidos.php',
      type: 'GET',
      success: function(response){
      
        for(var xw=1; xw<=2; xw++){
          switch(xw){
            case 1: 
              console.log("case 1");

                console.log("peticion pedidos exitosa");

                var pedido = JSON.parse(response);

                var template =  '<div class="titulo_cpanel">PEDIDOS</div>'; //prueba

                var cont = -1;
                var vector_id = [];
                pedido.forEach(pedido=> {
          
                //var template =  ''; //original 67

                cont++;

                identificador = pedido.id;

                //if(pedido.estado==0){
                
                  
                  template += 
                 
                  `<div class="pedido">`+
                    `<div class="datos" id="estado">`+pedido.estado+`</div>`+
                    `<div class="datos" id="dispositivo">`+pedido.dispositivo+`</div>`+

                    `<div class="datos" id="fecha">`+pedido.fecha+`</div>`+
                    `<div class="datos" id="hora">`+pedido.hora+`</div>`+

                    `<div class="datos" id="nombre">`+pedido.nombre+`</div>`+
                    `<div class="datos" id="telefono">`+pedido.telefono+`</div>`+
                    `<div class="datos" id="correo">`+pedido.correo+`</div>`+
                    `<div class="datos" id="instagram">`+pedido.instagram+`</div>`+
                    `<div class="datos" id="localidad">`+pedido.localidad+`</div>`+
                    `<div class="datos" id="direccion">`+pedido.direccion+`</div>`+
                    
                    `<div class="datos" id="mensaje">`+pedido.mensaje+`</div>`+
                    `<div class="datos" id="lista">`+pedido.lista_productos+`</div>`+

                    `<div id="content_botones_accion">`+
                      `<div class="boton_accion boton_verde" id="boton_verde">Entregado</div>`+
                      `<div class="boton_accion boton_blanco" id="boton_blanco">Proceso</div>`+
                      `<div class="boton_accion boton_rojo" id="boton_rojo">Cancelado</div>`+
                    `</div>`+

                  `</div>`;


                    //$('#content_1_DB').append(template);  
                    


                    console.log(cont);
                    vector_id[cont] = pedido.id;
                    //boton_verde[cont].addEventListener('click',function(){V9=pedido.id;click_boton_verde();});
                    
                //}  
        
              });//aca termina el FOR

          
            $('#content_1_DB').html(template); //prueba original 108
            
            break;




            case 2: 
              console.log("case 3");
              console.log("FIN CARGA DE PEDIDOS");

              /*

              for(L1=cont;L1>=0;L1--){


                var V8 = vector_id[L1];

                console.log("vector_id: "+vector_id[L1]);
                console.log("V8 : "+V8);

                boton_verde[L1].addEventListener('click',function(){V9=V8;click_boton_verde();});

              }
              */
              /*
              boton_verde[0].addEventListener('click',function(){V9=0;click_boton_verde();});
              boton_verde[1].addEventListener('click',function(){V9=1;click_boton_verde();});
              boton_verde[2].addEventListener('click',function(){V9=2;click_boton_verde();});
              boton_verde[3].addEventListener('click',function(){V9=3;click_boton_verde();});
              boton_verde[4].addEventListener('click',function(){V9=4;click_boton_verde();});
              boton_verde[5].addEventListener('click',function(){V9=5;click_boton_verde();});
              

              boton_verde[5].addEventListener('click',function(){V9=5;click_boton_verde();});
              boton_verde[6].addEventListener('click',function(){V9=6;click_boton_verde();});
              boton_verde[7].addEventListener('click',function(){V9=7;click_boton_verde();});
              boton_verde[8].addEventListener('click',function(){V9=8;click_boton_verde();});
              boton_verde[9].addEventListener('click',function(){V9=9;click_boton_verde();});
              boton_verde[10].addEventListener('click',function(){V9=10;click_boton_verde();});
              */

              setTimeout(function(){
                deferred.resolve(); 
                
                console.log(" ");
                console.log(" ");
              },500);  
            break;
          }
        } // FOR end 
      } //success
    }); //ajax
  return deferred.promise(); 
}






