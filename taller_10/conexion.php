<?php 

function conectar(){

$servidor = "localhost";
$usuario = "root";
$database = 'mi_proyecto';
$password = "";
// Create connection
$con=mysqli_connect($servidor, $usuario, $password);

mysqli_select_db($con, $database);

return $con;

}
?>