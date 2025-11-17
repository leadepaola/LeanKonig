




/*
  ##    ####  ##### #    #   ##   #      # ######   ##   #####  
 #  #  #    #   #   #    #  #  #  #      #     #   #  #  #    # 
#    # #        #   #    # #    # #      #    #   #    # #    # 
###### #        #   #    # ###### #      #   #    ###### #####  
#    # #    #   #   #    # #    # #      #  #     #    # #   #  
#    #  ####    #    ####  #    # ###### # ###### #    # #    # 

#    #   ##   # #      
##  ##  #  #  # #      
# ## # #    # # #      
#    # ###### # #      
#    # #    # # #      
#    # #    # # ###### 
*/


/*Click en btn*/
$('.index_btn_accion').click(function(){
    verificar_campos_vacios();
});




function verificar_campos_vacios(){

	// Comprobando  textarea 
	// Si está vacio...

    if( $('#mail_textarea_tit').val() == ''){

      	$('#mail_textarea_tit').css("border", "1px solid #F44336");
    } 
    else{


	   	var id_web  		= $("#id_web").val();
		var id_cliente  	= $("#id_cliente").val();
   	 	var mail_txtArea   	= $('#mail_textarea_tit').val();

	    $('#mail_textarea_tit').css("border", "1px solid #cccccc");

      // Activo fonto transparente y mouse reload         --> funcion en index.js
      $.when(start_reloader()).done(function () {

	    $.when(enviar_data(id_web,id_cliente,mail_txtArea)).done(function () {   

      // Desctivo fonto transparente y mouse reload         --> funcion en index.js
      toast = 'Mail de confirmación actualizado';
      $.when(finish_reloader_with_toast(toast)).done(function () {
        
      });

      });
		  
      });


    }
}





function enviar_data(id_w,id_c,mail_txtArea){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/mail_confirmacion/update_mail_confirmacion.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              mail_txtArea:mail_txtArea
            }
  })   

  .done(function(response){

	console.log(response);

	//Materialize.toast('Mail de confirmación actualizado', 3000, 'rounded')
  	//window.location.reload();

 	deferred.resolve();
	    
  });


}




