

/*
 ####  # #####  ###### #    #   ##   #    # 
#      # #    # #      ##   #  #  #  #    # 
 ####  # #    # #####  # #  # #    # #    # 
     # # #    # #      #  # # ###### #    # 
#    # # #    # #      #   ## #    #  #  #  
 ####  # #####  ###### #    # #    #   ##  
*/

// Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();










/*
#####  #####   ####  #####  #    #  ####  #####  ####   ####  
#    # #    # #    # #    # #    # #    #   #   #    # #      
#    # #    # #    # #    # #    # #        #   #    #  ####  
#####  #####  #    # #    # #    # #        #   #    #      # 
#      #   #  #    # #    # #    # #    #   #   #    # #    # 
#      #    #  ####  #####   ####   ####    #    ####   ####  

#####  ######  ####  #####   ##    ####    ##   #####   ####   ####  
#    # #      #        #    #  #  #    #  #  #  #    # #    # #      
#    # #####   ####    #   #    # #      #    # #    # #    #  ####  
#    # #           #   #   ###### #      ###### #    # #    #      # 
#    # #      #    #   #   #    # #    # #    # #    # #    # #    # 
#####  ######  ####    #   #    #  ####  #    # #####   ####   #### 
*/

//Productos destacados carousel

$(document).ready(function(){
    $('.carousel').carousel({
    	dist: -50, 		//para que no tenga perspectiva
    	noWrap:false, 	//para que no arranca desde el primero
    	padding:50,
    	duration:80,
    });
});


$('.destacados_cont_btn_mover_der').click(function(){
  $('.carousel#destacados').carousel('next', 1);
});

$('.destacados_cont_btn_mover_izq').click(function(){
  $('.carousel#destacados').carousel('prev', 1);
});


//media query
/*Detecta cuando se redimensiona la pantalla*/
$(window).resize(function(){

	var ancho_pantalla=$(window).width();
	//console.log(ancho_pantalla);

	if (ancho_pantalla<=1000) {
		$("#destacados").removeClass("m10");
		$("#destacados").addClass("m12");


		$(".destacados_cont_btn_mover_izq").css("display",  "none");

		$(".destacados_cont_btn_mover_der").css("display",  "none");

		$(".destacados_btn_mover").css("width",  "40px");
		$(".destacados_btn_mover").css("height",  "40px");

		$("#destacados_cont_btn_mover_izq_b").css("display",  "flex");

		$("#destacados_cont_btn_mover_der_b").css("display",  "flex");

	}
	if (ancho_pantalla>1000) {
		$("#destacados").removeClass("m12");
		$("#destacados").addClass("m10");


		$(".destacados_cont_btn_mover_izq").css("display",  "flex");

		$(".destacados_cont_btn_mover_der").css("display",  "flex");

		$(".destacados_btn_mover").css("width",  "60px");
		$(".destacados_btn_mover").css("height",  "60px");

		$("#destacados_cont_btn_mover_izq_b").css("display",  "none");

		$("#destacados_cont_btn_mover_der_b").css("display",  "none");

	}

});








/*
#####  #####   ####  #    #  ####   ####  #  ####  #    # 
#    # #    # #    # ##  ## #    # #    # # #    # ##   # 
#    # #    # #    # # ## # #    # #      # #    # # #  # 
#####  #####  #    # #    # #    # #      # #    # #  # # 
#      #   #  #    # #    # #    # #    # # #    # #   ## 
#      #    #  ####  #    #  ####   ####  #  ####  #    # 
*/


$('.promocion_cont_btn_mover_der').click(function(){
  $('.carousel#promocion').carousel('next', 1);
});

$('.promocion_cont_btn_mover_izq').click(function(){
  $('.carousel#promocion').carousel('prev', 1);
});


//media query
/*Detecta cuando se redimensiona la pantalla*/
$(window).resize(function(){

	var ancho_pantalla=$(window).width();
	//console.log(ancho_pantalla);

	if (ancho_pantalla<=1000) {
		$("#promocion").removeClass("m10");
		$("#promocion").addClass("m12");


		$(".promocion_cont_btn_mover_izq").css("display",  "none");

		$(".promocion_cont_btn_mover_der").css("display",  "none");

		$(".promocion_btn_mover").css("width",  "40px");
		$(".promocion_btn_mover").css("height",  "40px");

		$("#promocion_cont_btn_mover_izq_b").css("display",  "flex");

		$("#promocion_cont_btn_mover_der_b").css("display",  "flex");

	}
	if (ancho_pantalla>1000) {
		$("#promocion").removeClass("m12");
		$("#promocion").addClass("m10");


		$(".promocion_cont_btn_mover_izq").css("display",  "flex");

		$(".promocion_cont_btn_mover_der").css("display",  "flex");

		$(".promocion_btn_mover").css("width",  "60px");
		$(".promocion_btn_mover").css("height",  "60px");

		$("#promocion_cont_btn_mover_izq_b").css("display",  "none");

		$("#promocion_cont_btn_mover_der_b").css("display",  "none");

	}

});









/*
 ####   ####  #      #        ##   #####   ####  # #####  #      ###### 
#    # #    # #      #       #  #  #    # #      # #    # #      #      
#      #    # #      #      #    # #    #  ####  # #####  #      #####  
#      #    # #      #      ###### #####       # # #    # #      #      
#    # #    # #      #      #    # #      #    # # #    # #      #      
 ####   ####  ###### ###### #    # #       ####  # #####  ###### ###### 



  ##   #   # #    # #####    ##   
 #  #   # #  #    # #    #  #  #  
#    #   #   #    # #    # #    # 
######   #   #    # #    # ###### 
#    #   #   #    # #    # #    # 
#    #   #    ####  #####  #    # 


Preguntas frecuetnes

*/



  $(document).ready(function(){
    $('.collapsible').collapsible();
  });








 /*
#####  ###### #####  ###### # #      
#    # #      #    # #      # #      
#    # #####  #    # #####  # #      
#####  #      #####  #      # #      
#      #      #   #  #      # #      
#      ###### #    # #      # ###### 

# #    #   ##    ####  ###### 
# ##  ##  #  #  #    # #      
# # ## # #    # #      #####  
# #    # ###### #  ### #      
# #    # #    # #    # #      
# #    # #    #  ####  ###### 

*/

$(document).ready(function(){
	$('.materialboxed').materialbox();
});
        













