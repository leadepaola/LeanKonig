

<?php 

	//echo "404 <br />";


	//include('./server_local/google_analytics.php');

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
		$view_activa=2;

		$titulo_pagina = "Samsara Beach";
		$routs="./";
		//$routs="./"; //borrar en server
		include('routs/head.php');
	?>

</head>



<body >

	

	<!-- Contenedor General -->
	<div class="pr_content_general" >


		<!-- Boton volver -->
		<a class="pr_btn_volver" href="javascript:history.back(-1);">
			<img src="./images/icon/flecha-izquierda.png">
		</a>



		<!-- Imagen fondo -->
		<img class="pr_content_general_img_fondo" src="./images/samsara2.jpg"> 
		<div class="pr_conent_general_filtro"></div>
	

		<!-- Contenedor secundario -->
		<div class="pr_content_secundario">
			
			<!-- Imagen de fondo -->
			<img class="pr_content_secundario_img_fondo" src="./images/samsara2.jpg"> 
			

			<!-- Imagen de perfil -->
			<div class="pr_content_img_perfil">
				<img class="pr_img_perfil" src="./images/samsara_logo.jpeg"></img>
			</div>
		
			<!-- Titulo -->
			<div class="pr_titulo">Lean König</div>

			<a href=""></a>

			<!-- Contendor general de links -->
			<div class="pr_cotent_links">
				
				<!-- Link -->
				<a class="pr_link" href="https://venti.com.ar/evento/samsara-beach-s-bado-25-01">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/samsara_logo.jpeg"></img>

					<div class="pr_link_texto">Jueves 16.01</div>	
				</a>


				<!-- Link -->
				<a class="pr_link" href="https://venti.com.ar/evento/samsara-beach-s-bado-25-01">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/samsara_logo.jpeg"></img>

					<div class="pr_link_texto">Viernes 17.01</div>	
				</a>

				<!-- Link -->
				<a class="pr_link" href="https://venti.com.ar/evento/samsara-beach-s-bado-25-01">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/samsara_logo.jpeg"></img>

					<div class="pr_link_texto">Sábado 18.01</div>	
				</a>

				<!-- Link -->
				<a class="pr_link" href="https://venti.com.ar/evento/samsara-beach-s-bado-25-01">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/samsara_logo.jpeg"></img>

					<div class="pr_link_texto">Domingo 19.01</div>	
				</a>

				<!-- Link -->
				<a class="pr_link" href="https://venti.com.ar/evento/samsara-beach-s-bado-25-01">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/samsara_logo.jpeg"></img>

					<div class="pr_link_texto">Lunes 20.01</div>	
				</a>

				<!-- Link -->
				<a class="pr_link" href="https://venti.com.ar/evento/samsara-beach-s-bado-25-01">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/samsara_logo.jpeg"></img>

					<div class="pr_link_texto">Martes 21.01</div>	
				</a>

				<!-- Link -->
				<a class="pr_link" href="https://venti.com.ar/evento/samsara-beach-s-bado-25-01">
					<div class="pr_link_transparencia"></div>				

					<img class="pr_link_logo" src="./images/samsara_logo.jpeg"></img>

					<div class="pr_link_texto">Miércoles 22.01</div>	
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