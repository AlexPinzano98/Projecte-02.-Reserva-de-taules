<?php 
include '../model/adminDAO.php';
$name = $_POST['name'];
$email = $_POST['email'];
$psswd = $_POST['password'];
$perfil = $_POST['perfil'];


// TODO: AÑADIR AL EMPLEADO

$adminDAO = new AdminDAO();
$adminDAO->registrarEmpleado($name,$email,$psswd,$perfil);

?>