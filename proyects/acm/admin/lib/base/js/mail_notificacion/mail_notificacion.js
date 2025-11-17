



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

#    #  ####  ##### # ###### #  ####    ##    ####  #  ####  #    # 
##   # #    #   #   # #      # #    #  #  #  #    # # #    # ##   # 
# #  # #    #   #   # #####  # #      #    # #      # #    # # #  # 
#  # # #    #   #   # #      # #      ###### #      # #    # #  # # 
#   ## #    #   #   # #      # #    # #    # #    # # #    # #   ## 
#    #  ####    #   # #      #  ####  #    #  ####  #  ####  #    # 

*/

$("#index_input_editlea").keypress(function(e){
  if(e.which == 13) {
      verificar_campos_vacios();
  }
});

/*Click en btn*/
$('.index_btn_accion').click(function(){
    verificar_campos_vacios();
});




function verificar_campos_vacios(){

  // Comprobando  textarea 
  // Si está vacio...

  if( $('#index_input_editlea').val() == ''){

    $('#index_input_editlea').css("border-bottom", "1px solid #F44336");
  
  } 
  else{


    var id_web      = $("#id_web").val();
    var id_cliente  = $("#id_cliente").val();
    var data_1      = $('#index_input_editlea').val();

    $('#index_input_editlea').css("border-bottom", "1px solid whitesmoke");


    // Activo fonto transparente y mouse reload         --> funcion en index.js
    $.when(start_reloader()).done(function () {

   	$.when(enviar_data(id_web,id_cliente,data_1)).done(function () {   

    // Desctivo fonto transparente y mouse reload         --> funcion en index.js
    toast = 'Mail de notificaciones actualizado';
    $.when(finish_reloader_with_toast(toast)).done(function () {


    });
    
    });

    });


  }
}





function enviar_data(id_w,id_c,data_1){


  var deferred = $.Deferred();

  $.ajax({
    "method": "POST",
    "url": "../php/mail_notificacion/mail_notificacion_actualizar.php",
    "data": {
              id_web:id_w,id_cliente:id_c,
              data_1:data_1
            }
  })   

  .done(function(response){

    console.log(response);

    //Materialize.toast('Monto mínimo actualizado', 3000, 'rounded');
    //window.location.reload();

    deferred.resolve();
        
  });


}

