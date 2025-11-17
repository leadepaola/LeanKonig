
<?php

	include('../../server_local/google_analytics.php');
	include('../../server_local/conection_DB.php');

	//dispositivo_de_ingreso
	include('../php/canal.php');

	//Toma de datos bases
	include('../php/base/get_variables.php');
	include('../php/base/get_mis_datos.php');
	include('../php/base/get_css.php');
	include('../php/logo/get_logo.php');

	//Toma de datos mail notificacion
	//include('../php/mail_notificacion/get_mail_notificacion.php');

?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php 
		echo $google_analytics; 

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


		$view_activa=21.1;
		$titulo_pagina = "cPanel";
		$routs="./../";
		include('../routs/head.php');
	?>

</head>









<body>
	
	
	

	<?php  
		include('./base/reloader.php');

		include('../lib/base/css/style.php');

		// Get fondo oscuro con video fixeado de "Cómo funciona"
		include('./base/youtube_fixed.php');

		// Get html del header para mobile  (burguer menu y boton youtube)
		$header_menu_activo="contacto";
		include('./base/header.php');

		// get html de menu pc y mobile
		include('./base/menu_variables.php');
		include('./base/menu_pc.php');
		include('./base/menu_mob.php');
	?>





	<section class="seccion_d_trabajo_gral ">


		<?php 

			// Get html boton youtube para pc
			include('./base/youtube_header.php');

		?>
	

		<div class="work_gral padding_gral_pc">

			<span id="monto_min_titulo_switch_cont">

				<!-- section titulo -->
				<div class="work_titulo">
					Sumar días
				</div>	

			
			</span>


			<?php
				$btn_volver_active=1;
				$descripcion_volver = 'Mail de notificación';
				//include('base/btn_volver/btn_volver.php');

				include('sumar_dias/view_sumar_dias_pago_confirmacion.php');
			?>
		 

		</div>
		
	</section>









	<?php 

		include('../routs/scripts.php');

	?>


</body>
</html>