
<?php 

	include('../../server_local/conection_DB.php');

	//dispositivo_de_ingreso
	include('../php/canal.php');

	//Toma de datos bases
	//include('../php/base/get_variables.php');
	//include('../php/base/get_mis_datos.php');
	include('../php/base/get_css.php');
	//include('../php/logo/get_logo.php');

	//Toma de datos users a cpanel
	include('../php/users/a_cpanel/get_ti_usuarios.php');

?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php 

		//VARIABLES routs 
		
		//index = 1
		//restar_dias = 2
		//users_a_cpanel = 3
		
		$view_activa=3;
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

			<div class="row">
				<span class="col s12" id="mapa_titulo_switch_cont">

					<!-- section titulo -->
					<div  class="col s12 m6 work_titulo" id="cuenta_work_titulo">
						Lista de ACMs
					</div>	

				</span>
			</div>


			<?php
				$btn_volver_active=1;
				$descripcion_volver = 'ACM ya creados';
				include('base/btn_volver/btn_volver.php');

				include('users/a_cpanel/view_a_cpanel.php');
			?>
		 

		</div>
		
	</section>









	<?php 

		include('../routs/scripts.php');

	?>


</body>
</html>