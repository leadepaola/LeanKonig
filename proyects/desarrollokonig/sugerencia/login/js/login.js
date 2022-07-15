








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
#       ####   ####  # #    # 
#      #    # #    # # ##   # 
#      #    # #      # # #  # 
#      #    # #  ### # #  # # 
#      #    # #    # # #   ## 
######  ####   ####  # #    # 
*/

//si aprento enter mientras estoy enfocado en el input #id_usuario
$("#id_usuario").keypress(function(e){
  if(e.which == 13) {
      verificar_login_1();
  }
});

//si aprento enter mientras estoy enfocado en el input #id_pass
$("#id_pass").keypress(function(e){
  if(e.which == 13) {
      verificar_login_1();
  }
});


$('#btn_logeo').click(function(){
  verificar_login_1();
});


/*--------------------------------------------------------------------------*/


function verificar_login_1(){
  //COMPROBANDO QUE LOS CAMPOS NO ESTEN VACIOS

  var id_usuario=0;
  var id_pass   =0;

  var error_contacto=0;
  var cant_errores= 0;


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
    if(id_usuario==1 || id_pass==1){
      error_contacto=1;
    }





    if(error_contacto==1){
      switch(cant_errores){
        case 1:
              $('.mensaje_error_login').html("Completa el campo en rojo *");
              $('.mensaje_error_login').css("display", "block");
        break;

        case 2:
              $('.mensaje_error_login').html("Completa los campos en rojo *");
              $('.mensaje_error_login').css("display", "block");
        break;

      } 
    }
    else{
      verificar_login_2(); 
    }    

}



/*--------------------------------------------------------------------------*/





function verificar_login_2(){

  var id_usuario     = $("#id_usuario").val();
  var id_pass   = $("#id_pass").val();

  $.ajax({
    "method": "POST",
    "url": "php/verificar_login.php",
    "data": {name_usuario:id_usuario,name_pass:id_pass}

  })   
    

  .done(function(response){
    console.log(response);
    var RESPUESTA = JSON.parse(response);
    
    

    if(RESPUESTA==0){
      console.log(RESPUESTA);
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
      
    }
    else{
      console.log(RESPUESTA);
      $('#id_usuario').css("borderBottom", "1px solid #f13a3a");
      $('.content_pass_login').css("borderBottom", "1px solid #f13a3a");

      $('.mensaje_error_login').html("Usuario o contraseña ingresado incorrecto *");
      $('.mensaje_error_login').css("display", "block");
    }
  });

}










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





/*click en no tienes cuenta - registrarse */
$('#btn_registrate').click(function(){
  window.location.href = "../register";
});















