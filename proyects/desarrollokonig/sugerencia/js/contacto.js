








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

#  ####   ####  #    #  ####   ####  
# #    # #    # ##   # #    # #      
# #      #    # # #  # #    #  ####  
# #      #    # #  # # #    #      # 
# #    # #    # #   ## #    # #    # 
#  ####   ####  #    #  ####   #### 
*/

var dato_1 = 0;
var dato_2 = 0;
var dato_3 = 0;
var dato_4 = 0;
var dato_5 = 0;


/*mouse on icon*/

$(".contacto_icon.1").mouseover(function(){
  $(".icon_contacto_size.1").css("color",  "rgb(226, 216, 231)");
  $(".contacto_icon_text.1").css("color",  "rgb(226, 216, 231)");
  if (dato_1==0) {
    $(".contacto_icon.1").css("left",  "80%");
    $(".tapa_content_text.1").css("left",  "100%");
    $(".tapa_content_text.1").css("width",  "0%");
    dato_1=1;
  }
});


$(".contacto_icon.2").mouseover(function(){
  $(".icon_contacto_size.2").css("color",  "rgb(226, 216, 231)");
  $(".contacto_icon_text.2").css("color",  "rgb(226, 216, 231)");
  if (dato_2==0) {
    $(".contacto_icon.2").css("left",  "80%");
    $(".tapa_content_text.2").css("left",  "100%");
    $(".tapa_content_text.2").css("width",  "0%");
    dato_2=1;
  }
  
});


$(".contacto_icon.3").mouseover(function(){
  $(".icon_contacto_size.3").css("color",  "rgb(226, 216, 231)");
  $(".contacto_icon_text.3").css("color",  "rgb(226, 216, 231)");
  if (dato_3==0) {
    $(".contacto_icon.3").css("left",  "80%");
    $(".tapa_content_text.3").css("left",  "100%");
    $(".tapa_content_text.3").css("width",  "0%");
    dato_3=1;
  }
  
});


$(".contacto_icon.4").mouseover(function(){
  $(".icon_contacto_size.4").css("color",  "rgb(226, 216, 231)");
  $(".contacto_icon_text.4").css("color",  "rgb(226, 216, 231)");
  if (dato_4==0) {
    $(".contacto_icon.4").css("left",  "80%");
    $(".tapa_content_text.4").css("left",  "100%");
    $(".tapa_content_text.4").css("width",  "0%");
    dato_4=1;
  }
});

$(".contacto_icon.5").mouseover(function(){
  $(".icon_contacto_size.5").css("color",  "rgb(226, 216, 231)");
  $(".contacto_icon_text.5").css("color",  "rgb(226, 216, 231)");
  if (dato_5==0) {
    $(".contacto_icon.5").css("left",  "80%");
    $(".tapa_content_text.5").css("left",  "100%");
    $(".tapa_content_text.5").css("width",  "0%");
    dato_5=1;
  }
});



/*mouse out icons*/

$(".contacto_icon.1").mouseout(function(){
  $(".icon_contacto_size.1").css("color",  "#c6a6d4");
  $(".contacto_icon_text.1").css("color",  "#c6a6d4");
});

$(".contacto_icon.2").mouseout(function(){
  $(".icon_contacto_size.2").css("color",  "#c6a6d4");
  $(".contacto_icon_text.2").css("color",  "#c6a6d4");
});

$(".contacto_icon.3").mouseout(function(){
  $(".icon_contacto_size.3").css("color",  "#c6a6d4");
  $(".contacto_icon_text.3").css("color",  "#c6a6d4");
});

$(".contacto_icon.4").mouseout(function(){
  $(".icon_contacto_size.4").css("color",  "#c6a6d4");
  $(".contacto_icon_text.4").css("color",  "#c6a6d4");
});

$(".contacto_icon.5").mouseout(function(){
  $(".icon_contacto_size.5").css("color",  "#c6a6d4");
  $(".contacto_icon_text.5").css("color",  "#c6a6d4");
});




/*mouse over barra de icons*/

$(".content_texto_icon.1").mouseover(function(){
    $(".icon_contacto_size.1").css("color",  "rgb(226, 216, 231)");
    $(".contacto_icon_text.1").css("color",  "rgb(226, 216, 231)");
});

$(".content_texto_icon.2").mouseover(function(){
    $(".icon_contacto_size.2").css("color",  "rgb(226, 216, 231)");
    $(".contacto_icon_text.2").css("color",  "rgb(226, 216, 231)");
});

$(".content_texto_icon.3").mouseover(function(){
    $(".icon_contacto_size.3").css("color",  "rgb(226, 216, 231)");
    $(".contacto_icon_text.3").css("color",  "rgb(226, 216, 231)");
});

$(".content_texto_icon.4").mouseover(function(){
    $(".icon_contacto_size.4").css("color",  "rgb(226, 216, 231)");
    $(".contacto_icon_text.4").css("color",  "rgb(226, 216, 231)");
});

$(".content_texto_icon.5").mouseover(function(){
    $(".icon_contacto_size.5").css("color",  "rgb(226, 216, 231)");
    $(".contacto_icon_text.5").css("color",  "rgb(226, 216, 231)");
});


/*mouse out barra de icons*/

$(".content_texto_icon.1").mouseout(function(){
  $(".icon_contacto_size.1").css("color",  "#c6a6d4");
  $(".contacto_icon_text.1").css("color",  "#c6a6d4");
});

$(".content_texto_icon.2").mouseout(function(){
  $(".icon_contacto_size.2").css("color",  "#c6a6d4");
  $(".contacto_icon_text.2").css("color",  "#c6a6d4");
});

$(".content_texto_icon.3").mouseout(function(){
  $(".icon_contacto_size.3").css("color",  "#c6a6d4");
  $(".contacto_icon_text.3").css("color",  "#c6a6d4");
});

$(".content_texto_icon.4").mouseout(function(){
  $(".icon_contacto_size.4").css("color",  "#c6a6d4");
  $(".contacto_icon_text.4").css("color",  "#c6a6d4");
});

$(".content_texto_icon.5").mouseout(function(){
  $(".icon_contacto_size.5").css("color",  "#c6a6d4");
  $(".contacto_icon_text.5").css("color",  "#c6a6d4");
});











/*
 ####  #      #  ####  #    # 
#    # #      # #    # #   #  
#      #      # #      ####   
#      #      # #      #  #   
#    # #      # #    # #   #  
 ####  ###### #  ####  #    # 

#  ####   ####  #    #  ####   ####  
# #    # #    # ##   # #    # #      
# #      #    # # #  # #    #  ####  
# #      #    # #  # # #    #      # 
# #    # #    # #   ## #    # #    # 
#  ####   ####  #    #  ####   #### 
*/




$('.contacto_icon.1').click(function(){
  if(dato_1==1){
    $(".contacto_icon.1").css("left",  "0%");
    $(".tapa_content_text.1").css("left",  "0%");
    $(".tapa_content_text.1").css("width",  "100%");
    setTimeout(function(){ 
      dato_1=0;
    },1000);
  }
});

$('.contacto_icon.2').click(function(){
  if(dato_2==1){
    $(".contacto_icon.2").css("left",  "0%");
    $(".tapa_content_text.2").css("left",  "0%");
    $(".tapa_content_text.2").css("width",  "100%");
    setTimeout(function(){ 
      dato_2=0;
    },1000);
  }
});


$('.contacto_icon.3').click(function(){
  if(dato_3==1){
    $(".contacto_icon.3").css("left",  "0%");
    $(".tapa_content_text.3").css("left",  "0%");
    $(".tapa_content_text.3").css("width",  "100%");
    setTimeout(function(){ 
      dato_3=0;
    },1000);
  }
});


$('.contacto_icon.4').click(function(){
  if(dato_4==1){
    $(".contacto_icon.4").css("left",  "0%");
    $(".tapa_content_text.4").css("left",  "0%");
    $(".tapa_content_text.4").css("width",  "100%");
    setTimeout(function(){ 
      dato_4=0;
    },1000);
  }
});

$('.contacto_icon.5').click(function(){
  if(dato_5==1){
    $(".contacto_icon.5").css("left",  "0%");
    $(".tapa_content_text.5").css("left",  "0%");
    $(".tapa_content_text.5").css("width",  "100%");
    setTimeout(function(){ 
      dato_5=0;
    },1000);
  }
});






/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 

#####   ####  #####  ####  #    # 
#    # #    #   #   #    # ##   # 
#####  #    #   #   #    # # #  # 
#    # #    #   #   #    # #  # # 
#    # #    #   #   #    # #   ## 
#####   ####    #    ####  #    # 

###### #    # #    # #   ##   #####  
#      ##   # #    # #  #  #  #    # 
#####  # #  # #    # # #    # #    # 
#      #  # # #    # # ###### #####  
#      #   ##  #  #  # #    # #   #  
###### #    #   ##   # #    # #    # 
*/



/*boton enviar*/
$("#boton_enviar").mouseover(function(){
    $("#boton_enviar").css("color",  "rgb(154, 107, 175)");
});


$("#boton_enviar").mouseout(function(){
  $("#boton_enviar").css("color",  "#c6a6d4");
});


/*boton ok*/

$("#boton_cartel_error").mouseover(function(){
    $("#boton_cartel_error").css("color",  "rgb(154, 107, 175)");
});


$("#boton_cartel_error").mouseout(function(){
  $("#boton_cartel_error").css("color",  "#c6a6d4");
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

    //$('#cartel_transicion').css("display", "flex");


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
    //$('#cartel_transicion').css("display", "none"); sacar borrador


    $('#contenedor_loading_contacto').remove();
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












