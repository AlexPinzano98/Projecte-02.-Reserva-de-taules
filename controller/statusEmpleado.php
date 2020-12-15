<?php 
include '../model/adminDAO.php';
// TODO: CAMBIAR EL  STATUS DEL USUARIO
$empleado = $_POST['id_emp']; 

$adminDAO = new AdminDAO();
$adminDAO->deleteEmpleado($empleado);

?>