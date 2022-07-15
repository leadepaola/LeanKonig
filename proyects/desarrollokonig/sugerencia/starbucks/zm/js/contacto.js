








var width = window.innerWidth;
var x = 1;
var q = 0;

var click_en_scroll= 0 ;
var scroll;











$(document).ready(function(){





});
















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
/*
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
    /*
    if( $('#name_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Nombre</li>';
      $('#L1').css("border-bottom", "2px solid red")
      nombre_contacto=1;
    } 
    else{
      $('#L1').css("border-bottom", "2px solid black")
      nombre_contacto=0;
    }
    */





    //validacion apellido 
    /*
    if( $('#apellido_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Apellido</li>';
      $('#L2').css("border-bottom", "2px solid red")
      apellido_contacto=1;
    } 
    else{
      $('#L2').css("border-bottom", "2px solid black")
      apellido_contacto=0;
    }
    */



    //validacion telefono 
    /*
    if( $('#phone_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Telefono</li>';
      $('#L3').css("border-bottom", "2px solid red")
      telefono_contacto=1;
    } 
    else{
      $('#L3').css("border-bottom", "2px solid black")
      telefono_contacto=0;
    }
    */


    //validacion email 
    /*
    if( $('#email_contacto').val() == ''){
      datosFaltantes_contacto += '<li class="datos_contacto">Email</li>';
      $('#L4').css("border-bottom", "2px solid red")
      email_contacto=1;
    } 
    else{
      $('#L4').css("border-bottom", "2px solid black")
      email_contacto=0;
    }
    */
    
/*
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



*/












/*

  function enviar_contacto(){
    $('#texto_form').css("display", "none");
    $('#contenedor_formulario').css("height", "487px");
    $('#linea_cartel_ok').css("display", "inherit");


    $('#boton_enviar').css("display", "none");
    $('#cartel_transicion').css("display", "flex");

    var nombre_contacto     = $("#name_contacto").val();
    var telefono_contacto   = $("#phone_contacto").val();
    var email_contacto      = $("#email_contacto").val();
    var mensaje_contacto    = $("#mensaje_contacto").val();
    
    var instagram_contacto  = $("#instagram_contacto").val();
    var twitter_contacto    = $("#twitter_contacto").val();
    var facebook_contacto   = $("#facebook_contacto").val();



    $.ajax({
      "method": "POST",
      "url": "php/contacto.php",
      "data": { nombre:nombre_contacto,  
                telefono:telefono_contacto, 
                email:email_contacto,  

                instagram:instagram_contacto,
                twitter:twitter_contacto,
                facebook:facebook_contacto,

                mensaje:mensaje_contacto   }
    }) 

    .done(function( info ){
      console.log(info);
      enviar_contacto_ok();
    });
  }
*/








/*

  function enviar_contacto_ok(){

    

    
    setTimeout(function(){ 
      $('#cartel_transicion').css("display", "none");

      

      //$('#contenedor_loading_contacto').remove();
      $('#CONTACTOcartel_ok').css("zIndex", "20");
      $('#CONTACTOcartel_ok').css("display", "flex");

      $('#CONTACTOtituloCARTEL_ok').css("display", "flex");
      $('#CONTACTOtituloCARTEL_ok2').css("display", "flex");
    },1500); 

  }

*/




















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
























