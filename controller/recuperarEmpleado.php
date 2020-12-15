<?php 
// TODO: RECUPERAR A LOS EMPLEADOS
include '../../services/conexion.php';
$query= "SELECT * FROM tbl_camareros";
$sentencia= $pdo->prepare($query);
$sentencia->execute();
$empleado = $sentencia->fetchAll();

?>