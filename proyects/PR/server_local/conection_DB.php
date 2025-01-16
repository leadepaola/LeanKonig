<?php 

/*Coneccion a base de datos a traves de PDO - barrera para inpedir inyeccion sql*/

$servername = "localhost";
$database = "u819270705_leankonig"; 
$username = "u819270705_leankonig";
$password = "MlG4Ca=g4^q";

/*
$servername = "127.0.0.1";
$database = "leankonig"; 
$username = "root";
$password = "";
*/



$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


// Create a new connection to the MySQL database using PDO, $db_conection is an object
try { 
  $db_conection = new PDO($sql, $username, $password, $dsn_Options);
  //echo "Conexion a DB exitosa"."<br/>";
} catch (PDOException $error) {
  echo 'Error de conexion. Mensaje: ' . $error->getMessage();
}


?>

