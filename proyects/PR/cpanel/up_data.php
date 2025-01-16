

<?php 

	include('../server_local/conection_DB.php');
	include('../server_local/fecha_y_hora.php');
	include('../server_local/canal.php');
	

?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php 
		//echo $google_analytics; 

		
		//VARIABLES routs 
		//index=1
		$view_activa=1;

		$titulo_pagina = "Up data";
		$routs="./";
		//$routs="./"; //borrar en server
		include('routs/head.php');
	?>

</head>



<body >

	

	<!-- Contenedor General -->
	<div class="pr_cpanel_cont_gral">
		
		
		<!-- Contenedor secundario -->
		<form class="pr_cpanel_cont_form" action="" method="post">
			
			<div class="row">
	
				<!-- Contenedor 1er input nombre -->
				<div class="input-field">
					<input id="nombre" type="text" class="validate">
					<label for="nombre" class="active">Nombre</label> 
				</div>

				<!-- Contenedor 2do input Whatsapp -->
				<div class="input-field">
					<input id="numero_wsp"   type="text" class="validate">
					<label for="numero_wsp" class="active">Whatsapp</label>
				</div>

				<!-- Contenedor 3er input Cantidad de personas -->
				<div class="input-field">
					<input id="cantidad_d_personas"   type="text" class="validate">
					<label for="cantidad_d_personas" class="active">Cantidad de personas</label>
				</div>

			</div>
			


			<!-- Boton -->
			<div class="btn pr_cpanel_form_btn">
				<div class="pr_cpanel_form_btn_txt">Cargar</div>
			</div>


		</form>


	</div>


	<!-- preloador -->
	<div class="pr_cpanel_cont_preloader">
		
		<div class="preloader-wrapper big active">
		    <div class="spinner-layer spinner-black-only">
		      <div class="circle-clipper left">
		        <div class="circle"></div>
		      </div><div class="gap-patch">
		        <div class="circle"></div>
		      </div><div class="circle-clipper right">
		        <div class="circle"></div>
		      </div>
		    </div>
		</div>
	
	</div>





	<?php 
		include('routs/scripts.php');
	?>
	

</body>
</html>