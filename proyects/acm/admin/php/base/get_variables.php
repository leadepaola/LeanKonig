<?php 



$id_web 		= $_GET['id_web'];
$id_cliente 	= $_GET['id_cliente'];

$codigo_id_web 	= '?id_web='.$id_web.'&id_cliente='.$id_cliente;

//echo $id_web;
//echo $id_cliente;



$html_inputs_web_cliente = 
'

<input type="hidden" id="id_web" 		name="id_web"		value="'.$id_web.'"		>
<input type="hidden" id="id_cliente" 	name="id_cliente"	value="'.$id_cliente.'"	>

';
