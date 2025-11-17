
<?php 

	include('../../server_local/conection_DB.php');

	//dispositivo_de_ingreso
	include('../php/canal.php');

	//Toma de datos bases
	//include('../php/base/get_variables.php');
	//include('../php/base/get_mis_datos.php');
	//include('../php/base/verif_dias_disp.php');
	include('../php/base/get_css.php');
	//include('../php/logo/get_logo.php');

	//Toma de datos pedidos
	include('../php/restar_dias/get_restardias_general.php');

?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php 

		//VARIABLES routs 
		//index=1
		//pedidos=2
		//mensajes_general=3
		//mensaje_individual=4
		
		$view_activa=2;
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

		// Seccion de comentario de cliente a pedido individual
		include('./restar_dias/general/seccion_comentario.php');


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
				Restar días
			</div>	



			<?php
				$btn_volver_active=1;
				$descripcion_volver = 'Restar días';
				include('base/btn_volver/btn_volver.php');

				include('restar_dias/view_general.php');
			?>
		 

		</div>
		
	</section>









	<?php 

		include('../routs/scripts.php');

	?>


</body>
</html>