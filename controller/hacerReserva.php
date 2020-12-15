<?php
require_once "../model/reservasDAO.php";
// Recogemos los datos enviados del formulario
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$mesa = $_POST['id_mesa'];

$hora2 = strtotime ( '+1 hour' , strtotime ($hora) ) ;
$hora2 = date ( 'H:i' , $hora2); 
echo $hora2; // hora de salida de la reserva

$adminDAO = new ReservasDAO();
$adminDAO->hacerReserva($fecha,$hora,$mesa,$hora2);

?>   