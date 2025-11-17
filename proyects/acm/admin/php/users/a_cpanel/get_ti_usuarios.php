<?php 


/*
 ####  #    # ###### #####  #   # 
#    # #    # #      #    #  # #  
#    # #    # #####  #    #   #   
#  # # #    # #      #####    #   
#   #  #    # #      #   #    #   
 ### #  ####  ###### #    #   # 
*/


$sql_users_a_cpanel = 'SELECT * FROM ti_usuarios  
ORDER BY id ASC
';










/*
######      # ######  ####  #    # #####  ####  
#           # #      #    # #    #   #   #    # 
#####       # #####  #      #    #   #   #    # 
#           # #      #      #    #   #   #    # 
#      #    # #      #    # #    #   #   #    # 
######  ####  ######  ####   ####    #    #### 

 ####  #    # ###### #####  #   # 
#    # #    # #      #    #  # #  
#    # #    # #####  #    #   #   
#  # # #    # #      #####    #   
#   #  #    # #      #   #    #   
 ### #  ####  ###### #    #   # 
 */



$result_users_a_cpanel = $db_conection->prepare($sql_users_a_cpanel);

// Variable
$html_lista_users_a_cpanel = '';



// Comienza la funcion 
/*
if ($result_users_a_cpanel->execute()) {


	while($fila_user = $result_users_a_cpanel->fetch(PDO::FETCH_ASSOC)){


		// Busco el color principal de ese user
		$sql_color = 'SELECT * FROM ti_css
		WHERE 	id_web 		= '.$fila_user['id_web'].'
		';

		$result_color = $db_conection->prepare($sql_color);

		if ($result_color->execute()) {

			$fila_color = $result_color->fetch(PDO::FETCH_ASSOC);

			$temp_color_principal = $fila_color['color_principal'];
		} 




		// Si el usuario es free2 oculto los dias disponibles
		// Porque ya se saben que son 1000 predeterminado
		if ($fila_user['tipo_user']=="free2") {
			$temp_color_dias_disp 		= 'style="color:transparent"';
			$temp_color_dias_disp_txt 	= 'style="color:transparent"';
		}else{
			$temp_color_dias_disp 		= 'style="color:'.$fila_color['color_principal'].'"';
			$temp_color_dias_disp_txt 	= 'style="color:#777777"';
		}




	

		




		$html_lista_users_a_cpanel .= 
		'

		<a class="index_cont_lista a_re" href="../php/users/a_cpanel/ingresar_a_cpanel.php?id_web='.$fila_user['id_web'].'&id_cliente='.$fila_user['id_cliente'].'" >
			
			<!-- Sector 1 -->
			<span class="col s12" id="sumar_dias_fila_sector_1_cont">

				<div class="col s1 index_item_lista" id="sumar_dias_icon_cont">	
					<div class="contacts-modern-icon fl-bigmug-line-user144 " id="sumar_dias_icon" ></div>
				</div>


				<div class="col s11 index_item_lista padding_left_5" id="sumar_dias_tit_cont">	
					
					<span class="sumar_dias_tit" style="color:'.$fila_color['color_principal'].'">
						'.$fila_user['user'].' - '.$fila_user['id_web'].'					
					</span>

				</div>


			</span>


			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>


			<!-- Sector 2 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				<div class="col s5 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span>
						Pass: 
					</span>

				</div>

				<div class="col s6 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span>
						'.$fila_user['contrasena'].'
					</span>

				</div>

			</span>

			<!-- Sector 3 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				
				<div class="col s5 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span>
						Tipo user: 
					</span>

				</div>

				<div class="col s6 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
					<span>
						<strong id="user_cpanel_txt_id_web">
							'.$fila_user['tipo_user'].'
						</strong>
					</span>

				</div>

			</span>


			<!-- Separador -->
			<span class="col s1" id="sumar_dias_fila_sector_separacion_A"></span>
			<span class="col s11" id="sumar_dias_fila_sector_separacion_B"></span>

			<!-- Sector 4 -->
			<span class="col s12" id="sumar_dias_fila_sector_2_cont">

				<div class="col s1"></div>


				
				<div class="col s5 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
				

					<span '.$temp_color_dias_disp_txt.' >
						Días disponibles: 
					</span>

				</div>

				<div class="col s6 index_item_lista padding_left_5" id="sumar_dias_txt">	
					
				

				</div>

			</span>



			



			<!-- Sector 5 -->
			<span class="col s12" id="sumar_dias_fila_sector_3_cont">

				<div class="col s1"></div>


				<div class="col s8 index_item_lista padding_left_5" id="sumar_dias_precio_cont">	
					
					<span class="sumar_dias_precio" id="user_cpanel_txt_dias_disp">
						 
					</span>

				</div>

				<div class="col s3 index_item_lista padding_left_5" id="sumar_dias_precio_cont">	
					
					<span class="sumar_dias_precio" '.$temp_color_dias_disp_txt.'>
						'.$fila_user['dias_disp'].'		
					</span>

				</div>

			</span>


		

		</a>


			


		';



		










	}

}

*/


















?>