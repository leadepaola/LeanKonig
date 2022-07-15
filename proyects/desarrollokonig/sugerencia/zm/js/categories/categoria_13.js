







var categoria      = document.getElementsByClassName("categoria");

var numero_de_categoria = 1;


$.when(carga_titulo(numero_de_categoria=13)).done(function () { 
	$.when(carga_lista_categoria(numero_de_categoria=13)).done(function () { 
		$.when(carga_link_archivo()).done(function () { 
			
			var img_descarga      = document.getElementsByClassName("img_descarga");

			img_descarga[0].onmouseover  = function() {

				img_descarga[0].style.opacity 				= "1";
				img_descarga[0].style.width 				= "125px";
			};  


			img_descarga[0].onmouseout  = function() {
				img_descarga[0].style.opacity 				= ".8";
				img_descarga[0].style.width 				= "110px";
			};  

		});
	});
});





























