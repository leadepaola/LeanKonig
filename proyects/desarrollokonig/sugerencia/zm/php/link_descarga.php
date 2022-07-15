<?php
	
	include('database.php');
	
	$query = "SELECT * from link_descarga ORDER BY id";
	$result = mysqli_query($connection, $query);
	
	if(!$result){
		die('Query Failed') . mysqli_error($connection);
	}
	//else echo "PRODUCTOS CARGADOS CORRECTAMENTE";
	
	$json = array();

	while($row = mysqli_fetch_array($result)){
			
		$json[] = array(
			'id' => $row['id'],
			'activo' => $row['activo'],
			'texto' => $row['texto'],
			'link' => $row['link'],
		);	
	}

	
	$jsonString = json_encode($json);
	echo $jsonString;
	
?>