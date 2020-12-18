<?php 
// Aqui registranos al empleado
require_once "../../services/conexion.php";
// Recogemos los datos enviados del formulario
$fecha     = $_POST['fecha'];
$capacidad = $_POST['capacidad'];
$hora    = $_POST['hora'];
$sala      = $_POST['sala'];

$query = "SELECT * FROM tbl_mesas WHERE id_sala='$sala' AND num_sillas_mesa>='$capacidad'";
$sentencia = $pdo->prepare($query);
$sentencia->execute();
$mesas = $sentencia->fetchAll();
//print_r($mesas); 
?>
