$(document).ready(function(){

	// Inicio nice-select (Estilo para etiqueta select)
	$('select').niceSelect();

	// Asegurarse de que el reloader se oculte cuando se navega hacia atrás (bfcache)
	$(window).on('pageshow', function(event) {
		// Llama a finish_reloader para ocultar el overlay si estuviera visible.
		finish_reloader();
	});
});









/*

#   #  ####  #    # ##### #    # #####  ###### 
 # #  #    # #    #   #   #    # #    # #      
  #   #    # #    #   #   #    # #####  #####  
  #   #    # #    #   #   #    # #    # #      
  #   #    # #    #   #   #    # #    # #      
  #    ####   ####    #    ####  #####  ###### 

*/
// FUNCION
// Muestra tutorial de youtube

// MOBILE 
// La class "header_cont_items_carrito" es el contenedor del btn "como funciona" en mobile
$('.header_cont_items_carrito').click(function(){
    $(".youtube_fondo_cc_transparencia").css("display",  "block");
    $(".youtube_fondo").css("display",  "flex");

    // Activo fonto transparente y mouse reload         --> funcion en index.js
    $.when(start_reloader()).done(function () {

    $.when(get_tutorial()).done(function () {   

    // Desctivo fonto transparente y mouse reload         --> funcion en index.js
    $.when(finish_reloader()).done(function () {

      
    });
    
    });

    });

});

// PC 
// La class "how_t_work" es el contenedor del btn "como funciona" en pc
$('.how_t_work').click(function(){

    $(".youtube_fondo_cc_transparencia").css("display",  "block");
    $(".youtube_fondo").css("display",  "flex");


    // Activo fonto transparente y mouse reload         --> funcion en index.js
    $.when(start_reloader()).done(function () {

    $.when(get_tutorial()).done(function () {   

    // Desctivo fonto transparente y mouse reload         --> funcion en index.js
    $.when(finish_reloader()).done(function () {

      
    });
    
    });

    });

	
});


// La class "youtube_fondo" es el fondo oscuro que aparece cuando se activa el tutorial
// Al haceer click sobre el fondo se oculta el tutorial
$('.youtube_fondo').click(function(){
    $(".youtube_fondo_cc_transparencia").css("display",  "none");
    $(".youtube_fondo").css("display",  "none");

    $('.iframe_youtube').remove();
});







function get_tutorial(){

	var view_activa      = $("#view_activa").val();
    var dispositivo      = $("#dispositivo").val();

    //console.log(view_activa);
    //console.log(dispositivo);

  	var deferred = $.Deferred();

    $.ajax({
	    "method": "POST",
	    "url": "../php/tutoriales/get_tutorial.php",
	    "data": {
	              view_activa:view_activa,
	              dispositivo:dispositivo,
	            }
	})



	.done(function(response){

		//var res = JSON.parse(response);
		$('.youtube_cont_video').html(response);

	    console.log(response);
	    /*
	    if (res=="vacio") {
		    $('.youtube_cont_video').html('Habrá tutorial pronto');
		    
	    }
	    else{
	    }
	    */

	    //Materialize.toast('Descuento actualizado', 3000, 'rounded')
	    //window.location.reload();

	    deferred.resolve();
	   	return deferred.promise(); 
	});



}































/*

#####  ###### #       ####    ##   #####  
#    # #      #      #    #  #  #  #    # 
#    # #####  #      #    # #    # #    # 
#####  #      #      #    # ###### #    # 
#   #  #      #      #    # #    # #    # 
#    # ###### ######  ####  #    # ##### 

*/


/*RELOADER*/


// FUNCION
// Cuando realizo un ajax o cuando hago click en una etiqueta <a> estas funciones activan/ desactivan
// fondo transparente que tapa todo y muestra el reload de "cargando"

function start_reloader(){
	$('.general_fondo_invisible').css("display","flex");
}

function finish_reloader(){
	$('.general_fondo_invisible').css("display","none");
}

function finish_reloader_with_toast(e){
	$('.general_fondo_invisible').css("display","none");
	Materialize.toast(e, 3000, 'rounded')
}



// FUNCION 
// Cuando se hace click en la class ".res" se activa el "reload"

$('.a_re').click(function(){
	start_reloader();
});






