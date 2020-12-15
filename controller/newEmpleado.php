<?php 
include '../model/adminDAO.php';
echo $_POST['name']." , ".$_POST['email']." , ".$_POST['password']." , ".$_POST['perfil'];

// TODO: AÑADIR AL EMPLEADO
$empleado = $_POST['id_emp']; 

$adminDAO = new AdminDAO();
$adminDAO->registrarEmpleado();

?>