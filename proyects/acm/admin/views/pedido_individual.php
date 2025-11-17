
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

	//Toma de datos pedidos
	include('../php/pedidos/get_pedidos_individual.php');
?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php 
		echo $google_analytics; 

		//VARIABLES routs 
		//index=1
		//pedidos general = 2
		//pedidos individual = 2.5
		
		//mensajes_general=3
		//mensaje_individual=4
		$view_activa=2.5;

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
				Pedido
			</div>	



			<?php
				// btn_volver 1 se muestra, 0 no se muestra
				$btn_volver_active=1;
				$descripcion_volver = 'Pedidos / Pedido - ID '.$fila__data_facturacion['id_pedido'];
				include('base/btn_volver/btn_volver.php');

				include('pedidos/view_individual.php');
			?>
		
		</div>
		

	</section>









	<?php 

		include('../routs/scripts.php');

	?>


</body>
</html>