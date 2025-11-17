

/*
$(document).ready(function(){
	//$('.pr_cpanel_form_btn_txt').html("Carga exitosa");
});
*/

var click_btn = 0;



/*Enter en inputs*/
$("#name").keypress(function(e){
  if(e.which == 13) {
      click_btn_enviar();
  }
});
$("#numero_wsp").keypress(function(e){
  if(e.which == 13) {
      click_btn_enviar();
  }
});
$("#cantidad_d_personas").keypress(function(e){
  if(e.which == 13) {
      click_btn_enviar();
  }
});



/*Click en btn*/
$('.pr_cpanel_form_btn').click(function(){
    click_btn_enviar();
});


function click_btn_enviar(){
  if(click_btn==0){
    click_btn++;
    Cpanel_contacto();
  }
  else{
    //window.location.href = "../";
  }
}





function Cpanel_contacto(){

  var updata_name=0;
  var updata_tel=0;
  var updata_cant_d_pers=0;


  var error_contacto=0;
  var cant_errores= 0;

  //comprobando nombre 
    if( $('#nombre').val() == ''){
      updata_name=1;
      cant_errores++;
      $('#nombre').css("border-bottom", "1px solid #F44336");
      $('#nombre').css("box-shadow",    "0 1px 0 0 #F44336");
    } 
    else{
      updata_name=0;
      $('#nombre').css("border-bottom", "1px solid #9e9e9e");
      $('#nombre').css("box-shadow",    "none");
    }


  //comprobando whatsapp 
    if( $('#numero_wsp').val() == ''){
      updata_tel=1;
      cant_errores++;
      $('#numero_wsp').css("border-bottom", "1px solid #F44336");
      $('#numero_wsp').css("box-shadow",    "0 1px 0 0 #F44336");
    } 
    else{
      updata_tel=0;
      $('#numero_wsp').css("border-bottom", "1px solid #9e9e9e");
      $('#numero_wsp').css("box-shadow",    "none");
    }

  //comprobando cantidad_d_personas 
    if( $('#cantidad_d_personas').val() == ''){
      updata_cant_d_pers=1;
      cant_errores++;
      $('#cantidad_d_personas').css("border-bottom", "1px solid #F44336");
      $('#cantidad_d_personas').css("box-shadow",    "0 1px 0 0 #F44336");
    } 
    else{
      updata_cant_d_pers=0;
      $('#cantidad_d_personas').css("border-bottom", "1px solid #9e9e9e");
      $('#cantidad_d_personas').css("box-shadow",    "none");
    }



  //HAY ERRORES?
    if( updata_name==1 || updata_tel==1 || updata_cant_d_pers==1 ){
      error_contacto=1;
      click_btn=0;
    }




    if(error_contacto==1){

      switch(cant_errores){
        case 1:

        break;

        default:

        break;

      } 
    }
    else{

      $.when(enviar_msj_Cpanel()).done(function () {   

      });

    }  



}





/*--------------------------------------------------------------------------*/





function enviar_msj_Cpanel(){
  var id_name   	  		= $('#nombre').val();
  var id_numero_wsp      		= $('#numero_wsp').val();
  var id_cantidad_d_personas  	= $('#cantidad_d_personas').val();
  

  // Acciones css cuando que se muestran al dar click en enviar
   $('.pr_cpanel_cont_preloader').css("display", "flex");





  var deferred = $.Deferred();
  $.ajax({
    'method': 'POST',
    'url': './php/updata.php',
    'data': {
              name_nombre:id_name ,name_numero_wsp:id_numero_wsp,
              name_cantidad_d_personas:id_cantidad_d_personas ,              
            }
  })  

  .done(function(response){

    for(var xw=1; xw<=3; xw++){
      switch(xw){

        case 1: 
          console.log('res: '+response);
          //var RESPUESTA = JSON.parse(response);
          //console.log('ta_ : '+RESPUESTA);
        break;

        case 2: 
          if(response==1){

            setTimeout(function(){    
              //$('.pr_cpanel_cont_preloader').css("display", "none");
              $('.pr_cpanel_form_btn').css("background-color", "#099709");  
              $('.pr_cpanel_form_btn_txt').html("Carga exitosa"); 
            },500);  

            setTimeout(function(){  
              $('.pr_cpanel_cont_preloader').css("background-color", "white");  
              $('.preloader-wrapper').css("display", "none");  
              $('.pr_cpanel_btn_refres').css("display", "inline-block");  

              window.location.href = 'https://wa.me/549'+id_numero_wsp+'?text=Hola '+id_name+', soy%20Leandro%20de%20Samsara%20Beach%20y%20Sonora%20Park.%0A%0AEn%20el%20link%20est%C3%A1n%20todas%20las%20fechas%20para%20comprar%20las%20entradas.%20Cualquier%20consulta%20hablame%21%0A%0Aleankonig.com.ar/PR%20';
            },1500);          

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