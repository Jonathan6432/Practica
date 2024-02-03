<?php 
// Datos de conexion
$host= "localhost";
$dbname = "crud_php";
$user = "root";
$pass ="";
// crear conexion

$conexion=new mysqli($host,$user,$pass,$dbname);
$conexion->set_charset("utf8"); /* Permite reconocer caracateres especiales */

// verificar coenxion

if($conexion ->connect_error){
    die ("Error de conexion:".$conexion->connect_error);

}
echo "Conexion exitosa";

// Operacion con la  base de datos 


?>