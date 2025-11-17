<?php 


include('../../base/get_variables.php');


// Declaro Variables para link
// Si es 0(cero) Significa que no se seleccionó nada
// Por lo que se toma como filtro "todos"
$estado 	= '';
$id_zona 	= 0;


// Verifico si hay estado seleccionado
if (isset($_POST['estado'])) {
	$estado = $_POST['estado'];
}

// Verifico si hay zona de entrega seleccionada
if (isset($_POST['zona'])) {
	$id_zona = $_POST['zona'];
}

// Link
header('location: ../../../views/contabilizar_pedidos.php'.$codigo_id_web.'&filtro_estado='.$estado.'&filtro_zona='.$id_zona);


?>