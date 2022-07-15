<?php
	
	include('database.php');
	
	$query = "SELECT * from pedidos_historial ORDER BY id DESC";
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
			'telefono' => $row['telefono'],
			'correo' => $row['correo'],
			'instagram' => $row['instagram'],
			'localidad' => $row['localidad'],		
			'direccion' => $row['direccion'],	
			'fecha' => $row['fecha'],	
			'hora' => $row['hora'],
			'dispositivo' => $row['dispositivo'],	
			'estado' => $row['estado'],	
			'mensaje' => $row['mensaje'],	
			'lista_productos' => $row['lista_productos'],	
		);	
	}

	
	$jsonString = json_encode($json);
	echo $jsonString;
	
?>