

<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="mis_datos_cont">

	<div class="row">




		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Dominio
		</div>

		<!-- Fila -->
		<span class="col s12">

			<!-- Dominio -->
			<div class="input-field col s12 m12">
	        	<input disabled id="last_name" type="text" class="validate" <?php echo 'value="'.$fila_mis_datos['dominio'].'"' ?>  >
	        	<label for="last_name"></label>
	        </div>

		</span>









		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Datos personales 
		</div>

		<!-- Fila -->
		<span class="col s12">

			<!-- Nombre -->
			<div class="input-field col s5 ">
	        	<input disabled id="last_name" type="text" class="validate" <?php echo 'value="'.$fila_mis_datos['nombre'].'"' ?>  >
	        	<label for="last_name"></label>
	        </div>

	        <div class="col s2"></div>

	        <!-- Apellido -->
			<div class="input-field col s5 ">
	        	<input disabled id="last_name" type="text" class="validate" <?php echo 'value="'.$fila_mis_datos['apellido'].'"' ?> >
	        	<label for="last_name"></label>
	        </div>




	        <!-- DNI -->
			<div class="input-field col s5 ">
	        	<input disabled id="last_name" type="text" class="validate" <?php echo 'value="'.$fila_mis_datos['dni'].'"' ?> >
	        	<label for="last_name"></label>
	        </div>

	        <div class="col s2"></div>

	        <!-- Teléfoono -->
			<div class="input-field col s5 ">
	        	<input disabled id="last_name" type="text" class="validate" <?php echo 'value="'.$fila_mis_datos['telefono'].'"' ?> >
	        	<label for="last_name"></label>
	        </div>



	         <!-- email -->
			<div class="input-field col s12 ">
	        	<input disabled id="last_name" type="text" class="validate" <?php echo 'value="'.$fila_mis_datos['mail'].'"' ?>  >
	        	<label for="last_name"></label>
	        </div>

		</span>










		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Datos de usuario 
		</div>

		<!-- Fila -->
		<span class="col s12">

			<!-- user -->
			<div class="input-field col s5 ">
	        	<input disabled id="last_name" type="text" class="validate"  <?php echo 'value="id cliente: '.$fila_mis_datos['id_cliente'].'"' ?>  >
	        	<label for="last_name"></label>
	        </div>

	        <div class="col s2"></div>

	        <!-- web -->
			<div class="input-field col s5 ">
	        	<input disabled id="last_name" type="text" class="validate"  <?php echo 'value="id web: '.$fila_mis_datos['id_web'].'"' ?>  >
	        	<label for="last_name"></label>
	        </div>

		</span>







	</div>

</div>



