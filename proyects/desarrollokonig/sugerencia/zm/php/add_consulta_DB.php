<?php
//FUENTE PARA REALIZAR INSERT:
//https://www.hostinger.com.ar/tutoriales/como-usar-php-para-insertar-datos-en-mysql/


include('database_insert.php');


$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];





// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try { 
  $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
  echo "Connected to DB successfully";
} catch (PDOException $error) {
  echo 'Connection error: ' . $error->getMessage();
}




// Here we create a variable that calls the prepare() method of the database object
// The SQL query you want to run is entered as the parameter, and placeholders are written like this :placeholder_name


$my_Insert_Statement = $my_Db_Connection->prepare($insert_consulta);



// Execute the query using the data we just defined
// The execute() method returns TRUE if it is successful and FALSE if it is not, allowing you to write your own messages here
if ($my_Insert_Statement->execute()) {
  echo "New record created successfully";
} else {
  echo "Unable to create record";
}


?>