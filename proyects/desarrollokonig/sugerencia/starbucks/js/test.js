







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
*/




/*boton_siguiente_input*/

$("#boton_siguiente_input").mouseover(function(){
  $("#boton_siguiente_input").css("fontWeight",  "400");
  $("#boton_siguiente_input").css("color",  "white");
  $("#boton_siguiente_input").css("backgroundColor",  "black");
});


$("#boton_siguiente_input").mouseout(function(){
  $("#boton_siguiente_input").css("fontWeight",  "600");
  $("#boton_siguiente_input").css("color",  "black");
  $("#boton_siguiente_input").css("backgroundColor",  "white");
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

 ####  #  ####  #    # # ###### #    # ##### ###### 
#      # #    # #    # # #      ##   #   #   #      
 ####  # #      #    # # #####  # #  #   #   #####  
     # # #  ### #    # # #      #  # #   #   #      
#    # # #    # #    # # #      #   ##   #   #      
 ####  #  ####   ####  # ###### #    #   #   ###### 
*/

$("#nombre_comercio").keypress(function(e){
if(e.which == 13) {
    click_btn_siguiente();
}

});


$('#boton_siguiente_input').click(function(){
	click_btn_siguiente();
});





function click_btn_siguiente(){
	//validacion campo nombre de comercio 
	var input_nombre = $('#nombre_comercio').val();
	input_nombre.trim();

    if(    input_nombre == "" || input_nombre == " " || input_nombre == "  " 
    	|| input_nombre == "   "
    	|| input_nombre == "    " || input_nombre == "     " || input_nombre == "      "
    	|| input_nombre == "       " || input_nombre == "        " 
    	|| input_nombre == "         " || input_nombre == "          "
    	|| input_nombre == "           " || input_nombre == "            "
    	|| input_nombre == "             " || input_nombre == "              "
    	|| input_nombre == "              " || input_nombre == "               "
    	|| input_nombre == "                " || input_nombre == "                 "
    	|| input_nombre == "                  " || input_nombre == "                   "
    	|| input_nombre == "                    "
    	){

      	$('.mensaje_error_siguiente_test').css("display", "block");
      	$('#nombre_comercio').css("border", "1px solid red");
      	$(".mensaje_error_siguiente_test").html("No haz llenado el campo solicitado *");

    } 
    else{

    	if(input_nombre.length >20){
	    	console.log("mayor a 20");
	    	$('.mensaje_error_siguiente_test').css("display", "block");
      		$('#nombre_comercio').css("border", "1px solid red");
      		$(".mensaje_error_siguiente_test").html("Máximo 20 caracteres *");
	    }	
	    else{
	    	var nombre_comercio     = $("#nombre_comercio").val();

		    $("#titulo1").html(nombre_comercio);
		    $("#boton_enviar").css("display", "flex");

		    $("#contenedor_texto_muestra_2").remove();
	    	$('#contenedor_texto_muestra').append(txt_paso_2);
	    }
	    
    }




    
}


var txt_paso_2 = 

	'<div id="contenedor_texto_muestra_2">'+
		'<div id="titulo_muestra">'+
			'Vista desde celular'+
			'<div id="linea_titulo_muestra"></div>'+
		'</div>'+
		'<div id="texto_muestra">'+
			'A la derecha se muestra cómo se visualizará cuando '+
			'escaneen el código QR o escriban el link en su navegador'+
			'<br/><br/>'+
			'<span class="negrita negro" id="asdf" >Llená los '+
			'campos</span> que desees '+
			'<span class="negrita negro" id="asdf" >y luego haz click en '+
			'enviar</span>'+
			' para seguir con el test'+
		'</div>'+
	'</div>'
;






























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


    $('#texto_form').css("display", "none");
    $('#contenedor_formulario').css("height", "487px");
    $('#linea_cartel_ok').css("display", "inherit");


    $('#boton_enviar').css("display", "none");
    $('#cartel_transicion').css("display", "flex");

    var nombre_contacto     = $("#name_contacto").val();
    var telefono_contacto   = $("#phone_contacto").val();
    var email_contacto      = $("#email_contacto").val();
    
    var facebook_contacto   = $("#facebook_contacto").val();
    var twitter_contacto    = $("#twitter_contacto").val();
    var instagram_contacto  = $("#instagram_contacto").val();

    var mensaje_contacto    = $("#mensaje_contacto").val();

    var now = new Date(Date.now());

    var hora_  = now.getHours();
    
      switch(hora_){
        case 0:
           var hora   = "00";   
        break;
        case 1:
           var hora   = "01";   
        break;
        case 2:
           var hora   = "02";   
        break;
        case 3:
           var hora   = "03";   
        break;
        case 4:
           var hora   = "04";   
        break;
        case 5:
           var hora   = "05";   
        break;
        case 6:
           var hora   = "06";   
        break;
        case 7:
           var hora   = "07";   
        break;
        case 8:
           var hora   = "08";   
        break;
        case 9:
           var hora   = "09";   
        break;
        default:
          var hora   = hora_; 
        break;
      }

    var minutos_ = now.getMinutes();

      switch(minutos_){
        case 0:
           var minutos   = "00";   
        break;
        case 1:
           var minutos   = "01";   
        break;
        case 2:
           var minutos   = "02";   
        break;
        case 3:
           var minutos   = "03";   
        break;
        case 4:
           var minutos   = "04";   
        break;
        case 5:
           var minutos   = "05";   
        break;
        case 6:
           var minutos   = "06";   
        break;
        case 7:
           var minutos   = "07";   
        break;
        case 8:
           var minutos   = "08";   
        break;
        case 9:
           var minutos   = "09";   
        break;
        default:
          var minutos   = minutos_; 
        break;
      }


    var time  = hora + ":" + minutos;

    var dia   = now.getDate();
    var mes_  = now.getMonth();
    var mes   = mes_+1;
    var ano   = now.getFullYear();
    var fecha = dia + "/" + mes + "/" + ano;
    

    //Creando nueva sugerencia

    var nueva_sugerencia = '';

    nueva_sugerencia +=

      '<div class="pedido pedido1">'+
        '<div id="linea_prueba"></div>'+
        '<div id="linea_prueba2"></div>'+

        '<div class="datos" id="num_sug">sugerencia N° 5</div>'+
        '<div class="datos" id="fecha">'+fecha+'</div>'+
        '<div class="datos" id="hora">'+time+'</div>';

        //Verificando campo nombre
    if( $('#name_contacto').val() != ''){
      nueva_sugerencia += 
        '<div class="datos" id="nombre">'+nombre_contacto+'</div>'+
        '<div class="datos" id="vacio"></div>';
    }else{
      nueva_sugerencia += 
      '<div class="datos" id="vacio"></div>';
    }

    
        //Verificando campo telefono
    if( $('#phone_contacto').val() != ''){
      nueva_sugerencia += 
        '<div class="datos" id="telefono">'+
          '<img src="../img/icons/whatsapp_black_24.png" class="icon_dato">'+
          '<div class="dato_posicion">'+telefono_contacto+'</div>'+
        '</div>';
    }  


    //Verificando campo email
    if( $('#email_contacto').val() != ''){
      nueva_sugerencia += 
        '<div class="datos" id="correo">'+
          '<img src="../img/icons/email_black_2_64.png" class="icon_dato">'+
          '<div class="dato_posicion">'+email_contacto+'</div>'+
        '</div>';
    }  


    //Verificando campo facebook
    if( $('#facebook_contacto').val() != ''){
      nueva_sugerencia += 
        '<div class="datos" id="facebook">'+
          '<img src="../img/icons/facebook_black_64.png" class="icon_dato">'+
          '<div class="dato_posicion">'+facebook_contacto+'</div>'+
        '</div>';
    }  



    //Verificando campo twitter
    if( $('#twitter_contacto').val() != ''){
      nueva_sugerencia += 
        '<div class="datos" id="twitter">'+
          '<img src="../img/icons/twitter_black_64.png" class="icon_dato">'+
          '<div class="dato_posicion">'+twitter_contacto+'</div>'+
        '</div>';
    }  



    //Verificando campo instagram
    if( $('#instagram_contacto').val() != ''){
      nueva_sugerencia += 
        '<div class="datos" id="instagram">'+
          '<img src="../img/icons/instagram_black_64.png" class="icon_dato">'+
          '<div class="dato_posicion">'+instagram_contacto+'</div>'+
        '</div>';
    }  


    //mensaje
    if( $('#mensaje_contacto').val() != ''){
      nueva_sugerencia += 
          '<div class="datos" id="vacio"></div>'+
          '<div class="datos" id="mensaje">'+
            mensaje_contacto+
          '</div>'+
        '</div>';
    }  





    $('#cuerpo_info2').prepend(nueva_sugerencia);











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











  function enviar_contacto_ok(){

    
    setTimeout(function(){ 
      $('#cartel_transicion').css("display", "none");

  
      //$('#contenedor_loading_contacto').remove();
      $('#CONTACTOcartel_ok').css("zIndex", "20");
      $('#CONTACTOcartel_ok').css("display", "flex");

      $('#CONTACTOtituloCARTEL_ok').css("display", "flex");
      $('#CONTACTOtituloCARTEL_ok2').css("display", "flex");


      $("#titulo_muestra").html(" ");
      $("#texto_muestra").html(" ");

    },1500); 



    setTimeout(function(){ 

      $('#texto_muestra').css("textAlign", "end");


      $("#titulo_muestra").html("Mensaje enviado");

      $("#texto_muestra").html(
        "La sugerencia ya ha sido enviada. "+
        "Luego de esto, el cliente ya no tendrá más para hacer. "+
        "<br/><br/>"+
        '<span class="negrita negro" id="asdf" >'+
          "A continuación verás el panel "+
        '</span>'+
        'donde se te mostrará las sugerencias '+
        "como la que has dejado recién. "+
        "<br/><br/><br/><br/>"+
        '<span class="btn_gral_test" id="boton_ver_panel" >'+
          "Ver panel"+
        "</span> "+
        ""+
        "");



          /*
          #    #  ####  #    #  ####  ######  ####  #    # ###### #####  
          ##  ## #    # #    # #      #      #    # #    # #      #    # 
          # ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
          #    # #    # #    #      # #      #    # #    # #      #####  
          #    # #    # #    # #    # #      #    #  #  #  #      #   #  
          #    #  ####   ####   ####  ######  ####    ##   ###### #    # 
          */




          /*boton_ver_panel*/

          $("#boton_ver_panel").mouseover(function(){
              $("#boton_ver_panel").css("fontWeight",  "400");
              $("#boton_ver_panel").css("color",  "white");
              $("#boton_ver_panel").css("backgroundColor",  "black");
          });


          $("#boton_ver_panel").mouseout(function(){
              $("#boton_ver_panel").css("fontWeight",  "600");
              $("#boton_ver_panel").css("color",  "black");
              $("#boton_ver_panel").css("backgroundColor",  "white");
          });















        $('#boton_ver_panel').click(function(){
          clic_ver_panel();
        });
    },2000); 



  }







/*
 ####  #      #  ####  #    # 
#    # #      # #    # #   #  
#      #      # #      ####   
#      #      # #      #  #   
#    # #      # #    # #   #  
 ####  ###### #  ####  #    # 

#    # ###### #####     #####    ##   #    # ###### #      
#    # #      #    #    #    #  #  #  ##   # #      #      
#    # #####  #    #    #    # #    # # #  # #####  #      
#    # #      #####     #####  ###### #  # # #      #      
 #  #  #      #   #     #      #    # #   ## #      #      
  ##   ###### #    #    #      #    # #    # ###### ######  
*/

  function clic_ver_panel(){
    
    //$('#contenedor_texto_muestra_2').css("top", "126px");

    $("#titulo1").html("PANEL - STARBUCKS");

    $("#titulo_muestra").html("Sección panel");

      $("#texto_muestra").html(
        '<span class="negrita negro" id="asdf" >'+
        "Solo vos tendrás acceso a esta sección"+
        '</span>'+
        ".<br/><br/>"+
        "Aqui verás todas las sugerencias que dejen tus clientes "+
        'junto con la fecha y hora en la que fueron realizadas.'+
        '<br/><br/>'+
        'Así lo verás desde tu celular. También podrás ingresar desde tu pc '+
        'para visualizar las sugerencias.'+    
        '<br/><br/>'+  
        'Los datos personales aparecen solo si los han dejado. '+
        'Recuerda que el único campo obligatorio para llenar es el de mensaje.'+
      
        "<br/><br/><br/><br/>"+

        '<span class="btn_gral_test" id="btn_nuevo_test" >'+
          "Nuevo Test"+
        "</span> "+

        '<span class="btn_gral_test" id="btn_quiero_test" >'+
          "Ver planes"+
        "</span> "+
        
        "<br/><br/><br/><br/>"+
        //'<div class="espacio_vacio"></div>'+
        "");

          /*
          #    #  ####  #    #  ####  ######  ####  #    # ###### #####  
          ##  ## #    # #    # #      #      #    # #    # #      #    # 
          # ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
          #    # #    # #    #      # #      #    # #    # #      #####  
          #    # #    # #    # #    # #      #    #  #  #  #      #   #  
          #    #  ####   ####   ####  ######  ####    ##   ###### #    # 
          */


          /*btn_quiero_test*/

          $("#btn_quiero_test").mouseover(function(){
              $("#btn_quiero_test").css("fontWeight",  "400");
              $("#btn_quiero_test").css("color",  "white");
              $("#btn_quiero_test").css("backgroundColor",  "black");
          });


          $("#btn_quiero_test").mouseout(function(){
              $("#btn_quiero_test").css("fontWeight",  "600");
              $("#btn_quiero_test").css("color",  "black");
              $("#btn_quiero_test").css("backgroundColor",  "white");
          });



          /*btn_nuevo_test*/

          $("#btn_nuevo_test").mouseover(function(){
              $("#btn_nuevo_test").css("fontWeight",  "400");
              $("#btn_nuevo_test").css("color",  "white");
              $("#btn_nuevo_test").css("backgroundColor",  "black");
          });


          $("#btn_nuevo_test").mouseout(function(){
              $("#btn_nuevo_test").css("fontWeight",  "600");
              $("#btn_nuevo_test").css("color",  "black");
              $("#btn_nuevo_test").css("backgroundColor",  "white");
          });


          
          /*
           ####  #      #  ####  #    # 
          #    # #      # #    # #   #  
          #      #      # #      ####   
          #      #      # #      #  #   
          #    # #      # #    # #   #  
           ####  ###### #  ####  #    # 
          */

          /*btn_nuevo_test*/

          $('#btn_nuevo_test').click(function(){
            click_nuevo_test();
          });


          /*btn_quiero_test*/

          $('#btn_quiero_test').click(function(){
            click_quiero_test();
          });



    $("#cuerpo_info").remove();  

    $('#cuerpo_info2').css("display", "inherit");
    
    //lista_pedidos();
    
  }








/*
 ####  #      #  ####  #    # 
#    # #      # #    # #   #  
#      #      # #      ####   
#      #      # #      #  #   
#    # #      # #    # #   #  
 ####  ###### #  ####  #    # 

#    # #    # ###### #    #  ####  
##   # #    # #      #    # #    # 
# #  # #    # #####  #    # #    # 
#  # # #    # #      #    # #    # 
#   ## #    # #       #  #  #    # 
#    #  ####  ######   ##    #### 

##### ######  ####  ##### 
  #   #      #        #   
  #   #####   ####    #   
  #   #           #   #   
  #   #      #    #   #   
  #   ######  ####    #
*/


function click_nuevo_test(){
  location.reload();
}





/*
 ####  #      #  ####  #    # 
#    # #      # #    # #   #  
#      #      # #      ####   
#      #      # #      #  #   
#    # #      # #    # #   #  
 ####  ###### #  ####  #    # 

#    # ###### #####  
#    # #      #    # 
#    # #####  #    # 
#    # #      #####  
 #  #  #      #   #  
  ##   ###### #    # 

#####  #        ##   #    # ######  ####  
#    # #       #  #  ##   # #      #      
#    # #      #    # # #  # #####   ####  
#####  #      ###### #  # # #           # 
#      #      #    # #   ## #      #    # 
#      ###### #    # #    # ######  ####  
*/

function click_quiero_test(){
  window.location.href = "../zPlanes";
}




































