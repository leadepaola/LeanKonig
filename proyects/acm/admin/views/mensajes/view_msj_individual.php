









<!-- Lista de productos de pedido -->
<div class="index_filas_cont" >

	<div class="row">


		<!-- titulo de seccion-->
		<div class="col s12 index_tit_lista">
			Datos del mensaje
		</div>

		<!-- Filas -->
		<div class="col s12 index_cont_lista msj_indi_cont_lista">
			
			<div class="col s12  m6 l6 index_item_lista">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/avatar.png" class="index_iteam_icon_img" alt=""> 
				</span>
				<span class="msj_item_txt">
					<?php echo $fila_msj['nombre'] ?>			
				</span>
			</div>


			<div class="col s4 m2 l2 index_item_lista msj_hora_fecha_disp_pc" id="msj_fila_item_hora">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/time.png" class="index_iteam_icon_img" alt=""> 
				</span>
				<?php echo $fila_msj['hora'] ?>		
			</div>

			<div class="col s4  m2 l2 index_item_lista msj_hora_fecha_disp_pc" >
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/calendar.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					<?php echo $fila_msj['fecha'] ?>					
				</span>
			</div>

			<div class="col s4  m2 l2 index_item_lista msj_hora_fecha_disp_pc" >
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/disp.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					<?php echo $fila_msj['dispositivo'] ?>						
				</span>
			</div>

			<div class="col s12  m6 l6 index_item_lista">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/mail.png" class="index_iteam_icon_img" alt=""> 
				</span>
				<span class="msj_item_txt">
					<?php echo $fila_msj['email'] ?>					
				</span>
			</div>

			<div class="col s12  m6 l6 index_item_lista" >		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/phone.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					<?php echo $fila_msj['telefono'] ?>						
				</span>
			</div>














			<div class="col s4 m2 l2 index_item_lista msj_hora_fecha_disp_mob" id="msj_fila_item_hora">		
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/time.png" class="index_iteam_icon_img" alt=""> 
				</span>
				<?php echo $fila_msj['hora'] ?>	
			</div>

			<div class="col s4  m2 l2 index_item_lista msj_hora_fecha_disp_mob" >
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/calendar.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					<?php echo $fila_msj['fecha'] ?>						
				</span>
			</div>

			<div class="col s4  m2 l2 index_item_lista msj_hora_fecha_disp_mob" >
				<span class="index_item_icon_cont">
					<img src="../images/icon/cpanel/disp.png" class="index_iteam_icon_img" alt=""> 
				</span>
				
				<span class="msj_item_txt">
					<?php echo $fila_msj['dispositivo'] ?>						
				</span>
			</div>












			<div class="col s12 index_cont_lista msj_indi_cont_lista" id="msj_indi_cont_lista">
				
				<div class="col s12   index_item_lista" id="msj_item_lista">		
					<span class="index_item_icon_cont" id="msj_item_icon_cont">
						<img src="../images/icon/cpanel/charla.png" class="index_iteam_icon_img" alt=""> 
					</span>
					<span class="msj_item_txt">
						<?php echo $fila_msj['mensaje'] ?>					
					</span>
				</div>
				
			</div> 












	</div>

</div>


