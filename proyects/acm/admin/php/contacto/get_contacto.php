<?php 




	

$sql_ = 'SELECT * FROM ti_contacto 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'

';



$result_ = $db_conection->prepare($sql_);

// Variables
$value_telefono_1 	= '';
$value_telefono_2 	= '';
$value_mail 		= '';
$value_direc 		= '';

$value_instagram  	= '';
$value_facebook  	= '';
$value_whatsapp  	= '';
$value_twitter  	= '';
$value_youtube  	= '';
$value_linkedin  	= '';
$value_pinterest  	= '';



$switch_telefono_1 	= '';
$switch_telefono_2 	= '';
$switch_mail 		= '';
$switch_direc 		= '';

$switch_instagram 	= '';
$switch_facebook 	= '';
$switch_whatsapp 	= '';
$switch_twitter 	= '';
$switch_youtube 	= '';
$switch_linkedin 	= '';
$switch_pinterest 	= '';



$icon_op_telefono_1 = '';
$icon_op_telefono_2 = '';
$icon_op_mail 		= '';
$icon_op_direc		= '';

$icon_op_instagram 	= '';
$icon_op_facebook 	= '';
$icon_op_whatsapp 	= '';
$icon_op_twitter 	= '';
$icon_op_youtube 	= '';
$icon_op_linkedin 	= '';
$icon_op_pinterest 	= '';


$txt_op_telefono_1 	= '';
$txt_op_telefono_2 	= '';
$txt_op_mail 		= '';
$txt_op_direc		= '';

$txt_op_instagram 	= '';
$txt_op_facebook 	= '';
$txt_op_whatsapp 	= '';
$txt_op_twitter 	= '';
$txt_op_youtube 	= '';
$txt_op_linkedin 	= '';
$txt_op_pinterest 	= '';

$btn_op_telefono_1 	= '';
$btn_op_telefono_2 	= '';
$btn_op_mail 		= '';
$btn_op_direc		= '';

$btn_op_instagram 	= '';
$btn_op_facebook 	= '';
$btn_op_whatsapp 	= '';
$btn_op_twitter 	= '';
$btn_op_youtube 	= '';
$btn_op_linkedin 	= '';
$btn_op_pinterest 	= '';





// Ejecuto query
if ($result_->execute()) {

	$fila_ = $result_->fetch(PDO::FETCH_ASSOC);




	// FUNCION
	// Verifico si la categoria está activa
	// Para visualizar su estado en el switch


	// Telefono 1
	if(!empty($fila_['tel_txt_1'])){
		$value_telefono_1  = 'value="'.$fila_['tel_txt_1'].'"';
	}

	if ($fila_['tel_activo_1']==1) {
		$switch_telefono_1 = 'checked="checked"';
	}else{
		$switch_telefono_1  = '';
		$icon_op_telefono_1 = 'style="opacity: .4;"';
		$txt_op_telefono_1  = 'style="opacity: .5;"';
		$btn_op_telefono_1  = 'style="opacity: .5;"';
	}



	// Telefono 2
	if(!empty($fila_['tel_txt_2'])){
		$value_telefono_2  = 'value="'.$fila_['tel_txt_2'].'"';
	}

	if ($fila_['tel_activo_2']==1) {
		$switch_telefono_2 = 'checked="checked"';
	}else{
		$switch_telefono_2  = '';
		$icon_op_telefono_2 = 'style="opacity: .4;"';
		$txt_op_telefono_2  = 'style="opacity: .5;"';
		$btn_op_telefono_2  = 'style="opacity: .5;"';
	}


	// Mail
	if(!empty($fila_['mail_txt'])){
		$value_mail  = 'value="'.$fila_['mail_txt'].'"';
	}

	if ($fila_['mail_activo']==1) {
		$switch_mail = 'checked="checked"';
	}else{
		$switch_mail  = '';
		$icon_op_mail = 'style="opacity: .4;"';
		$txt_op_mail  = 'style="opacity: .5;"';
		$btn_op_mail  = 'style="opacity: .5;"';
	}


	// Direccion
	if(!empty($fila_['direc_txt'])){
		$value_direc  = 'value="'.$fila_['direc_txt'].'"';
	}

	if ($fila_['direc_activo']==1) {
		$switch_direc = 'checked="checked"';
	}else{
		$switch_direc  = '';
		$icon_op_direc = 'style="opacity: .4;"';
		$txt_op_direc  = 'style="opacity: .5;"';
		$btn_op_direc  = 'style="opacity: .5;"';
	}







	// Instagram
	if(!empty($fila_['instagram_link'])){
		$value_instagram  = 'value="'.$fila_['instagram_link'].'"';
	}

	if ($fila_['instagram_activo']==1) {
		$switch_instagram = 'checked="checked"';
	}else{
		$switch_instagram  = '';
		$icon_op_instagram = 'style="opacity: .4;"';
		$txt_op_instagram  = 'style="opacity: .5;"';
		$btn_op_instagram  = 'style="opacity: .5;"';
	}




	// Facebook
	if(!empty($fila_['facebook_link'])){
		$value_facebook  = 'value="'.$fila_['facebook_link'].'"';
	}

	if ($fila_['facebook_activo']==1) {
		$switch_facebook = 'checked="checked"';
	}else{
		$switch_facebook  = '';
		$icon_op_facebook = 'style="opacity: .4;"';
		$txt_op_facebook  = 'style="opacity: .5;"';
		$btn_op_facebook  = 'style="opacity: .5;"';
	}


	// Whatsapp
	if(!empty($fila_['whatsapp_link'])){
		$value_whatsapp  = 'value="'.$fila_['whatsapp_link'].'"';
	}

	if ($fila_['whatsapp_activo']==1) {
		$switch_whatsapp = 'checked="checked"';
	}else{
		$switch_whatsapp  = '';
		$icon_op_whatsapp = 'style="opacity: .4;"';
		$txt_op_whatsapp  = 'style="opacity: .5;"';
		$btn_op_whatsapp  = 'style="opacity: .5;"';
	}


	// Twitter
	if(!empty($fila_['twitter_link'])){
		$value_twitter  = 'value="'.$fila_['twitter_link'].'"';
	}

	if ($fila_['twitter_activo']==1) {
		$switch_twitter = 'checked="checked"';
	}else{
		$switch_twitter  = '';
		$icon_op_twitter = 'style="opacity: .4;"';
		$txt_op_twitter  = 'style="opacity: .5;"';
		$btn_op_twitter  = 'style="opacity: .5;"';
	}



	// Youtube
	if(!empty($fila_['youtube_link'])){
		$value_youtube  = 'value="'.$fila_['youtube_link'].'"';
	}

	if ($fila_['youtube_activo']==1) {
		$switch_youtube = 'checked="checked"';
	}else{
		$switch_youtube  = '';
		$icon_op_youtube = 'style="opacity: .4;"';
		$txt_op_youtube  = 'style="opacity: .5;"';
		$btn_op_youtube  = 'style="opacity: .5;"';
	}




	// LinkedIn
	if(!empty($fila_['linkedin_link'])){
		$value_linkedin  = 'value="'.$fila_['linkedin_link'].'"';
	}

	if ($fila_['linkedin_activo']==1) {
		$switch_linkedin = 'checked="checked"';
	}else{
		$switch_linkedin  = '';
		$icon_op_linkedin = 'style="opacity: .4;"';
		$txt_op_linkedin  = 'style="opacity: .5;"';
		$btn_op_linkedin  = 'style="opacity: .5;"';
	}



	// Pinterest
	if(!empty($fila_['pinterest_link'])){
		$value_pinterest  = 'value="'.$fila_['pinterest_link'].'"';
	}

	if ($fila_['pinterest_activo']==1) {
		$switch_pinterest  = 'checked="checked"';
	}else{
		$switch_pinterest  = '';
		$icon_op_pinterest = 'style="opacity: .4;"';
		$txt_op_pinterest  = 'style="opacity: .5;"';
		$btn_op_pinterest  = 'style="opacity: .5;"';
	}





}









$html_inputs_contacto = 
'

<input type="hidden" id="id_web" 		name="id_web"		value="'.$id_web.'"			style="display:none">
<input type="hidden" id="id_cliente" 	name="id_cliente"	value="'.$id_cliente.'"		style="display:none">

';









?>