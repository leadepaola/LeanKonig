

<?php 

	include('./server_local/conection_DB.php');
	include('./server_local/fecha_y_hora.php');
	
	//dispositivo_de_ingreso
	include('php/canal.php');

?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php 
		//echo $google_analytics; 

		
		//VARIABLES routs 
		//index=1
		$view_activa=1;

		$titulo_pagina = "Main";
		$routs="./";
		//$routs="./"; //borrar en server
		include('routs/head.php');
	?>

</head>



<body >

	

	<!-- Contenedor General -->
	<div class="pr_content_general" >

		<!-- Imagen fondo -->
		<img class="pr_content_general_img_fondo" src="./images/samsara2.jpg"> 
		<div class="pr_conent_general_filtro"></div>
	

		<!-- Contenedor secundario -->
		<div class="pr_content_secundario">
			
			<!-- Imagen de fondo -->
			<img class="pr_content_secundario_img_fondo" src="./images/samsara2.jpg"> 
			

			<!-- Imagen de perfil -->
			<div class="pr_content_img_perfil">
				<img class="pr_img_perfil" src="./images/leankonig_perfil.jpg"></img>
			</div>
		
			<!-- Titulo -->
			<div class="pr_titulo">Lean König</div>

			<a href=""></a>

			<!-- Contendor general de links -->
			<div class="pr_cotent_links">
				

				<a class="pr_link" href="./samsara.php">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/samsara_logo.jpeg"></img>

					<div class="pr_link_texto">Samsara Beach</div>	
				</a>

				<a class="pr_link" href="./sonora.php">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/sonora_logo.jpg"></img>

					<div class="pr_link_texto">Sonora Park</div>	
				</a>


			</div>


	
				

			








		</div>




	</div>










<!--
	<div class="general">
		<div class="noup_logo_content">
			<div class="noup_logo_tit_cont">
				<div class="noup_logo_tit">
					PR

					<div class="noup_logo_decrip">
						<!- Programador ->
					</div>

				</div>
				
			</div>
		</div>


		<div class="noup_desc_content">

				<div class="noup_desc_tit">
					404 || 403
				</div>
				<div class="noup_desc_desc">
					La dirección que has escrito no existe dentro de lowcostweb
					<br>
					Click en el logo para ir a inicio
				</div>

		</div>
	</div>
-->


	<?php 
		include('routs/scripts.php');
	?>
	

</body>
</html>