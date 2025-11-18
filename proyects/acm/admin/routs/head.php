



<title><?php echo $titulo_pagina; ?></title>

<meta charset="UTF-8">


<!-- 	mobile 						-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- 	favicon 					-->
<link rel="icon" href="<?php echo $routs; ?>images/favicon/favicon.ico" type="image/x-icon">

<!-- 	icons "big mug" 			-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/icons/bigmug_and_slim/icon.css">

<!-- 	materealize 				-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/materialize/materialize.css?2021_7_15_0803">
<link rel="stylesheet" href="<?php echo $routs; ?>lib/materialize/materialize_control.css?2021_7_15_0803">

<!-- 	fonts 						-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/base/css/fonts.css?2021_7_15_0803">

<!-- 	nice-select 				-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/nice_select/nice-select.css?2021_7_15_0803">



<!-- 	css 						-->
<link rel="stylesheet" href="<?php echo $routs; ?>lib/base/css/index.css?2021_7_15_0803">
<link rel="stylesheet" href="<?php echo $routs; ?>lib/base/css/header.css?2021_7_15_0803">



<!-- 	lazysizes 					-->
<script src="<?php echo $routs; ?>lib/base/js/lazysizes.min.js" async></script>






<?php 
	
	//VARIABLES routs 

	//index = 1
	//restar_dias = 2
	//users_a_cpanel = 3

	//pedidos_individual = 2.5
	//mensajes_general = 3
	//mensaje_individual = 4
	//logo = 5
	
	//Banners = 6
	//Categorias = 7

	//Productos = 8
	//Productos edit = 9
	//Productos individual edit = 10
	//Productos individual add = 11

	//Preguntas frecuentes = 12
	//Preguntas frecuentes add = 13
	//Preguntas frecuentes edit = 14
	
	//Costo de envio = 15 - Falta tutorial
	//Contacto = 16
	//Mapa = 17
	//Color principal = 18
	
	//Mis datos = 19  - Falta tutorial

	//Sumar dias = 20  - Falta tutorial
	//Sumar dias pago= 21  - Falta tutorial
	//Sumar dias pago confirmacion 21.1 - Falta tutorial

	//Monto minimo = 22

	//Descuento = 23

	//Mail de confirmacion 24  - Falta tutorial
	//Mail de notificacion 25 - Falta tutorial

	//Contabilizar pedidos 26 

	//Metodo de pago 27 
	//Fecha de entrega 28
	
	//Sumar dias msj sin dias = 29
	
	//Exportar a Excel 30

	//Carrito 31

	//Google Analytics 32
	//Facebook Pixel 33


	// Se activan rutas dependiendo de la view activa
	// css
	switch ($view_activa) {
		
		// Index/inicio
		case '1':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/inicio/inicio.css?2025_11_18_1448">';
		break;

		//Nuevo Acm = 2
		case '2':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/nuevo_acm/nuevo_acm.css?2025_11_18_1448">';
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/preg_frecuentes/preg_frecuentes_add.css?2025_11_18_1448">';
		break;

		/*	
		case '2':
			//css
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/restar_dias/restardias.css?2021_7_15_0803">';
			//css seccion numeros de facturacion para "pedido_individual" css traido de "TI/cart"
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/restar_dias/facturacion.css?2021_7_15_0803">';
			//No me acuerdo
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
		break;
*/
		//acm ya creados = 3
		case '3':
			//echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/users/a_cpanel/a_cpanel.css?2021_7_15_0803">';
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/productos/productos_edit.css?2025_11_18_1448">';
		break;

			




/*

		//pedido_individual=2.5
		case '2.5':
			//css
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/pedido/pedido.css?2021_7_15_0803">';
			//css seccion numeros de facturacion para "pedido_individual" css traido de "TI/cart"
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/pedido/facturacion.css?2021_7_15_0803">';
			//No me acuerdo
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
		break;

		case '3':
			//css
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/mensajes/mensajes.css?2021_7_15_0803">';
		break;

		case '4':
			//css
			//echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/mensajes/mensajes.css?2021_7_15_0803">';
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/mensajes/mensaje_individual.css?2021_7_15_0803">';
		break;

		//logo = 5
		case '5':
			// css general
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/logo/logo.css?2021_7_15_0803">';
		break;

		//Banners = 6
		case '6':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/banners/banners_general.css?2021_7_15_0803">';
		break;
		
		//Categorias = 7
		case '7':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/categorias/categorias.css?2021_7_15_0803">';
		break;



		//Productos = 8
		case '8':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/productos/productos.css?2021_7_15_0803">';
		break;

		//Productos edit = 9
		case '9':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/productos/productos_edit.css?2021_7_15_0803">';
		break;

		//Productos individual edit = 10
		case '10':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/productos/productos_individual_edit.css?2021_7_15_0803">';
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/productos/productos_individual_add.css?2021_7_15_0803">';
		break;

		//Productos individual add = 11
		case '11':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/productos/productos_individual_edit.css?2021_7_15_0803">';
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/productos/productos_individual_add.css?2021_7_15_0803">';
		break;



		//Preguntas frecuentes = 12
		case '12':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/preg_frecuentes/preg_frecuentes.css?2021_7_15_0803">';
		break;

		//Preguntas frecuentes add = 13
		case '13':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/preg_frecuentes/preg_frecuentes_add.css?2021_7_15_0803">';
		break;

		//Preguntas frecuentes edit = 14
		case '14':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/preg_frecuentes/preg_frecuentes_edit.css?2021_7_15_0803">';
		break;




		//costo_d_envio = 15
		case '15':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/costo_d_envio/costo_d_envio.css?2021_7_15_0803">';
		break;

		//Contacto = 16
		case '16':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/contacto/contacto.css?2021_7_15_0803">';
		break;

		//Mapa = 17
		case '17':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/mapa/mapa.css?2021_7_15_0803">';
		break;

		//Color principal = 18
		case '18':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/color/color_principal.css?2021_7_15_0803">';
		break;

		//Color principal = 19
		case '19':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/mis_datos/mis_datos.css?2021_7_15_0803">';
		break;

		//Sumar dias = 20
		case '20':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/sumar_dias/sumar_dias.css?2021_7_15_0803">';
		break;

		//Sumar dias pago = 21
		case '21':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/sumar_dias/sumar_dias_pago.css?2021_7_15_0803">';
		break;

		//Sumar dias pago confirmacion=21.1
		case '21.1':
			//css copiado literal de "mail de notificacion = 25"
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/sumar_dias/sumar_dias_pago_confirmacion.css?2021_7_15_0803">';

		break;

		//Monto mínimo = 22
		case '22':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/monto_minimo/monto_minimo.css?2021_7_15_0803">';
		break;
	
		//Descuento = 23
		case '23':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/descuento/descuento.css?2021_7_15_0803">';
		break;

		//Mail de confirmacion = 24
		case '24':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/mail_confirmacion/mail_confirmacion.css?2021_7_15_0803">';
		break;

		//Mail de notificacion = 25
		case '25':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/mail_notificacion/mail_notificacion.css?2021_7_15_0803">';
		break;

		//Contabilizar pedidos = 26
		case '26':
			//css
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/pedido/pedido.css?2021_7_15_0803">';
			//css seccion numeros de facturacion para "pedido_individual" css traido de "TI/cart"
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/pedido/facturacion.css?2021_7_15_0803">';
			//No me acuerdo
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
			//Contabilizar pedidos 26
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/contabilizar_pedidos/contabilizar_pedidos.css?2021_7_15_0803">';
		break;

		//Metodo de pago 27 
		// Mismo css que categorias
		case '27':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/categorias/categorias.css?2021_7_15_0803">';
		break;

		//Fecha de entrega 28
		// Mismo css que categorias
		case '28':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/categorias/categorias.css?2021_7_15_0803">';
		break;


		//Sumar dias msj sin dias = 29
		case '29':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/sumar_dias/sumar_dias_msj_sin_dias.css?2021_7_15_0803">';
		break;

		//Exportar a excel = 30
		case '30':
			//css
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/pedido/pedido.css?2021_7_15_0803">';
			//css seccion numeros de facturacion para "pedido_individual" css traido de "TI/cart"
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/pedido/facturacion.css?2021_7_15_0803">';
			//No me acuerdo
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
			//Contabilizar pedidos 26 - Uso el mismo css
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/contabilizar_pedidos/contabilizar_pedidos.css?2021_7_15_0803">';
		break;

		//logo = 31
		case '31':
			// css general
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/carrito/carrito.css?2021_7_15_0803">';
		break;


		//Google Analytics = 32
		case '32':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/google_analytics/google_analytics.css?2021_7_15_0803">';
		break;

		//Facebook Pixel = 33
		case '33':
			echo '<link rel="stylesheet" href="'.$routs.'lib/base/css/facebook_pixel/facebook_pixel.css?2021_7_15_0803">';
		break;
*/
	}



?>