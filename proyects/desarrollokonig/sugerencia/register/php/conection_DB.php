<?php 
/*Coneccion a base de datos a traves de PDO - barrera para inpedir inyeccion sql*/
$servername = "127.0.0.1:3310";
$database = "sugerencia"; 
$username = "leandro";
$password = "leandro";

$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try { 
  $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
  //echo "Conexion a DB exitosa"."<br/>";
} catch (PDOException $error) {
  //echo 'Error de conexion. Mensaje: ' . $error->getMessage();
}


?>

