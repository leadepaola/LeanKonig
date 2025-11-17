





<!-- Agregar nueva categoria -->
<div class="index_filas_cont" id="preg_frec_add_gral_cont">

	<div class="row">

                <!-- titulo -->
                <div class="col s12 index_tit_lista">
                        Titulo de pregunta
                </div>

                <div class="col s12 preg_frec_edit_tit_cont">
                        <textarea class="prod_indi_edit_textarea" id="preg_frec_edit_textarea_tit"><?php echo $fila_['titulo'] ?></textarea>
                </div>





                <!-- titulo -->
                <div class="col s12 index_tit_lista">
                        Respuesta
                </div>

                <div class="col s12 preg_frec_edit_resp_cont">
                        <textarea class="col s12 prod_indi_edit_textarea" id="preg_frec_edit_descipcion_textarea"><?php echo $fila_['texto'] ?></textarea>
                </div>


                


        


                <!-- Boton de accion -->
                <span class="col s12 preg_frec_edit_btn_cont">
                	
                        <?php echo $html_inputs_web_cliente ?>
                        <input type="hidden" id="id_pregunta"  name="id_pregunta"  <?php echo 'value="'.$fila_['id'].'"'; ?>   >

                	<div class="col s0 m8"></div>

        		<div class="col s12 m4 index_btn_accion" id="">
        			Actualizar pregunta
        		</div>

                </span>




	</div>
</div>

