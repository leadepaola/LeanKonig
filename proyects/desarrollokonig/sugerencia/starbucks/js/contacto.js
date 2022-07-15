









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
















































