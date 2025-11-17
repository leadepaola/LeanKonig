
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
		//showicons = 4
		
		$view_activa=4;
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
						Icons
					</div>	

				</span>
			</div>


			<?php
				$btn_volver_active=1;
				$descripcion_volver = 'User a cpanel';
				include('base/btn_volver/btn_volver.php');

				//include('users/a_cpanel/view_a_cpanel.php');
			?>
		 	
			<!-- mostrar icons -->
			 
			
		
					
							
							<h5 style="margin-top:40px;margin-bottom: 20px">Bigmug Line Icons (auto)</h5>
							<div style="display:flex; flex-wrap:wrap; gap:24px; ">
								<?php
									// Ruta al archivo CSS de los iconos
									$css_file = __DIR__ . '/../lib/icons/bigmug_and_slim/icon.css';
									$bigmug_icons = [];

									if (file_exists($css_file)) {
										$css = file_get_contents($css_file);
										// Buscar todas las clases .fl-bigmug-line-xxxx:before
										preg_match_all('/\.fl-bigmug-line-([a-zA-Z0-9\-]+):before\s*\{/', $css, $matches);
										if (!empty($matches[1])) {
											$bigmug_icons = $matches[1];
										}
									}

									foreach ($bigmug_icons as $icon) {
										echo '<div style="width:100px; text-align:center; margin-bottom:20px;">
												<i class="fl-bigmug-line-'.$icon.'" style="font-size:32px;"></i>
												<div style="font-size:12px; margin-top:8px;">fl-bigmug-line-'.$icon.'</div>
											</div>';
									}
								?>
							</div>

							

		</div>
		
	</section>









	<?php 

		include('../routs/scripts.php');

	?>


</body>
</html>