











$(document).ready(function(){
	//verificar_logeo();
});









function verificar_logeo(){

  console.log("\n\nAJAX");
  //var deferred = $.Deferred(); 

    $.ajax({
  		url: '../php/verificar_logeo.php',
  		type: 'GET',
	  	success: function(response){

	  		var RESPUESTA = JSON.parse(response);
	  		console.log(response);

	    	if(RESPUESTA==0){
	    		window.location.href = "../../login";
	    		console.log("NO HAY SESION")
	    	}
	    	else{
	    		console.log("Hay un sesion iniciada correctamente !")
	    	}
  		} 			//	success
  	}); 			//	ajax


  //return deferred.promise(); 
}
