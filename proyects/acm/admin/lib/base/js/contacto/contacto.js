



/*
 ####   ####  #    # #####   ##    ####  #####  ####  
#    # #    # ##   #   #    #  #  #    #   #   #    # 
#      #    # # #  #   #   #    # #        #   #    # 
#      #    # #  # #   #   ###### #        #   #    # 
#    # #    # #   ##   #   #    # #    #   #   #    # 
 ####   ####  #    #   #   #    #  ####    #    ####

  ##    ####  ##### # #    # ######  ####  
 #  #  #    #   #   # #    # #      #      
#    # #        #   # #    # #####   ####  
###### #        #   # #    # #           # 
#    # #    #   #   #  #  #  #      #    # 
#    #  ####    #   #   ##   ######  ####  
*/


// FUNCION 
// Detecta cuando se activa o desactiva checkbox 
// para activar o desactivar Banner 1,2 o 3

$('.label_checkbox').change(function(){

	//console.log("banner");
	
	var id_web    	 = ($(this).find("#id_web").val());
  	var id_cliente   = ($(this).find("#id_cliente").val());
  	var switch_value  = ($(this).find("#switch_checkbox").val());

  	
	//console.log(id_web);
	//console.log(id_cliente);
	//console.log(switch_value);
	

	if ($(this).find("#switch_checkbox").is(':checked')) {
		//console.log("activo");

		$.when(contacto_activar(id_web,id_cliente,switch_value)).done(function () {   

		});

	}else{
		//console.log("NO activo");

		$.when(contacto_desactivar(id_web,id_cliente,switch_value)).done(function () {   

		});	
	}


});




function contacto_activar(id_w,id_c,switch_value){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/contacto/contacto_activar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              switch_value:switch_value
            }
  })   

  .done(function(response){

	//console.log(response);


	contacto_css_activado(switch_value);

	//Materialize.toast(switch_value+' activado', 3000, 'rounded')
  	//window.location.reload();

 	deferred.resolve();
	    
  });
}

function contacto_desactivar(id_w,id_c,switch_value){

  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/contacto/contacto_desactivar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              switch_value:switch_value
            }
  })   

  .done(function(response){

	//console.log(response);

	contacto_css_desactivado(switch_value);

	//Materialize.toast(switch_value+' desactivado', 3000, 'rounded')
  	//window.location.reload();

 	deferred.resolve();
	    
  });
}



function contacto_css_activado(e){
	  		

	switch(e){
		
  		case 'Teléfono 1':
	  		$("#icon_tel1_cont").css("opacity", "1");
	  		$("#txt_tel1_cont").css("opacity",  "1");
	  		$("#btn_tel1_cont").css("opacity",  "1");
		break;

		case 'Teléfono 2':
			$("#icon_tel2_cont").css("opacity", "1");
	  		$("#txt_tel2_cont").css("opacity",  "1");
	  		$("#btn_tel2_cont").css("opacity",  "1");
		break;

		case 'Mail':
			$("#icon_mail_cont").css("opacity", "1");
	  		$("#txt_mail_cont").css("opacity",  "1");
	  		$("#btn_mail_cont").css("opacity",  "1");
		break;

		case 'Dirección':
			$("#icon_direc_cont").css("opacity", "1");
	  		$("#txt_direc_cont").css("opacity",  "1");
	  		$("#btn_direc_cont").css("opacity",  "1");
		break;


		case 'Instagram':
			$("#icon_insta_cont").css("opacity", "1");
	  		$("#txt_insta_cont").css("opacity",  "1");
	  		$("#btn_insta_cont").css("opacity",  "1");
		break;

		case 'Facebook':
			$("#icon_face_cont").css("opacity", "1");
	  		$("#txt_face_cont").css("opacity",  "1");
	  		$("#btn_face_cont").css("opacity",  "1");
		break;

		case 'Whatsapp':
			$("#icon_whats_cont").css("opacity", "1");
	  		$("#txt_whats_cont").css("opacity",  "1");
	  		$("#btn_whats_cont").css("opacity",  "1");
		break;

		case 'Twitter':
			$("#icon_twit_cont").css("opacity", "1");
	  		$("#txt_twit_cont").css("opacity",  "1");
	  		$("#btn_twit_cont").css("opacity",  "1");
		break;

		case 'Youtube':
			$("#icon_yout_cont").css("opacity", "1");
	  		$("#txt_yout_cont").css("opacity",  "1");
	  		$("#btn_yout_cont").css("opacity",  "1");
		break;

		case 'Linkedin':
			$("#icon_linke_cont").css("opacity", "1");
	  		$("#txt_linke_cont").css("opacity",  "1");
	  		$("#btn_linke_cont").css("opacity",  "1");
		break;

		case 'Pinterest':
			$("#icon_pint_cont").css("opacity", "1");
	  		$("#txt_pint_cont").css("opacity",  "1");
	  		$("#btn_pint_cont").css("opacity",  "1");
		break;
	}
}

function contacto_css_desactivado(e){
	switch(e){
		
  		case 'Teléfono 1':
	  		$("#icon_tel1_cont").css("opacity", ".4");
	  		$("#txt_tel1_cont").css("opacity",  ".5");
	  		$("#btn_tel1_cont").css("opacity",  ".5");
		break;

		case 'Teléfono 2':
			$("#icon_tel2_cont").css("opacity", ".4");
	  		$("#txt_tel2_cont").css("opacity",  ".5");
	  		$("#btn_tel2_cont").css("opacity",  ".5");
		break;

		case 'Mail':
			$("#icon_mail_cont").css("opacity", ".4");
	  		$("#txt_mail_cont").css("opacity",  ".5");
	  		$("#btn_mail_cont").css("opacity",  ".5");
		break;

		case 'Dirección':
			$("#icon_direc_cont").css("opacity", ".4");
	  		$("#txt_direc_cont").css("opacity",  ".5");
	  		$("#btn_direc_cont").css("opacity",  ".5");
		break;


		case 'Instagram':
			$("#icon_insta_cont").css("opacity", ".4");
	  		$("#txt_insta_cont").css("opacity",  ".5");
	  		$("#btn_insta_cont").css("opacity",  ".5");
		break;

		case 'Facebook':
			$("#icon_face_cont").css("opacity", ".4");
	  		$("#txt_face_cont").css("opacity",  ".5");
	  		$("#btn_face_cont").css("opacity",  ".5");
		break;

		case 'Whatsapp':
			$("#icon_whats_cont").css("opacity", ".4");
	  		$("#txt_whats_cont").css("opacity",  ".5");
	  		$("#btn_whats_cont").css("opacity",  ".5");
		break;

		case 'Twitter':
			$("#icon_twit_cont").css("opacity", ".4");
	  		$("#txt_twit_cont").css("opacity",  ".5");
	  		$("#btn_twit_cont").css("opacity",  ".5");
		break;

		case 'Youtube':
			$("#icon_yout_cont").css("opacity", ".4");
	  		$("#txt_yout_cont").css("opacity",  ".5");
	  		$("#btn_yout_cont").css("opacity",  ".5");
		break;

		case 'Linkedin':
			$("#icon_linke_cont").css("opacity", ".4");
	  		$("#txt_linke_cont").css("opacity",  ".5");
	  		$("#btn_linke_cont").css("opacity",  ".5");
		break;

		case 'Pinterest':
			$("#icon_pint_cont").css("opacity", ".4");
	  		$("#txt_pint_cont").css("opacity",  ".5");
	  		$("#btn_pint_cont").css("opacity",  ".5");
		break;
	}
}


























/*
  ##    ####  ##### #    #   ##   #      # ######   ##   #####  
 #  #  #    #   #   #    #  #  #  #      #     #   #  #  #    # 
#    # #        #   #    # #    # #      #    #   #    # #    # 
###### #        #   #    # ###### #      #   #    ###### #####  
#    # #    #   #   #    # #    # #      #  #     #    # #   #  
#    #  ####    #    ####  #    # ###### # ###### #    # #    # 

 ####   ####  #    # #####   ##    ####  #####  ####  
#    # #    # ##   #   #    #  #  #    #   #   #    # 
#      #    # # #  #   #   #    # #        #   #    # 
#      #    # #  # #   #   ###### #        #   #    # 
#    # #    # #   ##   #   #    # #    #   #   #    # 
 ####   ####  #    #   #   #    #  ####    #    #### 

*/


/*Click en btn*/
$('.index_cont_lista').click(function(){


  	var input 		= ($(this).parent().find("#switch_checkbox").val());
  	var dato		= ($(this).parent().find(".contacto_input").val());
  	var id_web 		= ($(this).parent().find("#id_web").val());
	var id_cliente 	= ($(this).parent().find("#id_cliente").val());
	
	/*
	console.log(input);
	console.log(dato);
	console.log(id_web);
	console.log(id_cliente);
	*/

	// Activo fonto transparente y mouse reload					--> funcion en index.js
  	$.when(start_reloader()).done(function () {

	$.when(enviar_data(id_web,id_cliente,dato,input)).done(function () {   

	// Desctivo fonto transparente y mouse reload					--> funcion en index.js
	toast = input+' actualizado';
  	$.when(finish_reloader_with_toast(toast)).done(function () {

		
	});

	});

	});

});






function enviar_data(id_w,id_c,dato,input){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/contacto/contacto_actualizar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              dato:dato,input:input
            }
  })   

  .done(function(response){

    //console.log(response);

    //Materialize.toast(input+' actualizado', 3000, 'rounded');
    //window.location.reload();

    deferred.resolve();
        
  });


}









