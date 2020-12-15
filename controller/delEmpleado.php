<?php 
include '../model/adminDAO.php';
// TODO: ELIMINAR AL EMPLEADO
$empleado = $_POST['id_emp']; 

$adminDAO = new AdminDAO();
$adminDAO->deleteEmpleado($empleado);

?>