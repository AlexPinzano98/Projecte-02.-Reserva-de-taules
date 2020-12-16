<?php 
// TODO: RECUPERAR LAS SALAS
include '../../services/conexion.php';
$query= "SELECT * FROM tbl_salas";
$sentencia= $pdo->prepare($query);
$sentencia->execute();
$salas = $sentencia->fetchAll();
echo "<br><br><br><br><br><br>";
print_r($salas);
?>