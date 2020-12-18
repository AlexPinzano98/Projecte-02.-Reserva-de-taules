<?php 
include '../model/adminDAO.php';
// TODO: ELIMINAR AL EMPLEADO
$empleado = $_POST['id_emp']; 
echo $empleado;

$adminDAO = new AdminDAO();
$adminDAO->changeStatus($empleado);

?>