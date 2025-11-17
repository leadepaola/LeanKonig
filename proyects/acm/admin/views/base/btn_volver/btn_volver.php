<?php 





$margin_bottom_btn = '';
if(!empty($descripcion_volver)){
	$margin_bottom_btn = 'margin-bottom: 40px;';
}else{
	$margin_bottom_btn = 'margin-bottom: 58px;';

}



//VARIABLES routs 

//index = 1
//pedidos general = 2
//pedidos individual = 2.5
//mensajes_general = 3
//mensaje_individual = 4
//logo = 5

//Banners = 6
//Categorias = 7

//Productos = 8
//Productos edit = 9
//Productos individual edit = 10
//Productos individual add = 11

//Preguntas frecuentes = 12
//Preguntas frecuentes add = 13
//Preguntas frecuentes edit = 14

//Costo de envio = 15
//Contacto = 16
//Mapa = 17
//Color principal = 18


//Mis datos = 19
//Sumar dias = 20
//Sumar dias pago = 21



// Se activan rutas dependiendo de la view activa
// css
switch ($view_activa) {
	
	//pedidos individual = 2.5
	case '2.5':
		echo 
		'
		<div class="work_btn_volver_cont" style="opacity: '.$btn_volver_active.';'.$margin_bottom_btn.'">

			<div class="work_flecha_volver_cont">
				<a '.$a_cp_pedidos.' id="work_a_volver" class="a_re"> 
					<img src="../images/icon/flecha-izquierda.png" class="work_flecha_volver_img">
					Volver
				</a>
			</div>

			<div class="work_ruta_cont">
				'.$descripcion_volver.'
			</div>

		</div>
		';
	break;


	//mensaje_individual = 4
	/*
	case '4':
		echo 
		'
		<div class="work_btn_volver_cont" style="opacity: '.$btn_volver_active.';'.$margin_bottom_btn.'">

			<div class="work_flecha_volver_cont">
				<a '.$a_cp_mensajes.' id="work_a_volver" class="a_re"> 
					<img src="../images/icon/flecha-izquierda.png" class="work_flecha_volver_img">
					Volver
				</a>
			</div>

			<div class="work_ruta_cont">
				'.$descripcion_volver.'
			</div>

		</div>
		';
	break;
	*/
	//Preguntas frecuentes edit = 10
	case '10':
		echo 
		'
		<div class="work_btn_volver_cont" style="opacity: '.$btn_volver_active.';'.$margin_bottom_btn.'">

			<div class="work_flecha_volver_cont">
				<a href="productos_edit.php'.$codigo_id_web.'&id_categ=1" id="work_a_volver" class="a_re"> 
					<img src="../images/icon/flecha-izquierda.png" class="work_flecha_volver_img">
					Volver
				</a>
			</div>

			<div class="work_ruta_cont">
				'.$descripcion_volver.'
			</div>

		</div>
		';
	break;

	//Preguntas frecuentes edit = 14
	case '14':
		echo 
		'
		<div class="work_btn_volver_cont" style="opacity: '.$btn_volver_active.';'.$margin_bottom_btn.'">

			<div class="work_flecha_volver_cont">
				<a '.$a_cp_preg_frec.' id="work_a_volver" class="a_re"> 
					<img src="../images/icon/flecha-izquierda.png" class="work_flecha_volver_img">
					Volver
				</a>
			</div>

			<div class="work_ruta_cont">
				'.$descripcion_volver.'
			</div>

		</div>
		';
	break;


	default:
		echo 
		'
		<div class="work_btn_volver_cont" style="opacity: '.$btn_volver_active.';'.$margin_bottom_btn.'">

			<div class="work_flecha_volver_cont">
				<a href="javascript:history.back(-1);" id="work_a_volver" class="a_re"> 
					<img src="../images/icon/flecha-izquierda.png" class="work_flecha_volver_img">
					Volver
				</a>
			</div>

			<div class="work_ruta_cont">
				'.$descripcion_volver.'
			</div>

		</div>
		';
	break;
}



?>