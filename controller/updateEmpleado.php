<?php 
include '../model/adminDAO.php';
// TODO: ACTUALIZAR AL EMPLEADO
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['correo'];
$profile = $_POST['perfil'];
// echo $_POST['id']." , ".$_POST['name']." , ".$_POST['correo']." , ".$_POST['perfil'];

$adminDAO = new AdminDAO();
$adminDAO->updateEmpleado($id,$name,$email,$profile);


?>