
<?php 

	include('../../server_local/google_analytics.php');
	include('../../server_local/conection_DB.php');

	//dispositivo_de_ingreso
	include('../php/canal.php');

	//Toma de datos bases
	include('../php/base/get_variables.php');
	include('../php/base/get_mis_datos.php');
	include('../php/base/verif_dias_disp.php');
	include('../php/base/get_css.php');
	include('../php/logo/get_logo.php');
?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php 
		echo $google_analytics; 

		//VARIABLES routs 
		//index = 1
		//pedidos = 2
		//mensajes_general = 3
		//mensaje_individual = 4
		//logo = 5
		//Banners = 6
		//Categorias = 7
		//Productos = 8
		/*
		9
		10
		11
		12
		*/
		//Costo de envio = 13

		$view_activa=8;
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

			<!-- section titulo -->
			<div class="work_titulo">
				Productos
			</div>	


			<?php

				$btn_volver_active=1;
				$descripcion_volver = 'Productos';
				include('base/btn_volver/btn_volver.php');

				include('productos/view_productos.php');
			?>
		 

		</div>
		
	</section>









	<?php 

		include('../routs/scripts.php');

	?>


</body>
</html>