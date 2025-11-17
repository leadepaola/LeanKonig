







<!-- Lista de productos de pedido -->
<div class="index_filas_cont max_w_500" >

	<div class="row">

		




		<!-- PAGO contenedor -->
		<div class="col s12  index_cont_lista" >
			






			<!-- Sector 1 -->
			<span class="col s12" id="sumar_dias_fila_sector_1_cont">

				<div class="col s1 m1 index_item_lista" id="sumar_dias_icon_cont">	
					<div class="contacts-modern-icon fl-bigmug-line-shopping198 " id="sumar_dias_icon"></div>
				</div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_tit_cont">	
					
					<span class="sumar_dias_tit">
						<?php echo $titulo ?>					
					</span>

				</div>


				<div class="col s1 m3"></div>

			</span>


			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>


			<!-- Sector 2 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1 m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span class="col s4">Detalle</span>
					<span class="col s8">Adquirirás</span>

				</div>

				<div class="col s1 m3"></div>

			</span>

			<!-- Sector 3 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1 m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span class="col s4">Cantidad</span>
					<span class="col s8"><?php echo $dias_a_sumar ?> días</span>

				</div>


				<div class="col s1 m3"></div>

			</span>


			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>







			<!-- Sector 3 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1 m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span class="col s4">Subtotal</span>
					<span class="col s8">$<?php echo $subtotal ?> AR</span>

				</div>


				<div class="col s1 m3"></div>

			</span>

			<!-- Sector 4 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1  m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span class="col s4">Descuento</span>
					<span class="col s8"><?php echo $num_descuento ?>% (-$<?php echo $porcent_descuent ?>)</span>

				</div>


				<div class="col s1  m3"></div>

			</span>



			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>

			<!-- Linea Negra separadora -->
			<span class="col s1  m1"></span>
			<span class="col s10 m7" id="sumar_dias_pago_fila_linea_separadora"></span>
			<span class="col s1  m3"></span>

			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>



			<!-- Precio -->
			<span class="col s12" id="sumar_dias_fila_sector_3_cont">

				<div class="col s1  m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_precio_cont">	
					
					<span class="sumar_dias_precio">
						$<?php echo $total ?> AR					
					</span>

				</div>



				<div class="col s1  m3"></div>

			</span>



			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>



			<!-- Sector 5 --			
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1  m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_pago_mp_txt_cuotas">	
					
					<span class="col s12">Pagá en 6 cuotas sin interés</span>

				</div>


				<div class="col s1  m3"></div>

			</span>


			<!- Sector 6 Imagenes de tarjetas --
			<span class="col s12" id="sumar_dias_fila_sector_6_cont">

				<div class="col s1  m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_pago_mp_txt_cuotas">	
					
					<img class="sumar_dias_pago_img_tarjetas" src="../images/mp/logos_tarjetas/mercadopago.svg" alt="">

					<img class="sumar_dias_pago_img_tarjetas" src="../images/mp/logos_tarjetas/visa.svg" alt="visa">
                    <img class="sumar_dias_pago_img_tarjetas" src="../images/mp/logos_tarjetas/mastercard.svg" alt="">
                    <img class="sumar_dias_pago_img_tarjetas" src="../images/mp/logos_tarjetas/cabal.svg" alt="" id="tarj_cabal">
                    <img class="sumar_dias_pago_img_tarjetas" src="../images/mp/logos_tarjetas/amex.svg" alt="">
                    <img class="sumar_dias_pago_img_tarjetas" src="../images/mp/logos_tarjetas/tarjeta-naranja.svg" alt="">

				</div>


				<div class="col s1 m3"></div>

			</span>



			<!- Sector 7 --
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1  m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" >	
					
					<a class="col s12" href="https://www.mercadopago.com.ar/cuotas" id="sumar_dias_pago_mp_txt_masinfo" target="_blank">Más informacion</a>

				</div>


				<div class="col s1  m3"></div>

			</span>










			<!-
				
			#    # ###### #####   ####    ##   #####   ####  
			##  ## #      #    # #    #  #  #  #    # #    # 
			# ## # #####  #    # #      #    # #    # #    # 
			#    # #      #####  #      ###### #    # #    # 
			#    # #      #   #  #    # #    # #    # #    # 
			#    # ###### #    #  ####  #    # #####   ####  
			                                                 
			                            
			#####    ##    ####   ####  
			#    #  #  #  #    # #    # 
			#    # #    # #      #    # 
			#####  ###### #  ### #    # 
			#      #    # #    # #    # 
			#      #    #  ####   #### 

			--

			<!- Sector 8 Boton Pagar --
			<span class="col s12" id="sumar_dias_fila_sector_8_cont">

				<div class="col s1 m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" >	
					
					<form class="col s12" action="<?php echo $link_regreso; ?>" method="POST">
          
		            	<script
			            src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
			            data-preference-id="<?php echo $preference->id; ?>"
			            data-button-label="Pagar"
		            	>
			            </script>
		          
		          	</form>

				</div>


				<div class="col s1 m3"></div>

			</span>

			










			
			<!- Sector 9 --
			<span class="col s12" id="sumar_dias_fila_sector_9_cont">

				<div class="col s1  m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_pago_mp_txt_compra_protegida_cont">	
					
					<span class="fl-bigmug-line-lock64" id="pago_icon_seguridad"></span>

				
					<a class="" href="https://www.mercadopago.com.ar/ayuda/dinero-seguridad-compras_283" target="_blank" id="sumar_dias_pago_mp_txt_masinfo">Compra Protegida</a>
					

				
					, 100% Segura a través de Mercado pago
				

				</div>


				<div class="col s1 m3"></div>

			</span>


			-->




			<!-- Sector 2 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont" style="height: auto;margin-bottom: 20px;">

				<div class="col s1 m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<div class="col s12" style="height: 100%;">Momentaneamente se reciben pagos por transferencia Bancaria. Al realizarla notificar por whatsapp para que se sumen los días correspondientes</div>
					
					<br>

				</div>

				<div class="col s1 m3">
			
					
				</div>

			</span>


			<!-- Sector 2 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont" style="height: auto;">

				<div class="col s1 m1"></div>


				<div class="col s10 m7 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<div class="col s12" style="height: 100%;">
					Datos: <br>
					Titular: Leandro Gabriel De Paola <br>
					CUIT/CUIL: 20 - 37139635 - 8 <br>
					Alias: web.tienda.virtual <br>
					CBU: 14300017 - 13003651200012 <br>
					NRO. CUENTA: 1300365120001 <br>
 
					</div>
					
					<br>

				</div>

				<div class="col s1 m3">
		
					
				</div>

			</span>




		</div>






	</div>

</div>