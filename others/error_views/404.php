

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
		//index=404
		$view_activa=404;

		$titulo_pagina = "Noup";
		$routs="/others/error_views/";
		//$routs="./"; //borrar en server
		include('routs/head.php');
	?>

</head>



<body>

	<?php 
	
		include('lib/base/css/style.php');

	?>


	<div class="general">
		<div class="noup_logo_content">
			<div class="noup_logo_tit_cont">
				<div class="noup_logo_tit">
					LeanKönig

					<div class="noup_logo_decrip">
						<!-- Programador -->
					</div>

				</div>
				
			</div>
		</div>


		<div class="noup_desc_content">

				<div class="noup_desc_tit">
					404 || 403
				</div>
				<div class="noup_desc_desc">
					La dirección que has escrito no existe dentro de Leankonig.com.ar
					<br>
					Click en el logo para ir a inicio
				</div>

		</div>
	</div>



	<?php 
		include('routs/scripts.php');
	?>
	

</body>
</html>