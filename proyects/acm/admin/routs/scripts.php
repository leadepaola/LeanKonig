





<!-- jquery 					-->
<script  src="<?php echo $routs; ?>lib/jquery/jquery-3.5.1.min.js"></script>

<!-- materealize 				-->
<script type="text/javascript" src="<?php echo $routs; 	?>lib/materialize/materialize.js"></script> 
<script type="text/javascript" src="<?php echo $routs; 	?>lib/materialize/materialize_control.js"></script> 

<!-- icons "titanic" animados 	-->
<script src="<?php echo $routs; 						?>lib/icons/titanic/titanic.js"></script>
<script type="text/javascript" src="<?php echo $routs; 	?>lib/icons/titanic/bodymovin.min.js"></script>
<script type="text/javascript" src="<?php echo $routs; 	?>lib/icons/titanic/titanic_control.js"></script>

<!-- nice-select 				-->
<script type="text/javascript" src="<?php echo $routs; 	?>lib/nice_select/jquery.nice-select.js"></script> 

<!-- Js 						-->
<script  src="<?php echo $routs; ?>lib/base/js/index.js?2021_5_14_1718"></script>






<?php 
	
	//VARIABLES routs 
	
	//index = 1
	//pedidos = 2
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
	
	//Costo de envio = 15
	//Contacto = 16
	//Mapa = 17
	//Color principal = 18

	//Mis datos = 19
	//Sumar dias = 20
	//Sumar dias pago= 21
	
	//Monto minimo = 22
	//Descuento = 23
	//Mail de confirmacion 24
	//Mail de notificacion 25

	//Contabilizar pedidos 26 

	//Metodo de pago 27 
	//Fecha de entrega 28
	//Sumar dias msj sin dias = 29
	
	//Exportar a Excel 30

	//Carrito 31

	//Google Analytics 32
	
	// Se activan rutas dependiendo de la view activa
	// js
	switch ($view_activa) {
		//index
		case '1':

		break;
		//pedidos_general
		case '2':
			echo '<script  src="'.$routs.'lib/base/js/pedidos/pedidos.js?2021_5_14_1718"></script> ';
		break;

		//pedido_individual = 2.5
		case '2.5':
			echo '<script  src="'.$routs.'lib/base/js/pedidos/pedido_individual.js?2021_5_14_1718"></script> ';
		break;
		//mensajes_general = 3
		case '3':
			echo '<script  src="'.$routs.'lib/base/js/mensajes/mensajes_general.js?2021_5_14_1718"></script> ';
		break;
		//
		case '4':
			//echo '<script  src="'.$routs.'lib/contacto/js/contacto_public.js?2021_5_14_1718"></script> ';
		break;
		//logo = 5
		case '5':
			echo '<script  src="'.$routs.'lib/base/js/logo/logo.js?2021_5_14_1718"></script> ';
		break;
		//Banners = 6
		case '6':
			echo '<script  src="'.$routs.'lib/base/js/banners/banners_general.js?2021_5_14_1718"></script> ';
		break;

		//Categorias = 7
		case '7':
			echo '<script  src="'.$routs.'lib/base/js/categorias/categorias.js?2021_5_14_1718"></script> ';
		break;

		//Productos edit = 9
		case '9':
			echo '<script  src="'.$routs.'lib/base/js/productos/edit/productos_edit.js?2021_5_14_1718"></script> ';
		break;

		//Productos individual edit = 10
		case '10':
			echo '<script  src="'.$routs.'lib/base/js/productos/edit/productos_individual_edit.js?2021_5_14_1718"></script> ';

			echo '<script> var campos_d_descuento_view = 1; </script> ';
			echo '<script  src="'.$routs.'lib/base/js/productos/productos_individual_style.js?2021_5_14_1718"></script> ';
		break;

		//Productos individual add = 11
		case '11':
			echo '<script  src="'.$routs.'lib/base/js/productos/add/productos_individual_add.js?2021_5_14_1718"></script> ';

			echo '<script> var campos_d_descuento_view = 0; </script> ';
			echo '<script  src="'.$routs.'lib/base/js/productos/productos_individual_style.js?2021_5_14_1718"></script> ';
		break;

		//Preguntas frecuentes = 12
		case '12':
			echo '<script  src="'.$routs.'lib/base/js/preg_frecuentes/preg_frecuentes.js?2021_5_14_1718"></script> ';
		break;

		//Preguntas frecuentes add = 13
		case '13':
			echo '<script  src="'.$routs.'lib/base/js/preg_frecuentes/preg_frecuentes_add.js?2021_5_14_1718"></script> ';
		break;

		//Preguntas frecuentes edit = 14
		case '14':
			echo '<script  src="'.$routs.'lib/base/js/preg_frecuentes/preg_frecuentes_edit.js?2021_5_14_1718"></script> ';
		break;

		//Costo de envio = 15
		case '15':
			echo '<script  src="'.$routs.'lib/base/js/costo_d_envio/costo_d_envio.js?2021_5_14_1718"></script> ';
		break;

		//Contacto = 16
		case '16':
			echo '<script  src="'.$routs.'lib/base/js/contacto/contacto.js?2021_5_14_1718"></script> ';
		break;
		//Mapa = 17
		case '17':
			echo '<script  src="'.$routs.'lib/base/js/mapa/mapa.js?2021_5_14_1718"></script> ';
		break;

		//Color principal = 18
		case '18':
			echo '<script  src="'.$routs.'lib/base/js/color/color_principal.js?2021_5_14_1718"></script> ';
		break;

		//Monto minimo = 22
		case '22':
			echo '<script  src="'.$routs.'lib/base/js/monto_minimo/monto_minimo.js?2021_5_14_1718"></script> ';
		break;

		//Descuento = 23
		case '23':
			echo '<script  src="'.$routs.'lib/base/js/descuento/descuento.js?2021_5_14_1718"></script> ';
		break;

		//Mail de confirmacion 24
		case '24':
			echo '<script  src="'.$routs.'lib/base/js/mail_confirmacion/mail_confirm.js?2021_5_14_1718"></script> ';
		break;

		//Mail de notificacion 25
		case '25':
			echo '<script  src="'.$routs.'lib/base/js/mail_notificacion/mail_notificacion.js?2021_5_14_1718"></script> ';
		break;


		//Metodo de pago 27 
		case '27':
			echo '<script  src="'.$routs.'lib/base/js/metodo_d_pago/metodo_d_pago.js?2021_5_14_1718"></script> ';
		break;

		//Fecha de entrega 28 
		case '28':
			echo '<script  src="'.$routs.'lib/base/js/fecha_d_entrega/fecha_d_entrega.js?2021_5_14_1718"></script> ';
		break;

		//logo = 31
		case '31':
			echo '<script  src="'.$routs.'lib/base/js/carrito/carrito.js?2021_5_14_1718"></script> ';
		break;

		//Google Analytics = 32
		case '32':
			echo '<script  src="'.$routs.'lib/base/js/google_analytics/google_analytics.js?2021_5_14_1718"></script> ';
		break;

		//Facebook Pixel = 33
		case '33':
			echo '<script  src="'.$routs.'lib/base/js/facebook_pixel/facebook_pixel.js?2021_5_14_1718"></script> ';
		break;

		//boton de redes 38
		case '38':
			echo '<script  src="'.$routs.'lib/base/js/boton_redes/boton_redes.js?2021_8_9_1404"></script> ';
		break;
	}



?>