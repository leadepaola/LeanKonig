<?php
	
	include('database.php');
	
	$query = "SELECT * from consultas_historial ORDER BY id DESC";
	$result = mysqli_query($connection, $query);
	
	if(!$result){
		die('Query Failed') . mysqli_error($connection);
	}
	//else echo "PRODUCTOS CARGADOS CORRECTAMENTE";
	
	$json = array();

	while($row = mysqli_fetch_array($result)){
			
		$json[] = array(
			'id' => $row['id'],
			'nombre' => $row['nombre'],
			'apellido' => $row['apellido'],
			'telefono' => $row['telefono'],
			'correo' => $row['correo'],	
			'fecha' => $row['fecha'],	
			'hora' => $row['hora'],
			'dispositivo' => $row['dispositivo'],	
			'mensaje' => $row['mensaje'],	
		);	
	}

	
	$jsonString = json_encode($json);
	echo $jsonString;
	
?>