





<!-- Agregar nueva categoria -->
<div class="index_filas_cont" id="preg_frec_add_gral_cont">

	<div class="row">

		<!-- Filas -->
		<div class="input-field col s12 " >
        	<input id="nueva_pregunta" type="text" >
        	<label for="nueva_pregunta">Título de nueva pregunta</label>

        </div>



        <div class="input-field col s12" id="preg_frec_add_input_respuesta">
        	<textarea id="nueva_respuesta" class="materialize-textarea" data-length="5000"></textarea>
        	<label for="nueva_respuesta">Anotacion</label>
        </div>



        <!-- Boton de accion -->
        <span class="col s12 preg_frec_add_btn_cont">
        	
                <?php //echo $html_inputs_web_cliente ?>
                <!-- <input type="hidden" id="dominio"       name="dominio"  <?php echo 'value="'.$dominio.'"' ?> > -->
                
        	<div class="col s0 m8"></div>

        	<div class="col s12 m4 index_btn_accion" id="">
        		Crear pregunta
        	</div>

        </span>




	</div>
</div>

