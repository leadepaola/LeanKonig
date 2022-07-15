



/*
#    #  ####  #    #  ####  ######  ####  #    # ###### #####  
##  ## #    # #    # #      #      #    # #    # #      #    # 
# ## # #    # #    #  ####  #####  #    # #    # #####  #    # 
#    # #    # #    #      # #      #    # #    # #      #####  
#    # #    # #    # #    # #      #    #  #  #  #      #   #  
#    #  ####   ####   ####  ######  ####    ##   ###### #    # 
*/



/*EMPRESA

$("#empresa_header").mouseover(function(){
    $("#empresa_header").css("color",  "rgb(255, 255, 255)");
});


$("#empresa_header").mouseout(function(){
  $("#empresa_header").css("color",  "rgb(198, 166, 212)");
});


/*ESENCIAS

$("#esencia_header").mouseover(function(){
    $("#esencia_header").css("color",  "rgb(255, 255, 255)");
});


$("#esencia_header").mouseout(function(){
  $("#esencia_header").css("color",  "rgb(198, 166, 212)");
});


/*CONTACTO

$("#contacto_header").mouseover(function(){
    $("#contacto_header").css("color",  "rgb(255, 255, 255)");
});


$("#contacto_header").mouseout(function(){
  $("#contacto_header").css("color",  "rgb(198, 166, 212)");
});
*/





/*
#    # ###### #    # #    # 
##  ## #      ##   # #    # 
# ## # #####  # #  # #    # 
#    # #      #  # # #    # 
#    # #      #   ## #    # 
#    # ###### #    #  ####  

 ####  #      #  ####  #    # 
#    # #      # #    # #   #  
#      #      # #      ####   
#      #      # #      #  #   
#    # #      # #    # #   #  
 ####  ###### #  ####  #    #
*/


var menu_activo_header=0;


$("#menu_icon").click(function(){

	abrir_cerrar_menu();

});



function abrir_cerrar_menu(){
	if (menu_activo_header==0) {
	    $("#header").css("height",  "277px");
	    $("#contenedor_en_header").css("display",  "initial");

	    setTimeout(function(){ 
	    	$("#contenedor_en_header").css("opacity",  "1");
	      	menu_activo_header=1;
	    },500);
	 }

	else{
	    $("#header").css("height",  "77px");
	    $("#contenedor_en_header").css("display",  "none");
	    $("#contenedor_en_header").css("opacity",  "0");
	    setTimeout(function(){ 
	      	menu_activo_header=0;
	    },500);
	}
}







$("#empresa_header").click(function(){

	//abrir_cerrar_menu();
	$("#menu_icon").click();
});

$("#esencia_header").click(function(){

	//abrir_cerrar_menu();
	$("#menu_icon").click();
});

$("#contacto_header").click(function(){

	//abrir_cerrar_menu();
	$("#menu_icon").click();
});

