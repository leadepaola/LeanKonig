

<?php 

	include('./server_local/conection_DB.php');
	include('./server_local/fecha_y_hora.php');
	include('./server_local/canal.php');
	

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
		<form class="pr_cpanel_cont_form" action="server_local/procesar_datos.php" method="post">
			
			<div class="row">

				<!-- 1 dias disponibles -->
				<div class="input-field">
					<input id="dias_disponibles" name="dias_disponibles" type="text" class="validate">
					<label for="dias_disponibles" class="active">Días Disponibles</label>
				</div>

				<!-- 2 visualizaciones -->
				<div class="input-field">
					<input id="visualizaciones" name="visualizaciones" type="number" class="validate">
					<label for="visualizaciones" class="active">Visualizaciones</label>
				</div>

				<!-- 3 consultas -->
				<div class="input-field">
					<input id="consultas" name="consultas" type="number" class="validate">
					<label for="consultas" class="active">Consultas</label>
				</div>

				<!-- 4 Direccion -->
				<div class="input-field">
					<input id="direccion" name="direccion" type="text" class="validate">
					<label for="direccion" class="active">Dirección</label>
				</div>

				<!-- 5 Barrio -->
				<div class="input-field">
					<input id="barrio" name="barrio" type="text" class="validate">
					<label for="barrio" class="active">Barrio</label>
				</div>

				<!-- 6 Valor de la propiedad -->
				<div class="input-field">
					<input id="valor_propiedad" name="valor_propiedad" type="number" class="validate">
					<label for="valor_propiedad" class="active">Valor de la propiedad</label>
				</div>

				<!-- 7 superficie total -->
				<div class="input-field">
					<input id="superficie_total" name="superficie_total" type="number" class="validate">
					<label for="superficie_total" class="active">Superficie total (m²)</label>
				</div>

				<!-- 8 Superficie cubierta -->
				<div class="input-field">
					<input id="superficie_cubierta" name="superficie_cubierta" type="number" step="0.01" class="validate">
					<label for="superficie_cubierta" class="active">Superficie cubierta (m²)</label>
				</div>

				<!-- 9 Superficie descubierta -->
				<div class="input-field">
					<input id="superficie_descubierta" name="superficie_descubierta" type="number" step="0.01" class="validate">
					<label for="superficie_descubierta" class="active">Superficie descubierta (m²)</label>
				</div>

				<!-- 10 superficie semi cubierta -->
				<div class="input-field">
					<input id="superficie_semi_cubierta" name="superficie_semi_cubierta" type="number" step="0.01" class="validate">
					<label for="superficie_semi_cubierta" class="active">Superficie semi cubierta (m²)</label>
				</div>

			</div>
			


			<!-- Botón de envío -->
			<button class="btn waves-effect waves-light pr_cpanel_form_btn" type="submit" name="action">
				Cargar
			</button>


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

		<div class="btn pr_cpanel_btn_refres" onclick="window.location.reload();">
			<div class="pr_cpanel_btn_refres_txt">Recargar página</div>
		</div>
	
	</div>





	<?php 
		include('routs/scripts.php');
	?>
	

</body>
</html>