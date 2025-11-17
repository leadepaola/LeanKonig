<?php 

//include('../../../server_local/conection_DB.php');

// En este vector tengo todos los ids seleccionados
$ids_pedidos 	= $_POST['ids_pedidos'];

//print_r($ids_pedidos);
echo "<br><br>";










// ARMO QUERY

// 1° parte - Armo query
$sql_get_pedidos = 
'
SELECT * FROM ti_pedidos_lista_productos 

WHERE 	id_pedido		= '.	$ids_pedidos[0]		.'

';


//Variable para for
$cant_pedidos = 0;

//Recorro el array de pedido
for ($cant_pedidos=1; $cant_pedidos <count($ids_pedidos); $cant_pedidos++) { 

	// 2° parte - Armo query
	$sql_get_pedidos .= 
	'
	OR 	id_pedido		= '.	$ids_pedidos[$cant_pedidos]			.'
	';
}

// 3° parte - Armo query
$sql_get_pedidos .= 
'
ORDER BY titulo ASC
';








//echo $sql_get_pedidos;







$result_ = $db_conection->prepare($sql_get_pedidos);
$cont=0;

$metrica_resultado_id_producto 	= [];
$metrica_resultado_cantidad 	= [];
$metrica_resultado_titulo 		= [];
$metrica_resultado_unidad 		= [];

$temp_vacia = false;
$temp_x = 0;
// Ejecuto query
if ($result_->execute()) {

	while($fila_ = $result_->fetch(PDO::FETCH_ASSOC)){

		//echo "<br>";
		//echo $fila_['id_producto'].": ".$fila_['titulo'];

		//print_r($fila_);



		if(empty($metrica_resultado_titulo[$cont])){

			$temp_vacia= true;
			
		}

		if ($temp_vacia== true) {
			$metrica_resultado_id_producto[$cont] 	= $fila_['id_producto'];
			$metrica_resultado_titulo[$cont] 		= $fila_['titulo'];
			$metrica_resultado_cantidad[$cont] 		= $fila_['cantidad'];
			$metrica_resultado_unidad[$cont] 		= $fila_['unidad'];

			$temp_vacia = false;
		}else{

			if ($metrica_resultado_id_producto[$cont] == $fila_['id_producto']) {

				//echo "<br>";echo "coincide";
				$metrica_resultado_cantidad[$cont] = $metrica_resultado_cantidad[$cont]+$fila_['cantidad'];

			}else{
				$cont++;
				//echo "<br>";echo "NOcoincide";
				$metrica_resultado_id_producto[$cont] 	= $fila_['id_producto'];
				$metrica_resultado_titulo[$cont] 		= $fila_['titulo'];
				$metrica_resultado_cantidad[$cont] 		= $fila_['cantidad'];
				$metrica_resultado_unidad[$cont] 		= $fila_['unidad'];
			}
		}

	}
}



$temp_medida = '';

echo "<br>";echo "<br>";
echo "Total de productos a entregar:";
echo "<br>";echo "<br>";

for ($temp_x=0; $temp_x <count($metrica_resultado_id_producto); $temp_x++) { 
	
	/*
	print_r($metrica_resultado_id_producto[$temp_x]);
	echo "<br>";
	print_r($metrica_resultado_titulo[$temp_x]);
	echo "<br>";
	print_r($metrica_resultado_cantidad[$temp_x]);
	echo "<br>";
	print_r($metrica_resultado_unidad[$temp_x]);
	echo "<br>";echo "<br>";echo "<br>";
	*/


	switch ($metrica_resultado_unidad[$temp_x]) {

		case 'Kilo':
			$temp_medida = 'Kg';
		break;

		case 'Unidad':
			$temp_medida = 'Ud';
		break;
		
	}


	print_r($metrica_resultado_cantidad[$temp_x]); echo " ".$temp_medida." de "; print_r($metrica_resultado_titulo[$temp_x]);
	echo "<br>";
}
	









































































?>