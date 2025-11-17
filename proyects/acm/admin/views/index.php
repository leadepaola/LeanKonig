
<?php 

	include('../../server_local/conection_DB.php');

	//dispositivo_de_ingreso
	include('../php/canal.php');

	//Toma de datos bases
	//include('../php/base/get_variables.php');
	//include('../php/base/get_mis_datos.php');
	include('../php/base/get_css.php');
	//include('../php/logo/get_logo.php');
?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php 

		//VARIABLES routs 
		//index=1
		//producto=2
		//ayuda=3
		//contacto=4
		//perfil=5
		//cart=6
		$view_activa=1;

		$titulo_pagina = "ACM";
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
						A.C.M.
					</div>	


				
					
				</span>
			</div>

			<?php
				// Boton volver 
				$btn_volver_active=0;
				$descripcion_volver = 'vacio';
				include('base/btn_volver/btn_volver.php');

				include('inicio/view_inicio.php');
			?>
		
		</div>
		

	</section>









	<?php 

		include('../routs/scripts.php');

	?>


</body>
</html>