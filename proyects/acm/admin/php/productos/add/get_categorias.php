<?php 





// FUNCION 
// Tomo las categorias y las coloco en el select

$sql_ = 'SELECT * FROM ti_categorias 

WHERE id_web 	= '.	$id_web			.' 
AND id_cliente 	= '.	$id_cliente		.'

ORDER BY id ASC
';



$result_categorias = $db_conection->prepare($sql_);

// Variables
$html_prod_add_categorias = '';
$temp_categ_select = '';


// Ejecuto query
if ($result_categorias->execute()) {

	while($fila_categorias = $result_categorias->fetch(PDO::FETCH_ASSOC)){


		$html_prod_add_categorias .= 
		'
			<option  value="'.$fila_categorias['id'].'" >  '.$fila_categorias['categoria'].'  </option>
		';
			
	}
}



























?>