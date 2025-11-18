<?php 



// LINKs

//Dominio
$a_cp_dominio = 				'href="https://"';
//cpanel
$a_cp_index = 					'href="index.php"';


//Herramientas
$a_cp_nuevo_acm =				'href="nuevo_acm.php"';
$a_cp_acm_ya_creados =			'href="acm_ya_creados.php"';


//$a_cp_users_a_cpanel =			'href="users_a_cpanel.php"';
//$a_cp_show_icons = 				'href="show_icons.php"';





/*
$a_cp_mensajes =				'href="mensajes_general.php&filtro=2"';
	
// Configuracion
$a_cp_logo =					'href="logo.php"';
$a_cp_banners =					'href="banners.php"';
$a_cp_carrito =					'href="carrito.php"';
$a_cp_categorias =				'href="categorias.php"';
$a_cp_productos =				'href="productos.php"';
$a_cp_costo_d_envio =			'href="costo_de_envio.php"';
$a_cp_metodo_d_pago =			'href="metodo_d_pago.php"';
$a_cp_fecha_d_entrega =			'href="fecha_d_entrega.php"';
$a_cp_preg_frec =				'href="preguntas_frecuentes.php"';
$a_cp_contacto =				'href="contacto.php"';
$a_cp_mapa =					'href="mapa.php"';
$a_cp_mail_confirm =			'href="mail_confirmacion.php"';
$a_cp_mail_notific =			'href="mail_notificacion.php"';
$a_cp_monto_minimo =			'href="monto_minimo.php"';
$a_cp_descuento =				'href="descuento.php"';
$a_cp_color =					'href="color_principal.php"';

//Métricas
$a_cp_contab_pedidos =			'href="contabilizar_pedidos.php&filtro_estado=0&filtro_zona=0"';
$a_cp_exportar_a_excel =		'href="exportar_a_excel.php&filtro_estado=0&filtro_zona=0"';

//Sincronizaciones
$a_cp_google_analytics =		'href="google_analytics.php"';
$a_cp_facebook_pixel =			'href="facebook_pixel.php"';


//Cuenta
$a_cp_mis_datos =				'href="mis_datos.php"';
$a_cp_sumar_dias =				'href="sumar_dias.php"';
*/











// CLASES para sombrear menu activo en pc y mob

$class_nuevo_acm_pc 		= 'class="a_inactiva a_re"';	$class_nuevo_acm_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_acm_ya_creados_pc 	= 'class="a_inactiva a_re"';	$class_acm_ya_creados_mob 	= 'class="sidenav_a a_inactiva a_re"';

/*
$class_a_cpanel_pc 			= 'class="a_inactiva a_re"';	$class_a_cpanel_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_a_showicons_pc 		= 'class="a_inactiva a_re"';	$class_a_showicons_mob 		= 'class="sidenav_a a_inactiva a_re"';


/*
$class_pedidos_pc 			= 'class="a_inactiva a_re"';	$class_pedidos_mob 			= 'class="sidenav_a a_inactiva a_re"';
$class_mensajes_pc 			= 'class="a_inactiva a_re"';	$class_mensajes_mob 		= 'class="sidenav_a a_inactiva a_re"';

$class_logo_pc 				= 'class="a_inactiva a_re"';	$class_logo_mob 			= 'class="sidenav_a a_inactiva a_re"';
$class_banners_pc 			= 'class="a_inactiva a_re"';	$class_banners_mob 			= 'class="sidenav_a a_inactiva a_re"';
$class_carrito_pc 			= 'class="a_inactiva a_re"';	$class_carrito_mob 			= 'class="sidenav_a a_inactiva a_re"';
$class_categorias_pc 		= 'class="a_inactiva a_re"'; 	$class_categorias_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_productos_pc 		= 'class="a_inactiva a_re"'; 	$class_productos_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_costo_d_envio_pc		= 'class="a_inactiva a_re"'; 	$class_costo_d_envio_mob	= 'class="sidenav_a a_inactiva a_re"';
$class_metodo_d_pago_pc		= 'class="a_inactiva a_re"'; 	$class_metodo_d_pago_mob	= 'class="sidenav_a a_inactiva a_re"';
$class_fecha_d_entrega_pc	= 'class="a_inactiva a_re"'; 	$class_fecha_d_entrega_mob	= 'class="sidenav_a a_inactiva a_re"';
$class_preg_frec_pc 		= 'class="a_inactiva a_re"';	$class_preg_frec_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_contacto_pc 			= 'class="a_inactiva a_re"';	$class_contacto_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_mapa_pc 				= 'class="a_inactiva a_re"';	$class_mapa_mob 			= 'class="sidenav_a a_inactiva a_re"';
$class_mail_confirm_pc 		= 'class="a_inactiva a_re"';	$class_mail_confirm_mob	 	= 'class="sidenav_a a_inactiva a_re"';
$class_mail_notific_pc 		= 'class="a_inactiva a_re"';	$class_mail_notific_mob	 	= 'class="sidenav_a a_inactiva a_re"';
$class_monto_min_pc 		= 'class="a_inactiva a_re"';	$class_monto_min_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_descuento_pc 		= 'class="a_inactiva a_re"';	$class_descuento_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_color_pc 			= 'class="a_inactiva a_re"';	$class_color_mob 			= 'class="sidenav_a a_inactiva a_re"';

$class_contab_pedido_pc 	= 'class="a_inactiva a_re"';	$class_contab_pedido_mob 	= 'class="sidenav_a a_inactiva a_re"';
$class_exportar_a_excel_pc 	= 'class="a_inactiva a_re"';	$class_exportar_a_excel_mob = 'class="sidenav_a a_inactiva a_re"';

$class_google_analytics_pc 	= 'class="a_inactiva a_re"';	$class_google_analytics_mob = 'class="sidenav_a a_inactiva a_re"';
$class_facebook_pixel_pc 	= 'class="a_inactiva a_re"';	$class_facebook_pixel_mob 	= 'class="sidenav_a a_inactiva a_re"';

$class_mis_datos_pc 		= 'class="a_inactiva a_re"';	$class_mis_datos_mob 		= 'class="sidenav_a a_inactiva a_re"';
$class_sumar_dias_pc		= 'class="a_inactiva a_re"';	$class_sumar_dias_mob		= 'class="sidenav_a a_inactiva a_re"';
*/








switch ($view_activa) {
	
	case 2:		$class_nuevo_acm_pc 		= 'class="a_activa a_re"'; $class_nuevo_acm_mob			= 'class="sidenav_a a_activa a_re"';	break;
	case 3:		$class_acm_ya_creados_pc	= 'class="a_activa a_re"'; $class_acm_ya_creados_mob 	= 'class="sidenav_a a_activa a_re"';	break;

	/*
	case 2:		$class_restardias_pc 	= 'class="a_activa a_re"'; $class_restardias_mob	= 'class="sidenav_a a_activa a_re"';	break;
	case 3:		$class_a_cpanel_pc 		= 'class="a_activa a_re"'; $class_a_cpanel_mob 		= 'class="sidenav_a a_activa a_re"';	break;
	case 4:		$class_a_showicons_pc 	= 'class="a_activa a_re"'; $class_a_showicons_mob 	= 'class="sidenav_a a_activa a_re"';	break;
/*
	case 2:		$class_pedidos_pc 		= 'class="a_activa a_re"'; $class_pedidos_mob 		= 'class="sidenav_a a_activa a_re"';	break;
	case 2.5:	$class_pedidos_pc 		= 'class="a_activa a_re"'; $class_pedidos_mob 		= 'class="sidenav_a a_activa a_re"';	break;

	case 3:		$class_mensajes_pc 		= 'class="a_activa a_re"'; $class_mensajes_mob 		= 'class="sidenav_a a_activa a_re"';	break;
	case 4:		$class_mensajes_pc 		= 'class="a_activa a_re"'; $class_mensajes_mob 		= 'class="sidenav_a a_activa a_re"';	break;

	case 5:		$class_logo_pc 			= 'class="a_activa a_re"'; $class_logo_mob 			= 'class="sidenav_a a_activa a_re"';	break;

	case 6:		$class_banners_pc 		= 'class="a_activa a_re"'; $class_banners_mob 		= 'class="sidenav_a a_activa a_re"'; 	break;
	case 7:		$class_categorias_pc 	= 'class="a_activa a_re"'; $class_categorias_mob 	= 'class="sidenav_a a_activa a_re"';	break;

	case 8:		$class_productos_pc 	= 'class="a_activa a_re"'; $class_productos_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 9:		$class_productos_pc 	= 'class="a_activa a_re"'; $class_productos_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 10:	$class_productos_pc 	= 'class="a_activa a_re"'; $class_productos_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 11:	$class_productos_pc 	= 'class="a_activa a_re"'; $class_productos_mob 	= 'class="sidenav_a a_activa a_re"';	break;

	case 12:	$class_preg_frec_pc 	= 'class="a_activa a_re"'; $class_preg_frec_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 13:	$class_preg_frec_pc 	= 'class="a_activa a_re"'; $class_preg_frec_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 14:	$class_preg_frec_pc 	= 'class="a_activa a_re"'; $class_preg_frec_mob 	= 'class="sidenav_a a_activa a_re"'; 	break;
	
	case 15:	$class_costo_d_envio_pc = 'class="a_activa a_re"'; $class_costo_d_envio_mob = 'class="sidenav_a a_activa a_re"';	break;
	case 16:	$class_contacto_pc 		= 'class="a_activa a_re"'; $class_contacto_mob 		= 'class="sidenav_a a_activa a_re"';	break;
	case 17:	$class_mapa_pc 			= 'class="a_activa a_re"'; $class_mapa_mob 			= 'class="sidenav_a a_activa a_re"';	break;
	case 18:	$class_color_pc 		= 'class="a_activa a_re"'; $class_color_mob 		= 'class="sidenav_a a_activa a_re"';	break;

	case 19:	$class_mis_datos_pc 	= 'class="a_activa a_re"'; $class_mis_datos_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 20:	$class_sumar_dias_pc 	= 'class="a_activa a_re"'; $class_sumar_dias_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 21:	$class_sumar_dias_pc 	= 'class="a_activa a_re"'; $class_sumar_dias_mob 	= 'class="sidenav_a a_activa a_re"';	break;

	case 22:	$class_monto_min_pc 	= 'class="a_activa a_re"'; $class_monto_min_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 23:	$class_descuento_pc 	= 'class="a_activa a_re"'; $class_descuento_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 24:	$class_mail_confirm_pc 	= 'class="a_activa a_re"'; $class_mail_confirm_mob 	= 'class="sidenav_a a_activa a_re"';	break;
	case 25:	$class_mail_notific_pc 	= 'class="a_activa a_re"'; $class_mail_notific_mob 	= 'class="sidenav_a a_activa a_re"';	break;

	case 26:	$class_contab_pedido_pc = 'class="a_activa a_re"'; $class_contab_pedido_mob	= 'class="sidenav_a a_activa a_re"';	break;

	case 27:	$class_metodo_d_pago_pc = 'class="a_activa a_re"'; $class_metodo_d_pago_mob	= 'class="sidenav_a a_activa a_re"';	break;
	case 28:  $class_fecha_d_entrega_pc = 'class="a_activa a_re"'; $class_fecha_d_entrega_mob='class="sidenav_a a_activa a_re"';	break;

	case 29:	$class_sumar_dias_pc 	= 'class="a_activa a_re"'; $class_sumar_dias_mob 	= 'class="sidenav_a a_activa a_re"';	break;

	case 30: $class_exportar_a_excel_pc = 'class="a_activa a_re"';$class_exportar_a_excel_mob= 'class="sidenav_a a_activa a_re"';	break;

	case 31:	$class_carrito_pc		= 'class="a_activa a_re"'; $class_carrito_mob 		= 'class="sidenav_a a_activa a_re"';	break;

	case 32: $class_google_analytics_pc	= 'class="a_activa a_re"';$class_google_analytics_mob= 'class="sidenav_a a_activa a_re"';	break;
	case 33: $class_facebook_pixel_pc	= 'class="a_activa a_re"';$class_facebook_pixel_mob = 'class="sidenav_a a_activa a_re"';	break;
*/


}




?>