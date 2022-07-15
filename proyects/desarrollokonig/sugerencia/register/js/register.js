








/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 
*/




/*.btn_logeo*/

$(".btn_logeo").mouseover(function(){
  $(".btn_logeo").css("fontWeight",  "400");
  $(".btn_logeo").css("color",  "white");
  $(".btn_logeo").css("backgroundColor",  "black");
});


$(".btn_logeo").mouseout(function(){
  $(".btn_logeo").css("fontWeight",  "600");
  $(".btn_logeo").css("color",  "black");
  $(".btn_logeo").css("backgroundColor",  "white");
});






/*.forgot_pass*/

$(".forgot_pass").mouseover(function(){
  //$(".forgot_pass").css("fontWeight",  "600");
});


$(".forgot_pass").mouseout(function(){
  //$(".forgot_pass").css("fontWeight",  "400");
});




/*btn_registrate*/

$("#btn_registrate").mouseover(function(){
	$("#btn_registrate").css("fontSize",  "16px");
});


$("#btn_registrate").mouseout(function(){
	$("#btn_registrate").css("fontSize",  "12px");
});





/*forgot_pass*/

$(".forgot_pass").mouseover(function(){
	$(".forgot_pass").css("fontWeight",  "600");
});


$(".forgot_pass").mouseout(function(){
	$(".forgot_pass").css("fontWeight",  "400");
});




















/*
#####  ######  ####  #  ####  ##### ###### #####  
#    # #      #    # # #        #   #      #    # 
#    # #####  #      #  ####    #   #####  #    # 
#####  #      #  ### #      #   #   #      #####  
#   #  #      #    # # #    #   #   #      #   #  
#    # ######  ####  #  ####    #   ###### #    # 
*/

//si aprento enter mientras estoy enfocado en el input #id_nombre
$("#id_nombre").keypress(function(e){
  if(e.which == 13) {
      verificar_datos_registro();
  }
});

$("#id_apellido").keypress(function(e){
  if(e.which == 13) {
      verificar_datos_registro();
  }
});

$("#id_DNI").keypress(function(e){
  if(e.which == 13) {
      verificar_datos_registro();
  }
});

$("#id_mail").keypress(function(e){
  if(e.which == 13) {
      verificar_datos_registro();
  }
});

//si aprento enter mientras estoy enfocado en el input #id_usuario
$("#id_usuario").keypress(function(e){
  if(e.which == 13) {
      verificar_datos_registro();
  }
});

//si aprento enter mientras estoy enfocado en el input #id_pass
$("#id_pass").keypress(function(e){
  if(e.which == 13) {
      verificar_datos_registro();
  }
});






$('#btn_logeo').click(function(){
  verificar_datos_registro();
});


/*--------------------------------------------------------------------------*/


function verificar_datos_registro(){
  //COMPROBANDO QUE LOS CAMPOS NO ESTEN VACIOS

  var id_nombre=0;
  var id_apellido=0;
  var id_DNI=0;
  var id_mail=0;


  var id_usuario=0;
  var id_pass   =0;

  var error_contacto=0;
  var cant_errores= 0;



  //comprobando nombre 
    if( $('#id_nombre').val() == ''){
      id_nombre=1;
      cant_errores++;
      $('#id_nombre').css("borderBottom", "1px solid #f13a3a");
    } 
    else{
      id_nombre=0;
      $('#id_nombre').css("borderBottom", "1px solid #ccc");
    }

  //comprobando apellido 
    if( $('#id_apellido').val() == ''){
      id_apellido=1;
      cant_errores++;
      $('#id_apellido').css("borderBottom", "1px solid #f13a3a");
    } 
    else{
      id_apellido=0;
      $('#id_apellido').css("borderBottom", "1px solid #ccc");
    }

  //comprobando DNI 
    if( $('#id_DNI').val() == ''){
      id_DNI=1;
      cant_errores++;
      $('#id_DNI').css("borderBottom", "1px solid #f13a3a");
    } 
    else{
      id_DNI=0;
      $('#id_DNI').css("borderBottom", "1px solid #ccc");
    }


  //comprobando mail 
    if( $('#id_mail').val() == ''){
      id_mail=1;
      cant_errores++;
      $('#id_mail').css("borderBottom", "1px solid #f13a3a");
    } 
    else{
      id_mail=0;
      $('#id_mail').css("borderBottom", "1px solid #ccc");
    }

  //comprobando usuario 
    if( $('#id_usuario').val() == ''){
      id_usuario=1;
      cant_errores++;
      $('#id_usuario').css("borderBottom", "1px solid #f13a3a");
    } 
    else{
      id_usuario=0;
      $('#id_usuario').css("borderBottom", "1px solid #ccc");
    }

  //comprobando pass 
    if( $('#id_pass').val() == ''){
      id_pass=1;
      cant_errores++;
      $('.content_pass_login').css("borderBottom", "1px solid #f13a3a");
    } 
    else{
      id_pass=0;
      $('.content_pass_login').css("borderBottom", "1px solid #ccc");
    }




  //HAY ERRORES?
    if(id_nombre==1 || id_apellido==1 || id_DNI==1 || id_mail==1 || id_usuario==1 || id_pass==1){
      error_contacto=1;
    }





    if(error_contacto==1){

      switch(cant_errores){
        case 1:
              $('.mensaje_error_login').html("Completa el campo en rojo *");
              $('.mensaje_error_login').css("display", "block");
              $('.mensaje_error_login').css("color", "red");
        break;

        default:
              $('.mensaje_error_login').html("Completa los campos en rojo *");
              $('.mensaje_error_login').css("display", "block");
              $('.mensaje_error_login').css("color", "red");
        break;

      } 
    }
    else{

      $.when(verificar_dni()).done(function () {   
        $.when(verificar_mail()).done(function () {
          $.when(verificar_usuario()).done(function () {
            //$.when(verificacion_global()).done(function () {
              
              //console.log("FIN");

            //});
          });
        });
      });

    }    

}


/*--------------------------------------------------------------------------*/

/*
"data": {
              name_nombre:id_nombre,name_apellido:id_apellido,
              name_DNI:id_DNI,name_mail:id_mail,
              name_usuario:id_usuario,name_pass:id_pass
            }
            */

var mensaje_error = "";
var cant_errores_reg = 0;

var id_nombre     = $("#id_nombre").val();
var id_apellido   = $("#id_apellido").val();




var id_pass       = $("#id_pass").val();






function verificar_dni(){

  var id_DNI        = $("#id_DNI").val();

  mensaje_error = "";
  cant_errores_reg = 0;

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "php/verificar_dni.php",
    "data": {
              name_DNI:id_DNI
            }
  })   

  .done(function(response){
    for(var xw=1; xw<=3; xw++){
      switch(xw){

        case 1: 
          console.log(" ");
          console.log(" ");
          console.log("res_1: "+response);
          var RESPUESTA = JSON.parse(response);
          console.log("ta_1 : "+RESPUESTA);
        break;

        case 2: 
          if(RESPUESTA==1){
            $('#id_DNI').css("borderBottom", "1px solid #f13a3a");

            mensaje_error = "DNI";
            cant_errores_reg++;
          }

          
        break;

        case 3: 
          deferred.resolve();
        break;
      }
    }
  });

  return deferred.promise(); 
}





function verificar_mail(){

  var id_mail       = $("#id_mail").val();

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "php/verificar_mail.php",
    "data": {
              name_mail:id_mail
            }
  })  

  .done(function(response2){

    for(var xw=1; xw<=3; xw++){
      switch(xw){

        case 1: 
          console.log("res_2: "+response2);
          var RESPUESTA2 = JSON.parse(response2);
          console.log("ta_2 : "+RESPUESTA2);
        break;

        case 2: 
          if(RESPUESTA2==1){
            $('#id_mail').css("borderBottom", "1px solid #f13a3a");

            cant_errores_reg++;

            if(cant_errores_reg>1){  mensaje_error += ", E-mail"; }
            else                  {  mensaje_error += "E-mail";   }
          }

          
        break;

        case 3: 
          deferred.resolve();
        break;
      }
    } 
  });

  return deferred.promise(); 
}






function verificar_usuario(){
  var id_usuario    = $("#id_usuario").val();

  var deferred = $.Deferred();
  $.ajax({
    "method": "POST",
    "url": "php/verificar_usuario.php",
    "data": {
              name_usuario:id_usuario
            }
  })  

  .done(function(response3){

    for(var xw=1; xw<=3; xw++){
      switch(xw){

        case 1: 
          console.log("res_3: "+response3);
          var RESPUESTA3 = JSON.parse(response3);
          console.log("ta_3 : "+RESPUESTA3);
        break;

        case 2: 
          if(RESPUESTA3==1){
            $('#id_usuario').css("borderBottom", "1px solid #f13a3a");
            cant_errores_reg++;

            if(cant_errores_reg>1){ mensaje_error += ", Usuario"; }
            else                  { mensaje_error += "Usuario";   }  
          }

          
        break;

        case 3: 
          console.log("verificacion_global");
          if(cant_errores_reg>0){ si_errores_registro();  }
          else                  { no_errores_registro();  }

          deferred.resolve();
        break;
      }
    }
  });

  return deferred.promise(); 
}





function verificacion_global(){
  var deferred = $.Deferred();

  for(var xw=1; xw<=3; xw++){
      switch(xw){

        case 1: 
          if(cant_errores_reg>0){ si_errores_registro();  }
          else                  { no_errores_registro();  }
        break;

        case 2: 
          
        break;

        case 3: 
          deferred.resolve();
        break;
      }
    }

    return deferred.promise(); 
}





function si_errores_registro(){
  console.log("cant_errores: "+cant_errores_reg);

  if(cant_errores_reg==1){
    $('.mensaje_error_login').html(mensaje_error+" ya existe en sugerencia.com.ar");
    $('.mensaje_error_login').css("display", "block");
    $('.mensaje_error_login').css("color", "red");
  }
  else{
    $('.mensaje_error_login').html(mensaje_error+" ya existen en sugerencia.com.ar");
    $('.mensaje_error_login').css("display", "block");
    $('.mensaje_error_login').css("color", "red");
  }
  
}


function no_errores_registro(){
  console.log("cant_errores: "+cant_errores_reg);

  $('.mensaje_error_login').html(mensaje_error+"Registro correcto!");
  $('.mensaje_error_login').css("display", "block");
  $('.mensaje_error_login').css("color", "#3ab011");
  
}


//var deferred = $.Deferred();
//return deferred.promise(); 


/*
 ####  #      #  ####  #    # 
#    # #      # #    # #   #  
#      #      # #      ####   
#      #      # #      #  #   
#    # #      # #    # #   #  
 ####  ###### #  ####  #    #
 */

var show_hide= 0;

$('#show_hide').click(function(){

  if(show_hide==0){
    $('#id_pass').attr('type', 'text');
    $('#show_hide').html("Ocultar");
    show_hide=1;
  }
  else{
    $('#id_pass').attr('type', 'password');
    $('#show_hide').html("Mostar");
    show_hide=0;
  }

  
});



/*click en ya tienes cuenta - iniciar sesion */
$('#btn_registrate').click(function(){
  window.location.href = "../login";
});











/*
switch(RESPUESTA){

      case 101:
        //console.log(response);
        $('#id_usuario').css("borderBottom", "1px solid #f13a3a");
        $('.content_pass_login').css("borderBottom", "1px solid #f13a3a");

        $('.mensaje_error_login').html("El DNI ingresado ya esta sincronizado a una cuenta existente *");
        $('.mensaje_error_login').css("display", "block");

      break;


      case 202:
        //console.log(response);
        $('#id_usuario').css("borderBottom", "1px solid #f13a3a");
        $('.content_pass_login').css("borderBottom", "1px solid #f13a3a");

        $('.mensaje_error_login').html("El E-mail ingresado ya esta sincronizado a una cuenta existente");
        $('.mensaje_error_login').css("display", "block");
      break;


      case "all_true":
          //console.log(RESPUESTA);
          //$('.mensaje_error_login').html("Inicio de sesion exitosa");
          $('.mensaje_error_login').html('<i class="far fa-check-circle"></i>');
          $('.mensaje_error_login').css("display", "block");
          $('.mensaje_error_login').css("color", "#01b3a7");
          $('.mensaje_error_login').css("fontSize", "26px");
           
          $.ajax({
            "method": "POST",
            "url": "php/iniciar_sesion.php",
            "data": { name_usuario:id_usuario, name_pass:id_pass }

          })
            
          
          .done(function(response2){
            //console.log(response2);
            //console.log("123");

            //var RESPUESTA2 = JSON.parse(response2);
            //console.log(RESPUESTA2);
            window.location.href = "../Cpanel";
          });

      break;


      default:
        console.log("default response: "+response);
      break;
    }
    */









