




<!-- Agregar nueva categoria -->
<div class="index_filas_cont" >

	<div class="row">



		<!-- Filas -->
		<div class="input-field col s9 m10" >
        	<input id="nueva_categoria" type="text" >
        	<label for="nueva_categoria">Nueva categoría</label>

        	<input type="hidden" id="dominio" 	name="dominio"	<?php echo 'value="'.$dominio.'"' ?> >
			<?php echo $html_inputs_web_cliente ?>

        </div>


        <div class="col s3 m2 index_btn_add" id="index_item_img_add_cont">
			<img src="../images/icon/sumar_32.png" class="index_item_img_add" alt=""> 

		</div>


	</div>

</div>










<!-- Lista de productos de pedido -->
<div class="index_filas_cont" id="categ_filas_cont" >

	<div class="row">

		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Lista de categorías
		</div>









		<?php echo $html_categorias ?>
		<!-- Filas --
		<div class="input-field col s7 m8">
        	<input id="last_name" type="text" class="validate">
        	<label for="last_name">Frutas</label>
        </div>

        <div class="col s0"></div>

        <div class="col s3 m3 index_cont_lista ">
			
			<div class="col s12  m12 l12 index_item_lista">		
				<span >
					Actualizar					
				</span>
			</div>

		</div>

		<!- switch en fila --
		<div class="col s2 m1  index_item_switch">
			<!- Switch --
			<div class="switch ">
				<label>
			    	
			    	<input type="checkbox" checked="checked">
			    	<span class="lever"></span>
			    	
				</label>
			</div>
		</div>
		-->




















	</div>

</div>


