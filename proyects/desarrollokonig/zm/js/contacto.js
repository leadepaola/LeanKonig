








var width = window.innerWidth;
var x = 1;
var q = 0;

var click_en_scroll= 0 ;
var scroll;











$(document).ready(function(){





});













/*
 ####   ####  #####   ####  #      #      
#      #    # #    # #    # #      #      
 ####  #      #    # #    # #      #      
     # #      #####  #    # #      #      
#    # #    # #   #  #    # #      #      
 ####   ####  #    #  ####  ###### ###### 

#####    ##   #####    ##   
#    #  #  #  #    #  #  #  
#    # #    # #    # #    # 
#####  ###### #####  ###### 
#      #    # #   #  #    # 
#      #    # #    # #    # 
                                        #   
#####   ####  #####  ####  #    #      ##   
#    # #    #   #   #    # ##   #     # #   
#####  #    #   #   #    # # #  #       #   
#    # #    #   #   #    # #  # #       #   
#    # #    #   #   #    # #   ##       #   
#####   ####    #    ####  #    #     ##### 
*/

//Cada vez que se hace scroll se ingresa a la funcion
$('#content_inside_web').scroll(function(){
  scroll = $('#content_inside_web').scrollTop();
  //console.log("scroll:"+scroll);

    if(scroll==0 ){
        $('#contendor_boton_1').css("display", "flex");
    }
    if(scroll>0){
        $('#contendor_boton_1').css("display", "none");
    }
});






/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 

                   #   
# #    #  ####    ##   
# ##  ## #    #  # #   
# # ## # #         #   
# #    # #  ###    #   
# #    # #    #    #   
# #    #  ####   ##### 
*/
/*
$("#contenedor_de_imgs1").mouseover(function(){
  $("#contenedor_de_imgs1").css("zIndex", "65");
  $("#contenedor_de_imgs2").css("zIndex", "10");
  $("#contenedor_de_imgs3").css("zIndex", " 5");

  $("#contenedor_de_imgs1").css("width",  "27%");
  $("#contenedor_de_imgs1").css("height", "99%");
  $("#contenedor_de_imgs1").css("top",    "20%");
  $("#contenedor_de_imgs1").css("left",   " 5%");
});
$("#contenedor_de_imgs1").mouseout(function(){
  $("#contenedor_de_imgs1").css("width",  "24%");
  $("#contenedor_de_imgs1").css("height", "97%");
  $("#contenedor_de_imgs1").css("top",    "21%");
  $("#contenedor_de_imgs1").css("left",   " 6%");
});
*/
/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 

                 #####  
# #    #  ####  #     # 
# ##  ## #    #       # 
# # ## # #       #####  
# #    # #  ### #       
# #    # #    # #       
# #    #  ####  ####### 
*/
/*
$("#contenedor_de_imgs2").mouseover(function(){
  $("#contenedor_de_imgs1").css("zIndex", "10");
  $("#contenedor_de_imgs2").css("zIndex", "15");
  $("#contenedor_de_imgs3").css("zIndex", " 5");

  $("#contenedor_de_imgs2").css("width",  "23%");
  $("#contenedor_de_imgs2").css("height", "62%");
  $("#contenedor_de_imgs2").css("top",    "29%");
  $("#contenedor_de_imgs2").css("left",   "35%");

});

$("#contenedor_de_imgs2").mouseout(function(){
  $("#contenedor_de_imgs2").css("width",  "21%");
  $("#contenedor_de_imgs2").css("height", "60%");
  $("#contenedor_de_imgs2").css("top",    "30%");
  $("#contenedor_de_imgs2").css("left",   "36%");

});

*/




/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 

                    #####  
# #    #  ####     #     # 
# ##  ## #    #    #     # 
# # ## # #          ###### 
# #    # #  ###          # 
# #    # #    #    #     # 
# #    #  ####      #####  
*/
/*
$("#contenedor_de_imgs9").mouseover(function(){
  $("#contenedor_de_imgs9").css("top", "33%");
});


$("#contenedor_de_imgs9").mouseout(function(){
  $("#contenedor_de_imgs9").css("top", "86%");
});
*/


/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 

                                        #   
#####   ####  #####  ####  #    #      ##   
#    # #    #   #   #    # ##   #     # #   
#####  #    #   #   #    # # #  #       #   
#    # #    #   #   #    # #  # #       #   
#    # #    #   #   #    # #   ##       #   
#####   ####    #    ####  #    #     ##### 
*/
/*
$("#contendor_boton_1").mouseover(function(){
  $("#boton_1").css("width",  "14%");
  $("#boton_1").css("top",    "43%");
});


$("#contendor_boton_1").mouseout(function(){
  $("#boton_1").css("width",  "11%");
  $("#boton_1").css("top",    "44%");
});
*/















/*
 ####  #      #  ####  #    # 
#    # #      # #    # #   #  
#      #      # #      ####   
#      #      # #      #  #   
#    # #      # #    # #   #  
 ####  ###### #  ####  #    # 

#####   ####  #####  ####  #    # 
#    # #    #   #   #    # ##   # 
#####  #    #   #   #    # # #  # 
#    # #    #   #   #    # #  # # 
#    # #    #   #   #    # #   ## 
#####   ####    #    ####  #    #

#####  ######  ####  #####  #        ##   ######   ##   #    # # ###### #    # #####  ####  
#    # #      #      #    # #       #  #      #   #  #  ##  ## # #      ##   #   #   #    # 
#    # #####   ####  #    # #      #    #    #   #    # # ## # # #####  # #  #   #   #    # 
#    # #           # #####  #      ######   #    ###### #    # # #      #  # #   #   #    # 
#    # #      #    # #      #      #    #  #     #    # #    # # #      #   ##   #   #    # 
#####  ######  ####  #      ###### #    # ###### #    # #    # # ###### #    #   #    ####  
*/

$('#contendor_boton_1').click(function(){


      $('#content_1').css("top", "-100%");  
      $('#content_2').css("top", "0%");
      $('#contendor_boton_1').css("display", "none");

      setTimeout(function(){ 

          $('#content_1').css("transition", "0s");  
          $('#content_2').css("transition", "0s");

          $('#content_1').css("top", "0%");  
          $('#content_2').css("top", "100%");
          
          $("#a").get(0).click();
        
      },1000); 


      setTimeout(function(){ 

          $('#content_1').css("transition", "1s");  
          $('#content_2').css("transition", "1s");

          

      },1100); 


});










  /*
   ####  #      #  ####  #    # 
  #    # #      # #    # #   #  
  #      #      # #      ####   
  #      #      # #      #  #   
  #    # #      # #    # #   #  
   ####  ###### #  ####  #    # 

  ###### #    # #    # #   ##   #####  
  #      ##   # #    # #  #  #  #    # 
  #####  # #  # #    # # #    # #    # 
  #      #  # # #    # # ###### #####  
  #      #   ##  #  #  # #    # #   #  
  ###### #    #   ##   # #    # #    # 
  */

  $('#boton_enviar').click(function(){

    var datosFaltantes_contacto = '';
    var nombre_contacto=0;
    var apellido_contacto=0;
    var telefono_contacto=0;
    var email_contacto=0;
    var mensaje_contacto=0;
    var error_contacto=0;


    //$('#contenedorFormulario').css("zIndex", "6");
    //$('#CONTACTO_texto_enviar').css("zIndex", "6");
    //$('#FICHAtransparente_Texto_enviar').css("zIndex", "6");

    //$('#PLANTILLA-Contacto').append(CONTACTO_loading);

    $('#cartel_transicion').css("display", "flex");


    //validacion nombre 
    if( $('#name_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Nombre</li>';
      $('#L1').css("border-bottom", "2px solid red")
      nombre_contacto=1;
    } 
    else{
      $('#L1').css("border-bottom", "2px solid black")
      nombre_contacto=0;
    }

    //validacion apellido 
    if( $('#apellido_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Apellido</li>';
      $('#L2').css("border-bottom", "2px solid red")
      apellido_contacto=1;
    } 
    else{
      $('#L2').css("border-bottom", "2px solid black")
      apellido_contacto=0;
    }

    //validacion telefono 
    if( $('#phone_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Telefono</li>';
      $('#L3').css("border-bottom", "2px solid red")
      telefono_contacto=1;
    } 
    else{
      $('#L3').css("border-bottom", "2px solid black")
      telefono_contacto=0;
    }

    //validacion email 
    if( $('#email_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Email</li>';
      $('#L4').css("border-bottom", "2px solid red")
      email_contacto=1;
    } 
    else{
      $('#L4').css("border-bottom", "2px solid black")
      email_contacto=0;
    }

    //validacion mensaje 
    if( $('#mensaje_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Mensaje</li>';
      $('#linea_estetica_input2').css("border-bottom", "2px solid red")
      mensaje_contacto=1;
    } 
    else{
      $('#linea_estetica_input2').css("border-bottom", "2px solid black")
      mensaje_contacto=0;
    }



    setTimeout(function(){ 
      //Hay errores?
      if(nombre_contacto==1 || apellido_contacto==1 || telefono_contacto==1 || email_contacto==1 || mensaje_contacto==1){
        error_contacto=1;
      }

      //Se muestra cartel con los datos faltantes si los hay
      if(error_contacto==1){
        $('#ulCONTACTO').append(datosFaltantes_contacto);

        //$('#contenedor_loading_contacto').remove();
        //$('#CONTACTOcartelERROR').css("zIndex", "20");
        $('#cartel_transicion').css("display", "none");
        $('#CONTACTOcartelERROR').css("display", "unset");


        $('#boton_enviar').css("display", "none");
        $('#boton_cartel_error').css("display", "flex");
      }
      else{
        enviar_contacto();
      }     
    },0); 

  });



  function enviar_contacto(){

    $('#boton_enviar').css("display", "none");
    $('#cartel_transicion').css("display", "flex");

    var nombre_contacto     = $("#name_contacto").val();
    var apellido_contacto   = $("#apellido_contacto").val();
    var telefono_contacto   = $("#phone_contacto").val();
    var email_contacto      = $("#email_contacto").val();
    var mensaje_contacto    = $("#mensaje_contacto").val();
    
    $.ajax({
      "method": "POST",
      "url": "php/contacto.php",
      "data": { nombre:nombre_contacto, apellido:apellido_contacto, 
                telefono:telefono_contacto, 
                email:email_contacto,  mensaje:mensaje_contacto   }
    }) 

    .done(function( info ){
      console.log(info);
      enviar_contacto_ok();
    });
  }


  function enviar_contacto_ok(){
    $('#cartel_transicion').css("display", "none");


    //$('#contenedor_loading_contacto').remove();
    $('#CONTACTOcartel_ok').css("zIndex", "20");
    $('#CONTACTOcartel_ok').css("display", "flex");
    
    setTimeout(function(){ 
      $('#CONTACTOtituloCARTEL_ok').css("display", "flex");
    },500); 

  }












  /*
   ####  #      #  ####  #    # 
  #    # #      # #    # #   #  
  #      #      # #      ####   
  #      #      # #      #  #   
  #    # #      # #    # #   #  
   ####  ###### #  ####  #    # 
    
   ####  #    # 
  #    # #   #  
  #    # ####   
  #    # #  #   
  #    # #   #  
   ####  #    # 
  */


  $('#boton_cartel_error').click(function(){
    $('#CONTACTOcartelERROR').css("display", "none");

    $('.datos_contacto').remove();

    $('#boton_enviar').css("display", "flex");
    $('#boton_cartel_error').css("display", "none");
  });

































/*    FUNCION
var contendor_boton_1            = document.getElementById("contendor_boton_1");


contendor_boton_1.addEventListener('click',function(){
  console.log("hola");
  document.getElementById("a").click();

});
*/














/*
$('#contendor_web').click(function(){
	//console.log("3:"+$("#content_1").height()); 
    if(x==0){
    	

		        document.getElementById("content_inside_web").scrollTop = 700;
		    	console.log("x:"+x);
	    
    	
    	
    }
    else{
    	x=1;
    	console.log("asd asd x:"+x);
    }

});
*/






//function scroll_en_0() {
  //console.log("scroll:"+document.getElementById("content_inside_web").scrollTop);
  //var elmnt = document.getElementById("myDIV");
  //var x = elmnt.scrollLeft;
  //var y = elmnt.scrollTop;
  //document.getElementById ("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";
  //document.getElementsByTagName("body")[0].scrollTop = 0 ;
  //q = document.getElementById("content_inside_web").scrollTop
  //console.log("q:"+q);


  //elmnt.scrollTop = 0;
//}












//Muestran el tamaño de la pantalla 
  /*
  console.log("1:"+$(window).width()); 
  console.log("2:"+width);
  console.log("3:"+$("#content_inside_web").width()); 
  */


//Cada vez que se cambia el tamaño de "window" se ingresa a la funcion
/*
$("#content_inside_web").resize(function(){
    console.log("Cambio:"+window.innerWidth);
    console.log("hola");
});
*/


















/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 

                      #   
# #    #  ####       ##   
# ##  ## #    #     # #   
# # ## # #            #   
# #    # #  ###       #   
# #    # #    #       #   
# #    #  ####      ##### 

 ####  #    # # #####  ####  #    # 
#      #    # #   #   #    # #    # 
 ####  #    # #   #   #      ###### 
     # # ## # #   #   #      #    # 
#    # ##  ## #   #   #    # #    # 
 ####  #    # #   #    ####  #    # 
*/


/*
var ultimo_mousever_imgs = 1;



$("#contenedor_de_imgs1").mouseover(function(){
  
  
  
  switch(ultimo_mousever_imgs){

    case 2:

      setTimeout(function(){ 
        $("#contenedor_de_imgs1").css("transition",    "0s");
        $("#contenedor_de_imgs2").css("transition",    "0s");

        $("#contenedor_de_imgs1").css("zIndex", "15");
        $("#contenedor_de_imgs2").css("zIndex", "10");
        $("#contenedor_de_imgs3").css("zIndex", " 5");
      },0);
      /*
      setTimeout(function(){ 
        $("#contenedor_de_imgs1").css("transition",    ".5s");
        $("#contenedor_de_imgs2").css("transition",    ".5s");

        //$("#contenedor_de_imgs1").css("width",  "32%");
        $("#contenedor_de_imgs1").css("height", "81%");
        $("#contenedor_de_imgs1").css("top",    "16%");
        $("#contenedor_de_imgs1").css("left",   " 9%");

        $("#contenedor_de_imgs2").css("width",  "30%");
        $("#contenedor_de_imgs2").css("height", "73%");
        $("#contenedor_de_imgs2").css("top",    "20%");
        $("#contenedor_de_imgs2").css("left",   "19%");
      },100); 
      


      ultimo_mousever_imgs = 1;
      console.log("mouseover en IMG1");
    break;

    case 3:
      $("#contenedor_de_imgs1").css("zIndex", "15");
      $("#contenedor_de_imgs2").css("zIndex", "5");
      $("#contenedor_de_imgs3").css("zIndex", "10");



      ultimo_mousever_imgs = 1;
      console.log("mouseover en IMG1");
    break;
  }
  
  
});
*/





/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 

                 #####  
# #    #  ####  #     # 
# ##  ## #    #       # 
# # ## # #       #####  
# #    # #  ### #       
# #    # #    # #       
# #    #  ####  ####### 

 ####  #    # # #####  ####  #    # 
#      #    # #   #   #    # #    # 
 ####  #    # #   #   #      ###### 
     # # ## # #   #   #      #    # 
#    # ##  ## #   #   #    # #    # 
 ####  #    # #   #    ####  #    # 
 */


/*
$("#contenedor_de_imgs2").click(function(){
  
  

  switch(ultimo_mousever_imgs){
    case 1:
      

      setTimeout(function(){ 
        $("#contenedor_de_imgs1").css("transition",    "0s");
        $("#contenedor_de_imgs2").css("transition",    "0s");

        $("#contenedor_de_imgs1").css("zIndex", "10");
        $("#contenedor_de_imgs2").css("zIndex", "15");
        $("#contenedor_de_imgs3").css("zIndex", " 5");
      },0);

      /*
      setTimeout(function(){ 
        $("#contenedor_de_imgs1").css("transition",    ".5s");
        $("#contenedor_de_imgs2").css("transition",    ".5s");

        //$("#contenedor_de_imgs1").css("width",  "30%");
        $("#contenedor_de_imgs1").css("height", "73%");
        $("#contenedor_de_imgs1").css("top",    "20%");
        $("#contenedor_de_imgs1").css("left",   "19%");

        //$("#contenedor_de_imgs2").css("width",  "32%");
        $("#contenedor_de_imgs2").css("height", "81%");
        $("#contenedor_de_imgs2").css("top",    "16%");
        $("#contenedor_de_imgs2").css("left",   " 9%");
      },100); 
      
      

      ultimo_mousever_imgs = 2;
      console.log("mouseover en IMG2");
    break;


    case 3:
      $("#contenedor_de_imgs1").css("zIndex", " 5");
      $("#contenedor_de_imgs2").css("zIndex", "15");
      $("#contenedor_de_imgs3").css("zIndex", "10");



      ultimo_mousever_imgs = 2;
      console.log("mouseover en IMG2");
    break;

  }

});

*/






/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 

                 #####  
# #    #  ####  #     # 
# ##  ## #    #       # 
# # ## # #       #####  
# #    # #  ### #       
# #    # #    # #       
# #    #  ####  ####### 

 ####  #    # # #####  ####  #    # 
#      #    # #   #   #    # #    # 
 ####  #    # #   #   #      ###### 
     # # ## # #   #   #      #    # 
#    # ##  ## #   #   #    # #    # 
 ####  #    # #   #    ####  #    # 
 */
/*
$("#contenedor_de_imgs3").click(function(){
  
  

  switch(ultimo_mousever_imgs){
    case 1:
      $("#contenedor_de_imgs1").css("zIndex", "10");
      $("#contenedor_de_imgs2").css("zIndex", " 5");
      $("#contenedor_de_imgs3").css("zIndex", "15");



      ultimo_mousever_imgs = 3;
      console.log("mouseover en IMG3");
    break;

    case 2:
      $("#contenedor_de_imgs1").css("zIndex", "5");
      $("#contenedor_de_imgs2").css("zIndex", "10");
      $("#contenedor_de_imgs3").css("zIndex", "15");



      ultimo_mousever_imgs = 3;
      console.log("mouseover en IMG3");
    break;

  }
  


});

*/






